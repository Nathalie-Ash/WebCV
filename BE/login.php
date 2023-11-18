<?php
$un = $_POST["username"];
$pass = $_POST["password"];

$usersJson = file_get_contents('users.json');
$usersArray = json_decode($usersJson, true);

$loggedIn = false;

foreach ($usersArray as $user) {
    if ($un == $user["username"] && $pass == $user["password"]) {
        $loggedIn = true;
        break;
    }
}

if ($loggedIn) {
    session_start();
        $_SESSION["username"]=$un;
        $_SESSION["fullname"]=$user["fullname"];
        echo "login successfull";
    header("location:../pages/CV.php");
} else {
    header("location:../pages/index.php");
    echo "Wrong username or password";
}
?>
