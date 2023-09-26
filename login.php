

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