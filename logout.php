<?php include('config/constants.php'); ?>

<?php   


 session_start();
session_destroy();

header('location:'.SITEURL);



?>