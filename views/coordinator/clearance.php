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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
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
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu" style="">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            
                            <div class="user-info">
                                <div><a href="#"><i class="fa fa-user"></i><?php echo $_SESSION['fullname'];?></strong></div>
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
                    <li>
                        <a href="tables.php"><i class="fa fa-table fa-fw"></i>Clearance Application</a>
                    </li> 
                    <li class="divider"></li>
                    <li class="selected">
                        <a href="clearance.php"><i class="fa fa-table fa-fw"></i>Clearance </a>
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
        <div id="page-wrapper">        
            <div class="row" >
                <!--  page header -->
                <div class="col-lg-12" >
                    <h1 class="page-header">Student Clearance</h1>
                </div>
                <!-- end  page header -->
            </div>
            <div class="row" style="margin-left:50px; margin-right:50px;">                
                <div class="col-md-12" style="width:960px;">
                    <img  alt="UNZA Logo" src="../../img/Banner.png" width="960" max-height="150" class="img-responsive">
                </div>            
            </div>
            <div class="row"style="width:960px; margin-left:50px; margin-right:50px;">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default" >                        
                        <div class="panel-body" style="padding-left:100px; min-height:780px;">

                            <?php                        
                              //$student_Id = $_GET['studentId'];
                                $servername ="localhost";
                                $username = "root";
                                $password = "";
                                $database = "clearance_db";
                                // Create connection
                                $connetion = new mysqli($servername, $username, $password,$database);
                                // mysql select query
                                $query = "SELECT cf.clearance_id,cf.cellNumber,cf.student_id,CONCAT(cf.first_name,' ',cf.last_name)AS student_Name,
                                    dpt.dpt_Name AS department,cf.program,cf.year_of_study,cf.nrc,cf.address,sch.school_Name,cfc.course FROM (clearance_form AS cf INNER JOIN department AS dpt ON cf.department = dpt.dpt_Id) INNER JOIN clearance_form_courses AS cfc ON cf.student_id = cfc.student_Id INNER JOIN school AS sch ON sch.school_Id = cf.school_Id WHERE cf.student_Id='".$_GET["studentId"]."' ";
                                     
                                 $result = $connetion->query($query) or trigger_error($connetion->error."[$query]");
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row = $result->fetch_assoc()){
                                ?>
                                <tr> <td><label>Clearnce ID:</label> </td><td><?=$row['clearance_id']?></td></tr>
                                <tr> <td><label>Student ID:</label> </td><td id="studentId"><?=$row['student_id']?></td></tr>
                                <tr> <td><label>Name:</label> </td> <td><?=$row['student_Name']?></td></tr>
                                <tr> <td><label>Department:</label></td> <td><?=$row['department']?></td></tr>
                                <tr> <td><label>Program:</label> </td><td><?=$row['program']?></td></tr>
                                <tr> <td><label>Year:</label> </td> <td><?=$row['year_of_study']?></td></tr>
                                <tr> <td><label>NRC Number:</label> </td><td><?=$row['nrc']?></td></tr>
                                <tr> <td><label>Residential Address:</label> </td><td><?=$row['address']?></td></tr>
                                <tr> <td><label>School:</label></td><td><?=$row['school_Name']?></td></tr>
                                <tr> <td><label>CellNumber:</label></td><td id="cellNumber"><?=$row['cellNumber']?></td></tr>
                                <!--tr> <td><label>Courses:</label> </td><td><?php 
                                    $couses = json_decode($row['course']);
                                    foreach ($couses as $course) {
                                        echo $course ."<br/>";
                                    }
                                    ?>
                                </td></tr-->
                                <?php
                                }
                                ?>                                                                                            
                                </tbody>
                            </table> 
                            <table id="dynamic" class="table">
                                <tr>
                                    <td><label>Clearance:</label></td>
                                    <td><button id="approvebtn" class="btn btn-success" style="margin-left:200px;">Approve Application</button><button id="declinebtn" class="btn btn-danger" style="margin-right:100px; margin-left:100px;">Decline Application</button></td>
                                </tr>
                            </table>
                            <div class="form-group">
                                <form class="horinzontal-form" id="add_comment" method="POST" hidden>
                                    <table class="table" id="dynamic">
                                        <tr>
                                            <td><textarea cols="8" rows="6" name="clearance" id="clearance" class="form-control" required></textarea></td>
                                        </tr>
                                        <tr><td><input type="button" name="submit" id="submit" class="btn btn-success" value="Submit">
                                        </td></tr>
                                    </table>                                            
                                </form>
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
    <script type="text/javascript">
        $(document).ready(function() {  
                $('#declinebtn').click(function(){                     
                    $('#add_comment').toggle(1000);
                });                                
            
                $('#submit').click(function(){                                     
                    var student_id =$('#studentId').text();
                    var phoneNumber = $('#cellNumber').text();
                    var clearance = $('#clearance').val();
                    var role ="Librarian";
                    var postData = '&comment='+clearance+'&student_id='+student_id+'&role='+role+'&mobileNumber='+phoneNumber;
                    var decision = confirm("Are you sure you want to Decline the Application?");
                    if(decision == true){
                    $.ajax({
                        url:"../../data_modules/librarian/clearance.php",
                        method:"POST",
                        data:postData,
                        success:function(data){
                            //window.location
                            alert("Student Application has been declined!");
                             window.location.href = "tables.php";
                        }
                    });
                }
                
                });

                $('#approvebtn').click(function(){
                    $('#add_comment').slideUp().hide(1000);
                    var option = confirm("Are you Sure, You want to Approve the Application?");
                    if(option==true){
                    var student_id =$('#studentId').text();
                    var clearance = "Cleared";
                    var role ="Librarian";
                    var postData = '&comment='+clearance+'&student_id='+student_id+'&role='+role;
                    $.ajax({
                        url:"../../data_modules/librarian/clearance.php",
                        method:"POST",
                        data:postData,
                        success:function(data){
                            //window.location
                            alert("Application Approved!");
                            window.location.href = "tables.php";
                        }
                    });
                }
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