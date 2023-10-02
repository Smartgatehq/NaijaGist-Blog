<?php


// include "blog_database.php";

// $email = $password ="";

// $emailErr = $passwordErr = "";

// if(isset($_POST['submit'])){
//     if (empty($_POST['email'])){
//         $emailErr = "email is required";
//     }else {
//         $email = trim($_POST['email']);
//     }

//     if (empty($_POST['password'])){
//         $passwordErr = "Password is required";
//     }else {
//         $password = trim($_POST['password']);
//     }

//     if(empty($emailErr) && empty($passwordErr)){
//         $sql = "SELECT id, email, password from users WHERE email = ?";
//         if($stmt = mysqli_prepare($conn, $sql)){
//             mysqli_stmt_bind_param($stmt, "s", $param_email);

//             $param_email = $email;

//             if($mysqli_stmt_execute($stmt)){
//             // if($mysqli_stmt_execute($stmt)){
//                 mysqli_stmt_store_result($stmt);

//                 if (mysqli_stmt_num_rows($stmt) == 1) {
//                     mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
//                     if(mysqli_stmt_fetch($stmt)){
//                         if(password_verify($password, $hashed_password)){
//                             $_SESSION['login'] = true;
//                             header("location:dashboard.php");
//                     } else{
//                         $loginErr = "Invalid Login details";
//                     }
//                     }
//                 }else{
//                     $loginErr = "Invalid User";
//                 }
//             }  else "something went wrong";
//             }
//             mysqli_stmt_close($tmt);
//         }        

//         mysqli_close($stmt);
//  }

// Initialize the session
//session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: dashboard.php");
//     exit;
// }
 
// Include config file
require_once "blog_database.php";
 
//include "blog_database.php";

$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
 
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){      
        $param_email = mysqli_real_escape_string($conn, $email);
        $param_password = mysqli_real_escape_string($conn, $password);

          // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = '$param_email'";

        $result = mysqli_query($conn, $sql);
        if($result){
            if(mysqli_num_rows($result) ==1){
                $row =mysqli_fetch_assoc($result);
                $hashed_password = $row['password'];


                //verify the password
                if(password_verify($param_password, $hashed_password)){
                    $_SESSION["loggedin"] = true;
                    $id = $row["id"];
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;
                    header("location:dashboard.php");

                    exit;
                }else{
                    echo "pasword is wrong";
                }
            }else{
                echo "email does not exist";
            }
        }else{
            echo "something went wrong";
        }



        
        // if($stmt = mysqli_prepare($conn, $sql)){
        //     // Bind variables to the prepared statement as parameters
        //     mysqli_stmt_bind_param($stmt, "s", $param_email);
            
        //     // Set parameters
        //     $param_email = $email;
            
            
        //     if(mysqli_stmt_execute($stmt)){
             
        //         mysqli_stmt_store_result($stmt);
                
              
        //         if(mysqli_stmt_num_rows($stmt) == 1){                    
        //             // Bind result variables
        //             mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
        //             if(mysqli_stmt_fetch($stmt)){
        //                 if(password_verify($password, $hashed_password)){
                            
                
                            
        //                     // Store data in session variables
        //                     $_SESSION["loggedin"] = true;
        //                     $_SESSION["id"] = $id;
        //                     $_SESSION["email"] = $email;                            
                            
        //                     // Redirect user to welcome page
        //                     header("location: dashboard.php");
        //                 } else{
                           
        //                     $login_err = "Invalid email or password.";
        //                 }
        //             }
        //         } else{
        //             // email doesn't exist, display a generic error message
        //             $login_err = "Invalid email or password.";
        //         }
        //     } else{
        //         echo "Oops! Something went wrong. Please try again later.";
        //     }

        //     // Close statement
        //     mysqli_stmt_close($stmt);
        // }
    }
    
    // Close connection
    mysqli_close($conn);
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
    <form action="" method="POST">
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