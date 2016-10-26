<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
    <html>
        <head>
            <title>Student Home</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="icon" href="../../favicon.ico">
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine:bold,bolditalic|Inconsolata:italic|Droid+Sans">
            <meta name="" content="annual magazine">		
            <link href="../../assets/css/AdminLTE.min.css" rel="stylesheet">
            <link href="../../assets/css/skins/_all-skins.css" rel="stylesheet">
            <link href="../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="../../assets/ionicons/css/ionicons.min.css">
            <link rel="stylesheet" href="../../assets/plugins/dataTables/dataTables.bootstrap.css">			 
            <style type="text/css">
                body{
                    overflow:initial;
                }
            </style>
            <script type="text/javascript">
                function Agree(){
                    if(document.getElementById('agree').checked){
                        return true; 
                    } else {
                        alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');                        
                    }
                    return false;
                }
            </script>
                
            
        </head>
        <body class="hold-transition skin-blue">
            <div class="wrapper">
                <?php include'../../components/header.php'; ?>   
                <!--?php include'../../components/sidebar.php';?-->  		 
                <div class="content-wrapper" style="margin-left:0px;">	    
                    <section class="content-header">
                        <h1> Dashboard <small>Control panel</small></h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </section>
                    <div class="col-md-12" style="background-color:#fff;">
                    <!--first col-->
                    <div class="col-md-4" style="margin-top:30px;">
                        <div class="col-md-12">
                            <form enctype="multipart/form-data" action="../../controller/uploadsController.php" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                                <input type="text" name="title" placeholder="Title" class="form-control" required="true" />
                                <br/>
                                Choose the file to upload
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-upload"></i>
                                    </span>
                                    <input class="form-control" type="file" name="uploadedfile" required="true"/>
                                </div>
                                <div>
                                    <div style="margin-top:20px;">
                                        <input type="checkbox" name="checkbox" value="check" id="agree" />
                                        I have read and agree to the <a href="#">Terms and Conditions</a> and Privacy Policy                                               
                                    </div>
                                </div>
                                <div  class="input-group" style="margin-top:20px;">
                                    <input name="fileupload"  value="Upload File" type="submit" class="btn btn-primary btn-lg active btn-sm"/>
                                </div>
                            </form>
                            <div class="">                                
                                <?php
                                if (isset($_SESSION['format']))
                                {
                                    echo '<div class="alert alert-danger alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . 'Sorry, only .img, .jpeg, .jpg, .png and .docx file cab be uploaded!!'
                                    . '</div> ';
                                    unset($_SESSION['format']);
                                         
                                }
                                elseif (isset($_SESSION['size']))
                                {
                                    echo '<div class="alert alert-danger alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . ' file is too large!!! '
                                    . '</div>';
                                    unset($_SESSION['size']);
                                }
                                elseif (isset($_SESSION['exits']))
                                {
                                    echo '<div class="alert alert-danger alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . ' Sorry, file already exits'
                                    . '</div>';
                                    unset($_SESSION['exits']);
                                } 
                                elseif (isset($_SESSION['success']))
                                {
                                    echo '<div class="alert alert-danger alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . 'File Uploaded successfully'
                                    . '</div>';
                                    unset($_SESSION['success']);
                                }
                                elseif (isset($_SESSION['agree'])) {
                                    echo '<div class="alert alert-info alert-dismissible" role="alert">'
                                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                            . '<span aria-hidden="true">&times;</span></button>'
                                    . 'Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy '
                                    . '</div>';
                                    unset($_SESSION['agree']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--/first col-->
                    <!--second col-->
                    <div class="col-md-8"  style="background-color:#fff; margin-top:30px;">                        
                        <section class="content">
                            <div class="row">                     
                                <table id="article_table" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Article Title</th>
                                            <th>Date Submitted(s)</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>                                                    
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="message" hidden="hidden">
                                <label id="errorlbl" class="control-label"><label>
                                        </div>
                                        </section>
                                        </div>
                                        <!--/second col-->
                                        </div>
                                        </div>  
                                        <footer class="main-footer"style="margin-left:0px;">
                                            <?php
                                            include '../../components/footer.php';
                                            ?>
                                        </footer>
                                        </div>
                                        </body>
                                        <script type="text/javascript" src="../../assets/plugins/jquery-1.10.2.js"></script>
                                        <script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
                                        <script src="../../assets/scripts/app.min.js"></script>
                                        <script src="../../assets/plugins/dataTables/jquery.dataTables.js"></script>
                                        <script src="../../assets/plugins/dataTables/dataTables.bootstrap.css"></script>
                                        <script type="text/javascript">
                $(document).ready(function () {
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "../../model/articleLoader.php?student=" +<?php echo $_SESSION['username']; ?>,
                        success: function (data) {
                            $('#article_table').DataTable({
                                data: data,

                                columns: [

                                    {'data': 'title'},
                                    {'data': 'date'},
                                    {'data': 'comment'},
                                ]
                            });
                        },
                        error: function (returnval) {
                            $(".message").text(returnval + " failure");
                            $(".message").fadeIn("slow");
                            $(".message").delay(2000).fadeOut(1000);
                        }

                    });
                });
                                        </script>      
                                        </html>
                                        <?php
                                    } else {
                                        header('location: ../../index.php');
                                    }
                                    ?>