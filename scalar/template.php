<?php
/**
 * Implement of hook_preprocess_region()
 */
/**
 * Add body classes if certain regions have content.
 */
function scalar_preprocess_page(&$vars) {
  $grid_class = theme_get_setting('scalar_g_class') ?: 'col-md' . '-';
  $content_size = theme_get_setting('scalar_g_size') ?: 12;

  $regions = system_region_list('scalar', REGIONS_VISIBLE);
  unset($regions['content']);

  $vars['region_class'] = array();
  foreach(array_keys($regions) as $region) {
    if($vars['page'][$region]) {
      $size = theme_get_setting('scalar_r_' . $region, 'scalar');

      $vars['region_class'][$region] = $size ?  $grid_class . $size : '';
      if(substr($region, 0, 7) == 'sidebar' && !empty($size)) {
        $content_size -= $size;
      }
    }
  }

  // Set class for content
  $vars['region_class']['content'] = $grid_class . $content_size;
}

/**
 * Implements theme_menu_tree().
 */
function scalar_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * @param $css
 */
//function scalar_css_alter(&$css) {
//
//  // Remove Drupal core css
//  $exclude = array(
////    'modules/block/block.css' => FALSE,
////    'modules/comment/comment.css' => FALSE,
////    'modules/field/theme/field.css' => FALSE,
////    'modules/file/file.css' => FALSE,
////    'modules/filter/filter.css' => FALSE,
////    'modules/forum/forum.css' => FALSE,
////    'modules/menu/menu.css' => FALSE,
////    'modules/node/node.css' => FALSE,
////    'modules/search/search.css' => FALSE,
////    'modules/statistics/statistics.css' => FALSE,
////    'modules/syslog/syslog.css' => FALSE,
////    'modules/system/admin.css' => FALSE,
////    'modules/system/maintenance.css' => FALSE,
////    'modules/system/system.css' => FALSE,
////    'modules/system/system.admin.css' => FALSE,
////    'modules/system/system.base.css' => FALSE,
////    'modules/system/system.messages.css' => FALSE,
////    'modules/system/system.menus.css' => FALSE,
////    'modules/system/system.theme.css' => FALSE,
////    'modules/taxonomy/taxonomy.css' => FALSE,
////    'modules/tracker/tracker.css' => FALSE,
////    'modules/update/update.css' => FALSE,
////    'modules/user/user.css' => FALSE,
////    'misc/vertical-tabs.css' => FALSE,
////
////    // Remove contrib module CSS
////    drupal_get_path('module', 'views') . '/css/views.css' => FALSE,
//  );
//
//  $css = array_diff_key($css, $exclude);
//}