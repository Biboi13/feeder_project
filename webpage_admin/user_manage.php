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
                                   
								
								  <li >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                       Home 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul >
                                        <li >
                                            <a href="dashboard.php">
                                                <i class="metismenu-icon" >
                                                </i> SHS
                                            </a>
                                        </li> 
										
										
										 <li >
                                            <a href="dashboard_fm.php">
                                                <i class="metismenu-icon"  >
                                                </i> FRESHMEN
                                            </a>
                                        </li> 
									
                                      
                                    </ul>
                                </li>
								
								
								  <li >
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
								
								  <li class="mm-active">
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
									
									User Management 


                                        <div class="page-title-subheading">Admin
										
                                        </div>
                                    </div>
                                </div>
                                  </div>
                        </div>          

                          

                            
							<!--/Tab content-->
                          

                                <!--Total-->
                             
                                	
 <div class="row">
                     <div class="col-md-12">
                        <div class="main-card mb-3 card">
                           
						   
						     <?php include("datatable.php") ?>

                     
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
        </div>
      
        
        <?php
		include ('../include\script.php');
		include ('../include/fm_graph_public_vs_private.php');
		include ('../include/fm_graph.php');
	


	?>

            <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</body>
  <script src="table.js"></script>

		</html>
			
			
			
		
		