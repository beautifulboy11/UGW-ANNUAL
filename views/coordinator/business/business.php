<?php session_start();
if(isset($_SESSION['username'])){
?>
<html>
<head>
	<title>Student Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="../../favico.png">		
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
		<?php include'../../../components/header.php';?>   
		<?php include'../../../components/sidebar.php';?>  		 
		<div class="content-wrapper">	    
		    <section class="content-header">
		      <h1> Dashboard <small>Control panel</small></h1>
		      <ol class="breadcrumb">
		        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li class="active">Dashboard</li>
		      </ol>
		    </section>
	    
		    <section class="content">
		      <div class="row">
		      <table class="table-responsive table table-striped table-hover">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Title</th>
				      <th>Student</th>
				      <th>Status</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td><button>Comment</button></td>
				    </tr>
				  </tbody>
				</table>                     
		      </div>
		      <div class="row">        
		        <section class="col-lg-7 connectedSortable">       
		        </section>             
		      </div>     
		    </section>   
	  	</div>  
	  	<footer class="main-footer">
	    	<?php 
	    		include '../../components/footer.php';
	    	?>
	  	</footer>
  	</div>
</body>
<script type="text/javascript" src="../../assets/plugins/jquery-1.10.2.js"></script>

<script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../../assets/scripts/app.min.js"></script>
</html>
<?php
}else{
	header('location: ../../index.php');
}
?>