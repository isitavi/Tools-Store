<html>
	<head>
		<title>Sucessfully logged in</title>
	</head>
	<body>
		<?php
			if(isset($_POST["submit"])){
				if(!empty($_POST['email']) && !empty($_POST['pass'])){
					$email = $_POST['email'];
					$password = $_POST['pass'];
					
					$host="localhost";
					$dbuser="toor";
					$dbpass="1234";
					$dbname="project";
					$mysqlconnect = mysqli_connect($host,$dbuser,$dbpass,$dbname);
					if(mysqli_connect_errno()){ // mysqli_connect_errno() function returns the error code from the last connection error
						die("Connection failed! ".mysqli_connect_errno());
					}
					
					$datafromdb = mysqli_query($mysqlconnect,"select * from signup where email='".$email."'  and password ='".$password."' ");
					$numrows = mysqli_num_rows($datafromdb); //mysql_num_rows — Get number of rows in result
					if($numrows !=0){
						while($rowvalue=mysqli_fetch_assoc($datafromdb)){
							//mysql_fetch_assoc — Fetch a result row as an associative array
							$emailfromdb = $rowvalue['email'];
							$passwordformdb = $rowvalue['password'];
						}
						if($email == $emailfromdb && $password == $passwordformdb){
							if(isset($_POST['remember'])){
								setcookie('email',$email,time()+(60*60*7));
							}
							session_start();
							$_SESSION['sessionemail'] = $email;
							header("Location: tools.php"); //Redirect
						}
					}
					else{
						//echo "Email or Password didn't match";
						header("Location: login.php");
					}
				}
			}
		?>
	</body>
</html>