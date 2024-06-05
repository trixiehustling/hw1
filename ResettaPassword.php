<?php
require_once 'dbconfig.php';

$status = '';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['token'])) {
    $token = $_GET['token'];

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    $query = "SELECT * FROM users WHERE reset_token = '$token'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
    } else {
        $status = 'Token non valido o scaduto.';
    }

    mysqli_close($conn);
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    $query = "SELECT * FROM users WHERE reset_token = '$token'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
        $query = "UPDATE users SET passw = '$hashed_password', reset_token = NULL WHERE reset_token = '$token'";
        if (mysqli_query($conn, $query)) {
            $status = 'Password aggiornata con successo.';
        } else {
            $status = 'Errore durante l\'aggiornamento della password.';
        }
    } else {
        $status = 'Token non valido o scaduto.';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ResettaPassword.css">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
    <script src="ResettaPassword.js" defer></script>
    <title>Reset Password</title>
</head>
<body>
    <div class="login-transition-left-to-right">
        <div id="login-wrap">
            <img src="logo.jpeg" id="logo-img" alt="">
            <h1>Resetta la tua password</h1>
            <?php if ($status): ?>
                <p><?php echo $status; ?></p>
            <?php elseif (isset($email)): ?>
                <form name="reset_form" method="post" action="reset_password.php" id="form-style">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <label for="new_password">Nuova Password</label>
                    <input type="password" required name="new_password" id="password" class="input-style" placeholder="Nuova Password">
                    <div id="password-error" class="error-style"></div>
                    <label for="confirm_password">Conferma Password</label>
                    <input type="password" required name="confirm_password" id="repeat_password" class="input-style" placeholder="Conferma Password">
                    <div id="repeat_password-error" class="error-style"></div>
                    <div>
                        <input type="checkbox" id="toggle-pswrd"> Mostra password
                    </div>
                    <input type="submit" value="Resetta Password" id="reset-button">
                </form>
            <?php else: ?>
                <p>Link di reset non valido o scaduto.</p>
            <?php endif; ?>
            <a href="index.php">Torna alla home...</a>
        </div>
    </div>
</body>
</html>
