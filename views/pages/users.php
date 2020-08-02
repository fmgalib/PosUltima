<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fa fa-user mr-2"></i>Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" id="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-body">

              
              <div class="row">
                <div class="col-md-12">
                  <button class="btn bg-gradient-primary" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-user-plus mr-2"></i>Add New User</button>
                </div>
              </div>

              <!-- Add User Modal -->
              <?php include "views/modals/user/addUserModal.php"; ?>
              
                  
              <div class="row mt-3">
                <div class="col-md-12">
                  <div class="table-responsive" id="showUser">
                    
                     <table id="example1" class="table table-bordered table-hover">
                    <thead style="background: #34495E; color: white;">
                    <tr>
                      <th>#SL</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Photo</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php  
                  
                    $users = UserController::ctrReadUser();
                    $count = 0;
                    foreach ($users as $key => $row) { 
                  ?>  

                    <tr>
                      <td><?php echo ++$count; ?></td>
                      <td><?php echo $row["first_name"] ?></td>
                      <td><?php echo $row["last_name"] ?></td>
                      <td><?php  
                            if($row["user_image"] == !null){
                              echo '<img src="resources/images/users/'.$row["user_image"].'" width="35px">';
                            }else{
                              echo "No Photo Added";
                            }
                          ?>  
                      </td>
                      <td><?php echo $row["user_role"] ?></td>
                      <td><?php  
                            if($row["user_status"] == 1){
                              echo '<p class="badge badge-success">Active</p>';
                            }else{
                              echo '<p class="badge badge-danger">Inactive</p>';
                            }
                          ?>  
                      </td>
                      <td>

                        <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#infoUserModal<?php echo $row['user_id'];?>"><i class="fa fa-info"></i></button>
                        
                        <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#statusUserModal<?php echo $row['user_id'];?>"><i class="fa fa-sync"></i>Status
                        </button>

                        <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#editUserModal<?php echo $row['user_id'];?>"><i class="fa fa-edit"></i>Edit
                        </button>


                        <button class="btn btn-sm btn-outline-danger deleteUser" id="<?php echo $row["user_id"] ?>" delete_img="<?php echo $row["user_image"] ?>"><i class="fa fa-trash"></i>Delete
                        </button>

                      </td>
                      </tr>

        
                      <!-- User Info Modal -->
                      <?php include "views/modals/user/infoUserModal.php" ?>
                      <!-- User Update Modal -->
                      <?php include "views/modals/user/editUserModal.php" ?><!-- User Update Modal -->
                      <?php include "views/modals/user/statusUserModal.php" ?>
                      



                  <?php } ?>
                      </tbody>
                        <tfoot>
                          <tr>
                            <th>#SL</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Photo</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </tfoot>
                      </table>
                  </div>
                </div>        
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->        

      </div><!--/. container-fluid -->
      
    </section>
    <!-- /.content


