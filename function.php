<?php
function dd($value){
    echo "<pre>";

    var_dump($value);

    echo "</pre>";
}
 function uriIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
 }