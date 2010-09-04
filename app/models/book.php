<?php
class Book extends AppModel {

	var $name = 'Book';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Shelf'
	);
	
	var $hasAndBelongsToMany = array(
		'Color' => array(
			'className' => 'Color',
			'joinTable' => 'colors_books',
			'foreignKey' => 'book_id',
			'associationForeignKey' => 'color_id',
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