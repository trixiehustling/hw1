<?php
require_once 'auth.php';

$userId = checkAuth();
if (!$userId) {
    header('Location: login.php');
    exit;
}

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$query = "SELECT id, status FROM orders WHERE user_id = $userId";
$res = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ordini</title>
    <link rel="stylesheet" type="text/css" href="ordini.css">
    <script src="ordini.js" defer></script>
</head>
<body>
    <header>
        <div class="uno"></div>
        <div class="due">
            <h1>I miei Ordini</h1>
        </div>
        <div class="tre">
            <nav>
                <a href="index_con_login.php">Home</a>
                <a href="favorites.php"><img src="img/heart.png" alt="Preferiti" class="icon"></a>
                <a href="cart.php"><img src="img/cart.png" alt="Carrello" class="icon"></a>
                <a href="shop.php">Shop</a>
                <a href="logout.php">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <?php if (mysqli_num_rows($res) > 0): ?>
            <table>
                <tr>
                    <th>ID Ordine</th>
                    <th>Totale</th>
                    <th>Status</th>
                    <th>Azioni</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($res)): 
                    $orderId = $row['id'];
                    $orderTotalQuery = "SELECT SUM(order_items.quantity * products.price) AS total
                                        FROM order_items 
                                        INNER JOIN products ON order_items.product_id = products.id 
                                        WHERE order_items.order_id = $orderId";
                    $orderTotalResult = mysqli_query($conn, $orderTotalQuery);
                    $orderTotalRow = mysqli_fetch_assoc($orderTotalResult);
                    $orderTotal = $orderTotalRow['total'];
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>€<?php echo number_format($orderTotal, 2); ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><button onclick="openModal(<?php echo $row['id']; ?>, <?php echo number_format($orderTotal, 2); ?>)">Dettagli</button></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>Nessun ordine presente. <a href="shop.php">Ordina ora!</a></p>
        <?php endif; 
        mysqli_close($conn);
        ?>
    </main>

    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
    </div>
</body>
</html>
