<?php
	/**
	* Connects to the database.
	* Return false if connection failed.
	*/

	include("../dbcon.php");

	if(!empty($_GET['first']) && !empty($_GET['last'])){
		$sql = "INSERT INTO `240Ajax2198` (`first`, `last`) VALUES (?, ?);";

		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $_GET['first'], $_GET['last']);
		$stmt->execute();
		$stmt->close();

	}

	$sql = "SELECT * FROM `240Ajax2198` LIMIT 50 ";
	
	$result = $conn->query($sql);
	
	$nameArray = array();
	while($row = $result->fetch_assoc()){
		//echo $row['first'] . "<br/>";
		$nameArray[] = $row;

	}

	//var_dump($nameArray);

	//Code header() is to make sure we get new data - clears the cache!
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: application/json');
	
	echo json_encode($nameArray);

?>