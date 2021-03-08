<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery-1.8.2.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#txtUid").blur(function() {
				//used for AJAX request
				var uid = $("#txtUid").val();
				var actionUrl = "ajax-check-uid.php?x=" + uid;
				$.get(actionUrl, function(response) {
					$("#errUid").html(response);
				});
			});
			//==-=-=-==-=-

			$(document).ajaxStart(function() {
				$("#wait").show();
			});

			$(document).ajaxStop(function() {
				$("#wait").hide();
			});

			//--=-=-=-=-JSON=-=-=-=-=-=-=-=-=
			$("#btnFetchProfile").click(function() {
				var uid=$("#txtUid").val();
				var url="json-fetch-profile.php?userid="+uid;
				//0 or 1 possibility
				$.getJSON(url, function(jsonAryResponse) {
					alert(JSON.stringify(jsonAryResponse));
					//alert(jsonAryResponse.length);
					if(jsonAryResponse.length==0)
						alert("invalid id");
					else
						{
							$("#txtPwd").val(jsonAryResponse[0].pwd);//use table col. name
							$("#txtMob").val(jsonAryResponse[0].mob);//use table col. name
							$("#txtDos").val(jsonAryResponse[0].dos);//use table col. name
							$("#prev").attr("src","uploads/"+jsonAryResponse[0].picname);

						}
				});
			});
            

		});

	</script>
	<style>
		#wait {
			width: 100px;
			height: 100px;
			background-image: url(pics/wait.gif);
			background-size: contain;
			display: none;
			position: absolute;
			left: 40%;
			top: 20%;
			z-index: 10;
		}

	</style>
</head>

<body>
	<div id="wait"></div>
	<div class="container">
		<div class="row bg-success">
			<div class="col-md-12">
				<center>
					<h3>User Profile</h3>
				</center>
			</div>
		</div>
		<form action="php-profile-process.php" method="post" enctype="multipart/form-data">
			<div class="form-row">
				<div class="col-md-4 form-group">
					<label for="">Email/User id</label>
					<input type="text" id="txtUid" class="form-control" name="txtUid">
					<span id="errUid">*</span>
				</div>
				<div class="col-md-2 form-group">
					<label for="">&nbsp;</label>
					<input type="button" id="btnFetchProfile" class="form-control btn btn-secondary" value="Fetch Profile">

				</div>
				<div class="col-md-6 form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="txtPwd" id="txtPwd">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 form-group">
					<label for="">Date Of Signup</label>
					<input type="date" class="form-control" name="txtDos" id="txtDos">
				</div>
				<div class="col-md-6 form-group">
					<label for="">Mobile Number</label>
					<input type="text" class="form-control" name="txtMob" id="txtMob">
				</div>
			</div>


			<div class="form-row">
				<div class="col-md-4">
					<label for="">Select Profile Pic</label>
				</div>
				<div class="col-md-4">
					<input type="file" name="profilePic" id="profilePic">
				</div>
				<div class="col-md-4">
					<img src="pics/1.jpg"     id="prev" width="50" height="50" alt="">
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-12">
					<center>
						<input type="submit" value="Signup" name="btn" class="btn btn-danger" style="width:100px">
						<input type="submit" value="Update" name="btn" formaction="update-data.php" class="btn btn-danger" style="width:100px" >
						<input type="submit" value="Delete" name="btn" class="btn btn-danger" style="width:100px">
						<input type="submit" value="Show All Records" formaction="php-profile-all-users.php" name="btn" class="btn btn-success" style="width:150px">
					</center>
				</div>
			</div>
		</form>
	</div>
</body>

</html>
