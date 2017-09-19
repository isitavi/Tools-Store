<?php
		include_once "phpnav.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Log in Here</title>
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
			.login{
				width: 450px;
				height: 230px;
				background-color:rgba(0, 27, 38, 0.4);
				margin:0 auto;
				margin-top:129px;
				padding-top:62px;
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
			#only{
				color:#2fd8cc;
			}
				
		</style>
	</head>
	<body>
		
		<div class="login">
			<table cellspacing="15px" border="0px">
				<h2 id="only">&nbsp &nbsp Encryption & Decryption Here</h2>
				<form action="" method="post" >
					<tr>
							<td>Your text:</td>
							<td><input type="text" name="text" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="enc" value="Encrypt" id="ho"/>
						<input type="submit" name="dec" value="Decrypt" id="ho"/>
						</td>
				</form>
			</table>

		<?php
			/*if(isset($_POST['enc'])){
				$var = $_POST['text'];
				$encrypt=md5($var);
				if(empty($var)){
					header("Location:encryption.php");
				}
				else{
					echo "Encrypt Key: ".$encrypt;
				}
			} */
				$key_value = "projects";
				if(isset($_POST['enc'])){
				$plain_text = $_POST['text'];
					if(empty($plain_text)){
						header("Location:encryption.php");
					}
					else{
						$encrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $plain_text, MCRYPT_ENCRYPT);
						echo "Text after encryption :".$encrypted_text ;
					}
				}
				elseif(isset($_POST['dec'])){
					$encrypted_text = $_POST['text'];
					if(empty($encrypted_text)){
						header("Location:encryption.php");
					}
					else{
						$decrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $encrypted_text, MCRYPT_DECRYPT);
						echo "Text after decryption :".$decrypted_text ;
					}
				
				}


		?>
		</div>
	</body>
</html>