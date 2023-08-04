<?php
  include ('config.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Restaurant - add menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	<style>
		/* ------------------------ Vertical Navbar -------------------------- */

.nav-side-menu {
    z-index: 2;
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: #2e353d;
    position: fixed;
    top: 0px;
    width: 0px;
    height: 100%;
    color: #e1ffff;
    transition: 0.5s;
  }
  
  .fa-caret-down{
    float: right;
    padding-top: 10px;
  }
  
  .nav-side-menu .brand {
    background-color: #0772E4;
    line-height: 50px;
    display: block;
    text-align: center;
    font-size: 16px;
  }
  
  .nav-side-menu .toggle-btn {
    display: none;
  }
  
  .nav-side-menu ul,
  .nav-side-menu li {
    list-style: none;
    padding: 0px;
    margin: 0px;
    line-height: 35px;
    cursor: pointer;
  }
  
  .nav-side-menu ul :not(collapsed) .arrow:before,
  .nav-side-menu li :not(collapsed) .arrow:before {
    font-family: FontAwesome;
    content: "\f078";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    /* float: right; */
  }
  
  .nav-side-menu ul .active,
  .nav-side-menu li .active {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
  }
  
  .nav-side-menu ul .sub-menu li.active,
  .nav-side-menu li .sub-menu li.active {
    color: #d19b3d;
  }
  
  .nav-side-menu ul .sub-menu li.active a,
  .nav-side-menu li .sub-menu li.active a {
    color: #d19b3d;
  }
  
  .nav-side-menu ul .sub-menu li,
  .nav-side-menu li .sub-menu li {
    background-color: #181c20;
    border: none;
    line-height: 28px;
    border-bottom: 1px solid #23282e;
    margin-left: 0px;
  }
  
  .nav-side-menu ul .sub-menu li:hover,
  .nav-side-menu li .sub-menu li:hover {
    background-color: #020203;
  }
  
  .nav-side-menu ul .sub-menu li:before,
  .nav-side-menu li .sub-menu li:before {
    font-family: FontAwesome;
    content: "\f111";
    color: #fff;
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
  }
  
  .nav-side-menu li {
    padding-left: 0px;
    border-left: 3px solid #2e353d;
    border-bottom: 1px solid #23282e;
  }
  
  .nav-side-menu li a {
    text-decoration: none;
    color: #e1ffff;
  }
  
  .nav-side-menu li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
  }
  
  .nav-side-menu li:hover {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
  }
  
  /* ------------------- Content Menu ----------------------- */
  
  .content-wrapper{
    position: absolute;
    width: 100%;
    transition: 0.5s;
  }
  
  .container-fluid{
    padding: 0;
    margin: 0;
  }
  
  nav{
    width: 100%;
    background-color: #3996F9;
    padding: 10px 20px;
    line-height: 30px;
  }
  
  nav .fa-bars{
    color: #fff;
  }
  
  .below-toggle-content{
    padding: 15px;
  }
  
  .below-toggle-content .col-md-3{
    flex: 0 0 24%;
    width: 24%;
  }
  
  form{
    margin: 0px 15px 10px 15px;
    margin-left: 0%;
    border: 1px solid #999;
    border-radius: 2px;
    box-shadow: 0px 6px 10px #666;
    padding: 3;
    width: 100vw;
  }
  
  .top-part p{ color: #777; font-weight: 500; }
  
  .total-products, .total-orders, .total-users, .total-stores{
    background-color: #47D4FF;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
  }
  
  .total-orders{
    background-color: #54FF3D;
  }
  
  .total-users{
    background-color: #FFDD33;
  }
  
  .total-stores{
    background-color: #FF4229;
  }
  
  .total-products .fa-shopping-cart, 
  .total-orders .fa-chart-bar,
  .total-users .fa-users,
  .total-stores .fa-store{
    color: #fff;
    font-size: 50px;
    padding: 30px 20px 0px 0px;
    transition: 0.4s;
  }
  
  .total-products:hover .fa-shopping-cart,
  .total-orders:hover .fa-chart-bar,
  .total-users:hover .fa-users,
  .total-stores:hover .fa-store{
    transform: scale(1.08);
  }
  
  /* -------------------- Toggle Button --------------------- */
  
  .wrapper.menuDisplayed .nav-side-menu{
    width: 300px;
  }
  
  .wrapper.menuDisplayed .content-wrapper{
    padding-left: 300px;
  }
  
  /* ---------------------------- Media Queries -------------------------------- */
  
  @media screen and (max-width: 900px) {
    .nav-side-menu {
      position: relative;
      width: 100% !important;
      margin-bottom: 10px;
    }
  
    .nav-side-menu .toggle-btn {
      display: block;
      cursor: pointer;
      position: absolute;
      right: 10px;
      top: 10px;
      z-index: 10 !important;
      padding: 3px;
      background-color: #ffffff;
      color: #000;
      width: 40px;
      text-align: center;
    }
  
    .brand {
      text-align: left !important;
      font-size: 22px;
      padding-left: 20px;
      line-height: 50px !important;
    }
  
    .content-wrapper{
      padding-left: 15px !important;
    }
  
    nav{
      display: none;
    }
  }
  
  @media screen and (min-width: 900px) {
    .nav-side-menu .menu-list .menu-content {
      display: block;
    }
  }
  body {
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
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
						<nav>
							<a href="#" id="toggle"><i class="fas fa-bars ml-3"></i></a>
						</nav>
						<div class="below-toggle-content">
							<div class="col-md-12">
								<div class="top-part mb-3">
									<h2 class="d-inline">Add</h2>
									<p class="d-inline ml-2">Menu</p>
									<a href="dashboard.php" class="d-inline text-dark mt-2" style="text-decoration: none; float: right; font-weight: 500;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
								</div>
								
								<div class="row">
                  
									<form method="POST" action="backend/add_menu_be.php" class="p-3" enctype="multipart/form-data">
                                    
										<div class="form-group">
									    	<label for="food-name" style="font-weight: 600;">Food Name</label>
									    	<input type="text" name="food-name" class="form-control shadow-none" id="food-name" placeholder="Enter Food Name">
									  	</div>
									  	<div class="form-group">
									    	<label for="price" style="font-weight: 600;">Price</label>
									    	<input type="text" name="price" class="form-control shadow-none" id="price" placeholder="Enter Capacity of The table">
									  	</div>
                      <div class="form-group">
                                    <div class="mb-3">
                                      Select image to upload:
                                      <input type="file" name="photo">
                                    </div>
									  	</div>
									  	<button type="submit" name="submit" class="btn btn-primary" id="save">Add</button>
									  	<button name="cancel" class="btn btn-danger">Cancel</button>
									</form>
								</div>
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

</body>
</html>