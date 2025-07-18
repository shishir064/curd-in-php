<?php
include 'db.php';


$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];

$sql = "INSERT INTO students(name,address, contact, gender) VALUES ('$name', '$address', '$contact','$gender')";


if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
    header("Location: table.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

?>

