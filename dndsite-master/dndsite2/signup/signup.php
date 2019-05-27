<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/signup.css" media='screen and (min-width: 1200px)' rel="stylesheet">
    <link href="../css/signup-mobile.css" media='screen and (max-width: 1199px)' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Fjalla+One|Josefin+Sans|Montaga|Muli|Playfair+Display|Stylish&display=swap" rel="stylesheet">
    <title>Lunar Signup</title>
</head>
<body class="grid-container">
    <!-- Header -->
    <div class="header-style header-left grid-div">
            <img class="logo-style" src="../images/logo4.png" alt="logo"> 
    </div>

    <div class="header-style header-center grid-div">
            <h1 class="title-style">Lunar Rend Companion</h1>  
    </div>

    <div class="header-style header-right grid-div">
        <h1><a class="signup-style" href="../index.php">Login</a></h1>
    </div>

    <!-- Login Section -->
    <div class="main main-style grid-div">
        <div class="login-style">
            <form action="../php/SignupSend.php" method="POST">
                <h3 class="login-text-style">Information:</h3>
                <h1><input type="text" name="username" placeholder="Name"></h1>
                <h1><input type="text" name="userid" placeholder="Username"></h1>
                <h1><input type="password" name="userpass" placeholder="Password"></h1>
                <h1><input type="password" name="userpass-confirm" placeholder="Confirm Password"></h1>
                <input type="submit" name="signup-submit" value="Sign Up">
            </form>
        </div>
    </div>

    <div class="footer grid-div">
       <h4>Created By: Connor H | Alex P | Summer 2019</h4>
    </div>

</body>
</html>