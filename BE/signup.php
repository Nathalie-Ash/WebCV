<?php

function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.php");
    }
}

$user=new stdClass();

$user->fullname=VarExist($_POST["fullname"]);
$user->username=VarExist($_POST["username"]);
$user->pass=VarExist($_POST["password"]);
$user->sex=VarExist($_POST["sex"]);
$user->birthdate=VarExist($_POST["birthdate"]);


if (InsertUserToFilefromObject($user)) {
   
    header("location:../index.php");
    echo "Signup successful!";
    echo "$user";
} else {
    echo "Signup failed!";
}

function InsertUserToFilefromObject($user){
    $usersfile= file_get_contents('users.json');
    $userarray = json_decode($usersfile, true);

    $userarray[] = array(
        "fullname" => $user->fullname,
        "username" => $user->username,
        "password" => $user->pass,
        "sex" => $user->sex,
        "birthdate" => $user->birthdate,
        
    );


    $newuser = json_encode($userarray, JSON_PRETTY_PRINT);

    if (file_put_contents('users.json', $newuser)) {
        return true; //signup successful
    } else {
        return false; //signup failed
    }
}

?>