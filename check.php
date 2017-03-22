<?php include("dbconnect.php");







if(empty($_POST["username"]) || empty($_POST["password"]))





{         echo "Both fields are required.";



}



else



{



    $username = $_POST['username'];



    $password = $_POST['password'];





    $sql ="SELECT * FROM users";



    $result = mysqli_query ($link,$sql);



    if(mysqli_num_rows($result) == 1)





        $pass=false;

    while($row =$result->fetch_array()) {



        if ($username == $row ['username'] && $password == $row ['password']) {

            $pass = true;
 
        }

    }

    if($pass){header("location:home.php");}

    else {







        echo "Incorrect username or password.";








    }



}







?>



