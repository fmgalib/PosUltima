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
      if ($request == ok) {
        echo '<script src="resources/plugins/sweetalert2/sweetalert2.all.min.js"></script>

              <script> 
                      Swal.fire({
                        text: "New User Added!",
                        icon: "success",
                        confirmButtonText: "OK",
                        showCancelButton: true,
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

  
  
}

