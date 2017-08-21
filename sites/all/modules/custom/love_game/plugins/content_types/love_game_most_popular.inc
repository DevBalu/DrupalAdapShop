<?php

$plugin = array(
  'title' => t('Love Game Most Popular'),
  'description' => t('Display Love Game the most popular products'),
  'category' => t('Love Game'),
  'edit form' => 'love_game_love_game_most_popular',
  'render callback' => 'love_game_love_game_most_popular_render',
  'defaults' => array(),
  'all contexts' => TRUE,
);

/**
 * Edit form.
 */
function love_game_love_game_most_popular($form, &$form_state) {
  return $form;
}

/**
 * Render the panel.
 */
function love_game_love_game_most_popular_render($subtype, $conf, $args, $contexts) {
  $block = new stdClass();
  $categories = array();

  if (empty($conf['category'])) {
    return $block;  
  }
  
  $category_terms = taxonomy_get_tree($conf['category']);
  foreach ($category_terms as $term) {
    // Get first level terms.
    if (!current($term->parents)) {
      $categories[$term->tid] = array('children' => array(), 'name' => $term->name);
    }
    else {
      // Add children.
      if (isset($categories[current($term->parents)])) {
        $categories[current($term->parents)]['children'][$term->tid] = $term->name;
      }
    }
  }
  $tids = array_keys($categories);
  $terms = taxonomy_term_load_multiple($tids);
  $position = 1;
  foreach ($categories as $tid => $category) {
    if ($position > 4) {
      $position = 1;
    }
    // $image_data = image_data('taxonomy_term', $terms[$tid], 'field_image');
    $categories[$tid]['image'] = image_style_url('love_game_most_popular', $image_data['uri']);
    $categories[$tid]['position'] = $position;
    $position++;
  }

  // Render as a block.
  $block->content = theme('love_game_most_popular', array('categories' => $categories));
  return $block;
}

/**
 * Custom function for rendering image field from an instance like node, user, term.
 */
// function image_data($entity_type_id, $entity_object, $field_name) {
//   $field = field_get_items($entity_type_id, $entity_object, $field_name);
//   $output = field_view_value($entity_type_id, $entity_object, $field_name, $field[0]);

//   return $output['#item'];
// }