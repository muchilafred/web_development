<html>
<head>
    <titlle>registration form</titlle>

</head>
<body>
<form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username" placeholder="username" required /><br><br>
    <label>Password:</label><br>
    <input type="password" name="password" placeholder="password" required />  <br><br>
    <input type="submit" name="submit" value = "Register"/>

</form>

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
     
    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
}

$sql = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
echo "Sorry...This email already exist..";
}
else
{
$query = mysqli_query($db, "INSERT INTO users (name, email, password)VALUES ('$name', '$email', '$password')");
 
if($query)
    {
    echo "Thank You! you are now registered.";
    }
    }
</body>
</html>