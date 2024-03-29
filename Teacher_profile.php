<?php  include('teacherprofile.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Teacher_Profile</title>
	<link rel="stylesheet"
		href="admin.css">
	<link rel="stylesheet"
		href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Dashboard</div>
			<div>
				<a target="_blank" href="./notice/admin/notice.php"><button class="btttn">Create Notice+</button></a>
			</div>
				
				
		</div>

		
		<div>
		<a href="Teacher_profile.php"><button class="btn"><i class="fa fa-home"></i></button></a>
		<!-- <a href="./notice/admin/create_notice.php"><img src="./image/notification.png" alt="" style="width: 25%; right: 10%;"></a> -->
		</div>
		
		
	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="Teacher_profile.php"><div class="nav-option option1">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3> Profile</h3>
					</div></a>

					<a href="Teacher_student.php?branch=all"><div class="nav-option option">
						<img src=
"image/Teacher Student.png"
							class="nav-img"
							alt="articles">
						<h3 class="menutext"> Student</h3>
					</div></a>

					<a href="Teacher_result.php"><div class="nav-option option">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3 class="menutext">Result</h3>
					</div></a>

					<a href="Teacher_fee.php"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Teacher_routine.php"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext"> Routine</h3>
					</div></a>

					<a href="Teacher_setting.php"><div class="nav-option option">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3 class="menutext"> Settings</h3>
					</div></a>

					<a href="Teacher_logout.php"><div class="nav-option logout">
						<img src=
"image/Logout_icon.png"
							class="nav-img"
							alt="logout">
						<h3 class="menutext">Logout</h3>
					</div></a>

				</div>
			</nav>
		</div>
		<div class="main">


			<div class="wrapper">
				<div class="left">
				   <img src="image/img0.png" alt="user" width="100">
					<!-- <h4>Swati Nadkarni</h4> -->
					<p><?php echo $Fname; ?></p>
					<p><?php echo $Lname; ?></p>
					 
				</div>
				<div class="right">
					<div class="info">
						<h3>Information</h3>
						<div class="info_data">
						  <div class="data">
							<h4>Position</h4>
							 <p><?php echo $position; ?></p>
						</div>
							 <div class="data">
								<h4>E-mail</h4>
								<p><?php echo $email; ?></p>
							 </div>
							 <div class="data">
							   <h4>Reg No.</h4>
								<p><?php echo $RegNo; ?></p>
						  </div>
							<div class="data">
							  <h4>Branch</h4>
							   <p><?php echo $Branch; ?></p>
			
							</div>
							<div class="data">
							  <h4>Gender</h4>
							   <p><?php echo $Gender; ?></p>
						  </div>
						  <div class="data">
							<h4>Years of Experience</h4>
							 <p><?php echo $Exp; ?></p>
						</div>
						<a href="Teacher_profile_edit.php"><button class="bttn">Edit</button></a>
							
						</div>
					</div>
				  
				 
					
				</div>
			</div>
			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
