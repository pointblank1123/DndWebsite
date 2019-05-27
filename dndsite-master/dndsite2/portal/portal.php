<?php
session_start();
$name = $_SESSION['name'];
if(isset($name)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/portal.css" media='screen and (min-width: 1200px)' rel="stylesheet">
    <link href="../css/portal-mobile.css" media='screen and (max-width: 1199px)' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Fjalla+One|Josefin+Sans|Montaga|Muli|Playfair+Display|Stylish&display=swap" rel="stylesheet">
    <title>Lunar Portal</title>
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
        <h1><a class="signup-style" href="../php/Logout.php">Logout</a></h1>
    </div>

    <!-- Login Section -->
    <div class="main main-style grid-div">
        <h1>Welcome <?php echo $name; ?>!</h1>
    </div>

    <div class="space-1">

    </div>

    <div class="newcha newcha-style">
        <a href="../newcharacter/newcharacter.php"><img class="sheet-style" src="../images/newcha-img.jpg" alt="newcha"></a>
        <h2>Create New Character</h2>
    </div>

    <div class="lvlcha lvlcha-style">
        <a href="#"><img class="sheet-style" src="../images/newcha-img.jpg" alt="newcha"></a>
        <h2>Level Up Character</h2>
    </div>

    <div class="stcha stcha-style">
        <a href="#"><img class="sheet-style" src="../images/newcha-img.jpg" alt="newcha"></a>
        <h2>Select Character Sheet</h2>
    </div>

    <div class="space-2">

    </div>

    <div class="footer grid-div">
        <a style="text-decoration: none; color: white;" href="../portal/portal.php"><h4>Created By: Connor H | Alex P | Summer 2019</h4></a>
    </div>

</body>
</html>
<?php
}
?>