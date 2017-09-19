<?php
	$host="localhost";
	$dbuser="toor";
	$dbpass="1234";
	$dbname="project";
	$mysqlconnect = mysqli_connect($host,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){ // mysqli_connect_errno() function returns the error code from the last connection error
		die("Connection failed! ".mysqli_connect_errno());
	}
?>
<html>
	<head>
		<title>Sign Up Sucessful</title>
	</head>
	<body>
		<?php
			if(isset($_POST['submit'])){
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$year = $_POST['year'];
				$month = $_POST['month'];
				$day = $_POST['day'];
				$dob = $year.'/'.$month.'/'.$day;
				$gender = $_POST['gender'];
				$password = $_POST['pass'];
				$passenc = md5($password);
				$confirmpass = $_POST['repass'];
				$conpassenc = md5($confirmpass);
				$name = $firstname.' '.$lastname;
				
				
				if(empty($firstname ) || empty($lastname) || empty($email) || empty($day)
					|| empty($month) || empty($year) || empty($gender) || empty($password) ||
					empty($confirmpass)){
					echo "You can't leave any field blank";
				}
				elseif($passenc != $conpassenc){
					echo "Password didn't match.Try again!";
				}
				else{
					$insertvalue = "insert into signup(firstname,lastname,email,dob,gender,password,confirmpass)" . 
					"values('$firstname','$lastname','$email','$dob','$gender','$password','$confirmpass')";
					
					$operationdb = mysqli_query($mysqlconnect,$insertvalue);
					//mysqli_query() function performs a query against the database.
					if(!$operationdb){
						die("Failed!!". mysqli_error($mysqlconnect));
						//mysqli_error() function returns the last error description for the most recent function call
					}
					else{
						header('Location: login.php');
					}
				}
			}
		?>
	</body>
<html>