<?php

	include("validations.php");
	function sanitize($str, $length=50){
		$str = trim($str);
		$str = htmlentities($str);
		
		return substr($str, 0, $length);
		
		//return $str;

	}

	if( !empty($_POST['fname']) ){
		$fName = $_POST['fname'];
		$fName = sanitize($fName);

		$email = $_POST['email'];
		$email = sanitize($email);

		$date = $_POST['date'];
		$date = sanitize($date);
		if(date1($date) == true){
			echo("<br>Valid Date");

			$newDate = strtotime($date);
			$newDate = date("Ymd", $newDate);
			echo("<br/> New Date:" . $newDate);

		}else{
			echo("<br/>Invalid Date");

		}

		/*
		if(emailCheck($email) == true){
			echo("<br/>Valid Email");
		}else{
			echo("<br/>Invalid Email");
		}*/

		if(filter_var($email, FILTER_VALIDATE_EMAIL) == True){
			echo("<br/>Valid Email");
		}else{
			echo("<br/>Invalid Email");
		}

		

	}
	else{
		echo("<br>Problem with Data");

	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div{margin: 1em;}
 		form div label{float: left;width: 10%;}
 		form div.radio {float: left;}
 		.clearfix {clear: both;}
 	</style>
</head>
<body>
	<script>
		function validate(){

			if(document.forms[0].fname.value == ""){
				alert("You forgot to insert name");
				return false;
			}

			else{
				return true;

			}

		}

	</script>

	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"  onsubmit="return validate()">
		<div>
			<label>First Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Date:</label> (mm/dd/yyyy)
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="email" name="email" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	<?php

	?>
</body>
</html>