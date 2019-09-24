<?php

namespace app\widgets\menu;

use printhub\App;
use printhub\Cache;
use RedUNIT\Base\Threeway;

class Menu{

	protected $data;
	protected $tree;
	protected $menuHtml;
	protected $mobile = "";
	protected $lang_code = "";
	protected $tpl; /*шаблон для меню*/
	protected $container = 'ul';
	protected $class = '';
	protected $table = 'category';
	protected $cache = 3600;
	protected $cacheKey = 'printhub_menu';
	protected $attrs = []; /*массив атрибутов*/
	protected $prepend = '';

	public function __construct($options = []){
		$this->tpl = __DIR__ . '/menu_tpl/menu.php';
		$this->getOptions($options);
		$this->run();
	}

	protected function getOptions($options){
		foreach ($options as $k => $v) {
			if(property_exists($this, $k)){
				$this->$k = $v;
			}
		}
	}


	protected function run(){
		$mobile = $this->mobile;
		$this->data = $cats = \R::getAssoc("SELECT * FROM {$this->table} WHERE `lang_code` = '{$this->lang_code}'");
		$cats = array_combine(range(1, count($this->data)), array_values($this->data));
		$this->data = array_combine(range(1, count($this->data)), array_values($this->data));
		$this->tree = $this->getTree();
		$this->menuHtml = $this->getMenuHtml($this->tree, $mobile, $this->lang_code);
		$this->output();
	}

	protected function output(){
		$attrs = '';
		if (!empty($this->attrs)) {
			foreach ($this->attrs as $k => $v) {
				$attrs .= " $k='$v' ";
			}
		}
		echo "<{$this->container} class='{$this->class}' $attrs>";
		echo $this->prepend;
		echo $this->menuHtml;
	}

	protected function getTree(){
		$tree = [];
        $data = $this->data;
        foreach ($data as $id=>&$node) {
            if (!$node['parent_id']){
                $tree[$id] = &$node;
            }else{
                $data[$node['parent_id']]['childs'][$id] = &$node;
            }
        }
        return $tree;
	}

	protected function getMenuHtml($tree, $mobile = '', $lang_code = '', $parCheck = 'false', $alias = '', $tab = ''){
		$str = '';
        foreach($tree as $id => $category){
            $str .= $this->catToTemplate($category, $tab, $id, $mobile, $lang_code, $parCheck, $alias);
        }
        return $str;
	}

	protected function catToTemplate($category, $tab, $id, $mobile, $lang_code, $parCheck, $alias){
		ob_start();
        require $this->tpl;
        return ob_get_clean();
	}
}