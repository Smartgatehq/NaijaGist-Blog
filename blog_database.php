<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE naija_gist_db";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();
//

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "naija_gist_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Creating table

// $sql = 'CREATE TABLE users(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(70) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     phone INT(11) NOT NULL,
//     password VARCHAR(50) NOT NULL,
//     confirm_password VARCHAR(50) NOT NULL
// )';

// if ($conn->query($sql) === TRUE) {
//     echo 'Table Users created successfully';
// } else {
//     echo 'Error creating table: ' . $conn->error;
// }

// $conn->close();

?>