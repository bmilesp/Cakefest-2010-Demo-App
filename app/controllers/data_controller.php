<?php 

class DataController extends AppController{
	
	var $uses = array('Category', 'Book', 'Color', 'Shelf');
	
	function index(){
		$this->layout = null;
		/*
		 * the category model uses an extension of the tree behavior method
		 * i made which takes the resulting tree data and makes a 
		 * nested array that wil be converted to xml in a format usable
		 * in flex's own tree behavior.
		 */
		$categories = $this->Category->nestedArray();
		$colors = $this->Color->find('all',array('recursive'=>-1));
		$shelves = $this->Shelf->find('all',array('recursive'=>-1));
		$books = $this->Book->find('all');
		$this->set(compact('categories', 'colors', 'shelves','books'));
	}
		
}

?>