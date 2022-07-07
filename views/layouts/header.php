<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Danh sách sản phẩm</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="views/layouts/public/css/feather.css">
  <link rel="stylesheet" href="views/layouts/public/css/select2.css">
  <link rel="stylesheet" href="views/layouts/public/css/dropzone.css">
  <link rel="stylesheet" href="views/layouts/public/css/uppy.min.css">
  <link rel="stylesheet" href="views/layouts/public/css/jquery.steps.css">
  <link rel="stylesheet" href="views/layouts/public/css/jquery.timepicker.css">
  <link rel="stylesheet" href="views/layouts/public/css/quill.snow.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="views/layouts/public/css/app-light.css" id="lightTheme" disabled>
  <link rel="stylesheet" href="views/layouts/public/css/app-dark.css" id="darkTheme">
</head>

<body class="vertical  dark  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
      </form>
      <ul class="nav">
        <div class="dropdown">
          <a class=" dropdown-toggle text-muted pr-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="views/layouts/public/assets/avatars/face-1.jpg" style="width:40px" alt="..." class="avatar-img rounded-circle">
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
            <li><a class="dropdown-item" href="#">Cài Đặt</a></li>
            <li>
              <a class="dropdown-item" href="/login/formLogin.php">Đăng Xuất</a>
            </li>
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
            <i class="fe fe-sun fe-16"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
            <span class="fe fe-grid fe-16"></span>
          </a>
        </li>
        <li class="nav-item nav-notif">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
            <span class="fe fe-bell fe-16"></span>
            <span class="dot dot-md bg-success"></span>
          </a>
        </li>

      </ul>
    </nav>