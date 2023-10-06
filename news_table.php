<?php

//initialise the session

// session_start();

//check if the user is logged in, if not then redirect to login page

// if(isset($_SESSION['loggedin']) || $_SESSION["loggedin"] !==true){
//     header("location: login2.php");
// }



include "topnav.php";
include "sidebar.php";
// include "admin_dashboard.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/news_table.css">
    <title>News Table</title>
</head>
<body>
    



<div class="user-list">
            <h1>POSTS</h1>
           <table>
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Details</th>
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>Fullstack Developer</td>
                <td>pitcure</td>
                <td>61</td>
                <td> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>Fullstack Developer</td>
                <td>pitcure</td>
                <td>61</td>
                <td> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>Fullstack Developer</td>
                <td>pitcure</td>
                <td>61</td>
                <td> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>Fullstack Developer</td>
                <td>pitcure</td>
                <td>61</td>
                <td> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>Fullstack Developer</td>
                <td>pitcure</td>
                <td>61</td>
                <td> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>Fullstack Developer</td>
                <td>pitcure</td>
                <td>61</td>
                <td> </td>
            </tr>

            
        </table>
    </div>

</body>
</html>