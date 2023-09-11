<?php

// 

if (isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['username']) and isset($_POST['password'])) {

    require_once('../model/auth.php');
    $add= new AuthController();
    $user =$add->register($_POST['name'], $_POST['mail'], $_POST['username'], $_POST['password']);
    if ($user) {
        header('Location: ../../Pages/portail.php');
    } else {
        header('Location: ../../index.php');
        exit();
    }
} else {
    echo 'Veiller replir tout les champs ...';
}
