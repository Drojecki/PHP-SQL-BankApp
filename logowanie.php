<?php
session_start();
if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true)){
    header('location: ./Scripts/konto_uzytkownika.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/jpg" sizes="16x16" href="../../img/korona.jpg">
    <link rel="canonical" href="/">
    <title>LOGOWANIE</title>
    <link rel="stylesheet" type="text/css" href="Looks/style.css">
</head>
<style>
    .rejestracja {
        background: #c31616;
        font-size: 54px;
    }
</style>
<body>
<form action="Scripts/login.php" method="post">
    <h2>ZALOGUJ</h2>
    <?php
    if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php
    } ?>
    <label>Numer konta</label>
    <br><input type="text" name="Nr_konta" placeholder="Numer konta"><br>

    <label>Hasło</label>
    <br><input type="password" name="haslo" placeholder="Hasło"><br>
    <?php
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        echo '<p style="color: red;">'   . $error . '</p>';
        unset($_SESSION['error']);
    }
    ?>

    <button type="submit">Zaloguj</button>
    <a class="rejestracja"href="./Scripts/rejestracja.php">Rejestracja</a>
    <a class="rejestracja"href="https://julek.unka.pl/projekt_php_studia/Bank%20F_J/test.php">potwierdz email</a>
</form>
</body>
</html>