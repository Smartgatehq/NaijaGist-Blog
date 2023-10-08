<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidenav.css">
    <title>Side Navigation with Dropdown</title>
</head>
<body>
    <div id="sidenav">

          <!-- Button to close the overlay navigation -->
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->

              <!-- Use any element to open/show the overlay navigation menu -->
    <!-- <span onclick="openNav()">open</span> -->
        <a href="admin_dashboard.php">Dashboard</a>
        <button class="dropdown-btn">Users
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="users.php">View Users</a>
            <a href="#">Add New User</a>
          </div>
          <button class="dropdown-btn">News
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="#" class="dropdown-btn">Politcs</a>
            <div class="dropdown-container">
                <a href="politics_table.php">View</a>
                <a href="politics_add.php">Add</a>
            </div>

            <a href="#" class="dropdown-btn">Sports</a>
            <div class="dropdown-container">
                <a href="sport_table.php">View</a>
                <a href="sport_add.php">Add</a>
            </div>

            <a href="#" class="dropdown-btn">Entertainment</a>
            <div class="dropdown-container">
                <a href="#">View</a>
                <a href="#">Add</a>
            </div>
            <a href="#"class="dropdown-btn">Business</a>
            <div class="dropdown-container">
                <a href="#">View</a>
                <a href="#">Add</a>
            </div>
          </div>

        <a href="#services">Analytics</a>
        <a href="#clients">Settings</a>
       
      </div>





      <!-- LINKING JAVASCRIPT -->

      <script src="js/sidenav.js"></script>
</body>
</html>