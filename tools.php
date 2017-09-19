<?php
	session_start();
	if(!isset($_SESSION['sessionemail'])){
		header("Location: login.php");
	}
	else{
		include_once "nav2.html";
		
?>

<!DOCTYPE html>
<html>
<head>
<title>Navigaton Bar</title>
<link rel="stylesheet" type="text/css" href="tools.css">
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
			.st{
				color:##FCFFFF;;
				margin-top:20px;
				text-align:center;
				font-size:30px;
				font-family:"Comic Sans MS",cursive,sans-serif;
			}
		</style>
</head>
<body>

	<div class="st">
	<?php
		echo htmlentities($_SESSION['sessionemail'])." Welcome to Tools store.Use any of them you would need.";
	?>
	</div>
	<div class="p1">
      <a href="zip.php"><img style=" float:left; display:inline" src="zip.png" alt="Zip Here" width="200" height="170"/>
	  </a>
    </div>
	<div class="p2">
      <a href="cv.php"><img style=" float:left; display:inline" src="cv.png" alt="Make Resume" width="200" height="170"/>
	  </a>
    </div>
	<div class="p3">
      <a href="encryption.php"><img style=" float:left; display:inline" src="enc.png" alt="Encryption Here" width="230" height="190"/>
	  </a>
    </div>
</body>
</html>


<?php
	}
?>
