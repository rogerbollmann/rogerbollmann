<?php
session_start();
if($_REQUEST['usr']=="user" && $_REQUEST['pswd']=="password"){
	$_SESSION['usr'] = "user";
	$_SESSION['pswd'] = "password";
	header("Location: content.php");
}
else{
	header("Location: niceform.php?loginfailed");
}
?>