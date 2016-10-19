<?php session_start();
if(isset($_SESSION['username'])){
?>
<html>
<head>
	<title>Student Home</title>
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
	<link rel="stylesheet" href="../../assets/plugins/dataTables/dataTables.bootstrap.css">			 
	<style type="text/css">
		body{
			overflow:initial;
		}
	</style>
	<script type="text/javascript">
		function refresh() {
         if(new Date().getTime() - time >= 60000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
     }

     setTimeout(refresh, 10000);
	</script>
</head>
<body class="hold-transition skin-blue">
	<div class="wrapper">
		<?php include'../../components/header.php';?>   
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
	    				<form enctype="multipart/form-data" action="../../controller/uploadsController.php" method="POST"  >
	    					<input type="text" name="title" placeholder="Title" class="form-control" required="true">
	    					Choose the file to upload
	    					<div class="input-group">
	    						<span class="input-group-addon">
	    							<i class="fa fa-upload"></i>
	    						</span>
	    						<input class="form-control" type="file" name="uploadedfile"/>
	    					</div>
	    					<br/>
	    					<input name="fileupload"  value="Upload File" type="submit" class="btn btn-primary btn-lg active btn-sm"/>
	    							    				
	    				</form>
	    			</div>
	    		</div>
	    		<!--/first col-->
	    		<!--second col-->
	    		<div class="col-md-8"  style="background-color:#fff; margin-top:30px;">
	    			<?php include_once('../../model/articleLoader.php');?>
	    			<section class="content">
	    				<div class="row">                     
	    					<table id="example2" class="table table-bordered table-hover">
	    						<thead>
	    							<tr>
	    								<th>Article Title</th>
	    								<th>Browser</th>
	    								<th>Platform(s)</th>
	    								<th>Engine version</th>
	    								<th>CSS grade</th>
	    							</tr>
	    						</thead>
	    						<tbody>
	    						<?php 
									while($row=mysqli_fetch_array($results)){
								?>
	    							<tr>
	    								<td>
	    									<?php echo $row['title'];?>
	    								</td>
	    								<td>
	    									<a href="../<?php echo $row['filelocation'];?>">
	    										<?php echo $row['title'];?>
	    									</a>
	    								</td>
	    								<td><?php echo $row['date'];?></td>
	    								<td> 4</td>
	    								<td>X</td>
	    							</tr>
	    							
									<?php
                                    	}
                                    ?>
	    						</tbody>

	    					</table>
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
<script>
  $(function () {
    $("#example2").DataTable();    
  });
</script>
</html>
<?php
}else{
	header('location: ../../index.php');
}
?>