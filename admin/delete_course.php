<?php

require_once "../connection.php";




$id = $_GET['id'];
$sql =  "DELETE FROM course  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewcourse.php'</script>";
}


?>
