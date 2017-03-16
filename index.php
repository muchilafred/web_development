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
    <li><a href="login.php">Login here</a>|</li>
    <li><a href="home.php">Home</a>|</li>
    <li><a href="home.php">Register</a></li><br>
    <li><a href="#">Suggestions</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav>
    
</main>
<footer>Copyright Fredrick Muchila @RGU 2017</footer>
</body>
</html>
