<?php  include('studentlogin.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student_setting</title>
	<link rel="stylesheet"
		href="student.css">
	<link rel="stylesheet"
		href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Student Dashboard</div>
			<!-- <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> -->

				<div>
			<a target="_blank" href="./RazorPay/payment-form.php"><button class="bn">Payment</button></a>
		
			<a target="_blank" href="./notice/view_notice.php"><button class="btttn">Notice</button></a>
		</div>
		</div>
		<a href="Home.php"><button class="btn"><i class="fa fa-home"></i></button></a>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="Student_profile.php"><div class="nav-option option">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3 class="menutext"> Profile</h3>
					</div></a>

					<a href="Student_Library.php"><div class="nav-option option">
						<img src=
"image/Library_icon.png"
							class="nav-img"
							alt="articles">
						<h3 class="menutext">Library</h3>
					</div></a>

					<a href="Student_result.php"><div class="nav-option option">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3 class="menutext">Result</h3>
					</div></a>

					<a href="Student_fee.php"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext">Fees</h3>
					</div></a>

					<a href="Student_routine.php"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext">Routine</h3>
					</div></a>

					<a href="Student_setting.php"><div class="nav-option option6">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3> Settings</h3>
					</div></a>

					<a href="Student_logout.php"><div class="nav-option logout">
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
			<form action="confirmpass.php" method="post">

				<div class="report-container">
					<div class="report-header">
						<h1 class="recent-Articles">Change Password</h1>
						<!-- <button class="view">View All</button> -->
					</div>
					<br>
					<input type="hidden" name="UserId" value="<?php echo $_SESSION['userid'];?>">
					<label>Old Password</label>
					<input type="password" required
						name="op"
						placeholder="Old Password">
						<br>

					<label>New Password</label>
					<input type="password" required
							name="password"
							placeholder="New Password">
							<br>
							
					<label>Confirm Password</label>
					<input type="password" required
							name="cpassword"
							placeholder="Confirm New Password">
							<br>
					
					<input type="submit" name="submit" value="Change" class="changebtn">
					<!-- <a href="Home.php" class="ca">Home</a> -->
					<p style="color:red;"><?php echo $message; ?></p>
				</div>
			</form>

		</div>
	</div>


<script src="./index.js"></script>
</body>
</html>
