<?php

if (isset($_GET['lang']) && $_GET['lang']== 'en'){
    $_SESSION['lang'] = 'en';
    include_once 'lang/en.php';
}
if (isset($_GET['lang']) && $_GET['lang']== 'ar'){
    $_SESSION['lang'] = 'ar';
    include_once 'lang/ar.php';
}
if (!isset($_GET['lang']) && !isset($_SESSION['lang'])){
    include_once 'lang/en.php';
    $_SESSION['lang'] = 'en';

}

?>