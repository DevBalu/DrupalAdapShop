<?php  
	/**
	 * @file
	 * Love Game Slideshow template
	 *
	 * Variables:
	 * - $images : An array with image style urls and associated fid as keys.
	 */
?>

<div class="infoSlides">
	<div class="carousel">

	<?php if (!empty($images)): ?>
		<?php foreach ($images as $image): ?>
			<a href="#" class="carousel-item"><img src="<?php print $image; ?>"></a>
		<?php endforeach; ?>
	<?php endif; ?>

	</div>
</div>