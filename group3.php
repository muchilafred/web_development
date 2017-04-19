<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 19/04/2017
 * Time: 20:33
 */
?>

<html>

<head>

    <title>Group1 Selection</title>
</head>

<body>
<section>
    <h2>Group1 Students</h2>

    <table>
        <thead>
        <tr>
            <th>User-ID</th>
            <th>User-Name</th>
            <th>User-email</th>
            <th>courseName</th>
        </tr>
        </thead>
        <tbody>
        <?include 'dbConnect.php';

        $sql_query = "SELECT userId,userName,userEmail,courseName FROM student WHERE groupId = '3';";

        $result = $link->query($sql_query);

        while($row = $result->fetch_array()){

            // print out fields from row of data
            echo '<tr><td>'.$row['userId'].'</td>
                    <td>'.$row['userName'].'</td>
                   <td>'.$row ['userEmail']. '</td>
                    <td>'.$row ['courseName']. '</td>
               
                </tr>';

        }
        $result->close();
        $link->close();
        ?>
        </tbody>
    </table>

</section>

<a href="session.php">Back</a><br>
<a href="logout.php">Login here</a>
</body>
</html>