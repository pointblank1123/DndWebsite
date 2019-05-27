<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/dnd.css" media='screen and (min-width: 1200px)' rel="stylesheet">
    <link href="css/dnd-mobile.css" media='screen and (max-width: 1199px)' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Fjalla+One|Josefin+Sans|Montaga|Muli|Playfair+Display|Stylish&display=swap" rel="stylesheet">
    <title>Lunar Login</title>
</head>
<body class="grid-container">
    <!-- Header -->
    <div class="header-style header-left grid-div">
            <img class="logo-style" src="images/logo4.png" alt="logo"> 
    </div>

    <div class="header-style header-center grid-div">
            <h1 class="title-style">Lunar Rend Companion</h1>  
    </div>

    <div class="header-style header-right grid-div">
        <h1><a class="signup-style" href="signup/signup.php">Sign Up</a></h1>
    </div>

    <!-- Login Section -->
    <div class="main main-style grid-div">
        <div class="login-style">
            <form action="php/LoginSend.php" method="POST">
                <h3 class="login-text-style">Login</h3>
                <h1><input type="text" name="userid" placeholder="Username"></h1>
                <!-- <h3 class="login-text-style">Password</h3> -->
                <h1><input type="password" name="userpass" placeholder="Password"></h1>
                <input type="submit" name="login-submit" value="Login">
            </form>
        </div>
    </div>

    <div class="footer grid-div">
        <h4>Created By: Connor H | Alex P | Summer 2019</h4>
    </div>

</body>
</html>