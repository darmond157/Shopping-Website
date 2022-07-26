<?php

session_start();
if (!$_SESSION['checkLogin']) {
  header('Location: index.php');
  exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>پنل مدیریت | دسته بندی</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="plugins/font-awesome/css/font-awesome.min.css"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css" />
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css" />
    <!-- jvectormap -->
    <link
      rel="stylesheet"
      href="plugins/jvectormap/jquery-jvectormap-1.2.2.css"
    />
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css" />
    <!-- Daterange picker -->
    <link
      rel="stylesheet"
      href="plugins/daterangepicker/daterangepicker-bs3.css"
    />
    <!-- bootstrap wysihtml5 - text editor -->
    <link
      rel="stylesheet"
      href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"
    />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css" />
    <!-- template rtl version -->
    <link rel="stylesheet" href="dist/css/custom-style.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav
        class="main-header navbar navbar-expand bg-white navbar-light border-bottom"
      >
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
              <i class="fa fa-bars"></i>
            </a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-comments-o"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 ml-3 img-circle"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      مدیر ارشد
                      <span class="float-left text-sm text-danger">
                        <i class="fa fa-star"></i>
                      </span>
                    </h3>
                    <p class="text-sm">با من تماس بگیر لطفا...</p>
                    <p class="text-sm text-muted">
                      <i class="fa fa-clock-o mr-1"></i>
                      4 ساعت قبل
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle ml-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      پیمان احمدی
                      <span class="float-left text-sm text-muted">
                        <i class="fa fa-star"></i>
                      </span>
                    </h3>
                    <p class="text-sm">من پیامتو دریافت کردم</p>
                    <p class="text-sm text-muted">
                      <i class="fa fa-clock-o mr-1"></i>
                      4 ساعت قبل
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle ml-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      سارا وکیلی
                      <span class="float-left text-sm text-warning">
                        <i class="fa fa-star"></i>
                      </span>
                    </h3>
                    <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                    <p class="text-sm text-muted">
                      <i class="fa fa-clock-o mr-1"></i>
                      4 ساعت قبل
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">
                مشاهده همه پیام‌ها
              </a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
              <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-envelope ml-2"></i>
                4 پیام جدید
                <span class="float-left text-muted text-sm">3 دقیقه</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-users ml-2"></i>
                8 درخواست دوستی
                <span class="float-left text-muted text-sm">12 ساعت</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-file ml-2"></i>
                3 گزارش جدید
                <span class="float-left text-muted text-sm">2 روز</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">
                مشاهده همه نوتیفیکیشن
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="control-sidebar"
              data-slide="true"
              href="#"
            >
              <i class="fa fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.php" class="brand-link">
          <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8;"
          />
          <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr;">
          <div style="direction: rtl;">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image"></div>
              <div class="info">
                <a href="#" class="d-block">مدیر ارشد</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
              >
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="dashboard.php" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                      داشبورد
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admins.php" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                      مدیریت ادمین
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="users.php" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                      مدیریت کاربران
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="category.php" class="nav-link active">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                      مدیریت دسته بندی
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="products.php" class="nav-link">
                    <i class="nav-icon fa fa-th"></i>
                    <p>
                      مدیریت محصولات
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="transactions.php" class="nav-link">
                    <i class="nav-icon fa fa-credit-card"></i>
                    <p>
                      مدیریت تراکنش ها
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="offercodes.php" class="nav-link">
                    <i class="nav-icon fa fa-percent"></i>

                    <p>
                      مدیریت کد تخفیف
                    </p>
                  </a>
                </li>

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cogs"></i>
                    <p>
                      تنظیمات
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="twostep.php" class="nav-link">
                        <i class="fa fa-lock nav-icon"></i>
                        <p>ورود دو مرحله ای</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="captch.php" class="nav-link">
                        <i class="fa fa-puzzle-piece nav-icon"></i>
                        <p>Re-Captcha</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="emailSetting.php" class="nav-link">
                        <i class="fa fa-envelope nav-icon"></i>
                        <p>تنظیمات ایمیل</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="logs.php" class="nav-link">
                    <i class="nav-icon fa fa-search"></i>
                    <p>
                      سیستم گزارش حراست
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fa fa-power-off"></i>
                    <p>
                      خروج
                    </p>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">دسته بندی ها</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#">خانه</a></li>
                  <li class="breadcrumb-item active">داشبورد ورژن 2</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>

                    <p>تعداد محصولات</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    اطلاعات بیشتر
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>53</h3>

                    <p>تعداد تراکنش ها</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    اطلاعات بیشتر
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>44</h3>

                    <p>کاربران ثبت شده</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    اطلاعات بیشتر
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>65</h3>

                    <p>بازدید جدید</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-eye"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    اطلاعات بیشتر
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-lg-12 connectedSortable">
                <div class="row">
                  <div class="col-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">فرم دسته بندی</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">
                              نام دسته بندی
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              id="exampleInputEmail1"
                              placeholder="نام دسته بندی را وارد کنید"
                            />
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">
                            ثبت
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-6"></div>
                </div>
              </section>
              <section class="col-lg-12 connectedSortable">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title"> دسته بندی ها</h3>
        
                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">
        
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                          <tr>
                            <th>#</th>
                            <th>دسته بندی</th>
                            <th>-</th>
                   
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>مواد غذایی</td>
                            <td>
                              <a href="#" class="btn btn-danger">حذف</a>
                            </td>
                          </tr>
                 
                          </tr>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div><!-- /.row -->
              </section>
            </div>
            <!-- /.row (main row) -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>
          CopyRight &copy; 2022
          <a href="https://github.com/bardia-rk">بردیا کلانتری</a>
          .
        </strong>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
