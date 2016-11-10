<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>    
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>University of Greenwich-ANNUAL MAGAZINE</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="icon" href="../../favicon.ico">		
            <meta name="" content="annual magazine">		
            <link href="../../assets/css/AdminLTE.min.css" rel="stylesheet">
            <link href="../../assets/css/skins/_all-skins.css" rel="stylesheet">
            <link href="../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="../../assets/ionicons/css/ionicons.min.css">   
        </head>
        <body>
            <!--  wrapper -->
            <div class="wrapper" >
                <!-- navbar top -->
                
                <!--  page-wrapper -->
                <div class="content-wrapper" style="margin-left: 0px; background-color:#ffffff;">        
                    <section class="content-header">
                        <!--  page header -->

                        <h1 class="page-header text-center">Contributions Without Comments After 14 days</h1>

                        
                    </section>
                    <?php include_once('../../model/uncommentedAfter14days.php'); ?>
                    <section class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Advanced Tables -->
                                <div class="panel panel-default">                        
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Aurthor</th>
                                                        <th>Article Title</th>
                                                        <th>Date Submitted</th>                                                                                          
                                                        <th>Status</th>                                                                                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($row = $result->fetch_array()) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $row['name'] ?></td>
                                                            <td><?= $row['post_title'] ?></td>
                                                            <td><?= $row['post_date'] ?></td>                                                          
                                                            <td><?= $row['post_status'] ?></td>
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
                    </section>
                </div>
                <!-- end page-wrapper -->
                <footer class="main-footer">
                    <?php include'components/footer.php'; ?>
                </footer>
            </div>
            <!-- end wrapper -->
            <script type="text/javascript" src="../../assets/plugins/jquery-1.10.2.js"></script>
            <script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
            <script src="../../assets/scripts/app.min.js"></script>
            <!-- Page-Level Plugin Scripts-->
            <script src="../../assets/plugins/dataTables/jquery.dataTables.js"></script>
            <script src="../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>


            <script type="text/javascript">
                $(document).ready(function () {
                    var table = $('#dataTables-example').DataTable({
                        
                    });
                    $('#dataTables-example tbody tr td').on('click', 'button', function () {
                        var data = table.row($(this).parents('tr')).data();
                        // variables
                        var variable = data[0];
                        var studentId = data[1];
                      
                        window.location = "clearance.php?studentId=" + studentId;
                                       
                    });

                });

            </script>
        </body>
    </html>
    <?php
} else {
    header('location: ../../index.php');
}
?>