<?php session_start(); 
if(isset($_SESSION['username'])){
?>
<html>
	<head>
		<title>University of Greenwich-ANNUAL MAGAZINE</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="icon" href="../../../favicon.ico">		
		<meta name="" content="annual magazine">		        
		<link href="../../../assets/css/AdminLTE.min.css" rel="stylesheet">
		<link href="../../../assets/css/skins/_all-skins.css" rel="stylesheet">
		<link href="../../../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../../../assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../../assets/ionicons/css/ionicons.min.css">			 
		<style type="text/css">
			body{
				overflow:initial;
			}
		</style>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<?php include'../components/header.php';?>   
			<?php include'../components/sidebar.php';?>
			<div class="content-wrapper">	    
			    <section class="content-header">
			      <h1> Articles <small>Control Panel</small></h1>
			      <ol class="breadcrumb">
			        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			        <li class="active">Articles</li>
			      </ol>
			    </section>
		    
			    <section class="content">
					<div class="col-md-8"  style="background-color:#fff; margin-top:30px;">                        
						<section class="content">
							<div class="row">                     
								<table id="article_table" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Article Title</th>
											<th>Get Article</th>
											<th>Date Submitted(s)</th>
											<th>Author</th>
											<th>Comment</th>    
											<th>Action</th>                                         
										</tr>
									</thead>
									<tbody>
									<div class="message" hidden="hidden">
		                                <label id="errorlbl" class="control-label"><label>                      
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</div> 
									</tbody>
								</table>
								<p style="margin-top:10px;">*Note: Only articles commented on will display a comment.</p>
							</div>
							
						</section>
					</div>
				</section>
			</div>
			<footer class="main-footer">
	    	<?php 
	    		include '../../../components/footer.php';
	    	?>
	  		</footer>
		</div>
	  
</body>
<script type="text/javascript" src="../../../assets/plugins/jquery-1.10.2.js"></script>

<script src="../../../assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../../../assets/scripts/app.min.js"></script>
<script src="../../../assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="../../../assets/plugins/dataTables/dataTables.bootstrap.css"></script>
<script type="text/javascript">
    $(document).ready(function () {
<<<<<<< HEAD
        var faculty = <?php echo $_SESSION['faculty']; ?>;
=======
    	var faculty = <?php echo $_SESSION['faculty'];?>;
>>>>>>> 7850dc9b610e72e8c18bf7eba49008de337f6462
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../../../model/coordinatorArticleLoader.php?faculty="+faculty,
            success: function (data) {
                $('#article_table').DataTable({
                    data: data,
                    columns: [
                        {'data': 'title'},
                        {'data': 'download'},
                        {'data': 'date'},
                        {'data': 'author'},
                        {'data': 'comment'},
                        {'data': 'button'}
                       
                    ]

                });
            },
            error: function (returnval) {
                $(".message").text(returnval + " failure");
                $(".message").fadeIn("slow");
                $(".message").delay(2000).fadeOut(10000);
            }

        });
    });
</script>      
</html>
<?php
}else{
	header('location:../../../index.php');
}
?>