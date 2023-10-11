<?php

//initialise the session

// session_start();

//check if the user is logged in, if not then redirect to login page

// if(isset($_SESSION['loggedin']) || $_SESSION["loggedin"] !==true){
//     header("location: login2.php");
// }



include "topnav.php";
include "sidenav.php";
include "blog_database.php";

$query = "SELECT * from politics";
$result = mysqli_query($conn, $query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bc18bf7a86.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/news_table.css">
    <title>Politics News Table</title>
</head>
<body>
    



<div class="user-list">
            <h1>POSTS</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['details']}</td>
                    <td>{$row['images']}</td>
                    <td>{$row['created_date']}</td>
                    <td><a href='edit_post.php?id={$row['id']}'><i class='pen-icon fa-solid fa-pen'></i><span class'tooltiptext'>Edit</span></i</a></td>
                    <td><a href='edit_post.php?id={$row['id']}'><i class='trash-icon fa-solid fa-trash'></i</a></td>
                  </tr>";
                }
                ?>              
            </tbody>           
        </table>
    </div>

</body>
</html>

<i class="fa-solid fa-pen" style="color: #079e05;"></i>
<i class="fa-solid fa-trash" style="color: #f91f35;"></i>