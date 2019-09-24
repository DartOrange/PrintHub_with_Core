<?php

namespace app\controllers;

use printhub\Cache;

class ServiceController extends AppController{

	public function indexAction(){
		$meta = \R::findOne('meta', 'route = ?', [$_SERVER['REQUEST_URI']]);


		$this->setMeta($meta['title'], $meta['description'], 'дешево,типография, услуги типографии, печать, дешевая печать Киев, Услуги типографии в Киеве, Printhub');
	}

	public function viewAction(){
		$alias = $this->route['alias'];
		$lang = $this->route['lang'];
		$service = \R::findOne('service', 'alias = ? AND lang_code = ?', [$alias, $lang]);
		if(!$service){
			throw new Exception("Страница не найдена", 404);
		}

		$meta = \R::findOne('meta', 'route = ?', [$_SERVER['REQUEST_URI']]);


		$this->setMeta($meta['title'], $meta['description'], 'дешево,типография, услуги типографии, печать, дешевая печать Киев, Услуги типографии в Киеве, Printhub');
		$this->set(compact('service'));
	}

}