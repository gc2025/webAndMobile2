<?php
/**
 * Connect to the database.
 */

include("../dbcon.php");


if( !empty($_GET['fName']) && !empty($_GET['lName'])){
	$fname = $_GET['fName'];
	$lname = $_GET['lName'];

	/*
	$sql = "INSERT INTO '240Insert' (`first`, `last`) VALUES ('" . $fname . "', '" . $lname ."');";

	$conn->query($sql);
	*/

	//$conn->execute();
	

	$stmt = $conn->prepare("INSERT INTO `240Insert` (`first`, `last`) VALUES (?, ?);");
	$stmt->bind_param( "ss",$fname, $lname );
	$stmt->execute();
	$stmt->close();

}

 	
$sql = "SELECT * FROM `240Insert` ORDER BY `id` DESC LIMIT 50";

$result = $conn->query($sql);
	
while($row = $result->fetch_assoc() ){
	//echo $row['first'] .  " " . $row['last'];
	$records[] = $row;
}

$conn->close()
 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body>
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				foreach($records as $record){
					echo "<li>" . $record['first'] . " " . $record['last'] . "</li>";
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form action="preparedStatement.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="hidden" value="task" name="" >
			<input type="submit" value="Add to the List"/>
		</form>

	</body>
</html>