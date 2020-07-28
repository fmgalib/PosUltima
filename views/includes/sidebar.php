<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #4b0089">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link" style="background: #4b0089">
      <img src="resources/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">POS Ultima</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

    <?php  

      if (isset($_GET["route"])) {

        if ($_GET["route"] == "dashboard") {
          $dashboard = "active";
        }elseif ($_GET["route"] == "users") {
          $users = "active";
        }elseif ($_GET["route"] == "categories") {
          $categories = "active";
        }elseif ($_GET["route"] == "brands") {
          $brands = "active";
        }elseif ($_GET["route"] == "products") {
          $products = "active";
        }elseif ($_GET["route"] == "clients") {
          $clients = "active";
        }elseif ($_GET["route"] == "manage-sales") {
          $sales = "active";
        }elseif ($_GET["route"] == "sales-report") {
          $sales = "active";
        }
      }else{
        $dashboard = "active";
      }  
      ?>
  

          <li class="nav-item">
            <a href="dashboard" class="nav-link <?php echo $dashboard; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="users" class="nav-link <?php echo $users; ?>">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Manage Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="categories" class="nav-link <?php echo $categories; ?>">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Manage Categories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="products" class="nav-link <?php echo $products; ?>">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Manage Products
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="clients" class="nav-link <?php echo $clients; ?>">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Manage Clients
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link <?php echo $sales; ?>">
              <i class="nav-icon fa fa-money-check-alt"></i>
              <p>
                Sales
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="manage-sales" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sales-report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Sales Report
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>