<?php
	include ('config.php');
	include('session.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Restaurant - dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
<div class="wrapper">

<!-- Sidebar -->

<div class="nav-side-menu">
	<div class="brand">Admin</div>
	<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	<div class="menu-list">
		<ul id="menu-content" class="menu-content collapse out">
			<li >
				<a href="dashboard.php">
					  <i class="fas fa-tachometer-alt"></i> Dashboard
				  </a>
			</li>
			
			<!-- <li  data-toggle="collapse" data-target="#users" class="collapsed">
				<a href="#"><i class="fa fa-user fa-lg"></i> Users <i class="fas fa-caret-down"></i></a>
			</li> -->
			<!-- <ul class="sub-menu collapse" id="users">
				<li><a href="add_user.php">Add Users</a></li>
				<li><a href="manage_user.php">Manage Users</a></li>
			</ul> -->

			<!-- <li data-toggle="collapse" data-target="#groups" class="collapsed">
				<a href="#"><i class="fa fa-users fa-lg"></i> Group <i class="fas fa-caret-down"></i></a>
			</li>  
			<ul class="sub-menu collapse" id="groups">
				<li><a href="group.php">Manage Menu</a></li>
			</ul> -->

			<!-- <li>
				  <a href="store.php">
					  <i class="fa fa-store fa-lg"></i> Stores
				   </a>
			</li> -->

			<li>
				  <a href="tables.php">
					  <i class="fa fa-table fa-lg"></i> Table
				   </a>
			</li>

			<!-- <li>
				  <a href="category.php">
					  <i class="fas fa-cash-register"></i> Category
				   </a>
			</li> -->

			<li data-toggle="collapse" data-target="#products" class="collapsed active">
				<a href="#"><i class="fas fa-cookie"></i> Menu <i class="fas fa-caret-down"></i></a>
			</li>
			<ul class="sub-menu collapse" id="products">
			  <li><a href="add_menu.php">Add Menu</a></li>
			  <li><a href="manage_menu.php">Manage Menu</a></li>
			</ul>

			<li data-toggle="collapse" data-target="#order" class="collapsed">
				<a href="#"><i class="fas fa-book-open"></i> Orders <i class="fas fa-caret-down"></i></a>
			</li>
			<ul class="sub-menu collapse" id="order">
			  <li><a href="order.php">Manage Orders</a></li>
			</ul>

			<!-- <li>
				  <a href="info.php">
					  <i class="fa fa-info fa-lg"></i> Company Info
				   </a>
			</li>

			<li>
				  <a href="profile.php">
					  <i class="fa fa-users fa-lg"></i> Profile
				   </a>
			</li> -->

			<!-- <li>
				<a href="settings.php">
					<i class="fa fa-sun fa-lg"></i> Settings
				  </a>
			</li> -->

			<li>
				  <a href="logout.php">
					  <i class="fa fa-user-times fa-lg"></i> Logout
				   </a>
			</li>

		</ul>	
	</div>
</div>


		<!-- Content -->

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav class="bar">
							<a href="#" id="toggle"><i class="fas fa-bars ml-3"></i></a>
						</nav>
						<div class="below-toggle-content">
							<div class="col-md-12">
								<div class="top-part mb-3">
									<h2 class="d-inline">Manage</h2>
									<p class="d-inline ml-2">Menu</p>
									<a href="dashboard.php" class="d-inline text-dark mt-2" style="text-decoration: none; float: right; font-weight: 500;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
								</div>
								<div class="row">

									<!-- Add Group Button -->

									<div class="col-md-4">
									<a href="add_menu.php"><button h class="btn btn-primary add-group shadow-none" data-toggle="modal" data-target="#AddModal">Add Menu</button></a>
									</div>	

									<!-- Search Bar -->

									<div class="col-md-4 mt-2 mb-4 ml-auto">
										<div class="input-group">
						                	<input type="text" name="search" id="search" onkeyup="SearchField();" class="form-control shadow-none" placeholder="Search Category">
						                	<span class="input-group-btn">
						                		<button class="btn btn-primary shadow-none" id="search-button">Search</button>
						                 	</span>
						               	</div>
									</div>

								</div>

								<div class="row pl-3 pr-3">	

									<!-- Table -->

									<table class="table table-striped" id="category_table" style="text-align: center;">
										<thead class="thead-dark">
									    	<tr>
									      		<th scope="col">Food Id</th>
									      		<th scope="col">Food Name</th>
												<th scope="col">Price</th>
									      		<th scope="col">Status</th>
									      		<th scope="col">Action</th>
									    	</tr>
									  	</thead>
									  	<tbody id="display">
										  <?php

											$qry = "SELECT * FROM food";

											//execute query
											if($result = mysqli_query($con,$qry))
											{
												echo $result->num_rows;
												while($row = mysqli_fetch_assoc($result))
												{
													$fid = $row['f_id'];
										?>
													<tr>
														<td><?php echo $row['f_id']; ?></td>
														
														<td><?php echo $row['f_name']; ?></td>
														
														<td><?php echo "Rs." . $row['price']; ?></td>

														<td><?php 
															if($row['status'] = 1){
																echo 'Active';
															}
															else {
																echo 'Not Active';
															}     ?>
														</td>

														<td>
														<a href="edit_menu.php?id=<?php echo $fid?>">
														<button class="edit" style="background-color: blue; border-radius: 5px; border: none; color: white;" >Edit</button>
														</a>

														<a href="backend/delete_menu.php?id=<?php echo $fid?>">
														<button class="delete" style="background-color: red; border-radius: 5px; border: none; color: white;" >Delete</button>
														</a>
														</td>

										<?php
												}
											}
										?>
										</tr>
									  	</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Add Group Modal -->

	<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	    		<div class="modal-header">
	        		<h4 class="modal-title text-center text-info" id="exampleModalCenterTitle">Add Category</h4>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<form method="POST" action="" id="add_form">
						<div class="form-group">
					    	<label for="categoryName">Category Name</label>
					    	<input type="text" name="category_name" class="form-control shadow-none" id="category_name" aria-describedby="emailHelp" placeholder="Enter Category Name">
					  	</div>
					  	<div class="form-group">
					    	<label for="status">Select Status</label>
					    	<select name="status" class="form-control shadow-none" id="status">
					      		<option value="active">Active</option>
					      		<option value="inactive">Inactive</option>
					    	</select>
					  	</div>
					  <button type="submit" name="add" id="add" class="btn btn-primary shadow-none">Add Category</button>
					  <button type="button" class="btn btn-danger shadow-none" data-dismiss="modal" aria-label="Close">Cancel</button>
					</form>
	      		</div>
	    	</div>
	  	</div>
	</div>	

	<!-- Update Group Modal -->

	<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="UpdateModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	    		<div class="modal-header">
	        		<h4 class="modal-title text-center text-info" id="exampleModalCenterTitle">Update Category</h4>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<form method="POST" action="" id="update_form">
						<div class="form-group">
					    	<label for="categoryName">Category Name</label>
					    	<input type="text" name="category_name_update" class="form-control shadow-none" id="category_name_update" aria-describedby="emailHelp" placeholder="Enter Category Name">
					  	</div>
					  	<div class="form-group">
					    	<label for="status">Select Status</label>
					    	<select name="status_update" class="form-control shadow-none" id="status_update">
					      		<option value="active">Active</option>
					      		<option value="inactive">Inactive</option>
					    	</select>
					  	</div>					  
					  	<button type="hidden" id="category_id" class="d-none"></button>
					  <button type="submit" name="update" id="update" class="btn btn-primary shadow-none">Update Category</button>
					  <button type="button" class="btn btn-danger shadow-none" data-dismiss="modal" aria-label="Close">Cancel</button>
					</form>
	      		</div>
	    	</div>
	  	</div>
	</div>	

	<script type="text/javascript">
		$('#toggle').click(function(e){
			e.preventDefault();
			$('.wrapper').toggleClass('menuDisplayed');
		});
	</script>

	<script type="text/javascript">
		/* Insert Data */

		$(document).ready(function(){
			$('#add_form').on('submit', function(e){
				e.preventDefault();
				if($('#category_name').val() == "")
				{
					alert('Category is required.');
				}
				else
				{
					$.ajax({
						url:"insert_category.php",
						method:"POST",
						data:$('#add_form').serialize(),
						success:function(data)
						{
							$('#add_form')[0].reset();
							$('#AddModal').modal('hide');
							$('#category_table').html(data);
						}
					});
				}
			});
		});

		/* Getting Data as json */

		$(document).on('click','.edit_data',function(){
			var category_id = $(this).attr('id');
			$.ajax({
				url:"update_category.php",
				method:"POST",
				data:{category_id:category_id},
				dataType:"json",
				success:function(data){
					$('#category_name_update').val(data.category_name);
					$('#status_update').val(data.status);
					$('#category_id').val(category_id);
					$('#UpdateModal').modal('show');
				}
			});
		});

		/* Updating Data at backend */

		$('#update_form').on('submit', function(e){
			var category_id = $('#category_id').val();
			var category_name_update = $('#category_name_update').val();
			var status_update = $('#status_update').val();
			e.preventDefault();
			if($('#category_name_update').val() == "")
			{
				alert('Category is required.');
			}
			else
			{
				$.ajax({
					url:"update_category_database.php",
					method:"POST",
					data: {
						category_name_update: category_name_update,
						status_update: status_update,
						category_id: category_id
					},
					success:function(data)
					{
						$('#UpdateModal').modal('hide');
						$('#category_table').html(data);
					}
				});
			}
		});
	</script>

	<script>
		
		function SearchField() {
			xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET", "category_search.php?search="+document.getElementById('search').value, false);
			xmlhttp.send(null);

			document.getElementById('display').innerHTML=xmlhttp.responseText;
      	}

	</script>

</body>
</html>