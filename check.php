<?php include("dbconnect.php");
if(empty($_POST["username"]) || empty($_POST["password"]))
{         echo "Both fields are required.";
}
else
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql ="SELECT * FROM admin";
    $result = mysqli_query ($link,$sql);
    if(mysqli_num_rows($result) == 1)

        $pass=false;
    while($row =$result->fetch_array()) {
        if ($username == $row ['userName'] && $password == $row ['adminPass']) {
            $pass = true;
        }
    }
    if($pass){header("location:adminpage.php");}
    else {


        echo "Incorrect username or password.";


        echo $username;
        echo $password;
    }
}
?>0