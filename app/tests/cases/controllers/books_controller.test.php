<?php 
/* SVN FILE: $Id$ */
/* BooksController Test cases generated on: 2010-08-23 23:55:32 : 1282622132*/
App::import('Controller', 'Books');

class TestBooks extends BooksController {
	var $autoRender = false;
}

class BooksControllerTest extends CakeTestCase {
	var $Books = null;

	function startTest() {
		$this->Books = new TestBooks();
		$this->Books->constructClasses();
	}

	function testBooksControllerInstance() {
		$this->assertTrue(is_a($this->Books, 'BooksController'));
	}

	function endTest() {
		unset($this->Books);
	}
}
?>