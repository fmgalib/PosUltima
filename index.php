<?php  

require_once 'models/userModel.php';
require_once 'controllers/userController.php';

?>

<?php include "views/includes/header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include "views/includes/topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "views/includes/sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php 

     if (isset($_GET["route"])) {
  
      if ($_GET["route"] == "dashboard" ||
          $_GET["route"] == "users" ||
          $_GET["route"] == "categories" ||
          $_GET["route"] == "brands" ||
          $_GET["route"] == "products" ||
          $_GET["route"] == "clients" ||
          $_GET["route"] == "manage-sales" ||
          $_GET["route"] == "create-sales" ||
          $_GET["route"] == "logout" ||
          $_GET["route"] == "sales-report") {

        include "views/pages/".$_GET["route"].".php";
        
      }else{
       include "views/pages/404.php"; 
      }

    }else{
      include "views/pages/dashboard.php"; 
    }

  ?>
                     
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include "views/includes/footer.php"; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php include "views/includes/js.php"; ?>
