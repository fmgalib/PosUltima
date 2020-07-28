<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

    <form method="post" enctype="multipart/form-data" id="formInsert">
        <div class="modal-header bg-gradient-primary" style="color:white;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus mg-r-10"></i> Add User</h5>
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
              <input type="text" class="form-control input-lg" name="last_name" id="last_name" placeholder="Last Name" required>
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
              <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email" required>
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
              <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required>
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
              <input type="text" class="form-control input-lg" name="phone" id="phone" placeholder="Phone No">
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
              <select class="form-control" name="role" id="role" required>
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
            <input type="file" name="image">

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <input  type="submit" name="addUser" id="addUser" class="btn bg-gradient-primary" value="Add User">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      
      <?php  
        $insert = new userController();
        $insert->ctrInsertUser();
      ?>

    </form>
    </div>
    
  </div>
</div>