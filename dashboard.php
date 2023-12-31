<?php
	include('session.php');
	include('config.php');

	$qry = "SELECT * FROM food";
	$sql2= "SELECT * FROM tables";
	$sql3 = "SELECT * FROM orders";

	$result = mysqli_query($con,$qry);
	$result2 = mysqli_query($con, $sql2);
	$result3 = mysqli_query($con, $sql3);

	$total = 0;
	while($row = mysqli_fetch_assoc($result3))	{
		$total = $total + $row['amount'];
	}
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
	integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
	 crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.total-products .fa-utensils, 
  .total-orders .fa-chart-bar,
  .total-users .fa-table,
  .total-stores .fa-dollar-sign{
    color: #fff;
    font-size: 50px;
    padding: 30px 20px 0px 0px;
    transition: 0.4s;
  }
  
  .total-products .fa-utensils, 
  .total-orders .fa-chart-bar,
  .total-users .fa-table,
  .total-stores .fa-dollar-sign{
    transform: scale(1.08);
  }
	</style>
</head>
<body>
<div class="wrapper">

	<!-- Sidebar -->

	<div class="nav-side-menu">
		<div class="brand">Admin</div>
		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		<div class="menu-list">
			<ul id="menu-content" class="menu-content collapse out">
				<li class="active">
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

				<li>
					<a href="tables.php">
						<i class="fa fa-table fa-lg"></i> Table
					</a>
				</li>

				<li data-toggle="collapse" data-target="#products" class="collapsed">
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
					<nav>
						<a href="#" id="toggle"><i class="fas fa-bars ml-3"></i></a>
					</nav>
					<div class="below-toggle-content">
						<div class="col-md-12">
							<div class="top-part mb-3">
								<h2 class="d-inline">Dashboard</h2>
								<p class="d-inline ml-2">Control Panel</p>
							</div>
							<div class="row">
								<div class="col-md-3 mx-auto total-products">
									<div class="row">
										<div class="col-md-8">
											<h1 class="text-white"><?php echo $result->num_rows; ?></h1>
											<h5 class="text-white">Total Menus</h5>
										</div>
										<div class="col-md-4 text-right">
											<i class="fa-solid fa-utensils"></i>
										</div>	
									</div>
									<a href="product.php" class="btn btn-primary btn-sm w-100 mt-4 mx-auto text-center">View Menu <i class="fas fa-arrow-circle-right"></i></a>
								</div>
								<div class="col-md-3 mx-auto total-orders">
									<div class="row">
										<div class="col-md-8">
											<h1 class="text-white"><?php echo $result3->num_rows; ?></h1>
											<h5 class="text-white">Total Orders</h5>
										</div>
										<div class="col-md-4 text-right">
											<i class="fas fa-chart-bar"></i>
										</div>	
									</div>
									<a href="report.php" class="btn btn-success btn-sm w-100 mt-4 mx-auto text-center">View Paid Orders <i class="fas fa-arrow-circle-right"></i></a>
								</div>
								<div class="col-md-3 mx-auto total-users">
									<div class="row">
										<div class="col-md-8">
											<h1 class="text-white"><?php echo $result2->num_rows; ?></h1>
											<h5 class="text-white">Total Tables</h5>
										</div>
										<div class="col-md-4 text-right">
											<i class="fa-solid fa-table"></i>
										</div>	
									</div>
									<a href="tables.php" class="btn btn-warning btn-sm w-100 mt-4 mx-auto text-center text-white">View Tables <i class="fas fa-arrow-circle-right"></i></a>
								</div>
								<div class="col-md-3 mx-auto total-stores">
									<div class="row">
										<div class="col-md-8">
											<h1 class="text-white">Rs.<?php echo $total; ?></h1>
											<h5 class="text-white">Total Transaction</h5>
										</div>
										<div class="col-md-4 text-right">
											<i class="fa-solid fa-dollar-sign"></i>
										</div>	
									</div>
									<a href="order.php" class="btn btn-danger btn-sm w-100 mt-4 mx-auto text-center">View Orders <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					
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
</body>
</html> 