<?php
include "../includes/connection.php";
include "../functions/common_function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="../styles/student.css">
    
</head>
<body>
    <header class="header">
        <h2>Welcome Admin !</h2>

        <form class="search-data" method="get" action="search.php">
                <input type="search" name="student_name" placeholder="Search">
                <input type="submit" name="submit_name" value="Search">
        </form>    
    </header>

    <div class="table">
    <table>

    <tr>
        <th>Sr.No</th>
        <th>Photo</th>
        <th>Name</th>
        <th>D.O.B</th>
        <th>Mobile</th>
        <th>Course</th>
        <th>Qualification</th>
        <th>Date</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php 
            student_table();   

            if(isset($_GET['delete_detail'])){
                include ("delete_detail.php");
            }
            
    ?>

   
   
</table>
</div>

       

             
    
</body>
</html>