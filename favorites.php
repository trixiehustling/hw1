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

$query = "SELECT products.* FROM products
          JOIN favorites ON products.id = favorites.product_id
          WHERE favorites.user_id = $userId";

$res = mysqli_query($conn, $query);
$favorites = [];
while ($row = mysqli_fetch_assoc($res)) {
    $favorites[] = $row;
}

mysqli_free_result($res);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Preferiti</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
    <script src="favorites.js" defer></script>
</head>
<body>
<header>
    <h1>I miei Preferiti</h1>
    <nav>
        <a href="index_con_login.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="cart.php"><img src="img/cart.png" alt="Carrello" class="icon"></a>
        <a href="ordini.php">Ordini</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<main>
    <h2>Articoli Preferiti</h2>
    <form id="favorites-form" method="post" action="update_favorites.php">
        <button type="submit" name="action" value="remove">Rimuovi Selezionati</button>
        <button type="submit" name="action" value="move">Sposta nel Carrello</button>
        <button type="button" onclick="toggleSelectAll('favorites')">Seleziona Tutti</button>
        <div id="favorites">
            <?php if (count($favorites) > 0): ?>
                <?php foreach ($favorites as $product): ?>
                    <div class="product">
                        <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <p>€<?php echo htmlspecialchars($product['price']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Non hai articoli preferiti.</p>
            <?php endif; ?>
        </div>
    </form>
</main>
</body>
</html>
