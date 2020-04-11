
	
	<!--Public vs Private-->
	<script type="text/javascript">		
		var ctx = document.getElementById('public_vs_private_total').getContext('2d');

<!--Public vs Private Total-->     
<?php
include 'include/db.php';	
		
	
//Private
$sql_private= "SELECT Count(feeder_data.feeder_type) AS private, 'PRIVATE' as label FROM feeder_data WHERE (((feeder_data.feeder_type)='Private'));";
$result_private=mysqli_query($con,$sql_private);
while($row_private = mysqli_fetch_array($result_private)) {

$count_private=(int)$row_private['private']; 
$count_private_school=$row_private['label']; 

}

		
			
//Public
$sql_public= "SELECT Count(feeder_data.feeder_type) AS public, 'PUBLIC' as label FROM feeder_data WHERE (((feeder_data.feeder_type)='Public'));";
$result_public=mysqli_query($con,$sql_public);
while($row_public = mysqli_fetch_array($result_public)) {

$count_public=(int)$row_public['public']; 
$count_public_school=$row_public['label']; 
}


            $data = array($count_private,$count_public);
            $label = array($count_public_school,$count_private_school);
		
            $js_data = json_encode($data);
            $js_label = json_encode($label);
			
            echo "var number = ". $js_data . ";\n";
            echo "var label = ". $js_label . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'column',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 51, 51)'
					   
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)'
		              
		            ],
		            borderWidth: 1
		        }]
		    }
		});
	</script>	
	


<!--Public vs Private Freshman -->
	<script type="text/javascript">		
		var ctx = document.getElementById('public_vs_private2').getContext('2d');

<!--Public vs Private Total-->     
<?php
include 'include/db.php';	
		
	
//Public
$sql_private= "SELECT Count(school_year.school_year) as Count, feeder_data.feeder_type as Type FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%F%' && feeder_data.feeder_type = 'public';";
$result_private=mysqli_query($con,$sql_private);
while($row_private = mysqli_fetch_array($result_private)) {

$count_private=(int)$row_private['Count']; 
$count_private_school=$row_private['Type']; 

}

		
			
//Private
$sql_public= "SELECT Count(school_year.school_year) as Count, feeder_data.feeder_type as Type FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%F%' && feeder_data.feeder_type = 'private';";
$result_public=mysqli_query($con,$sql_public);
while($row_public = mysqli_fetch_array($result_public)) {

$count_public=(int)$row_public['Count']; 
$count_public_school=$row_public['Type']; 
}


            $data = array($count_private,$count_public);
            $label = array($count_public_school,$count_private_school);
		
            $js_data = json_encode($data);
            $js_label = json_encode($label);
			
            echo "var number = ". $js_data . ";\n";
            echo "var label = ". $js_label . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 51, 51)'
					   
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)'
		              
		            ],
		            borderWidth: 1
		        }]
		    }
		});
	</script>	
	
		
<!--Public vs Private Freshman -->
	<script type="text/javascript">		
		var ctx = document.getElementById('public_vs_private3').getContext('2d');

<!--Public vs Private Total-->     
<?php
include 'include/db.php';	
		
	
//Public
$sql_private= "SELECT Count(school_year.school_year) as Count, feeder_data.feeder_type as Type FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SHS%' && feeder_data.feeder_type = 'public';";
$result_private=mysqli_query($con,$sql_private);
while($row_private = mysqli_fetch_array($result_private)) {

$count_private=(int)$row_private['Count']; 
$count_private_school=$row_private['Type']; 

}

		
			
//Private
$sql_public= "SELECT Count(school_year.school_year) as Count, feeder_data.feeder_type as Type FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SHS%' && feeder_data.feeder_type = 'private';";
$result_public=mysqli_query($con,$sql_public);
while($row_public = mysqli_fetch_array($result_public)) {

$count_public=(int)$row_public['Count']; 
$count_public_school=$row_public['Type']; 
}


            $data = array($count_private,$count_public);
            $label = array($count_public_school,$count_private_school);
		
            $js_data = json_encode($data);
            $js_label = json_encode($label);
			
            echo "var number = ". $js_data . ";\n";
            echo "var label = ". $js_label . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'column',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 51, 51)'
					   
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)'
		              
		            ],
		            borderWidth: 1
		        }]
		    }
		});
	</script>	
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!--Bar graph TOP 6 School Enrolee-->


	
	<!--Edit me graph-->
	<script type="text/javascript">		
		var ctx = document.getElementById('top_schools').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
			Order by feeder_total_students DESC LIMIT 1";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['school_name']; 
$top_school_count_1=(int)$row_top_1['student_count']; 

}

$sql_top_2="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
			Order by feeder_total_students DESC LIMIT 2";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['school_name']; 
$top_school_count_2=(int)$row_top_2['student_count']; 

}

$sql_top_3="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
			Order by feeder_total_students DESC LIMIT 3";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['school_name']; 
$top_school_count_3=(int)$row_top_3['student_count']; 

}

$sql_top_4="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
			Order by feeder_total_students DESC LIMIT 4";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['school_name']; 
$top_school_count_4=(int)$row_top_4['student_count']; 

}

$sql_top_5="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
			Order by feeder_total_students DESC LIMIT 5";
$result_top_5 = mysqli_query($con,$sql_top_5);
while($row_top_5 = mysqli_fetch_array($result_top_5)) {

$top_school_name_5=$row_top_5['school_name']; 
$top_school_count_5=(int)$row_top_5['student_count']; 

}


