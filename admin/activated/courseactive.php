<?php
require_once "../../connection.php";
$status = "Active";
$id = $_GET['id'];

$sql = "UPDATE course SET status = '$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
    header("Location: ../viewcourse.php");
}
else{
    echo "<script> alert('Error!)'</script>";
}

?>