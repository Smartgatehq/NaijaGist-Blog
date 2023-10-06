<?php

//initialise the session

// session_start();

//check if the user is logged in, if not then redirect to login page

// if(isset($_SESSION['loggedin']) || $_SESSION["loggedin"] !==true){
//     header("location: login2.php");
// }



include "topnav.php";
include "sidebar.php";
include "admin_dashboard.php";

?>