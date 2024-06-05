<?php
require_once 'dbconfig.php';

if (isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

    $query = "SELECT order_items.quantity, products.name, products.description, products.price, products.image_url 
              FROM order_items 
              INNER JOIN products ON order_items.product_id = products.id 
              WHERE order_items.order_id = $orderId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<h2>Dettagli Ordine</h2>';
        echo '<table>';
        echo '<tr><th>Prodotto</th><th>Quantità</th><th>Prezzo</th><th>Descrizione</th></tr>';
        $total = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $subTotal = $row['quantity'] * $row['price'];
            $total += $subTotal;
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
            echo '<td>' . htmlspecialchars($row['quantity']) . '</td>';
            echo '<td>€' . htmlspecialchars($row['price']) . '</td>';
            echo '<td>' . htmlspecialchars($row['description']) . '</td>';
            echo '</tr>';
        }
        echo '<tr><td colspan="3">Totale:</td><td>€' . $total . '</td></tr>';
        echo '</table>';
    } else {
        echo '<p>Nessun dettaglio disponibile per questo ordine.</p>';
    }

    mysqli_close($conn);
} else {
    echo '<p>Nessun ordine specificato.</p>';
}
?>
