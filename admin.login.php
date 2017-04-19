<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 19/04/2017
 * Time: 16:07
 */
ob_start();
session_start();
include 'dbconnect.php';

// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
    header("Location: admin.page.php");
    exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    // prevent sql injections / clear user invalid inputs

    if(empty($email)){
        $error = true;
        $emailError = "Please enter your email address.";
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if(empty($pass)){
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

        $password = $pass; // password hashing using SHA256

        $sql_query ="SELECT userId, userName, userPass FROM admin WHERE userEmail='$email'";
        $res= mysqli_query($link, $sql_query);
        $row= $res->fetch_array();
        // if uname/pass correct it returns must be 1 row

        if( $row['userPass']&& mysqli_num_rows($res) == 1) {
            $_SESSION['user'] = $row['userId'];
            header("Location: index.php");
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }

    }

}
?>
<html>
hellow
</html>