<?php
/**
 * @file
 * The primary PHP file for the Drupal Love Game theme.
 */

function love_game_js_alter(&$js) {
	if (isset($js['misc/jquery.js'])) {
		unset($js['misc/jquery.js']);
	}
}

function love_game_preprocess_node(&$vars) {
  if ($vars['type'] == 'product') {
    if (isset($vars['field_product'][0])) {
      $product_id = $vars['field_product'][0]['product_id'];
    }
    else {
      $product_id = $vars['field_product'][LANGUAGE_NONE][0]['product_id'];
    }
    $product = commerce_product_load($product_id);
    $price = commerce_product_calculate_sell_price($product);
    $price_display = commerce_currency_format($price['amount'], $price['currency_code'], $product);
    $uri = $product->field_product_image[LANGUAGE_NONE][0]['uri'];
    
    // Get "Add to cart" for for current product.
    $form_id = commerce_cart_add_to_cart_form_id(array($product->product_id));  
    // Default quantity is 1;
    $line_item = commerce_product_line_item_new($product, 1);
    $line_item->data['context']['product_ids'] = array($product->product_id);
    $form = drupal_get_form($form_id, $line_item);

    $vars['product_description'] = $vars['body'][0]['value'];
    $vars['product_price'] = $price_display;
    $vars['product_image'] = file_create_url($uri);
    $vars['product_add_to_cart'] = drupal_render($form);

    $specifications = array();
    if ($product->field_item_specifications) {
      $ids = array();
      foreach ($product->field_item_specifications[LANGUAGE_NONE] as $item) {
        $ids[] = $item['value'];
      }
      $field_collection_items = entity_load('field_collection_item', $ids);
      foreach ($field_collection_items as $field_collection) {
        $specifications[] = array(
          'name' => $field_collection->field_specification_name[LANGUAGE_NONE][0]['value'],
          'details' => $field_collection->field_specification_details[LANGUAGE_NONE][0]['value'],
        );
      }
    }
    $vars['product_specifications'] = $specifications;
    $rating = field_view_field('commerce_product', $product, 'field_rating', 'oxygen');
    $vars['product_rating'] = $rating;
    // print '<pre>';
    // print_r($fivestar);
    // print_r($product);
    // print '</pre>';die;
  }
}

function love_game_preprocess_html(&$vars) {
  // draw main menu.
  $menu_array = menu_navigation_links('main-menu');
  $links = array();
  if (!empty($menu_array)) {
    foreach ($menu_array as $item) {
      $links[] = array(
        'title' => strtoupper($item['title']),
        'href' => $item['href'],
      );
    }
  }
  $vars['love_game_menu_desktop'] = theme('links', array(
    'links' => $links,
    'attributes' => array('id' => 'nav-desktop', 'class' => array('right', 'hide-on-med-and-down')),
  ));
  $vars['love_game_menu_mobile'] = theme('links', array(
    'links' => $links,
    'attributes' => array('id' => 'nav-mobile', 'class' => array('dropdown-content', 'drop')),
  ));
	
  if (module_exists('path')) {
  	$alias = drupal_get_path_alias(str_replace('/edit', '', $_GET['q']));
  	if ($alias != $_GET['q']) {
  		$template_filename = 'html';
  		foreach (explode('/', $alias) as $path_part) {
    		$template_filename = $template_filename . '__' . $path_part;
    		$vars['theme_hook_suggestions'][] = $template_filename;
  		}
    }
  }
}