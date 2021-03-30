<?php
$post = $_POST;

$email = $post['lemail'];
$password = $post['lpassword'];

if ($email){

    $users = [
        [
            'lemail' => 'John',
            'lpassword' => 'Doe'
        ],
        [
            'lemail' => 'Carl',
            'lpassword' => 'Doe'
        ]
    ];

    $found = false;

 //   $user = 'Carl';

    foreach ($users as $user){
        if ($email == $user['lemail'] && $password == $user['lpassword']){
            $found = true;
            break;
        }
    }

    if ($found){
        echo "Sveiks ".$email;
    }else{
        echo "Nepareizi dati";
    }
}