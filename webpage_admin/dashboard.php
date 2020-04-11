<?php
include ('../include/head.php');
?>
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
                                   
								
								  <li class="mm-active">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                       Home 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li class="mm-active">
                                            <a href="#dashboard.php">
                                                <i class="metismenu-icon"  class="mm-active">
                                                </i> SHS
                                            </a>
                                        </li> 
										
										
										 <li>
                                            <a href="dashboard_fm.php">
                                                <i class="metismenu-icon"  class="mm-active">
                                                </i> FRESHMEN
                                            </a>
                                        </li> 
									
                                      
                                    </ul>
                                </li>
								
								
								  <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                      Detailed Analytics
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="school_year.php">
                                                <i class="metismenu-icon"  class="mm-active">
                                                </i> School Year
                                            </a>
                                        </li> 
										
										
								
                              
                                    
                                      
                                       
                                      
                                    </ul>
                                </li>
								
								  <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                     Management
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                              <a href="user_manage.php">
                                                <i class="metismenu-icon"  class="mm-active">
                                                </i>User Management
                                            </a>
                                        </li> 
										
										
									
								
										
										
								
                              
                                    
                                      
                                       
                                      
                                    </ul>
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
                                    <div>
									
									SHS Comparative Data


                                        <div class="page-title-subheading">Admin
										
                                        </div>
                                    </div>
                                </div>
                                  </div>
                        </div>          

                          

                            
							<!--/Tab content-->
                          

                                <!--Total-->
                             
                                <div class="row">
									<div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                <h5 class="card-title">Top places with SHS enrollees  </h5>
                                             <canvas id="count_places" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
									
									
									<div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                <h5 class="card-title">Top places with SHS enrollees  </h5>
                                             <canvas id="count_school_year" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    </div>


                                                <div class="main-card mb-3 card">
                                                    <div class="card-body">

                                                     
											<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
											<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div>
											<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0">
											</div>
											</div>
											</div>
                                             
                 
                                        <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                        <button class="btn invisible" id="backButton">
                                            Back</button>
                                              </div>
                                                </div>

                           

                          <div class="row">
									 <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
											<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
											</div>
											</div>
											<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
											<div style="position:absolute;width:200%;height:200%;left:0; top:0">
											</div>
											</div>
											</div>
                                                <h5 class="card-title">TOP School SHS ENROLLEES  Private</h5>
                                                <canvas id="top_schools" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
									
									
                                    </div>
									
									  <div class="row">
									 <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
											<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
											</div>
											</div>
											<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
											<div style="position:absolute;width:200%;height:200%;left:0; top:0">
											</div>
											</div>
											</div>
                                                <h5 class="card-title">TOP School ENROLLEES SHS Private</h5>
                                                <canvas id="top_schools_public" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
									
									
                                    </div>
									
									
									
					   
					   
					   
									</div>
									
						
						
						<!--Footer-->
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
					    <!--/Footer-->

                        </div>
                    </div>
                </div>
        
        
        <?php
		include ('../include\script.php');
		include ('../include/shs_graph_public_vs_private.php');
		include ('../include/shs_graph.php');
	


	?>

            <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</body>
		</html>
			
			
			
		
		