<?php
    $title = "Comments";
    $path = "../";

    include($path . $path . $path . "excersies/dbcon.php");

    include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

    if( !empty( $_GET['fName'] ) && !empty( $_GET['CommentBox'] ) ){
        
        $fullName = $_GET[ 'fName' ];
        $comment = $_GET[ 'CommentBox' ];
        
        $stmt = $conn->prepare("INSERT INTO `comments` (`name`, `comment`, `lastModfiedDate`VALUES (?,?)");
	    $stmt->bind_param("ss", $fullName, $comment);
	    $stmt->execute();
	    $stmt->close();

    }

    $sql = "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 50";

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
		<title>Comments</title>
	</head>
	<body>
		<hr/>
        <br><br><br><br><br><br><br><br><br><br><br>
		<h3>Comment Form</h3>
		<form action="index.php" method="get">		
			Name(First and Last): <input type="text" id="fName" name="fName"/>
            Comment(s): <input type="textarea" id="CommentBox" name="CommentBox" rows = "4" cols = "50"/>
            <input type="submit" value="Add to the List"/>
        </form>

        <h3>Other Reviews</h3>
		<div id="list">
			<ul>
			<?php
				foreach($records as $record){
					echo ("<li>" . $record['name'] . " " . $record['comment'] . " @ " . $record['date'] . "</li>");
				}
			?>
			</ul>

	</body>
</html>

<?php
    include($path . "assets/inc/footer.php");
?>