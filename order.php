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

//include('header.php');

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
<!-- ORDER -->
    <link rel="stylesheet" href="css/datepicker.css">
	<script src="js/bootstrap-datepicker1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	
	<!--script src="js/order_action_update.js">
	
	</script-->
	
	<script>

	$(document).ready(function(){
		$('#inventory_order_date').datepicker({
			format: "yyyy-mm-dd",
			autoclose: true
		});
	});
	
	</script>
<!--  // ORDER-->
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
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span>  عقاقير القضاوي <span class="dashboard_text">Design dashboard</span></a></h1>
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
                <i class="fa fa-laptop"></i>
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
                <i class="fa fa-laptop"></i>
                <span>Historique</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
									<li><a href="history.php"><i class="fa fa-angle-right"></i> Historique</a></li>
                </ul>
							</li>
							<li class="treeview">
							<a href="#">
                <i class="fa fa-laptop"></i>
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
					<span id="alert_action"></span>
					<div class="row">
						<div class="col-lg-12">
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
											<h3 class="panel-title">Order List</h3>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
											<button type="button" name="add" id="add_button" class="btn btn-success btn-xs">Add</button>    	
										</div>
									</div>
								</div>
								<div class="panel-body">
									<table id="order_data" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Order ID</th>
												<th>Customer Name</th>
												<th>Total Amount</th>
												<th>Payment Status</th>
												<th>Order Status</th>
												<th>Order Date</th>
												<?php
												if($_SESSION['type'] == 'master')
												{
													echo '<th>Created By</th>';
												}
												?>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div id="orderModal" class="modal fade">

						<div class="modal-dialog">
							<form method="post" id="order_form">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><i class="fa fa-plus"></i> Create Order</h4>
									</div>
									<div class="modal-body">
									<div class="row">
										<!---->
											<div class="form-group">	
													<div class="col-md-5">
														<label class="radio-inline">  
															<input type="radio" name="customer_check" value="customer_exist" checked="checked"/>le client est enregistree <br />  
														</label>
													</div>
													<div class="col-md-5">
														<label class="radio-inline">
															<input type="radio" name="customer_check" value="customer_not_exist"  />non enregistre <br />
														</label>
													</div>
											</div>
										<!---->
										</div>
										<br/>

										<div class="result">
										</div>
										
										<!--div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Enter Receiver Name</label>
													<input type="text" name="inventory_order_name" id="inventory_order_name" class="form-control"  />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Date</label>
													<input type="text" name="inventory_order_date" id="inventory_order_date" class="form-control"  />
												</div>
											</div>
										</div-->


										<br/>
										<div class="form-group">
											<label>Enter Receiver Address</label>
											<textarea name="inventory_order_address" id="inventory_order_address" class="form-control" ></textarea>
										</div>
										<br/>
										<div class="form-group">
											<label>Enter Product Details</label>
											<hr />
											<span id="span_product_details"></span>
											<hr />
										</div>
										<!--div class="form-group">
											<label>Total amout</label>
											<div name="totale_amout" id="totale_amout" >					
											</div>
										</div-->
										<div class="form-group">
											<label>Remove</label>
											<input type="text" name="remove_amout" id="remove_amout"  class="form-control remove_amout" />
										</div>
										<div class="form-group">
											<label>Totale</label>
											<input type="text" name="totale_amout" id="totale_amout"  class="form-control c" />
										</div>
										<div class="form-group">
											<label>Final</label>
											<input type="text" name="final_amout" id="final_amout"  class="form-control c" />
										</div>
										<div class="form-group">
											<label>Final</label>
											<input type="text" name="missing_value" id="missing_value"  class="form-control " />
										</div>
										<br/>
									
										<div class="form-group">
											<label>Select Payment Status</label>
											<select name="payment_status" id="payment_status" class="form-control ">
												<option value="cash">Cash</option>
												<option value="credit">Credit</option>
											</select>
										</div>

										

									</div>
									<div class="modal-footer">
										<input type="hidden" name="inventory_order_id" id="inventory_order_id" />
										<input type="hidden" name="btn_action" id="btn_action" />
										<input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
									</div>
								</div>
							</form>
						</div>

					</div>
					<!--End User-->	
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
   <script type="text/javascript">
    $(document).ready(function(){


			/*$('#quantity'+count).change(function(e)  {
				  var distance = $('#quantity'+count).val(); 
				  $('#prix'+count).val(distance);
      });
			*/
			var $radios = $('input[type="radio"]');

					
		      $radios.change(function(){
					
				 var  $filtred = $radios.filter(':checked');
				 var $html = '';
					if($filtred.val()=='customer_not_exist')
					{
								
						var test = $('#inventory_order_date').datepicker({
								format: "yyyy-mm-dd",
								autoclose: true
							});
							
							$html    +='<div class="row">';
							$html		 +=	'<div class="col-md-6">';
							$html		 +=			'<div class="form-group">';
							$html		 +=			  '<label>Enter Receiver Name</label>';
							$html		 +=				'<input type="text" name="inventory_order_name" id="inventory_order_name" class="form-control"  />';
							$html		 +=			'</div>';
							$html		 +=	'</div>';
							$html		 +=	'<div class="col-md-6">';
							$html		 +=		'<div class="form-group">';
							$html		 +=			'<label>Date</label>';
							$html		 +=			'<input type="text" name="inventory_order_date" id="inventory_order_date" class="form-control"  />';
							$html		 +=		'</div>';
							$html		 +=	'</div>';
							$html		 +='</div>';
					
							$('.result').html($html);
							$('#inventory_order_date').datepicker({
										format: "yyyy-mm-dd",
										autoclose: true
									});
						
					}
					else
					{
						
						    $html += '<div class="row">';
								$html +=		'<div class="col-md-6">';
								$html +=				'<div class="form-group">';
								$html +=				  '<label>Enter Receiver Name</label>';
								$html +=					'<select name="inventory_order_name_id" id="inventory_order_name" class="form-control" required>';
								$html +=					'<option value="">slectionne le client </option>';
								$html +=					'<?php echo fill_customer_list($connect); ?>';
								$html +=				  '</select>';
								$html +=			 '</div>';
								$html +=		'</div>';
								$html +=		'<div class="col-md-6">';
								$html +=			'	<div class="form-group">';
								$html +=				  '<label>Date</label>';
								$html +=					'<input type="text" name="inventory_order_date" id="inventory_order_date" class="form-control"  />';
								$html +=			'	</div>';
								$html +=			'</div>';
								$html +='</div>';
							
								$('.result').html($html);
								$('#inventory_order_date').datepicker({
										format: "yyyy-mm-dd",
										autoclose: true
									});
						}
				});
			//$radios.each(function(){});
      //console.log($(this));
			//console.dir($radios);


    	var orderdataTable = $('#order_data').DataTable({
			"processing":true,
			"serverSide":true,
			"order":[],
			"ajax":{
				url:"order_fetch.php",
				type:"POST"
			},
			<?php
			if($_SESSION["type"] == 'master')
			{
			?>
			"columnDefs":[
				{
					"targets":[4, 5, 6, 7, 8, 9],
					"orderable":false,
				},
			],
			<?php
			}
			else
			{
			?>
			"columnDefs":[
				{
					"targets":[4, 5, 6, 7, 8],
					"orderable":false,
				},
			],
			<?php
			}
			?>
			"pageLength": 10
		});
		$('#add_button').click(function(){
			$('#orderModal').modal('show');
			$('#order_form')[0].reset();
			$('.modal-title').html("<i class='fa fa-plus'></i> Create Order");
			$('#action').val('Add');
			$('#btn_action').val('Add');
			$('#span_product_details').html('');
			
			add_product_row(count = 0);
			$('#missing_value').change(function(){
			$('.c').val( $('.c').val()-$('#missing_value').val());
			});
			
		});
		$(document).on('click', '#update_add_more', function(){
			
			
			count = count + 1;
		  update_product_row(count);
      
			
		});
    
		function add_product_row(count = 0)
		{
		
			var html = '';
			html += '<span id="row'+count+'"><div class="row">';
			html += '<div class="col-md-5">';
			html += '<select name="product_id[]" id="product_id'+count+'" class="form-control selectpicker" data-live-search="true" >';
			html += '<?php echo fill_product_list($connect); ?>';
			html += '</select><input type="hidden" name="hidden_product_id[]" id="hidden_product_id'+count+'" />';
			html += '</div>';
			html += '<div class="col-md-3">';
			html += '<input type="text" name="quantity[]" id="quantity'+count+'" class="form-control input-type quantity'+count+'"  />';
			html += '</div>';
			html += '<div class="col-md-3">';
			html += '<input type="text" id="prix'+count+'" name="prix[]" class="form-control"  />';
			html += '</div>';
			html += '<div class="col-md-1">';
			
			if(count == '')
			{
				html += '<button type="button" name="add_more" id="add_more" class="btn btn-success btn-xs">+</button>';
			}
			else
			{
				html += '<button type="button" name="remove" id="'+count+'" class="btn btn-danger btn-xs remove remo'+count+'">-</button>';
			}
			html += '</div>';
			html += '</div></div><br /></span>';
		
			/**  Begin Ajax */
			
			$('#span_product_details').append(html);
		
		  $('#quantity'+count).change(function(e)  {
							var qty = $('#quantity'+count).val(); 
							var product_id = $('#product_id'+count).val();
							$.ajax({
							url:"order_product_fetch.php",
							method:"POST",
							dataType:"json",
							data:{product_id:product_id,qty:qty },
							success:function(data){
							
	
							//var tax = data[0].tax ;
							$('#prix'+count).val(data[0].base_price);
							var price =parseInt($('#prix'+count).val());
						
							var remo_total = $('#remove_amout').val();
			        console.log(remo_total);
						  var count_add_more = count ;
							amout[count_add_more]= price;
							console.log(amout);
							
							var calcule = 0;
							var some = 0;
							for(var i = 0 ; i < amout.length ; i++)
							{
									  some  = some + amout[i];  
										calcule ++;
							}
							
							$('.remo'+count).click(function(e){
								
								remove = remove  + parseFloat($('#prix'+count).val());
								$('#remove_amout').val(remove);
								var rem = 	$('#remove_amout').val();
								
									
							});
					
						
							$('#totale_amout').html(some);
							$('.c').val(some);
							console.log("Add");
							console.log('Hi Add');
							var remove_amout = $('#remove_amout').val();
							var total_amout = $('.c').val();
							console.log(total_amout-remove_amout);
							$('#final_amout').val(total_amout-remove_amout);
							//console.log(remove_amout);
            	//totale_amout
							//amount + (price + tax);
							
							//console.log(count);
							//$('#orderModal').modal('hide');
							//$('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
							//$('#action').attr('disabled', false);
							//orderdataTable.ajax.reload();
							
						
						}
						 
					});
					
      });
      
			/** End Ajax */
		
			$('.selectpicker').selectpicker();
		}

		var count = 0;
		var amout = [];
		var remove = 0 ;
		var amount_totale = 0;
		var add_total = 0;
		var count_add_more = 0;
		$(document).on('click', '#add_more', function(){
			
			count = count + 1;	
			add_product_row(count);
		
		});
		$(document).on('click', '.remove', function(){	
			var row_no = $(this).attr("id");
			console.log('Hi Remove');


	    var remove_amout = $('#remove_amout').val();
			var total_amout = $('.c').val();
			//console.log(remove_amout);
			console.log(total_amout-remove_amout);
			$('#final_amout').val(total_amout-remove_amout);
			$('#row'+row_no).remove();
			
		});

		
		$(document).on('submit', '#order_form', function(event){
			event.preventDefault();
			$('#action').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"order_action.php",
				method:"POST",
				data:form_data,
				success:function(data){
					console.log(data);
					$('#order_form')[0].reset();
					//$('#orderModal').modal('hide');
					//console.log(data);
					$('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
					$('#action').attr('disabled', false);
					orderdataTable.ajax.reload();
					
				}
			});
		});
		function update_product_row(count)
		{
			  console.log(count);
			  var html = '';
				html += '<span id="row'+count+'"><div class="row">';
				html += '<div class="col-md-5">';
				html += '<select name="product_id[]" id="product_id'+count+'" class="form-control "   >';
				html += '<?php echo fill_product_list($connect); ?>';
				html += '</select><input type="hidden" name="hidden_product_id[]" id="hidden_product_id" />';
				html += '</div>';
				html += '<div class="col-md-3">';
				html += '<input type="text" name="quantity[]" id="'+count+'" class="form-control input-type quantity'+count+' "  />';
				html += '</div>';
				html += '<div class="col-md-3">';
				html += '<input type="text" id="prix'+count+'" name="prix[]" class="form-control"  />';
				html += '</div>';
				html += '<div class="col-md-1">';
				if(count == '')
				{
					html += '<button type="button" name="update_add_more" id="update_add_more" class="btn btn-success btn-xs">+</button>';
				}
				else
				{
					html += '<button type="button" name="update_remove_new" id="'+count+'" class="btn btn-danger btn-xs update_remove_new remo'+count+'">-</button>';
				}
				html += '</div>';
				html += '</div></div><br /></span>';
				$('#span_product_details').append(html);
          // hind
					
					
				$('.quantity'+count).change(function(){
							var qty = $('.quantity'+count).val(); 
			   			
							var product_id = $('#product_id'+count).val();
							$.ajax({
								url:"order_product_fetch.php",
								method:"POST",
								dataType:"json",
								data:{product_id:product_id,qty:qty},
								success:function(data)
								{

									$('#prix'+count).val(data[0].base_price);
									var price = parseFloat($('#prix'+count).val());
									var totale = parseFloat($('#totale_amout').val()); 
								  
									amout[count_add_more++]=price;
									var some;

									for(i = 0; i<amout.length;i++)
									{
										var some = 0;
										some = some + amout[i];
									}
									totale_amout = parseFloat($('#totale_amout').val());
									console.log('NNNNNNN');
									$('#totale_amout').val(totale_amout +price );
									console.log(price);
									totale_amout = totale_amout + $('#totale_amout').val();
									$('#final_amout').val($('#totale_amout').val()-$('#remove_amout').val());
								 
						 
								}
							});
				});
		}
		$(document).on('click', '.update_remove_new', function(){	

			var row_no_new = $(this).attr("id");
			console.log('Update Remove New');
			console.log(row_no_new);
	
      var price = parseFloat($('#prix'+row_no_new).val());
			console.log("++  New ++");
			$('#remove_amout').val((parseFloat($('#remove_amout').val()) + price));

			console.log(parseFloat($('#remove_amout').val()) + price);
			

			console.log(parseFloat($('#totale_amout').val())  -  parseFloat($('#remove_amout').val()) );
			$('#final_amout').val((parseFloat($('#totale_amout').val())  -  parseFloat($('#remove_amout').val()) ));

			console.log("++  New ++");
		
				
		});
		$(document).on('click', '.update_remove', function(){	
			var row_no = $(this).attr("id");
			
			console.log('Hi Remove Update');
		
			console.log($('.prix'+row_no).val());
			console.log(parseFloat($('#remove_amout').val()));
			$('#remove_amout').val(parseFloat($('.prix'+row_no).val()) + parseFloat($('#remove_amout').val()));
			$('#final_amout').val(  $('#totale_amout').val() - $('#remove_amout').val()   );
	
			$('#row'+row_no).remove();
			
		});
		$(document).on('click', '.update', function(){
			
			
				$('#missing_value').change(function(){
				$('.c').val( $('.c').val()-$('#missing_value').val());
				});
		   //	count = count + 1;
	      var inventory_order_id = $(this).attr("id");
				var btn_action = 'fetch_single';
				 
				//var quantity = $("input[name='quantity[]']");
				var quantity = $('input:text.quantity').serialize();
				//var quantity = "hhh";
			
				$.ajax({
				url:"order_action.php",
				method:"POST",
				data:{inventory_order_id:inventory_order_id, btn_action:btn_action, quantity:quantity},
				dataType:"json",
				success:function(data)
				{
					// .update
					//console.log(data);
					$('#remove_amout').val(0);
					$('#orderModal').modal('show');
					$('#inventory_order_name').val(data.inventory_order_name);
					$('#inventory_order_date').val(data.inventory_order_date);
					$('#inventory_order_address').val(data.inventory_order_address);
					$('#span_product_details').html(data.product_details);
					$('#payment_status').val(data.payment_status);
					$('#missing_value').html(data.missing_value+6);
					$('.modal-title').html("<i class='fa fa-pencil-square-o'></i> Edit Order");
					$('#inventory_order_id').val(inventory_order_id);
					$('#action').val('Edit');
					$('#btn_action').val('Edit');
					console.dir($('#add_more_update'));
					
					
					count = data.count_array.length;
					//update_product_row(count)
				
					

				}
			  
			});
			
		});

		$(document).on('click', '.delete', function(){
			var inventory_order_id = $(this).attr("id");
			var status = $(this).data("status");
			var btn_action = "delete";
			if(confirm("Are you sure you want to change status?"))
			{
				$.ajax({
					url:"order_action.php",
					method:"POST",
					data:{inventory_order_id:inventory_order_id, status:status, btn_action:btn_action},
					success:function(data)
					{
						$('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
						orderdataTable.ajax.reload();
					}
				})
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