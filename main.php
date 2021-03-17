<?php
$awsinstanceid=file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");

	$conn = mysqli_connect("localhost","root","miri","mysql");
	
	//mysql_select_db("mysql",$conn);
	
	mysqli_query($conn,"UPDATE mysql.user set authentication_string=PASSWORD('".$awsinstanceid."') WHERE User='root' AND Host='localhost'");
	mysqli_query($conn,"UPDATE mysql.user set authentication_string=PASSWORD('".$awsinstanceid."') WHERE User='root' AND Host='127.0.0.1'");
	
	mysqli_query($conn,"FLUSH PRIVILEGES");
	
	$base_url="http://".$_SERVER['SERVER_NAME'];
	echo $base_url; 
	$gopath=$base_url."/miri.php";
	header('Location: '.$gopath); 


?>
