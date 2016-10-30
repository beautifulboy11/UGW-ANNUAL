<?php
	echo'<header class="main-header">    
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
              <span class="hidden-xs">';echo $_SESSION['name'] .'</span>
            </a>
            <ul class="dropdown-menu">              
              <li class="user-body">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../../../index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
	        </ul>
	      </div>
	    </nav>
  		</header>';
?>