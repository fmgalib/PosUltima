<div class="modal fade" id="statusUserModal<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
     <form method="post">
        <div class="modal-header bg-gradient-danger" style="color:white;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sync mg-r-10"></i> Change User Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      
      <?php  
      if ($row["user_status"] == 0) {
        echo '<p>Do You Want to Activate This User?</p>';
      }else{
        echo '<p>Do You Want to Deactivate This User?</p>';
      }
      ?>
      <input type="hidden" name="id" value="<?php echo $row['user_id']?>">
      <input type="hidden" name="status" value="<?php echo $row['user_status']?>">

      </div>
      <div class="modal-footer">
        <input  type="submit" name="statusUpdate" class="btn bg-gradient-primary" value="Change Status">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>

      <?php  

        $edit = new UserController();
        $edit -> ctrChangeStatus();

      ?>

    </form>
  </div>
</div>
</div>