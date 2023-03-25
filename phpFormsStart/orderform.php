<?php

	$title = "Order a Pizza!";
	$path = "./";

	include($path . "assets/inc/header.php")

?>

<h2>Order a Delicious Pizza!</h2>
<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">



<p>Name:  <input type="text" name="customerName" value="<?php if(isset($_GET['name'])){ echo $_GET ['name']; }?>" /></p>
	<p>ID:  <input type="text"  name="customerID"  /></p>
	<p> Check the size of Pizza you would like to order:<br />
	<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
		<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
		<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
		<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
	</p>
	<p>
	<input type="submit"  name="Submit"  value=" Send Form"  />
	</p>
</form>

<?php

	include($path . "assets/inc/footer.php")

?>

