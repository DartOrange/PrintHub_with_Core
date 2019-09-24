<?php

namespace app\widgets\language;

use printhub\App;

class Language{

protected $tpl;
protected $languages;
protected $language;
protected $urlCode;
protected $controller;

public function __construct(){
	$this->tpl = __DIR__ . '/lang_tpl.php';
	$this->urlCode = App::$app->getProperty('langCode');
	$this->run();
}

protected function run(){
	$this->languages = App::$app->getProperty('langs');
	$this->language = App::$app->getProperty('lang');
	$this->controller = App::$app->getProperty('controller');
	echo $this->getHtml();
}


public static function getLanguages(){
	return \R::getAssoc("SELECT code, full_name, base FROM language ORDER BY base DESC");
}

public static function getLanguage($languages){
	
	if(isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $languages))	{
		$key = $_COOKIE['lang'];
	}else{
		$key = key($languages);
	}

	$lang = $languages[$key];
	$lang['code'] = $key;
	return $lang;
}

protected function getHtml(){
	ob_start();
	require_once $this->tpl;
	return ob_get_clean();
}

}