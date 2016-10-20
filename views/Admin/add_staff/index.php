
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
    <body class="skin-blue">
        <!--  wrapper -->
        <div class="wrapper">
            <!-- navbar top -->
            <header class="main-header">    
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>U</b>GW</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-top:0px;">
                        <img src="../../../assets/img/logo.png" class="img-responsive" />
                    </span>
                </a>    	
                <nav class="navbar navbar-static-top">	      
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="navbar-brand" style="font-family:Adobe Arabic;" href="#">UNIVERSITY of GREENWICH ANNUAL MAGAZINE</a>

                        </li>
                    </ul>
                    <!-- User Account: style can be found in dropdown.less -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="hidden-xs">

                                </a>
                                <ul class="dropdown-menu">              
                                    <li class="user-body">
                                        <!--div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div-->
                                        <div class="">
                                            <a href="../../../index.php" class="btn btn-default btn-flat">Sign in</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- end navbar top -->

            <!--  page-wrapper -->
            <div class="content-wrapper" style="background-color:#ffffff;margin-left: 0px;">
                <div class="row">                      
                    <div class="col-lg-12">
                        <section class="content-header">
                        </section>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <img  alt="UNZA Logo" src="../../../assets/img/banner.png" class="img-responsive"  width="" max-height="150">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="">
                    <h1 align="center" class="hidden-sm hidden-xs">STAFF REGISTRATION FORM</h1>
                    <h4 align="center" class="visible-sm-block visible-xs">STAFF REGISTRATION FORM</h4>

                    <hr style="margin-left:100px; margin-right:100px;" />

                </div> 
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <?php
                        if (isset($_SESSION['insert_sucess'])) {
                            echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Congratulations!</strong> Your registration has been submitted successfully!
                        </div";
                            unset($_SESSION['insert_sucess']);
                        } elseif (isset($_SESSION['insert_failure'])) {
                            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type=button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Oh snap!</strong> Something is wrong! Please Check the information you have provided. If problem persists, contact the system Administrator
                        </div";
                        }
                        ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" id="firstForm" action="../../../data_modules/add_staff.php" method="POST">
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 col-md-3 control-label">
                                    First Name:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <input class="form-control" name="firstName" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">                             
                                <label for="lastName " class="col-sm-2 col-md-3 control-label">
                                    Last Name:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <input class="form-control" name="lastName" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">                             
                                <label for="studentId " class="col-sm-2 col-md-3 control-label">
                                    Staff ID:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <input class="form-control" name="staffId" type="text" required/>
                                </div>
                            </div>

                            <div class="form-group">

                                <label for="yearofstudy " class="col-sm-2 col-md-3 control-label">
                                    Position:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <select class="form-control" name="level">
                                        <option value="0" selected="true">Administrator</option>
                                        <option value="1">Coordinator</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Student</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="permAd" class="control-label col-sm-2 col-md-3">Password:</label>
                                <div class="col-md-4 col-sm-9">
                                    <input type="Password" class="form-control" name="password" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="school " class="col-sm-2 col-md-3 control-label">
                                    Confirm Password:
                                </label>
                                <div class="col-sm-9 col-md-4">
                                    <input type="Password" class="form-control" name="confirm_password" id=""/>
                                </div>
                            </div>

                            <div class="col-md-8 col-md-offset-2">
                                <!-- Table One -->
                                <input type="submit" class="btn btn-primary" id="submitButton" value="Submit" />
                            </div>
                        </form>                
                    </div>
                </div>

            </div>
            <footer>
                <?php include'../../../components/footer.php'; ?>
            </footer>
        </div>
        <!-- end wrapper -->
        <!-- Core Scripts - Include with every page -->
        <script type="text/javascript" src="../../../assets/plugins/jquery-1.10.2.js"></script>       
        <script src="../../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
        <script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="../../../assets/scripts/app.min.js" type="text/javascript"></script>

        <script src="js/app.js"></script>
    </body>
</html>
