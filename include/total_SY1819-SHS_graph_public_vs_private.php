
<style>
#backButton {
	border-radius: 4px;
	padding: 8px;
	border: none;
	font-size: 16px;
	background-color: #2eacd1;
	color: white;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
  }
  .invisible {
    display: none;
  }
</style>
		

<!--Total-->
<?php
 
$dataPoints_private = array();
try{
    include ('include\db.php');
	
    $handle = $link->prepare("SELECT Count(school_year.school_year) as y, feeder_data.feeder_address as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1819-SHS%' && feeder_data.feeder_type = 'private' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10;"); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row){
        array_push($dataPoints_private, array("y"=> $row->y, "label"=> $row->x));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}

?>


<?php
 
$dataPoints_public = array();
try{
    include ('include\db.php');
	
    $handle = $link->prepare("SELECT Count(school_year.school_year) as y, feeder_data.feeder_address as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1819-SHS%' && feeder_data.feeder_type = 'private' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10;"); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row){
        array_push($dataPoints_public, array("y"=> $row->y, "label"=> $row->x));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}

?>




<?php
 
$dataPoints_pie = array();
try{
    include ('include\db.php');
	
    $handle_pie = $link->prepare("SELECT Count(school_year.school_year) as y, UPPER(CONCAT(feeder_data.feeder_type, ' ', 'SY1819-SHS')) as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SY1819-SHS%' GROUP BY feeder_data.feeder_type"); 
    $handle_pie->execute(); 
    $result_pie = $handle_pie->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_pie as $row_pie){
        array_push($dataPoints_pie, array("y"=> $row_pie->y, "name"=> $row_pie->x));
    }
	$link = null;
}
catch(\PDOException $ex_pie){
    print($ex_pie->getMessage());
}

?>


<?php
 
include('db.php');

//Public
$sql_public= "SELECT COUNT(feeder_total_students) as y FROM feeder_data;";
$result_public=mysqli_query($con,$sql_public);
while($row_public = mysqli_fetch_array($result_public)) {

$count_public=(int)$row_public['y']; 

}


echo $count_public;
?>
<!--/Total-->



<!--/Senior High School-->
				
	
<script>	
window.onload = function () {

var totalVisitors = <?php echo json_encode($count_public , JSON_NUMERIC_CHECK); ?>;
var visitorsData = {
	"Public Vs Private SY1819-SHS": [{
		
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Public Vs Private SY1819-SHS",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		dataPoints: <?php echo json_encode($dataPoints_pie , JSON_NUMERIC_CHECK); ?>
	}],
	"PUBLIC SY1819-SHS": [{
		color: "#C0504E",
		name: "PUBLIC",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_public , JSON_NUMERIC_CHECK); ?>
	}],
	"PRIVATE SY1819-SHS": [{
		color: "#546BC1",
		name: "Private",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_private , JSON_NUMERIC_CHECK); ?>
	}]
};

var newVSReturningVisitorsOptions = {
	animationEnabled: true,
	theme: "light3",
	title: {
		text: "Public Vs Private SY1819-SHS"
	},
	legend: {
		fontFamily: "calibri",
		fontSize: 14
	
	},
	data: []
};

var visitorsDrilldownedChartOptions = {
	animationEnabled: true,
	theme: "light2",
	axisX: {
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2"
	},
	axisY: {
		gridThickness: 0,
		includeZero: false,
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2",
		lineThickness: 1
	},
	data: []
};

var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
chart.options.data = visitorsData["Public Vs Private SY1819-SHS"];
chart.render();

function visitorsChartDrilldownHandler(e) {
	chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
	chart.options.data = visitorsData[e.dataPoint.name];
	chart.options.title = { text: e.dataPoint.name }
	chart.render();
	$("#backButton").toggleClass("invisible");
}

$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
	chart.options.data = visitorsData["Public Vs Private SY1819-SHS"];
	chart.render();
});





}
</script>
	
	
	
	
	
	
	
