<?php
	include_once "phpnav.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create Your Resume</title>
		<link href="css/resume.css" rel="stylesheet" media="screen" />
		<script src="show.js" type="text/javascript"></script>
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
		</style>
	</head>
	<body>
		<div class="resume">
				<table cellspacing="10px" border="0px" >
					<h2>Curriculum Vitae</h2>
					<form method="POST" action="cvdownload.php" />
						<tr>
							<td><h3>Bio Data</h3><td>
						</tr>
						<tr>
							<th>Name: </th>
							<td>
								<input type="text" name="name"/>
							</td>
							<td>
								<img id="preview" src="#"  />
								<input type="file" name="image" accept="image/*" onchange="previewimage(event)"/>
								
							</td>
						</tr>
						<tr>
							<th>Parents: </th>

							<td>
								<input type="text" name="parents"/>
							</td>
						</tr>
						<tr>
							<th>Date of Birth: </th>
							<td>
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
							</td>
						</tr>
						<tr>
							<th>Nationality: </th>

							<td>
								<input type="text" name="national"/>
							</td>
						</tr>
						<tr>
							<th>Blood Group: </th>

							<td>
								<input type="radio" name="bl" /> A+
								<input type="radio" name="bl" /> A-
								<input type="radio" name="bl" /> B+
								<input type="radio" name="bl" /> B-
								<input type="radio" name="bl" /> O+
								<input type="radio" name="bl" /> O-
								<input type="radio" name="bl" /> AB+
								<input type="radio" name="bl" /> AB-
							</td>
						</tr>
						<tr>
							<th>Marital Status: </th>

							<td>
								<input type="radio" name="pos" /> Married
								<input type="radio" name="pos" /> Unmarried
							</td>
						</tr>
						<tr>
							<td><h3>Contact Information</h3></td>
							<td></td>
							<td><h3>Education</h3></td>
						</tr>
						<tr>
							<th>Contact Address: </th>
							

							<td>
								<textarea name="contact" id="other"></textarea>
							</td>
							<th>Bachelor of Science: </th>
						</tr>
						<tr>
							<th>Residence: </th>
							<td>
								<textarea name="residence" id="other"></textarea>
							</td>
							<th>Institution name: </th>
							<td>
								<input type="text" name="univ" ></textarea>
							</td>
						</tr>
						<tr>
							<th>E-mail: </th>
							<td>
								<input type="email" name="email" />
							</td>
							<th>Department: </th>
							<td>
								<input type="text" name="dept" />
							</td>
						</tr>
						<tr>
							<th>URL: </th>
							<td>
								<input type="url" name="url" />
							</td>
							<th>CGPA: </th>
							<td>
								<input type="text" name="cgpa" />
							</td>
						</tr>
						<tr>
							<th>Mobile: </th>
							<td>
								<input type="tel" name="mobile" />
							</td>
							<th>Session: </th>
							<td>
								<input type="text" name="session" />
							</td>
						</tr>
						<tr>
							<td><h3>Skills and Knowledge</h3></td>
						</tr>
						<tr>
							<th>Programming: </th>

							<td>
								<textarea name="programming" id="other"></textarea>
							</td>
						</tr>
						<tr>
							<th>Networing: </th>

							<td>
								<textarea name="network" id="other"></textarea>
							</td>
						</tr>
						<th>Other: </th>

							<td>
								<textarea name="other" id="other"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="submit" value="Submit" id="hov"></td>
						</tr>
					</form>
				</table>
			</div>
		<body>
	</html>
