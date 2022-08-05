


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
						<a href="http://localhost/Commence-Copy/"><span>on</span>coustd</a>
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
							<li class="menu-item"><a href="http://localhost/Commence-Copy/">home</a></li>

							<li class="menu-item menu-item-has-children"><a href="#">courses<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu js-sub-menu">
									<li class="sub-menu-item"><a href="http://localhost/Commence-Copy/courses.php">course</a></li>
									<li class="sub-menu-item"><a href="http://localhost/Commence-Copy/course-details.php">course details</a></li>
								</ul>
							</li>

							<li class="menu-item menu-item-has-children"><a href="#">pages<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu js-sub-menu">
									<li class="sub-menu-item"><a href="http://localhost/Commence-Copy/log-in.php">login</a></li>
									<li class="sub-menu-item"><a href="http://localhost/Commence-Copy/sign-up.php">signup </a></li>
								</ul>
							</li>

							<li class="menu-item"><a href="http://localhost/Commence-Copy/contact.php">contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--header ends-->
		<!--breadcrumb starts-->
		<div class="breadcrumb-nav">
			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb mb-0">
				    <li class="breadcrumb-item"><a href="http://localhost/Commence-Copy/">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">course</li>
				  </ol>
				</nav>
			</div>
		</div>
		
		<!--breadcrumb ends-->

		<!--course section starts-->
		<section class="course-section section-padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 ">
						<div class="section-title text-center mb-4">
							<h2 class="title">
								Our Courses
							</h2>
							<p class="sub-title">
								Find the right course for you.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<nav>
						  <div class="nav nav-tabs border-0 justify-content-center mb-4" id="web-development-tab" role="tablist">
						    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#web-development" type="button" role="tab" aria-controls="web-development" aria-selected="true">Web Development</button>
						   
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
                            <?php ?>
						  <div class="tab-pane fade show active" id="web-development" role="tabpanel" aria-labelledby="web-development-tab">
						  	<div class="row">
						  		<!--courses item starts-->
								<div class="col-md-6 col-lg-3">
									<div class="courses-item">
										<a href="http://localhost/Commence-Copy/course-details.php" class="link">
											<div class="courses-item-inner">
												<div class="img-box">
													<img src="img/courses/web-development/1.jpg" alt="course img">
												</div>
												<h3 class="title">html for beginners</h3>
												<div class="instructor">
													<img src="img/instructor/1.png" alt="insrtucting">
													<span class="instructor-name">john doe</span>
												</div>
												<div class="rating"></div>
													<span class="average-rating">(4.5)</span>
													<span class="average-stars">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
													</span>
													<span clas reviews>(230)</span>
												<div class="price">$ 49</div>
											</div>
										</a>
									</div>
								</div>
							<!--courses item ends-->
							
					
					
						  	</div>
						  </div>
						 
						 <?php ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mt-3">
						<!--pagination starts-->
						<nav aria-label="Page navigation">
						  <ul class="pagination justify-content-center">
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Previous">
						        <i class="fas fa-chevron-left"></i>
						      </a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item active"><a class="page-link" href="#">3</a></li>
						    <li class="page-item"><a class="page-link" href="#">4</a></li>
						    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
						    <li class="page-item"><a class="page-link" href="#">10</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Next">
						         <i class="fas fa-chevron-right"></i>
						      </a>
						    </li>
						  </ul>
						</nav>
						<!--pagination ends-->
					</div>
				</div>
			</div>
		</section>
		<!--course section ends-->

		<!--footer section starts-->
<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="footer-item">
								<h3 class="footer-logo"><span>on</span>coustd</h3>
								<ul>
									<li><a href="#">about</a></li>
									<li><a href="#">what we offer</a></li>
									<li><a href="#">career</a></li>
									<li><a href="#">certificate</a></li>
									<li><a href="#">blog</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="footer-item">
								<h3>learning</h3>
								<ul>
									<li><a href="#">get the app</a></li>
									<li><a href="#">testimonials</a></li>
									<li><a href="#">pricing</a></li>
									<li><a href="#">faq</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="footer-item">
								<h3>more</h3>
								<ul>
									<li><a href="#">affiliates</a></li>
									<li><a href="#">become a course creater</a></li>
									<li><a href="#">training webinars</a></li>
									<li><a href="#">free personality test</a></li>
									<li><a href="#">help and support</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="footer-item">
								<h3>get in touch</h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook social-icon"></i> facebook</a></li>
									<li><a href="#"><i class="fab fa-twitter social-icon"></i> twitter</a></li></a></li>
									<li><a href="#"><i class="fab fa-instagram social-icon"></i> instagram</a></li></a></li>
									<li><a href="#"><i class="fab fa-youtube social-icon"></i> youtube</a></li></a></li>
									<li><a href="#"><i class="fab fa-linkedin social-icon"></i> linkedin</a></li></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<p class="m-0 py-4 text-center">copyright &copy; 2022 Oncoustd </p>
				</div>
			</div>
		</footer>
		<!--footer section ends-->

	</div>
<!--main wrapper ends-->

<!-- style switcher start -->
	<div class="style-switcher js-style-switcher">
		<div class="style-switcher-toggler js-style-switcher-toggler">
			<i class="fas fa-cog"></i>
		</div>
			<h3>Style Switcher</h3>
			<div class="style-switcher-item">
				<p class="mb-2">Theme Colors</p>
				<!-- theme colors -->
				<div class="theme-colors js-theme-colors">
					<button type="button" data-js-theme-color="color-1" class="js-theme-color-item color-1"></button>
					<button type="button" data-js-theme-color="color-2" class="js-theme-color-item color-2"></button>
					<button type="button" data-js-theme-color="color-3" class="js-theme-color-item color-3"></button>
					<button type="button" data-js-theme-color="color-4" class="js-theme-color-item color-4"></button>
					<button type="button" data-js-theme-color="color-5" class="js-theme-color-item color-5"></button>
				</div>
			</div>
			<div class="style-switcher-item"> 
				<div class="form-check form-switch">
					<input class="form-check-input js-dark-mode" type="checkbox" role="switch" id="dark-mode">
					<label class="form-check-label" for="dark-mode">Dark Mode</label>
				</div>
			</div>
			<div class="style-switcher-item">
				<div class="form-check form-switch">
					<input class="form-check-input js-glass-effect" type="checkbox" role="switch" id="glass-effect">
					<label class="form-check-label" for="glass-effect">Glass Effect</label>
				</div>
			</div>
	</div>
<!-- style switcher end -->


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
