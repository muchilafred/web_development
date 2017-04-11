<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 11/04/2017
 * Time: 17:23
 */
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user']) ) {
    header("location: index.php");
    exit;
}?>
//User logged in details



<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student Black Board</title>
        <style>
            div.container {
                width: 100%;
                border: 1px solid gray;
            }
            header, footer {
                padding: 1em;
                color: white;
                background-color: blue;
                clear: left;
                text-align: center;
            }
            nav {
                float: left;
                max-width: 160px;
                margin: 0;
                padding: 1em;
            }
            nav ul {
                list-style-type: none;
                padding: 0;
            }

            nav ul a {
                text-decoration: none;
            }
            article {
                margin-left: 170px;
                border-left: 1px solid gray;
                padding: 1em;
                overflow: hidden;
            }
        </style>
    </head>

<body>
<header>
    <h1>Welcome on Student Black-Board</h1>
</header>
<main>

    <?
    include 'dbconnect.php';
    ?>
    <nav>
        <ul>
            <li><a href="login.php">Login here</a></li><br>
            <li><a href="users.php">Users</a></li><br>
            <li><a href="register.php">Register</a></li><br>
            <li><a href="#">Suggestions box</a></li><br>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

</main>
<footer>Copyright Fredrick Muchila @RGU 2017</footer>
</body>
</html>
<?php ob_end_flush(); ?>
