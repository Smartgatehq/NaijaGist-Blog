<?php
session_start();

require_once "blog_database.php";

$email = $password = "";
$email_err = $password_err = $login_err = "";

if (isset($_POST['submit'])) {

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
        $param_email = mysqli_real_escape_string($conn, $email);
        $param_password = mysqli_real_escape_string($conn, $password);

        $sql = "SELECT id, email, password FROM users WHERE email = '$param_email'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row['password'];

                if (password_verify($param_password, $hashed_password)) {
                    $_SESSION["loggedin"] = true;
                    $id = $row['id'];
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;
                    header("location: admin.php");
                    exit;
                } else {
                    echo "Password is wrong";
                }
            } else {
                echo "Email does not exist";
            }
        } else {
            echo "Something went wrong";
        }
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary" style="background-image: url(pic.jpg); background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        
                                        <h3 class="text-center font-weight-light my-4"> Admin Login</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" style="border-radius: 10px;" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                <span style="color:red"><?php echo  $email_err ?></span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" style="border-radius: 10px;" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                                <span style="color:red"><?php echo  $password_err ?></span>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                               
                                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
       
    </body>
</html>
