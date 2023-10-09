<?php
include 'blog_database.php';
include "topnav.php";
include "sidenav.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $imageFolder = 'images/';

// Check if the image folder exists, and if not, create it
    // if (!is_dir($imagefolder)) {
    //     mkdir($imageFolder);
    // }else{
    //     echo "folder created ";
    // }

    $title = $_POST['title'];
    $title = mysqli_real_escape_string($conn, $title);
    
    $details = $_POST['details'];
    $details = mysqli_real_escape_string($conn, $details);

    //handle tht uploaded image
$images = $_FILES['images']['tmp_name'];

// if ($images) {
//     echo "it is image". $images;
// }
    // Generate a unique filename for the image
$imageName = uniqid() . '_' . $_FILES['images']['name'];
$imagePath = $imageFolder . $imageName;

if (move_uploaded_file($images, $imagePath)) {
    $sql ="INSERT INTO business (title, details, images) VALUES ('$title', '$details', '$imageName')";

if($conn->query($sql) === TRUE){
    echo 'successfully';
}else{
    echo "failed";
}
// $conn->close();
}else{
    echo "error uploading images";
}

}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">
    <title>Message Form</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-field">
        <input 
            type="text"
            name="title"
            id="title"
            placeholder="Enter your topic"
            required
        >
    </div>
    <div class="form-msg">
        <textarea 
            name="details" 
            id="details" 
            placeholder="Type your message here"
            cols="30"
            rows="10"
        >  
        </textarea>
    </div>
        <div>
         <input type="file"
            name="images"
            id="images"
         >
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="POST">
        </div>
    </form>
</body>
</html>