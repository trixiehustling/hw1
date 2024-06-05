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

$query = "SELECT products.*, cart.quantity FROM products
          JOIN cart ON products.id = cart.product_id
          WHERE cart.user_id = $userId";

$res = mysqli_query($conn, $query);
$cartItems = [];
while ($row = mysqli_fetch_assoc($res)) {
    $cartItems[] = $row;
}

mysqli_free_result($res);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrello</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
    <script src="cart.js" defer></script>
</head>
<body>
    <header>
        <h1>Il mio Carrello</h1>
        <nav>
            <a href="index_con_login.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="favorites.php"><img src="img/heart.png" alt="Preferiti" class="icon"></a>
            <a href="ordini.php">Ordini</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <h2>Articoli nel Carrello</h2>
        <form id="cart-form" method="post" action="update_cart.php">
            <button type="submit" name="action" value="remove">Rimuovi Selezionati</button>
            <button type="submit" name="action" value="order">Ordina Selezionati</button>
            <button type="button" onclick="toggleSelectAll('cart')">Seleziona Tutti</button>
            <div id="cart">
                <?php if (count($cartItems) > 0): ?>
                    <?php foreach ($cartItems as $item): ?>
                        <div class="product">
                            <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($item['id']); ?>">
                            <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                            <p><?php echo htmlspecialchars($item['description']); ?></p>
                            <p>€<?php echo htmlspecialchars($item['price']); ?> x <?php echo htmlspecialchars($item['quantity']); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Il tuo carrello è vuoto.</p>
                <?php endif; ?>
            </div>
        </form>
    </main>
</body>
</html>
