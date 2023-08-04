

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant - login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid" style="padding: 0;">
		
				<!-- <form class="form-inline ml-auto">
		    		<a href="register.php" class="text-white" style="text-decoration: none;"><span class="fa fa-user"></span> Signup</a>
		  		</form>
			</div>
		</nav> -->
		<div class="col-md-8 mx-auto">
			<h2 class="text-center text-inverse mb-4 mt-4"> Admin Login</h2>
		</div>
		<div class="text-center text-success mb-4">
		</div>
		<div class="col-md-6 mx-auto">
			<form method="POST" action="" class="needs-validation" name="f1" onsubmit = "return validation()" novalidate>
  				<div class="form-row">
    				<div class="col-md-12 mb-3">
      					<label for="validationCustom03">Username</label>
      					<input type="text" name="username" class="form-control" id="validationCustom03" placeholder="Enter Username" required>
      					<div class="invalid-feedback">
        					Enter Username.
      					</div>
    				</div>
				    <div class="col-md-12 mb-3">
				    	<label for="validationCustom04">Password</label>
				    	<input type="password" name="password" class="form-control" id="validationCustom04" placeholder="Password" required>
				    	<div class="invalid-feedback">
				        	Enter Password.
				      	</div>
				    </div>
  				</div>
				  <input type="submit" class="btn btn-primary w-100 " name="submit" value="Login">
			</form>
		</div>
	</div>

	<script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
    </script>  

<?php
    //Creating Connection With Database
    include("config.php");
    session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 

      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = md5('$mypassword')";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		// $_SESSION['id'] = $id;
		// echo 'Welcome ' . $_SESSION['name'] . '!';
         
        header("location: dashboard.php");
      }else {
        //  $error 
		echo '<script>alert("Your Login Name or Password is invalid");<script>';
      }
   }
?>
</body>
</html>