<?php 
    $firstIndex = strripos($_SERVER["REQUEST_URI"], "/");
    $string=$_SERVER["REQUEST_URI"];
    $query=substr($string,$firstIndex+1,strlen($string));
    echo $query;
?>