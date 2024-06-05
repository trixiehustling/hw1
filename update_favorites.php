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
        $query = "DELETE FROM favorites WHERE user_id = $userId AND product_id IN ($ids)";
    } elseif ($action == 'move') {
        foreach ($productIds as $productId) {
            $query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($userId, $productId, 1)
                      ON DUPLICATE KEY UPDATE quantity = quantity + 1";
            mysqli_query($conn, $query);
        }
        $ids = implode(',', array_map('intval', $productIds));
        $query = "DELETE FROM favorites WHERE user_id = $userId AND product_id IN ($ids)";
    }

    if (mysqli_query($conn, $query)) {
        header('Location: favorites.php');
    } else {
        echo "Errore nell'eseguire l'azione sui preferiti: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header('Location: favorites.php');
}
?>
