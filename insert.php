<?php
include "connect.php";

	$title=$_GET["title"];
	$author=$_GET["author"];
	//print ($title." ");
	$sql="INSERT INTO book (title, author) VALUES ('".$title."','".$author."')";
	$res=mysqli_query($mysqli, $sql);
	
		if ($res) 
		{
			//include('duomenys.php');
			print ("Stored");
			print ("<a href=list.php> List </a>");
		}
		else
		{
			print("Error ");
		}
	


?>