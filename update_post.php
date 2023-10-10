<?php
include 'blog_database.php';
include "topnav.php";
include "sidenav.php";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $title = $_POST["title"];
    $details = $_POST["details"];

    if (isset($_FILES["new_image"]) && $_FILES["new_image"]["error"] === UPLOAD_ERR_OK){

        $new_image = $_FILES["new_image"];
        $image_path = "images/";
        $image_name = uniqid() . "_" . $new_image["name"];
        $image_target = $image_path . $image_name;

        if (move_uploaded_file($new_image["top_name"], $image_target)){

                    // update the database with the new image path

        $stmt = $conn->prepare("UPDATE politics SET title = ?, details = ?, images = ? WHERE id = ?");
        $stmt -> bind_param('sssi', $title, $details, $image_target, $id);

        }else {
            echo 'image upload failed';
            exit();
        } 

    }else {

        //when no new image is uploaded, update only text fields
        $stmt = $conn->prepare("UPDATE politics SET title = ?, details = ? WHERE id = ?");
        $stmt -> bind_param('ssi', $title, $details, $id);
    }
    if($stmt->execute()){
        header("Location:politics_table.php");
        exit();
    }else {
        echo "Update failed: ". $stmt->error;
    }

    //close the prepared statement
    $stmt->close();
}else{
    echo 'Invalid request.';
}
?>