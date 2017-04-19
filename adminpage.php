<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 18/04/2017
 * Time: 14:33
 */
?>

<html>

<head>

    <title>Admin Home page</title>
</head>

<body>
<section>
    <h2>List of Students</h2>
    <?
    include 'dbConnect.php';
    $sql_query = "SELECT userId,userName,userEmail,userPass FROM users; ";
    $result = $link->query($sql_query);
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo "<p>".$row ['userId']. "  -  ". $row ['userName']."  -  ".$row ['userEmail']."  -  ".$row ['userPass'].$db."</p>";

        echo "<p>".$row ['userId']. "  -  ". $row ['userName']."  -  ".$row ['userEmail']."  -  ".$row ['userPass'].$db."</p>";
        //     }
    }
    $result->close();
    $link->close();
    ?>



</section>

<a href="index.php">Main page</a>
<a href="logout.php">Login here</a>
</body>
</html>
