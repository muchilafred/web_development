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

if (!isset($_SESSION['user'])) {
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Student home page</title>

</head>

<body bgcolor="#7fffd4">

<h2>Select your Course Group</h2>

<ul>
    <li><a href="group1.php">Network Security</a> </li>
    <li><a href="group2.php">Database Administration</li>
    <li><a href="group3.php">Data Computing</li>
</ul>

<a href="index.php">Main page</a>
<a href="logout.php">Logout</a>


</body>
</html>

