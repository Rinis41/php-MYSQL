<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $tempPass = $_POST['password'];
    $Password = password_hash($tempPass,PASSWORD_DEFAULT);

    $tempConfirm =$_POST['confirm_password'];
    $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password)){
}
else {
    $sql = "INSERT INTO users (emri, username, email, password, confirm_password) values (:emri, :username, :email, :password, :confirm_password)";

    $insertsql = $conn->prepare($sql);

    $insertsql->bindParam(':emri', $emri);
    $insertsql->bindParam(':username', $username);
    $insertsql->bindParam(':email', $email);
    $insertsql->bindParam(':password', $password);
    $insertsql->bindParam(':confirm_password', $confirm_password);

    $insertsql->execute();

    header("Location: login.php");
}
}

?>