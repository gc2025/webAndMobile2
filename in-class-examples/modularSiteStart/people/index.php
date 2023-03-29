<<?php

    $title = "People";
    $path = "../";

    include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

	include($path . "../dbcon.php");

	$sql = "SELECT * FROM `240_modular_content` WHERE `name` = '". $title ."' LIMIT 1";

	$result = $conn->query($sql);

	while($row = $result->fetch_assoc() ){
		echo $row['content'];

	}

?>



<?php
include($path . "assets/inc/footer.php");
?>