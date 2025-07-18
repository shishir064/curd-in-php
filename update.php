<?php include("header.php")?>
<?php include("db.php")?>

<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

$query = "SELECT * FROM students WHERE id = '$id'";
$check = mysqli_query($conn,$query);
if(!$check){
    die("something is wrong". mysqli_connect_error($check));
}
else{
  $row = mysqli_fetch_assoc($check);
}
}

    ?>
           <?php
           if (isset($_POST['update_student'])){
               $name = $_POST['name'];
               $address = $_POST['address'];
               $gender = $_POST['gender'];
               $contact = $_POST['contact'];
               
               $sql = "UPDATE students
                              SET name = '$name', Address= '$address', Gender= '$gender',Contact='$contact'
                              WHERE Id = '$id'";
                
                mysqli_query($conn, $sql);
                if (!$sql){
                    echo "something is wrong". mysqli_error($conn);
                }
                else{
                    header("Location: table.php?update_msg=you have successfully updated");
                }
        
    }
    ?>
    <form action="update.php?id= <?php echo $id; ?>" method="post">
            <div>  
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
            </div>

            <div>
            <label>Address:</label>
            <input type="text" name="address" class="form-control" value="<?php echo $row['address']?>">
            </div>

            <div>
            <label>Gender:</label>
            <input type="text" name="gender" class="form-control" value="<?php echo $row['gender']?>">
            </div>

            <div>
            <label>Contact Number:</label>
            <input type="text" name="contact" class="form-control" value="<?php echo $row['contact']?>">
            </div>
                <input type="submit" class="btn btn-primary" name="update_student" value="Update"></input>
        
            <?php
        
    ?>
</form>



<?php include("footer.php")?>