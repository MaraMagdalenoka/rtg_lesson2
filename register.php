<?php

include('config/db_connect.php');

$name = mysqli_real_escape_string($conn, $_POST['name']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO test(name, surname, email, password) VALUES ('$name','$surname','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "Success";
} else {
    echo 'query error:' .mysqli_error($conn);

}
