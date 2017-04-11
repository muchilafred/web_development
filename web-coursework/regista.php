<?php
ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
    header("Location: index.php");
}
include 'dbconnect.php';

$error = false;

if ( isset($_POST['btn-signup']) ) {

    // clean user inputs to prevent sql injections
    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    // basic name validation
    if (empty($name)) {
        $error = true;
        $nameError = "Please enter your full name.";
    } else if (strlen($username) < 3) {
        $error = true;
        $nameError = "Name must have atleat 3 characters.";
    } else if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
        $error = true;
        $nameError = "Name must contain alphabets and space.";

    }

    // password validation
    if (empty($pass)){
        $error = true;
        $passError = "Please enter password.";
    } else if(strlen($pass) < 6) {
        $error = true;
        $passError = "Password must have atleast 6 characters.";
    }

    // password encrypt using SHA256();
    $password = hash('sha256', $pass);

    // if there's no error, continue to signup
    if( !$error ) {

        $query = "INSERT INTO users(username,pass) VALUES('$username','$password')";
        $res = mysqli_query($query);

        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully registered, you may login now";
            unset($username);
            unset($pass);
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }

    }


}
?>