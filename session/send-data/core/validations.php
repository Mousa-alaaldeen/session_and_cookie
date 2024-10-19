<?php
function requiredInput($input) {
    if (empty($input)) { 
        return true; 
    }
    return false; 
}


function minInput($input, $length) {
    return strlen($input) < $length;
}


function maxInput($input, $length) {
    return strlen($input) > $length;
}