<?php
include 'blog_database.php';

if (isset($_GET['id'])) {
$id = $_GET['id'];

$query = "DELETE FROM politics WHERE id = $id";

if (mysqli_query($conn, $query)){
    header("Location: politics_table.php");
    exit();
}else {
    echo "Error deleting record" . mysqli_error($conn);
}

}else {
    echo "Invalid Request";
}

$conn->close();

?>