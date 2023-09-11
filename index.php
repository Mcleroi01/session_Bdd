<?php
session_start();

if (isset($_SESSION['Connecter'])) {
    header('Location:pages/portail.php');
    exit();
}else {
    
}




?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="contenaire">

        <form action="src/traitement/login_controleur.php" class="form" method="post">
            <p>Login</p>
            <input type="email" name="mail" placeholder="write your mail" class="input" id="mail">
            <input type="password" name="password" placeholder="write your password" id="psw" class="input">
            <input type="submit" value="Login" class="btn" src="portail.php">
            <p class="cnx">Vous n'avez pas de compte? <a href="pages/register.php">Creer un compte?</a></p>

        </form>

    </div>
    <!-- footer -->
    <?php include 'includes/footer.php' ?>
</body>

</html>