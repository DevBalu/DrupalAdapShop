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