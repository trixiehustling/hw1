<?php
require_once 'auth.php';

$userId = checkAuth();
if (!$userId) {
    header('Location: login.php');
    exit;
}

if (!empty($_POST['product_ids']) && !empty($_POST['action'])) {
    $productIds = $_POST['product_ids'];
    $action = $_POST['action'];

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

    if ($action == 'remove') {
        $ids = implode(',', array_map('intval', $productIds));
        $query = "DELETE FROM cart WHERE user_id = $userId AND product_id IN ($ids)";
    } elseif ($action == 'order') {
        $orderTotal = 0;
        foreach ($productIds as $productId) {
            $query = "SELECT price FROM products WHERE id = $productId";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $orderTotal += $row['price'];
        }

        $query = "INSERT INTO orders (user_id, total) VALUES ($userId, $orderTotal)";
        mysqli_query($conn, $query);
        $orderId = mysqli_insert_id($conn);

        foreach ($productIds as $productId) {
            $query = "INSERT INTO order_items (order_id, product_id, quantity)
                      SELECT $orderId, product_id, quantity
                      FROM cart WHERE user_id = $userId AND product_id = $productId";
            mysqli_query($conn, $query);
        }

        $ids = implode(',', array_map('intval', $productIds));
        $query = "DELETE FROM cart WHERE user_id = $userId AND product_id IN ($ids)";
    }

    if (mysqli_query($conn, $query)) {
        header('Location: cart.php');
    } else {
        echo "Errore nell'eseguire l'azione sul carrello: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header('Location: cart.php');
}
?>
