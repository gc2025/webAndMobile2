<!-- The Nav bar will be the same all across the web page -->
<img src="<?php echo $path?>assets/pictures/williamsportSeal_100px.png" alt="Seal of Williamsport" class="sealOfWill">
<nav class="dropdown">
        
    <ul class="nav nav-list container-fluid nav-collapse collapse in">
        <li><a href="<?php echo $path ?>index.php">Home</a></li>

        <li>Shopping
            <ul class="submenu">
                <li <?php if($title == "Local Resturants"){ echo 'class="active"'; } ?>  ><a href="<?php echo $path ?>localResturants/index.php">Local Resturants</a></li>
                <li <?php if($title == "Local Shops"){ echo 'class="active"'; } ?> ><a href="<?php echo $path ?>localShops/index.php">Local Shops</a></li>
                <li <?php if($title == "Local Theater"){ echo 'class="active"'; } ?>><a href="<?php echo $path ?>localTheater/index.php">Theater/Concert Venues</a> </li>
            </ul>

        </li>

        <li>Activities
            <ul class="submenu">
                <li <?php if($title == "Hiking"){ echo 'class="active"'; } ?>><a href="<?php echo $path ?>hiking/index.php">Hiking</a></li>
                <li <?php if($title == "Reptile Land"){ echo 'class="active"'; } ?>><a href="<?php echo $path ?>reptileLand/index.php">Reptile land</a></li>
                <li <?php if($title == "Little Leaugue Museum"){ echo 'class="active"'; } ?>><a href="<?php echo $path ?>littleLeaugeM/index.php">Little Leauge Museum</a></li>

            </ul>

        </li>

        <li>Landmarks
            <ul class="submenu">
                <li <?php if($title == "Bald Eagle"){ echo 'class="active"'; } ?>><a href="<?php echo $path ?>baldEagle/index.php">Eagle State Park</a></li>
                <li <?php if($title == "Pine Creek"){ echo 'class="active"'; } ?>><a href="<?php echo $path ?>pineC/index.php">Pine Creek State Park</a> </li>
                <li><?php if($title == "Loyalsock State Park"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>loyalS/index.php">Loyalsock State Park</a></li>
                <li><?php if($title == "Susquehanna Park"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>susqueP/index.php">Susquehanna State Park</a></li>

            </ul>

        </li>

        <li>History
            <ul class="submenu">
                <li><?php if($title == "Key Events"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>keyEvents/index.php">Key Events in Williamsport</a></li>
                <li><?php if($title == "Millionaire Row"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>millionaireRow/index.php">Millionaire Row</a></li>

            </ul>

        </li>

        <li>Contact
            <ul class="submenu">
                <li><?php if($title == "Visit Form"){ echo 'class="active"'; } ?><a href="https://cityofwilliamsport.org/">City Website</a></li>
                <li><?php if($title == "Visit Form"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>menu_forms/index.php">Feedback</a></li>
                <li><?php if($title == "Comments"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>comments/index.php">Comments Form</a></li>
            </ul>
        </li>

        <li>Sources/Grading
            <ul class="submenu">
                <li><?php if($title == "Sources/GradingSheet"){ echo 'class="active"'; } ?><a href="<?php echo $path ?>sources/index.php">Sources/Grading Sheet</a></li>
            </ul>

        </li>

    </ul>

</nav>

<!-- End of Nav Bar -->