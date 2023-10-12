<?php
include 'blog_database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<script>
    var confirmed = confirm("Are you sure you want to delete this record?")

    if(confirmed) {
        window.location.href = "delete.php?id=' . $id . '";
    }else{
        window.location.href = "politics_table.php";
    }
    </script>';
}else{
    echo "Invalid request";
}
 


?>