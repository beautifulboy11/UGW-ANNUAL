<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University of Greenwich-ANNUAL MAGAZINE</title>        
        <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">   
    </head>
    <body class="body-Login-back">
        <div class="container">
            <div class="row" style="margin-top:10px;">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <img src="assets/img/banner1.png" alt="" class="img-responsive" />
                </div> 
                <div class="col-lg-3"></div>
            </div>
            <div class="row"style="margin-top:10px; padding-bottom:50px; background-color:#00338e; " >
                <div class="col-md-12" style="margin-top:30px; padding-bottom:50px; background-color:#00338e; "> 
                    <div class="col-md-4"></div>           
                    <div class="col-md-4">
                        <div class="login-panel panel panel-default">                  
                            <div class="panel-heading">
                                <h3 class="panel-title">Sign In</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="controller/authController.php" method="post">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="User name" name="username" type="text" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                            </label>
                                        </div>
                                        <!-- Change this to a button or input when using this as a form -->
                                        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Login" style="background-color:;">
                                    </fieldset>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="pull-left">Sign Up</a>
                                <a href="#" class="pull-right">Forgot your password?</a>
                                <br />
                                <?php
                                    if(isset($_SESSION['login_failure'])){
                                        echo "<p style='color:red;'>
                                        <strong>Access Denied!</strong> *Either Username or Password is wrong!
                                        </p>";
                                        unset($_SESSION['login_failure']);
                                    }elseif(isset($_SESSION['username'])){
                                    echo "<p style='color:green;'>
                                    <strong>  *You have logged out!</strong>
                                    </p>";
                                           
                                    session_destroy();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div> 
                </div>
            </div>
            
            <div class="row" style="background-color:#00338e; margin-top:10px;">             
                <div  style="color:#fff; ">
                    <div class="text-center">
                        <strong>Copyright &copy;
                            <?php echo date("Y");?>The University of Greenwich Annual Magazine.
                        </strong> All rights reserved
                    </div>
                </div>
            </div>
        </div>             
        <script src="assets/plugins/jquery-1.10.2.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>    
    </body>
</html>
