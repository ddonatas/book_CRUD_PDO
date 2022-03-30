<?php
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
	$title=$_GET["title"];
	$author=$_GET["author"];
	
	$sql=("UPDATE book SET title ='$title', author ='$author' WHERE id=$id");
	$res=mysqli_query($mysqli, $sql);
	
		if ($res) 
		{
			//include('duomenys.php');
			print ("Updated ");
			print ("<a href=list.php> List </a>");	
		}
		else
		{
			print("Error ");
		}
	}


?>