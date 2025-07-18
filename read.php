<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo " | Name: " . $row['name'] . " | Address: " . $row['address'] . " | Contact: " . $row['contact'] . " | Gender: " . $row['gender'] . "<br>";
}
?>
