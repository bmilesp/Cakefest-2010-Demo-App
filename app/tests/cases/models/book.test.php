<?php 
/* SVN FILE: $Id$ */
/* Book Test cases generated on: 2010-08-23 23:55:14 : 1282622114*/
App::import('Model', 'Book');

class BookTestCase extends CakeTestCase {
	var $Book = null;
	var $fixtures = array('app.book', 'app.category');

	function startTest() {
		$this->Book =& ClassRegistry::init('Book');
	}

	function testBookInstance() {
		$this->assertTrue(is_a($this->Book, 'Book'));
	}

	function testBookFind() {
		$this->Book->recursive = -1;
		$results = $this->Book->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Book' => array(
			'id'  => 1,
			'category_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'year_published'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>