<?php
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 		</head>
 		<body>
 			<div class="container" align="center">
	 			<div class="row">
	 				<div class="col-md-4"></div>
	 				<div class="col-md-4">
		 				<h1>Login</h1><br>
		 				<?php echo form_open('login/cekLogin')?>
		 				<?php echo validation_errors();?>

		 				<div class="form-group">
		 					<label>Username<font color="red">*</font></label>
		 					<input type="text" class="form-control" id="username" name="username" placeholder="input field">
		 				</div>
		 				<div class="form-group">
		 					<label>Password<font color="red">*</font></label>
		 					<input type="password" class="form-control" id="password" name="password" placeholder="input field">
		 				</div>
		 				<div class="form-group">
		 					<button type="submit" class="btn btn-primary">	Login</button>
		 					<?php echo form_close(); ?>
		 					<?php echo "<a href='".base_url('index.php/login/create')."' class='btn btn-primary' >Sign up</a>"; ?>
		 				</div>
		 			</div>
		 			<div class="col-md-4"></div>
	 			</div>
	 		</div>

 			<!-- jQuery -->
 			<script src="//code.jquery.com/jquery.js"></script>
 			<!-- Bootstrap JavaScript -->
 			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 			<script src="Hello World"></script>
 		</body>
 		</html>