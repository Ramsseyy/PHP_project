<?php include "header.php" ?>
<link rel="stylesheet" href="home.css">
<div class="container">
    <h1 class="text-center">Appointment List</h1>
    <a href="create.php" class="btn btn-outline-dark mb-2"> <i class="bi bi-person-plus"></i> Add Appointment Information</a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th class="text-center" scope="col">First Name</th>
                <th class="text-center" scope="col">Last Name</th>
                <th class="text-center" scope="col">Date of Birth</th>
                <th class="text-center" scope="col">Date of Appointment</th>
                <th class="text-center" scope="col">Time of Appointment</th>

                <th class="text-center"scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>
        </thead>
    
        <tbody>
        <tr>
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
        
            echo "<tr >";
            echo "<td class=text-center >{$FName}</td>";
            echo "<td class=text-center >{$LName}</td>";
            echo "<td class=text-center >{$DoB}</td>";
            echo "<td class=text-center >{$AptD}</td>";
            echo "<td class=text-center >{$AptT}</td>";
            echo "<td class='text-center'> <a href='view.php?student_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View </a></td>";
            echo "<td class='text-center'> <a href='update.php?edit&student_id={$id}' class='btn btn-secondary'> <i class='bi bi-pencil'></i> EDIT </a></td>";
            echo "<td class='text-center'> <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE </a></td";
            echo "</tr>";
        }
        ?>

        </tr>
    </tbody>
    </table>
</div>


 <div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
</div>
<footer class="footer text-center mt-5">&copy;Anonymous Associates
</footer>

 