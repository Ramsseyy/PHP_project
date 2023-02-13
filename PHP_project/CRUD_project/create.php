<?php include "header.php" ?>
<link rel="stylesheet" href="create.css">


<?php 
if(isset($_POST['create'])) 
{


$FName = $_POST['FirstName'];
$LName = $_POST['LastName'];
$DoB = $_POST['DoB'];
$AptD = $_POST['AptD'];
$AptT = $_POST['AptT'];


$query= "INSERT INTO users( FirstName, LastName, Dob, AptD, AptT) VALUES('{$FName}','{$LName}','{$DoB}', '{$AptD}', '{$AptT}' )";
$add_student = mysqli_query($con,$query);

if(!$add_student) {
    echo "something went wrong" . mysqli_error($con);
}

else{
    echo "<script type='text/javascript'>alert('student added successfully!')</script>";
}
}
?>

<h1 class="">Add Patient Details</h1>
<div class="container">
<form action="" method="post">
<div class="row">

<div class="form-group col">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" name="FirstName" class="form-control" placeholder="John">
</div>

<div class="form-group col">
    <label for="LastName" class="form-label">Last Name</label>
    <input type="text" name="LastName" class="form-control" placeholder="Doe">
</div>
</div>

<div class="form-group">
    <label for="DoB" class="form-label">Date Of Birth</label>
    <input type="text" name="DoB" class="form-control" placeholder="month/day/year">
</div>

<div class="form-group">
    <label for="AptD" class="form-label">Appointment Date</label>
    <input type="text" name="AptD" class="form-control" placeholder="month/day/year">
</div>

<div class="form-group">
    <label for="AptT" class="form-label">Appointment Time</label>
    <input type="text" name="AptT" class="form-control" placeholder="12:00am - 12:00pm">
</div>


<div class="form-group">
    <input type="submit" name="create" class="btn mt-2" value="submit">
    <a href="home.php" class="btn mt-2"> Back </a>
</div>

</form>
</div>


<footer class="footer">&copy;Anonymous Associates
</footer>




