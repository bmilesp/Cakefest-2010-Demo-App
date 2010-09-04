<?php 
/* SVN FILE: $Id$ */
/* ShelvesController Test cases generated on: 2010-08-23 23:56:30 : 1282622190*/
App::import('Controller', 'Shelves');

class TestShelves extends ShelvesController {
	var $autoRender = false;
}

class ShelvesControllerTest extends CakeTestCase {
	var $Shelves = null;

	function startTest() {
		$this->Shelves = new TestShelves();
		$this->Shelves->constructClasses();
	}

	function testShelvesControllerInstance() {
		$this->assertTrue(is_a($this->Shelves, 'ShelvesController'));
	}

	function endTest() {
		unset($this->Shelves);
	}
}
?>