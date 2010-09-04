<?php 
/* SVN FILE: $Id$ */
/* Shelf Fixture generated on: 2010-08-23 23:56:50 : 1282622210*/

class ShelfFixture extends CakeTestFixture {
	var $name = 'Shelf';
	var $table = 'shelves';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet'
	));
}
?>