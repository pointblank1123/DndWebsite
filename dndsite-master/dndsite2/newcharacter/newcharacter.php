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
    <link href="../css/newcharacter.css" media='screen and (min-width: 1200px)' rel="stylesheet">
    <link href="../css/newcharacter-mobile.css" media='screen and (max-width: 1199px)' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Fjalla+One|Josefin+Sans|Montaga|Muli|Playfair+Display|Stylish&display=swap" rel="stylesheet">
    <title>Lunar New Character</title>
</head>
<body class="grid-container">
    <!-- Header -->

    <div class="header-style header-center grid-div">
        <img class="logo-style" src="../images/logo4.png" alt="logo">
        <br>
        <a href="../portal/portal.php"><input type="submit" value="Go Back"></a>
    </div>

    <!-- Login Section -->
    <div class="main main-style grid-div">
        <h1>Let's Create a Character <?php echo $name; ?>!</h1>
    </div>

    <div class="content content-style">
        <form action="#">
            <table class="creator-style input-style-identity">
                <tr class="identity-style">
                    <td><h2>Character Name</h2></td>
                    <td><h2>Class</h2></td>
                    <td><h2>Level</h2></td>
                    <td><h2>Player Name</h2></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder="<?php echo $name; ?>"></td>
                </tr>
                <tr class="identity-style">
                    <td><h2>Race</h2></td>
                    <td><h2>Alignment</h2></td>
                    <td><h2>Background</h2></td>
                    <td><h2>Experience</h2></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                    <td><input type="text" placeholder=" "></td>
                </tr>
            </table>

            <table class="statistics-style">
                <tr class="statistics-text-style">
                    <td><h2>AC</h2></td>
                    <td><h2>Initiative</h2></td>
                    <td><h2>Speed</h2></td>
                </tr>
                <tr>
                    <td><input class="input-style-statistics" type="text" placeholder=" "></td>
                    <td><input class="input-style-statistics" type="text" placeholder=" "></td>
                    <td><input class="input-style-statistics" type="text" placeholder=" "></td>
                </tr>

            </table>

            <div class="skill-key">
                <h2>Skill Proficiencies Key:</h2>
                <h3>First Check = Proficient</h3>
                <h3>Second Check = Double Proficient</h3>
            </div>

            <table class="creator-style">
                <tr>
                    <td class="ability-style"><h2>Strength</h2></td>
                    <td class="skill-style"><h2>Acrobatics</h2></td>
                    <td class="skill-style"><h2>Animal Handling</h2></td>
                    <td class="skill-style"><h2>Arcana</h2></td>

                </tr>
                <tr>
                    <td><input class="input-style-ability" type="text" placeholder=" "></td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Dexterity</h2></td>
                    <td class="skill-style"><h2>Athletics</h2></td>
                    <td class="skill-style"><h2>Deception</h2></td>
                    <td class="skill-style"><h2>History</h2></td>
                    
                </tr>
                <tr>
                    <td><input class="input-style-ability" type="text" placeholder=" "></td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Constitution</h2></td>
                    <td class="skill-style"><h2>Insight</h2></td>
                    <td class="skill-style"><h2>Indimidation</h2></td>
                    <td class="skill-style"><h2>Investigation</h2></td>
                    
                </tr>
                <tr>
                    <td><input class="input-style-ability" type="text" placeholder=" "></td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Intelligence</h2></td>
                    <td class="skill-style"><h2>Medicine</h2></td>
                    <td class="skill-style"><h2>Nature</h2></td>
                    <td class="skill-style"><h2>Perception</h2></td>
                    
                </tr>
                <tr>
                    <td><input class="input-style-ability" type="text" placeholder=" "></td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    
                </tr>
                <tr>
                    <td class="ability-style"><h2>Wisdom</h2></td>
                    <td class="skill-style"><h2>Performance</h2></td>
                    <td class="skill-style"><h2>Persuasion</h2></td>
                    <td class="skill-style"><h2>Religion</h2></td>
                    
                </tr>
                <tr>
                    <td><input class="input-style-ability" type="text" placeholder=" "></td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>

                </tr>
                <tr>
                    <td class="ability-style"><h2>Charisma</h2></td>
                    <td class="skill-style"><h2>Sleight of Hand</h2></td>
                    <td class="skill-style"><h2>Stealth</h2></td>
                    <td class="skill-style"><h2>Survival</h2></td>
                    
                </tr>
                <tr>
                    <td><input class="input-style-ability" type="text" placeholder=" "></td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    <td>
                        <input class="checkbox" type="checkbox" name="prof-acro" value="">
                        <input class="checkbox" type="checkbox" name="dub-prof-acro" value="">
                    </td>
                    
                </tr>
                
            </table>
        </form>    
    </div>

    <div class="footer grid-div">
        <h4>Created By: Connor H | Alex P | Summer 2019</h4>
    </div>

</body>
</html>
<?php
}
?>