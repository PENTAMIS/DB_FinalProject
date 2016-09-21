<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Snapask|search</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <style type="text/css">

input[type=text] {
    width: 160px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #26ADB5;
    color: white;
}
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"><img src="images/logo-white.png" width="200" height="55" alt=""/></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Customer Service</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>"This will not be shown"</h3>

                <ul class="nav side-menu">
                  <li><a href="home.php"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-wrench"></i> Function <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Add.html"> Add </a></li>
                      <li><a href="Modify.html">  Modify </a></li>
                      <li><a href="Delete.html"> Delete </a></li>
                      <li><a href="Search.php"> Search </a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>
            <div class="menu_section">

                
              </div>

            </div>
            <!-- /sidebar menu -->
            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">

                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Customer Service<span class="caret"></span></a>

                  <ul class="dropdown-menu dropdown-menu-left" >
                    <li><a href="login.html">
                    <i class="fa fa-sign-out"></i> Log Out </a></li>
                  </ul>

                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content --> 
        <div class="right_col" role="main" style="padding-bottom: 1px;">

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"> 
          <input type="text" id="filter" placeholder="Search..." class="form-control has-feedback-left" style="border-radius: 4px;">
          <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span> <br>
        </div> 
        
  <table class="footable" data-filter="#filter">
    <thead>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Asked_By</th>
        <th>Q_description</th>
        <th>Status</th>
        <th>Anwsered_By</th>
      </tr>
    </thead>
    <tbody>



<?php
mysql_query('set names "utf8"');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Snapask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
mysqli_query("set names utf8");

$sql = "SELECT * FROM CS";
$result = $conn->query($sql);

$conn->close();
?>

    <?php
      while($row1 = mysqli_fetch_array($result)):;
      ?>

      <tr>
        <td><?php echo $row1[0];?></td>
        <td><?php echo $row1[1];?></td>
        <td><?php echo $row1[2];?></td>
        <td><?php echo $row1[3];?></td>
        <td><?php echo $row1[4];?></td>
        <td><?php echo $row1[5];?></td>
      </tr> 
      <?php endwhile;?>
    </tbody>
  </table>


        <!-- /page content -->

        <!-- footer content -->
         <footer>
          <div class="pull-right">
            ©2016  <a href="https://snapask.co/">Snapask</a> All Rights Reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/flot/jquery.flot.orderBars.js"></script>
    <script src="js/flot/date.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/footable.js"></script>
    <script src="js/footable.filter.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.footable').footable();
      });
    </script>

  </body>
 
</html>