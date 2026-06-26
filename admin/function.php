<?php
function pr($arr){
    echo '<pre>' ;
    print_r($arr); // Add semicolon here
}

function prx($arr){
    echo '<pre>' ;
    print_r($arr); // Add semicolon here
    die();
}

function get_safe_value($conn,$str){
    if($str!=''){
        $str=trim($str);
        return mysqli_real_escape_string($conn,$str);
    }
}
?>