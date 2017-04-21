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

<body bgcolor="#1e90ff">
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

        // print out fields from row of data
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
    <ul>
        <li><a href="group1.php">Network Security</a> </li>
        <li><a href="group2.php">Database Administration</li>
        <li><a href="group3.php">Data Computing</li>
    </ul>

</section>

<a href="index.php">Main page</a>
<a href="logout.php">Login here</a>
</body>
</html>
