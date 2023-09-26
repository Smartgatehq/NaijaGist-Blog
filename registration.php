<?php

    include "blog_database.php";

    // Validating each form field to ensure they are not empty when submitted

    if(isset($_POST['submit'])){

    if (empty($_POST['fullname'])) {
        echo 'Full Name is required';        
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", trim($_POST['fullname']))) {
        $nameErr = "Only letters and white space allowed";
    }  else {
        $fullname = $_POST['fullname'];
    }    

    //validating email
    if (empty($_POST['email'])) {
        echo  "An email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo "Email must be a valid email address";
    } else {
        $check_email = trim($_POST['email']);

        //created a variable to check if the email saved above is already in the table
        $check_user_email_sql = "SELECT id from users Where email = ' $check_email'";
        $check_email_result = $conn->query($check_user_email_sql);

        // checking if there is 1 record of the email
        if($check_email_result->num_rows == 1 ){
            echo "Email already exist";
        } else {
            $email = $check_email;
        }
    }


    if (empty($_POST['phone'])) {  
        echo 'Phone Number is required';
    } elseif (!preg_match("[0-9]", trim($_POST['phone']))) {
        echo  "only number are allow";
    }  else {
        $phone = $_POST['phone'];
    }  

    
    if (empty($_POST['password'])) {  
        echo 'Password is required';
    } elseif (strlen(trim($_POST['password'])) < 6) {
        echo "password must be atleast 6 characters";
    } else {
        $password = trim($_POST['password']);
    }

    
    if (empty($_POST['confirm_password'])) {  
        echo 'Password mismatch';
    } else {
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password) {
            echo "password did not match";
        }       
    } 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $insert_sql = "INSERT INTO users (fullname, email, phone, password) 
    VALUES ('$fullname', '$email', '$phone', '$hashed_password')";
    if ($conn->query($insert_sql) == TRUE) {
        header("location: login.php");
    } else {
        echo "something went wrong";
    }

}
  

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_creationform.css">
    <title>NaijaGist - User Creation</title>
</head>
<body>
    <form action="" method="POST">
        <div class="my-form">
            <div class="text">
                <h3>Registration Page</h3>
            </div>
            <div class="form-field">
                <label for="fullname">Full Name:
                    <input 
                        type="text" 
                        name="fullname" 
                        id="fullname"  
                        placeholder="Enter Full Name"
                        autocomplete="off"
                        
                    >
                </label>
            </div>
            <div class="form-field">
                <label for="email">Email:
                    <input 
                        type="email" 
                        name="email" 
                        id="email"  
                        placeholder="Enter email"
                        autocomplete="off"
                    >
                </label>
            </div>
            <div class="form-field">
                <label for="phone">Enter Phone Number:
                    <input 
                        type="tel" 
                        name="phone" 
                        id="phone"  
                        placeholder="Enter Phone Number"
                        autocomplete="off"
                    >
                </label>
            </div>
 
            <div class="form-field">
                <label for="password">Enter Password:
                    <input 
                        type="password" 
                        name="password" 
                        id="password"  
                        placeholder="Enter Password"
                        autocomplete="off"
                        
                    >
                </label>
            </div>
            <div class="form-field">
                <label for="password">Confirm Password:
                    <input 
                        type="password" 
                        name="confirm_password" 
                        id="password"  
                        placeholder="Confirm Password"
                        autocomplete="off"
                        
                    >
                </label>
            </div>
            <div class="btn">
                <input class="button" type="submit" name="submit" id="submit" value="Create Account">
            </div>

            <div class="remember">
                <p>Already have an Account?<a href="login.php">Login here</a></p>
            </div>
        </div>
    </form>
</body>
</html>