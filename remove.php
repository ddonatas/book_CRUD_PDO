<?php
//prisijungimas prie testdb
include "config.php";
	$mysqli=mysqli_connect($adress, $user,  $pass, $database);

	if (mysqli_connect_errno())	
	{
	printf("Prisijungimo klaida");
	exit();
	} 

	else 	

	{
	$id=$_GET["id"];
	print ($id." ");
	$sql="DELETE FROM book WHERE id=$id";
	$res=mysqli_query($mysqli, $sql);
	
		if ($res) 
		{
			print ("is removed");
		}
		else
		{
			print("is not removed");
		}
	}


?>