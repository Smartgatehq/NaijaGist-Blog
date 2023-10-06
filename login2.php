<?php
session_start();

require_once "blog_database.php";

$email = $password = "";
$email_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
      $password_err = "Please enter your password.";
  } else {
      $password = trim($_POST["password"]);
  }

  if (empty($email_err) && empty($password_err)) {
      $param_email = $email;

      // Prepare a SELECT statement
      $sql = "SELECT id, email, password FROM users WHERE email = ?";
      
      if ($stmt = mysqli_prepare($conn, $sql)) {
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "s", $param_email);
          
          // Attempt to execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
              // Store result
              mysqli_stmt_store_result($stmt);
              
              if (mysqli_stmt_num_rows($stmt) == 1) {
                  // Bind result variables
                  mysqli_stmt_bind_result($stmt, $id, $email, $password);
                  
                  if (mysqli_stmt_fetch($stmt)) {
                      if ($password) {
                          $_SESSION["loggedin"] = true;
                          $_SESSION["id"] = $id;
                          $_SESSION["email"] = $email;
                          header("location: dashboard.php");
                          exit;
                      } else {
                          $login_err = "Incorrect password.";
                      }
                  }
              } else {
                  $login_err = "Email does not exist.";
              }
          } else {
              $login_err = "Something went wrong.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }
  }
  
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