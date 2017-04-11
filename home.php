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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootsrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://www.amazon.co.uk">Amazon</a></li>
                <li><a href="http://www.google.co.uk">Google</a></li>
                <li><a href="http://www.rgu.co.uk">RGU</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="fasle">
                    <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userName']; ?>&nbsp;<span class ="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php?logout"><span class="glychicon glyphicon-log-out"></span>Sign Out</a></li>
                </ul>
               </li>
            </ul>
        </div><!--/.nav-collapse-->
</nav>

<div id="wrapper">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to the home page</h1>
            </div>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
<?php ob_end_flush(); ?>
