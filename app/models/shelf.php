<?php
class Shelf extends AppModel {

	var $name = 'Shelf';

	var $hasMany = array('Book');

}
?>