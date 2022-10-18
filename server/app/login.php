<?php


function login($data){
    global $conn;
    $email = $data['email'];
    $password = $data['password'];
    $sql_login= "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password' ";
    $result = mysqli_query($conn, $sql_login);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = mysqli_fetch_assoc($result);
        header('location:http://accountant.loc/view/home.php');
    }
}

function logout(){
    session_start();
    session_destroy();
    header('location:http://accountant.loc/view/auth/login.php');
}