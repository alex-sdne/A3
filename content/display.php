<?php
    
    $check = $_GET['product'];
    
    for($x = 0; $x < count($check); $x++) {
        echo "<br>Selected: ".$check[$x];
    }
    
?>

