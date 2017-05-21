<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="card">
  <div class="card-image"><div class="material-placeholder"><?php print $fields['field_product_image']->content; ?></div></div>
  <div class="card-content"><a href="<?php print $fields['path']->content; ?>"> 
    <h4><?php print $fields['title_1']->raw; ?></h4></a>
    <h6><?php print $fields['field_category']->content; ?></h6>
  </div>
  <div class="card-action row">
    <span class="col l6 m6 s6">
      <?php print $fields['field_rating']->content; ?>
    </span>
    <span class="price col s6">
      <span><?php print $fields['commerce_price']->content; ?></span>
    </span>
  </div>
</div>