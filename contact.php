<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Project</title>
		<script src="validcontact.js" type="text/javascript"></script>
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
			.contact{
				width: 450px;
				height: 300px;
				background-color:rgba(0, 27, 38, 0.4);
				margin:0 auto;
				margin-top:90px;
				padding-top:10px;
				padding-left: 50px;
				border-radius: 15px;
				color: white;
				font-weight:bolder;
			}
			.contact input[type="text"]{
				width:230px;
				height: 25px;
				border:0;
				border-radius:8px;
			}
			.contact input[type="submit"]{
				width:100px;
				height:35px;
				border:0;
				border-radius:8px;
				background-color:#3DACCB;
				font-weight:bolder;
				color:#E8F0F3;
			}
			#hov:hover{
				background-color:black;
			}
			#message{
				width:230px;
				height: 80px;
				border:0;
				border-radius:8px;
			}
		</style>
	</head>
	<body>
		<?php
		include_once "phpnav.php";
		?>
		<div class="contact">
			<table cellspacing="15px" border="0px" >
				<h2>Contact with Us</h2>
				<form action="contactvalid.php" method="POST" name='contactForm' onSubmit="return validation();">
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" /></td>
						</tr>
						<tr>
							<td>Subject</td>
							<td><input type="text" name="subject" /></td>
						</tr>
						<tr>
							<td>Message</td>
							<td><textarea name="message" id="message"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit" id="hov"></td>
						</tr>
						
				</form>
			</table>
		</div>
		
	</body>
</html>