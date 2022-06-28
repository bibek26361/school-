<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$studentsql = "SELECT * FROM students where id = '$id'";
$studentresult = mysqli_query($conn,$studentsql);
$studentrow=mysqli_fetch_assoc($studentresult);
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Signup</title>
    <link rel="icon" href="include/nature.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="reset_student_pswd_process.php?id=<?php echo $id; ?>">
                            <fieldset>
                                <div class="form-group">
                                    <label>Students Full Name:</label>
                                    <input class="form-control"  value="<?php echo $studentrow['studentName']; ?>" name="studentname" placeholder="Edit Students Name"  required>
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input class="form-control" value="<?php echo $studentrow['address']; ?>" placeholder="Enter address" name="address" required>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input class="form-control" value="<?php echo $studentrow['email']; ?>" placeholder="Enter address" name="email" type="email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Password..." id="password" type="password"  name="password"  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Conform Your Password..." id="confpassword" type="password"  name="confpassword"  required>
                                </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Reset</button>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function matchPassword(){
            var password = document.getElementById("password");
            var cpassword = document.getElementById("confpassword");
            if(password!=cpassword){
                alert("Password did not match");
            }
            
        }

    </script>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

</body>

</html>
