


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN | SINPADA</title>
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x961.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">

</head>
<body>
<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default panel-login">
			<div class="panel-heading">
				<h3>LOGIN ADMINISTRATOR</h3>
			</div>
			<div class="panel-body">
			<?php if(isset($_SESSION['gagal'])):
      		 ?>
         		 <div class="alert alert-danger alert-dismissible fade show" role="alert">
          		 Username atau Password Tidak Ditemukan.!
    			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      	<?php  
          session_destroy();
          endif;
		?>
				<form action="cek_login.php" method="POST">
			   <div class="form-group">
					 <label>Username</label>
					 <div class="input-group">
						  <span class="input-group-addon"><i class="fa fa-user"></i></span>
						  <input type="text" class="form-control" name="username" placeholder="Username">
					 </div>
				  </div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-block btn-primary">LOGIN <i class="fa fa-sign-in"></i></button>
					</div>
				</form>
		  </div>
		</div>
	</div>
</div>
</body>
</html>