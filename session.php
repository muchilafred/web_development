<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 11/04/2017
 * Time: 17:23
 */

session_start();
include 'dbconnect.php';

if (!isset($_SESSION['user']) ) {
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home page</title>
    <link href="stylesheet1" rel="stylesheet.css" type="text/css" />
</head>
<body>
        <div>
            <ul>
                <li><a href="index.php">class</a></li>
		         <li><a href="session.php">About Us</a></li>
		         <li><a href="session.php">About Us</a></li>
		         <li><a href="session.php">About Us</a></li>
                    <li><a href="session.php">Suggestion</a></li>
                    <li><a href="session.php">Contact Us</a></li>
                    <li><a href="logout.php">log out</a></li>
              
            </ul>
        </div>

</body>
</html>

