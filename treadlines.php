<html>
 <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:["corechart"]});
     google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Diameter', 'Age'],
    [8, 37], [4, 19.5], [11, 52], [4, 22], [3, 16.5], [6.5, 32.8], [14, 72]]);

  var options = {
    title: 'Age of sugar maples vs. trunk diameter, in inches',
    hAxis: {title: 'Diameter'},
    vAxis: {title: 'Age'},
    legend: 'none',
    trendlines: { 0: {} }    // Draw a trendline for data series 0.
  };

  var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
   </script>
 </head>
 <body>
  <div id='chart_div' style='width: 900px; height: 500px;'></div>
 </body>
</html>