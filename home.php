<?php

include("db_connect.php");
$username = $_POST["username"];
$password = $_POST["password"];
$email_address = $_POST["email_address"];
$sql_query = "INSERT INTO users (username, password, email_address) VALUES ('$username', '$password', '$email_address')";
if (mysqli_query($link, $sql_query)){
} else {
    echo "ERROR: ". $sql_query. "<br>" . mysqli_error($link);
}
header("location:index.php");
