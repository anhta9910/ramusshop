<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="Assets/Backend/Layout1/img/apple-icon.png">
  <link rel="icon" type="image/png" href="Assets/Backend/Layout1/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="Assets/Backend/Layout1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Assets/Backend/Layout1/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <script type="text/javascript" src="Assets/Backend/ckeditor/ckeditor.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="Assets/Backend/Layout1/img/logo-small.png">
          </div>
        </a>
        <a href="http://www.facebook.com" class="simple-text logo-normal">
          Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php?area=Backend&controller=User">
              <i class="nc-icon nc-badge"></i>
              <p>Quản lí User</p>
            </a>
          </li>
          <li>
            <a href="index.php?area=Backend&controller=Category">
              <i class="nc-icon nc-tv-2"></i>
              <p>Quản lí danh mục</p>
            </a>
          </li>
          <li>
            <a href="index.php?area=Backend&controller=Size">
              <i class="nc-icon nc-tv-2"></i>
              <p>Size</p>
            </a>
          </li>
          <li>
            <a href="index.php?area=Backend&controller=Product">
              <i class="nc-icon nc-single-02"></i>
              <p>Quản lí sản phẩm</p>
            </a>
          </li>
          <li>
            <a href="index.php?area=Backend&controller=Order">
              <i class="nc-icon nc-single-02"></i>
              <p>Danh sách đơn hàng</p>
            </a>
          </li>
          <li>
            <a href="index.php?area=Backend&controller=Logout">
                <i class="nc-icon nc-button-power"></i> <span>Logout</span>
                        <span class="pull-right-container">
              
            </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="http://localhost/php42/Project/index.php?area=Backend">Data</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Thông tin</a>
                  <a class="dropdown-item" href="#">Quản lí tài khoản</a>
                  <a class="dropdown-item" href="#">Đăng xuất</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div style="margin-top: 100px;margin-left: 5px;"><?php echo $this->view; ?></div>
  <!--   Core JS Files   -->
  <script src="Assets/Backend/Layout1/js/core/jquery.min.js"></script>
  <script src="Assets/Backend/Layout1/js/core/popper.min.js"></script>
  <script src="Assets/Backend/Layout1/js/core/bootstrap.min.js"></script>
  <script src="Assets/Backend/Layout1/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="Assets/Backend/Layout1/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="Assets/Backend/Layout1/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="Assets/Backend/Layout1/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="Assets/Backend/Layout1/demo/demo.js"></script>
</body>

</html>
