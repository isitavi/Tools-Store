<?php
	session_start();
	if(!isset($_SESSION['sessionemail'])){
		header("Location: login.php");
	}
	else{
		include_once "nav2.html";
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
		body{
				background-image:url(3.jpg);
				background-size: cover;
			}
	</style>
</head>

<body>
	<div class="prof_box">
		<img src="images/mypic3.jpg" class="prof_pic">
	<h1>Md.Aktarujjaman</h1>
	<h2>ID:142-35-682</h2>
	<h2>Section: A</h2>
	<h4><span style="color:rgba(94, 232, 163, 0.92);"> Department of Software Engineering</span></h4>
	<div class="line-break"></div>
	<p>Hello there!</p>
	
	<p>I am a full stack web developer. I mainly work with PHP, HTML, CSS, JS and WordPress. </p>

	<div class="social-icons">
	<a href="https://www.facebook.com/akter.spondon" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	<a href="http:twitter.com" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
	<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	</div>
	</div>

	<div class="prof_box2">
		<img src="images/Alvin.jpg" class="prof_pic2">
	<h1>Avijit Das</h1>
	<h2>ID:142-35-668</h2>
	<h2>Section: A</h2>
	<h4><span style="color:rgba(94, 232, 163, 0.92);"> Department of Software Engineering</span></h4>
	<div class="line-break"></div>
	<p>Hello there!</p>
	
	<p>I am working with security. I mainly work with PHP, HTML, CSS, JS and SQL Injection. </p>

	<div class="social-icons">
	<a href="https://www.facebook.com/avijitdasnoyon" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	<a href="https://www.twitter.com/avijitdasnoyon" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
	<a href="https://www.linkedin.com/avijitdasnoyon" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	</div>
	</div>

</body>
</html>
<?php
	}
?>
