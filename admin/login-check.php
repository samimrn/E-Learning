<?php

  // Authorizeion or access control
// check whether the user is logged in or not

if (!isset($_SESSION['user'])) //if user session is not set
 	{
		//user not logged in redirect to login page

		$_SESSION['no-login-message'] = "<div class='error text-center'>Please Login to access admin panel</div>";
		header('location:'.SITEURL.'admin/login.php');
	}	

    ?>