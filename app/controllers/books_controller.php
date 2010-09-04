<?php
class BooksController extends AppController {

	var $name = 'Books';
	var $components = array('RequestHandler', 'FlexXml');
	var $helpers = array('Html', 'Form');

	function save(){
		$this->layout = false;
		$this->data = $this->FlexXml->toArray($this->params['form']['xml']);
		if($this->Book->save($this->data['Xml'])){
			$books = $this->Book->find('all');
			$this->set(compact('books'));
		}else{
			echo __('Book could not be saved', true);die;
		}
	}
	
	function delete() {
		$this->layout = false;
		if (!$this->params['form']['id']) {
			echo __('Invalid id for Book', true);die;
		}
		if ($this->Book->delete($this->params['form']['id'])) {
			echo __('Book deleted', true);die;
		}
		echo __('Book could not be deleted', true);die;
	}

}
?>