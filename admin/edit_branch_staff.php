

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tredos</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../assests/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://tredos.com" class="site_title"><i class="fa fa-users"></i> <span>Tredos</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2><b>John Doe</b></h2>
                <span>SuperAdmin</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a><i class="fa fa-contao"></i> Contoller <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add_branch_controller.php"><i class="fa fa-user-plus"></i> &nbsp;Add Branch Controller</a></li>
                      <li><a href="manage_branch_controller.php"><i class="fa fa-list-alt"></i> &nbsp;Manage Staffs</a></li>
                      <li><a href="branch.php"><i class="fa fa-share-alt-square"></i> &nbsp;Branch</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-share-alt"></i> Branch Staff <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add_branch_staff.php"><i class="fa fa-user-plus"></i> &nbsp;Add Branch staff</a></li>
                      <li><a href="manage_branch_staff.php"><i class="fa fa-list-alt"></i> &nbsp;Manage Staffs</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Trading Member <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="register_trading_member.php"><i class="fa fa-plus-square"></i> &nbsp;Register</a></li>
                      <li><a href="manage_trading_member.php"><i class="fa fa-th-list"></i> &nbsp;Manage</a></li>
                    </ul>
                  </li>
                  <li><a href="status_checker.php"><i class="fa fa-check-square"></i> Status Checker</a></li>
                  <li><a href="events.php"><i class="fa fa-calendar"></i> Events</a></li>
                  <li><a href="photo_gallery.php"><i class="fa fa-image"></i> Photo Galley</a></li>
                  <li><a hef="posts.php"><i class="fa fa-file"></i> Posts</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>

                <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
    <!--        <div class="page-title">
              <div class="title_left">
                <h3>Add New Courier  </small></h3>
              </div>
            </div> -->

            <div class="clearfix"></div>



            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="col-md-6 col-sm-12 col-xs-12">
                  <h5><i class="fa fa-plus-square">&nbsp;&nbsp;</i> <b>Edit Branch Staff</b></h5>
                  <div class="x_title"></div>

      <!-- Add Branch Controller Form Starts -->
                  <form name="staff-form" onsubmit="return validateForm();" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> ID *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="staffID" name="staffID" value="" class="form-control col-md-7 col-xs-12" readonly/><br/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="fullName" name="fullName" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Citizenship No *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="fullName" name="fullName" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" id="dob" name="dob" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>



                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                         <div class="row"><label class="control-label">&nbsp;&nbsp;Male</label>
                         <input type="radio" class="flat" name="gender" id="genderM" value="male" required/>
                         <label class="control-label">&nbsp;&nbsp; Female</label>
                         <input type="radio" class="flat" name="gender" id="genderF" value="female" />
                         <label class="control-label">&nbsp;&nbsp; Others</label>
                          <input type="radio" class="flat" name="gender" id="genderO" value="others" />
                          </div><br>
                      </div>
                  </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent Add. *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="dob" name="dob" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Temporary Add. *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="dob" name="dob" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> Contact No. *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="dob" name="dob" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Edu. Qualification *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="dob" name="dob" class="form-control col-md-7 col-xs-12" required/><br/>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Post *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select id="branch" name="branch" class="form-control col-md-7 col-xs-12">
                          <option value="butwal">Branch Head</option>
                          <option value="butwal">Branch Controller</option>
                      </select><br/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch *</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select id="branch" name="branch" class="form-control col-md-7 col-xs-12">
                        <option value="butwal">Butwal</option>
                        <option value="butwal">Butwal</option>
                        <option value="butwal">Butwal</option>
                      </select><br/>
                      </div>
                    </div>

                    <div class="row" style="float: right; padding-right: 15px; ">
                        <button type="reset" class="btn btn-primary"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset</button>
                        <button type="submit" name="addBranch" class="btn btn-success"><i class="fa fa-retweet"></i>&nbsp;&nbsp;Update</button>
                    </div>
                  </form>
<!-- / Add Branch Form Ends -->

                </div>


<!-- Left DIV -->
        <div class="col-md-6 col-sm-12 col-xs-12" style="height: 100%;">
            <h5><i class="fa fa-photo">&nbsp;&nbsp;</i><b>Media</b></h5>
            <div class="x_title"></div>

            <div class="ppPhoto">
              <h5><b>PP Size Photo</b></h5>
              <img src="" height="200" width="100%">
            </div>
            <div class="citizenshipCopy">
              <h5><b>Citizenship Copy</b></h5>
              <img src="" height="200" width="100%">
            </div>
          </div>
<!-- / Left DIV -->
        </div>
      </div>

</div>
<div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © <?php echo date("Y"); ?> <a href="#"> Trading System by <a href="https://lumbiniec.com.np">LEMSC</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../assests/js/custom.min.js"></script>

    <script>
    $(document).ready(function(e) {
        var availableDeparture = [
                        "Butwal",
                        "Birgunj",
                        "Biratnagar",
                        "Pokhara",
                        "Dharan",
                        "Kathmandu",
                        "Narayanghat",
                        "NepalJung",
                        "Janakpur",
                        "RajBiraj",
                        "Dhangadi",
                        "Mahendranagar"
                        ];
        $("#branch").autocomplete({
            source: availableDeparture
        });
    });
    </script>

  </body>
</html>
