<?php

	$title = "Cost";
	$path = "./";

	include($path . "assets/inc/header.php");

    $customerName = $_POST['customerName'];

    $customerID = $_POST['customerID'];

    $pizzaSize = $_POST['pizzaSize'];

    if($customerID == ""){
            echo "<p> Your forgot an ID, Go Back and re-submit </p>";
            echo "<form action='orderform.php' method='get'>
                <input type='hidden' name='name' value='".$customerName."'/>
                <input type='submit' value='ok'>
                </form>";
    }else{
        if( !is_numeric($customerID) ){
            echo"<p> You entered an invalid ID, use only numerical values </p>";

            header("Location: orderform.php?name=".$customerName);

        }else{
            //Pretty sure it is ok so now we process
            switch($pizzaSize){
                case 'p':
                    $pizzaCost = 7.99;
                    $pizzaType = "Personal";
                    break;
                
                case 'S':
                    $pizzaCost = 10.99;
                    $pizzaType = "Personal";
                    break;

                case 'M':
                    $pizzaCost = 12.99;
                    $pizzaType = "Personal";
                    break;

                case 'L':
                    $pizzaCost = 16.99;
                    $pizzaType = "Personal";
                    break;

                default:
                    $pizzaCost = 12.99;
                    $pizzaType = "Personal";

            }

            $taxAmount =  $pizzaCost * .08;
            $totalCost = $taxAmount + $pizzaCost;

            die("Total Cost: " . $pizzaCost . " Size: " . $pizzaSize);

            $fmt = numfmt_create('en_US',NumberFormatter::CURRENCY);

            echo "Tax: " . numfmt_format_currency($fmt, $taxAmount, "USD");
            echo "Tax: " . numfmt_format_currency($fmt, $totalCost, "USD");

            ?>

                Total: <?php  echo "Tax: " . numfmt_format_currency($fmt, $totalCost, "USD"); ?>. it will be ready in 5 mins

            <?php

                echo "Thank you for your order" . $_POST($customerName) . "!";
                
        }

    }

?>

    Display Total

<?php

include($path . "assets/inc/footer.php")

?>