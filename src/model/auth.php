<?php
session_start();

class AuthController
{

    public $db;

    function __construct()
    {
        try {
            $connexion = new PDO('mysql:host=localhost;dbname=users', "root", '');
        } catch (Exception $e) {
            die("Error" . $e->getMessage());
        }


        $this->db = $connexion;
    }

    function register($name, $mail, $username, $password)
    {

        $_SESSION['name'] = $name;
        $_SESSION['mail'] = $mail;
        $_SESSION['user'] = $username;
        $_SESSION['password'] = md5($password);
        $stamt = $this->db->prepare("INSERT INTO users (name, mail, username, password) VALUES (?, ?, ?, ?)");

        return $stamt->execute([$name, $mail, $username, $password]);

        return true;
    }

    // end function reigister new members ......


    function Login($mail, $password)
    {
        $queery = "SELECT * FROM users WHERE mail=:mail AND password=:password";
        $stm = $this->db->prepare($queery);
        $stm->execute(
            array(
                'mail'  =>  $mail,
                'password'  =>  $password
            )

        );
        $cout=$stm->rowCount();
        if ($cout>0) {
            return true;
        }

      
    }
    // end session login user.....



}
