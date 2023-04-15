<?php
    $title = "Visit Form";
    $path = "../";

    include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

?>
    <p class="visit_form">
        Tell Us About Your Visit!!!

    </p>

    <form class = "menuform">

        <label for="numOfPeop">How many people visited?:</label>
        <input type="number" id="numOfPeop" name="numOfPeop">

        </br>

        <label for="date">When did you/or family Visit?;</label>
        <input type="date" id="date" name="date">

        </br>

        <fieldset>
            <p>Favorite Place to visit?:</p>
            <input type="checkbox" id="repLand" name="location" value="Reptile_Land">
            <label for="repLand">Reptile Land</label><br>
            
            <input type="checkbox" id="littleL" name="location" value="Little_Leauge_Museum">
            <label for="littleL">Little Leauge Mueseum</label><br>

            <input type="checkbox" id="baldE" name="location" value="Bald_Eagle_State_Park">
            <label for="baldE">Bald Eagle State Park</label><br>

            <input type="checkbox" id="pineC" name="location" value="Pine_Creek_State_Park">
            <label for="pineC">Pine Creek State Park</label><br>

            <input type="checkbox" id="loyalS" name="location" value="Loyalsock_State_Park">
            <label for="loyalS">Loyalsock State Park</label><br>

            <input type="checkbox" id="susQ" name="location" value="Susquehanna_State_Park">
            <label for="susQ">Susquehanna State Park</label><br>

        </fieldset>
        
        <label for="rateTrip">Rate your visit to Williamsport:</label>
        <input type="range" id="rateTrip" name="rateTrip" min="0" max="10">

        <br>

        <label for="numOfPeop">How many people visited?:</label>
        <input type="number" id="numOfPeop" name="numOfPeop">
        
        <br>
        
        <label for="submit">submit</label>
        <input type="submit" id="numOfPeop" name="numOfPeop">

    </form>
    
<?php
    include($path . "assets/inc/footer.php");
?>
    