<?php
 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=feeder_2;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $link->prepare('SELECT COUNT(feeder_total_students) as y, feeder_data.feeder_address as x FROM feeder_data GROUP BY feeder_data.feeder_address  ORDER BY COUNT(feeder_total_students) DESC LIMIT 7'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row){
        array_push($dataPoints, array("y"=> $row->y, "x"=> $row->x));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}

print_r($dataPoints);

?>



<!DOCTYPE HTML>
<html>
<head>
  <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "PHP Column Chart from Database"
	},
	dataPoints: [{
		type: "column", //change type to bar, line, area, pie, etc  
		dataPoints: 
		
		 { y: 71, label: "cat 1"},
		
	}]
});
chart.render();
 
}
</script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
</body>
</html>