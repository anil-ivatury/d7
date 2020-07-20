<?php

/**
 * @file
 * know_our_lines_of_business.features.inc
 */

/**
 * Implements hook_views_api().
 */
function know_our_lines_of_business_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function know_our_lines_of_business_node_info() {
  $items = array(
    'lines_of_business' => array(
      'name' => t('Lines of business'),
      'base' => 'node_content',
      'description' => t('Lines of business'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
