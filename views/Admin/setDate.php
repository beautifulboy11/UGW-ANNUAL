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
            <script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js" type="text/javascript"></script>
            <script src="../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
            <link href="../../assets/themes/base/datepicker.css" rel="stylesheet" type="text/css"/>            
            <link href="../../assets/themes/base/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
            <!-- Page-Level CSS -->    
        </head>
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper" >
                <!-- navbar top -->
                <?php include'components/header.php'; ?>   
                <?php include 'components/sidebar.php';?>
                <!-- end navbar top -->
                <div  class="content-wrapper" style=" background-color:white;">
                    <div class="row">                
                        <div class="col-md-12" style="">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8" style=" margin-top:0px;">
                                <img  alt="UNZA Logo" src="../../assets/img/banner.png" max-height="150" class="img-responsive">
                            </div>            
                            <div class="col-sm-2"></div>
                        </div>
                        <section class="content-header">
                            <!-- Page Header -->
                            <div class="col-lg-12">
                                <h1 class="page-header text-center"><a href="index.php"><i class="fa fa-calendar"></i> Date Management</a></h1>
                            </div>
                            <!--End Page Header -->
                        </section>
                        <section class="content">
                                <div class="row">
                                    <div class=col-md-12">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <form action="../../controller/dateSetting.php" method="POST" class="horinzontal-form">
                                                <div class="col-md-12 form-group-lg" style="margin-bottom: 40px;">
                                                    Academic Year:
                                                    <div class="input-group">
                                                        <select name="academic" required="true" class="form-control" >
                                                            <option value=''selected="true">Select Year....</option>
                                                            <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>

                                                        </select>                                                      
                                                    </div>                                                   
                                                </div>
                                                <br/>
                                                <div class="col-md-6 form-group-lg">
                                                    Openning Date:
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input class="form-control" type="date" placeholder="Opening Date" id="opening_date" name="opening_date" required="true"/>                                                        
                                                    </div>                                                   
                                                </div>
                                                
                                                <div class="col-md-6 form-group-lg">
                                                    Closing Date:
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>                                                            
                                                        </span>
                                                        <input class="form-control" type="date" date-date-format='yy-mm-dd' placeholder="Closing Date" id="closing_date" name="closing_date" required="true"/>
                                                    </div>
                                                </div>
                                                <br/>
                                                

                                                <div class="form-group">
                                                    <input style="margin-top: 30px;margin-left: 15px;" class="btn btn-primary" type="submit" name="submit" Value="SAVE"/>
                                                </div>
                                            </form>
                                            
                                            <?php
                                            if(isset($_SESSION['insert_sucess'])){
                                                echo "<span style='color:green; font-weight:bold;>Dates Set Successfully</span>";
                                                unset($_SESSION['insert_sucess']);
                                            }elseif(isset($_SESSION['insert_failure'])){
                                                echo "<span style='color:red; font-weight:bold;>Check your dates, Closing date must be later then opening date</span>";
                                                unset($_SESSION['insert_failure']);
                                            }
                                            ?>
                                            
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>

                        </section>                        
                    </div>                  
                </div>
                <!-- end page-wrapper -->
                <footer class="main-footer">
                     <?php include 'components/footer.php';?>
                </footer>
            </div>
            <!-- end wrapper -->
            <!-- Core Scripts - Include with every page -->
                  
                   
            <script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
            <script src="../../assets/scripts/app.min.js" type="text/javascript"></script>
            <script src="../../assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
          
        </body>
    </html>
    <?php
} else {
    header('location: ../../index.php');
}
?>

