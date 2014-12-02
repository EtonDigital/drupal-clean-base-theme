<?php
/**
 * @file
 * theme-settings.php
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function scalar_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['grid'] = array(
    '#type' => 'fieldset',
    '#title' => t('Grid settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#weight' => -100,
  );

  $form['grid']['scalar_g_size'] = array(
    '#type' => 'select',
    '#title' => t('Grid Columns'),
    '#options' => array(
      8 => t('8 Columns'),
      12 => t('12 Columns'),
      14 => t('14 Columns'),
      16 => t('16 Columns'),
      18 => t('18 Columns'),
      20 => t('20 Columns'),
    ),
    '#default_value' => theme_get_setting('scalar_g_size') ?: 12,
  );

  $form['grid']['scalar_g_class'] = array(
    '#type' => 'select',
    '#title' => t('Grid Class'),
    '#options' => array(
      'col-xs' => t('col-xs'),
      'col-sm' => t('col-sm'),
      'col-md' => t('col-md'),
      'col-lg' => t('col-lg'),
    ),
    '#default_value' => theme_get_setting('scalar_g_class') ?: 'col-md',
  );
}
