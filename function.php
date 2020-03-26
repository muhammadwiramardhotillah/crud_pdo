<?php
session_start();
define(FLASH_PREFIX,'Flash_')

function set_flash($key,$val){
    $_SESSION[FLASH_PREFIX.$key]=$val;
}

function is_flash($key){
    return array_key_exits(FLASH_PREFIX.$key,$_SESSION);
}
function get_flash($key){
    return $_SESSION[FLASH_PREFIX.$key];
}
function pop_flash($key){
    $ret=$_SESSION[FLASH_PREFIX.$key];
    unset($_SESSION[FLASH_PREFIX.$key]);
    return $ret;
}
?>