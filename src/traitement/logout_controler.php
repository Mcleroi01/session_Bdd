<?php 

session_start();

unset($_SESSION['Connecter']);
header('Location:../../index.php');

?>