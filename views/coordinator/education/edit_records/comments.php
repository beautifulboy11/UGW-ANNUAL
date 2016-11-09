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
            <link rel="icon" href="../../../../favicon.ico">		
            <meta name="" content="annual magazine">
            <!--Style Sheetsp-->
            <link href="../../../../assets/css/AdminLTE.min.css" rel="stylesheet">
            <link href="../../../../assets/css/skins/_all-skins.css" rel="stylesheet">
            <link href="../../../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../../../../assets/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="../../../../assets/ionicons/css/ionicons.min.css">               
        </head>
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper">
                <!-- navbar top -->
                <?php include '../../../admin/components/header.php'; ?>
                <!-- end navbar top -->
                <!-- navbar side -->
                <?php include '../../../admin/components/sidebar.php'; ?>
                <!-- end navbar side -->
                <!--  page-wrapper -->
                <div class="content-wrapper"   >        
                    <div class="row" >
                        <!--  page header -->
                        <div class="col-lg-12" >
                            <h1 class="page-header" style="color:#ffffff;">Add Comment form</h1>
                        </div>
                        <!-- end  page header -->
                    </div>
                    <div class="row" style="margin-left:50px; margin-right:50px;">                
                        <div class="col-md-12" style="width:960px;">
                            <img  alt="UGW Logo" src="../../../../assets/img/Banner.png" width="960" max-height="150" class="img-responsive">
                        </div>            
                    </div>
                    <div class="row"style="width:960px; margin-left:50px; margin-right:50px;">
                        <div class="col-lg-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default" >
                                <form id="add_comment" class="horinzontal-form" method="post" action="../../../../model/addComment.php">                                   
                                    <div class="form-group"> 
                                        <input name="post_id" hidden="true" value=" <?php echo $_REQUEST['post_id']; ?> "/>
                                        <textarea name="comment" id="comment" required="required" class="form-control" rows="8" placeholder="Comment"></textarea>
                                    </div> 
                                    
                                    <div class="form-group"> 
                                        <button id="submit" type="submit" class="btn btn-primary">Add Comment</button>                                         
                                    </div>    

                                </form>
                            </div>                                                         
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>                    
            </div>
            <!-- end page-wrapper -->
            <footer>
                <?php include'../../../admin/components/footer.php';?>
            </footer>
        </div>
        <!-- end wrapper -->
        <script type="text/javascript" src="../../../../assets/plugins/jquery-1.10.2.js"></script>       
        <script src="../../../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
        <script src="../../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="../../../../assets/scripts/app.min.js" type="text/javascript"></script>      
    </body>
    </html>
    <?php
} else {
    header('location:../../../index.php');
}
?>