<?php
/**
 * Created by PhpStorm.
 * User: 1513133
 * Date: 11/04/2017
 * Time: 17:21
 */
ob_start();
session_start();
include 'dbconnect.php';


if ( isset($_SESSION['user'])!="" ) {
    header("Location: session.php");
    exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {


    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);


    if(empty($email)){
        $error = true;
        $emailError = "Enter your email address.";
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $error = true;
        $emailError = "Enter a valid email address.";
    }

    if(empty($pass)){
        $error = true;
        $passError = "Enter your password again.";
    }


    if (!$error) {

        $password = hash('sha256', (get_magic_quotes_gpc() ? stripslashes($pass) : $pass)); 

        $sql_query ="SELECT userId, userName, userPass FROM users WHERE userEmail='$email'";
        $res= mysqli_query($link, $sql_query);
        $row= $res->fetch_array();


        if( $row['userPass']&& mysqli_num_rows($res) == 1) {
            $_SESSION['user'] = $row['userId'];
            header("Location: session.php");
        } else {
            $errMSG = "Incorrect credentials, Try again!!!";
        }

    }

}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Student Groups</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"  />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>

    <div class="container">

        <div id="login-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">


                <div class="col-md-12">

                    <div class="form-group">
                        <h2 class="">Student login page</h2>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <?php
                    if ( isset($errMSG) ) {

                        ?>
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                        </div>
                        <span class="text-danger"><?php echo $emailError; ?></span>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                        </div>
                        <span class="text-danger"><?php echo $passError; ?></span>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>

                    </div>


                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="form-group">
                        <a href="register.php">REGISTER IN HERE</a><br><br>
                        <a href="admin.login.php">ADMIN LOGIN </a>
                    </div>

                </div>

            </form>

     

             

        
        </div>

    </div>

    </body>
    </html>
<?php ob_end_flush(); ?>