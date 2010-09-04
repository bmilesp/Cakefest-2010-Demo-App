<?php 
/* SVN FILE: $Id$ */
/* Book Fixture generated on: 2010-08-23 23:55:14 : 1282622114*/

class BookFixture extends CakeTestFixture {
	var $name = 'Book';
	var $table = 'books';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'category_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'year_published' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'category_id'), 'unique' => 1), 'fk_demo_items_categories1' => array('column' => 'category_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'category_id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'year_published'  => 'Lorem ipsum dolor sit amet'
	));
}
?>