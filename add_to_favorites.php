<?php
require_once 'auth.php';

$userId = checkAuth();
if (!$userId) {
    echo json_encode(['message' => 'Devi essere loggato per aggiungere ai preferiti.']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
$productId = $data['product_id'];

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$query = "INSERT INTO favorites (user_id, product_id) VALUES ($userId, $productId)
          ON DUPLICATE KEY UPDATE id=id";

if (mysqli_query($conn, $query)) {
    echo json_encode(['message' => 'Prodotto aggiunto ai preferiti.']);
} else {
    echo json_encode(['message' => 'Errore nell\'aggiunta ai preferiti: ' . mysqli_error($conn)]);
}

mysqli_close($conn);
?>
