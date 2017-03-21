<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<?php
include("db_connect.php");
$sql_query = "SELECT * FROM users";
$result = $link->query($sql_query);
while($row = $result->fetch_array())
{
    $username = $row['username'];
    $password = $row['password'];
    $email_address = $email_address ['email_address'];
    echo "Youre user name:"[$username];
}
?>
</body>
</html>
