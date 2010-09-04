<?php 
/* SVN FILE: $Id$ */
/* Shelf Test cases generated on: 2010-08-23 23:56:50 : 1282622210*/
App::import('Model', 'Shelf');

class ShelfTestCase extends CakeTestCase {
	var $Shelf = null;
	var $fixtures = array('app.shelf');

	function startTest() {
		$this->Shelf =& ClassRegistry::init('Shelf');
	}

	function testShelfInstance() {
		$this->assertTrue(is_a($this->Shelf, 'Shelf'));
	}

	function testShelfFind() {
		$this->Shelf->recursive = -1;
		$results = $this->Shelf->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Shelf' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>