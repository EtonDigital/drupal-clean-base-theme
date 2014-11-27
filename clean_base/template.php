<?php
/**
 * Implements theme_menu_tree().
 */
function clean_base_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}
