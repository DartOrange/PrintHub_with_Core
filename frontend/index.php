<?php


require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

if(!(strpos($_SERVER['REQUEST_URI'], "sitemap") == 1)){

var_dump($_SERVER['REQUEST_URI']);

$url_test = $_SERVER['REQUEST_URI'];
$uriParts = explode("/", $url_test);
$language = $uriParts['1'];

//var_dump($uriParts);
//var_dump($language);
/*
var_dump($language);
if (($language !== "ru") and ($language !== "ua") and ($language !== "en")) {
    var_dump($url_test);
    var_dump("true");
}*/


if (($language !== "ru") and ($language !== "ua") and ($language !== "en")) {
    if(isset($_COOKIE['lang'])){
        $url .= '/' . $_COOKIE['lang'] . $url_test;
        setcookie("lang", $_COOKIE['lang'], time() + 3600*24*7, '/');
        $_COOKIE['lang'] = $_COOKIE['lang'];
        //var_dump($_COOKIE['lang']);
        //header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$url);
    }else{
        $url .= '/ru' . $url_test;
        setcookie("lang", "ru", time() + 3600*24*7, '/');
        $_COOKIE['lang'] = "ru";
        //var_dump($_COOKIE['lang']);
        //header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$url);
    }
}


$url_slash = "/".str_replace(':/','://', trim(preg_replace('/\/+/', '/', $_SERVER['REQUEST_URI']), '/'));

     if ($_SERVER['REQUEST_URI'] != $url_slash) {
             header("HTTP/1.1 301 Moved Permanently");
             header("Location: ".$url_slash);
             die();
         }

     if ( $_SERVER['REQUEST_URI'] != strtolower( $_SERVER['REQUEST_URI']) ) {
    		header("HTTP/1.1 301 Moved Permanently");
            header('Location: ' . 
            strtolower($_SERVER['REQUEST_URI']), true, 301);
    		die();
		}

	if( strripos($_SERVER['HTTP_HOST'], "www.") === 0){
			header("HTTP/1.1 301 Moved Permanently");
            header('Location: '. 
            $_SERVER['REQUEST_URI'], true, 301);
    		die();
	}

	if( strripos($_SERVER['HTTP_HOST'], "printhub.kiev.ua") === 0){
			header("HTTP/1.1 301 Moved Permanently");
            header('Location: ' . 
            $_SERVER['REQUEST_URI'], true, 301);
    		die();
	}

    
}






new \printhub\App();


