<?php
$conn = mysqli_connect("localhost","root","","test");
// $conn = mysqli_connect("localhost","my_user","my_password","my_db"); vspariga varianta

if(!$conn){
echo "Connection error:" . mysqli_connect_error();
}
