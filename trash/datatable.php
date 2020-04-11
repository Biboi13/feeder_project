<!DOCTYPE html>   
<html lang="en">   
<head>   
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>  
<body style="margin:20px auto">  
<div class="container">
<div class="row header" style="text-align:center;color:green">
<h3>Bootstrap</h3>
</div>

<body>


<table id="myTable">  
        <thead>
                                    <tr>
                                       <th data-toggle="true" class="text-center">School Year</th>
                                       <th data-hide="phone" class="text-center"> High School</th>
                                       <th class="text-center"> Address</th>
                                       <th class="text-center">Total Count Students</th>
                                       <th class="text-center">School Type</th>
                                    </tr>
                                 </thead>
          <tbody>
                                    <?php
                                       $db = new PDO('mysql:host=localhost;dbname=feeder_2', 'root', '');
                                       
                                       $stmt = $db->prepare("SELECT school_year.school_year, feeder_data.feeder_hs, feeder_data.feeder_address, feeder_data.feeder_total_students, feeder_data.feeder_type
                                       FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year;
                                       
                                       ");
                                       $stmt->execute();
                                       while($row=$stmt->fetch()){
                                       ?>
                                    <tr>
                                       <td><?php echo $row['school_year']?> </td>
                                       <td ><?php echo $row['feeder_hs']?> </td>
                                       <td class="text-center"><?php echo $row['feeder_address']?> </td>
                                       <td class="text-center"><?php echo $row['feeder_total_students']?> </td>
                                       <td class="text-center"><?php echo $row['feeder_type']?> </td>
                                    </tr>
                                    <?php
                                       }
                                       
                                       ?>
                                 </tbody>
      </table>  
      </table>  
</body>


<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html> 