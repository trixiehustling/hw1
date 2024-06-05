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

$query = "SELECT username FROM users WHERE id = $userId";
$res = mysqli_query($conn, $query);
if ($res && mysqli_num_rows($res) > 0) {
    $user = mysqli_fetch_assoc($res);
    $username = $user['username'];
} else {
    $username = "Utente";
}

mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Store</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
    <script src="shop.js" defer></script>
</head>
<body>
    <header>
        <h1>Benvenuto, <?php echo htmlspecialchars($username); ?>!</h1>
        <nav>
            <a href="index_con_login.php">Home</a>
            <a href="favorites.php"><img src="img/heart.png" alt="Preferiti" class="icon"></a>
            <a href="cart.php"><img src="img/cart.png" alt="Carrello" class="icon"></a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <h2>Articoli Disponibili</h2>
        <div id="products"></div>
    </main>
</body>
</html>

