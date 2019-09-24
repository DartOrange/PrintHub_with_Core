<?php

function debug($arr){
	echo '<pre>' . print_r($arr, true) .'</pre>';
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }

    header("Location: $redirect");
}

function redirectMain($http){

    $redir_arr = preg_split ("/\//", $http);
    $new_redir = 'https://printhub/'.$_COOKIE['lang'].'/';
    header("Location: $new_redir");
    exit;
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function __($key){

	echo printhub\base\Lang::get($key);

}