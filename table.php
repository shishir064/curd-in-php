 <?php include('header.php') ?>
 <?php include('db.php') ?>


        <div class="btn d-flex justify-content-between align-items-center mb-3">
                <h3>Student Infomation</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD Student    
                </button>     
        </div>

        <table class="table" border="1">
            <thead style="background-color:black;color:white;">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM students";
                $check = mysqli_query($conn,$query);

                if (!$check){
                    die("something is wrong". mysqli_error($conn));
                }
                else{
                    while($row = mysqli_fetch_assoc($check)){
                        //sir
                       ?> 
                       <tr>
                           <td><?php echo $row['id']?></td>
                           <td><?php echo $row['name']?></td>
                           <td><?php echo $row['address']?></td>
                           <td><?php echo $row['contact']?></td>
                           <td><?php echo $row['gender']?></td>
                           <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a></td>
                           <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>   
                       </tr>
                      <?php
                    }
                }
                ?>
          
            </tbody>
         </table>
 <form action="create.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD Student Infomation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div>  
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
            <label>Address:</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div>
            <label>Gender:</label>
            <input type="text" name="gender" class="form-control">
        </div>
        <div>
            <label>Contact Number:</label>
            <input type="text" name="contact" class="form-control">
        </div>
    
        <div class="modal-footer">
            
           <form action="create.php" method="post">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" name="Add_Student" value="ADD"></input>
           </form>
           
        </div>
    </div>
</div>
</div>
</form>
        
 <?php include('footer.php') ?>