<?php
class Color extends AppModel {

	var $name = 'Color';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'Book' => array(
			'className' => 'Book',
			'joinTable' => 'colors_books',
			'foreignKey' => 'color_id',
			'associationForeignKey' => 'book_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>