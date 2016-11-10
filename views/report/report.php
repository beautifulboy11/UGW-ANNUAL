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
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper"> 
                <?php include'components/header.php'; ?>
                <!-- end navbar side -->
                <?php include'components/sidebar.php'; ?>
                <div class="content-wrapper">
                     <section class="content-header">                        
                        <h1 class="page-header text-center"></h1>
                        <!--div style="margin-top:0px;">
                            <button class="btn btn-success pull-right noprint" id="print" onclick="window.print()"><i class="glypicon glypicon-print"></i>&nbsp;Print Report</button>
                        </div-->
                    </section>
                    
                    <div id="print-wrapper" class="row">
                        <div class="col-lg-12">
                            <!-- Advanced Tables -->
                            <div class="" >                        
                                <div class="col-xs-12" style="margin-left:0px; z-index:0;margin-top:30px;min-height: 400px;">
                                    <!--Php supplying chart1-->
                                    <div class="col-xs-12" style="padding-left:0px;margin-top:30px;min-height: 400px;">
                                        <iframe src="facultyreport.php" scrolling="no" frameborder="0" width="100%" height="450px"></iframe>
                                    </div>
                                    
                                    <div class="col-xs-12" style="padding-left:0px;margin-top:30px;min-height: 400px;">
                                        <iframe src="generalReport.php" scrolling="no" frameborder="0" width="100%" height="450px"></iframe>
                                    </div>
                                    
                                    <div class="col-xs-12" style="padding-left:0px;margin-top:30px;min-height: 400px;">
                                        <iframe src="contributor.php" scrolling="no" frameborder="0" width="100%" height="450px"></iframe>
                                    </div>

                                </div>
                                <!--End Advanced Tables -->
                            </div>
                        </div>                    
                    </div>
                    <!-- end page-wrapper -->
                </div>


                <script src="../../assets/plugins/jquery-1.10.2.js" type="text/javascript"></script>       
                        
                <script src="../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
                <script src="../../assets/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
                <script src="../../assets/scripts/app.min.js" type="text/javascript"></script>
              

        </body>
    </html>
    <?php
} else {
    header('location: ../../index.php');
}
