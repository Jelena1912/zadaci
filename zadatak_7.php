<?php

if (date('w') < 6 && date('w') > 0) {
    if (date("H") >= 8 && date("H") <= 16) {
        echo "Dućan radi!";
    } else {
        echo "Dućan je zatvoren!";

    }
}
if (date('w') == 6) {
    if (date("H") >= 9 && date("H") <= 14) {
        echo "Dućan radi!";
    } else {
        echo "Dućan je zatvoren!";
    }
}
?>