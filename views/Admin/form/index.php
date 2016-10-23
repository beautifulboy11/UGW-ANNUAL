<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>University of Greenwich-ANNUAL MAGAZINE</title>
            <!-- Core CSS - Include with every page -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="icon" href="../../../favicon.ico">		
            <meta name="" content="annual magazine">
            <!--Style Sheetsp-->
            <link href="../../../assets/css/AdminLTE.min.css" rel="stylesheet">
            <link href="../../../assets/css/skins/_all-skins.css" rel="stylesheet">
            <link href="../../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../../../assets/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="../../../assets/ionicons/css/ionicons.min.css">   
        </head>
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper">
                <!-- navbar top -->
                <header class="main-header">    
                    <a href="#" class="logo">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class="logo-mini"><b>U</b>GW</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg" style="margin-top:0px;">
                            <img src="../../../assets/img/logo.png" class="img-responsive" />
                        </span>
                    </a>    	
                    <nav class="navbar navbar-static-top">	      
                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a class="navbar-brand" style="font-family:Adobe Arabic;" href="#">UNIVERSITY of GREENWICH ANNUAL MAGAZINE</a>

                            </li>
                        </ul>
                        <!-- User Account: style can be found in dropdown.less -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">

                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-user"></i>
                                        <span class="hidden-xs"><?php echo $_SESSION['name'] ?></span>
                                    </a>
                                    <ul class="dropdown-menu">              
                                        <li class="user-body">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <!-- end navbar top -->
                <!-- navbar side -->
                <aside class="main-sidebar" >
                    <section class="sidebar">	      
                        <div class="user-panel">
                            <div style="margin-left:10px;"class="pull-left image">
                                <img src="../../../assets/img/boxed-bg.jpg" class="img-circle" alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <p></p>
                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                            </div>
                        </div>

                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="active treeview">
                                <a href="../index.php">
                                    <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>	          
                            </li>	        	       
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span>User Accounts</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="../manageStudents.php">
                                            <i class="fa fa-circle-o text-aqua"></i>
                                            <span>Student Accounts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../manageStaff.php">
                                            <i class="fa fa-circle-o text-aqua"></i>
                                            <span>Staff Accounts</span>
                                        </a>
                                    </li>


                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="fa fa-gears"></i>
                                    <span>Date Settings</span>		            			
                                </a>
                                <ul class="treeview-menu">
                                    <li></li>
                                    <li></li>					          
                                </ul>
                            </li>
                        </ul>

                    </section>

                </aside>
                <!-- end navbar side -->
                <!--  page-wrapper -->
                <div class="content-wrapper" style="background-color:#ffffff;">
                    <section class="content-header">
                        <!-- Page Header -->                        
                            <h1 class="page-header text-center">Add Student</h1>                        
                        <!--End Page Header -->
                    </section>
                    <section class="content">
                    <div class="">
                        <img  alt="UNZA Logo" src="../../../assets/img/Banner.png" width="960" max-height="150">
                    </div>
                    <div class="">
                        <h1 align="center">REGISTRATION FORM</h1>
                        <hr style="margin-left:100px; margin-right:100px;" />

                        <br/>
                    </div> 
                    <div class="row" >
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['insert_sucess'])) {
                                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Congratulations!</strong> You have successfully submitted your Graduation Clearance form!
                        </div";
                                unset($_SESSION['insert_sucess']);
                            } elseif (isset($_SESSION['insert_failure'])) {
                                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Oh snap!</strong> Something is wrong! Please Check the information you have provided. If problem persists, contact the system Administrator
                        </div";
                            }
                            ?>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="firstForm" action="../../../data_modules/admin_submit.php" method="POST">


                                <div class="form-group">

                                    <label for="firstName" class="col-sm-2 col-md-3 control-label">
                                        First Name:
                                    </label>
                                    <div class="col-sm-9 col-md-4">
                                        <input class="form-control" name="firstName" type="text" required/>


                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="lastName " class="col-sm-2 col-md-3 control-label">
                                        Last Name:
                                    </label>
                                    <div class="col-sm-9 col-md-4">
                                        <input class="form-control" name="lastName" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="studentId " class="col-sm-2 col-md-3 control-label">
                                        Student ID:
                                    </label>
                                    <div class="col-sm-9 col-md-4">
                                        <input class="form-control" name="studentId" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="nrc " class="col-sm-2 col-md-3 control-label">
                                        N. R. C:
                                    </label>
                                    <div class="col-sm-9 col-md-3">
                                        <input class="form-control" name="nrc" type="text" placeholder="..................../................./........" required/>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="program " class="col-sm-2 col-md-3 control-label">
                                        Program:
                                    </label>
                                    <div class="col-sm-9 col-md-3">

                                        <select class="form-control" name="program">

                                            <option value="Bachelor of Arts In Education" selected="4">B.A Ed</option>
                                            <option value="Bachelor of Science">BSc</option>
                                            <option value="Master of Science">MSc</option>
                                            <option value="Doctor of Philosophy">PhD</option>                               
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="yearofstudy " class="col-sm-2 col-md-3 control-label">
                                        Year Of Study:
                                    </label>
                                    <div class="col-sm-9 col-md-4">
                                        <select class="form-control" name="yos">
                                            <option value="4" selected="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="permAd" class="control-label col-sm-2 col-md-3">Permanent Adress:</label>
                                    <div class="col-md-4 col-sm-9">
                                        <input type="text" class="form-control" name="permAd" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="school " class="col-sm-2 col-md-3 control-label">
                                        School:
                                    </label>
                                    <div class="col-sm-9 col-md-4">
                                        <select class="form-control" name="school" id="schoolddl"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="school " class="col-sm-2 col-md-3 control-label">
                                        Department:
                                    </label>
                                    <div class="col-sm-9 col-md-4">
                                        <select class="form-control" name="department" id="departmentddl">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">  
                                    
                                    <input type="submit" class="btn btn-success pull-right" id="submitButton" value="Submit" />
                                </div>
                            </form>                
                        </div>
                    </div>
                </section>
                </div>

            </div>

            <script type="text/javascript" src="../../../assets/plugins/jquery-1.10.2.js"></script>       
            <script src="../../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
            <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
            <script src="../../../assets/scripts/app.min.js" type="text/javascript"></script>

            <script src="js/app.js"></script>
        </body>
    </html>
    <?php
} else {
    header('location: ../../index.php');
}
?>