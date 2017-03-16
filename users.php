<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Marvel Movies</title>
</head>
<body>
<header>
    <h1>Users from the users tables</h1>
</header>
<main>
    <section>
        <h2>Users from the users tables</h2
<?
        include 'dbConnect.php';
        $sql_query = "SELECT uid, username, email_address FROM users where uid = '12'; ";
        $result = $link->query($sql_query);
        while($row = $result->fetch_array()){
            // print out fields from row of data
            echo "<p>""UserID".$row ['uid']. " - Name". $row ['username']." - Email ".$row ['email_address']."</p>";
        }
        $result->close();
        $link->close();
        ?>
</section>

</main>
<footer>
</footer>
</body>
</html>
