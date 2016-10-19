<?php echo
	'<aside class="main-sidebar" >
	    <section class="sidebar">	      
	      	<div class="user-panel">
		        <div class="pull-left image">
		        	<img src="../../assets/img/boxed-bg.jpg" class="img-circle" alt="User Image">
		        </div>
		        <div class="pull-left info">
		          <p></p>
		          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		        </div>
	      	</div>';
		    if(isset($_SESSION['admin'])){
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
	      	elseif (isset($_SESSION['student1'])) {
	      		echo '<ul class="sidebar-menu"  style="margin-left:30px;">
				        <!--li class="header">MAIN NAVIGATION</li>
				        <li class="active treeview">
				          <a href="#">
				            <i class="fa fa-home"></i> <span>Home</span> 
				          </a>	          
		        		</li-->
		        		<li style="margin-top:70px;">
		        			<!-- search form -->
		        			<form action="#" method="get" class="sidebar-form" style="border:0px;" enctype="multipart/form-data">
		        				<div class="input-group">
		        				<input type="file" name="q" class="form-control" placeholder="Upload...">		        					
		        				</div>
		        				<div class="input-group" style="margin-top:10px;">		        				
		        				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-upload"></i>
		        						Submit</button>
		        				</div>
		        			</form>
		        			<!-- /.search form -->
		        		</li>
				        
	      			  </ul>';
	      		
	      	}
	      	elseif (isset($_SESSION['coordinator'])) {
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
	      	elseif (isset($_SESSION['manager'])) {
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
	    
	</aside>';?>