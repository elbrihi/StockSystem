<?php
include('database_connection.php');

include('function.php');

if(!isset($_SESSION['type']))
{
	header('location:login.php');
}

if($_SESSION['type'] != 'master')
{
	header('location:index.php');
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Grids :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 


<!--DataTable-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<!--// DataTable-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> عقاقير القضاوي <span class="dashboard_text">Design dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
             <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
				      <!-- Begin  -->
			        <!--li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Components</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="user.php"><i class="fa fa-angle-right"></i> Les utilisateurs</a></li>
									<li><a href="category.php"><i class="fa fa-angle-right"></i> Les Categories</a></li>
									<li><a href="brand.php"><i class="fa fa-angle-right"></i> les marques</a></li>
									<li><a href="product.php"><i class="fa fa-angle-right"></i> les produits</a></li>
									<li><a href="order.php"><i class="fa fa-angle-right"></i> Les orders</a></li>
                </ul>
              </li-->

							<li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Catalogue </span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="category.php"><i class="fa fa-angle-right"></i> Les Categories</a></li>
									<li><a href="brand.php"><i class="fa fa-angle-right"></i> les marques</a></li>
									<li><a href="product.php"><i class="fa fa-angle-right"></i> les produits</a></li>
                </ul>
              </li>
							<li class="treeview">
                <a href="#">
                <i class="fa fa-first-order"></i>
                <span>les commandes</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="order.php"><i class="fa fa-angle-right"></i> gestions des commandes</a></li>
                </ul>
              </li>
							<li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>les cliens</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="customer.php"><i class="fa fa-angle-right"></i> gestions des  cliens</a></li>
                </ul>
              </li>
							<li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Les utilisateurs</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="user.php"><i class="fa fa-angle-right"></i> Les utilisateurs</a></li>
                </ul>
							</li>
							<li class="treeview">
                <a href="#">
                <i class="fa fa-history"></i>
                <span>Historique</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="history.php"><i class="fa fa-angle-right"></i> Historique</a></li>
                </ul>
							</li>
							<li class="treeview">
							<a href="#">
                <i class="fa fa-money"></i>
                <span>gestion de la caisse</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="caisse.php"><i class="fa fa-angle-right"></i> gestion de la caisse</a></li>
                </ul>
              </li>
							<!-- END -->
              <li class="treeview">
                <a href="charts.html">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <span class="label label-primary pull-right">new</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
                  <li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
                  <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
                  <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
                </ul>
              </li>
			  <li>
                <a href="widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <small class="label pull-right label-info">08</small>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
                  <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox</a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                  <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                  <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                  <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                  <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                </ul>
              </li>
              <li class="header">LABELS</li>
              <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
									  <p> <?php echo $_SESSION["user_name"]; ?></p>
										<span>Administrateur</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu"> 
								<li> <a href="profile.php"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Grid system</h2>
				<div class="grids widget-shadow">
					<!-- Begin User -->
					<span id='alert_action'></span>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
											<h3 class="panel-title">la liste des cleints </h3>
										</div>
									
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align='right'>
											<button type="button" name="add" id="add_button" class="btn btn-success btn-xs">Add</button>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<div class="row"><div class="col-sm-12 table-responsive">
										<table id="customer_data" class="table table-bordered table-striped">
											<thead><tr>
												<th>ID</th>
												<th>Nom</th>
												<th>Prenom</th>
												<th>Email</th>
												<th>Numero de Telephone</th>
												<th>enregistré par</th>
												<th>Status</th>
												<th></th>
												<th></th>
												<th></th>
											</tr></thead>
										</table>
									</div></div>
								</div>
							</div>
						</div>
					</div>

					<div id="customerModal" class="modal fade">
						<div class="modal-dialog">
							<form method="post" id="customer_form">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><i class="fa fa-plus"></i> Add Product</h4>
									</div>
									<div class="modal-body">

									<div class="form-group">
										<label>Le Prenom du client</label>
										<input type="text" name="customer_first_name" id="customer_first_name" class="form-control" />
									</div>
									<br />
									<div class="form-group">
										<label>Le Nom Client</label>
										<input type="text" name="customer_last_name" id="customer_last_name" class="form-control"  />
									</div>
									<br />
									<div class="form-group">
										<label>Email du Client</label>
										<input type="text" name="customer_email" id="customer_email" class="form-control" />
									</div>
									<br />
									<div class="form-group">
										<label>Telephone du Client</label>
										<input type="text" name="customer_telephone" id="customer_telephone" class="form-control" />
									</div>
									<br />
									<div class="form-group">
										<label>Adresse Du Client</label>
										<input type="text" name="customer_adress" id="customer_adress" class="form-control" />
									</div>
									<br />
									</div>
									<div class="modal-footer">
										<input type="hidden" name="customer_id" id="customer_id" />
										<input type="hidden" name="btn_action" id="btn_action" />
										<input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div id="costumerdetailsModal" class="modal fade">
						<div class="modal-dialog">
							<form method="post" id="customer_form">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><i class="fa fa-plus"></i> Product Details</h4>
									</div>
									<div class="modal-body">
										<Div id="customer_details"></Div>
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</form>
						</div>
					</div>		
					<!--End User-->	
				</div>
				<h3 class="title1">Bootstrap Grid Details</h3>
				<div class="grid-bottom widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
						<thead>
							<tr>
								<th></th>
								<th>
									Extra small devices
									<small>Phones (&lt;768px)</small>
								</th>
								<th>
									Small devices
									<small>Tablets (≥768px)</small>
								</th>
								<th>
									Medium devices
									<small>Desktops (≥992px)</small>
								</th>
								<th>
									Large devices
									<small>Desktops (≥1200px)</small>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Suitable for</th>
								<td>Phones</td>
								<td>Tablets</td>
								<td>Small Laptops</td>
								<td>Laptops & Desktops</td>
							</tr>
							<tr>
								<th>Grid behaviour</th>
								<td>Horizontal at all times</td>
								<td>Collapsed to start, horizontal above breakpoints</td>
								<td>Collapsed to start, horizontal above breakpoints</td>
								<td>Collapsed to start, horizontal above breakpoints</td>
							</tr>
							<tr>
								<th>Max container width</th>
								<td>None (auto)</td>
								<td>750px</td>
								<td>970px</td>
								<td>1170px</td>
							</tr>
							<tr>
								<th>Class prefix</th>
								<td><code>.col-xs-</code></td>
								<td><code>.col-sm-</code></td>
								<td><code>.col-md-</code></td>
								<td><code>.col-lg-</code></td>
							</tr>
							<tr>
								<th># of columns</th>
								<td >12</td>
								<td >12</td>
								<td >12</td>
								<td >12</td>
							</tr>
							<tr>
								<th>Column Width</th>
								<td>Auto</td>
								<td>~62px</td>
								<td>~81px</td>
								<td>~97px</td>
							</tr>
							<tr>
								<th>Gutter width</th>
								<td>30px (15px on each side of a column)</td>
								<td>30px (15px on each side of a column)</td>
								<td>30px (15px on each side of a column)</td>
								<td>30px (15px on each side of a column)</td>
							</tr>
							<tr>
								<th>Nestable</th>
								<td>Yes</td>
								<td>Yes</td>
								<td>Yes</td>
								<td>Yes</td>
							</tr>
							<tr>
								<th>Offests</th>
								<td>Yes</td>
								<td>Yes</td>
								<td>Yes</td>
								<td>Yes</td>
							</tr>
							<tr>
								<th>Column Ordering</th>
								<td>Yes</td>
								<td>Yes</td>
								<td>Yes</td>
								<td>Yes</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>		</div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <script>
$(document).ready(function(){
    var productdataTable = $('#customer_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"customer_fetch.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[7, 8, 9],
                "orderable":false,
            },
        ],
        "pageLength": 10
    });

    $('#add_button').click(function(){
        $('#customerModal').modal('show');
        $('#customer_form')[0].reset();
        $('.modal-title').html("<i class='fa fa-plus'></i> Ajoute un client ");
        $('#action').val("Add");
        $('#btn_action').val("Add");
    });



    $(document).on('submit', '#customer_form', function(event){
			console.log(5);
        event.preventDefault();
        $('#action').attr('disabled', 'disabled');
        var form_data = $(this).serialize();
        $.ajax({
            url:"customer_action.php",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                //$('#costumer_form')[0].reset();
								///$('#costumer_form')[0].reset();
                $('#customerModal').modal('hide');
                $('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');			
                $('#action').attr('disabled', false);
								
                productdataTable.ajax.reload();
            }
        })
    });

    $(document).on('click', '.view', function(){
        var product_id = $(this).attr("id");
        var btn_action = 'product_details';
        $.ajax({
            url:"product_action.php",
            method:"POST",
            data:{product_id:product_id, btn_action:btn_action},
            success:function(data){
                $('#productdetailsModal').modal('show');
                $('#product_details').html(data);
            }
        })
    });

    $(document).on('click', '.update', function(){
        var customer_id = $(this).attr("id");
        var btn_action = 'fetch_single';
        $.ajax({
            url:"customer_action.php",
            method:"POST",
            data:{customer_id:customer_id, btn_action:btn_action},
            dataType:"json",
            success:function(data){
                
                $('#customerModal').modal('show');
                $('#customer_first_name').val(data.customer_first_name);
                $('#customer_last_name').val(data.customer_last_name);
                $('#customer_email').val(data.customer_email);
                $('#customer_telephone').val(data.customer_telephone);
                $('#customer_adress').val(data.customer_adress);
                $('.modal-title').html("<i class='fa fa-pencil-square-o'></i> Modification du  Client");
                $('#customer_id').val(data.customer_id);
                $('#action').val("Edit");
                $('#btn_action').val("Edit");
            }
        })
    });

    $(document).on('click', '.delete', function(){
        var customer_id = $(this).attr("id");
        var status = $(this).data("status");
        var btn_action = 'delete';
        if(confirm("Are you sure you want to change status?"))
        {
            $.ajax({
                url:"customer_action.php",
                method:"POST",
                data:{customer_id:customer_id, status:status, btn_action:btn_action},
                success:function(data){
                    $('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
                    productdataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;
        }
    });

});
</script>
</body>
</html>