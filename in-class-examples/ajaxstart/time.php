<?php
    $myData = array("time"=> date("Y-m-d H:i:s") , "favColor" => "Red");

   
    echo json_encode($myData);
    //echo json_decode($myData);
    
    var_dump($myData);
?>