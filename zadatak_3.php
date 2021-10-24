<?php
$date1="12.19.21";
$date2="12.25.21";
$date3="10.28.21";

if($date1==date("m.d.y")) {
    echo "Sretan rodendan Jelena!";
    }
    else if($date2==date("m.d.y")){
        echo "Sretan Božić svima!";
    }
    else if($date3==date("m.d.y")){
        echo "Danas je predavanje iz kolegija Napredne tehnike programiranja web servisa";
    }
    else{
        echo "Danas nije važan dan. Bezveze...";
    }
?>

