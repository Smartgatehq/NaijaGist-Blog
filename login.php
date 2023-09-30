<?php

include "blog_database.php";

$email = $password ="";

$emailErr = $passwordErr = "";

if(isset($_POST['submit'])){
    if (empty($_POST['email'])){
        $emailErr = "email is required";
    }else {
        $email = trim($_POST['email']);
    }

    if (empty($_POST['password'])){
        $passwordErr = "Password is required";
    }else {
        $password = trim($_POST['password']);
    }

    if(empty($emailErr) && empty($passwordErr)){
        $sql = "SELECT id, email, password from users WHERE email = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if($mysqli_stmt_execute($stmt)){
            // if($mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            $_SESSION['login'] = true;
                            header("location:dashboard.php");
                    } else{
                        $loginErr = "Invalid Login details";
                    }
                    }
                }else{
                    $loginErr = "Invalid User";
                }
            }  else "something went wrong";
            }
            mysqli_stmt_close($tmt);
        }        

        mysqli_close($stmt);
 }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>NaijaGist Admin Login Page</title>
</head>
<body>
    <form action="" method="">
        <div class="my-form">
            <div class="text">
                <h3>Admin Login</h3>
            </div>
            <div class="form-field">
                <label for="Username">Username:
                    <input 
                        type="email" 
                        name="email" 
                        id="email"  
                        placeholder="Enter your email"
                        autocomplete="off"
                        required
                    >
                </label>
            </div>
            <div class="form-field">
                <label for="password">Password:
                    <input 
                        type="password" 
                        name="password" 
                        d="password"  
                        placeholder="Enter password"
                        autocomplete="off"
                        required
                    >
                </label>
            </div>
            <div class="remember">
                <p><input type="checkbox">Remember Password</p>
            </div>
            <div class="btn">
                <input class="button" type="submit" name="submit" id="submit" value="Login">
            </div>

            <div class="forgot">
               <p>Not a user? <a href="registration.php">Create Account</a><br> <a href="">Forgot Password?</a></p>
            </div>
        </div>
    </form>
</body>
</html>