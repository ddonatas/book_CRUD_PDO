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
	$sql="SELECT * FROM book where id=$id";
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
		print ("<FORM METHOD=get  ACTION='update.php'>");
				print("<INPUT TYPE='hidden' NAME='id' value='$id'>");
				print("Title: <INPUT TYPE='text' NAME='title' value='$title'>");
				print ("<br>Author: <INPUT TYPE='text' NAME='author' value='$name' > ");
				print ("<br> <INPUT TYPE='submit' VALUE='Update'>");
				print 	("<INPUT TYPE='reset' VALUE='Reset'>");
		print ("</FORM>");
	
	
	}

	}else{
	printf("No row");
	}

	}


?>