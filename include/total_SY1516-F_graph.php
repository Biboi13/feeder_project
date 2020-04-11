
<!--Bar graph TOP 6 School Enrolee-->


	
	<!--Edit me graph-->
	<script type="text/javascript">		
		var ctx = document.getElementById('top_schools').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'public'
			Order by feeder_total_students DESC LIMIT 1";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['school_name']; 
$top_school_count_1=(int)$row_top_1['student_count']; 

}

$sql_top_2="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'public'
			Order by feeder_total_students DESC LIMIT 2";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['school_name']; 
$top_school_count_2=(int)$row_top_2['student_count']; 

}

$sql_top_3="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'public'
			Order by feeder_total_students DESC LIMIT 3";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['school_name']; 
$top_school_count_3=(int)$row_top_3['student_count']; 

}

$sql_top_4="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'public'
			Order by feeder_total_students DESC LIMIT 4";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['school_name']; 
$top_school_count_4=(int)$row_top_4['student_count']; 

}

$sql_top_5="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'public'
			Order by feeder_total_students DESC LIMIT 5";
$result_top_5 = mysqli_query($con,$sql_top_5);
while($row_top_5 = mysqli_fetch_array($result_top_5)) {

$top_school_name_5=$row_top_5['school_name']; 
$top_school_count_5=(int)$row_top_5['student_count']; 

}


$sql_top_6="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'public'
			Order by feeder_total_students DESC LIMIT 6";
$result_top_6 = mysqli_query($con,$sql_top_6);
while($row_top_6 = mysqli_fetch_array($result_top_6)) {

$top_school_name_6=$row_top_6['school_name']; 
$top_school_count_6=(int)$row_top_6['student_count']; 

}


            $data_top = array($top_school_count_1,$top_school_count_2,$top_school_count_3,$top_school_count_4,$top_school_count_5,$top_school_count_6);
            $label = array($top_school_name_1,$top_school_name_2,$top_school_name_3,$top_school_name_4,$top_school_name_5,$top_school_name_6);
		
            $js_data_top = json_encode($data_top);
            $js_label_top = json_encode($label);
			
            echo "var number = ".    $js_data_top. ";\n";
            echo "var label = ". $js_label_top  . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'horizontalBar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 105, 97)',
					   'rgb(224, 187, 228)',
					   'rgb(152, 230, 144)',
					   'rgb(255, 253, 150)',
					   'rgb(255, 180, 71)',
					   'rgb(224, 254, 254)'

		            ],
		            borderColor: [
		               'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
		    
		            ],
		            borderWidth: 1
					
		        }]
		    },
			
		});
	</script>	<!--Bar graph TOP 6 School Enrolee-->


	
	<!--Edit me graph-->
	<script type="text/javascript">		
		var ctx = document.getElementById('top_schools_public').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'private'
			Order by feeder_total_students DESC LIMIT 1";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['school_name']; 
$top_school_count_1=(int)$row_top_1['student_count']; 

}

$sql_top_2="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'private'
			Order by feeder_total_students DESC LIMIT 2";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['school_name']; 
$top_school_count_2=(int)$row_top_2['student_count']; 

}

$sql_top_3="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'private'
			Order by feeder_total_students DESC LIMIT 3";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['school_name']; 
$top_school_count_3=(int)$row_top_3['student_count']; 

}

$sql_top_4="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'private'
			Order by feeder_total_students DESC LIMIT 4";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['school_name']; 
$top_school_count_4=(int)$row_top_4['student_count']; 

}

$sql_top_5="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'private'
			Order by feeder_total_students DESC LIMIT 5";
$result_top_5 = mysqli_query($con,$sql_top_5);
while($row_top_5 = mysqli_fetch_array($result_top_5)) {

$top_school_name_5=$row_top_5['school_name']; 
$top_school_count_5=(int)$row_top_5['student_count']; 

}


$sql_top_6="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year
          
            INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
            Where school_year.school_year Like '%SY1516-F%' AND feeder_data.feeder_type = 'private'
			Order by feeder_total_students DESC LIMIT 6";
$result_top_6 = mysqli_query($con,$sql_top_6);
while($row_top_6 = mysqli_fetch_array($result_top_6)) {

$top_school_name_6=$row_top_6['school_name']; 
$top_school_count_6=(int)$row_top_6['student_count']; 

}


            $data_top = array($top_school_count_1,$top_school_count_2,$top_school_count_3,$top_school_count_4,$top_school_count_5,$top_school_count_6);
            $label = array($top_school_name_1,$top_school_name_2,$top_school_name_3,$top_school_name_4,$top_school_name_5,$top_school_name_6);
		
            $js_data_top = json_encode($data_top);
            $js_label_top = json_encode($label);
			
            echo "var number = ".    $js_data_top. ";\n";
            echo "var label = ". $js_label_top  . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'horizontalBar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 105, 97)',
					   'rgb(224, 187, 228)',
					   'rgb(152, 230, 144)',
					   'rgb(255, 253, 150)',
					   'rgb(255, 180, 71)',
					   'rgb(224, 254, 254)'

		            ],
		            borderColor: [
		               'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
		    
		            ],
		            borderWidth: 1
					
		        }]
		    },
			
		});
	</script>	
	
	

	
	<!--By School year-->
	<script type="text/javascript">		
		var ctx = document.getElementById('count_places').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 1
