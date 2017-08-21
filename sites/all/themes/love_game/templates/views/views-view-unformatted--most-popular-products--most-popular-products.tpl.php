<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="tpSlideshow">
  <h3 class="center"><?php print t('Similar items'); ?></h3>
    <div data-flickity="{ &quot;groupCells&quot;: true, &quot;autoPlay&quot;: false}" class="carousel">

      <?php foreach ($rows as $id => $row): ?>
        <?php if ($id): ?>
          <div class="carousel-cell">
            <div class="row">
              <div>
                <div class="card">
                  <?php print $row; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

  </div>
</div>