<?php
include 'db.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
$sql = "DELETE FROM students WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: table.php?delete_msg=deleted successfully.");
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
?>
