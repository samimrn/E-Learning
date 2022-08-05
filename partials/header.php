<?php include('config/constants.php'); ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Oncoustd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<link rel="stylesheet" class="js-glass-style" href="css/glass.css" disabled> 
	<link rel="stylesheet" class="js-color-style" href="css/colors/color-1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<!--main wrapper starts-->
	<div class="main-wrapper">
		
		<!--header starts-->
		<header class="header">
			<div class="container">
				<div class="header-main d-flex justify-content-between align-items-center">
					<div class="header-logo">
						<a href="<?php echo SITEURL; ?>"><span>on</span>coustd</a>
					</div>
					<button type="button" class="header-hamburger-btn js-header-menu-toggler">
						<span></span>
					</button>
					<div class="header-backdrop js-header-backdrop"></div>
					<nav class="header-menu js-header-menu">
						<button type="button" class="header-close-btn js-header-menu-toggler">
							<i class="fas fa-times"></i>
						</button>
						<ul class="menu">
							<li class="menu-item"><a href="<?php echo SITEURL; ?>">home</a></li>

							<li class="menu-item menu-item-has-children"><a href="<?php echo SITEURL; ?>courses.php">courses</a>
							
							</li>

							<li class="menu-item menu-item-has-children"><a href="#">pages<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu js-sub-menu">
									<?php 
									if(!isset($_SESSION['SESSION_EMAIL']) && empty($_SESSION['SESSION_EMAIL'])){
									?>
									<li class="sub-menu-item"><a href="<?php echo SITEURL; ?>log-in.php">login</a></li>
									
									<li class="sub-menu-item"><a href="<?php echo SITEURL; ?>sign-up.php">signup </a></li>
									<?php }?>

									<?php 
									if(isset($_SESSION['SESSION_EMAIL']) && !empty($_SESSION['SESSION_EMAIL'])){
									?>
									<li class="sub-menu-item"><a href="<?php echo SITEURL; ?>logout.php">Logout </a></li>
									<?php }?>
								</ul>
							</li>

							<li class="menu-item"><a href="<?php echo SITEURL; ?>contact.php">contact</a></li>

							<?php 

					

							

							if(isset($_SESSION['SESSION_EMAIL']))
							{
								
								$query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE email = '{$_SESSION['SESSION_EMAIL']}'");

								if(mysqli_num_rows($query) > 0)
								{
									$row = mysqli_fetch_assoc($query);
									// echo "Welcome" . $row['name'];
								}
								//header("location:".SITEURL);
								//die(); 
							}
								
								
							?>
								<li class="menu-item"><a href="<?php echo SITEURL; ?>contact.php"><?php if(isset($row)) echo $row['name']; ?></a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--header ends-->