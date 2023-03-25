<?php
	session_start();
?>
<html>
	<head>
		<title >
			Welcome Administrator
		</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<style>
			body{
				background-image:url(images/aeroplane.jpg) ;
				background-repeat: no-repeat;
                background-size: 100%;
			}
		</style>
	</head>
	<body>
		
		<h1 id="title">
			FLYWAY	</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2 style="color:white;">Welcome Administrator!</h2>
		<a class="btn btn-primary btn js-scroll px-4" href="add_flight_details.php" role="button"><i class="fa fa-plane" aria-hidden="true"></i> Add flight.</a><br><pre></pre>
		<a class="btn btn-primary btn js-scroll px-4" href="admin_view_booked_tickets.php" role="button"><i class="fa fa-plane" aria-hidden="true"></i> Booked tickets.</a><br><pre></pre>
		<a class="btn btn-primary btn js-scroll px-4" href="delete_flight_details.php" role="button"><i class="fa fa-plane" aria-hidden="true"></i> Delete flight.</a><br><pre></pre>
		<a class="btn btn-primary btn js-scroll px-4" href="add_jet_details.php" role="button"><i class="fa fa-plane" aria-hidden="true"></i> Add aircraft.</a><br><pre></pre>
		<a class="btn btn-primary btn js-scroll px-4" href="activate_jet_details.php" role="button"><i class="fa fa-plane" aria-hidden="true"></i> Activate aircraft.</a><br><pre></pre>
		<a class="btn btn-primary btn js-scroll px-4" href="deactivate_jet_details.php" role="button"><i class="fa fa-plane" aria-hidden="true"></i> Deactivate aircraft.</a>
	</body>
</html>