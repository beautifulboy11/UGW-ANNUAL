<?php
session_start();
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNZA - Graduation Clearance System | Staff</title>
    <!-- Core CSS - Include with every page -->
    <link href="../../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../../assets/css/style.css" rel="stylesheet" />
    <link href="../../../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />  
    
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
                <ul class="nav" id="side-menu" style="">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">                          
                            <div class="user-info">
                                <div><strong><?php echo $_SESSION['fullname'];?></strong></div>
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
                        <a href="../index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>                    
                    <li class="divider"></li>
                    <li>
                        <a href="../form/index.php"><i class="fa fa-plus fa-fw"></i>Add Student</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="index.php"><i class="fa fa-edit fa-fw"></i>Edit Student</a>
                    </li>                    
                    <li class="divider"></li>
                    <li >
                        <a href="../view_records/view_students.php"><i class="fa fa-minus fa-fw"></i>Delete Student</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="../add_staff/index.php"><i class="fa fa-plus fa-fw"></i>Add Staff</a>
                    </li>
                     <li class="divider"></li>
                    <li class="selected">
                        <a href="staff.php"><i class="fa fa-edit fa-fw"></i>Edit Staff</a>
                    </li>
                    <li class="divider"></li>
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
        <div id="page-wrapper"   >        
            <div class="row" >
                <!--  page header -->
                <div class="col-lg-12" >
                    <h1 class="page-header" style="color:#ffffff;">Staff form</h1>
                </div>
                <!-- end  page header -->
            </div>
            <div class="row" style="margin-left:50px; margin-right:50px;">                
                <div class="col-md-12" style="width:960px;">
                    <img  alt="UNZA Logo" src="../../../img/Banner.png" width="960" max-height="150" class="img-responsive">
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
                                $query = "SELECT `firstname`, `lastname`, `user_name`, `password`, `role`, `level` FROM `user` 
                                    WHERE user_name='".$_GET['staffid']."' ";
                                     
                                 $result = $connetion->query($query) or trigger_error($connetion->error."[$query]");
                            ?>
                            <div class="col-md-6">
	               				<?php
					                if(isset($_SESSION['insert_sucess'])){
					                         echo "<div class='alert alert-success alert-dismissible' role='alert'>
					                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					                        <strong>Congratulations!</strong> Update Successful!
					                        </div>";
					                        unset($_SESSION['insert_sucess']);
					                }
					                elseif(isset($_SESSION['insert_failure'])){
					                        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
					                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					                        <strong>Update Failed!</strong> Please Check the information you have provided.
					                        </div>";
					                        unset($_SESSION['insert_failure']);                                                                           
					                }
					                 
					            ?>
				            </div>

                            <form class="horinzontal-form" id="add_comment" method="POST" action="../../../data_modules/staff_record_update.php" >
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
                                
                                <tr> 
                                    <td>
                                        <label>Staff ID:</label>
                                    </td>
                                    <td>
                                        <label  id="user_name" name="staff" > <?php echo $row['user_name']; ?></label>
                                        <input name="staffId" value="<?php echo $row['user_name']; ?>" hidden/>
                                    </td>
                                </tr>
                                <tr> 
                                    <td><label>First Name:</label></td>
                                     <td>
                                        <input type="text" class="form-control" name="firstName" value="<?php echo $row['firstname'];?>"/>
                                    </td>
                                </tr>
                                <tr> 
                                    <td><label>Sur Name:</label></td>
                                     <td>
                                        <input type="text" name="lastName" class="form-control" value="<?php echo $row['lastname'];?>"/>
                                    </td>
                                </tr>
                                
                                <tr hidden="true"> <td><label>Level:</label></td>
                                    <td><input name="level" type="text" value="<?php echo $row['level']; ?>"/>
                                    </td>
                                </tr>
                                <tr> <td><label>Position:</label></td>
                                     <td>
                                     	
                                    <select class="form-control" name="level">
                                    	<option value ="8" selected="true">--Select Position--</option>
                                        <option value="0"> Administrator</option>
                                        <option value="1">University Librarian</option>
                                        <option value="5">Dean of School</option>
                                        <option value="2">Dean of Student Affairs</option>
                                        <option value="3">Finance Department</option>
                                        <option value="4">Academic Affairs</option>
                                    </select>
                                
                                        <!--?php echo $row['role']; ?-->
                                     </td>
                                 </tr>
                                 <?php
                                }
                                ?>                                                                                            
                                </tbody>
                            </table>
                         
                            <div class="form-group">
                                
                            <table class="table" id="dynamic">                                        
                                        <tr><td><input type="submit" name="submit" id="submit" class="btn btn-success" value="Save">
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
    <script src="../../../assets/plugins/jquery-1.10.2.js"></script> 
    <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../../assets/plugins/pace/pace.js"></script>
    <!--script src="assets/scripts/siminta.js"></script-->
    <!-- Page-Level Plugin Scripts-->
    <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script type="text/javascript" src="js/app.js"></script> 
    
</body>
</html>
<?php
}else{
    header('location:../../../index.php');
}
?>