<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 19/04/2017
 * Time: 16:44
 */

include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>