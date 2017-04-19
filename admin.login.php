

<html>


<head>
    <style>
        div.container {
            width: 100%;
            border: 1px solid gray;
        }

        header, footer {
            padding: 1em;
            color: white;
            background-color: mediumslateblue;
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

    <title>Admin login page</title>


</head>


<body>


<h2>Please Login in</h2> <div class="loginBox">


    <h3>Login Form</h3>

    <br ><br >


    <form method="post" action="check.php">


        <label >Username:</label ><br >

        <input type="text" name="username" placeholder="username" /><br ><br >


        <label>Password:</label><br >

        <input type="password" name="password" placeholder="password" />  <br ><br >


        <input type="submit" name="submit" value = "login"/>

    </form>





</body>


</html>

