<?php 
session_start();
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNZA Graduation Clearance System | Administrator Dashboad</title>
    <!-- Core CSS - Include with every page -->
    <link href="../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../../assets/css/style.css" rel="stylesheet" />
    <link href="../../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="../../../img/logo1.png" alt="Logo" class="img-responsive img-circle" />                    
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-left">
                <li>
                    <span style="color:#fff;"><a href="#"><h2 style="color:#fff;">UNIVERSITY OF ZAMBIA GRADUATION CLEARANCE</h2></a></span>
                </li>
            </ul>

            <ul class="nav navbar-top-links navbar-right">
               
                    <ul class="dropdown-menu dropdown-alerts">                       
                        <li>
                            <a href="tables.php">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>
                                    You Have New Student Requesting Clearance
                                </div>
                            </a>
                        </li>                                       
                    </ul>
                    <!-- end dropdown-alerts -->
                </li-->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>                        
                        <li class="divider"></li>
                        <li><a href="../../../index.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
        </nav>
        <!-- end navbar top -->
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">                            
                            <div class="user-info">
                                <div><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['fullname'];?></a></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li >
                        <a href="../index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
                      <li class="divider"></li>
                    <li>
                        <a href="../form/index.php"><i class="fa fa-plus fa-fw"></i>Add Student</a>
                    </li>
                    <li>
                        <a href="../edit_records/index.php"><i class="fa fa-edit fa-fw"></i>Edit Student</a>
                    </li>
                    <li>
                        <a href="../view_records/view_students.php"><i class="fa fa-minus fa-fw"></i>Delete Student</a>
                    </li> 
                    <li class="divider"></li>
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-plus fa-fw"></i>Add Staff</a>
                    </li> 
                    <li>
                        <a href="../edit_records/staff.php"><i class="fa fa-edit fa-fw"></i>Edit Staff</a>
                    </li>
                    <li>
                        <a href="../view_records/view_staff.php"><i class="fa fa-minus fa-fw"></i>Delete Staff</a>
                    </li>
                                                                                          
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper" style="background-color:#ffffff;">
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Staff</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <!--div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $_SESSION['fullname'];?></b>
                    </div-->
                </div>
                <!--end  Welcome -->
            </div>
               <div class="">
                <img  alt="UNZA Logo" src="../../../img/Banner.png" width="960" max-height="150">
            </div>
                <div class="">
                <h1 align="center">STAFF REGISTRATION FORM</h1>
                <hr style="margin-left:100px; margin-right:100px;" />
                <!--div style="margin-left:100px; margin-right:100px;">
                <p><strong>Instructions:</strong></p>
                1.  Please complete the sections below and submit this form. Please note that <i><strong>partially</strong></i> filled forms will not be submitted.<br/>
                </div-->
                <br/>
                </div> 
                 <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['insert_sucess'])){
                         echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Congratulations!</strong> entry was successful!
                        </div";
                        unset($_SESSION['insert_sucess']);
                        }elseif(isset($_SESSION['insert_failure'])){
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
                <form class="form-horizontal" role="form" id="firstForm" action="../../../data_modules/add_staff.php" method="POST">

                
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
                                Staff ID:
                            </label>
                            <div class="col-sm-9 col-md-4">
                                <input class="form-control" name="staffId" type="text" required/>
                            </div>
                        </div>
                        <!--div class="form-group">                            
                            <label for="nrc " class="col-sm-2 col-md-3 control-label">
                                N. R. C:
                            </label>
                            <div class="col-sm-9 col-md-3">
                                <input class="form-control" name="nrc" type="text" placeholder="..................../................./........" required/>
                            </div>
                        </div-->
                        <!--div class="form-group">
                             
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
                        </div-->
                        <div class="form-group">
                             
                                <label for="yearofstudy " class="col-sm-2 col-md-3 control-label">
                                    Position:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <select class="form-control" name="level">
                                        <option value="0" selected="true">Administrator</option>
                                        <option value="1">University Librarian</option>
                                        <option value="5">Dean of School</option>
                                        <option value="2">Dean of Student Affairs</option>
                                        <option value="3">Finance Department</option>
                                        <option value="4">Academic Affairs</option>
                                    </select>
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="permAd" class="control-label col-sm-2 col-md-3">Password:</label>
                                <div class="col-md-4 col-sm-9">
                                    <input type="Password" class="form-control" name="password" required/>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="school " class="col-sm-2 col-md-3 control-label">
                                    Confirm Password:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <input type="Password" class="form-control" name="confirm_password" id=""/>
                                </div>
                        </div>
                      
                        <div class="col-md-8 col-md-offset-2">
                        <!-- Table One -->
                     

                        <input type="submit" class="btn btn-success" id="submitButton" value="Submit" />
                        </div>
                </form>                
            </div>
        </div>
        <!--div class="footer">Copy Right</div-->
        </div>
        <!--br/-->
        
        
       
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../../../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../../assets/plugins/pace/pace.js"></script>
    <script src="../../../assets/scripts/siminta.js"></script>

    <script src="js/app.js"></script>
</body>
</html>
<?php
}else{
    header('location:../../../index.php');
}
?>