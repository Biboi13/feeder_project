<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
    
	
	
	
	
    <div class="row">
        <div class="col-sm-12">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
             <thead>
                                    <tr>
                                       <th data-toggle="true" class="text-center">ID</th>
                                       <th data-hide="phone" class="text-center"> Username</th>
                                       <th class="text-center"> Password</th>
                                       <th class="text-center">Email</th>
                                      
                                       <th class="text-center">Edit</th>
                                       <th class="text-center">Remove</th>
                                    </tr>
                                 </thead>
                                    <tbody>
                                    <?php
                                       $db = new PDO('mysql:host=localhost;dbname=feeder_2', 'root', '');
                                       
                                       $stmt = $db->prepare("Select * from accounts;
                                       ");
                                       $stmt->execute();
                                       while($row=$stmt->fetch()){
                                       ?>
                                    <tr>
                                      
                                       <td class="text-center"><?php echo $row['account_id']?> </td>
                                       <td class="text-center"><?php echo $row['account_username']?> </td>
                                       <td class="text-center"><?php echo $row['account_password']?> </td>
                                       <td class="text-center"><?php echo $row['account_email']?> </td>
									   
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
					
					