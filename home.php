<?php

include("db_connect.php");
$username = $_POST["username"];
$password = $_POST["password"];
$email_address = $_POST["email_address"];
$city = $_POST["city"];
$sql_query = "INSERT INTO users (username, password, email_address, city) VALUES ('$username', '$password', '$email_address', '$city')";
if (mysqli_query($link, $sql_query)){
} else {
    echo "ERROR: ". $sql_query. "<br>" . mysqli_error($link);
}
header("location:index.php");
