<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Black Board</title>
       <style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: blue;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
    
<body>
<header>
   <h1>Welcome on Student Black-Board</h1>
</header>
<main>
 
        <?
        include 'dbConnect.php';
        ?>
        <nav>
  <ul>
    <li><a href="login.php">Login here</a>&nbsp; If you're already a registered student</li><br>
    <li><a href="home.php">Else Register here</a></li>
    <li><a href="#">Forgot my username/password</a></li>
  </ul>
</nav>
     

    <div class="loginBox">
        <h3>Login Form</h3>
        <br><br>
        <form method="post" action="login.php">
            <label>Username:</label><br>
            <input type="text" name="username" placeholder="username" /><br><br>
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="password" />  <br><br>
            <input type="submit" name="submit" value = "login"/>
        </form>
        <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

    </div>

</main>
<footer>Copyright Fredrick Muchila @RGU 2017</footer>
</body>
</html>
