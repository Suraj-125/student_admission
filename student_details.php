
<html>
    <head>
        <link rel="stylesheet" href="../styles/student.css">
    </head>
    <body>
<?php 
include "../includes/connection.php";

if(isset($_GET['card_detail'])){
    $edit_id = $_GET['card_detail'];

    $get_data = "select * from `student_data` where id= $edit_id";
    $result_data = mysqli_query($con,$get_data);
    $row = mysqli_fetch_assoc($result_data);
    $name = $row['name'];
    $dob = $row['dob'];
    $mobile = $row['mobile'];
    $course = $row['course'];
    $qualification = $row['qualification'];
    $photo = $row['photo'];
    $date = $row['date'];



echo "
<div class='details'>
<div class='image'>
    <img src='../images/$photo'  alt='>
</div>
<div class='student_details'>
    <h2 class='name'>$name</h2>
    <p class='info'><strong>Date of Birth :</strong>$dob</p>
    <p class='info'><strong>Mobile No. :</strong>$mobile</p>
    <p class='info'><strong>Course :</strong>$course</p>
    <p class='info'><strong>Previous Qualification :</strong>$qualification</p>
    <p class='info'><strong>Date of Admission :</strong>$date</p>
</div>
<button class='print'>Print</button>
</div>
";
}
?>
    </body>
</html>





