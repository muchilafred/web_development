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
            <th>Student Name</th>
            <th>Email address</th>
            <th>Course </th>
        </tr>
        </thead>
        <tbody>
        <?include 'dbConnect.php';

        $sql_query = "SELECT userName,userEmail,courseName FROM student WHERE groupId = '2';";

        $result = $link->query($sql_query);

        while($row = $result->fetch_array()){

            // print out fields from row of data
            echo '<tr><td>'.$row['userName'].'</td>
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
<p></p>
<a href="session.php">Back</a><br>
<a href="logout.php">Login here</a>
</body>
</html>