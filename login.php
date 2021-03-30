<?php
include('config/db_connect.php');

$post = $_POST;

$email = $post['lemail'];
$password = $post['lpassword'];

$query="SELECT * FROM Test WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if($count>0){
    echo "Login Successful";
}
else{
    echo "Login Not Successful";
}



// if ($email){

//     $users = [
//         [
//             'lemail' => 'John',
//             'lpassword' => 'Doe'
//         ],
//         [
//             'lemail' => 'Carl',
//             'lpassword' => 'Doe'
//         ]
//     ];

//     $found = false;

//  //   $user = 'Carl';

//     foreach ($users as $user){
//         if ($email == $user['lemail'] && $password == $user['lpassword']){
//             $found = true;
//             break;
//         }
//     }

//     if ($found){
//         echo "Sveiks ".$email;
//     }else{
//         echo "Nepareizi dati";
//     }
// }