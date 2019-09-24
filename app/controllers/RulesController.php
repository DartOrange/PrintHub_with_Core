<?php

namespace app\controllers;

use printhub\Cache;

class RulesController extends AppController{

	public function indexAction(){
		$meta = \R::findOne('meta', 'route = ?', [$_SERVER['REQUEST_URI']]);


		$this->setMeta($meta['title'], $meta['description'], 'дешево,типография, услуги типографии, печать, дешевая печать Киев, Услуги типографии в Киеве, Printhub');
	}

}