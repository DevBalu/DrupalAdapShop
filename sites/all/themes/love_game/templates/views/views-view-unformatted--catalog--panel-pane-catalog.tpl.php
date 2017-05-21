<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="row">
<?php foreach ($rows as $id => $row): ?>
  <div class="col l4 m4 s12 clearfix">
    <div class="card">
      <?php print $row; ?>
    </div>
  </div>
<?php endforeach; ?>
</div>