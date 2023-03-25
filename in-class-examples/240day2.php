<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $name = "Gabriel-Carson";
    
    ?>

    <?php
        echo $name;
        //$image_array = new Array();
        $image_array[0] = "https://loremflickr.com/340/360";
        $image_array[1] = "https://loremflickr.com/340/360";
        $image_array[2] = "https://loremflickr.com/340/360";

        $randNum = rand(0,2);

        echo "<img src='". $image_array[$randNum] . "'>";

        echo $_SERVER['REMOTE_ADDR'], "/br";

        if(!empty($_GET['lastname'])){
            echo $_GET['lastname'];
        }
        
    
    ?>

    <form method="GET">
        Name: <input type="text" name="name" />
        <input type="submit">

    </form>

    <img src="<?php $image_array[$randNum] ?>">
    
</body>
</html>