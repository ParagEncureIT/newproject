<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">

	.container .panel .panel-body .row {
		border: solid 1px #ccc;
		margin-top: -13px;
		line-height: 20px;
	}
	.container .panel .row .col-md-12 .panel-heading{
		border: solid 1px #ccc;
		height: 48px;
		margin-top: 10px;
		background-color: #f2f2f2;
	}

	.container .panel .row .col-md-12 .panel-heading a{
		color:  #111;
		font-size: 17px;

	}

	.container .panel .panel-body .row .col-md-12 .heading{
		font-size: 16px;
		font-weight: 700px;
		margin-top: 8px;
	}

	.container .panel .panel-body .row .bg-primary{
		height: 35px;
	}

	.container .panel .row .col-md-12 .panel-heading a:hover{
		text-decoration: none;
		text-underline-position: none;
	}

	.action{
		width: 20px;
		height: 20px;
	}
</style>
</head>
<body>
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
				<div class="col-md-12 bg-primary">
					<div class="col-md-1 heading">S. No</div>
					<div class="col-md-2 heading">Full Name</div>
					<div class="col-md-2 heading">Gender</div>
					<div class="col-md-3 heading">Email ID</div>
					<div class="col-md-2 heading">State</div>
					<div class="col-md-1 heading"><img class="action" src="<?=base_url() ?>assets/image/edit.png"></div>
					<div class="col-md-1 heading"><img class="action"  src="<?=base_url() ?>assets/image/delete.png"></div>
				</div>
				<div class="col-md-12">
					<?php
					$sr_no=1;
					foreach ($data as $key => $value) {?>
						
					<div class="col-md-1"><?= $sr_no; ?></div>
					<div class="col-md-2"><?= $value->full_name;?></div>
					<div class="col-md-2"><?= $value->gender;?></div>
					<div class="col-md-3"><?= $value->email;?></div>
					<div class="col-md-2"><?= $value->state;?></div>
					<div class="col-md-1 heading"><a href="<?= base_url() ?>welcome/edit/<?php echo $value->id; ?>"><img class="action" src="<?=base_url() ?>assets/image/edit.png"></a></div>
					<div class="col-md-1 heading"><a href="<?= base_url('welcome/delete/$value["id"];') ?>"><img class="action" src="<?=base_url() ?>assets/image/delete.png"></a></div>
				<?php $sr_no++;	} ?>
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>