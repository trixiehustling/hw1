

<?php

    require_once 'dbconfig.php';

 $errore = array();
if(!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["repeat_password"]) && !empty($_POST["terms"]))
{
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $repeat_password = mysqli_real_escape_string($conn, $_POST["repeat_password"]);
    
    if ($password !== $repeat_password) {
        $errore[] = "Le password non corrispondono.";
    } 
    else if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/', $password)) {
            $errore[] = "La password deve contenere almeno 8 caratteri, di cui almeno una maiuscola, una minuscola, un numero e un simbolo tra !@#$%^&*";
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errore[] = "E-mail non valida!";
    } else if (!isset($_POST["terms"])) {
        $errore[] = "Devi accettare le condizioni per procedere.";
    }
    

    else {
        $query_check1 = "SELECT * FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query_check1);

        if(mysqli_num_rows($res) > 0) {
            $errore[] = "Username già in uso.";
        } 

        $query_check2 = "SELECT * FROM users WHERE email = '$email'";
        if(mysqli_num_rows($res) > 0) {
            $errore[] = "Email già in uso.";
        }
        else {
            $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
            $query_add = "INSERT INTO users(username, email, passw) VALUES ('$username', '$email', '$passwordHashed')";
            if(mysqli_query($conn, $query_add)) {
                $id = mysqli_insert_id($conn);
                $_SESSION["user_id"] = $id;
                $_SESSION["username"] = $username;
                header("Location: index.php");
                exit;
            } else {
                $errore[] = "Errore nell'esecuzione della query: " . mysqli_error($conn);
            }
        }
    }
}   else if (isset($_POST["username"]) || isset($_POST["email"]) || isset($_POST["password"]) || isset($_POST["repeat_password"]) || isset($_POST["terms"])) {
        $error = array("Tutti i campi sono obbligatori.");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrazione.css">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
    <script src="registrazione.js" defer></script>
    <title>Registrazione DEA</title>
</head>
<body>
    <div class="background-slideshow">
        <div class="background-image" style="background-image: url('img/sfondo1.jpg');"></div>
        <div class="background-image" style="background-image: url('img/sfondo2.jpg');"></div>
        <div class="background-image" style="background-image: url('img/sfondo3.jpg');"></div>
        <div class="background-image" style="background-image: url('img/sfondo4.jpg');"></div>
    </div>
    <div class="login-transition-left-to-right">
        <div id="login-wrap">
        <div class="logo-container">
                <a href="index.php"><img src="img/dea-gold-logo.png" alt="Logo"></a>
            </div>
            <h1>Registrati ora!</h1>
            <?php if (isset($errore)) {
                foreach ($errore as $err) {
                    echo "<p class='query-error'>";
                    echo $err;
                    echo "</p>";
                }
            } ?>
            <form name="login_form" method="post" id="form-style">
                <label for="username">Username</label>
                <input type="text" required name="username" id="username" class="input-style" placeholder="Inserisci Username">
                <div id="username-error" class="error-style"></div>

                <label for="email">Email</label>
                <input type="email" required name="email" id="email" class="input-style" placeholder="Inserisci Email">
                <div id="email-error" class="error-style"></div>

                <label for="password">Password</label>
                <div class="pswrd-wrap">
                    <input type="password" required name="password" id="password" class="input-style" placeholder="Inserisci Password">
                    <img src="img/show.png" id="toggle-pswrd" alt="Toggle Password Visibility">
                </div>
                <div id="password-error" class="error-style"></div>

                <label for="repeat_password">Ripeti Password</label>
                <input type="password" required name="repeat_password" id="repeat_password" class="input-style" placeholder="Ripeti Password">
                <div id="repeat_password-error" class="error-style"></div>
                <input type="checkbox" name="terms" required id="terms-checkbox">
                <label for="terms-checkbox">Accetto le condizioni generali</label>
                <div id="terms-error" class="error-style"></div>

                <input type="submit" value="Registrati" id="send-button">
            </form>
            <a href="login.php">Sei già registrato? Clicca qui!</a>
            <a href="ForgotPassword.php">Hai dimenticato la password?</a>
            <a href="index.php">Torna alla home...</a>
        </div>
    </div>
</body>
</html>



