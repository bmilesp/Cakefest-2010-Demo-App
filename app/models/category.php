<?php
// app/models/category.php
class Category extends AppModel {
	var $name = 'Category';
	var $actsAs = array('TreeFormat');
}
?>