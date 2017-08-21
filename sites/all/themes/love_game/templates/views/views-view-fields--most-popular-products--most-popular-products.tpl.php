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

<div class="card-image waves-effect waves-block waves-light">
  <div class="wrapimg activator"><?php print render($row->field_field_product_image); ?></div>
</div>
<div class="card-content">
  <div class="center">
    <?php print $fields['add_to_cart_form']->content; ?>
  </div>
</div>

<div class="card-reveal">
  
  <?php print $fields['title']->content; ?>
  <?php print render($row->field_body); ?>
  </br>
  </br>
  <h4><?php print t('Price:') . ' ' . render($row->field_commerce_price); ?></h4>
  <?php print render($row->field_field_rating); ?>
  
  </br>
  </br>
  </br>
  </br>
  <div class="row">
    <h5 class="col m6 s12 center">
      <a href="#"><?php print t('Watch more'); ?></a>
    </h5>
    <span class="card-title grey-text text-darken-4 col m6 s12 center">
      <i style="color:#000; font-size:30px;" class="material-icons "><?php print t('close'); ?></i>
    </span>
  </div>
</div>