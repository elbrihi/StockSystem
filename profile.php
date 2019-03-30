<?php
include('database_connection.php');

if(!isset($_SESSION['type']))
{
	header("location:login.php");
}

$query = "
SELECT * FROM user_details 
WHERE user_id = '".$_SESSION["user_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$name = '';
$email = '';
$user_id = '';
foreach($result as $row)
{
	$name = $row['user_name'];
	$email = $row['user_email'];
}

include('header.php');;


?>


					<!-- Begin User -->
					
					<div class="panel panel-default">
						<div class="panel-heading">Edit Profile</div>
						<div class="panel-body">
							<form method="post" id="edit_profile_form">
								<span id="message"></span>
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo $name; ?>" required />
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="user_email" id="user_email" class="form-control" required value="<?php echo $email; ?>" />
								</div>
								<hr />
								<label>Leave Password blank if you do not want to change</label>
								<div class="form-group">
									<label>New Password</label>
									<input type="password" name="user_new_password" id="user_new_password" class="form-control" />
								</div>
								<div class="form-group">
									<label>Re-enter Password</label>
									<input type="password" name="user_re_enter_password" id="user_re_enter_password" class="form-control" />
									<span id="error_password"></span>	
								</div>
								<div class="form-group">
									<input type="submit" name="edit_prfile" id="edit_prfile" value="Edit" class="btn btn-info" />
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
$(document).ready(function(){

	$('#add_button').click(function(){
		$('#brandModal').modal('show');
		$('#brand_form')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Brand");
		$('#action').val('Add');
		$('#btn_action').val('Add');
	});

	$(document).on('submit','#brand_form', function(event){
		event.preventDefault();
		$('#action').attr('disabled','disabled');
		var form_data = $(this).serialize();
		$.ajax({
			url:"brand_action.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#brand_form')[0].reset();
				$('#brandModal').modal('hide');
				$('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
				$('#action').attr('disabled', false);
				branddataTable.ajax.reload();
			}
		})
	});

	$(document).on('click', '.update', function(){
		var brand_id = $(this).attr("id");
		var btn_action = 'fetch_single';
		$.ajax({
			url:'brand_action.php',
			method:"POST",
			data:{brand_id:brand_id, btn_action:btn_action},
			dataType:"json",
			success:function(data)
			{
				$('#brandModal').modal('show');
				$('#category_id').val(data.category_id);
				$('#brand_name').val(data.brand_name);
				$('.modal-title').html("<i class='fa fa-pencil-square-o'></i> Edit Brand");
				$('#brand_id').val(brand_id);
				$('#action').val('Edit');
				$('#btn_action').val('Edit');
			}
		})
	});

	$(document).on('click','.delete', function(){
		var brand_id = $(this).attr("id");
		var status  = $(this).data('status');
		var btn_action = 'delete';
		if(confirm("Are you sure you want to change status?"))
		{
			$.ajax({
				url:"brand_action.php",
				method:"POST",
				data:{brand_id:brand_id, status:status, btn_action:btn_action},
				success:function(data)
				{
					$('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
					branddataTable.ajax.reload();
				}
			})
		}
		else
		{
			return false;
		}
	});


	var branddataTable = $('#brand_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"brand_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[4, 5],
				"orderable":false,
			},
		],
		"pageLength": 10
	});

});
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
	$('#edit_profile_form').on('submit', function(event){
		event.preventDefault();
		if($('#user_new_password').val() != '')
		{
			if($('#user_new_password').val() != $('#user_re_enter_password').val())
			{
				$('#error_password').html('<label class="text-danger">Password Not Match</label>');
				return false;
			}
			else
			{
				$('#error_password').html('');
			}
		}
		$('#edit_prfile').attr('disabled', 'disabled');
		var form_data = $(this).serialize();
		$('#user_re_enter_password').attr('required',false);
		$.ajax({
			url:"edit_profile.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#edit_prfile').attr('disabled', false);
				$('#user_new_password').val('');
				$('#user_re_enter_password').val('');
				$('#message').html(data);
			}
		})
	});
});
</script>
</body>
</html>