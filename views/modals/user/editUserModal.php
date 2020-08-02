<div class="modal fade" id="editUserModal<?php echo $row['user_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

    <form method="post" enctype="multipart/form-data">
        <div class="modal-header bg-gradient-primary" style="color:white;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-edit mg-r-10"></i> Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
        <input type="hidden" name="id" value="<?php echo $row['user_id']?>">
        <!-- Delete Image -->
        <input type="hidden" name="delete_img" value="<?php echo $row['user_image'] ?>">

        <!-- Firstname Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" value="<?php echo $row['first_name']?>" name="e_first_name"  placeholder="First Name" required>
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
              <input type="text" class="form-control input-lg" value="<?php echo $row['last_name']?>" name="e_last_name" placeholder="Last Name" required>
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
              <input type="email" class="form-control input-lg" value="<?php echo $row['user_email']?>" name="e_email"  placeholder="Email" required>
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
              <input type="text" class="form-control input-lg" value="<?php echo $row['user_password']?>" name="e_password"  placeholder="Password" required>
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
              <input type="text" class="form-control input-lg" value="<?php echo $row['user_phone']?>" name="e_phone" placeholder="Phone No">
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
              <select class="form-control" name="e_role" required>
                <?php  
                  if ($row['user_role'] == "Admin") {
                    echo '<option value="Admin">Admin</option>
                          <option value="Manager">Manager</option>
                          <option value="Seller">Seller</option>';
                    
                  }elseif($row['user_role'] == "Manager"){
                    echo '<option value="Manager">Manager</option>
                          <option value="Admin">Admin</option>    
                          <option value="Seller">Seller</option>';
                  }elseif($row['user_role'] == "Seller"){
                    echo '<option value="Seller">Seller</option>
                          <option value="Manager">Manager</option>
                          <option value="Admin">Admin</option>';
                  }
                ?>
                
              </select>
            </div>
          </div>
        </div>



        <!-- Image Input -->
        <div class="box-body">
          <div class="form-group">
            <div class="panel">User Image</div>
            <input type="file" name="e_image" >

          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <input  type="submit" name="updateUser" class="btn bg-gradient-primary" value="Update">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>

      <?php  
        $edit = new UserController();
        $edit -> ctrUpdateUser();

      ?>

    </form>
    </div>
    
  </div>
</div>