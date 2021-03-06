<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM author";
$result = mysqli_query($conn,$sql);
?>  

<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float:right; ">Add Author</button>
                
                

                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Author Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Author Name</th>
                                            <th>Author Status</th>
                                            <th>action</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($result)>0){ ?> 

                                                  <?php while ($row=mysqli_fetch_array($result)){ ?>
                                                    <tr class="odd gradeX">
                                            <td><?php echo $row["authorname"]; ?></td>
                                            <td><?php echo $row["status"]; ?></td>
                                            
                                            <td class="center"><a href="editauthor.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_author.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            
                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/authordeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/authoractive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>

                                                
                                                </td>
                                        
                                        <?php } ?>


                                        </tr>
                                                    
                                                  <?php } ?>
                                           <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Author Add:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" action="author_add_process.php" method="Post">
      <div class="modal-body">
        <div class="model-group">
        <label>Enter Author Name</label>
        <input class="model-control" name="authorname" required>
        </div>
        <div class="form-group"> 
            <label>Status:</label><br>
            <label class="radio-inline">
            <input type="radio" name="status" id="optionsRadiosInline1" value="Active" required>Active
            </label>
            <label class="radio-inline">
            <input type="radio" name="status" id="optionsRadiosInline2" value="Deactive"required>Deactive
            </label>
            
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    </div>
    </div>
  </div>
</div>
<?php 
include "include/footer.php"
?>
      




