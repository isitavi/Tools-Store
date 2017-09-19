<!DOCTYPE html>
<html>
	<head>
		<title>Signup Here</title>
		<script src="validsign.js" type="text/javascript"></script>
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
			
			.signup{
				width: 450px;
				height: 420px;
				background-color:rgba(0, 27, 38, 0.4);
				margin:0 auto;
				margin-top:40px;
				padding-top:10px;
				padding-left: 50px;
				border-radius: 15px;
				color: white;
				font-weight:bolder;
			}
			
			.signup input[type="text"]{
				width:230px;
				height: 25px;
				border:0;
				border-radius:8px;
			}
			
			.signup input[type="password"]{
				width:230px;
				height: 25px;
				border:0;
				border-radius:8px;
			}
			
			.signup input[type="submit"]{
				width:100px;
				height:35px;
				border:0;
				border-radius:8px;
				background-color:#3DACCB;
				font-weight:bolder;
				color:#E8F0F3;
			}
			
			.signup input[type="radio"]{
				width:40px;
				height:15px;
				border:0;
				border-radius:8px;
				background-color:#3DACCB;
			}
		
			#hov:hover{
				background-color:black;
			}
		</style>
	</head>
	<body>
		<?php
		include_once "phpnav.php";
		?>

		<div class="signup">
			<table cellspacing="15px" border="0px" >
				
				<h2>SignUp Here</h2>
				<form method="POST" action="signvalid.php" >
				<!--name='regForm' onsubmit="return validation();"-->
						<tr>
							<td>First Name</td>
							<td><input type="text" name="firstname" /></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><input type="text" name="lastname" /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" /></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td>
								<select name="year">
									<option>Year</option>
									<option>1980</option>
									<option>1981</option>
									<option>1982</option>
									<option>1983</option>
									<option>1984</option>
									<option>1985</option>
									<option>1986</option>
									<option>1987</option>
									<option>1988</option>
									<option>1989</option>
									<option>1990</option>
									<option>1991</option>
									<option>1993</option>
									<option>1994</option>
									<option>1995</option>
									<option>1996</option>
									<option>1997</option>
									<option>1998</option>
									<option>1999</option>
									<option>2000</option>
									<option>2001</option>
									<option>2002</option>
									<option>2003</option>
									<option>2004</option>
									<option>2005</option>
									<option>2006</option>
									<option>2007</option>
									<option>2008</option>
									<option>2009</option>
									<option>2010</option>
									<option>2011</option>
									<option>2012</option>
									<option>2013</option>
									<option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
								</select>
								<select name="month">
									<option>Month</option>
									<option>Jan</option>
									<option>Feb</option>
									<option>March</option>
									<option>April</option>
									<option>May</option>
									<option>June</option>
									<option>July</option>
									<option>Aug</option>
									<option>Sept</option>
									<option>Oct</option>
									<option>Nov</option>
									<option>Dec</option>
								</select>
								<select name="day">
									<option>Day</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
									<option>24</option>
									<option>25</option>
									<option>27</option>
									<option>28</option>
									<option>29</option>
									<option>30</option>
									<option>31</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input type="radio" name="gender" value="male"/>Male
								<input type="radio" name="gender" value="female" />Female</td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pass" /></td>
						</tr>
						<tr>
							<td>Retype Password</td>
							<td><input type="password" name="repass" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit" id="hov"></td>
							
						</tr>
						
						<tr><td colspan="2">Already a member?<a href="login.php">Log in</a></td></tr>
						
				</form>
			</table>
		</div>
		
	</body>
</html>