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
            <link rel="icon" href="../../../favicon.ico">		
            <meta name="" content="annual magazine">
            <!--Style Sheetsp-->
            <link href="../../../assets/css/AdminLTE.min.css" rel="stylesheet">
            <link href="../../../assets/css/skins/_all-skins.css" rel="stylesheet">
            <link href="../../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../../../assets/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="../../../assets/ionicons/css/ionicons.min.css">   
            <link href="../../../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="../../../assets/plugins/dataTables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        </head>
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper">
                <!-- navbar top -->
                <?php include'components/header.php';?>
                <!-- end navbar top -->
                <!-- navbar side -->
               <?php include'components/sidebar.php';?>
                <!-- end navbar side -->
                <!--  page-wrapper -->
                <div class="content-wrapper" style=" background-color:white;">        
                     
                        <!--  page header -->
                        <section class="content-header">
                            <h1 class="page-header text-center">Profile Mangement</h1>
                        </section>
                        <!-- end  page header -->
                    
                    <?php include_once('../../../model/StaffRecord.php'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">                        
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>Full Name</th>                                                                                         
                                                    
                                                    <th>Email</th>
                                                    <th>Date Registeres</th>
                                                    <th>Faculty</th>
                                                    <th>Role</th> 
                                                    <th>Action</th>                                                       
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $row['username'] ?></td>
                                                        <td><?= $row['name'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['registerDate'] ?></td>
                                                        <td><?= $row['faculty'] ?></td>
                                                        <td><?= $row['role'] ?></td>

                                                        <td><?php echo"<button class='btn btn-success'>Edit</button>" ?></td>
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
                </div>
                <footer class="main-footer">
                     <?php include 'components/footer.php';?>
                </footer>
               
            </div>
            <!-- end wrapper -->

            <!-- Core Scripts - Include with every page -->
            <script type="text/javascript" src="../../../assets/plugins/jquery-1.10.2.js"></script>       
            <script src="../../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
            <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
            <script src="../../../assets/scripts/app.min.js" type="text/javascript"></script>
            <!-- Page-Level Plugin Scripts-->
            <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
            <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    var table = $('#dataTables-example').DataTable({

                    });
                    $('#dataTables-example tbody tr td').on('click', 'button', function () {
                        var data = table.row($(this).parents('tr')).data();
                        // variables
                        var staff_id = data[0];// holds clearance id
                        //var staffid = data[1];

                        var decision = confirm("Are You Sure you want to edit the record");
                        if (decision == true) {
                            window.location = "edit_staff.php?staffid=" + staff_id;
                        }

                    });

                });

            </script>
        </body>
    </html>
    <?php
} else {
    header('location:../../../index.php');
}
?>