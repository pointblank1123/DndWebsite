<?php
session_start();
if(isset($_POST['login-submit'])){
    require 'DbConn.php';
    $password=$_POST['userpass'];
    $username=$_POST['userid'];

    if(empty($password) || empty($username)){
        header("Location: ../index.php?error=emptyfield");
        exit(); 
    }
    else{
        $sql = "SELECT * FROM logindata WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($results)){
                //$pwdCheck = password_verify($password, $row['pwdUsers']) for hashed password
                if($password !== $row['Pwd']){
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }else if($password == $row['Pwd']){
                    $_SESSION['Id'] = $row['UserId'];
                    $_SESSION['name']= $row['PName'];
                    header("Location: ../portal/portal.php");
                    exit();
                }else{
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            }else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}else{
    header("Location: ../index.php");
    exit();
}