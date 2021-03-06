<?php
session_start();
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNZA - Graduation Clearance System | Librarian</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />    
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
                    <img src="../../img/logo1.png" alt="Logo" class="img-responsive img-circle" />                   
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
                <!-- main dropdown -->              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="tables.php">
                        <span class="top-label label label-warning">
                        <?php   
                            include_once('../../data_modules/studentCounter.php');
                        ?>                             
                         </span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
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
                </li>

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
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation" style="width:210px;">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">                            
                            <div class="user-info">
                                <div><a href="#"><i class="fa fa-user"></i><?php echo $_SESSION['fullname'];?></a></div>
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
                    <li class="">
                        <a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>                    
                    <li class="divider"></li>
                    <li class="selected">
                        <a href="tables.php"><i class="fa fa-table fa-fw"></i>Clearance Applications</a>
                    </li> 
                  
                    <li class="divider"></li>
                    <li class="selected">
                        <a href="../report/report.php"><i class="fa fa-stats fa-fw"></i>Report</a>
                    </li>
                    
                                                       
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper" style="margin-left:210px; background-color:#ffffff;">        
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Student Clearance Applications</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <?php include_once('../../data_modules/LoadTable.php');?>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Clearance Id</th>
                                            <th>Student Id</th>
                                            <th>Student Name</th>                                        
                                            <th>Department</th>
                                            <th>Program</th>
                                            <th>Year</th>                                            
                                            <th>NRC</th>
                                            <th>Address</th>                                            
                                            <th>School Name</th>
                                            <!--th>Courses</th-->
                                            <th>Action</th>                                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        while($row=$result->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?=$row['clearance_id']?></td>
                                        <td><?=$row['student_id']?></td>
                                        <td><?=$row['student_Name']?></td>
                                        <td><?=$row['department']?></td>
                                        <td><?=$row['program']?></td>
                                        <td><?=$row['year_of_study']?></td>
                                        <td><?=$row['nrc']?></td>
                                        <td><?=$row['address']?></td>
                                        <td><?=$row['school_Name']?></td>
                                        <!--td><?php 
                                            $couses = json_decode($row['course']);
                                            foreach ($couses as $course) {
                                                echo $course ."<br/>";
                                            }
                                            ?></td-->
                                        <td><?php echo"<button class='btn btn-success'>Process</button>"?></td>
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
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script> 
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <!--script src="assets/scripts/siminta.js"></script-->
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <!--<script>
        $(document).ready(function() { 
            
            $.ajax({
                url: '../../data_modules/LoadTable.php',
                method:'post',
                dataType:'json',
                success: function(data){
                    $('#dataTables-example').DataTable({
                
                        data: data,
                        columns:[
                                {'data':'clearance_id'},                                
                                {'data':'student_id'},                                
                                {'data':'student_Name'},                                                   
                                {'data':'department'},                                
                                {'data':'program'},                                
                                {'data':'year_of_study'},                                                           
                                {'data':'nrc'},                                
                                {'data':'address'},
                                {'data':'school_Name'},                                
                                {'data':'courses'}
                        ]
                    });

                }
            });           
        });
           
    </script-->
    <script type="text/javascript">
        $(document).ready(function() { 
                 var table = $('#dataTables-example').DataTable({   
                    /*"ajaxSource": "../../data_modules/LoadTable.php",
                    "columnDefs":[{
                    "targets":-1,
                     "data": null,
                     "defaultContent":"<button class='btn btn-success'>Process</button>"
                    }]*/
                });
                $('#dataTables-example tbody tr td').on('click','button', function(){
                    var data = table.row( $(this).parents('tr') ).data();
                    // variables
                    var variable = data[0];
                    var studentId = data[1];
                    /*var variable2 = data[2];
                    var variable3 = data[3];
                    var variable4 = data[4];
                    var variable5 = data[5];
                    var variable6 = data[6];
                    var variable7 = data[7];
                    var variable8 = data[8];
                    var variable9 = data[9];*/
                    window.location ="clearance.php?studentId="+studentId;
                    //alert("Clearance Id  " + variable + "  Student Id  " + variable1);
                    // code to do something                 
                });

            });
            
    </script>
</body>
</html>
<?php
}else{
    header('location: ../../index.php');
}
?>