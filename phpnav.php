<?php
	session_start();
	if(!isset($_SESSION['sessionemail'])){
		include_once "nav.html";
	}
	else{
		include_once "nav2.html";
	}
?>