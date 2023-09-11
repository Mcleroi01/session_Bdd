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
    <link rel="stylesheet" href="../css/register.css">
    <title>Login</title>
</head>

<body>
    <div class="contenaire">
        <form action="../src/traitement/register_controleur.php" class="form" method="post">
            <p class=""> Register</p>
            <input type="text" name="name" placeholder="write your full name" class="input">
            <input type="text" name="mail" placeholder="write your mail" class="input">
            <input type="text" name="username" placeholder="write your Username" class="input">
            <input type="password" name="password" placeholder="write your password" class="input">
            <input type="submit" value="Register" class="btn">
            <p class="cnx">Vous avez deja un compte? <a href="../index.php">Connectez-vous?</a></p>
        </form>
    </div>

    </div>

    <?php echo include '../includes/hader.php' ?>
</body>

</html>