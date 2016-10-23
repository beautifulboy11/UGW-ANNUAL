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
            <link href="../../../assets/plugins/dataTables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
            <link href="../../../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
            <style>
                body{overflow: Initial;}
            </style>
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
                            <div style="margin-left:0px;"class="pull-left image">
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

                </aside>?>
                <!-- end navbar side -->
                <!--  page-wrapper -->
                
                <div class="content-wrapper" style=" background-color:#ffffff;">        
                    <div class="row">
                        <!--  page header -->
                        <div class="col-lg-12">
                            <h1 class="page-header text-center">Archive Staff Records </h1>
                        </div>
                        <!-- end  page header -->
                    </div>
                    <?php include_once('../../../model/StaffRecord.php'); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">                        
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive table-striped table-bordered table-hover" id="student">
                                            <thead>
                                                <tr>
                                                    <th>Staff ID</th>
                                                    <th>Full Name</th>
                                                    <th>Sur Name </th>                                                                            
                                                    <th>Password</th>
                                                    <th>Position</th>
                                                    <th>Access Level</th>                                            
                                                    <th>Action</th>                                                                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $result->fetch_array()) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $row['username'] ?></td>
                                                        <td><?= $row['name'] ?></td>
                                                        <td><?= $row['name'] ?></td>

                                                        <td><?= $row['password'] ?></td>
                                                        <td><?= $row['userlevel'] ?></td>
                                                        <td><?= $row['userlevel'] ?></td>                                       
                                                        <td><?php echo"<button class='btn btn-danger'>Delete</button>" ?></td>
                                                    </tr>

                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>                    
                </div>
                <!-- end page-wrapper -->
                <footer>
                    <?php include'../../../components/footer.php';?>
                </footer>
                
            </div>
            <!-- end wrapper -->

            <!-- Core Scripts - Include with every page -->
            <script src="../../../assets/plugins/jquery-1.10.2.js"></script> 
            <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
            <script src="../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
            <script src="../../../assets/plugins/pace/pace.js"></script>
            <!--script src="assets/scripts/siminta.js"></script-->
            <!-- Page-Level Plugin Scripts-->
            <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
            <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>


            <script type="text/javascript">
                $(document).ready(function () {
                    var table = $('#student').DataTable({

                    });
                    $('#student tbody tr td').on('click', 'button', function () {
                        var data = table.row($(this).parents('tr')).data();
                        // variables
                        var staffId = data[0];
                        var decision = confirm("Are You Sure you want to delete the record");
                        if (decision == true) {
                            $.ajax({
                                url: "../../../data_modules/delete_Staff.php?staffId=" + staffId,
                                type: "POST",
                                data: "",
                                success: function (data) {
                                    //window.location="view_students.php";
                                    location.reload();
                                }

                            });

                        }

                        //'../../../data_modules/'               
                    });

                });

            </script>
        </body>
    </html>
    <?php
} else {
    header('location: ../../index.php');
}
?>