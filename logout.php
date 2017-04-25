<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 11/04/2017
 * Time: 17:24
 */
session_start();
if (!isset($_SESSION['user'])) {
    header("location: index.php");
} else if (isset($_SESSION['user'])!="") {
    header("location: index.php");
}

if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    session_unset();
    session_destroy();
    header("location: index.php");
    exit;
}
?>