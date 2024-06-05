<?php
require_once 'dbconfig.php';

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

$query = "SELECT * FROM products";
$res = mysqli_query($conn, $query);

$products = array();
while ($row = mysqli_fetch_assoc($res)) {
    $products[] = $row;
}

echo json_encode($products);

mysqli_close($conn);
?>
