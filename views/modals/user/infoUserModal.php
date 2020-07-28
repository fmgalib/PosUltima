<div class="modal fade" id="infoUserModal<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content"> 
    <div class="modal-header bg-gradient-info" style="color:white;">
      <p class="modal-title" id="exampleModalLabel"><i class="fa fa-user mg-r-10"></i> User Information</p>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    
    <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">User Id</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['user_id'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">User Photo</p>
            </div>
            <div class="col-sm-6">
              <?php  
                if($row["user_image"] == !null){
                  echo '<img src="resources/images/users/'.$row["user_image"].'" width="50px">';
                }else{
                  echo "No Photo Added";
                }
              ?>  
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">First Name</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['first_name'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Last Name</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['last_name'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Email</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['user_email'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Phone</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['user_phone'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Role</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['user_role'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Status</p>
            </div>
            <div class="col-sm-6">
              <?php  
                if($row["user_status"] == 1){
                  echo '<p>Active</p>';
                }else{
                  echo '<p>Inactive</p>';
                }
              ?>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Last Login</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['last_login'];?></p>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <p class="text-bold">Registration Date</p>
            </div>
            <div class="col-sm-6">
              <p><?php echo $row['reg_date'];?></p>
            </div>
          </div>

        </div>
    </div>
  </div>
</div>
</div>