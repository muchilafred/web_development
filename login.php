<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Welcome to the our Login page</h1><br>
<h2>Please fill-in the form with your correct details and information, when you have sucessfuly completed the form you will now be
    able to login and view and share information with other students</h2>
    
<div class="loginBox">

    <?php
    include("dbconnect.php")
    ?>

    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="check.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>
</html>
