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
                                   
								
								  <li class="mm-active">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                       Home 
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                         <li>
                                            <a href="index.php">
                                                <i class="metismenu-icon"  class="mm-active">
                                                </i> Dashboard
                                            </a>
                                        </li>
										
										<li>
                                            <a href="index.php">
                                                <i class="metismenu-icon"  class="mm-active">
                                                </i> Trace
                                            </a>
                                        </li>
                                    
                                      
                                       
                                      
                                    </ul>
                                </li>
								
                                <li >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-albums"></i>
                                        Total
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li>
                                            <a href="public_private.php" >
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
                                    <div>Trace
                                        <div class="page-title-subheading">Analytics.
                                        </div>
                                    </div>
                                </div>
                                  </div>
                        </div>          

 <div class="row">
                     <div class="col-md-12">
                        <div class="main-card mb-3 card">
                           <div class="card-header">
                              <!--Search and buttons-->
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <!--School Year Dropdown-->
                                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-info">School Year</button>
                                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                             <h6 tabindex="-1" class="dropdown-header"></h6>
                                             <?php
                                                $db_dd = new PDO('mysql:host=localhost;dbname=feeder_2', 'root', '');
                                                
                                                $stmt_dd = $db_dd->prepare("SELECT school_year.school_year FROM school_year
                                                ");
                                                $stmt_dd->execute();
                                                while($row_dd=$stmt_dd->fetch()){
                                                ?>
                                             <button type="button" tabindex="0" class="dropdown-item"><?php echo $row_dd['school_year']?></button>
                                             <div tabindex="-1" class="dropdown-divider"></div>
                                             <!--School Year Dropdown End-->
                                             <?php
                                                }
                                                
                                                ?>
                                          </div>
                                          <!--School Year Dropdown End-->
                                       </div>
                                       <input type="text" class="form-control">
                                       <button class="btn  ml-4 btn-secondary">Trace</button>
                                    </div>
                                 </div>
                                 <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                       <button class="btn btn-danger" onclick="window.location.href = 'dashboard.php';">Dashboard</button>
                                    </div>
                                 </div>
                              </div>
                              <!--Search and buttons End-->
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
