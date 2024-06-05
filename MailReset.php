<?php
require_once 'dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(50));
        $query = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
        mysqli_query($conn, $query);

        $reset_link = "https://localhost/ResettaPassword.php?token=$token";
        $subject = "Reset della password";
        $message = "Clicca sul link per resettare la tua password: $reset_link";
        $headers = "From: no-reply@gmail.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Email inviata con successo.";
        } else {
            echo "Errore nell'invio dell'email.";
        }
    } else {
        echo "Email non trovata.";
    }

    mysqli_close($conn);
}
?>
