<?php session_start(); ?>
<?php include "database.php"; ?>
<?php include "../admin/functions.php"; ?>

<?php 

if(isset($_POST['login-user'])) {

	
	login_user($_POST['username'],$_POST['password']);
 

}





?>

