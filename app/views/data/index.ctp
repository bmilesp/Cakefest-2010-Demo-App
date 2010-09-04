<?php echo $xml->header(); ?>
<data>
	<?php echo $xml->serialize($categories); ?>
	<?php echo $xml->serialize($colors); ?>
	<?php echo $xml->serialize($books);?>
	<?php echo $xml->serialize($shelves);?>
</data>