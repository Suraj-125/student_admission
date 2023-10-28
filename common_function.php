<?php
 include "../includes/connection.php";




 function student_table(){
    global $con;
    $select_query = "Select * from `student_data` order by name";
    $result_query = mysqli_query($con,$select_query);
    while($row = mysqli_fetch_assoc($result_query)){
        $id = $row['id'];
        $name = $row['name'];
        $dob = $row['dob'];
        $mobile = $row['mobile'];
        $course = $row['course'];
        $qualification = $row['qualification'];
        $photo = $row['photo'];
        $date = $row['date'];
    
        echo " 
        <tr>
        <td>$id</td>
        <td><img src = '../images/$photo'></td>
        <td><a href ='student_details.php?card_detail=$id'>$name</a></td>
        <td>$dob</td>
        <td>$mobile</td>
        <td>$course</td>
        <td>$qualification</td>
        <td>$date</td>
        <td><a href='update.php?edit_details=$id'>Edit</a></td>
        <td><a href='admin.php?delete_detail=$id'>Delete</a></td>


    </tr> 
    " ;
    }
 }

//  Get search deatails

function search_course(){
    global $con;
    if(isset($_GET['submit_name'])){
        $user_search = $_GET['student_name'];
    $search_query = "Select * from `student_data` where name like '%$user_search%' or mobile like '%$user_search%'  ";
    $result_query = mysqli_query($con,$search_query);
    $number_of_rows = mysqli_num_rows($result_query);
    if($number_of_rows==0){
        echo "<h2 style ='text-align:center; margin-bottom:20px'>Sorry! No Records Found</h2>";
    }
    while($row = mysqli_fetch_assoc($result_query)){
        $id = $row['id'];
        $name = $row['name'];
        $dob = $row['dob'];
        $mobile = $row['mobile'];
        $course = $row['course'];
        $qualification = $row['qualification'];
        $photo = $row['photo'];
        $date = $row['date'];
    
        echo " 
        <tr>
        <td>$id</td>
        <td><img src = '../images/$photo'></td>
        <td><a href ='student_details.php?card_detail=$id'>$name</a></td>
        <td>$dob</td>
        <td>$mobile</td>
        <td>$course</td>
        <td>$qualification</td>
        <td>$date</td>
        <td><a href='update.php?edit_details=$id'>Edit</a></td>
        <td><a href='admin.php?delete_detail=$id'>Delete</a></td>
    </tr> 
    " ;
    }
}
}

?>