<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can modify or override Drupal's theme
 *   functions, intercept or make additional variables available to your theme,
 *   and create custom PHP logic. For more information, please visit the Theme
 *   Developer's Guide on Drupal.org: http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to qol_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: qol_breadcrumb()
 *
 *   where qol is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override either of the two theme functions used in Zen
 *   core, you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */

function qol_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    // If the node type is "blog_madness" the template suggestion will be "page--blog-madness.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }
}


function qol_preprocess_node(&$vars, $hook)
{
  if($vars['teaser']) {
    $vars['theme_hook_suggestions'][] = 'node__'.$vars['node']->type.'_teaser';   
    $vars['theme_hook_suggestions'][] = 'node__'.$vars['node']->nid.'_teaser';
	$vars['theme_hook_suggestions'][] = 'node__'.$vars['node']->nid.'_teaser';
  }
  $vars['noderegion'] = theme('blocks', 'noderegion');
}




function qol_preprocess_html(&$variables) {
  global $user;
  
  if(arg(2) == "business"){
    $variables['classes_array'][] = "custom_business";
  }
  if(arg(2) == "individual"){
    $variables['classes_array'][] = "custom_individual";
  }
  if(arg(2) == "hospice"){
    $variables['classes_array'][] = "custom_hospice";
  }
  
  if(arg(0) == "user" && arg(2) == "edit" && !empty($user->roles)){
    if(in_array("business", $user->roles)){
      $variables['classes_array'][] = "custom_business_edit_form";
    }
    if(in_array("individual", $user->roles)){
      $variables['classes_array'][] = "custom_individual_edit_form";
    }
    if(in_array("hospice", $user->roles)){
      $variables['classes_array'][] = "custom_hospice_edit_form";
    }
    
  }
  
}

/* Put Breadcrumbs in a ul li structure */
function qol_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  
  $current_path = current_path();
  global $base_path;
  
  $nid_url = arg(1);
  if(!empty($nid_url)){
    $node_obj = node_load($nid_url);
    if($node_obj->type == "jobs"){
      $breadcrumb_added = array("<a href='".$base_path."node/53'>Job Board</a>");
      $breadcrumb = array_merge($breadcrumb, $breadcrumb_added);
    }
    
    if($node_obj->type == "news"){
      $breadcrumb_added = array("<a href='".$base_path."latest_news'>Latest News</a>");
      $breadcrumb = array_merge($breadcrumb, $breadcrumb_added);
    }
  }
  
  if (!empty($breadcrumb)) {
      $crumbs = '<ul class="breadcrumbs">';

      foreach($breadcrumb as $value) {
           $crumbs .= '<li>'.$value.' > </li>';
      }
      if(!empty($nid_url)){
        $crumbs .= '<li>'.$node_obj->title.'</li>';
      }
      if($current_path == "memorial")
    	{
    		$crumbs .= '<li>Memorial</li>';
    	}	
    	else if($current_path == "add-memorial")
    	{
    		$crumbs .= '<li>Add Memorial</li>';
    	}	
      $crumbs .= '</ul>';
      return $crumbs;
    }
    
    
    
  }

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function qol_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function qol_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function qol_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // qol_preprocess_node_page() or qol_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function qol_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function qol_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  $variables['classes_array'][] = 'count-' . $variables['block_id'];
}
// */
