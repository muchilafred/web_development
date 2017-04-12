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
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome - <?php echo $userRow['userEmail']; ?></title>
    <link href="stylesheet1" rel="stylesheet.css" type="text/css">
</head>
<body>
        <div>
            <ul>
                <li><a href="home.php">class</a></li>
                    <ul>
		         <li><a href="home.php">About Us</a></li>
		         <li><a href="home.php">About Us</a></li>
		         <li><a href="home.php">About Us</a></li>
      	            </ul>
                    <ul>
                    <li><a href="home.php">Suggestion</a></li>
                    <li><a href="home.php">Contact Us</a></li>
                    <li><a href="home.php">About Us</a></li>
                    </ul>
            </ul>
        </div>

<div id="wrapper">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to the home page</h1>
		<li><a href="logout.php?logout"><span class="glychicon glyphicon-log-out"></span>Sign Out</a></li>
            </div>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
<?php ob_end_flush(); ?>
