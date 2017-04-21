<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 21/04/2017
 * Time: 14:56
 */
?>
<html>

<head>

    <title>Admin Home page</title>
</head>

<body>
<section>
    <h2>List of Students</h2>

    <table>
        <thead>
        <tr>
            <th>User-ID</th>
            <th>User-Name</th>
            <th>User-email</th>
            <th>password</th>
        </tr>
        </thead>
    <tbody>
    <?include 'dbConnect.php';

    $sql_query = "SELECT userId,userName,userEmail,userPass FROM users; ";

    $result = $link->query($sql_query);

    while($row = $result->fetch_array()){

        
        echo '<tr><td>'.$row['userId'].'</td>
                    <td>'.$row['userName'].'</td>
                   <td>'.$row ['userEmail']. '</td>
                    <td>'.$row ['userPass']. '</td>
               
                </tr>';

    }
    $result->close();
    $link->close();
    ?>
</tbody>
</table>

</section>

<a href="adminpage.php">Back</a><br>
<a href="logout.php">Login here</a><br>
</body>
</html>
