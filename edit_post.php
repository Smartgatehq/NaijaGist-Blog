<?php
include 'blog_database.php';
include "topnav.php";
include "sidenav.php";

if (isset($_GET['id'])){
    $id= $_GET['id'];


    $stmt = $conn->prepare("SELECT id, title, details, images, created_date from politics where id = ?");
    $stmt->bind_param('i', $id);

    if ($stmt->execute()){
        $result = $stmt->get_result();
        $item = $result->fetch_assoc();
        if ($item){
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="https://kit.fontawesome.com/bc18bf7a86.js" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/post.css">
                <title>Message Form</title>
            </head>
            <body>
                <form action="update_post.php" method="POST" enctype="multipart/form-data">
            
                <h2>Edit Post</h2>            
                    <input type="hidden" name="id" value="<?php echo $item['id']?>">
            
                    <div class="form-field">
                    <input 
                        type="text"
                        name="title"
                        id="title"
                        value="<?php echo $item['title']?>"
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
                    <?php echo $item['details']?>
                    </textarea>
                </div>
                    <div>
                     <input type="file"
                        name="images"
                        id="images"
                        value="<?php echo $item['images']?>"
                     >
                    </div>
                    <div>
                        <input type="submit" name="update" id="submit" value="POST">
                    </div>
                </form>
            </body>
            </html>
            <?php                 
        }else{
            echo "items not found";
        }
    }else{
        echo "error fetching data from database";
    }
        $stmt->close();

}else{
    echo "invalid request";
}
?>






