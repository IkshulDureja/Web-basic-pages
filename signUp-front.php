<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row bg-success">
			<div class="col-md-12">
				<center><h3>User Profile</h3></center>
			</div>
		</div>
	<form action="signUp-process.php" method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="col-md-6 form-group">
				<label for="">User-Name</label>
				<input type="text" class="form-control" name="txtName">
			</div>
			<div class="col-md-6 form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="txtPwd">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-6 form-group">
				<label for="">Roll-No</label>
				<input type="text" class="form-control" name="txtRoll">
			</div>
			<div class="col-md-6 form-group">
				<label for="">Mobile Number</label>
				<input type="text" class="form-control" name="txtMob">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12 form-group">
				<label for="">Email-Id</label>
				<input type="text" class="form-control" name="txtEmail">
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="col-md-4">
				<label for="">Select Profile Pic</label>
			</div>
			<div class="col-md-4">
				<input type="file" name="profilePic" id="">
			</div>
		</div>
		
		<div class="form-row">
			<div class="col-md-12">
			<center>
				<input type="submit" value="Register" name="btn" class="btn btn-danger" style="width:100px">
<!--				<input type="submit" value="Delete" name="btn" class="btn btn-danger" style="width:100px">-->
			</center>
			</div>
		</div>
	</form>	
	</div>
</body>
</html>