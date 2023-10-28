<?php

$con = mysqli_connect("localhost","root","","students");

// Check connection

if(!$con){
    die("Connection failed:".mysqli_connect_errno());
}


?>
