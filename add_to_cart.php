<?php
require_once 'auth.php';

$userId = checkAuth();
if (!$userId) {
    echo json_encode(['message' => 'Devi essere loggato per aggiungere al carrello.']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
$productId = $data['product_id'];

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($userId, $productId, 1)
          ON DUPLICATE KEY UPDATE quantity = quantity + 1";

if (mysqli_query($conn, $query)) {
    echo json_encode(['message' => 'Prodotto aggiunto al carrello.']);
} else {
    echo json_encode(['message' => 'Errore nell\'aggiunta al carrello: ' . mysqli_error($conn)]);
}

mysqli_close($conn);
?>
