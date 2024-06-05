<?php 
    require_once 'ControlloLogin.php';
    if ($username = checkAuth()) {
        header("Location: index_con_login.php");
        exit;
    }
?>

<?php
if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $query = "SELECT * FROM users WHERE username = '".$username."'";

    $res = mysqli_query($conn, $query);

    if (!$res) {
        die("Query fallita: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($res) > 0) {
        $entry = mysqli_fetch_assoc($res);
        if (password_verify($_POST['password'], $entry['passw'])) {
            session_start();
            $_SESSION["_agora_username"] = $entry['username'];
            $_SESSION["_agora_user_id"] = $entry['id'];
            header("Location: index_con_login.php");
            mysqli_free_result($res);
            mysqli_close($conn);
            exit;
        }
    }
    $error = "Username e/o password errati.";
} else if (isset($_POST["username"]) || isset($_POST["password"])) {
    $error = "Inserisci username e password.";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js" defer></script>
</head>
<body>
    <div class="background-container">
        <div class="login-container">
            <div class="logo-container">
                <a href="index.php"><img src="img/dea-gold-logo.png" alt="Logo"></a>
            </div>
            <form method="post" action="login.php">
                <h2 class="login-title">Login</h2>
                <?php if(!empty($error)) echo "<p class='error'>$error</p>"; ?>
                <div class="input-container">
                    <label for="username">Nome Utente:</label>
                    <input type="text" placeholder="Nome Utente" id="username" name="username" required>
                </div>
                <div class="input-container">
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>
                <input type="submit" value="Login" class="login-button">
            </form>
            <p>Non hai un account? <a href="registrazione.php">Registrati</a></p>
            <a href = "PasswordDimenticata.php"> Hai dimenticato la password? </a>
        </div>
    </div>
</body>
</html>
