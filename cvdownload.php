<?php
	header("Content-type: application/vnd.ms-word");
	/* just generate normal html, but use a content-type header line to 
	force the browser to see this as a word or excel file */
	header("Content-Disposition: attachment;Filename=your-resume.doc");   
	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
	//The meta element is used over HTTP under certain conditions 
	echo $_REQUEST['name']."<br/>";
  /*An associative array that by default contains the contents of $_GET,
  $_POST and $_COOKIE. */
    echo $_REQUEST['image']."<br/>";
	echo $_REQUEST['parents']."<br/>";
	echo $_REQUEST['day']. $_REQUEST['month']. $_REQUEST['year']."<br/>";
	echo $_REQUEST['national']."<br/>";
	echo $_REQUEST['bl']."<br/>";
	echo $_REQUEST['pos']."<br/>";
	echo $_REQUEST['contact']."<br/>";
	echo $_REQUEST['residence']."<br/>";
	echo $_REQUEST['univ']."<br/>";
	echo $_REQUEST['email']."<br/>";
	echo $_REQUEST['dept']."<br/>";
	echo $_REQUEST['url']."<br/>";
	echo $_REQUEST['cgpa']."<br/>";
	echo $_REQUEST['mobile']."<br/>";
	echo $_REQUEST['session']."<br/>";
	echo $_REQUEST['programming']."<br/>";
	echo $_REQUEST['network']."<br/>";
	echo $_REQUEST['other']."<br/>";
	echo "</body>";
	echo "</html>";
?>
?>