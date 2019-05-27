<?php
if(isset($_POST['signup-submit'])){
    require 'DBConn.php';
    $name = $_POST['username'];
    $username = $_POST['userid'];
    $password = $_POST['userpass'];
    $confirmPass = $_POST['userpass-confirm'];

    if(empty($name) || empty($username) || empty($password) || empty($confirmPass)){ // are any fields empty
        header("Location: ../signup/signup.php?error=emptyfield");
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){ // is this a valid username
        header("Location: ../signup/signup.php?error=invalidusername");
        exit(); 
    }
    elseif($password !== $confirmPass){ // do password and confirm password match
        header("Location: ../signup/signup.php?error=passnotmatch");
        exit();
    }else{ // does this username already exsist
        $sql = "SELECT Username FROM logindata WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup/signup.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck !== 0){
                header("Location ../signup/signup.php?error=usertaken");
                exit();
            }else{
                $sql = "INSERT INTO logindata(PName,Username,Pwd) VALUES (?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    //header("Location: ../signup/signup.php?error=sqlerror");
                    exit();
                }else{
                    //$hashedPwd = password_hash($password, PASSWORD_DEFAULT); for hashed password

                    mysqli_stmt_bind_param($stmt, "sss", $name, $username, $password); // replace $password w/ $hashedPwd for hashed password
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?success=signupsuccess");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../signup/signup.php");
    exit();
}
