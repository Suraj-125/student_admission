<?php

include "../includes/connection.php";
if(isset($_GET['edit_details'])){
    $edit_id = $_GET['edit_details'];

    $get_data = "select * from `student_data` where id= $edit_id";
    $result_data = mysqli_query($con,$get_data);
    $row = mysqli_fetch_assoc($result_data);
    $name = $row['name'];
    $dob = $row['dob'];
    $mobile = $row['mobile'];
    $course = $row['course'];
    $qualification = $row['qualification'];
    $photo = $row['photo'];
}
?>


<html>
    <head>
        <link rel="stylesheet" href="../styles/student.css">
    </head>
    <body>
    <div class="container">
    <h1 class="update-h1">Update Details</h1>
    <form class="update_data" method="post" enctype="multipart/form-data">
        <label for="">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">

        <label for="">DOB:</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>">

        <label for="">Mobile:</label>
        <input type="number" name="mobile" value="<?php echo $mobile; ?>">

        <label for="">Course:</label>
        <input type="text" name="course" value="<?php echo $course; ?>">

        <label for="">Qualification:</label>
        <input type="text" name="qualification" value="<?php echo $qualification; ?>">

        <div class="show-images">
        <input type="file" name="photo" accept="../images/*" value="<?php echo $photo; ?>">
        <img src="../images/<?php echo $photo; ?>" alt="">
        </div>

        <input type="submit" value="Update" name="edit_details">
    </form>
</div>
    </body>
</html>


<?php

if(isset($_POST['edit_details'])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $course = $_POST['course'];
    $qualification = $_POST['qualification'];

    $photo = $_FILES['photo']['name'];
    $tmp_photo = $_FILES['photo']['tmp_name'];

    if($name=="" or $dob=="" or $mobile =="" or $course=="" or $qualification=="")
    {
        echo "<script>alert('Please fill all the input fields')</script>";
        exit();
    }else{
        move_uploaded_file($tmp_photo,"../images/$photo");

        $update_query = "update `student_data` set name='$name', dob= '$dob', mobile = '$mobile', course = '$course', 
        qualification='$qualification',date = NOW() where id ='$edit_id'";
        $result_query = mysqli_query($con,$update_query);
    }
    if($result_query){
        echo "<script>alert('Product updated successfully')</script>";
        echo "<script>window.open('./admin.php','_self')</script>";
    }
}
?>