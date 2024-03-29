<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <!-- css link -->
  <link rel="stylesheet" href="../../../public/admin/dist/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- boostrap link -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../public/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../public/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../public/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../public/admin/plugins/summernote/summernote-bs4.min.css">
  <!-- Favicon icon -->
  <link rel="icon" type="../../../public/admin/dist/img/logo2.png" sizes="16x16" href="../../../public/admin/dist/img/logo2.png">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?url=conturl" class="nav-link">Contacxt</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../../../public/image/admin.png" alt="admin logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Trang chủ Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <a href="../.../../../../index.php">
            <div class="image">
              <img src="../../../public/image/back.jpg" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
            </div>
          </a>
          <div class="info">
            <a href="../.../../../../index.php" class="d-block">Về trang khách hàng</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Quản lý đơn hàng
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=qlkhdadangky" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đơn hàng mới</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=qlkhdadangky" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đơn hàng đang chờ lấy</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=qlkhdadangky" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đơn hàng đang giao</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=qlkhdadangky" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hàng đã đến điểm giao</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=qlkhdadangky" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đã nhận được hàng</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Danh mục
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=list-category" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=form-add-category" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm danh mục</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Sản phẩm
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=list-product" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=form-add-product" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm sản phẩm</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Thương hiệu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=list-brand" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=form-add-brand" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm thương hiệu</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Style phòng
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=listsr" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=addsr" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm style</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Phương thức thanh toán
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=allltkh&table=lo_trinh_khoa_hoc" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=addltkh" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Tài khoản
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=taikhoanqtv" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách tài khoản QTV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=taikhoankh" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách tài khoản KH</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Bài viết
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=listpost" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=addpost" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm bài viết</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Đánh giá
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Voucher
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=allkhuyenmai&table=khuyen_mai" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voucher đang hoạt động</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=addkhuyenmai" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm voucher </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Role
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=allrole&table=role" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=addrole" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm role</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="index.php?url=listnb" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Navbar
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Content footer
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?url=listctft" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?url=addctft" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm content</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="index.php?url=listft" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Footer
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=listws" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Website
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon"></i>
                <p>
                  Liên hệ
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
      <div class="ctncontent">