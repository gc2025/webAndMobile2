<?php
    $title = "Comments";
    $path = "../";

    include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Comments</title>

		<script>

function getHTTPObject() {
			var xmlhttp;
			// branch for native XMLHttpRequest object
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest()
			}
			// branch for IE/Windows ActiveX version
			else if (window.ActiveXObject){
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
			}else{	
				return false;
			}
			return xmlhttp;
		}

		// We create the HTTP Object
		var http = getHTTPObject();

		function checkUsers(){
			if(http){
				http.open("GET", "addUser.php", true);
				http.onreadystatechange = handleHttpResponse;
				http.send(null);

				window.setTimeout(checkUsers, 1500);

			}

		}

		function handleHttpResponse(){
			if(http.readyState == 4){
				//The Response is ready
				var json_obj = JSON.parse(http.responseText);
				console.log(json_obj);
				dealData(json_obj);
			}

		}

		function dealData(json_obj){
			var myData = "";

			for(var i = 0; i < json_obj.length; i++){
				myData += json_obj[i].first + " " + json_obj[i].last + "</br>";
				console.log(myData[i]);

			}

			document.getElementById("list").innerHTML = myData;

		}

		function addUser(){
			let first = document.getElementById("first").value;
			let last = document.getElementById("last").value;

			if(http){
				http.open("GET", "addUser.php?first=" + first + "&last=" + last);
				http.onreadystatechange = handleHttpResponse;
				http.send(null);

			}

		}
			
		</script>
	</head>
	<body>
		<hr/>
        <br><br><br><br><br>
		<h3>Comment Form</h3>
		<form action="index.php" method="get">		
			Name(First and Last): <input type="text" id="name" name="name"/>
            Comment(s): <input type="textarea" id="commentbox" name="commentbox" rows = "4" cols = "50"/>
            <input type="submit" value="Add to the List"/>
        </form>

        <h3>Other Reviews</h3>
		<div id="list">
			<ul>
			</ul>

	</body>
</html>

<?php
    include($path . "assets/inc/footer.php");
?>