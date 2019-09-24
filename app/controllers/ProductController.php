<?php

namespace app\controllers;

use printhub\Cache;
use printhub\App;

class ProductController extends AppController{

	public function indexAction(){
		$meta = \R::findOne('meta', 'route = ?', [$_SERVER['REQUEST_URI']]);


		$this->setMeta($meta['title'], $meta['description'], 'дешево,типография, услуги типографии, печать, дешевая печать Киев, Услуги типографии в Киеве, Printhub');
	}

	public function viewAction(){
		$lang = $this->route['lang'];
		$alias = $this->route['alias'];
		$product = \R::findOne('product', 'alias = ? AND lang_code = ?', [$alias, $lang]);
		if(!$product){
			throw new Exception("Страница не найдена", 404);
		}


		$meta = \R::findOne('meta', 'route = ?', [$_SERVER['REQUEST_URI']]);


		$this->setMeta($meta['title'], $meta['description'], 'дешево,типография, услуги типографии, печать, дешевая печать Киев, Услуги типографии в Киеве, Printhub');
		$this->set(compact('product'));
	}

}