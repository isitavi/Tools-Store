<!DOCTYPE html>
<html>
	<head>
		<title>Log in Here</title>
		<script src="validlogin.js" type="text/javascript"></script>
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
			.login{
				width: 450px;
				height: 260px;
				background-color:rgba(0, 27, 38, 0.4);
				margin:0 auto;
				margin-top:90px;
				padding-top:10px;
				padding-left: 50px;
				border-radius: 15px;
				color: white;
				font-weight:bolder;
			}
			.login input[type="text"]{
				width:230px;
				height: 25px;
				border:0;
				border-radius:8px;
			}
			
			.login input[type="password"]{
				width:230px;
				height: 25px;
				border:0;
				border-radius:8px;
			}
			
			.login input[type="submit"]{
				width:100px;
				height:35px;
				border:0;
				border-radius:8px;
				background-color:#3DACCB;
				font-weight:bolder;
				color:#E8F0F3;
			}
			#ho:hover{
				background-color: black;
			}
				
		</style>
	</head>
	<body>
		<?php
		include_once "phpnav.php";
		?>

		<div class="login">
			<table cellspacing="15px" border="0px">
				<h2 aligh>Log in</h2>
				<form action="loginvalid.php" method="post" >
					<tr>
							<td>Email</td>
							<td><input type="text" name="email" /></td>
					</tr>
					<tr>
							<td>Password</td>
							<td><input type="password" name="pass" /></td>
					</tr>
					<tr>
							<td></td>
							<td><input type="checkbox" name="remember" /> Remember Me</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Login" id="ho"/></td>
					</tr>
					<tr><td colspan="2">Not a registered member?<a href="signup.php">SignUp Here</a></td></tr>
				</form>
			</table>
		</div>
	</body>
</html>