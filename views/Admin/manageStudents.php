<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['admin'])) {
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
        </head>
        <body class="skin-blue">
            <!--  wrapper -->
            <div id="wrapper" >
                <!-- navbar top -->
                <?php include'../../components/header.php'; ?> 
                <!-- end navbar top -->


                <div id="page-wrapper" style="margin-left:0px;">
                    <div class="row" style="margin-left:50px; margin-right:50px; margin-top:30px;">                
                        <div class="col-md-12" style="">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8" style=" margin-top:0px;">
                                <img  alt="UNZA Logo" src="../../assets/img/banner.png" max-height="150" class="img-responsive">
                            </div>            
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <!-- Page Header -->
                            <div class="col-lg-12">
                                <h1 class="page-header text-center"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Student Management</a></h1>
                            </div>
                            <!--End Page Header -->
                        </div>

                        <div class="row">
                            <!--quick info section -->
                            <div class="col-lg-4"> </div>
                            <div class="col-lg-4" style="margin-top:30px;">
                                <div class="text-center">
                                    <!--i class="fa  fa-file fa-3x"></i-->  

                                    <a href="form/index.php" class="btn btn-block btn-primary btn-lg" ><i class="fa fa-plus fa-fw"></i>Add Student</a><br/>

                                    <a href="edit_records/index.php" class="btn btn-block btn-primary btn-lg" ><i class="fa fa-edit fa-fw"></i>Edit Student</a><br/>

                                    <a href="view_records/view_students.php" class="btn btn-block btn-primary btn-lg" ><i class="glyphicon glyphicon-zip"></i>Archive Student</a><br/>
                                    <a href="request.php" class="btn btn-block btn-primary btn-lg" ><i class=""></i>&nbsp;Blocked Clearance Request</a>
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
                <!-- Core Scripts - Include with every page -->
                <script type="text/javascript" src="../../assets/plugins/jquery-1.10.2.js"></script>       
                <script src="../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
                <script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
                <script src="../../assets/scripts/app.min.js" type="text/javascript"></script>
        </body>
    </html>
    <?php
} else {
    header('location: ../../index.php');
}
?>