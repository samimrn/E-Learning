<?php include('partials/header.php'); ?>


		<!--breadcrumb starts-->
		<div class="breadcrumb-nav">
			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Sign Up</li>
				  </ol>
				</nav>
			</div>
		</div>
	<!--breadcrumb ends-->

	<?php 

			//Import PHPMailer classes into the global namespace
		//These must be at the top of your script, not inside a function
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		//Load Composer's autoloader
		require 'vendor/autoload.php';

	$msg = "";

		if(isset($_POST['submit']))
		{
							$name = mysqli_real_escape_string($conn,$_POST['name']);
							$email = mysqli_real_escape_string($conn,$_POST['email']);
							$password = mysqli_real_escape_string($conn,md5($_POST['password']));
							$code = mysqli_real_escape_string($conn,md5(rand()));

							if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_user WHERE email = '{$email}'")) > 0)
							{
								$msg = "<div class='alert alert-danger'>{$email} - This email is already taken.</div>";
								echo $msg;
							}

							else 
								{
								$sql = "INSERT INTO tbl_user (name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
								$result = mysqli_query($conn, $sql);

			if ($result)
			{
				echo "<div style='display:none;'>";

												//Create an instance; passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try {
					//Server settings
					$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
					$mail->isSMTP();                                            //Send using SMTP
					$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
					$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
					$mail->Username   = 'testmmail19@gmail.com';                     //SMTP username
					$mail->Password   = 'qfaxacsryhfzqfat';                               //SMTP password
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
					$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

					//Recipients
					$mail->setFrom('testmmail19@gmail.com');
					$mail->addAddress($email);     //Add a recipient
					

				  //Optional name

					//Content
					$mail->isHTML(true);                                  //Set email format to HTML
					$mail->Subject = 'no reply';
					$mail->Body    = 'Here is the verification link <b><a href="http://localhost/incomplete/Commence-Copy/log-in.php?verification='.$code.'">http://localhost/incomplete/Commence-Copy/log-in.php?verification='.$code.'</a></b>';
					

					$mail->send();
					echo 'Message has been sent';
				} catch (Exception $e) {
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}

				echo "</div>";
				$msg = "<div class='alert alert-info'>We've Send a verification link on your email address.</div>";
				echo $msg;
			}
						else
							{

								$msg = "<div class='alert alert-danger'>Something Went Wrong.</div>";
								echo $msg;

								}
				}

		}

		

	?>


	
	<!-- signup sections starts -->
	<section class="signup section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-6 col-xl-5">
					<div class="signup-form box">
						<h2 class="form-title text-center">Create Your Account</h2>
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Full Name">
							</div>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<button type="submit" name="submit" class="btn btn-theme btn-block btn-form">Sign Up</button>
							<p class="text-center mt-4 mb-0">Already have an account?<a href="log-in.html"> Log In</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section ends -->

	<?php include('partials/footer.php'); ?>