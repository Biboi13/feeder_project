<?php
include ('include/db.php');
?>



<?php
include ('include/head.php');
?>
<body>

        
		
	
            <div class="app-page-title  bg-success">
                      <center> DASHBOARD </center>
                        </div>
                 
              
             <div class="app-main__outer">
                    <div class="app-main__inner">
                              
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
								
								
								
                                <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                <h5 class="card-title">Public Schools Vs Private School </h5>
                                                <canvas id="public_vs_private" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                    
                                    </div>
									
									
									 <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                <h5 class="card-title">TOP School ENROLLEES  </h5>
                                                <canvas id="top_schools" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
									
									
									
									
                            </div>
							
							<div class="row">
							
							
							<div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                <h5 class="card-title">School Year count  </h5>
                                                <canvas id="count_school_year" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
									
									
									<div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                <h5 class="card-title">Top places with enrollees  </h5>
                                             <canvas id="count_places" width="662" height="330" class="chartjs-render-monitor" style="display: block; width: 331px; height: 165px;"></canvas>
                                            </div>
                                        </div>
                                       
                                    </div>
							 
            
                            </div>
                            </div>
                       
					   
					   
					   
                            </div>
                        </div>
            
                    </div>
                  


		
		
	
	<?php
		include ('include\script.php');
	?>	
	
	<?php
		include ('include\graph.php');
	?>	


</body>
</html>