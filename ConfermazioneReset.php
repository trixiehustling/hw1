<?php
if (isset($_GET['status']) && isset($_GET['email']) && $_GET['status'] == 'success') {
    $message = "Abbiamo mandato una email all'indirizzo " . htmlspecialchars($_GET['email']);
    $message_class = 'success';
} elseif (!isset($_GET['status']) || !isset($_GET['email'])) {
    header("Location: index.php");
    exit;
} else if (isset($_GET['status']) && isset($_GET['email']) && $_GET['status'] == 'error') {
    $message = "Errore durante l'invio dell'email di reset all'indirizzo " . htmlspecialchars($_GET['email']) . " riprova più tardi.";
    $message_class = 'error';
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ConfermazioneReset.css">
    <script src="ConfermazioneReset.js" defer></script>
    <title>Conferma</title>
</head>
<body>
    <div class="message-box <?php echo $message_class; ?>">
        <h1><?php echo $message; ?></h1>
        <p>Ti reindirizziamo alla home...</p>
    </div>
</body>
</html>
