
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    #chart-container {
    width: 51%;
    margin-left:18px;
    border: 2px solid #579BB1;
    border-radius:6px;
    background-color:#EEEEEE;
}
/* .small-box {
  height: 240px;
} */
/* .small-box .inner {
  position: relative;
}

.small-box-footer {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
} */



  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YortClub</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark" style="background-color:red;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Log2_admin_home.php" class="nav-link"><i class="fas fa-home"></i></a>
      </li>
    </ul>

   
  


  <!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <!-- Navbar User Dropdown -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-alt"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="...//index.php">Logout</a>
      
    </div>
  </li>
</ul>
</nav>




  <!-- /.navbar -->

  <!-- Main Sidebar Container --> 
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:red;">
    <!-- Brand Logo -->
    <a href="Log2_admin_home.php" class="brand-link" style="text-align:center;">
      
      <img src="../IMAGE/logo.jpg" alt="main-sidebar"  style="border-radius: 60%; width: 65px; height: 50px; object-fit: cover;">

      <span class="brand-text font-weight-bold"> ADMIN </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color:red;">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image" >
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image" >
        </div>
        <div class="info">
          <a href="#" class="d-block font-weight-bold" >SUPER ADMIN</a>
        </div>
      </div> -->











      <!-- Sidebar Menu -->
      <nav class="mt-2" style="font-size:15px;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <a href="log2_admin_home.php" class="nav-link active" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
               


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user-circle fa-2x"></i>

              <p>
                USER MANAGEMENT
                <i class="fas fa-angle-left right"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="List.php" class="nav-link">
                  <p>Member List</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link"> 
                  <p>Top Players</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="Reports.php" class="nav-link">
                  <p>Reports</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                EQUIPMENTS 
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Available Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="log2_Tracking.php" class="nav-link">
                  <p>Rockest & Balls </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <p>Reports</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                COACHES
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>List of coaches</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="DT_Reports.php" class="nav-link">
                  <p>Training</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                RESERVATION
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Reserved List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Planning</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="auditprogress.php" class="nav-link">
                  <p> Progress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Reports</p>
                </a>
              </li>
            </ul>
            </a>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
               ANNOUNCEMENT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ProductSupplier.php" class="nav-link">
                  <p>Create Announcement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>List of Feedbacks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Report</p>
                </a>
              </li>
            </ul>
          

      </nav>
      <!-- /.sidebar-menu -->
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
            <!-- <h1 class="m-0">Dashboard</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
                <p>Players</p>
                <h3>80 <sup style="font-size: 20px">%</sup></h3>
                   
              </div>
              <div class="icon">
              <i class="fas fa-user-circle fa-3x"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>  
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success"> 
              <div class="inner">
                <p>Table status</p>
                <h3>53<sup style="font-size: 20px">%</sup></h3>
              </div>
              <div class="icon">
              <i class="fas fa-table fa-3x"></i>

              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Coaches</p>
                <h3>10<sup style="font-size: 20px">% active</sup></h3>

              </div>
              <div class="icon">
              <i class="fas fa-user-circle fa-3x"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>Reservation</p>
                <h3>13<sup style="font-size: 20px">% reserve</sup></h3>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>



<div id="chart-container">
    <canvas id="bar-chart"></canvas>
</div>
<?php include ('includes/footer.php'); ?>

<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a> ELYSIAN SUITE</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer> -->


























    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!--chart using Chart.js by initializing a new chart object and passing in the data and options for the chart.-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>



<script>
var ctx = document.getElementById("bar-chart").getContext("2d");
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January 2023", "February 2023", "March 2023", "April 2023", "May 2023", "June 2023", "July 2023","August 2023","September 2023","October 2023","November 2023","December 2023"],
        datasets: [{
            label: '# of Members',
            data: [25, 19, 15, 0, 0, 0, 0,0,0,0,0,0],
            backgroundColor: [
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                '#009EFF',
                
            ],
            borderColor: [
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                '#332FD0',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
      title: {
            display: true,
            text: "Members  Graph"
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

//update the yaer if it is new year 
function updateYear(year) {
  myBarChart.data.labels = ["January " + year, "February " + year, "March " + year, "April " + year, "May " + year, "June " + year, "July " + year,"August " + year,"September " + year,"October " + year,"November " + year,"December " + year];
  myBarChart.update();
}
//<!--Update the data in deliver graph-->
// myBarChart.data.datasets[0].data = [newData];
myBarChart.update();






</script>



</body>
</html>
