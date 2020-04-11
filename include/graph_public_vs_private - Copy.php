
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
  
  
 #backButton_shs {
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
	
    $handle = $link->prepare('SELECT COUNT(feeder_total_students) as y, feeder_data.feeder_address as x FROM feeder_data WHERE feeder_data.feeder_type = "private" GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10'); 
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
	
    $handle = $link->prepare('SELECT COUNT(feeder_total_students) as y, feeder_data.feeder_address as x FROM feeder_data WHERE feeder_data.feeder_type = "public" GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10'); 
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
	
    $handle_pie = $link->prepare('SELECT COUNT(feeder_total_students) as y, feeder_data.feeder_type as x FROM feeder_data GROUP BY feeder_data.feeder_type'); 
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




<!--Freshmen-->

			
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

<!--/Freshmen-->



<!--Senior High School-->

			
<?php
 
$dataPoints_private_shs = array();
try{
    include ('include\db.php');
	
    $handle_shs = $link->prepare("SELECT Count(school_year.school_year) as y, feeder_data.feeder_address as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SHS%' && feeder_data.feeder_type = 'private' GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10;"); 
    $handle_shs->execute(); 
    $result_shs = $handle_shs->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_shs as $row_shs){
        array_push($dataPoints_private_shs, array("y"=> $row_shs->y, "label"=> $row_shs->x));
    }
	$link = null;
}
catch(\PDOException $ex_shs){
    print($ex_shs->getMessage());
}

?>


<?php
 
$dataPoints_public_shs = array();
try{
    include ('include\db.php');
	
    $handle_shs = $link->prepare("SELECT Count(school_year.school_year) as y, feeder_data.feeder_address as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SHS%' && feeder_data.feeder_type = 'public'GROUP BY feeder_data.feeder_address ORDER BY COUNT(feeder_total_students) DESC LIMIT 10;"); 
    $handle_shs->execute(); 
    $result_shs = $handle_shs->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_shs as $row_shs){
        array_push($dataPoints_public_shs, array("y"=> $row_shs->y, "label"=> $row_shs->x));
    }
	$link = null;
}
catch(\PDOException $ex_shs){
    print($ex_shs->getMessage());
}

?>




<?php
 
$dataPoints_pie_shs = array();
try{
    include ('include\db.php');
	
    $handle_pie_shs = $link->prepare("SELECT Count(school_year.school_year) as y, UPPER(CONCAT(feeder_data.feeder_type, ' ', 'SHS')) as x FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year Where school_year.school_year Like '%SHS%' GROUP BY feeder_data.feeder_type"); 
    $handle_pie_shs->execute(); 
    $result_pie_shs = $handle_pie_shs->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result_pie_shs as $row_pie_shs){
        array_push($dataPoints_pie_shs, array("y"=> $row_pie_shs->y, "name"=> $row_pie_shs->x));
    }
	$link = null;
}
catch(\PDOException $ex_pie_shs){
    print($ex_pie_shs->getMessage());
}

?>


<?php
 
include('db.php');

//Public
$sql_public_shs= "SELECT COUNT(feeder_total_students) as y FROM feeder_data;";
$result_public_shs=mysqli_query($con,$sql_public_shs);
while($row_public_shs = mysqli_fetch_array($result_public_shs)) {

$count_public_shs=(int)$row_public_shs['y']; 

}


echo $count_public_shs;
?>

<!--/Senior High School-->
				
	
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




var totalVisitors_shs = <?php echo json_encode($count_public , JSON_NUMERIC_CHECK); ?>;
var visitorsData_shs = {
	"Public Vs Private SHS": [{
		click: visitorsChartDrilldownHandler_shs,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Public Vs Private SHS",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "pie",
		dataPoints: <?php echo json_encode($dataPoints_pie_shs , JSON_NUMERIC_CHECK); ?>
	}],
	"PUBLIC SHS": [{
		color: "#C0504E",
		name: "PUBLIC",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_public_shs , JSON_NUMERIC_CHECK); ?>
	}],
	"PRIVATE SHS": [{
		color: "#546BC1",
		name: "Private",
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints_private_shs , JSON_NUMERIC_CHECK); ?>
	}]
};

var newVSReturningVisitorsOptions_shs = {
	animationEnabled: true,
	theme: "light3",
	title: {
		text: "Public Vs Private SHS"
	},
	legend: {
		fontFamily: "calibri",
		fontSize: 14
	
	},
	data: []
};

var visitorsDrilldownedChartOptions_shs = {
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

var chart_shs = new CanvasJS.Chart("chartContainer_shs", newVSReturningVisitorsOptions_shs);
chart_shs.options.data = visitorsData_shs["Public Vs Private SHS"];
chart_shs.render();

function visitorsChartDrilldownHandler_shs(e) {
	chart_shs = new CanvasJS.Chart("chartContainer_shs", visitorsDrilldownedChartOptions_shs);
	chart_shs.options.data = visitorsData_shs[e.dataPoint.name];
	chart_shs.options.title = { text: e.dataPoint.name }
	chart_shs.render();
	$("#backButton_shs").toggleClass("invisible");
}

$("#backButton_shs").click(function() { 
	$(this).toggleClass("invisible");
	chart_shs = new CanvasJS.Chart("chartContainer_shs", newVSReturningVisitorsOptions_shs);
	chart_shs.options.data = visitorsData_shs["Public Vs Private SHS"];
	chart_shs.render();
});

}
</script>
	
	
	
	
	
	
	
