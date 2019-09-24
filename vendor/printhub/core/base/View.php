<?php

namespace printhub\base;

use printhub\App;
use Valitron\Validator;

class View{

	public $route;
	public $controller;
	public $model;
	public $view;
	public $prefix;
	public $lang;
	public $langs;
	public $layout;
	public $data = [];
	public $meta = [];

	public function __construct($route, $layout = '', $view = '', $meta){
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->view = $view;
		$this->model = $route['controller'];
		$this->prefix = $route['prefix'];
		if(isset($route['lang'])){
			$this->lang = $route['lang'];
		}else{
			$this->lang = "ru";
		}
		$this->meta = $meta;
		if($layout === false){
			$this->layout = false;
		}else{
			$this->layout = $layout ?: LAYOUT;
		}
	}

	public function render($data){
		Lang::load($_COOKIE['lang'], $this->route);
		$lang = $_COOKIE['lang'];
		$langs = \R::getAssoc("SELECT code, full_name, base FROM language ORDER BY base DESC");
		if (is_array($data)) extract($data);
		$viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
		if(is_file($viewFile)){
			ob_start();
			require_once $viewFile;
			$content = ob_get_clean();
		}else{
			throw new Exception("Не найден вид {$viewFile}", 404);
		}
		if (false !== $this->layout) {
			$layoutFile = APP . "/views/layouts/{$this->layout}.php";
			if(is_file($layoutFile)){
				require_once $layoutFile;
			}else{
				throw new Exception("Не найден шаблон {$this->layout}", 404);
			}
		}
	}

	public function getMeta(){
		$output = '<title>' . $this->meta['title'] . '</title>';
		$output .= '<meta name="description" content="' . $this->meta['desc'] . '">';
		$output .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">';
		return $output;
	}

}