<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
    
	
	
	
	
    <div class="row">
    
        <div class="col-sm-12">


        <button type="button" class="btn mr-2 mb-2 update btn btn-success" data-toggle="modal" data-target="#exampleModal_Add">
                         Add Account
         </button>
                  
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
            
             <thead>
                                    <tr>
                                       <th data-toggle="true" class="text-center">ID</th>
                                       <th data-toggle="true" class="text-center">Account Type</th>
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
                                       
                                         $account_id_get = $row['account_id'];
                                         $account_type_get = $row['account_type'];
                                         $account_username_get = $row['account_username'];
                                         $account_password_get = $row['account_password'];
                                         $account_email_get = $row['account_email'];
                                       
                                       
                                       ?>
                                   
                                       <td class="text-center"><?php echo $account_id_get ?> </td>
                                       <td class="text-center"><?php echo $account_type_get?> </td>
                                       <td class="text-center"><?php echo $account_username_get?> </td>
                                       <td class="text-center"><?php echo $account_password_get ?> </td>
                                       <td class="text-center"><?php echo $account_email_get ?> </td>
                                      
									   
										 <td>
            
                               <button type="button" class="btn mr-2 mb-2 update btn btn-warning" data-toggle="modal" data-target="#exampleModal_Edit">
                               Edit
                                </button>
                               </td>
										<td>
                          <?php
                             echo"	<a href=crud_del_account.php?acc_id=".$account_id_get." onClick=\"return confirm('Are you sure to delete the account?')\"<button class='btn btn-danger'> <i class='pe-7s-trash' ></i> Delete</button>";
                          ?>      
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
					
					