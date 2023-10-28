<?php

include "../includes/connection.php";

if(isset($_GET['delete_detail'])){
    $delete_id = $_GET['delete_detail'];

    $delete_data = "DELETE from `student_data` where id= $delete_id";
    $result_data = mysqli_query($con,$delete_data);
    if($result_data){
        echo "<script>alert('Student details deleted successfully')</script>";
        echo "<script>window.open('./admin.php','_self')</script>";
    }
}
?>