<?php

// MENU
function jfa_menu_tree($variables) {
  return '<ul class="nav navbar-nav" id="mainNav">' . $variables ['tree'] . '</ul>';
}

// PAGE BASED ON CONTENTTYPES
function jfa_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

//
function jfa_theme() {
  return array(
    'user_login' => array(
      'template' => 'user-login',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
    'user_register' => array(
      'template' => 'user-register',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
    'user_pass' => array(
      'template' => 'user-pass',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
  );
}

//
function jfa_preprocess_user_login(&$variables) {
	$variables['form'] = drupal_build_form('user_login', user_login(array(),$form_state)); ## I have to build the user login myself.
}

// Change search placeholder
function jfa_form_alter( &$form, &$form_state, $form_id ) {
if (in_array( $form_id, array( 'search_form')))
    {
        // Adding placeholders to fields
  $form['basic']['keys']['#attributes']['placeholder'] = t( 'Enter search terms...' );
    }
}

function hook_init() {
$result = db_query("select uri from file_managed where type = 'image' order by filesize desc limit 0,5");
while ($filename = $result->fetchField()) {
  if ($filename) {
    $image = image_load($filename);
    dpm($image->source);
    dpm($image->info['file_size']);
    if ($image) {
      image_save($image);
      dpm($image->info['file_size']);
    }
  }
}
}