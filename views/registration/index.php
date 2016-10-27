
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
        <div class="wrapper">
            <!-- navbar top -->
            <?php include'components/header.php'; ?>
            <!-- end navbar top -->

            <!--  page-wrapper -->
            <div class="content-wrapper" style="margin-left: 0px;">

                <section class="content-header">
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <img  alt="UGW Banner" src="../../assets/img/banner.png" class="img-responsive"  max-height="150">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </section>

                <section class="content" style="background-color:#fff;">                    
                    <div class="row" style="">
                        <div class="col-md-12">
                            <h1 align="center" class="hidden-sm hidden-xs">STAFF REGISTRATION FORM</h1>
                            <h4 align="center" class="visible-sm-block visible-xs">STAFF REGISTRATION FORM</h4>
                            <hr style="margin-left:100px; margin-right:100px;" /> 
                        </div>                       
                    </div> 
                    <div class="row" >
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <?php
                             if(isset($_SESSION['insert_sucess'])){
                                 echo '<div class="alert alert-danger alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . ' file is too large!!! '
                                    . '</div>';
                                    unset($_SESSION['insert_sucess']);
                             }
                             elseif(isset($_SESSION['insert_failure'])){
                                 echo '<div class="alert alert-danger alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . ' file is too large!!! '
                                    . '</div>';
                                    unset($_SESSION['insert_failure']);
                             }
                            ?>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6" style="min-height:660px; padding-top:30px;">
                            <form class="form-horizontal" role="form" id="loginForm" name="loginForm" action="../../controller/registerController.php" method="POST">
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 col-md-3 control-label">
                                        Full Names:
                                    </label>
                                    <div class="col-sm-6 col-md-9">
                                        <input class="form-control" name="name" type="text"  required/>
                                    </div>
                                </div>
                                <div class="form-group">                             
                                    <label for="user_id " class="col-sm-2 col-md-3 control-label">
                                        User Name:
                                    </label>
                                    <div class="col-sm-6 col-md-9">
                                        <input class="form-control" name="user_id" type="text" required="true" number="true"/>
                                    </div>
                                </div>
                                <div class="form-group">                             
                                    <label for="email " class="col-sm-2 col-md-3 control-label">
                                        Email:
                                    </label>
                                    <div class="col-sm-6 col-md-9">
                                        <input class="form-control" name="email"  type="email" required/>
                                    </div>
                                </div>
                                
                                <div class="form-group">

                                    <label for="faculty" class="col-sm-2 col-md-3 control-label">
                                        Faculty:
                                    </label>
                                    <div class="col-sm-6 col-md-9">
                                        <select class="form-control" name="faculty" required="true">
                                            <option value='' selected='true'>Select.....</option>
                                            <option value='1' >Business</option>
                                            <option value='3'>ACCA</option>
                                            <option value='3'></option>
                                            <option value='4'></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">

                                    <label for="role" class="col-sm-2 col-md-3 control-label">
                                        Position:
                                    </label>
                                    <div class="col-sm-6 col-md-9">
                                        <select class="form-control" name="role" required="true">
                                            <option value='' selected='true'>Select.....</option>
                                            <option value='2'>Manager</option>
                                            <option value='3'>Coordinator</option>
                                            <option value='4'>Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="control-label col-sm-2 col-md-3">Password:</label>
                                    <div class="col-md-9 col-sm-6">
                                        <input type="Password" class="form-control" name="password" id="password" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="school " class="col-sm-2 col-md-3 control-label">
                                        Confirm Password:
                                    </label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary pull-right" id="submitButton" value="Submit" onclick="validateForm();"/>
                                </div>
                            </form>                
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </section>
            </div>
            <footer class="main-footer" style="margin-left: 0px;">
                <?php include'components/footer.php'; ?>
            </footer>
        </div>
        <!-- end wrapper -->
        <!-- Core Scripts - Include with every page -->
        <script src="../../assets/plugins/jquery-1.10.2.js" type="text/javascript"></script>       
        <script src="../../assets/jquery.validate.js" type="text/javascript"></script>        
        <script src="../../assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>        
        <script src="../../assets/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../assets/scripts/app.min.js" type="text/javascript"></script>
        <script src="../../assets/scripts/app.js" type="text/javascript"></script>
        <script>
            
                function validateForm(){
                    var validator = $("#loginForm").validate({
                        rules: {                   
                            password :"required",
                            confirmpassword:{
                                equalTo: "#password"
                            }  
                        },                             
                        messages: {
                            password :" Enter Password",
                            confirmpassword :"<span style='color:red; font-weight:bold;'>Password and Confirm Password don't match</span>"
                        }
                    });
                    if(validator.form()){
                        //alert('Sucess');
                    }
                }
           
        </script>
    </body>
</html>
