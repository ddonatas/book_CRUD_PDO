<?php
//connection to DB
include "config.php";
	$mysqli=mysqli_connect($adress, $user,  $pass, $database);

	if (mysqli_connect_errno())	
	{
	printf("Connection error");
	exit();
	} 

	

	


?>