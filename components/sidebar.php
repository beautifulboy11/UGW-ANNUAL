<?php

echo
'<aside class="main-sidebar" >
	    <section class="sidebar">	      
	      	<div class="user-panel">
		        <div style="margin-left:10px;"class="pull-left image">
		        	<img src="../../../assets/img/boxed-bg.jpg" class="img-circle" alt="User Image">
		        </div>
		        <div class="pull-left info">
		          <p></p>
		          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		        </div>
	      	</div>';
if (isset($_SESSION['admin'])) {
    echo '<ul class="sidebar-menu">
				        <li class="header">MAIN NAVIGATION</li>
				        <li class="active treeview">
				          <a href="#">
				            <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
				          </a>	          
		        		</li>	        	       
		        		<li class="treeview">
		          			<a href="#">
                                                    <i class="fa fa-user"></i>
                                                    <span>User Accounts</span>
                                                    <i class="fa fa-angle-left pull-right"></i>
		          			</a>
		          			<ul class="treeview-menu">
                                                    <li>
                                                        <a href="manageStudents.php">
                                                            <i class="fa fa-circle-o text-aqua"></i>
                                                            <span>Student Accounts</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="manageStaff.php">
                                                            <i class="fa fa-circle-o text-aqua"></i>
                                                            <span>Staff Accounts</span>
                                                        </a>
                                                    </li>
                                                    
		            			
		          			</ul>
		        		</li>
		        		<li class="">
		          			<a href="#">
		            			<i class="fa fa-gears"></i>
		            			<span>Date Settings</span>		            			
		          			</a>
			          		<ul class="treeview-menu">
					            <li></li>
					            <li></li>					          
			         		 </ul>
		        		</li>
				    </ul>';
} elseif (isset($_SESSION['coordinator'])) {
    echo '<ul class="sidebar-menu">
				        <li class="header">MAIN NAVIGATION</li>
				        <li class="active treeview">
				          <a href="#">
				            <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
				          </a>	          
		        		</li>	        	       
		        		<li class="treeview">
		          			<a href="#">
		            			<i class="fa fa-pie-chart"></i><span>Reports</span>
		            			<i class="fa fa-angle-left pull-right"></i>
		          			</a>
		          			<ul class="treeview-menu">
		            			<li></li>
		            			<li></li>
		            			<li></li>
		            			<li></li>
		          			</ul>
		        		</li>
		        		<li>
		          			<a href="#">
		            			<i class="fa fa-laptop"></i><span>Articles</span>
		          			</a>
		        		</li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-edit"></i><span></span>
				            <i class="fa fa-angle-left pull-right"></i>
				          </a>
				          <ul class="treeview-menu">
				            <li></li>
				            <li></li>
				            <li></li>
				          </ul>
				        </li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-table"></i><span></span>
				            <i class="fa fa-angle-left pull-right"></i>
				          </a>
				          <ul class="treeview-menu">
				            <li></li>
				            <li></li>
				          </ul>
		        		</li>	       
		        
				        <li class="treeview">	          
				          <ul class="treeview-menu">
				            <li></li>
				            <li></li>
				            <li></li>
				            <li></li>				            
				          </ul>
				        </li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-share"></i><span></span>
				            <i class="fa fa-angle-left pull-right"></i>
				          </a>
				          <ul class="treeview-menu">
				            <li>	              
				              <ul class="treeview-menu">				               
				                <li>	                  
				                  <ul class="treeview-menu">
				                    <li></li>
				                    <li></li>
				                  </ul>
				                </li>
				              </ul>
				            </li>				            
				          </ul>
				        </li>
				        <li></li>
				        <li class="header"></li>
				        <li></li>
				        <li></li>
				        <li></li>
	      			  </ul>';
} elseif (isset($_SESSION['manager'])) {
    echo '<ul class="sidebar-menu">
				        <li class="header">MAIN NAVIGATION</li>
				        <li class="active treeview">
				          <a href="#">
				            <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
				          </a>	          
		        		</li>	        	       
		        		<li class="treeview">
		          			<a href="#">
		            			<i class="fa fa-pie-chart"></i><span>Reports</span>
		            			<i class="fa fa-angle-left pull-right"></i>
		          			</a>
		          			<ul class="treeview-menu">
		            			<li></li>
		            			<li></li>
		            			<li></li>
		            			<li></li>
		          			</ul>
		        		</li>
		        		<li class="treeview">
		          			<a href="#">
		            			<i class="fa fa-laptop"></i>
		            			<span></span>
		            			<i class="fa fa-angle-left pull-right"></i>
		          			</a>
			          		<ul class="treeview-menu">
					            <li></li>
					            <li></li>
					            <li></li>
					            <li></li>
					            <li></li>
					            <li></li>
			         		 </ul>
		        		</li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-edit"></i><span></span>
				            <i class="fa fa-angle-left pull-right"></i>
				          </a>
				          <ul class="treeview-menu">
				            <li></li>
				            <li></li>
				            <li></li>
				          </ul>
				        </li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-table"></i><span></span>
				            <i class="fa fa-angle-left pull-right"></i>
				          </a>
				          <ul class="treeview-menu">
				            <li></li>
				            <li></li>
				          </ul>
		        		</li>	       
		        
				        <li class="treeview">	          
				          <ul class="treeview-menu">
				            <li></li>
				            <li></li>
				            <li></li>
				            <li></li>				            
				          </ul>
				        </li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-share"></i><span></span>
				            <i class="fa fa-angle-left pull-right"></i>
				          </a>
				          <ul class="treeview-menu">
				            <li>	              
				              <ul class="treeview-menu">				               
				                <li>	                  
				                  <ul class="treeview-menu">
				                    <li></li>
				                    <li></li>
				                  </ul>
				                </li>
				              </ul>
				            </li>				            
				          </ul>
				        </li>
				        <li></li>
				        <li class="header"></li>
				        <li></li>
				        <li></li>
				        <li></li>
	      			  </ul>';
}
echo'</section>
	    
	</aside>';
?>