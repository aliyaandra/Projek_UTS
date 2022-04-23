<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Anisa", "Caca", "Okta", "Icha"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
