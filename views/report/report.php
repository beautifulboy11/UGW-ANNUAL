<?php
session_start();
if(isset($_SESSION['username'])){
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
        <link rel="icon" href="../../favicon.ico">		
        <meta name="" content="annual magazine">
        <!--Style Sheetsp-->
        <link href="../../assets/css/AdminLTE.min.css" rel="stylesheet">
        <link href="../../assets/css/skins/_all-skins.css" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../assets/ionicons/css/ionicons.min.css">
    <style type="text/css">
        @media print
        {
            .noprint{display: none;}
            nav{display: none;}
            canvas{display: block;}
            #page-wrapper{margin-left:-70px;}
            #banner{margin-left:100px;}
        }
    </style>
</head>
<body>
    <!--  wrapper -->
    <div class="wrapper">        
          
        <div class="content-wrapper">
            <div class="col-md-12">
                <div style="margin-top:30px;">
                <button class="btn btn-success pull-right noprint" id="print" onclick="window.print()"><i class="glypicon glypicon-print"></i>&nbsp;Print Report</button></div>
            </div>
            <div class="col-md-12" style="margin-left:5px; margin-right:5px; margin-top:5px;">                
                <div class="col-md-12">
                    <img id="banner" alt="UNZA Logo" src="../../img/Banner.png" width="" max-height="150" class="img-responsive">
                </div>            
            </div>                    
            
            <div id="print-wrapper" class="row" style=" margin-left:0px; margin-right:0px;">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="" >                        
                        <div class="col-xs-12" style="margin-left:0px; z-index:0;margin-top:30px;min-height: 400px;">
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
                            
                        <div id="chartContainer" style="width:300px;"></div>
                        
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
<?php
}else{
    header('location: ../../index.php');
}
