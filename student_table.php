<?php
include "../includes/connection.php";
include "../functions/common_function.php";
?>

<style>
    .table{
        margin: 20px 0;
    }
    table{
        margin: 50px 0;
    border-collapse: collapse;
    width: 90%;
    text-align: center;
    margin: auto;
    }

tr th{
    border: 1px solid black;
    background-color: black;
    color: #fff;
    padding: 5px 0;
}

tr td{
    border: 1px solid black;
    padding: 5px 0;
    background-color: whitesmoke;
}

td a{
    text-decoration: none;
    color: #000;
}

td img{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 1px solid black;
}

</style>
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
    </tr>

    <?php 
            student_table();     
    ?>
   
</table>
</div>