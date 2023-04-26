<!DOCTYPE html>
<html lang="en">
<head>
	<title>AJAX/JSON</title>
	<script>
		//setup - code to create the object
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
				myData += json_obj[i].first + " " + json_obj[i].last + " ";
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
<body onload="checkUsers()">
	<h3>The List</h3>
	<div id="list"></div>
	<hr/>
	<h3>Add to the list</h3>
	First name: <input type="text" id="first" />
	Last name: <input type="text" id="last" />
	<button type="button" onclick="addUser()">Add to the List </button>
</body>
</html>