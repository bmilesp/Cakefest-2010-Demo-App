<?php 
/* SVN FILE: $Id$ */
/* Color Test cases generated on: 2010-08-23 23:56:13 : 1282622173*/
App::import('Model', 'Color');

class ColorTestCase extends CakeTestCase {
	var $Color = null;
	var $fixtures = array('app.color');

	function startTest() {
		$this->Color =& ClassRegistry::init('Color');
	}

	function testColorInstance() {
		$this->assertTrue(is_a($this->Color, 'Color'));
	}

	function testColorFind() {
		$this->Color->recursive = -1;
		$results = $this->Color->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Color' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'color'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>