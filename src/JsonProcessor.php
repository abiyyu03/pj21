<?php

function jsonProcessor($data)
{
    $arr = [];
    
    while ($parseSql = mysqli_fetch_assoc($data)) {
        $arr[] = $parseSql;
    }
    
    $parse = json_encode($arr);
    echo $parse;
}