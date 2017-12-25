<?php

if(isset($_GET['lang']) && $_GET['lang']=="en"){
    unset($_SESSION['lang']);
    $_SESSION['lang']=true;
    $_SESSION['lang']="en";
    include_once "lang/en.php";
//    header("Location:index.php");
}

if(isset($_GET['lang']) && $_GET['lang']=="ar"){
    unset($_SESSION['lang']);
    $_SESSION['lang']=true;
    $_SESSION['lang']="ar";
    include_once "lang/ar.php";
//    header("Location:index.php");
}

if(!isset($_GET['lang']) && !isset($_SESSION['lang'])){
    $_SESSION['lang']="en";
    include_once "lang/en.php";
}


if(isset($_SESSION['lang']) && $_SESSION['lang']=="ar"){

include_once "lang/ar.php";
}
if(isset($_SESSION['lang']) && $_SESSION['lang']=="en"){
include_once "lang/en.php";
}


?>