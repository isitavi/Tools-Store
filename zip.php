<?php
	include_once "phpnav.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>File Zipper</title>
		<style type="text/css">
			body{
				background-image:url(3.jpg);
				background-size: cover;
			}
			.zip{
				width: 432px;
				height: 154px;
				background-color:rgba(0, 27, 38, 0.4);
				margin:0 auto;
				margin-top:143px;
				padding-top:52px;
				padding-left: 50px;
				border-radius: 15px;
				color: white;
				font-weight:bolder;
			}
			.signup input[type="file"]{
				width:230px;
				height: 25px;
				border:0;
				border-radius:8px;
			}
			.zip input[type="submit"]{
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
		</style>
	</head>
	<body>

		<div class="zip">
			<table cellspacing="15px" border="0px" >
				<form method="post" enctype="multipart/form-data">
				<!--multipart/form-data when your form includes any <input type="file"> elements-->
					<?php 
						if(isset($_FILES['file'])){
							$filename = $_FILES['file']['name'];
							$filetmp =$_FILES['file']['tmp_name'];
							$randomname = rand();
							$filetype = explode('.',$filename);
							$filetype = end($filetype);
							$error =$_FILES['file']['error'];
							
							if($error==0){
								$store = move_uploaded_file($filetmp,'store/'.$randomname.'.'.$filetype);
								if($store){
									if(extension_loaded('zip')){
										$zip = new zipArchive();
										$zipname = $randomname.'.zip';
										if($zip->open($zipname,ZIPARCHIVE::CREATE)==TRUE){
											$zip->addFile('store/'.$randomname.'.'.$filetype,$randomname.'.'.$filetype);
											$zip-> close();
											$message= "File compressed sucessfully";
										}
										else{
											$message= "Error occured while creating zip";
											
										}
										
									}
									else{
										$message = "You can't compress this file cause you haven't any zip extension";
									}
								}
								else{
									$message= "Error while uploading a file";
								}
							}
							else{
								$message = "Error found/No file is selected.";
							}
							
							echo $message;
							
							
						}
					?>
					<tr>
						<td>Choose File:</td>
						<td><input type="file" name="file"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="hov" type="submit" name="submit" value="Create Zip!" /></td>
					</tr>
				<form>
			</table>
		</div>
	</body>
</html>