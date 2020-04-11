<?php
include ('include/head.php');
include ('include/db.php');
?>



<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
	
	
		<!--Navigation-->
		<?php
		include ('include/nav.php');
		?>
		
		
		<!--Scroll-->
		<div class="scrollbar-container">
        </div>
		
		
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
        </div>      




		    <div class="app-main">
                 <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
					
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
					
					<!--Dashboard Link-->
					<div class="scrollbar-sidebar">
                       <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                
                                <li class="app-sidebar__heading">Analytics</li>
                                <li>
                                   
								
								  <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                       Home 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li>
                                            <a href="index.php">
                                                <i class="metismenu-icon">
                                                </i> Trace
                                            </a>
                                        </li>
                                    
                                      
                                       
                                      
                                    </ul>
                                </li>
								
                                <li class="mm-active">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                        Total
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li>
                                            <a href="#components-tabs.html" class="mm-active">
                                                <i class="metismenu-icon">
                                                </i>Public VS Private School
                                            </a>
                                        </li>
                                        
                                       
                                      
                                    </ul>
                                </li>
								
								
						
                              
								
								
								 <?php
                                                $db_dd = new PDO('mysql:host=localhost;dbname=feeder_2', 'root', '');
                                                
                                                $stmt_dd = $db_dd->prepare("SELECT school_year.school_year FROM school_year
                                                ");
                                                $stmt_dd->execute();
												
								?>		
								
								
								
								
								
								
								
								
								
								<li class="app-sidebar__heading">School Year</li>
								  
                               <li>
							   
							   <?php			
                                while($row_dd=$stmt_dd->fetch()){
                               ?>
                                    <a href="#<?php echo $row_dd['school_year']?>_Total.php">
                                    
                                       <?php echo $row_dd['school_year']?>
                                     
                                    </a>
                                  
									
								<?php
										}         
                                ?>
								
                                </li>
							
							
							
							
							
							
							
							
							
							
							
							
								</li>
                              
                              
                              
                            </ul>
                        </div>
                    </div> 
                </div>   





					
               


				<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Private School vs Private School 
                                        <div class="page-title-subheading">Analytics.
                                        </div>
                                    </div>
                                </div>
                                  </div>
                        </div>          






						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Total</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Freshmen</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span>Senior High School</span>
                                </a>
                            </li>
                        </ul>
						
						
						<!--Tabs-->
                        <div class="tab-content">
                           
							
							
							
							
							<!--Total-->
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                               
                                <div class="main-card mb-3 card">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
											
											<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
											<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0">
											</div>
											</div>
											</div>
                                                <h5 class="card-title">Public Schools Vs Private School </h5>
                                                <canvas id="public_vs_private_total" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                    
                                    </div>
                            </div>
							<!--Freshmen-->
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                              
							       <div class="main-card mb-3 card">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
											
											<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
											<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0">
											</div>
											</div>
											</div>
                                                <h5 class="card-title">Public Schools Vs Private School </h5>
                                                <canvas id="public_vs_private2" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                    
                                    </div>
							  
							  
                            </div>
							
							<!--High School-->
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                  <div class="main-card mb-3 card">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
											
											<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
											<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0">
											</div>
											</div>
											</div>
                                                <h5 class="card-title">Public Schools Vs Private School </h5>
                                                <canvas id="public_vs_private3" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                 ©Biboi
                                            </a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div>   


					</div>
        </div>
    </div>
	<?php
		include ('include\script.php');
		include ('include\graph.php');
	?>	
</html>
