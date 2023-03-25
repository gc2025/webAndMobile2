<nav class="subnav">
	<ol class="nav nav-list container-fluid nav-collapse collapse in">
		<li <?php if($title == "Home"){ echo 'class="active"'; } ?> ><a href="<?php echo $path ?>index.php">Home</a></li>
		<li <?php if($title == "People"){ echo 'class="active"'; } ?> ><a href="<?php echo $path ?>people/index.php">Our People</a></li>
		<li <?php if($title == "Tour"){ echo 'class="active"'; } ?> ><a href="<?php echo $path ?>tour/index.php">Tour</a></li>
        <li <?php if($title == "Test"){ echo 'class="active"'; } ?> ><a href="<?php echo $path ?>test.php">Test</li>
        <li <?php if($title == "Another"){ echo 'class="active"'; } ?> ><a href="<?php echo $path ?>test.php">Another Page</li>
	</ol>

</nav><!-- end subnav -->