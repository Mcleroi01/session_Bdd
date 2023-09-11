<?php


// 

if (isset($_POST['mail']) and isset($_POST['password'])) {

    require_once('../model/auth.php');
    $add= new AuthController();

    $_SESSION['Connecter'] =$add-> Login($_POST['mail'],$_POST['password']);
    if ($user) {

        $_SESSION['connecter']=$_POST['mail'];
        header('Location: ../../Pages/portail.php');


    } else {
        
        header('Location: ../../index.php');
        echo '<p>mail or password is invalid</p>';
        exit();
    }
} else {
    echo 'Veiller replir tout les champs ...';
}
