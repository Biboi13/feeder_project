<!-- Modal Add -->
<div class="modal fade" id="exampleModal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add an Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <div class="modal-body">
            <div class="card-body">
            <div class="form">
         

            <form name="registration" action="modal.php" method="POST">
            

            <select name="account_type" " class="form-control">
                    <option>Admin</option>
                     <option>Staff</option>
            </select>
            <br>
                <input type="text" name="username" placeholder="Username" class="form-control" required />
                <br>
                <input type="email" name="email" placeholder="Email" class="form-control"  />
                <br>
               
                <input  type="password" name="password" placeholder="Password" class="form-control"  required />
                
                <br>

                <input  type="password" name="confirm_password" placeholder="Confirm Password" class="form-control"  required />
                
                <br>
                <br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  type="submit" name="submit" value="Register" class="btn btn-success">Add</button>
                    <?php include "crud_add_account.php";?>
                </form>
                </div>                
             </div> 
            </div>


        </div>
    </div>
</div>


<!-- Modal Edit -->
<div class="modal fade" id="exampleModal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="card-body">
            <div class="form">
         

            <form name="registration" action="modal.php" method="POST">
            
            <br>
                <input type="text" name="username" placeholder="Username" class="form-control" required />
                <br>
                <input type="email" name="email" placeholder="Email" class="form-control"  />
                <br>
               
                <input  type="password" name="password" placeholder="Password" class="form-control"  required />
                
                <br>

                <input  type="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control"  required />
                
                <br>
                <br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  type="submit" name="submit" value="Register"  class="btn btn-warning">Save Changes</button>
                    <?php include "crud_update_account.php";?>
                </form>
                </div>                
             </div> 
            </div>
           
            
            
        </div>
    </div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="exampleModal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <p class="mb-0">Delete #Account</p>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>