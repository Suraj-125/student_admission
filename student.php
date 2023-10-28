<?php 
 include "../includes/connection.php";

  if(isset($_POST['add_student'])){
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $course = $_POST['course'];
    $qualification = $_POST['qualification'];
    
    // accessing the image
    $photo = $_FILES['photo']['name'];

    // Accessing image tmp name
    $temp_photo = $_FILES['photo']['tmp_name'];

    // Checking the condition
    if($fullname=="" or $dob=="" or $mobile=="" or $course=="" 
    or $qualification==""){
        echo "<style>alert('Please fill the all the input fields')</style>";
        exit();
    }
    else
    {
        move_uploaded_file($temp_photo,"../images/$photo");

        // insert query

    $insert_query = "insert into `student_data` (`name`, `dob`, `mobile`, `course`, `qualification`, `photo`, `date`) values
    ('$fullname','$dob','$mobile','$course','$qualification','$photo', NOW())";

    $result_query = mysqli_query($con, $insert_query);
    if($result_query)
    {
        echo "Successfully added";
    }else{
        echo "Not added";
    }
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="../styles/student.css">
</head>
<body>
<header class="header">
        <h2 class="main">Record-File</h2>
        <button class="admin"><a href='admin.php'>Admin</a></button> 
    </header>
    <h2 class="title">Student Admission Form</h2>

    <form action=" " method="post" class="student_form" enctype="multipart/form-data">
        <!-- personal Details -->

        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" required>

        <!-- Class/Course Details -->

        <label for="course">Course Details</label>

        <input type="text" name="course" required>

        <!-- Previous Qualification -->

        <label for="qualification">Previous Qualification:</label>
        <input type="text" name="qualification" required>

        <!-- Photograph Upload -->

        <label for="photo">Upload Photograph</label>
        <input type="file" name="photo" accept="image/*" required>

        <input type="submit" name="add_student" value="Submit">
    </form>
</body>
</html>