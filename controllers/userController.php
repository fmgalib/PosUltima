<?php  

require_once 'models/userModel.php';
require_once 'models/db.php';

class UserController{


  // Insert User
  public function ctrInsertUser(){
    if (isset($_POST['addUser'])) {
      $first_name   = $_POST['first_name'];
      $last_name   = $_POST['last_name'];
      $email      = $_POST['email'];
      $password   = $_POST['password'];
      $phone      = $_POST['phone'];
      $role       = $_POST['role'];
      
      $userImage        = $_FILES['image']['name'];
      $userImage_temp   = $_FILES['image']['tmp_name']; 
      move_uploaded_file($userImage_temp, "resources/images/users/$userImage");
      $image = $userImage;

      $request = User::insert($first_name, $last_name, $email, $password, $phone, $role, $image);
      if ($request == "ok") {
        echo '<script src="resources/plugins/sweetalert2/sweetalert2.all.min.js"></script>

              <script> 
                      Swal.fire({
                        text: "New User Added!",
                        icon: "success",
                        confirmButtonText: "OK",
                        }).then((result)=>{
                            if (result) {
                              window.location = "users";
                            }
                      });
              </script>';
      }
    }
  }

  // Read User
  public function ctrReadUser(){
    $request = User::read();
    return $request;
  }

  // Read User
  public function ctrReadUserById($id){
    $request = User::getUserById($id);
    return $request;
  }

  // Update User
  public function ctrUpdateUser(){
    if (isset($_POST['updateUser'])) {
      $id         = $_POST['id'];
      $first_name = $_POST['e_first_name'];
      $last_name  = $_POST['e_last_name'];
      $email      = $_POST['e_email'];
      $password   = $_POST['e_password'];
      $phone      = $_POST['e_phone'];
      $role       = $_POST['e_role'];
      $delete_img = $_POST['delete_img'];
      unlink('resources/images/users/'.$delete_img);
      
      $userImage        = $_FILES['e_image']['name'];
      $userImage_temp   = $_FILES['e_image']['tmp_name']; 
      move_uploaded_file($userImage_temp, "resources/images/users/$userImage");
      $image = $userImage;

      $request = User::updateUser($id, $first_name, $last_name, $email, $password, $phone, $role, $image);
      if ($request == "ok") {
        echo '<script src="resources/plugins/sweetalert2/sweetalert2.all.min.js"></script>

              <script> 
                      Swal.fire({
                        text: "User Information Updated!",
                        icon: "success",
                        confirmButtonText: "OK",
                        }).then((update)=>{
                            if (update.value) {
                              window.location = "users";
                            }
                      });
              </script>';
      }
    }
  }

  // User Status Update
  public function ctrChangeStatus(){
    if (isset($_POST['statusUpdate'])) {
     if ($_POST['status'] == 0) {
       $id = $_POST['id'];
       $request = User::activateUser($id);
       if ($request == "ok") {
        echo '<script>window.location = "users";</script>';
      }
     }else{
        $id = $_POST['id'];
        $request = User::dectivateUser($id);
        if ($request == "ok") {
        echo '<script>window.location = "users";</script>';
      }
     }
    }
  }
  
}

