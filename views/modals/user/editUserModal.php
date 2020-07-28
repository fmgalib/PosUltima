<div class="modal fade" id="editUserModal<?php echo $row['user_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

    <form method="post" enctype="multipart/form-data" id="formInsert">
        <div class="modal-header bg-gradient-primary" style="color:white;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-edit mg-r-10"></i> Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
        <!-- Firstname Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" name="first_name" id="first_name" placeholder="First Name" required>
            </div>
          </div>
        </div>

        <!-- Lastname Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" name="e_last_name" id="e_last_name" placeholder="Last Name" required>
            </div>
          </div>
        </div>

        <!-- Email Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="email" class="form-control input-lg" name="e_email" id="e_email" placeholder="Email" required>
            </div>
          </div>
        </div>

        <!-- Password Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
              </div>
              <input type="password" class="form-control input-lg" name="e_password" id="e_password" placeholder="Password" required>
            </div>
          </div>
        </div>

        <!-- Phone Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" name="e_phone" id="e_phone" placeholder="Phone No">
            </div>
          </div>
        </div>

        <!-- Role Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-users"></i></span>
              </div>
              <select class="form-control" name="e_role" id="e_role" required>
                <option value="">Select Role</option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="Seller">Seller</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Image Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="panel">User Image</div>
            <input type="file" name="e_image">

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <input  type="submit" name="updateUser" id="updateUser" class="btn bg-gradient-primary" value="Update">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      
      

    </form>
    </div>
    
  </div>
</div>