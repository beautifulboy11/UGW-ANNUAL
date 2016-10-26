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
            <!--DataTables-->
            <link href="../../assets/plugins/dataTables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
            <link href="../../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>

            <style>body{overflow: initial;}</style>
        </head>
        <body class="hold-transition skin-blue sidebar-mini" >

            <div class="wrapper">
                <?php include'components/header.php'; ?>   
                <?php include'components/sidebar.php'; ?>  		 
                <div class="content-wrapper">	    
                    <section class="content-header">
                        <h1> Administrator <small>Control panel</small></h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </section>
                    <section class="content">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Academic Year</th>
                                        <th>Openning Date</th>
                                        <th>Closing Date(s)</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>                                        
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.0
                                        </td>
                                        <td>Win 95+</td>                                        
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.5
                                        </td>
                                        <td>Win 95+</td>                                        
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 6
                                        </td>
                                        <td>Win 98+</td>                                        
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>                                        
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </section>
                </div>  
                <footer class="main-footer">
                    <?php
                    include '../../components/footer.php';
                    ?>
                </footer>
            </div>
        </body>
        <script type="text/javascript" src="../../assets/plugins/jquery-1.10.2.js"></script>       
        <script src="../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
        <script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="../../assets/plugins/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../../assets/plugins/dataTables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="../../assets/scripts/app.min.js" type="text/javascript"></script>
        <script>
            $(function () {

                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
        <script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>                
    </html>
    <?php
} else {
    header('location: ../../index.php');
}