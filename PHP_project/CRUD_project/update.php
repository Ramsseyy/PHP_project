<!-- Footer -->
<?php include "header.php"?>
<link rel="stylesheet" href="create.css">

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['student_id']))
    {
      $studentid = $_GET['student_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $studentid ";
      $view_students= mysqli_query($con,$query);

      while($row = mysqli_fetch_assoc($view_students))
        {
             $id = $row['id'];
                    $FName = $row['FirstName'];
                    $LName = $row['LastName'];
                    $DoB = $row['DoB'];
                    $AptD = $row['AptD'];
                    $AptT = $row['AptT'] ;
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $FName = $_POST['FirstName'];
      $LName = $_POST['LastName'];
      $DoB = $_POST['DoB'];
      $AptD = $_POST['AptD'];
      $AptT = $_POST['AptT'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET FirstName = '{$FName}' , LastName = '{$LName}' , DoB= '{$DoB}', AptD = '{$AptD}', AptT= '{$AptT}' WHERE id = $studentid";
      $update_student = mysqli_query($con, $query);
      echo "<script type='text/javascript'>alert('Student data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Student Details</h1>
  <div class="container ">
    <form action="" method="post">
    <div class="row">

      <div class="form-group col">
        <label for="FirstName" class="form-label" >First Name</label>
        <input type="text" name="FirstName" class="form-control" value="<?php echo $FName  ?>">
      </div>

      <div class="form-group col">
        <label for="LastName" class="form-label" >Last Name</label>
        <input type="text" name="LastName"  class="form-control" value="<?php echo $LName ?>">
      </div>
  </div>
    
      <div class="form-group">
        <label for="DoB"class="form-label">Date of Birth</label>
        <input type="text" name="DoB"  class="form-control" value="<?php echo $DoB  ?>">
      </div>    

      <div class="form-group">
        <label for="AptD" class="form-label">Appointment Date</label>
        <input type="text" name="AptD"  class="form-control" value="<?php echo $AptD  ?>">
      </div>    

      <div class="form-group">
        <label for="AptT" class="form-label">Appointment Time</label>
        <input type="text" name="AptT"  class="form-control" value="<?php echo $AptT  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn mt-2" value="update">
          <!-- a BACK button to go to the home page -->
      <a href="home.php" class="btn mt-2"> Back </a>
    <div>

    </form>    
  </div>


<!-- Footer -->
<footer class="footer">&copy;Anonymous Associates
</footer>