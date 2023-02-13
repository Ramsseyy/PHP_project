<?php include "header.php" ?>
<link rel="stylesheet" href="home.css">
<body style=" background: #bde0fe; font-family: 'Quicksand', sans-serif;'">
    

<div class="container">
    <h1 class="text-center">Appointment List</h1>


<div class="container_2">
    <a href="index.php" class="btn mb-3"style=" background-color: transparent;
    border: 2px solid #7f5539;
    width: 200px;
    height: 45px;
    font-size: 16px;
    border-radius: 10px;
    color: #7f5539;"> Back </a>
</div>
<a href="create.php" class="btn btn-outline-dark"> <i class="bi bi-person-plus"></i> Add Appointment Information</a>
    <div class="rows" style="display:flex; flex-wrap: wrap;">
        <?php 
        $query="SELECT * FROM users" ;
        $view_students = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($view_students)){
            $id = $row['id'];
            $FName = $row['FirstName'];
            $LName = $row['LastName'];
            $DoB = $row['DoB'];
            $AptD = $row['AptD'];
            $AptT = $row['AptT'];
        
    

           echo "<div class='card' style='width: 450px; height:250px; margin:90px; margin-bottom: 20px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;'>";
           echo "<div class='card-body' >";
           echo "<h5 class='card-title mb-3 text-center'>{$LName}, {$FName}</h5>";
           echo "<h6 class='card-subtitle mb-3 text-muted text-center'>DOB: {$DoB}</h6>";
           echo "<h6 class='card-subtitle mb-3 text-muted text-center'>Appointment Date: {$AptD}</h6>";
           echo "<h6 class='card-subtitle mb-3 text-muted text-center'>Appointment Time: {$AptT}</h6>";
           echo    "<a href='view.php?student_id={$id}' class='btn' style='margin-left: 0px; margin-top:40px;'> <i class='bi bi-eye'></i> View </a>";
           echo    "<a href='update.php?edit&student_id={$id}' class='btn' style='margin-left:90px; margin-top:40px;'> <i class='bi bi-pencil'></i> EDIT </a>";
           echo    "<a href='delete.php?delete={$id}' class='btn' style='margin-left:50px; margin-top:40px;'> <i class='bi bi-trash' ></i> DELETE </a>";
           echo "</div>";
           echo "</div>";

        }
        ?>
</div>
</div>

<footer class="footer text-center mt-5">&copy;Anonymous Associates
</footer>
</body>

 