<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 11/04/2017
 * Time: 17:23
 */
<?php

session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome - <?php echo $_SESSION['user']; ?></title>
</head>
<body>
<div id="header">

    <div id="right">
        <div id="content">
            hi' <?php echo $_SESSION['user']; ?> <a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>
