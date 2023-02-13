<?php  include 'header.php'?>
<body style=" background: #bde0fe;">
<h1 class="text-center">Patient Details</h1>

<div class="container_2">
    <a href="home.php" class="btn mb-3"style=" background-color: transparent;
    border: 2px solid #7f5539;
    width: 200px;
    height: 45px;
    margin-left: 112px;
    font-size: 16px;
    border-radius: 10px;
    color: #7f5539;"> Back </a>
</div>

  <div class="container">
  
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['student_id'])) {
                  $student_id = $_GET['student_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM users WHERE id = {$student_id} ";  
                  $view_students= mysqli_query($con,$query);            
              }
                  while($row = mysqli_fetch_assoc($view_students))
                  {
                    $id = $row['id'];
                    $FName = $row['FirstName'];
                    $LName = $row['LastName'];
                    $DoB = $row['DoB'];
                    $AptD = $row['AptD'];
                    $AptT = $row['AptT']; 

                    echo "<div class='card' style='width: 850px; height:650px; margin-left: 200px; margin-top: 80px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;'>";
                    echo "<div class='card-body'>";
                    echo "<h2 class='card-title mb-3 text-center' style='margin-top: 100px;'>{$LName}, {$FName}</h2><br>";
                    echo "<h4 class='card-subtitle mb-3 text-muted text-center'>DOB: {$DoB}</h4><br>";
                    echo "<h4 class='card-subtitle mb-3 text-muted text-center'>Appointment Date: {$AptD}</h4><br>";
                    echo "<h4 class='card-subtitle mb-3 text-muted text-center'>Appointment Time: {$AptT}</h4><br>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
  </div>

<!-- Footer -->
<footer class="footer">&copy;Anonymous Associates
</footer>
</body>