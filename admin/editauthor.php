<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM author where id = '$id'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Author</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Edit Author 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_author_process.php?id=<?php echo $row['id']; ?>" method = "Post">
                                        <div class="form-group">
                                            <label>Edit Author Name:</label>
                                            <input class="form-control" value="<?php echo $row['authorname']; ?>" name="editauthorname">
                                        </div>
                                      
                                       
                                        <a href="viewauthor.php"><button type="submit" class="btn btn-primary">Update</button></a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>

<?php
    include "include/footer.php";

?>