<?php 
class CategoriesController extends AppController{
	
	function index(){
		$this->layout = null;
		$categories = $this->Category->nestedArray();
		$this->set(compact('categories'));
	}
	
}
?>