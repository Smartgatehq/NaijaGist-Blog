<?php

include "topnav.php";
include "sidenav.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/users.css">
        <script src="https://kit.fontawesome.com/bc18bf7a86.js" crossorigin="anonymous"></script>
        <title>Dashboard- NaijaGist-Blog Admin</title>
    </head>
    <body>
               <div class="dashboard-container">

        <div class="user-overview">
                <h3>Dashboard</h3>
                <p>Users Overview</p>
            
            <div class="user-numbers row">
                <div class="user-card col-md-3">
                    <i class="fa-solid fa-users" style="color: #5a5c5b;"></i>
                   <p>Total Users <br><span>1500</span></p>
                    <a href="">View<i class="fa-solid fa-eye" style="color: #bbbcbe;"></i></a>
                </div>
                <div class="user-card col-md-3">
                    <i class="fa-solid fa-users" style="color: #07a04c;"></i>
                    <p>Active Users <br><span>1500</span></p>
                    <a href="">View<i class="fa-solid fa-eye" style="color: #bbbcbe;"></i></a>
                </div>
                <div class="user-card col-md-3">
                    <i class="fa-solid fa-users-slash" style="color: #fd6c6c;"></i>
                   <p>Inactive Users <br><span>1500</span></p>
                    <a href="">View<i class="fa-solid fa-eye" style="color: #bbbcbe;"></i></a>
                </div>
                <div class="user-card col-md-3">
                    <p>Create New user here and assign role</p>

                    <!-- This button will open the create user form when clicked -->
                    <button class="open-button" onclick="openform()"><a href="">Create User</a></button>
                </div>
                
            </div>       

        </div>
    
    
        <div class="user-list">
            <h1> LIST OF USERS</h1>
           <table>
            <tr>
                <th>S/N</th>
                <th>Name Of User</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Posts</th>
                <th>Date Registered</th>
                <th>User Status</th>
                <th>Action</th>          
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-inactive">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-inactive">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-inactive">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-inactive">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Mike</td>
                <td>johnmike@gmail.com</td>
                <td>0802222222</td>
                <td>450 Posts</td>
                <td>5Th September, 2023</td>
                <td><button class="btn-active">Active</button></td>
                <td>
                    <i class="fa-solid fa-eye" style="color: #bbbcbe;"></i>
                    <i class="fa-solid fa-ban" style="color: #f91706;"></i>
                </td>
            </tr>
        </table>
    </div>

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
          <h1>Login</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

      <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>
    </div>  
    </body>
</html>