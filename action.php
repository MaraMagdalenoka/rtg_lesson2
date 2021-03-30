<?php
$post = $_POST;

$name = $post['name'];
$surname = $post['surname'];

if ($name){

    $users = [
        [
            'name' => 'John',
            'lname' => 'Doe'
        ],
        [
            'name' => 'Carl',
            'lname' => 'Doe'
        ]
    ];

    $found = false;

    $user = 'Carl';

    foreach ($users as $user){
        if ($name == $user['name'] && $surname == $user['lname']){
            $found = true;
            break;
        }
    }

    if ($found){
        echo "Sveiks ".$name.'  '.$surname;
    }else{
        echo "Nepareizi dati";
    }
}