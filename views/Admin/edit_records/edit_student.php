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
                <?php include 'components/sidebar.php'; ?>               
                <!--  page-wrapper -->
                <div class="content-wrapper" >        
                    <!--  page header -->
                    <section class="content-header" >
                        <h1 class="page-header text-center">Student Clearance</h1>
                    </section>>
                    <!-- end  page header -->
                    <section class="content">
                        <div class="row" style="margin-left:50px; margin-right:50px;">                
                            <div class="col-md-12" style="width:960px;">
                                <img  alt="UNZA Logo" src="../../../assets/img/Banner.png" width="960" max-height="150" class="img-responsive">
                            </div>            
                        </div>
                        <div class="row"style="width:960px; margin-left:50px; margin-right:50px;">
                            <div class="col-lg-12">
                                <!-- Advanced Tables -->
                                <div class="panel panel-default" >                        
                                    <div class="panel-body" style="padding-left:100px; min-height:780px;">
                                        <?php
                                        //$student_Id = $_GET['studentId'];
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "clearance_db";
                                        // Create connection
                                        $connetion = new mysqli($servername, $username, $password, $database);
                                        // mysql select query
                                        $query = "SELECT cf.clearance_id,cf.student_id,cf.first_name,cf.last_name, dpt.dpt_Name AS department,cf.program,cf.year_of_study,cf.nrc,cf.address,sch.school_Name,cfc.course 
                                    FROM (clearance_form AS cf INNER JOIN department AS dpt ON cf.department = dpt.dpt_Id) 
                                    INNER JOIN clearance_form_courses AS cfc ON cf.student_id = cfc.student_Id 
                                    INNER JOIN school AS sch ON sch.school_Id = cf.school_Id 
                                    WHERE cf.student_Id='" . $_GET['studentId'] . "' ";

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

                                        <form class="horinzontal-form" id="add_comment" method="POST" action="../../../data_modules/student_update.php" >
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
                                                        <tr> <td><label>Clearnce ID:</label> </td>
                                                            <td>
                                                                <?= $row['clearance_id'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr> 
                                                            <td>
                                                                <label>Student ID:</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" id="studentId" name="studentId" value ="<?php echo $row['student_id']; ?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr> 
                                                            <td><label>First Name:</label></td>
                                                            <td>
                                                                <input type="text" name="firstName" value="<?php echo $row['first_name']; ?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr> 
                                                            <td><label>Sur Name:</label></td>
                                                            <td>
                                                                <input type="text" name="lastName" value="<?php echo $row['last_name']; ?>"/>
                                                            </td>
                                                        </tr>

                                                        <tr> <td><label>Program:</label></td>
                                                            <td><input name="program" type="text" value="<?php echo $row['program']; ?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr> <td><label>Year:</label></td>
                                                            <td>
                                                                <input type="text" name="yos" value="<?php echo $row['year_of_study']; ?>" />
                                                            </td>
                                                        </tr>
                                                        <tr> <td><label>NRC Number:</label></td>
                                                            <td>
                                                                <input type="text" name="nrc" value ="<?php echo $row['nrc']; ?>" />
                                                            </td>
                                                        </tr>
                                                        <tr> <td><label>Residential Address:</label></td>
                                                            <td>
                                                                <input type="type" name="permAd" value="<?php echo $row['address']; ?>" />
                                                            </td>
                                                        </tr>
                                                        <tr> <td><label>School:</label></td>
                                                            <td>
                                                                <select name="school" id="schoolddl" class="form-control" >
                                                                    <option selected value="<?php echo $row['school_Name']; ?>"><?php echo $row['school_Name']; ?></option>
                                                                </select>

                                                            </td>
                                                        </tr>
                                                        <tr> <td><label>Department:</label></td>
                                                            <td>
                                                                <select name="department" id="departmentddl" class="form-control">
                                                                    <option selected value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr id="courses">
                                                            <td><label>Courses:</label> </td>
                                                            <td>
                                                                <?php
                                                                $couses = json_decode($row['course']);
                                                                foreach ($couses as $course) {
                                                                    echo $course . "<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>                                                                                            
                                                </tbody>
                                            </table> 
                                            <table id="course_table" class="table table-bordered table-responsive" hidden>
                                                <thead>
                                                <th>Course Code</th><th>Course Name</th><th>Select</th>
                                                </thead>
                                                <tbody></tbody>
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
            </section>
        </div>
            <!-- end page-wrapper -->
            <footer class="main-footer">
                <?php include'components/footer.php';?>
            </footer>
    </div>
    <!-- end wrapper -->
    <script type="text/javascript" src="../../../assets/plugins/jquery-1.10.2.js"></script>       
    <script src="../../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
    <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../../assets/scripts/app.min.js" type="text/javascript"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {


        });

    </script>
    </body>
    </html>
    <?php
} else {
    header('location:../../../index.php');
}
?>