$sql_top_6="SELECT DISTINCT (feeder_data.feeder_hs) AS school_name, feeder_data.feeder_total_students as student_count
			FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year
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
		    type: 'pie',
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
		var ctx = document.getElementById('count_school_year').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1516_F' as School_year
FROM feeder_data
WHERE (((feeder_data.feeder_school_year)=1));
";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['School_year']; 
$top_school_count_1=(int)$row_top_1['School_year_count']; 

}

$sql_top_2="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1617-SHS' as School_year
			FROM feeder_data
			WHERE (((feeder_data.feeder_school_year)=2));";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['School_year']; 
$top_school_count_2=(int)$row_top_2['School_year_count']; 

}

$sql_top_3="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1718-SHS' as School_year
			FROM feeder_data
			WHERE (((feeder_data.feeder_school_year)=3));";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['School_year']; 
$top_school_count_3=(int)$row_top_3['School_year_count']; 

}

$sql_top_4="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1819-F' as School_year
			FROM feeder_data
			WHERE (((feeder_data.feeder_school_year)=4));";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['School_year']; 
$top_school_count_4=(int)$row_top_4['School_year_count']; 

}

$sql_top_5="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1819-SHS' as School_year
			FROM feeder_data
			WHERE (((feeder_data.feeder_school_year)=5));";
$result_top_5 = mysqli_query($con,$sql_top_5);
while($row_top_5 = mysqli_fetch_array($result_top_5)) {

$top_school_name_5=$row_top_5['School_year']; 
$top_school_count_5=(int)$row_top_5['School_year_count']; 

}


$sql_top_6="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1920-SHS' as School_year
			FROM feeder_data
			WHERE (((feeder_data.feeder_school_year)=6));";
$result_top_6 = mysqli_query($con,$sql_top_6);
while($row_top_6 = mysqli_fetch_array($result_top_6)) {

$top_school_name_6=$row_top_6['School_year']; 
$top_school_count_6=(int)$row_top_6['School_year_count']; 

}

$sql_top_7="SELECT Count(feeder_data.feeder_school_year) AS School_year_count, 'SY1920-F' as School_year
			FROM feeder_data
			WHERE (((feeder_data.feeder_school_year)=7));";
$result_top_7 = mysqli_query($con,$sql_top_7);
while($row_top_7 = mysqli_fetch_array($result_top_7)) {

$top_school_name_7=$row_top_7['School_year']; 
$top_school_count_7=(int)$row_top_7['School_year_count']; 

}


            $data_top = array($top_school_count_1,$top_school_count_2,$top_school_count_3,$top_school_count_4,$top_school_count_5,$top_school_count_6,$top_school_count_7);
            $label = array($top_school_name_1,$top_school_name_2,$top_school_name_3,$top_school_name_4,$top_school_name_5,$top_school_name_6,$top_school_name_7);
		
            $js_data_top = json_encode($data_top);
            $js_label_top = json_encode($label);
			
            echo "var number = ".    $js_data_top. ";\n";
            echo "var label = ". $js_label_top  . ";\n";
           
?>


	
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(255, 105, 97)'
					 
					   
					   
		            ],
		          
		            borderWidth: 1
		        }]
		    }
		});
	</script>	
	
	
	<!--By School year-->
	<script type="text/javascript">		
		var ctx = document.getElementById('count_places').getContext('2d');

       

<?php
		
	

$sql_top_1="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 1
";
$result_top_1 = mysqli_query($con,$sql_top_1);
while($row_top_1 = mysqli_fetch_array($result_top_1)) {

$top_school_name_1=$row_top_1['feeder_address']; 
$top_school_count_1=(int)$row_top_1['Total_Students']; 

}

$sql_top_2="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 2";
$result_top_2 = mysqli_query($con,$sql_top_2);
while($row_top_2 = mysqli_fetch_array($result_top_2)) {

$top_school_name_2=$row_top_2['feeder_address']; 
$top_school_count_2=(int)$row_top_2['Total_Students']; 

}

$sql_top_3="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 3";
$result_top_3 = mysqli_query($con,$sql_top_3);
while($row_top_3 = mysqli_fetch_array($result_top_3)) {

$top_school_name_3=$row_top_3['feeder_address']; 
$top_school_count_3=(int)$row_top_3['Total_Students']; 

}

$sql_top_4="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 4";
$result_top_4 = mysqli_query($con,$sql_top_4);
while($row_top_4 = mysqli_fetch_array($result_top_4)) {

$top_school_name_4=$row_top_4['feeder_address']; 
$top_school_count_4=(int)$row_top_4['Total_Students']; 

}

$sql_top_5="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 5";
$result_top_5 = mysqli_query($con,$sql_top_5);
while($row_top_5 = mysqli_fetch_array($result_top_5)) {

$top_school_name_5=$row_top_5['feeder_address']; 
$top_school_count_5=(int)$row_top_5['Total_Students']; 

}


$sql_top_6="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 6";
$result_top_6 = mysqli_query($con,$sql_top_6);
while($row_top_6 = mysqli_fetch_array($result_top_6)) {

$top_school_name_6=$row_top_6['feeder_address']; 
$top_school_count_6=(int)$row_top_6['Total_Students']; 

}

$sql_top_7="SELECT COUNT(feeder_total_students) as Total_Students, feeder_data.feeder_address FROM feeder_data GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 7";
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
	
	

	
	

