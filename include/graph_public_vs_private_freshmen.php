
<style>
#backButton_fm {
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
		


<?php
 
$dataPoints_private_fm = array();
try{
    include ('include\db.php');
	
    $handle_fm = $link->prepare("SELECT Count(school_year.school_year) as y, feeder_data.feeder_address as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SHS%' && feeder_data.feeder_type = 'public'GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10;"); 
    $handle_fm->execute(); 
    $result_fm = $handle_fm->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_fm as $row_fm){
        array_push($dataPoints_private_fm, array("y"=> $row_fm->y, "label"=> $row_fm->x));
    }
	$link = null;
}
catch(\PDOException $ex_fm){
    print($ex_fm->getMessage());
}

?>


<?php
 
$dataPoints_public_fm = array();
try{
    include ('include\db.php');
	
    $handle_fm = $link->prepare("SELECT Count(school_year.school_year) as y, feeder_data.feeder_address as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%F%' && feeder_data.feeder_type = 'public'GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10;"); 
    $handle_fm->execute(); 
    $result_fm = $handle_fm->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_fm as $row_fm){
        array_push($dataPoints_public_fm, array("y"=> $row_fm->y, "label"=> $row_fm->x));
    }
	$link = null;
}
catch(\PDOException $ex_fm){
    print($ex_fm->getMessage());
}

?>




<?php
 
$dataPoints_pie_fm = array();
try{
    include ('include\db.php');
	
    $handle_pie_fm = $link->prepare("SELECT Count(school_year.school_year) as y, CONCAT(feeder_data.feeder_type, ' ', 'FRESHMEN') as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%F%' GROUP BY feeder_data.feeder_type"); 
    $handle_pie_fm->execute(); 
    $result_pie_fm = $handle_pie_fm->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_pie_fm as $row_pie_fm){
        array_push($dataPoints_pie_fm, array("y"=> $row_pie_fm->y, "name"=> $row_pie_fm->x));
    }
	$link = null;
}
catch(\PDOException $ex_pie_fm){
    print($ex_pie_fm->getMessage());
}

?>


<?php
 
include('db.php');

//Public
$sql_public_fm= "SELECT COUNT(feeder_total_students) as y FROM feeder_data;";
$result_public_fm=mysqli_query($con,$sql_public_fm);
while($row_public_fm = mysqli_fetch_array($result_public_fm)) {

$count_public_fm=(int)$row_public_fm['y']; 

}


echo $count_public_fm;
?>





							
	
<script>	
window.onload = function () {




var totalVisitors = <?php echo json_encode($count_public , JSON_NUMERIC_CHECK); ?>;
var visitorsData = {
	"Public Vs Private": [{
		click: visitorsChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Public Vs Private",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "pie",
		dataPoints: <?php echo json_encode($dataPoints_pie , JSON_NUMERIC_CHECK); ?>
	}],
	"PUBLIC": [{
		color: "#C0504E",
		name: "PUBLIC",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_public , JSON_NUMERIC_CHECK); ?>
	}],
	"PRIVATE": [{
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
		text: "Public Vs Private"
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
chart.options.data = visitorsData["Public Vs Private"];
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
	chart.options.data = visitorsData["Public Vs Private"];
	chart.render();
});



var totalVisitors_fm = <?php echo json_encode($count_public , JSON_NUMERIC_CHECK); ?>;
var visitorsData_fm = {
	"Public Vs Private Freshmen": [{
		click: visitorsChartDrilldownHandler_fm,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Public Vs Private Freshmen",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "pie",
		dataPoints: <?php echo json_encode($dataPoints_pie_fm , JSON_NUMERIC_CHECK); ?>
	}],
	"PUBLIC FRESHMEN": [{
		color: "#C0504E",
		name: "PUBLIC",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_public_fm , JSON_NUMERIC_CHECK); ?>
	}],
	"PRIVATE FRESHMEN": [{
		color: "#546BC1",
		name: "Private",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_private_fm , JSON_NUMERIC_CHECK); ?>
	}]
};

var newVSReturningVisitorsOptions_fm = {
	animationEnabled: true,
	theme: "light3",
	title: {
		text: "Public Vs Private Freshmen"
	},
	legend: {
		fontFamily: "calibri",
		fontSize: 14
	
	},
	data: []
};

var visitorsDrilldownedChartOptions_fm = {
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

var chart_fm = new CanvasJS.Chart("chartContainer_fm", newVSReturningVisitorsOptions_fm);
chart_fm.options.data = visitorsData_fm["Public Vs Private Freshmen"];
chart_fm.render();

function visitorsChartDrilldownHandler_fm(e) {
	chart_fm = new CanvasJS.Chart("chartContainer_fm", visitorsDrilldownedChartOptions_fm);
	chart_fm.options.data = visitorsData_fm[e.dataPoint.name];
	chart_fm.options.title = { text: e.dataPoint.name }
	chart_fm.render();
	$("#backButton_fm").toggleClass("invisible");
}

$("#backButton_fm").click(function() { 
	$(this).toggleClass("invisible");
	chart_fm = new CanvasJS.Chart("chartContainer_fm", newVSReturningVisitorsOptions_fm);
	chart_fm.options.data = visitorsData_fm["Public Vs Private Freshmen"];
	chart_fm.render();
});

}
</script>
	
	
	
	
	
	
	
