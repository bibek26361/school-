<?php
session_start();
require_once "../connection.php";
$emailname = $_POST['email'];
$password = $_POST['password'];
$mdpassword = md5($password);

$sql = "select * from teacher where email='$emailname' AND password='$mdpassword'";
$query = mysqli_query($conn,$sql);


if (mysqli_num_rows($query)>0){
    $_SESSION['is_logged_in'] = true;
    $userData = mysqli_fetch_assoc($query);
    $_SESSION['id'] = $userData['id'];
    $_SESSION['fullname'] = $userData['fullname'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['teacher'] ='teacher';

   
    header("Location: dashboard.php");

}
else{
    echo "<script>alert('Email or Password Invalid');
    window.open('teacherlogin.php','_SELF');
    </script>";
   
}


?>