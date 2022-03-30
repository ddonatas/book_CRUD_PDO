<?php
// prisijungimas prie 
include "config.php";
	
	$mysqli=mysqli_connect($adress, $user,  $pass, $database);

    if (mysqli_connect_errno())	
	{
	printf("Prisijungimo klaida");
	exit();
	} 

	else 	

	{
	$sql="SELECT * FROM book";
	$res=mysqli_query($mysqli, $sql);

	if ($res) {
		$eil_skaicius=mysqli_num_rows($res);
		printf("Found: %d \n",$eil_skaicius);
		print("<br>");
	//isvedimas
	while ($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC)){
	$id=$newArray['id'];
	$name=$newArray['author'];
	$title=$newArray['title'];
	//print ("CSS ")
	print ($name. " " .$title);
	print ("<a href=remove.php?id=$id> Remove </a>");
	print ("<a href=edit.php?id=$id> Edit </a>"."<br/>");
	}

	}else{
	printf("No row");
	}

	}


?>