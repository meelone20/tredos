

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
           <div class="x_title">
             <h5><i class="fa fa-list">&nbsp;&nbsp;</i> <b>Manage Branch Admin / Controller </b></h5>

             <div class="clearfix"></div>
           </div>
           <div class="x_content">

             <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Full Name</th>
                   <th>Citizenship No.</th>
                   <th>Permanent Address</th>
                   <th>Temporary Address</th>
                   <th>Contact No.</th>
                   <th>Working Branch</th>
                   <th>Post</th>
                   <th>Operation</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>Tiger</td>
                   <td>Nixon</td>
                   <td>System Architect</td>
                   <td>Edinburgh</td>
                   <td>61</td>
                   <td>2011/04/25</td>
                   <td>$320,800</td>
                   <td>5421</td>
                   <td>
                     <a href='view_branch_controller.php' class='btn btn-xs btn-info'><i class='fa fa-file-text'></i> View Details</a>
                     <a href='edit_branch_controller.php?id=$staffID' class='btn btn-xs btn-primary'><i class='fa fa-pencil-square'></i> Edit</a>
                     <a href='delete_branch_controller.php?id=$staffID' class='btn btn-xs btn-danger delCheck' onclick='return confirmDel();'><i class='fa fa-trash'></i> Delete</a>
                   </td>
                 </tr>

               </tbody>
             </table>

           </div>
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
    <!-- Datatables -->
       <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
       <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
       <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
       <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
       <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
       <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
       <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
       <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
       <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
       <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
       <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
       <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
       <script src="../vendors/jszip/dist/jszip.min.js"></script>
       <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
       <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<script type="text/javascript">
  //return delete details
  function confirmDel(){
  var result = confirm("Are you do you want to delete ?");
  if(result == 'true')
     return true;
  else
    return false;
}
</script>

       <!-- Datatables -->
         <script>
           $(document).ready(function() {
             var handleDataTableButtons = function() {
               if ($("#datatable-buttons").length) {
                 $("#datatable-buttons").DataTable({
                   dom: "Bfrtip",
                   buttons: [
                     {
                       extend: "copy",
                       className: "btn-sm"
                     },
                     {
                       extend: "csv",
                       className: "btn-sm"
                     },
                     {
                       extend: "excel",
                       className: "btn-sm"
                     },
                     {
                       extend: "pdfHtml5",
                       className: "btn-sm"
                     },
                     {
                       extend: "print",
                       className: "btn-sm"
                     },
                   ],
                   responsive: true
                 });
               }
             };

             TableManageButtons = function() {
               "use strict";
               return {
                 init: function() {
                   handleDataTableButtons();
                 }
               };
             }();

             $('#datatable').dataTable();

             $('#datatable-keytable').DataTable({
               keys: true
             });

             $('#datatable-responsive').DataTable();

             $('#datatable-scroller').DataTable({
               ajax: "js/datatables/json/scroller-demo.json",
               deferRender: true,
               scrollY: 380,
               scrollCollapse: true,
               scroller: true
             });

             $('#datatable-fixed-header').DataTable({
               fixedHeader: true
             });

             var $datatable = $('#datatable-checkbox');

             $datatable.dataTable({
               'order': [[ 1, 'asc' ]],
               'columnDefs': [
                 { orderable: false, targets: [0] }
               ]
             });
             $datatable.on('draw.dt', function() {
               $('input').iCheck({
                 checkboxClass: 'icheckbox_flat-green'
               });
             });

             TableManageButtons.init();
           });
         </script>
         <!-- /Datatables -->

  </body>
</html>
