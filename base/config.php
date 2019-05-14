<?php
	
	$localhost = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'In-shop';
	$connect = mysqli_connect($localhost, $user, $pass, $db);
	if ($connect == true) {
		//echo "CONNECT";
	} else {echo "No CONNECT TO Base!!!";}
?>