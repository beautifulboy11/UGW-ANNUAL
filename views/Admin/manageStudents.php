<?php 
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNZA Graduation Clearance System | Administrator</title>
    <!-- Core CSS - Include with every page -->
    <link href="../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->    
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper" >
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
                    <img src="../../img/logo1.png" alt="Logo" class="img-responsive img-circle" />                
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-left">
                <li>
                    <span style="color:#fff;"><a href="index.php"><h2 style="color:#fff;">UNIVERSITY OF ZAMBIA GRADUATION CLEARANCE</h2></a></span>
                </li>
            </ul>

            <ul class="nav navbar-top-links navbar-right">

                <!-- main dropdown -->                            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['fullname'];?></a>
                        </li>                        
                        <li class="divider"></li>
                        <li><a href="../../index.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
        </nav>
        <!-- end navbar top -->

               
        <div id="page-wrapper" style="margin-left:0px;">
            <div class="row" style="margin-left:50px; margin-right:50px; margin-top:30px;">                
                <div class="col-md-12" style="">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" style=" margin-top:30px;">
                    <img  alt="UNZA Logo" src="../../img/logotext.png" max-height="150" class="img-responsive">
                    </div>            
                    <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header text-center"><i class="fa fa-home"></i>&nbsp;Student Management</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-4"> </div>
                <div class="col-lg-4" style="margin-top:30px;">
                    <div class="text-center">
                        <!--i class="fa  fa-file fa-3x"></i-->  
                       
                    <a href="form/index.php" class="btn btn-block btn-success btn-lg" style="background-color:green;"><i class="fa fa-plus fa-fw"></i>Add Student</a><br/>
                    
                    <a href="edit_records/index.php" class="btn btn-block btn-success btn-lg" style="background-color:green;"><i class="fa fa-edit fa-fw"></i>Edit Student</a><br/>
               
                    <a href="view_records/view_students.php" class="btn btn-block btn-success btn-lg" style="background-color:green;"><i class="glyphicon glyphicon-zip"></i>Archive Student</a><br/>
                    <a href="request.php" class="btn btn-block btn-success btn-lg" style="background-color:green;"><i class=""></i>&nbsp;Blocked Clearance Request</a>
                    </div>
                </div>
                <div class="col-lg-4"> </div>               
                <!--end quick info section -->
            </div>
            
            <div class="row">
            <!--quick info section -->
            <!--end quick info section -->
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../assets/plugins/pace/pace.js"></script>
    <script src="../../assets/scripts/siminta.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
<?php
}else{
    header('location: ../../index.php');
}
?>