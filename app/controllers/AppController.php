<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\language\Language;
use printhub\base\Controller;
use printhub\App;
use printhub\Cache;


class AppController extends Controller{
	
	public function __construct($route){
		parent::__construct($route);

		new AppModel();

		App::$app->setProperty('cats', self::cacheProduct());
		App::$app->setProperty('controller', $route['controller']);

		if (isset($route['lang'])) {
			$lang = $route['lang'];
			setcookie("lang", $lang, time() + 3600*24*7, '/');
			$_COOKIE['lang'] = $lang;
		}else{
			setcookie("lang", "ru", time() + 3600*24*7, '/');
			$_COOKIE['lang'] = "ru";
		}


		App::$app->setProperty('langs', Language::getLanguages());
		App::$app->setProperty('lang', Language::getLanguage(App::$app->getProperty('langs')));

		
	}



	public static function cacheProduct(){
		$cache = Cache::instance();
		$cats = $cache->get('cats');
		if(!$cats){
			$cats = \R::getAssoc("SELECT * FROM category");
			$cache->set('cats', $cats);
		}
		return $cats;
	}

}