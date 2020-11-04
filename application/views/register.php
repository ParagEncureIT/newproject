<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">

	.error{
		color: red;
		font-weight: 525;
	}
	.container .panel .panel-body .row {
		border: solid 1px #ccc;
		margin-top: -13px;
		line-height: 20px;
	}
	.container .panel .row .col-md-12 .panel-heading{
		border: solid 1px #ccc;
		height: 48px;
		margin-top: 10px;
	}

	.container .panel .row .col-md-12 .panel-heading a{
		color:  #111;
		font-size: 17px;

	}

	.container .panel .row .col-md-12 .panel-heading{
		border: solid 1px #ccc;
		height: 48px;
		margin-top: 10px;
		background-color: #f2f2f2;
	}


	.container .panel .panel-body .row .form-control {
		width: 500px;
	}

	
	.container .panel .panel-body .row .form-group .col-md-3{
		margin-top: 8px;
		font-size: 15px;
		font-weight: 600;
		text-align: center;
	}

	.container .panel .row .col-md-12 .panel-heading a:hover{
		text-decoration: none;
		text-underline-position: none;
	}

	.container .panel .panel-body .row .data {
		
		padding: 20px;
		margin-top: 15px;
	}
	
	.btn {
		width: 200px;
	}
</style>
</head>
<body>
	<form action="<?= base_url('User/create') ?>" method="post">
	<div class="container">
		<div class="panel">
			<div class="row">
				<div class="col-md-12">
					<div class="panel-heading">
						<div class="col-md-1"></div>
						<div class="col-md-2"><a href="<?= base_url('welcome/add') ?>">Register</a></div><div class="col-md-1">|</div>
						<div class="col-md-2"><a href="<?= base_url('welcome/index') ?>">View Records</a></div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="data form-group">
							<div class="col-md-3">Full Name</div>
							<div class="col-md-1">
							<!-- <span class="error" id="err_name"></span>-->&nbsp;</div> 
							<div class="col-md-8">
								<input type="text" name="txtFullname" id="fullname" class="form-control input-md" placeholder="Full Name..." 
								value="<?php if(!empty(set_value('txtFullname'))) {
								 				echo set_value('txtFullname')} ?> ">
								<span class="error"><?= form_error('txtFullname'); ?><span>
							</div>
						</div>
						<div class="data form-group">
							<div class="col-md-3">Gender</div>
							<div class="col-md-1">
							<!-- <div class="error" id="err_gender"> -->
							</div>
							<div class="col-md-8">
								<select name="selGender" id="selGender" class="form-control input-md" >
									<option value="select">Select</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
								<span class="error"><?= form_error('selGender'); ?><span>
							</div> 
						</div>
						
						<div class="data form-group">
							<div class="col-md-3">Email ID</div>
							<div class="col-md-1">
								<!-- <div class="error" id="err_email"></div> -->
							</div>
							<div class="col-md-8">
								<input type="email" name="email" id="email" class="form-control input-md" placeholder="Email ID..."  value="<?= set_value('email') ?> ">
								<span  class="error"><?= form_error('email'); ?></span>
							</div> 
						</div>
						<div class="data form-group">
							<div class="col-md-3">Password</div><div class="col-md-1">
								<!-- <div class="error" id="err_pass"></div> -->
							</div>
							<div class="col-md-8">
								<input type="password" name="password" id="password" class="form-control input-md" placeholder="Password..."  value="<?= set_value('password') ?> ">
								<span class="error"><?= form_error('password'); ?></span>
						</div> 
						</div>
						<div class="data form-group">
							<div class="col-md-3">State</div><div class="col-md-1">
							<!-- <div class="error" id="err_state"></div> -->
							</div>
							<div class="col-md-8">
								<select name="selState" id="selState" class="form-control input-md">
									<option value="">Select</option>
									<option value="maharashtra">Maharashtra</option>
									<option value="karnataka">Karnataka</option>
									<option value="gujrat">Gujrat</option>
								</select>
								<span class="error"><?= form_error('selState'); ?></span>
						</div> 
						</div>
						<div class="data form-group">
							<div class="col-md-3">City</div><div class="col-md-1">
							<!-- <div class="error" id="err_city"></div> --></div>
							<div class="col-md-8">
								<select name="selCity" id="selCity" class="form-control input-md">
									<option value="">Select</option>
									<option value="nagpur">Nagpur</option>
									<option value="mumbai">Mumbai</option>
									<option value="pune">Pune</option>
									<option value="bangalore">Bangalore</option>
									<option value="ahmadabad">Ahmadabad</option>
									<option value="surat">Surat</option>
								</select>
								<span class="error"><?= form_error('selCity'); ?></span>
						</div> 
						</div>
						<div class="data form-group">
							<div class="col-md-3">Branch</div><div class="col-md-1">
							<!-- <div class="error" id="err_branch"></div> --></div>
							<div class="col-md-8">
								<select name="selBranch" id="selBranch" class="form-control input-md">
									<option value="">Select</option>
									<option value="art">Art</option>
									<option value="science">Science</option>
									<option value="commmerce">Commmerce</option>
								</select>
								<span class="error"><?= form_error('selBranch'); ?></span>
						</div> 
						</div>
						<div class="data form-group">
							<div class="col-md-4"></div>
							<div class="col-md-3">
								<button class="btn btn-primary input-md" onclick="return validate()">Register</button>
							</div>
							<div class="col-md-3">
								<button class="btn btn-danger input-md">Cancel</button>
							</div><br> <br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	// function validate()
	// {
	// 	var name = $("#fullname").val();
	// 	var gender = $("#selGender").val();
	// 	var email = $("#email").val();
	// 	var password = $("#password").val();
	// 	var state = $("#selState").val();
	// 	var city = $("#selCity").val();
	// 	var branch = $("#selBranch").val();

	// 	if(name =="")
	// 	{
	// 		$("#err_name").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_name").fadeOut("&nbsp;");},2000)
	// 		$("#fullname").focus();
	// 		return false;
	// 	}

	// 	if(gender =="")
	// 	{
	// 		$("#err_gender").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_gender").fadeOut("&nbsp;");},2000)
	// 		$("#selGender").focus();
	// 		return false;
	// 	}

	// 	if(email =="")
	// 	{
	// 		$("#err_email").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_email").fadeOut("&nbsp;");},2000)
	// 		$("#email").focus();
	// 		return false;
	// 	}

	// 	if(password =="")
	// 	{
	// 		$("#err_pass").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_pass").fadeOut("&nbsp;");},2000)
	// 		$("#password").focus();
	// 		return false;
	// 	}

	// 	if(state =="")
	// 	{
	// 		$("#err_state").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_state").fadeOut("&nbsp;");},2000)
	// 		$("#selState").focus();
	// 		return false;
	// 	}

	// 	if(city =="")
	// 	{
	// 		$("#err_city").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_city").fadeOut("&nbsp;");},2000)
	// 		$("#selCity").focus();
	// 		return false;
	// 	}


	// 	if(branch =="")
	// 	{
	// 		$("#err_branch").fadeIn().html("*").css('color','red').css('font-size','25px');
	// 		setTimeout(function(){$("#err_branch").fadeOut("&nbsp;");},2000)
	// 		$("#selBranch").focus();
	// 		return false;
	// 	}

	//}
</script>
</body>
</html>