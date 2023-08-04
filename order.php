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
			<li>
				<a href="dashboard.php">
					  <i class="fas fa-tachometer-alt"></i> Dashboard
				  </a>
			</li>
			
			<li  data-toggle="collapse" data-target="#users" class="collapsed">
				<a href="#"><i class="fa fa-user fa-lg"></i> Users <i class="fas fa-caret-down"></i></a>
			</li>
			<ul class="sub-menu collapse" id="users">
				<li><a href="add_user.php">Add Users</a></li>
				<li><a href="manage_user.php">Manage Users</a></li>
			</ul>

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

			<li data-toggle="collapse" data-target="#products" class="collapsed">
				<a href="#"><i class="fas fa-cookie"></i> Menu <i class="fas fa-caret-down"></i></a>
			</li>
			<ul class="sub-menu collapse" id="products">
			  <li><a href="add_menu.php">Add Menu</a></li>
			  <li><a href="manage_menu.php">Manage Menu</a></li>
			</ul>

			<li data-toggle="collapse" data-target="#order" class="collapsed active">
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
									<h2 class="d-inline">Orders</h2>
									<!-- <p class="d-inline ml-2">Users</p> -->
									<a href="dashboard.php" class="d-inline text-dark mt-2" style="text-decoration: none; float: right; font-weight: 500;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
								</div>
								<!-- <div class="row"> -->

									<!-- Add Group Button -->

									<!-- <div class="col-md-4">
										<a href="add_user.php"><button class="btn btn-primary add-group shadow-none" data-toggle="modal" data-target="#AddModal">Add User</button></a>
									</div>	 -->

									<!-- Search Bar -->

									<!-- <div class="col-md-4 mt-2 mb-4 ml-auto">
										<div class="input-group">
						                	<input type="text" name="search" id="search" onkeyup="SearchField();" class="form-control shadow-none" placeholder="Search User">
						                	<span class="input-group-btn">
						                		<button class="btn btn-primary shadow-none" id="search-button">Search</button>
						                 	</span>
						               	</div>
									</div>

								</div> -->

									<!-- Table -->
<?php
    include('config.php');
?>

<table class="table table-striped" id="category_table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Order ID</th>
			<th scope="col">Customer Name</th>
			<th scope="col">Bill Id</th>
			<th scope="col">Table No</th>
			<th scope="col">Foods</th>
			<th scope="col">Time and Date</th>
			<th scope="col">Total Amoount</th>
		</tr>
	</thead>
	<tbody id="display">
	<?php
        $qry = "SELECT * FROM orders";

        //execute query
        if($result = mysqli_query($con,$qry))
        {
            while($row = mysqli_fetch_assoc($result))
            {
    ?>
                <tr>
                    <td><?php echo $row['o_id']; ?></td>
                    
                    <td><?php echo $row['c_id']; ?></td>
                    
                    <td><?php echo $row['bill_id']; ?></td>
                    
                    <td><?php echo $row['t_id']; ?></td>

					<td><?php echo $row['f_id']; ?></td>
                    
                    <td><?php echo $row['o_time']; ?></td>
                    
                    <td><?php echo 'Rs. '. $row['amount']; ?></td>


    <?php
            }
        }
    ?>
    </tr>
									  	</tbody>
									</table>

<!-- <form action="insert_data.php" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="firstname" placeholder="Enter Firstname">
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="lastname" placeholder="Enter Lastname">
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="phone" placeholder="Enter Phone No">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="0">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        <div class="mb-3">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </div>
</form> -->
							</div>
						</div>
					</div>
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