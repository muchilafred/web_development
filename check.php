<?php

include("dbconnect.php"); //Establishing connection with our database



if(empty($_POST["username"]) || empty($_POST["password"]))


    {
        echo "Both fields are required.";
    }





            else {
                // Define $username and $password
                $username = $_POST['username'];
                $password = $_POST['password'];




                $sql = "SELECT * FROM users";



        if(mysqli_num_rows($result) == 1)
        {
            header("location: home.php"); // Redirecting To another Page
        }else
        {
            echo "Incorrect username or password.";
        }
}

?>
