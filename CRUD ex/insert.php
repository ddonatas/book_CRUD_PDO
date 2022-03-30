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
	$title=$_GET["title"];
	$author=$_GET["author"];
	//print ($title." ");
	$sql="INSERT INTO book (title, author) VALUES ('".$title."','".$author."')";
	$res=mysqli_query($mysqli, $sql);
	
		if ($res) 
		{
			//include('duomenys.php');
			print ("Stored");
		}
		else
		{
			print("Error ");
		}
	}


?>