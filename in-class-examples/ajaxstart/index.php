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


	</script>
</head>
<body onload="">
	<h3>The List</h3>
	<div id="list"></div>
	<hr/>
	<h3>Add to the list</h3>
	First name: <input type="text" id="first" />
	Last name: <input type="text" id="last" />
	<button type="button" onclick="">Add to the List </button>
</body>
</html>