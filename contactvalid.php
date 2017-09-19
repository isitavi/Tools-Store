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
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];

				if(empty($name ) || empty($email) || empty($subject) || empty($message))
					{
					echo "You can't leave any field blank";
				}
				else{
					$insertvalue = "insert into project(name,email,subject,message)" . 
					"values('$name','$email','$subject','$message')";
					
					$operationdb = mysqli_query($mysqlconnect,$insertvalue);
					//mysqli_query() function performs a query against the database.
					if(!$operationdb){
						die("Failed!!". mysqli_error($mysqlconnect));
						//mysqli_error() function returns the last error description for the most recent function call
					}
					else{
						header('Location: port.php');
					}
				}
			}
		?>
	</body>
<html>