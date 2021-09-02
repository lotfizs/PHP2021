<?php
function palindroom() {
    $string = "kok";
    $bool = false;
    if (strrev($string) == $string) {
        $bool = true;
    } else {
        $bool = false;
    }
    return $bool;

}