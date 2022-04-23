<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Anisa", "Caca", "Okta", "Icha"];
    array_pop($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
