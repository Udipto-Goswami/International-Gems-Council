<?php ob_start(); ?>
<?php session_start(); ?>

<?php 

$_SESSION['username'] = null;
$_SESSION['role'] = null;
$_SESSION['created'] = null;
$_SESSION['modified'] = null;

    
header("Location: ../../index.php");

?>

