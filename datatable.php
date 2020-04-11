<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
    
	
	
	
	
    <div class="row">
        <div class="col-sm-12">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
             <thead>
                                    <tr>
                                       <th data-toggle="true" class="text-center">School Year</th>
                                       <th data-hide="phone" class="text-center"> High School</th>
                                       <th class="text-center"> Address</th>
                                       <th class="text-center">Total Count Students</th>
                                       <th class="text-center">School Type</th>
                                       <th class="text-center">Edit</th>
                                       <th class="text-center">Remove</th>
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
									   
										 <td><button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
										<td><button type="button" data-toggle="modal" data-target="#delete" data-uid="2" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
		       
										</td>
                                    </tr>
                                    <?php
                                       }
                                       
                                       ?>
                                 </tbody>
                                
                            </table>
							</div>
							</div>
							</div>
					
					