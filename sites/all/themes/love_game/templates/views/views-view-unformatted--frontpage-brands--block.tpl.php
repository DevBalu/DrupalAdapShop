<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="brands">
    <div data-flickity="{ &quot;groupCells&quot;: true, &quot;autoPlay&quot;: true}" class="carousel">
		<?php foreach ($rows as $id => $row): ?>
			<?php print $row; ?>
		<?php endforeach; ?>
	</div>
</div>