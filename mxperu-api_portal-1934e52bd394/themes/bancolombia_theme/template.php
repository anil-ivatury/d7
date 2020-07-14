<?php
// bancolombia-theme
// based on sky by Adaptivethemes.com

/**
 * Override or insert variables into the html template.
 */
function bancolombia_theme_preprocess_html(&$vars) {
  global $theme_key;
  $theme_name = $theme_key;

  // Add class for the active theme
  $vars['classes_array'][] = drupal_html_class($theme_name);
   drupal_add_css('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array('type' => 'external'));
   drupal_add_css('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap', array('type' => 'external'));
   drupal_add_css('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap', array('type' => 'external'));
   drupal_add_js('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('type' => 'external'));
   drupal_add_js('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('type' => 'external'));
}
/**
 * Implements hook_css_alter().
 */
function bancolombia_theme_css_alter(&$css) {
  // Use our vertical tabs style instead of the default one.
  //print_r($css);
  if (isset($css['sites/all/themes/connect_theme/css/forms.css'])) {
   unset($css['sites/all/themes/connect_theme/css/forms.css']);
  }
   if (isset($css['sites/all/themes/connect_theme/color/colors.css'])) {
   unset($css['sites/all/themes/connect_theme/color/colors.css']);
  }
  if (isset($css['sites/all/themes/connect_theme/css/navigation.css'])) {
  //unset($css['sites/all/themes/connect_theme/css/navigation.css']);
  }
}
function bancolombia_theme_form_alter(&$form, &$form_state, $form_id) {
 // print form ID to messages
  //drupal_set_message(print_r($form, TRUE));  // print array to messages
  $uid_img = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512">
<title></title>
<g id="icomoon-ignore">
</g>
<path d="M288 353.306v-26.39c35.249-19.864 64-69.386 64-118.916 0-79.529 0-144-96-144s-96 64.471-96 144c0 49.53 28.751 99.052 64 118.916v26.39c-108.551 8.874-192 62.21-192 126.694h448c0-64.484-83.449-117.82-192-126.694z"></path>
</svg>';
$pass_img = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>lock</title>
<path d="M18.5 14h-0.5v-6c0-3.308-2.692-6-6-6h-4c-3.308 0-6 2.692-6 6v6h-0.5c-0.825 0-1.5 0.675-1.5 1.5v15c0 0.825 0.675 1.5 1.5 1.5h17c0.825 0 1.5-0.675 1.5-1.5v-15c0-0.825-0.675-1.5-1.5-1.5zM6 8c0-1.103 0.897-2 2-2h4c1.103 0 2 0.897 2 2v6h-8v-6z"></path>
</svg>
';
  if ($form_id == "user_login" ){
	//echo "<pre>";
	// print_r($form);
	 //$form['name']['#title'] = t('user');
	$form['name'] = array(
	        '#type'=> 'textfield',
			'#title'=>t('user'),
			'#requred'=>'1',
			'#prefix' => ' <div class="g-input g-input--icon pt-4">',
			'#suffix' => ' <i class="icon">'.$uid_img.'</i></div><div class="text-right pb-3"></div>', 
    );
	$form['pass'] = array(
	        '#type'=> 'password',
			'#title'=>t('key'),
			'#requred'=>'1',
			'#prefix' => ' <div class="g-input g-input--icon ">',
			'#suffix' => ' <i class="icon">'.$pass_img.'</i></div><div class="text-right pb-3">
                    <a class="g-link" href="/user/password">Forgot your password?</a>
                  </div>', 
    );
	$form['actions']['submit']['#value'] =  t('Continue');
	// print_r();

    
  }
}