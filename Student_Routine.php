<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student_routine</title>
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
		


		<!-- <div class="searchbar"> -->
			<!-- <input type="text" -->
				<!-- placeholder="Search"> -->
			<!-- <div class="searchbtn"> -->
			<!-- <img src=
"image/Home button.png"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div> -->

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="student_profile.php"><div class="nav-option option">
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

					<a href="Student_Result.php"><div class="nav-option option">
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
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Student_Routine.php"><div class="nav-option option5">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 > Routine</h3>
					</div></a>

					<a href="student_setting.php"><div class="nav-option option">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3 class="menutext"> Settings</h3>
					</div></a>

					<a href="student_logout.php"><div class="nav-option logout">
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

			<form>
				<div class="report-container">
					<div class="report-header">
						<h1 class="recent-Articles">TimeTable</h1>
						<!-- <button class="view">View All</button> -->
					</div>
					<br>
					<div class="box-container">

						<div class="box box1">
							<a target="_blank" href="https://drive.google.com/file/d/1KhQbcNyelfp65CpPuffjNLrTH9_maTMf/view?usp=share_link"><div class="text">
								<h2 class="topic-heading">First Year</h2>
								<h2 class="topic"></h2>
							</div></a>
		
						</div>
		
						<div class="box box2">
							<a target="_blank" href="https://drive.google.com/file/d/1NU8CM2TyyCCIqne5tnDFH8OTC67aR2y6/view?usp=share_link"><div class="text">
								<h2 class="topic-heading">Second Year</h2>
								<h2 class="topic"></h2>
							</div></a>
		
						</div>
		
						<div class="box box3">
							<a target="_blank" href="https://drive.google.com/file/d/1NYrdI229nEvuIjWY300QPKGw51agNY-s/view?usp=share_link"><div class="text">
								<h2 style="text-decoration: none;" class="topic-heading">Third Year</h2>
								<h2 class="topic"></h2>
							</div></a>
		
						</div>
		
						<div class="box box4">
							<a target="_blank" target="_blank" href="https://drive.google.com/file/d/1NTRvI8IDuRB7_-19VtG7G0vxh4JJDA9l/view?usp=share_link"><div class="text">
								<h2 class="topic-heading">Fouth Year</h2>
								<h2 class="topic"></h2>
							</div></a>
		
						</div>
					</div>
					<br>
					
			</form>

			
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
