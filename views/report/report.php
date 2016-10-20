
session_start();
if(isset($_SESSION['username'])){

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <link rel="image/x-icon" type="icon" href="../../favicon.ico">
    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="assets/jquery-1.12.4.min.js"></script>
    <script src="assets/canvasjs.min.js"></script> 
    <script type="text/javascript" src="Print.js-1.0.8/dist/print.min.js"></script> 
    <link rel="stylesheet" href="Print.js-1.0.8/dist/print.min.css">  
    <style type="text/css">
        @media print
        {
            .noprint{display: none;}
            nav{display: none;}
            canvas{display: block;}
            #page-wrapper{margin-left:-70px;}
            #banner{margin-left:100;}
        }
    </style>
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">        
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
        <nav class="navbar-default navbar-static-side noprint" role="navigation" style=" z-index:1;">
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
                        <a href="../report/report.php"><i class="fa fa-charts fa-fw"></i>Report</a>
                    </li>
                                                       
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>    
        <div id="page-wrapper">
            <div class="col-md-12">
                <div style="margin-top:30px;">
                <button class="btn btn-success pull-right noprint" id="print" onclick="window.print()"><i class="glypicon glypicon-print"></i>&nbsp;Print Report</button></div>
            </div>
            <div class="col-md-12" style="margin-left:5px; margin-right:5px; margin-top:5px;">                
                <div class="col-md-12" style="width:;">
                    <img id="banner" alt="UNZA Logo" src="../../img/Banner.png" width="" max-height="150" class="img-responsive">
                </div>            
            </div>                    
            
            <div id="print-wrapper" class="row" style=" margin-left:0px; margin-right:0px;">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="" >                        
                        <div class="col-xs-12" style="margin-left:0px; z-index:0;margin-top:30px;min-height: 400px; overflow-wrap: ;">
                        <!--Php supplying chart1-->
                        <?php 
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "clearance_db";

                            // Create connection
                            $connetion = new mysqli($servername, $username, $password,$database);

                            // Check connection
                            if ($connetion->connect_error) {
                                die("Connection failed: " . $connetion->connect_error);
                            } 

                            $sql = "SELECT COUNT(student_id)AS Number_Of_Students FROM clearance_form";
                            $result = $connetion->query($sql);
                            $data = array();
                            while($row=$result->fetch_assoc())
                            {
                              $ns = $row['Number_Of_Students'];
                              //$cs = $row['Clearance_Status'];           
                            }

                            $sql1 = "SELECT COUNT(status)AS not_cleared FROM clearance_form WHERE status !='cleared'";
                            $result1 = $connetion->query($sql1);
                            $data1 = array();        
                            while($row1=$result1->fetch_assoc())
                            {
                              //$ns = $row['Number_Of_Students'];
                              $cs = $row1['not_cleared'];           
                            }
                            $sql2 = "SELECT COUNT(status)AS cleared FROM clearance_form WHERE status ='cleared'";
                            $result2 = $connetion->query($sql2);
                            $data2 = array();        
                            while($row2=$result2->fetch_assoc())
                            {
                              //$ns = $row['Number_Of_Students'];
                              $cl = $row2['cleared'];           
                            }

                            $dataPoints = array(
                                  array('y' => $ns, "name"=>"Total Number of Students","exploded" =>true),
                                  array('y'=> $cs, "name"=>"Not Cleared"),
                                  array('y'=> $cl,"name"=>"Cleared")
                                );
                        ?>
                            
                        <div id="chartContainer" style="width:300;"></div>
                        
                        <!--Script supporting chart1-->
                        <script type="text/javascript">
                            $(function () {
                                var chart = new CanvasJS.Chart("chartContainer",
                                {
                                    theme: "theme1",
                                    title:{
                                        text: "General Student's Clearance Report"
                                    },
                                    exportFileName: "New Year Resolutions",
                                    exportEnabled: true,
                                    animationEnabled: true,   
                                    data: [
                                    {       
                                        type: "pie",
                                        showInLegend: true,
                                        toolTipContent: "{name}: <strong>{y}%</strong>",
                                        indexLabel: "{name} {y}%",
                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                    }]
                                });
                                chart.render();
                            });
                        </script>
                            
                                                                                 
                        </div>
                        <div class="col-xs-12" style="padding-left:0px;margin-top:30px;min-height: 400px;">
                            <iframe src="libReport.php" scrolling="no" frameborder="0" width="100%" height="450px"></iframe>
                        </div>
                        
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>                    
        </div>
        <!-- end page-wrapper -->
    </div>
    
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <!--script src="assets/scripts/siminta.js"></script-->
    <!-- Page-Level Plugin Scripts-->   
    
</body>
</html>

}else{
    header('location: ../../index.php');
}
