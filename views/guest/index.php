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
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper">
                <!-- navbar top -->
                <?php include'components/header.php'; ?>
                <!-- end navbar side -->
                <?php include'components/sidebar.php'; ?>
                <!--  page-wrapper -->
                <div class="content-wrapper" style=" background-color:#ffffff;">        
                    <section class="content-header">
                        <!--  page header -->

                        <h1 class="page-header text-center">Articles for Publication</h1>

                        <!-- end  page header -->
                        <form action="../../controller/downloadController.php" method="get">
                        <button id='' class='btn btn-success'>Download Zip</button>                                                       
                        </form>
                    </section>
                    <?php include_once('../../model/LoadSelectedArticles.php'); ?>
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

    <!--<script>
        $(document).ready(function() { 
            
            $.ajax({
                url: '../../data_modules/LoadTable.php',
                method:'post',
                dataType:'json',
                success: function(data){
                    $('#dataTables-example').DataTable({
                
                        data: data,
                        columns:[
                                {'data':'clearance_id'},                                
                                {'data':'student_id'},                                
                                {'data':'student_Name'},                                                   
                                {'data':'department'},                                
                                {'data':'program'},                                
                                {'data':'year_of_study'},                                                           
                                {'data':'nrc'},                                
                                {'data':'address'},
                                {'data':'school_Name'},                                
                                {'data':'courses'}
                        ]
                    });

                }
            });           
        });
           
    </script-->
            <script type="text/javascript">
                $(document).ready(function () {
                    var table = $('#dataTables-example').DataTable({
                        /*"ajaxSource": "../../data_modules/LoadTable.php",
                         "columnDefs":[{
                         "targets":-1,
                         "data": null,
                         "defaultContent":"<button class='btn btn-success'>Process</button>"
                         }]*/
                    });
                    $('#dataTables-example tbody tr td').on('click', 'button', function () {
                        var data = table.row($(this).parents('tr')).data();
                        // variables
                        var variable = data[0];
                        var studentId = data[1];
                        /*var variable2 = data[2];
                         var variable3 = data[3];
                         var variable4 = data[4];
                         var variable5 = data[5];
                         var variable6 = data[6];
                         var variable7 = data[7];
                         var variable8 = data[8];
                         var variable9 = data[9];*/
                        window.location = "clearance.php?studentId=" + studentId;
                        //alert("Clearance Id  " + variable + "  Student Id  " + variable1);
                        // code to do something                 
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