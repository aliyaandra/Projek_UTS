<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Anisa", "Caca", "Okta", "Icha"];
    array_unshift($tims, "Malik", "Ucup");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
