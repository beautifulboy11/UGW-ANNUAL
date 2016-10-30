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
        </head>
        <body class="skin-blue sidebar-mini">
            <!--  wrapper -->
            <div class="wrapper">
                <!-- navbar top -->
                <?php include 'components/header.php'; ?>
                <!-- end navbar top -->
                <!-- navbar side -->
                <?php include 'components/sidebar.php'; ?>
                <!-- end navbar side -->
                <!--  page-wrapper -->
                <div class="content-wrapper"   >        
                    <section class="content-header" >                       
                        <h1 class="page-header text-center" style="color:#000;">User Edit Form</h1>                                              
                    </section>
                    <div class="row" style="margin-left:50px; margin-right:50px;">                
                        <div class="col-md-12" style="width:960px;">
                            <img  alt="UGW Logo" src="../../../assets/img/Banner.png" width="960" max-height="150" class="img-responsive">
                        </div>            
                    </div>
                    <div class="row"style="width:960px; margin-left:50px; margin-right:50px;">
                        <div class="col-lg-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default" >                        
                                <div class="panel-body" style="padding-left:10px; min-height:780px;">
                                    <?php
                                    //$student_Id = $_GET['studentId'];
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "ugw_annual_magazine";
                                    // Create connection
                                    $connetion = new mysqli($servername, $username, $password, $database);
                                    // mysql select query
                                    $query = "SELECT u.ID AS username, u.name, u.email, u.registerDate, u.block, uf.faculty_name AS faculty, ug.title As role "
                                            . "FROM ugw_users AS u INNER JOIN ugw_user_faculty_map AS ufm ON u.ID = ufm.user_id "
                                            . "INNER JOIN ugw_faculty AS uf ON ufm.faculty_id = uf.id "
                                            . "INNER JOIN ugw_user_usergroup_map AS ugm ON u.ID = ugm.user_id "
                                            . "INNER JOIN ugw_usergroups AS ug ON ugm.group_id = ug.id WHERE u.ID='" . $_GET['staffid'] . "' ";

                                    $result = $connetion->query($query) or trigger_error($connetion->error . "[$query]");
                                    ?>
                                    <div class="col-md-6">
                                        <?php
                                        if (isset($_SESSION['insert_sucess'])) {
                                            echo "<div class='alert alert-success alert-dismissible' role='alert'>
					                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					                        <strong>Congratulations!</strong> Update Successful!
					                        </div>";
                                            unset($_SESSION['insert_sucess']);
                                        } elseif (isset($_SESSION['insert_failure'])) {
                                            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
					                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					                        <strong>Update Failed!</strong> Please Check the information you have provided.
					                        </div>";
                                            unset($_SESSION['insert_failure']);
                                        }
                                        ?>
                                    </div>

                                    <form class="horinzontal-form" id="add_comment" method="POST" action="../../../data_modules/staff_record_update.php" >
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    ?>

                                                    <tr> 
                                                        <td>
                                                            <label>User ID:</label>
                                                        </td>
                                                        <td>
                                                            <label  id="user_name" name="staff" > <?php echo $row['username']; ?></label>
                                                            <input name="userid" value="<?php echo $row['username']; ?>" hidden/>
                                                        </td>
                                                    </tr>
                                                    <tr> 
                                                        <td><label>Name:</label></td>
                                                        <td>
                                                            <input type="text" class="form-control" name="fullname" value="<?php echo $row['name']; ?>"/>
                                                        </td>
                                                    </tr>
                                                    <tr> 
                                                        <td><label>Email:</label></td>
                                                        <td>
                                                            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>"/>
                                                        </td>
                                                    </tr>

                                                    <tr> <td><label>Level:</label></td>
                                                        <td><input name="role" type="text" class="form-control" value="<?php echo $row['role']; ?>"/>
                                                        </td>
                                                    </tr>
                                                    <tr> <td><label>Faculty:</label></td>
                                                        <td>                                                           
                                                            <input name='faculty' type='text'  class="form-control" value='<?php echo $row['faculty']; ?>'/>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>                                                                                            
                                            </tbody>
                                        </table>

                                        <div class="form-group">

                                            <table class="table" id="dynamic">                                        
                                                <tr><td><input type="submit" name="submit" id="submit" class="btn btn-success" value="Save">
                                                    </td></tr>
                                            </table>                                            
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
                <?php include'components/footer.php';?>
            </footer>
        </div>
        <!-- end wrapper -->
        <script type="text/javascript" src="../../../assets/plugins/jquery-1.10.2.js"></script>       
        <script src="../../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
        <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="../../../assets/scripts/app.min.js" type="text/javascript"></script>      
    </body>
    </html>
    <?php
} else {
    header('location:../../../index.php');
}
?>