";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['feeder_address']; 
$top_school_count_1=(int)$row_top_1['Total_Students']; 

}

$sql_top_2="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 2";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['feeder_address']; 
$top_school_count_2=(int)$row_top_2['Total_Students']; 

}

$sql_top_3="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 3";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['feeder_address']; 
$top_school_count_3=(int)$row_top_3['Total_Students']; 

}

$sql_top_4="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 4";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['feeder_address']; 
$top_school_count_4=(int)$row_top_4['Total_Students']; 

}

$sql_top_5="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 5";
$result_top_5 = mysqli_query($con,$sql_top_5);
while($row_top_5 = mysqli_fetch_array($result_top_5)) {

$top_school_name_5=$row_top_5['feeder_address']; 
$top_school_count_5=(int)$row_top_5['Total_Students']; 

}


$sql_top_6="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 6";
$result_top_6 = mysqli_query($con,$sql_top_6);
while($row_top_6 = mysqli_fetch_array($result_top_6)) {

$top_school_name_6=$row_top_6['feeder_address']; 
$top_school_count_6=(int)$row_top_6['Total_Students']; 

}

$sql_top_7="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 7";
$result_top_7 = mysqli_query($con,$sql_top_7);
while($row_top_7 = mysqli_fetch_array($result_top_7)) {

$top_school_name_7=$row_top_7['feeder_address']; 
$top_school_count_7=(int)$row_top_7['Total_Students']; 

}


            $data_top = array($top_school_count_1,$top_school_count_2,$top_school_count_3,$top_school_count_4,$top_school_count_5,$top_school_count_6,$top_school_count_7);
            $label = array($top_school_name_1,$top_school_name_2,$top_school_name_3,$top_school_name_4,$top_school_name_5,$top_school_name_6,$top_school_name_7);
		
            $js_data_top = json_encode($data_top);
            $js_label_top = json_encode($label);
			
            echo "var number = ".    $js_data_top. ";\n";
            echo "var label = ". $js_label_top  . ";\n";
           
?>


	
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 105, 97)',
					   'rgb(224, 187, 228)',
					   'rgb(152, 230, 144)',
					   'rgb(255, 253, 150)',
					   'rgb(255, 180, 71)',
					   'rgb(224, 254, 254)'
					   
					   
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)'
		                
		              
		            ],
		            borderWidth: 1
		        }]
		    }
			
		});
	</script>	
	
	

	
	

	<!--By School year-->
	<script type="text/javascript">		
		var ctx = document.getElementById('count_school_year').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT Count(school_year.school_year) as Total_Students, school_year.school_year as feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY school_year.school_year ORDER BY COUNT(feeder_total_students) DESC LIMIT 1
";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['feeder_address']; 
$top_school_count_1=(int)$row_top_1['Total_Students']; 

}

$sql_top_2="SELECT Count(school_year.school_year) as Total_Students, school_year.school_year as feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY school_year.school_year ORDER BY COUNT(feeder_total_students) DESC LIMIT 2";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['feeder_address']; 
$top_school_count_2=(int)$row_top_2['Total_Students']; 

}

$sql_top_3="SELECT Count(school_year.school_year) as Total_Students, school_year.school_year as feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY school_year.school_year ORDER BY COUNT(feeder_total_students) DESC LIMIT 3";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['feeder_address']; 
$top_school_count_3=(int)$row_top_3['Total_Students']; 

}

$sql_top_4="SELECT Count(school_year.school_year) as Total_Students, school_year.school_year as feeder_address FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1516-F%' GROUP BY school_year.school_year ORDER BY COUNT(feeder_total_students) DESC LIMIT 4";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['feeder_address']; 
$top_school_count_4=(int)$row_top_4['Total_Students']; 

}







            $data_top = array($top_school_count_1,$top_school_count_2,$top_school_count_3,$top_school_count_4);
            $label = array($top_school_name_1,$top_school_name_2,$top_school_name_3,$top_school_name_4);
		
            $js_data_top = json_encode($data_top);
            $js_label_top = json_encode($label);
			
            echo "var number = ".    $js_data_top. ";\n";
            echo "var label = ". $js_label_top  . ";\n";
           
?>


	
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 105, 97)',
					   'rgb(224, 187, 228)',
					   'rgb(152, 230, 144)'
					  
					   
					   
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)',
		                'rgba(0, 0, 0, 0.5)'
		                
		              
		            ],
		            borderWidth: 1
		        }]
		    }
			
		});
	</script>	
	
	

	
	

