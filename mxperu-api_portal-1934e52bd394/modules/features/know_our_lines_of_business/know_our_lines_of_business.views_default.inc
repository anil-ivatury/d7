<?php

/**
 * @file
 * know_our_lines_of_business.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function know_our_lines_of_business_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'line_of_business';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Line of Business';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '4';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['exclude'] = TRUE;
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Image lines of business */
  $handler->display->display_options['fields']['field_image_lines_of_business']['id'] = 'field_image_lines_of_business';
  $handler->display->display_options['fields']['field_image_lines_of_business']['table'] = 'field_data_field_image_lines_of_business';
  $handler->display->display_options['fields']['field_image_lines_of_business']['field'] = 'field_image_lines_of_business';
  $handler->display->display_options['fields']['field_image_lines_of_business']['label'] = '';
  $handler->display->display_options['fields']['field_image_lines_of_business']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_image_lines_of_business']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image_lines_of_business']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image_lines_of_business']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = '';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="g-box-img-text g-box-shadow">
                [field_image_lines_of_business]
                <div class="text">
                  <h4 class="title">[title]</h4>
                  [body]
                  <div class="link">
                    <a href="node/[nid]"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KNOW MORE</font></font></a>
                    <i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></i>
                  </div>
                </div>
              </div>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'lines_of_business' => 'lines_of_business',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $translatables['line_of_business'] = array(
    t('Master'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('<div class="g-box-img-text g-box-shadow">
                [field_image_lines_of_business]
                <div class="text">
                  <h4 class="title">[title]</h4>
                  [body]
                  <div class="link">
                    <a href="node/[nid]"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KNOW MORE</font></font></a>
                    <i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></i>
                  </div>
                </div>
              </div>'),
    t('Block'),
  );
  $export['line_of_business'] = $view;

  return $export;
}
