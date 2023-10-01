<?php

// require_once("..database/connection/db.php");
session_start();

if(empty($_SESSION['admin_id'])) {
  header("Location:index.php");
  exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Jayga - Add User</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="index.php" class="logo"> <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo"> <span class="logoclass">Jayga Admin Panel</span> </a>
				<a href="index.php" class="logo logo-small"> <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<!-- <div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">International Software
													Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
													XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Mercury Software
													Inc</span> added a new product <span class="noti-title">Apple
													MacBook Pro</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div> -->
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt=""></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>Jayga Admin</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> <a class="dropdown-item" href="profile.php">My Profile</a> <a class="dropdown-item" href="settings.php">Account Settings</a> <a class="dropdown-item" href="crud/logout.php">Logout</a> </div>
				</li>
			</ul>
		</div>
	<?php require("header.php"); ?>
	
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add User</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="crud/create-user.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>User Name</label>
										<input class="form-control" name="name" type="text" > </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>User Email</label>
										<input class="form-control"  name="email" type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Phone number</label>
										<input class="form-control"  name="phone" type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>User NID</label>
										<input class="form-control"  name="nid" type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Birth Date</label>
										<div class="cal-icon">
											<input type="Date"  name="birthdate" class="form-control"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>User Adress</label>
										<input class="form-control"  name="address" type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Upload User Picture</label>
										<div class="custom-file mb-3">
										<!-- <input type="file" class="custom-file-input" name="user_pic[]" multiple onchange="displayFileNames(event)">
  												<div id="file-names"></div> -->
											<input type="file" name="user_pic[]" class="form-control input-lg" multiple >
											<!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Upload User NID</label>
										<div class="custom-file mb-3">
											<!-- <input type="file" class="custom-file-input" name="user_nid[]" multiple onchange="displayFileNames(event)">
  												<div id="file-names"></div> -->
											<input type="file" name="user_nid[]" class="form-control input-lg" multiple >
											<!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
									<div class="custom-file mb-3">
										
										</div>	
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
									<div class="custom-file mb-3">
										<br>
									<label>
									<input type="checkbox" name="a_host" value= 1 checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
										Are you a Host?
									</label>
										</div>	
									</div>
								</div>								
							</div>
							<button type="post" class="btn btn-primary buttonedit1">Create User</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>

</body>

</html>