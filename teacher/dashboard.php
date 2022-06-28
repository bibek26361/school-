
<?php
include "include/header.php";

?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <?php 
                                
                                $facultysql = "SELECT * FROM faculty";
                                $facultyresult = mysqli_query($conn,$facultysql);
                                $totalfaculty = mysqli_num_rows($facultyresult);
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalfaculty; ?></div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewfaculty.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Faculty</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <?php
                                $studentsql = "SELECT * FROM students";
                                $studentresult = mysqli_query($conn, $studentsql);
                                $totalstudent = mysqli_num_rows($studentresult);
                                 ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalstudent; ?></div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewstudent.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Students</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <?php
                                $classsql = "SELECT * FROM class";
                                $classresult = mysqli_query($conn, $classsql);
                                $totalclass = mysqli_num_rows($classresult);
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalclass; ?> </div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewclass.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Class</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <?php
                                $subjectsql = "SELECT * FROM subject";
                                $subjectresult = mysqli_query($conn, $subjectsql);
                                $totalsubject = mysqli_num_rows($subjectresult);
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalsubject; ?></div>
                                    <div>Total subject</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewsubject.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Subject</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <?php
                                $booksql = "SELECT * FROM books";
                                $bookresult = mysqli_query($conn, $booksql);
                                $totalbook = mysqli_num_rows($bookresult);
                                 ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalbook; ?></div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewbooks.php">
                            <div class="panel-footer">
                                <span class="pull-left">View books</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            
    <?php
include "include/footer.php";

?>