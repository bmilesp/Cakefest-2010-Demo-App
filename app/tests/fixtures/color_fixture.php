<?php 
/* SVN FILE: $Id$ */
/* Color Fixture generated on: 2010-08-23 23:56:13 : 1282622173*/

class ColorFixture extends CakeTestFixture {
	var $name = 'Color';
	var $table = 'colors';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'color' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'color'  => 'Lorem ipsum dolor sit amet'
	));
}
?>