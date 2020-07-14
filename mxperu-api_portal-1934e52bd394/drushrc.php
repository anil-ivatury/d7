<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = '127.0.0.1';
$options['db_port'] = '3306';
$options['db_passwd'] = 'EKw7eCrrd8';
$options['db_name'] = 'intdevelopmentde';
$options['db_user'] = 'intdevelopmentde';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.69',
      'description' => 'This platform is running Drupal 7.69',
    ),
  ),
  'profiles' => 
  array (
    'apim_profile' => 
    array (
      'name' => 'apim_profile',
      'info' => 
      array (
        'name' => 'IBM API Management Developer Portal',
        'description' => 'Provides modules to access the content in an API Manager node and a skeleton site which application developers can use to browse APIs.',
        'core' => '7.x',
        'distribution_name' => 'IBM API Management Developer Portal',
        'files' => 
        array (
          0 => 'content/nodes.import.inc',
          1 => 'content/welcome.page.inc',
        ),
        'exclusive' => true,
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'locale',
          9 => 'menu',
          10 => 'number',
          11 => 'options',
          12 => 'path',
          13 => 'taxonomy',
          14 => 'dblog',
          15 => 'search',
          16 => 'shortcut',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
          21 => 'trigger',
          22 => 'blog',
          23 => 'poll',
          24 => 'contact',
          25 => 'forum',
          26 => 'at_tools',
          27 => 'addtoany',
          28 => 'advanced_forum',
          29 => 'autologout',
          30 => 'bean',
          31 => 'block_class',
          32 => 'block_class_styles',
          33 => 'ctools',
          34 => 'entity',
          35 => 'faq',
          36 => 'fivestar',
          37 => 'group',
          38 => 'libraries',
          39 => 'panels',
          40 => 'jquery_update',
          41 => 'password_policy',
          42 => 'tagclouds',
          43 => 'twitter_timeline',
          44 => 'views',
          45 => 'votingapi',
          46 => 'wysiwyg',
          47 => 'pathologic',
          48 => 'support',
          49 => 'module_filter',
          50 => 'captcha',
          51 => 'token',
          52 => 'flag',
          53 => 'imce',
          54 => 'imce_wysiwyg',
          55 => 'linkit',
          56 => 'linkit_picker',
          57 => 'l10n_update',
          58 => 'hierarchical_select',
          59 => 'vppr',
          60 => 'tfa',
          61 => 'tfa_basic',
          62 => 'legal',
          63 => 'variable',
          64 => 'i18n',
          65 => 'addressfield',
          66 => 'statsd',
          67 => 'syslog_advanced',
          68 => 'messaging',
          69 => 'content_approval',
          70 => 'fasttoggle',
          71 => 'views_bulk_operations',
          72 => 'security_questions',
          73 => 'clone',
          74 => 'menu_item_visibility',
          75 => 'ultimate_cron',
          76 => 'login_security',
          77 => 'acl',
          78 => 'chain_menu_access',
          79 => 'forum_access',
          80 => 'follow',
          81 => 'search_autocomplete',
          82 => 'alpha_pagination',
          83 => 'front_page',
          84 => 'slick',
          85 => 'slick_views',
          86 => 'slick_extras',
          87 => 'profanity',
          88 => 'label_help',
          89 => 'seckit',
          90 => 'restrict_by_ip',
          91 => 'search404',
          92 => 'search_config',
          93 => 'no_autocomplete',
          94 => 'ejectorseat',
          95 => 'session_limit',
          96 => 'transliteration',
          97 => 'context',
          98 => 'metatag',
          99 => 'admin_menu',
          100 => 'adminimal_admin_menu',
          101 => 'mailsystem',
          102 => 'htmlmail',
          103 => 'underscore',
          104 => 'hide_submit',
          105 => 'user_pwreset_timeout',
          106 => 'entity_translation',
          107 => 'title',
          108 => 'rules',
          109 => 'linkchecker',
          110 => 'entityreference',
          111 => 'rules_http_client',
          112 => 'field_group',
          113 => 'views_data_export',
          114 => 'termcase',
          115 => 'honeypot',
          116 => 'node_page_disable',
          117 => 'flood_control',
          118 => 'ibm_apim',
          119 => 'bannerblock',
          120 => 'socialblock',
          121 => 'ghmarkdown',
          122 => 'popularapi',
          123 => 'forum_approval',
          124 => 'apic_taxonomy_menu_block',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.4.0',
        'languages' => 
        array (
          0 => 'en',
          1 => 'fr',
          2 => 'nl',
          3 => 'installer-ja',
          4 => 'pt-br',
          5 => 'zh-hans',
          6 => 'installer-de',
          7 => 'installer-tr',
          8 => 'installer-es',
          9 => 'ja',
          10 => 'zh-hant',
          11 => 'es',
          12 => 'installer-zh-hant',
          13 => 'installer-fr',
          14 => 'installer-nl',
          15 => 'installer-pt-br',
          16 => 'ko',
          17 => 'installer-ko',
          18 => 'installer-zh-hans',
          19 => 'de',
          20 => 'installer-it',
          21 => 'it',
          22 => 'tr',
        ),
      ),
      'filename' => './profiles/apim_profile/apim_profile.info',
      'version' => '7.69',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.69',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7012',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7016',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.69',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7082',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.69',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.69',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7019',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'acl' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/acl/acl.module',
      'name' => 'acl',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ACL',
        'description' => 'Access control list API. Has no features on its own.',
        'core' => '7.x',
        'package' => 'Access control',
        'files' => 
        array (
          0 => 'tests/acl.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'acl',
        'datestamp' => '1568440086',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'addressfield' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/addressfield/addressfield.module',
      'name' => 'addressfield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Address Field',
        'description' => 'Manage a flexible address field, implementing the xNAL standard.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'addressfield.migrate.inc',
          1 => 'views/addressfield_views_handler_field_administrative_area.inc',
          2 => 'views/addressfield_views_handler_field_country.inc',
          3 => 'views/addressfield_views_handler_filter_country.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'addressfield',
        'datestamp' => '1540579391',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'addtoany' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/addtoany/addtoany.module',
      'name' => 'addtoany',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AddToAny',
        'description' => 'Share buttons by AddToAny, including the AddToAny universal sharing button, Facebook, Twitter, Google+, Pinterest, and over 100 more on the <a href=\'https://www.addtoany.com/\' target=\'_blank\'>AddToAny</a> platform.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'addtoany.module',
          1 => 'addtoany.admin.inc',
          2 => 'addtoany.variable.inc',
          3 => 'views/addtoany_handler_field_addtoany_link.inc',
          4 => 'views/addtoany.views.inc',
        ),
        'configure' => 'admin/config/services/addtoany',
        'version' => '7.x-4.16',
        'project' => 'addtoany',
        'datestamp' => '1553029385',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.16',
    ),
    'adminimal_admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/adminimal_admin_menu/adminimal_admin_menu.module',
      'name' => 'adminimal_admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Adminimal Theme',
        'description' => 'Clean and minimal theme for the administration menu module.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'configure' => 'admin/config/administration/adminimal_menu',
        'version' => '7.x-1.9',
        'project' => 'adminimal_admin_menu',
        'datestamp' => '1519862286',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc6',
        'project' => 'admin_menu',
        'datestamp' => '1543859284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc6',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc6',
        'project' => 'admin_menu',
        'datestamp' => '1543859284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc6',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc6',
        'project' => 'admin_menu',
        'datestamp' => '1543859284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc6',
    ),
    'advanced_forum' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/advanced_forum/advanced_forum.module',
      'name' => 'advanced_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '15',
      'info' => 
      array (
        'name' => 'Advanced Forum',
        'description' => 'Enables the look and feel of other popular forum software.',
        'core' => '7.x',
        'package' => 'Advanced Forum',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'ctools',
          2 => 'views',
        ),
        'configure' => 'admin/config/content/advanced-forum',
        'files' => 
        array (
          0 => 'includes/views/advanced_forum_handler_field_node_topic_icon.inc',
          1 => 'includes/views/advanced_forum_handler_field_node_topic_pager.inc',
          2 => 'includes/views/advanced_forum_plugin_style_forum_topic_list.inc',
          3 => 'tests/af.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'advanced_forum',
        'datestamp' => '1561547893',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'alpha_pagination' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/alpha_pagination/alpha_pagination.module',
      'name' => 'alpha_pagination',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Alpha Pagination',
        'description' => 'Provide an alphabetic paginator in the global area of any view.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.4',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'src/AlphaPagination.php',
          1 => 'src/AlphaPaginationCharacter.php',
          2 => 'src/views_handler_area_alpha_pagination.inc',
          3 => 'src/views_handler_field_alpha_pagination_group.inc',
        ),
        'version' => '7.x-2.0',
        'project' => 'alpha_pagination',
        'datestamp' => '1559138291',
      ),
      'version' => '7.x-2.0',
    ),
    'alpha_pagination_sample_view' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/alpha_pagination/alpha_pagination_sample_view/alpha_pagination_sample_view.module',
      'name' => 'alpha_pagination_sample_view',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Alpha Pagination Sample View',
        'description' => 'A sample usage view for the Alpha Pagination module',
        'core' => '7.x',
        'package' => 'Features',
        'version' => '7.x-2.0',
        'project' => 'alpha_pagination',
        'dependencies' => 
        array (
          0 => 'alpha_pagination',
          1 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'views_view' => 
          array (
            0 => 'alpha_pagination_sample',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'datestamp' => '1559138291',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'apic_taxonomy_menu_block' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/apic_taxonomy_menu_block/apic_taxonomy_menu_block.module',
      'name' => 'apic_taxonomy_menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'APIC Taxonomy menu block',
        'description' => 'Make menu blocks out of your taxonomies',
        'core' => '7.x',
        'package' => 'IBM API Connect v5',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'block',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'project' => 'apic_taxonomy_menu_block',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'at_tools' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/at_tools/at_tools.module',
      'name' => 'at_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Tools',
        'description' => 'Helper functions for Adaptivetheme.',
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'at_tools',
        'datestamp' => '1386284005',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'autologout' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/autologout/autologout.module',
      'name' => 'autologout',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7401',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Automated Logout',
        'description' => 'Adds automated timed logout',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/autologout.test',
        ),
        'configure' => 'admin/config/people/autologout',
        'version' => '7.x-4.5',
        'project' => 'autologout',
        'datestamp' => '1509524288',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.5',
    ),
    'bannerblock' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/bannerblock/bannerblock.module',
      'name' => 'bannerblock',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Banner Block',
        'description' => 'A Welcome banner block',
        'core' => '7.x',
        'package' => 'IBM API Connect v5',
        'files' => 
        array (
          0 => 'bannerblock.module',
          1 => 'plugins/bean/bannerblock.banner_block.inc',
        ),
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'image',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'bean' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/bean/bean.module',
      'name' => 'bean',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7013',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean',
        'description' => 'Create Bean (Block Entities)',
        'core' => '7.x',
        'package' => 'Bean',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'entity',
        ),
        'files' => 
        array (
          0 => 'includes/bean.core.inc',
          1 => 'includes/bean.info.inc',
          2 => 'plugins/BeanPlugin.class.php',
          3 => 'plugins/BeanDefault.class.php',
          4 => 'includes/translation.handler.bean.inc',
          5 => 'includes/bean.inline_entity_form.inc',
          6 => 'views/views_handler_filter_bean_type.inc',
          7 => 'views/views_handler_field_bean_type.inc',
          8 => 'views/views_handler_field_bean_edit_link.inc',
          9 => 'views/views_handler_field_bean_delete_link.inc',
          10 => 'views/views_handler_field_bean_operations.inc',
          11 => 'tests/BeanSetup.test',
          12 => 'tests/BeanTests.test',
          13 => 'tests/BeanTestPlugins.test',
          14 => 'tests/BeanUnitTests.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'bean',
        'datestamp' => '1533832989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'bean_admin_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/bean/bean_admin_ui/bean_admin_ui.module',
      'name' => 'bean_admin_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean Admin UI',
        'description' => 'Add the ability to create Block Types in the UI',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'bean_admin_ui.module',
          1 => 'plugins/BeanCustom.class.php',
        ),
        'dependencies' => 
        array (
          0 => 'bean',
        ),
        'configure' => 'admin/structure/block-types',
        'package' => 'Bean',
        'version' => '7.x-1.13',
        'project' => 'bean',
        'datestamp' => '1533832989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'bean_entitycache' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/bean/bean_entitycache/bean_entitycache.module',
      'name' => 'bean_entitycache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean - Entitycache',
        'description' => 'Integrates the Bean module with the Entitycache module',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'includes/bean_entitycache.core.inc',
        ),
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'entitycache',
        ),
        'version' => '7.x-1.13',
        'project' => 'bean',
        'datestamp' => '1533832989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'bean_usage' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/bean/bean_usage/bean_usage.module',
      'name' => 'bean_usage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean Usage',
        'description' => 'View Bean (Block Entities) Usage',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'blockreference',
        ),
        'package' => 'Bean',
        'version' => '7.x-1.13',
        'project' => 'bean',
        'datestamp' => '1533832989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'bean_uuid' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/bean/bean_uuid/bean_uuid.module',
      'name' => 'bean_uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bean UUID',
        'description' => 'Allow deploying bean blocks through Deploy and UUID modules.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'uuid',
        ),
        'package' => 'Bean',
        'version' => '7.x-1.13',
        'project' => 'bean',
        'datestamp' => '1533832989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'block_class' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/block_class/block_class.module',
      'name' => 'block_class',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Class',
        'description' => 'Allows assigning CSS classes to blocks.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'files' => 
        array (
          0 => 'block_class.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'context',
          1 => 'features (2.x)',
          2 => 'features_extra:fe_block',
          3 => 'menu_block',
          4 => 'views',
        ),
        'version' => '7.x-2.4',
        'project' => 'block_class',
        'datestamp' => '1532735885',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.4',
    ),
    'block_class_styles' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/block_class_styles/block_class_styles.module',
      'name' => 'block_class_styles',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Block Class Styles',
        'description' => 'Define styles/themes for blocks.',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'dependencies' => 
        array (
          0 => 'block_class',
        ),
        'project' => 'block_class_styles',
        'datestamp' => '1452729874',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.6',
    ),
    'book_access' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/book_access/book_access.module',
      'name' => 'book_access',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7204',
      'weight' => '15',
      'info' => 
      array (
        'name' => 'Book access',
        'description' => 'Allows setting the access control for book nodes on a per book basis.',
        'package' => 'Access control',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'book',
        ),
        'files' => 
        array (
          0 => 'book_access.module',
          1 => 'book_access_test_case.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'book_access',
        'datestamp' => '1568565187',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'book_access_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/book_access/book_access_ui.module',
      'name' => 'book_access_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book access UI',
        'description' => 'User interface for the Book access module.',
        'package' => 'Access control',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'book_access',
        ),
        'configure' => 'admin/content/book/settings',
        'version' => '7.x-2.2',
        'project' => 'book_access',
        'datestamp' => '1568565187',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'captcha' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/captcha/captcha.module',
      'name' => 'captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAPTCHA',
        'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha',
        'files' => 
        array (
          0 => 'captcha.module',
          1 => 'captcha.inc',
          2 => 'captcha.admin.inc',
          3 => 'captcha.install',
          4 => 'captcha.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'captcha',
        'datestamp' => '1570300087',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'image_captcha' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/captcha/image_captcha/image_captcha.module',
      'name' => 'image_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image CAPTCHA',
        'description' => 'Provides an image based CAPTCHA challenge.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/image_captcha',
        'files' => 
        array (
          0 => 'image_captcha.install',
          1 => 'image_captcha.module',
          2 => 'image_captcha.admin.inc',
          3 => 'image_captcha.user.inc',
          4 => 'image_captcha.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'captcha',
        'datestamp' => '1570300087',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'chain_menu_access' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/chain_menu_access/chain_menu_access.module',
      'name' => 'chain_menu_access',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chain Menu Access API',
        'description' => 'Helps client modules to chain their access callbacks into other modules\' menu items.',
        'package' => 'Other',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'chain_menu_access.module',
          1 => 'tests/chain_menu_access.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'chain_menu_access',
        'datestamp' => '1551918184',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'clone' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/clone/clone.module',
      'name' => 'clone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node clone',
        'description' => 'Allows users to clone (copy then edit) an existing node.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/views_handler_field_node_link_clone.inc',
        ),
        'configure' => 'admin/config/content/clone',
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'project' => 'clone',
        'datestamp' => '1386176910',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'content_approval' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/content_approval/content_approval.module',
      'name' => 'content_approval',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Approval',
        'description' => 'Permit to define which content type must be approved by adminstrators before their publication.',
        'package' => 'Other',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'content_approval_field',
        ),
        'files' => 
        array (
          0 => 'content_approval.install',
          1 => 'content_approval.module',
        ),
        'version' => '7.x-1.1',
        'project' => 'content_approval',
        'datestamp' => '1325851538',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'content_approval_field' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/content_approval/content_approval_field/content_approval_field.module',
      'name' => 'content_approval_field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Approval Field',
        'description' => 'Handle required field definitions for the Content Approval module.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'content_approval_field.install',
          1 => 'content_approval_field.module',
        ),
        'version' => '7.x-1.1',
        'project' => 'content_approval',
        'datestamp' => '1325851538',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'context' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/context.test',
          1 => 'tests/context.conditions.test',
          2 => 'tests/context.reactions.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'context',
        'datestamp' => '1420573188',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'context_layouts' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/context_layouts_reaction_block.inc',
        ),
        'version' => '7.x-3.6',
        'project' => 'context',
        'datestamp' => '1420573188',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'context_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'configure' => 'admin/structure/context',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context_ui.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'context',
        'datestamp' => '1420573188',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/context.test',
          5 => 'tests/css.test',
          6 => 'tests/css_cache.test',
          7 => 'tests/ctools.plugins.test',
          8 => 'tests/ctools.test',
          9 => 'tests/math_expression.test',
          10 => 'tests/math_expression_stack.test',
          11 => 'tests/object_cache.test',
          12 => 'tests/object_cache_unit.test',
          13 => 'tests/page_tokens.test',
        ),
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'tests/head_links.test',
        ),
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.15',
        'project' => 'ctools',
        'datestamp' => '1549603691',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.15',
    ),
    'drafty' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/drafty/drafty.module',
      'name' => 'drafty',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drafty',
        'description' => 'Facilitates handling of draft revisions.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'test_dependencies' => 
        array (
          0 => 'field_collection',
          1 => 'entity_translation',
          2 => 'title (>7.x-1.0-alpha7)',
          3 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'drafty.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'drafty',
        'datestamp' => '1463582945',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'drafty_1992010' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/drafty/modules/drafty_1992010/drafty_1992010.module',
      'name' => 'drafty_1992010',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drafty http://drupal.org/node/1992010',
        'description' => 'Works around http://drupal.org/node/1992010',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'drafty',
          1 => 'entity_translation',
        ),
        'weight' => '-50',
        'test_dependencies' => 
        array (
          0 => 'field_collection',
          1 => 'entity_translation',
        ),
        'files' => 
        array (
          0 => 'drafty_1992010.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'drafty',
        'datestamp' => '1463582945',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'drafty_enforce' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/drafty/modules/drafty_enforce/drafty_enforce.module',
      'name' => 'drafty_enforce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drafty Enforce',
        'description' => 'Forces all new revisions to be drafts.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'drafty',
        ),
        'weight' => '-1',
        'files' => 
        array (
          0 => 'drafty_enforce.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'drafty',
        'datestamp' => '1463582945',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'drupal_helpers' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/drupal_helpers/drupal_helpers.module',
      'name' => 'drupal_helpers',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal Helpers',
        'description' => 'Collection of helper functions and classes.',
        'php' => '5.3',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xautoload (>= 7.x-4.0)',
        ),
        'version' => NULL,
      ),
      'version' => NULL,
    ),
    'ejectorseat' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ejectorseat/ejectorseat.module',
      'name' => 'ejectorseat',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'name' => 'Ejector Seat',
        'description' => 'Reloads the current page if a user\'s session has ended, logging them out, and ejecting them from the site.',
        'version' => '7.x-1.0',
        'project' => 'ejectorseat',
        'datestamp' => '1370880051',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.9',
        'project' => 'entity',
        'datestamp' => '1518620551',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.9',
        'project' => 'entity',
        'datestamp' => '1518620551',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'entityreference' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'test_dependencies' => 
        array (
          0 => 'feeds',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'plugins/selection/abstract.inc',
          2 => 'plugins/selection/views.inc',
          3 => 'plugins/behavior/abstract.inc',
          4 => 'views/entityreference_plugin_display.inc',
          5 => 'views/entityreference_plugin_style.inc',
          6 => 'views/entityreference_plugin_row_fields.inc',
          7 => 'tests/entityreference.handlers.test',
          8 => 'tests/entityreference.taxonomy.test',
          9 => 'tests/entityreference.admin.test',
          10 => 'tests/entityreference.feeds.test',
          11 => 'tests/entityreference.entity_translation.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'entityreference',
        'datestamp' => '1502895850',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'entityreference_behavior_example' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
      'name' => 'entityreference_behavior_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference Behavior Example',
        'description' => 'Provides some example code for implementing Entity Reference behaviors.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'version' => '7.x-1.5',
        'project' => 'entityreference',
        'datestamp' => '1502895850',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'entity_translation' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entity_translation/entity_translation.module',
      'name' => 'entity_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '11',
      'info' => 
      array (
        'name' => 'Entity Translation',
        'description' => 'Allows entities to be translated into different languages.',
        'package' => 'Multilingual - Entity Translation',
        'core' => '7.x',
        'configure' => 'admin/config/regional/entity_translation',
        'dependencies' => 
        array (
          0 => 'locale (>7.14)',
        ),
        'test_dependencies' => 
        array (
          0 => 'pathauto:pathauto',
          1 => 'title:title (=7.x-1.0-alpha9)',
        ),
        'files' => 
        array (
          0 => 'includes/translation.handler_factory.inc',
          1 => 'includes/translation.handler.inc',
          2 => 'includes/translation.handler.comment.inc',
          3 => 'includes/translation.handler.node.inc',
          4 => 'includes/translation.handler.taxonomy_term.inc',
          5 => 'includes/translation.handler.user.inc',
          6 => 'includes/translation.migrate.inc',
          7 => 'tests/entity_translation.test',
          8 => 'views/entity_translation_handler_relationship.inc',
          9 => 'views/entity_translation_handler_field_translate_link.inc',
          10 => 'views/entity_translation_handler_field_label.inc',
          11 => 'views/entity_translation_handler_filter_entity_type.inc',
          12 => 'views/entity_translation_handler_filter_language.inc',
          13 => 'views/entity_translation_handler_filter_translation_exists.inc',
          14 => 'views/entity_translation_handler_field_field.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'entity_translation',
        'datestamp' => '1574630892',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'entity_translation_i18n_menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entity_translation/entity_translation_i18n_menu/entity_translation_i18n_menu.module',
      'name' => 'entity_translation_i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Translation Menu',
        'description' => 'Allows menu items to be translated on the entity form.',
        'package' => 'Multilingual - Entity Translation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_translation',
          1 => 'i18n',
          2 => 'i18n_menu',
        ),
        'files' => 
        array (
          0 => 'entity_translation_i18n_menu.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entity_translation',
        'datestamp' => '1574630892',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'entity_translation_upgrade' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/entity_translation/entity_translation_upgrade/entity_translation_upgrade.module',
      'name' => 'entity_translation_upgrade',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Translation Upgrade',
        'description' => 'Provides an upgrade path from node-based translation to field-based translation.',
        'package' => 'Multilingual - Entity Translation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_translation',
        ),
        'files' => 
        array (
          0 => 'entity_translation_upgrade.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entity_translation',
        'datestamp' => '1574630892',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'faq' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/faq/faq.module',
      'name' => 'faq',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Frequently Asked Questions',
        'description' => 'Manages configuration of questions for a FAQ page.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'faq.admin.inc',
          1 => 'faq.install',
          2 => 'faq.module',
          3 => 'faq.test',
          4 => 'includes/faq-category-hide-answer.tpl.php',
          5 => 'includes/faq-category-new-page.tpl.php',
          6 => 'includes/faq-category-questions-inline.tpl.php',
          7 => 'includes/faq-category-questions-top-answers.tpl.php',
          8 => 'includes/faq-category-questions-top.tpl.php',
          9 => 'includes/faq-hide-answer.tpl.php',
          10 => 'includes/faq-new-page.tpl.php',
          11 => 'includes/faq-questions-inline.tpl.php',
          12 => 'includes/faq-questions-top.tpl.php',
          13 => 'includes/faq.hide_answer.inc',
          14 => 'includes/faq.new_page.inc',
          15 => 'includes/faq.questions_inline.inc',
          16 => 'includes/faq.questions_top.inc',
          17 => 'views/faq.views.inc',
        ),
        'configure' => 'admin/config/content/faq',
        'version' => '7.x-1.2',
        'project' => 'faq',
        'datestamp' => '1574706185',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'fasttoggle' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fasttoggle/fasttoggle.module',
      'name' => 'fasttoggle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Fasttoggle',
        'description' => 'Enables fast toggling of binary settings.',
        'version' => '7.x-1.7',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'fasttoggle.admin.inc',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/fasttoggle',
        'project' => 'fasttoggle',
        'datestamp' => '1506034749',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'fasttoggle_comment' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fasttoggle/module/fasttoggle_comment/fasttoggle_comment.module',
      'name' => 'fasttoggle_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fasttoggle Comment',
        'description' => 'Enables fast toggling of binary settings for comments.',
        'version' => '7.x-1.7',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'views/fasttoggle_comment.views.inc',
          1 => 'views/fasttoggle_comment_views_handler_field_comment_link.inc',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/fasttoggle',
        'dependencies' => 
        array (
          0 => 'fasttoggle_node',
          1 => 'comment',
        ),
        'project' => 'fasttoggle',
        'datestamp' => '1506034749',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'fasttoggle_field' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fasttoggle/module/fasttoggle_field/fasttoggle_field.module',
      'name' => 'fasttoggle_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fasttoggle Field',
        'description' => 'Enables fast toggling of binary settings for fields.',
        'version' => '7.x-1.7',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'views/fasttoggle_field.views.inc',
          1 => 'views/fasttoggle_field_views_handler_field_field_link.inc',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/fasttoggle',
        'dependencies' => 
        array (
          0 => 'fasttoggle',
          1 => 'field',
        ),
        'project' => 'fasttoggle',
        'datestamp' => '1506034749',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'fasttoggle_modr8' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fasttoggle/module/fasttoggle_modr8/fasttoggle_modr8.module',
      'name' => 'fasttoggle_modr8',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fasttoggle Modr8',
        'description' => 'Enables fast toggling of modr8 settings for nodes.',
        'version' => '7.x-1.7',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'views/fasttoggle_modr8.views.inc',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/fasttoggle',
        'dependencies' => 
        array (
          0 => 'fasttoggle_comment',
          1 => 'modr8',
        ),
        'project' => 'fasttoggle',
        'datestamp' => '1506034749',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'fasttoggle_node' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fasttoggle/module/fasttoggle_node/fasttoggle_node.module',
      'name' => 'fasttoggle_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fasttoggle Node',
        'description' => 'Enables fast toggling of binary settings for nodes.',
        'version' => '7.x-1.7',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'views/fasttoggle_node.views.inc',
          1 => 'views/fasttoggle_node_views_handler_field_node_link.inc',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/fasttoggle',
        'dependencies' => 
        array (
          0 => 'fasttoggle',
        ),
        'project' => 'fasttoggle',
        'datestamp' => '1506034749',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'fasttoggle_user' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fasttoggle/module/fasttoggle_user/fasttoggle_user.module',
      'name' => 'fasttoggle_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fasttoggle User',
        'description' => 'Enables fast toggling of binary settings for users.',
        'version' => '7.x-1.7',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'views/fasttoggle_user.views.inc',
          1 => 'views/fasttoggle_user_views_handler_field_user_link.inc',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/fasttoggle',
        'dependencies' => 
        array (
          0 => 'fasttoggle',
        ),
        'project' => 'fasttoggle',
        'datestamp' => '1506034749',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'field_group' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Field Group',
        'description' => 'Provides the ability to group your fields on both form and display.',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/field_group.ui.test',
          1 => 'tests/field_group.display.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'field_group',
        'datestamp' => '1509751991',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'fivestar' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/fivestar/fivestar.module',
      'name' => 'fivestar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7208',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fivestar',
        'description' => 'Enables fivestar ratings on content, users, etc.',
        'package' => 'Voting',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'votingapi',
        ),
        'configure' => 'admin/config/content/fivestar',
        'files' => 
        array (
          0 => 'fivestar.migrate.inc',
          1 => 'test/fivestar.base.test',
          2 => 'test/fivestar.field.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'fivestar',
        'datestamp' => '1461406444',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'flag' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7306',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on entities.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'test_dependencies' => 
        array (
          0 => 'token',
          1 => 'rules',
        ),
        'files' => 
        array (
          0 => 'includes/flag/flag_flag.inc',
          1 => 'includes/flag/flag_entity.inc',
          2 => 'includes/flag/flag_node.inc',
          3 => 'includes/flag/flag_comment.inc',
          4 => 'includes/flag/flag_user.inc',
          5 => 'includes/flag.cookie_storage.inc',
          6 => 'includes/flag.entity.inc',
          7 => 'flag.rules.inc',
          8 => 'includes/views/flag_handler_argument_entity_id.inc',
          9 => 'includes/views/flag_handler_field_ops.inc',
          10 => 'includes/views/flag_handler_field_flagged.inc',
          11 => 'includes/views/flag_handler_filter_flagged.inc',
          12 => 'includes/views/flag_handler_sort_flagged.inc',
          13 => 'includes/views/flag_handler_relationships.inc',
          14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
          15 => 'tests/flag.test',
        ),
        'version' => '7.x-3.9',
        'project' => 'flag',
        'datestamp' => '1474619065',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'flag_actions' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'configure' => 'admin/structure/flags/actions',
        'version' => '7.x-3.9',
        'project' => 'flag',
        'datestamp' => '1474619065',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'flag_bookmark' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/flag/flag_bookmark/flag_bookmark.module',
      'name' => 'flag_bookmark',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag Bookmark',
        'description' => 'Provides an example bookmark flag and supporting views.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'files' => 
        array (
          0 => 'plugins/flag_bookmark_plugin_validate_user.inc',
        ),
        'version' => '7.x-3.9',
        'project' => 'flag',
        'datestamp' => '1474619065',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'flood_control' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/flood_control/flood_control.module',
      'name' => 'flood_control',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flood control',
        'description' => 'Interface for hidden flood control options.',
        'core' => '7.x',
        'configure' => 'admin/config/system/flood-control',
        'version' => '7.x-1.0',
        'project' => 'flood_control',
        'datestamp' => '1295633801',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'follow' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/follow/follow.module',
      'name' => 'follow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Follow',
        'description' => 'Add sitewide and per user links to social network profiles.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/follow.test',
        ),
        'config' => 'admin/config/services/follow',
        'version' => '7.x-2.0-alpha1',
        'project' => 'follow',
        'datestamp' => '1366924811',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha1',
    ),
    'forum_access' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/forum_access/forum_access.module',
      'name' => 'forum_access',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '2',
      'info' => 
      array (
        'name' => 'Forum Access',
        'description' => 'Allows forums to be set private and to be given moderators.',
        'dependencies' => 
        array (
          0 => 'acl',
          1 => 'chain_menu_access',
          2 => 'forum',
        ),
        'package' => 'Access control',
        'core' => '7.x',
        'configure' => 'admin/structure/forum',
        'files' => 
        array (
          0 => 'tests/forum_access.test',
        ),
        'version' => '7.x-1.4',
        'project' => 'forum_access',
        'datestamp' => '1569441788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'forum_approval' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/forum_approval/forum_approval.module',
      'name' => 'forum_approval',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum Approval',
        'description' => 'A custom view to aid in forum content approvals',
        'core' => '7.x',
        'package' => 'Advanced Forum',
        'files' => 
        array (
          0 => 'forum_approval.module',
        ),
        'dependencies' => 
        array (
          0 => 'advanced_forum',
          1 => 'content_approval',
          2 => 'fasttoggle',
          3 => 'views_bulk_operations',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'front_page' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/front_page/front_page.module',
      'name' => 'front_page',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Front Page',
        'description' => 'Allows site admins setup custom front pages for the site.',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/front/settings',
        'version' => '7.x-2.4',
        'project' => 'front',
        'datestamp' => '1370619956',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.4',
    ),
    'ghmarkdown' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ghmarkdown/ghmarkdown.module',
      'name' => 'ghmarkdown',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Github Markdown filter',
        'description' => 'Allows content to be submitted using Github Markdown, a simple plain-text syntax that is transformed into valid XHTML.',
        'package' => 'Input filters',
        'core' => '7.x',
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'group' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/group/group.module',
      'name' => 'group',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Group',
        'description' => 'Allows you to group users and content',
        'core' => '7.x',
        'package' => 'Group',
        'configure' => 'admin/group/config/group',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'classes/group.inc',
          1 => 'classes/group.controller.inc',
          2 => 'classes/group.ui_controller.inc',
          3 => 'classes/group.extra_fields_controller.inc',
          4 => 'classes/group.views_controller.inc',
          5 => 'classes/group_membership.inc',
          6 => 'classes/group_membership.controller.inc',
          7 => 'classes/group_membership.ui_controller.inc',
          8 => 'classes/group_membership.extra_fields_controller.inc',
          9 => 'classes/group_membership.views_controller.inc',
          10 => 'classes/group_role.inc',
          11 => 'classes/group_role.controller.inc',
          12 => 'classes/group_role.ui_controller.inc',
          13 => 'classes/group_role.features_controller.inc',
          14 => 'classes/group_type.inc',
          15 => 'classes/group_type.controller.inc',
          16 => 'classes/group_type.ui_controller.inc',
          17 => 'classes/group_type.features_controller.inc',
          18 => 'views/handlers/group_handler_field_child_entity_count.inc',
          19 => 'views/handlers/group_handler_field_membership_role.inc',
          20 => 'views/handlers/group_handler_filter_membership_role.inc',
          21 => 'views/handlers/group_handler_relationship_child_entity.inc',
          22 => 'views/handlers/group_handler_relationship_membership_role.inc',
          23 => 'views/handlers/group_handler_relationship_parent_group.inc',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'group',
        'datestamp' => '1411062536',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'gadd' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/group/modules/gadd/gadd.module',
      'name' => 'gadd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Group add',
        'description' => 'Allows you to add members to a group without their consent',
        'core' => '7.x',
        'package' => 'Group',
        'dependencies' => 
        array (
          0 => 'group',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'group',
        'datestamp' => '1411062536',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'ggroup' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/group/modules/ggroup/ggroup.module',
      'name' => 'ggroup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Subgroup',
        'description' => 'Allows a group to belong to another group',
        'core' => '7.x',
        'package' => 'Group',
        'configure' => 'admin/group/config/subgroup',
        'dependencies' => 
        array (
          0 => 'group',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'group',
        'datestamp' => '1411062536',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'ginvite' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/group/modules/ginvite/ginvite.module',
      'name' => 'ginvite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Group invite',
        'description' => 'Allows group members to invite people into their group',
        'core' => '7.x',
        'package' => 'Group',
        'dependencies' => 
        array (
          0 => 'group',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'group',
        'datestamp' => '1411062536',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'gnode' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/group/modules/gnode/gnode.module',
      'name' => 'gnode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Group Node',
        'description' => 'Enables Group functionality for the Node module',
        'core' => '7.x',
        'package' => 'Group',
        'dependencies' => 
        array (
          0 => 'group',
          1 => 'node',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'group',
        'datestamp' => '1411062536',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'gprofile' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/group/modules/gprofile/gprofile.module',
      'name' => 'gprofile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Group member profiles',
        'description' => 'Allows you to create multiple fieldable member profiles, which can be attached to a member.',
        'core' => '7.x',
        'package' => 'Group',
        'dependencies' => 
        array (
          0 => 'group',
        ),
        'files' => 
        array (
          0 => 'classes/gprofile.inc',
          1 => 'classes/gprofile.extra_fields_controller.inc',
          2 => 'classes/gprofile_type.inc',
          3 => 'classes/gprofile_type.controller.inc',
          4 => 'classes/gprofile_type.ui_controller.inc',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'group',
        'datestamp' => '1411062536',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'hide_submit' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hide_submit/hide_submit.module',
      'name' => 'hide_submit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hide submit button',
        'description' => 'Hides the submit button after a form is submitted to avoid duplicate posting',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'content',
        ),
        'files' => 
        array (
          0 => 'hide_submit.admin.inc',
        ),
        'configure' => 'admin/config/content/hide-submit',
        'version' => '7.x-2.4',
        'project' => 'hide_submit',
        'datestamp' => '1461254340',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.4',
    ),
    'hierarchical_select' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hierarchical_select/hierarchical_select.module',
      'name' => 'hierarchical_select',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select',
        'description' => 'Simplifies the selection of one or multiple items in a hierarchical tree.',
        'package' => 'Form Elements',
        'core' => '7.x',
        'configure' => 'admin/config/content/hierarchical_select',
        'files' => 
        array (
          0 => 'tests/internals.test',
        ),
        'version' => '7.x-3.0-beta9',
        'project' => 'hierarchical_select',
        'datestamp' => '1530242028',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta9',
    ),
    'hser' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hierarchical_select/modules/hser/hser.module',
      'name' => 'hser',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Entity Reference',
        'description' => 'Use the hierarchical select widget for entity reference fields, using taxonomy to provide hierarchy if appropriate, otherwise flat.',
        'package' => 'Form Elements',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
          1 => 'hs_taxonomy',
          2 => 'entityreference',
          3 => 'entity',
          4 => 'ctools',
          5 => 'options',
          6 => 'field',
        ),
        'version' => '7.x-3.0-beta9',
        'project' => 'hierarchical_select',
        'datestamp' => '1530242028',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta9',
    ),
    'hs_flatlist' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hierarchical_select/modules/hs_flatlist.module',
      'name' => 'hs_flatlist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Flat List',
        'description' => 'Allows Hierarchical Select\'s dropbox to be used for selecting multiple items in a flat list of options.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-beta9',
        'project' => 'hierarchical_select',
        'datestamp' => '1530242028',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta9',
    ),
    'hs_menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hierarchical_select/modules/hs_menu.module',
      'name' => 'hs_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Menu',
        'description' => 'Use Hierarchical Select for menu parent selection.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
          1 => 'menu',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-beta9',
        'project' => 'hierarchical_select',
        'datestamp' => '1530242028',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta9',
    ),
    'hs_smallhierarchy' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hierarchical_select/modules/hs_smallhierarchy.module',
      'name' => 'hs_smallhierarchy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Small Hierarchy',
        'description' => 'Allows Hierarchical Select to be used for a hardcoded hierarchy. When it becomes too slow, you should move the hierarchy into the database and write a proper implementation.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-beta9',
        'project' => 'hierarchical_select',
        'datestamp' => '1530242028',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta9',
    ),
    'hs_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hierarchical_select/modules/hs_taxonomy.module',
      'name' => 'hs_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Taxonomy',
        'description' => 'Use Hierarchical Select for Taxonomy.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
          1 => 'taxonomy',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-beta9',
        'project' => 'hierarchical_select',
        'datestamp' => '1530242028',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta9',
    ),
    'honeypot' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/honeypot/honeypot.module',
      'name' => 'honeypot',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Honeypot',
        'description' => 'Mitigates spam form submissions using the honeypot method.',
        'core' => '7.x',
        'configure' => 'admin/config/content/honeypot',
        'package' => 'Spam control',
        'files' => 
        array (
          0 => 'honeypot.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'honeypot',
        'datestamp' => '1576274590',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'honeypot_test' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/honeypot/tests/honeypot_test.module',
      'name' => 'honeypot_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'honepot_test',
        'description' => 'Support module for Honeypot internal testing purposes.',
        'core' => '7.x',
        'package' => 'Testing',
        'hidden' => 'true',
        'version' => '7.x-1.26',
        'project' => 'honeypot',
        'datestamp' => '1576274590',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'htmlmail' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/htmlmail/htmlmail.module',
      'name' => 'htmlmail',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '10',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'HTML Mail',
        'description' => 'Enables HTML in system emails.',
        'files' => 
        array (
          0 => 'htmlmail.mail.inc',
          1 => 'htmlmail.test',
        ),
        'dependencies' => 
        array (
          0 => 'mailsystem',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/htmlmail',
        'version' => '7.x-2.71',
        'project' => 'htmlmail',
        'datestamp' => '1539797287',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.71',
    ),
    'hybridauth' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hybridauth/hybridauth.module',
      'name' => 'hybridauth',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HybridAuth',
        'description' => 'Provides HybridAuth social sign-on.',
        'core' => '7.x',
        'package' => 'HybridAuth',
        'configure' => 'admin/config/people/hybridauth',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-2.16',
        'project' => 'hybridauth',
        'datestamp' => '1531281831',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.16',
    ),
    'hybridauth_bonus' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hybridauth/hybridauth_bonus/hybridauth_bonus.module',
      'name' => 'hybridauth_bonus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HybridAuth Bonus',
        'description' => 'Provides HybridAuth bonus features, like roles choosing upon registration.',
        'core' => '7.x',
        'package' => 'HybridAuth',
        'configure' => 'admin/config/people/hybridauth',
        'dependencies' => 
        array (
          0 => 'hybridauth',
        ),
        'version' => '7.x-2.16',
        'project' => 'hybridauth',
        'datestamp' => '1531281831',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.16',
    ),
    'hybridauth_ulogin' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/hybridauth/hybridauth_ulogin/hybridauth_ulogin.module',
      'name' => 'hybridauth_ulogin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HybridAuth uLogin',
        'description' => 'Migrate uLogin identities to HybridAuth.',
        'core' => '7.x',
        'package' => 'HybridAuth',
        'configure' => 'admin/config/people/hybridauth/ulogin',
        'dependencies' => 
        array (
          0 => 'hybridauth',
        ),
        'version' => '7.x-2.16',
        'project' => 'hybridauth',
        'datestamp' => '1531281831',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.16',
    ),
    'i18n' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'variable',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_object.inc',
          1 => 'i18n.test',
        ),
        'configure' => 'admin/config/regional/i18n',
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_block' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_block/i18n_block.module',
      'name' => 'i18n_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Block languages',
        'description' => 'Enables language selector for blocks and optional block translation.',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_block.inc',
          1 => 'i18n_block.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_contact' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_contact/i18n_contact.module',
      'name' => 'i18n_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact translation',
        'description' => 'Makes contact categories and replies available for translation.',
        'dependencies' => 
        array (
          0 => 'contact',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_field' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_field/i18n_field.module',
      'name' => 'i18n_field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field translation',
        'description' => 'Translate field properties',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_field.inc',
          1 => 'i18n_field.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_forum' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_forum/i18n_forum.module',
      'name' => 'i18n_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual forum',
        'description' => 'Enables multilingual forum, translates names and containers.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'i18n_taxonomy',
          2 => 'i18n_node',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_forum.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_menu/i18n_menu.module',
      'name' => 'i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_menu.inc',
          1 => 'i18n_menu.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_node' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_node/i18n_node.module',
      'name' => 'i18n_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual content',
        'description' => 'Extended node options for multilingual content',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'i18n',
          2 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/node',
        'files' => 
        array (
          0 => 'i18n_node.test',
          1 => 'i18n_node.variable.inc',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_path' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_path/i18n_path.module',
      'name' => 'i18n_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path translation',
        'description' => 'Define translations for generic paths',
        'dependencies' => 
        array (
          0 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_path.inc',
          1 => 'i18n_path.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_redirect/i18n_redirect.module',
      'name' => 'i18n_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation redirect',
        'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_select' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_select/i18n_select.module',
      'name' => 'i18n_select',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual select',
        'description' => 'API module for multilingual content selection',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/select',
        'files' => 
        array (
          0 => 'i18n_select.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_string' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_string/i18n_string.module',
      'name' => 'i18n_string',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_string.admin.inc',
          1 => 'i18n_string.inc',
          2 => 'i18n_string.test',
        ),
        'configure' => 'admin/config/regional/i18n/strings',
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_sync' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_sync/i18n_sync.module',
      'name' => 'i18n_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields across translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_sync.module',
          1 => 'i18n_sync.install',
          2 => 'i18n_sync.module.inc',
          3 => 'i18n_sync.node.inc',
          4 => 'i18n_sync.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_taxonomy/i18n_taxonomy.module',
      'name' => 'i18n_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'i18n_string',
          2 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_taxonomy.inc',
          1 => 'i18n_taxonomy.pages.inc',
          2 => 'i18n_taxonomy.admin.inc',
          3 => 'i18n_taxonomy.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_translation' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_translation/i18n_translation.module',
      'name' => 'i18n_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation sets',
        'description' => 'Simple translation sets API for generic objects',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_translation.inc',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_user' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_user/i18n_user.module',
      'name' => 'i18n_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User mail translation',
        'description' => 'Translate emails sent from the User module.',
        'core' => '7.x',
        'package' => 'Multilingual - Internationalization',
        'dependencies' => 
        array (
          0 => 'i18n_variable',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'i18n_variable' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/i18n/i18n_variable/i18n_variable.module',
      'name' => 'i18n_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable translation',
        'description' => 'Multilingual variables that switch language depending on page language.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'variable_store (7.x-2.x)',
          2 => 'variable_realm (7.x-2.x)',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/variable',
        'files' => 
        array (
          0 => 'i18n_variable.class.inc',
          1 => 'i18n_variable.test',
        ),
        'version' => '7.x-1.26',
        'project' => 'i18n',
        'datestamp' => '1534531985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'account_tabs' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/account_tabs/account_tabs.module',
      'name' => 'account_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Account Tabs',
        'description' => 'A module to make the user profile pages use tabs.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ibm_apim',
          1 => 'password_policy_password_tab',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'api' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/api/api.module',
      'name' => 'api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect API',
        'description' => 'IBM API Connect API Node Content Type',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'node',
          2 => 'ibm_apim',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'application' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/application/application.module',
      'name' => 'application',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Application',
        'description' => 'IBM API Connect Application Node Content Type',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'node',
          2 => 'ibm_apim',
        ),
        'scripts' => 
        array (
          0 => 'js/Application.js',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'auth_apic' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/auth_apic/auth_apic.module',
      'name' => 'auth_apic',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Authentication',
        'description' => 'A module to allow user authentication against IBM API Connect.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ibm_apim',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'comprehensive_uninstaller' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/comprehensive_uninstaller/comprehensive_uninstaller.module',
      'name' => 'comprehensive_uninstaller',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comprehensive Theme & Module Uninstaller',
        'description' => 'A module that facilitates the removal of disabled theme and module files on the server file system.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'site_uploader',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'custom_content_export' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/custom_content_export/custom_content_export.module',
      'name' => 'custom_content_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Content Export',
        'description' => 'Export any custom content to a file for import into APIC v2018. This is only necessary for custom content that is not stored in IBM API Manager, e.g. custom additional fields',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'project' => 'custom_content_export',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'devorg' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/devorg/devorg.module',
      'name' => 'devorg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Developer Organization',
        'description' => 'IBM API Connect Developer Organization Node Content Type',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'node',
          2 => 'ibm_apim',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'ibm_apim' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/ibm_apim.module',
      'name' => 'ibm_apim',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect',
        'description' => 'Integrate IBM API Connect v5 into Drupal',
        'core' => '7.x',
        'package' => 'IBM API Connect v5',
        'configure' => 'admin/config/system/ibm_apim',
        'files' => 
        array (
          0 => 'ibm_apim.module',
          1 => 'tests/ibm_apim.test',
          2 => 'tests/application.test',
          3 => 'tests/product.test',
          4 => 'tests/api.test',
          5 => 'tests/orgs.test',
          6 => 'tests/apic_test_helper_functions.php',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'text',
          2 => 'image',
          3 => 'list',
          4 => 'entityreference',
          5 => 'field_group',
        ),
        'scripts' => 
        array (
          0 => 'js/dropit.js',
          1 => 'js/hideShowPassword.js',
          2 => 'js/simple_dialog.js',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'mail_subscribers' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/mail_subscribers/mail_subscribers.module',
      'name' => 'mail_subscribers',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect E-mail Subscribers',
        'description' => 'A module that provides the capability to email Product and Plan subscribers.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ibm_apim',
          1 => 'product',
          2 => 'application',
        ),
        'files' => 
        array (
          0 => 'mail_subscribers.admin.inc',
          1 => 'mail_subscribers.rules.inc',
        ),
        'version' => '7.69',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'openid_connect_isam' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/openid_connect_isam/openid_connect_isam.module',
      'name' => 'openid_connect_isam',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Connect ISAM',
        'description' => 'Authenticate against ISAM using OIDC.',
        'package' => 'IBM API Connect v5',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'openid_connect',
          2 => 'social_login',
        ),
        'core' => '7.x',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'pdurusers_export' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/pdurusers_export/pdurusers_export.module',
      'name' => 'pdurusers_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PDUR Users Export',
        'description' => 'Export your Portal Delegated User Registry users to a flat file of various types.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'project' => 'pdurusers_export',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'plan' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/plan/plan.module',
      'name' => 'plan',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Plan',
        'description' => 'IBM API Connect Plan Node Content Type',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'node',
          2 => 'ibm_apim',
          3 => 'ctools',
        ),
        'version' => '7.69',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'product' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/product/product.module',
      'name' => 'product',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Product',
        'description' => 'IBM API Connect Product Node Content Type',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'node',
          2 => 'ibm_apim',
          3 => 'ctools',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'site_uploader' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/site_uploader/site_uploader.module',
      'name' => 'site_uploader',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Site Uploader',
        'description' => 'A module to override the drupal core theme and module uploaders to allow site specific modules and themes.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_uploader.updater.inc',
        ),
        'dependencies' => 
        array (
          0 => 'ibm_apim',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'social_login' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ibm_apim/social_login/social_login.module',
      'name' => 'social_login',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Social Login',
        'description' => 'A module to enable the portal to manage developer accounts enabling the use of Open ID Connect based social network logins.',
        'package' => 'IBM API Connect v5',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ibm_apim',
          1 => 'hybridauth',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'image_captcha_refresh' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/image_captcha_refresh/image_captcha_refresh.module',
      'name' => 'image_captcha_refresh',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Captcha Refresh',
        'description' => 'Adds link for refreshing image captcha.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'image_captcha',
        ),
        'core' => '7.x',
        'version' => '7.x-1.6',
        'project' => 'image_captcha_refresh',
        'datestamp' => '1447094571',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.11',
        'project' => 'imce',
        'datestamp' => '1495890787',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1317851503',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-3.0-alpha5',
        'project' => 'jquery_update',
        'datestamp' => '1490805187',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha5',
    ),
    'l10n_update' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/l10n_update/l10n_update.module',
      'name' => 'l10n_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Localization update',
        'description' => 'Provides automatic downloads and updates for translations.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'core' => '7.x',
        'php' => '5.3',
        'package' => 'Multilingual',
        'configure' => 'admin/config/regional/language/update',
        'files' => 
        array (
          0 => 'includes/gettext/PoHeader.php',
          1 => 'includes/gettext/PoItem.php',
          2 => 'includes/gettext/PoMemoryWriter.php',
          3 => 'includes/gettext/PoMetadataInterface.php',
          4 => 'includes/gettext/PoReaderInterface.php',
          5 => 'includes/gettext/PoStreamInterface.php',
          6 => 'includes/gettext/PoStreamReader.php',
          7 => 'includes/gettext/PoStreamWriter.php',
          8 => 'includes/gettext/PoWriterInterface.php',
          9 => 'includes/locale/Gettext.php',
          10 => 'includes/locale/PoDatabaseReader.php',
          11 => 'includes/locale/PoDatabaseWriter.php',
          12 => 'includes/locale/SourceString.php',
          13 => 'includes/locale/StringBase.php',
          14 => 'includes/locale/StringDatabaseStorage.php',
          15 => 'includes/locale/StringInterface.php',
          16 => 'includes/locale/StringStorageException.php',
          17 => 'includes/locale/StringStorageInterface.php',
          18 => 'includes/locale/TranslationString.php',
          19 => 'includes/locale/TranslationsStreamWrapper.php',
          20 => 'tests/L10nUpdateCronTest.test',
          21 => 'tests/L10nUpdateInterfaceTest.test',
          22 => 'tests/L10nUpdateTest.test',
          23 => 'tests/L10nUpdateTestBase.test',
        ),
        'version' => '7.x-2.3',
        'project' => 'l10n_update',
        'datestamp' => '1569963490',
      ),
      'version' => '7.x-2.3',
    ),
    'l10n_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/l10n_update/tests/modules/l10n_update_test/l10n_update_test.module',
      'name' => 'l10n_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Localization Update test',
        'type' => 'module',
        'description' => 'Support module for Localization Update module testing.',
        'package' => 'Testing',
        'version' => '7.x-2.3',
        'core' => '7.x',
        'hidden' => 'true',
        'project' => 'l10n_update',
        'datestamp' => '1569963490',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'l10n_update_test_translate' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/l10n_update/tests/modules/l10n_update_test_translate/l10n_update_test_translate.module',
      'name' => 'l10n_update_test_translate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Localization Update test translate',
        'type' => 'module',
        'description' => 'Translation test module for Localization Update module testing.',
        'package' => 'Testing',
        'version' => '7.x-2.3',
        'core' => '7.x',
        'hidden' => 'true',
        'interface translation project' => 'l10n_update_test_translate',
        'l10n path' => 'sites/all/modules/contrib/l10n_update/tests/modules/l10n_update_test_translate/translations/l10n_update_test_translate.%language.po',
        'project' => 'l10n_update',
        'datestamp' => '1569963490',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'label_help' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/label_help/label_help.module',
      'name' => 'label_help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Label Help',
        'description' => 'Creates the help text directly below the label in form fields',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'label_help.module',
        ),
        'version' => '7.x-1.2',
        'project' => 'label_help',
        'datestamp' => '1421533236',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'ldap_authentication' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_authentication/ldap_authentication.module',
      'name' => 'ldap_authentication',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Authentication',
        'description' => 'Implements LDAP authentication',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_servers',
          1 => 'ldap_user',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/ldap/authentication',
        'files' => 
        array (
          0 => 'LdapAuthenticationConf.class.php',
          1 => 'LdapAuthenticationConfAdmin.class.php',
          2 => 'ldap_authentication.module',
          3 => 'ldap_authentication.install',
          4 => 'ldap_authentication.inc',
          5 => 'ldap_authentication.theme.inc',
          6 => 'ldap_authentication.admin.inc',
          7 => 'tests/ldap_authentication.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'ldap_sso:ldap_sso',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_authorization' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_authorization/ldap_authorization.module',
      'name' => 'ldap_authorization',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Authorization',
        'description' => 'Implements LDAP authorization (previously LDAP Groups)',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_servers',
          1 => 'ldap_user',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'LdapAuthorizationConsumerAbstract.class.php',
          1 => 'LdapAuthorizationConsumer.class.php',
          2 => 'LdapAuthorizationConsumerAdmin.class.php',
          3 => 'ldap_authorization.install',
          4 => 'ldap_authorization.module',
          5 => 'ldap_authorization.admin.inc',
          6 => 'ldap_authorization.admin.test.inc',
          7 => 'ldap_authorization.theme.inc',
          8 => 'tests/BasicTests.test',
          9 => 'tests/Og2Tests.test',
        ),
        'configure' => 'admin/config/people/ldap/authorization',
        'test_dependencies' => 
        array (
          0 => 'ldap_sso:ldap_sso',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_authorization_drupal_role' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_authorization/ldap_authorization_drupal_role/ldap_authorization_drupal_role.module',
      'name' => 'ldap_authorization_drupal_role',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Authorization - Drupal Roles',
        'description' => 'Implements LDAP authorization for Drupal roles',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_authorization',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/ldap/authorization',
        'files' => 
        array (
          0 => 'LdapAuthorizationConsumerRole.class.php',
          1 => 'ldap_authorization_drupal_role.module',
          2 => 'ldap_authorization_drupal_role.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_authorization_og' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_authorization/ldap_authorization_og/ldap_authorization_og.module',
      'name' => 'ldap_authorization_og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Authorization - OG (Organic Groups)',
        'description' => 'Implements LDAP authorization for Organic Groups',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_authorization',
          1 => 'og',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/ldap_authorization_og',
        'files' => 
        array (
          0 => 'LdapAuthorizationConsumerOG.class.php',
          1 => 'ldap_authorization_og.module',
          2 => 'ldap_authorization_og.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_feeds' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_feeds/ldap_feeds.module',
      'name' => 'ldap_feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Feeds',
        'description' => 'Included feeds fetcher for a generic ldap query and ldap entry parser to turn fetcher data into feeds compatible parser result. Used to automate content creation based on ldap queries.',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'feeds',
          1 => 'ldap_servers',
          2 => 'ldap_query',
        ),
        'configure' => 'admin/structure/feeds',
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_help' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_help/ldap_help.module',
      'name' => 'ldap_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Help',
        'description' => 'LDAP Help for configuration and reporting issues.',
        'package' => 'Lightweight Directory Access Protocol',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ldap_servers',
          1 => 'ldap_test',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_query' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_query/ldap_query.module',
      'name' => 'ldap_query',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Query',
        'description' => 'LDAP Query Builder and Storage for queries used by other ldap modules such as ldap feeds, ldap provision, etc',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_servers',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'LdapQuery.class.php',
          1 => 'LdapQueryAdmin.class.php',
          2 => 'ldap_query.admin.inc',
          3 => 'ldap_query.inc',
          4 => 'ldap_query.install',
          5 => 'ldap_query.module',
          6 => 'ldap_query.settings.inc',
          7 => 'ldap_servers.theme.inc',
          8 => 'tests/ldap_query.test',
        ),
        'configure' => 'admin/config/people/ldap/query',
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_servers' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_servers/ldap_servers.module',
      'name' => 'ldap_servers',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7208',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Servers',
        'description' => 'Implements LDAP Server Configuration',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'LdapServer.class.php',
          1 => 'LdapServerAdmin.class.php',
          2 => 'ldap_servers.admin.inc',
          3 => 'ldap_servers.encryption.inc',
          4 => 'ldap_servers.functions.inc',
          5 => 'ldap_servers.install',
          6 => 'ldap_servers.module',
          7 => 'ldap_servers.settings.inc',
          8 => 'ldap_servers.test_form.inc',
          9 => 'ldap_servers.theme.inc',
          10 => 'tests/ldap_servers.test',
        ),
        'configure' => 'admin/config/people/ldap/servers',
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_test' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_test/ldap_test.module',
      'name' => 'ldap_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Test Module',
        'description' => 'Module for LDAP module for testing.  Only for development and debugging purposes.',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_servers',
          1 => 'entity',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'ldap_servers.conf.inc',
          1 => 'ldap_user.conf.inc',
          2 => 'ldap_authentication.conf.inc',
          3 => 'ldap_authorization.conf.inc',
          4 => 'ldap_test.module',
          5 => 'LdapServerTest.class.php',
          6 => 'LdapTestFunctions.class.php',
          7 => 'LdapUserTestCase.class.php',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_user' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_user/ldap_user.module',
      'name' => 'ldap_user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7206',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'LDAP User Module',
        'description' => 'Module for ldap identified users.  User may be associated via ldap authentication, ldap authorization, or from account provisioning.  Configures synching of ldap entries to drupal user properties, fields and the opposite direction.',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_servers',
          1 => 'entity',
          2 => 'number',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'ldap_user.api.php',
          1 => 'ldap_user.inc',
          2 => 'ldap_user.install',
          3 => 'ldap_user.module',
          4 => 'ldap_user.functions.inc',
          5 => 'ldap_user.admin.inc',
          6 => 'ldap_user.test_form.inc',
          7 => 'ldap_user.theme.inc',
          8 => 'LdapUserConf.class.php',
          9 => 'LdapUserConfAdmin.class.php',
          10 => 'tests/ldap_user.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'ldap_user.css',
          ),
        ),
        'configure' => 'admin/config/people/ldap/user',
        'test_dependencies' => 
        array (
          0 => 'ldap_sso:ldap_sso',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ldap_views' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ldap/ldap_views/ldap_views.module',
      'name' => 'ldap_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LDAP Views',
        'description' => 'Implements LDAP integration with Views',
        'package' => 'Lightweight Directory Access Protocol',
        'dependencies' => 
        array (
          0 => 'ldap_query',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'ldap_views.module',
          1 => 'ldap_views.install',
          2 => 'plugins/ldap_views_plugin_query_ldap.inc',
          3 => 'handlers/ldap_views_handler_argument.inc',
          4 => 'handlers/ldap_views_handler_argument_attribute.inc',
          5 => 'handlers/ldap_views_handler_field.inc',
          6 => 'handlers/ldap_views_handler_field_attribute.inc',
          7 => 'handlers/ldap_views_handler_filter.inc',
          8 => 'handlers/ldap_views_handler_filter_attribute.inc',
          9 => 'handlers/ldap_views_handler_sort.inc',
          10 => 'handlers/ldap_views_handler_sort_attribute.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'ldap',
        'datestamp' => '1503841448',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'legal' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/legal/legal.module',
      'name' => 'legal',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Legal',
        'description' => 'Display Terms and Conditions statement on the registration page.',
        'configure' => 'admin/config/people/legal',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'legal.test',
          1 => 'views/legal.views.inc',
          2 => 'views/legal.views_default.inc',
          3 => 'views/legal_views_handler_field_exploded_list.inc',
          4 => 'views/legal_views_handler_field_unserialized_list.inc',
        ),
        'version' => '7.x-1.10',
        'project' => 'legal',
        'datestamp' => '1509376693',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.10',
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.11)',
        ),
        'files' => 
        array (
          0 => 'tests/LibrariesAdminWebTest.test',
          1 => 'tests/LibrariesLoadWebTest.test',
          2 => 'tests/LibrariesUnitTest.test',
          3 => 'tests/LibrariesWebTestBase.test',
        ),
        'version' => '7.x-2.5',
        'project' => 'libraries',
        'datestamp' => '1538770685',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'linkchecker' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/linkchecker/linkchecker.module',
      'name' => 'linkchecker',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7013',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link checker',
        'description' => 'Periodically checks for broken links in node types, blocks and fields and reports the results.',
        'configure' => 'admin/config/content/linkchecker',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'linkchecker.drush.inc',
          1 => 'linkchecker.test',
        ),
        'version' => '7.x-1.4',
        'project' => 'linkchecker',
        'datestamp' => '1534714685',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'linkit' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/linkit/linkit.module',
      'name' => 'linkit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Linkit',
        'description' => 'Provides an easy interface for inserting links.',
        'core' => '7.x',
        'configure' => 'admin/config/content/linkit',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'entity',
        ),
        'files' => 
        array (
          0 => 'includes/profile.class.php',
          1 => 'includes/search_plugin.class.php',
          2 => 'plugins/linkit_search/entity.class.php',
          3 => 'plugins/linkit_search/file.class.php',
          4 => 'plugins/linkit_search/node.class.php',
          5 => 'plugins/linkit_search/taxonomy_term.class.php',
          6 => 'plugins/linkit_search/user.class.php',
          7 => 'test/linkit.test',
          8 => 'test/linkit_profile.test',
          9 => 'test/linkit_search_plugin.test',
          10 => 'test/linkit_search_plugin_node.test',
          11 => 'test/linkit_search_plugin_user.test',
          12 => 'test/linkit_search_plugin_taxonomy_term.test',
        ),
        'version' => '7.x-3.5',
        'project' => 'linkit',
        'datestamp' => '1452407341',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'linkit_picker' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/linkit_picker/linkit_picker.module',
      'name' => 'linkit_picker',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Linkit Picker',
        'description' => 'Linkit Picker adds the possibility to "browse" links like Node Picker had.',
        'core' => '7.x',
        'package' => 'Linkit',
        'dependencies' => 
        array (
          0 => 'linkit (>=3)',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'includes/linkit_picker.views.inc',
          1 => 'includes/linkit_picker.views_default.inc',
          2 => 'includes/linkit_picker_handler_field_node_info.inc',
          3 => 'includes/linkit_picker_handler_field_term_info.inc',
          4 => 'includes/linkit_picker_handler_field_user_info.inc',
        ),
        'version' => '7.x-3.0-rc2',
        'project' => 'linkit_picker',
        'datestamp' => '1403290128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc2',
    ),
    'loft_data_grids' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/loft_data_grids/loft_data_grids.module',
      'name' => 'loft_data_grids',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Loft Data Grids',
        'description' => 'Integrates Loft Data Grids with Drupal',
        'version' => '7.x-2.2',
        'author' => 'Aaron Klump <sourcecode@intheloftstudios.com>',
        'package' => 'Other',
        'core' => '7.x',
        'homepage' => 'http://www.intheloftstudios.com/packages/php/drupal_loft_data_grids',
        'php' => '5.3',
        'project' => 'loft_data_grids',
        'datestamp' => '1468015147',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-2.2',
    ),
    'login_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/login_redirect/login_redirect.module',
      'name' => 'login_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Login Redirect',
        'description' => 'Provides a method to redirect according to an URL-defined parameter after user logs in.',
        'package' => 'User',
        'core' => '7.x',
        'configure' => 'admin/config/system/login_redirect',
        'version' => '7.x-1.2',
        'project' => 'login_redirect',
        'datestamp' => '1398584327',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'login_security' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/login_security/login_security.module',
      'name' => 'login_security',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Login Security',
        'description' => 'Enable security options in the login flow of the site.',
        'files' => 
        array (
          0 => 'login_security.test',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/login_security',
        'version' => '7.x-1.9',
        'project' => 'login_security',
        'datestamp' => '1392987818',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'mailsystem' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/mailsystem/mailsystem.module',
      'name' => 'mailsystem',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'Mail System',
        'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
        'core' => '7.x',
        'configure' => 'admin/config/system/mailsystem',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'version' => '7.x-2.35',
        'project' => 'mailsystem',
        'datestamp' => '1531385928',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.35',
    ),
    'menu_item_visibility' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/menu_item_visibility/menu_item_visibility.module',
      'name' => 'menu_item_visibility',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu item visibility',
        'description' => 'Allows contexts to be set for menu items, similar to block visibility.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'conflicts' => 
        array (
          0 => 'menu_per_role',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'menu_item_visibility',
        'datestamp' => '1504908255',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'messaging' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/messaging/messaging.module',
      'name' => 'messaging',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging',
        'description' => 'Messaging system. This is the base module for the Messaging Framework',
        'package' => 'Messaging',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'messaging.message.inc',
          1 => 'messaging.method.inc',
          2 => 'messaging.destination.inc',
          3 => 'messaging.text.inc',
        ),
        'configure' => 'admin/config/messaging',
        'project' => 'messaging',
        'datestamp' => '1328740844',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'messaging_htmlmail' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/messaging/messaging_htmlmail/messaging_htmlmail.module',
      'name' => 'messaging_htmlmail',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTML Mail',
        'description' => 'Mail Sending Method: HTML Multipart e-mails with MimeMail',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'messaging_mail',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'messaging_htmlmail.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'messaging',
        'datestamp' => '1328740844',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'messaging_mail' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/messaging/messaging_mail/messaging_mail.module',
      'name' => 'messaging_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simple Mail',
        'description' => 'Mail Sending Method: Integration with Drupal mail API',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'messaging_mail.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'messaging',
        'datestamp' => '1328740844',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'messaging_simple' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/messaging/messaging_simple/messaging_simple.module',
      'name' => 'messaging_simple',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web messaging',
        'description' => 'Sending Method: Show messages on user\'s page',
        'package' => 'Messaging',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'messaging_simple.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'messaging',
        'datestamp' => '1328740844',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'messaging_template' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/messaging/messaging_template/messaging_template.module',
      'name' => 'messaging_template',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Messaging template',
        'description' => 'Advanced templating system for messages. Do not enable this module unless other module requires it.',
        'package' => 'Messaging',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'messaging',
        ),
        'files' => 
        array (
          0 => 'messaging_template.inc',
        ),
        'project' => 'messaging',
        'datestamp' => '1328740844',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'metatag' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag.module',
      'name' => 'metatag',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7115',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag',
        'description' => 'Adds support and an API to implement meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'drupal:system (>= 7.40)',
          1 => 'ctools:ctools',
          2 => 'token:token',
        ),
        'configure' => 'admin/config/search/metatags',
        'files' => 
        array (
          0 => 'metatag.inc',
          1 => 'metatag.migrate.inc',
          2 => 'metatag.search_api.inc',
          3 => 'tests/metatag.helper.test',
          4 => 'tests/metatag.unit.test',
          5 => 'tests/metatag.tags_helper.test',
          6 => 'tests/metatag.tags.test',
          7 => 'tests/metatag.node.test',
          8 => 'tests/metatag.term.test',
          9 => 'tests/metatag.user.test',
          10 => 'tests/metatag.core_tag_removal.test',
          11 => 'tests/metatag.bulk_revert.test',
          12 => 'tests/metatag.string_handling.test',
          13 => 'tests/metatag.string_handling_with_i18n.test',
          14 => 'tests/metatag.xss.test',
          15 => 'tests/metatag.output_caching.test',
          16 => 'tests/metatag.image.test',
          17 => 'tests/metatag.locale.test',
          18 => 'tests/metatag.node.with_i18n.test',
          19 => 'tests/metatag.term.with_i18n.test',
          20 => 'tests/metatag.with_i18n_output.test',
          21 => 'tests/metatag.with_i18n_disabled.test',
          22 => 'tests/metatag.with_i18n_config.test',
          23 => 'tests/metatag.with_me.test',
          24 => 'tests/metatag.with_media.test',
          25 => 'tests/metatag.with_panels.test',
          26 => 'tests/metatag.with_profile2.test',
          27 => 'tests/metatag.with_search_api.test',
          28 => 'tests/metatag.with_workbench_moderation.test',
          29 => 'tests/metatag.with_views.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'devel:devel',
          1 => 'imagecache_token:imagecache_token',
          2 => 'entity_translation:entity_translation',
          3 => 'i18n:i18n',
          4 => 'me:me',
          5 => 'file_entity:file_entity',
          6 => 'media:media (>= 2.0, < 3.0)',
          7 => 'panels:panels',
          8 => 'profile2:profile2',
          9 => 'entity:entity',
          10 => 'search_api:search_api',
          11 => 'workbench_moderation:workbench_moderation',
          12 => 'views:views',
          13 => 'context:context',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_app_links' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_app_links/metatag_app_links.module',
      'name' => 'metatag_app_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: App Links',
        'description' => 'Provides support for applinks.org meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_app_links.test',
          1 => 'tests/metatag_app_links.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_context' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_context/metatag_context.module',
      'name' => 'metatag_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Context',
        'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
        'package' => 'SEO',
        'core' => '7.x',
        'configure' => 'admin/config/search/metatags/context',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
          1 => 'context:context',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_context.test',
          1 => 'tests/metatag_context.i18n.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_dc' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_dc/metatag_dc.module',
      'name' => 'metatag_dc',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core',
        'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_dc.test',
          1 => 'tests/metatag_dc.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_dc_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_dc_advanced/metatag_dc_advanced.module',
      'name' => 'metatag_dc_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core Advanced',
        'description' => 'Provides forty additional meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
          1 => 'metatag:metatag_dc',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_dc_advanced.test',
          1 => 'tests/metatag_dc_advanced.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_devel' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_devel/metatag_devel.module',
      'name' => 'metatag_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Devel',
        'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_devel.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_facebook' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_facebook/metatag_facebook.module',
      'name' => 'metatag_facebook',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Facebook',
        'description' => 'Provides support for Facebook\'s custom meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_facebook.test',
          1 => 'tests/metatag_facebook.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_favicons' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_favicons/metatag_favicons.module',
      'name' => 'metatag_favicons',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: favicons',
        'description' => 'Provides support for many different favicons.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_favicons.mask-icon.class.inc',
          1 => 'tests/metatag_favicons.test',
          2 => 'tests/metatag_favicons.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_google_cse' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_google_cse/metatag_google_cse.module',
      'name' => 'metatag_google_cse',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Google Custom Search Engine (CSE)',
        'description' => 'Provides support for meta tags used for Google Custom Search Engine.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_google_cse.test',
          1 => 'tests/metatag_google_cse.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_google_plus' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_google_plus/metatag_google_plus.module',
      'name' => 'metatag_google_plus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Google+',
        'description' => 'Provides support for Google+ \'itemscope\', \'author\' and \'publisher\' meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_google_plus.inc',
          1 => 'tests/metatag_google_plus.test',
          2 => 'tests/metatag_google_plus.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_hreflang' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_hreflang/metatag_hreflang.module',
      'name' => 'metatag_hreflang',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: hreflang',
        'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
          1 => 'drupal:locale',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_hreflang.test',
          1 => 'tests/metatag_hreflang.tags.test',
          2 => 'tests/metatag_hreflang.with_entity_translation.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'devel:devel',
          1 => 'entity_translation:entity_translation',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_importer' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_importer/metatag_importer.module',
      'name' => 'metatag_importer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag Importer',
        'description' => 'Import data from other modules into Metatag.',
        'core' => '7.x',
        'package' => 'SEO',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_importer.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_mobile' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_mobile/metatag_mobile.module',
      'name' => 'metatag_mobile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Mobile & UI Adjustments',
        'description' => 'Provides support for meta tags used to control the mobile browser experience.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_mobile.test',
          1 => 'tests/metatag_mobile.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_opengraph' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_opengraph/metatag_opengraph.module',
      'name' => 'metatag_opengraph',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7106',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: OpenGraph',
        'description' => 'Provides support for Open Graph Protocol meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_opengraph.test',
          1 => 'tests/metatag_opengraph.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_opengraph_products' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_opengraph_products/metatag_opengraph_products.module',
      'name' => 'metatag_opengraph_products',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: OpenGraph Products',
        'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
          1 => 'metatag:metatag_opengraph',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_opengraph_products.test',
          1 => 'tests/metatag_opengraph_products.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_panels' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_panels/metatag_panels.module',
      'name' => 'metatag_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Panels',
        'description' => 'Provides Metatag integration within the Panels interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
          1 => 'panels:panels',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_panels.test',
          1 => 'tests/metatag_panels.i18n.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_twitter_cards' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
      'name' => 'metatag_twitter_cards',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Twitter Cards',
        'description' => 'Provides support for Twitter\'s Card meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_twitter_cards.test',
          1 => 'tests/metatag_twitter_cards.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_verification' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_verification/metatag_verification.module',
      'name' => 'metatag_verification',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Verification',
        'description' => 'Various meta tags for verifying ownership of a site.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
        ),
        'files' => 
        array (
          0 => 'tests/metatag_verification.test',
          1 => 'tests/metatag_verification.tags.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'metatag_views' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/metatag/metatag_views/metatag_views.module',
      'name' => 'metatag_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Views',
        'description' => 'Provides Metatag integration within the Views interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag:metatag',
          1 => 'views:views',
        ),
        'files' => 
        array (
          0 => 'metatag_views.inc',
          1 => 'metatag_views_plugin_display_extender_metatags.inc',
          2 => 'tests/metatag_views.test',
          3 => 'tests/metatag_views.i18n.test',
        ),
        'version' => '7.x-1.25',
        'project' => 'metatag',
        'datestamp' => '1522849089',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.module',
          2 => 'module_filter.admin.inc',
          3 => 'module_filter.theme.inc',
          4 => 'css/module_filter.css',
          5 => 'css/module_filter_tab.css',
          6 => 'js/module_filter.js',
          7 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-2.2',
        'project' => 'module_filter',
        'datestamp' => '1553698385',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'node_page_disable' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/node_page_disable/node_page_disable.module',
      'name' => 'node_page_disable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Page Disable',
        'description' => 'Allows easy UI disabling of the path /node when not used.',
        'package' => 'Other',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node_page_disable.test',
        ),
        'project' => 'node_page_disable',
        'datestamp' => '1515448093',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'notifications' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications.module',
      'name' => 'notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications',
        'description' => 'The basic notifications framework',
        'package' => 'Notifications',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'messaging',
          1 => 'trigger',
          2 => 'messaging_template',
        ),
        'files' => 
        array (
          0 => 'notifications.object.inc',
          1 => 'notifications.field.inc',
          2 => 'notifications.message.inc',
          3 => 'notifications.template.inc',
          4 => 'notifications.subscription.inc',
          5 => 'notifications.event.inc',
          6 => 'notifications.list.inc',
          7 => 'tests/notifications_subscribe.test',
        ),
        'configure' => 'admin/config/messaging',
        'project' => 'notifications',
        'datestamp' => '1323032143',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_account' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_account/notifications_account.module',
      'name' => 'notifications_account',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User account tabs',
        'description' => 'Display user account tabs to manage own subscriptions',
        'package' => 'Notifications',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'configure' => 'admin/config/messaging',
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_content' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_content/notifications_content.module',
      'name' => 'notifications_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Notifications',
        'description' => 'Allows users to subscribe to content related events.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'notifications_content.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_scheduler/notifications_scheduler.module',
      'name' => 'notifications_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications scheduler',
        'description' => 'Configurable scheduler for Notifications.',
        'package' => 'Notifications',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'notifications',
          1 => 'job_scheduler_trigger',
        ),
        'files' => 
        array (
          0 => 'notifications_scheduler.inc',
        ),
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_tags' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_tags/notifications_tags.module',
      'name' => 'notifications_tags',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Notifications',
        'description' => 'Allows users to subscribe to taxonomy terms.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'notifications_content',
          1 => 'taxonomy',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'notifications_tags.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_ui/notifications_ui.module',
      'name' => 'notifications_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications UI',
        'description' => 'Provides a generic UI to create and manage subscriptions',
        'package' => 'Notifications',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'notifications',
        ),
        'files' => 
        array (
          0 => 'notifications_ui.pages.inc',
        ),
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_user' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_user/notifications_user.module',
      'name' => 'notifications_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User subscriptions',
        'description' => 'Subscribe to content created by user',
        'package' => 'Notifications',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'notifications_content',
        ),
        'configure' => 'admin/config/messaging',
        'files' => 
        array (
          0 => 'notifications_user.inc',
        ),
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_views' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications/notifications_views/notifications_views.module',
      'name' => 'notifications_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Notifications Views',
        'description' => 'Views integration for Notifications.',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'notifications',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/notifications_views_handler_argument_autocomplete.inc',
          1 => 'includes/notifications_views_handler_argument_subscription_send_method.inc',
          2 => 'includes/notifications_views_handler_argument_subscription_type.inc',
          3 => 'includes/notifications_views_handler_field_body.inc',
          4 => 'includes/notifications_views_handler_field_machine_name.inc',
          5 => 'includes/notifications_views_handler_field_subscription_interval.inc',
          6 => 'includes/notifications_views_handler_field_subscription_link.inc',
          7 => 'includes/notifications_views_handler_field_subscription_link_delete.inc',
          8 => 'includes/notifications_views_handler_field_subscription_link_edit.inc',
          9 => 'includes/notifications_views_handler_field_subscription_send_method.inc',
          10 => 'includes/notifications_views_handler_field_subscription_type.inc',
          11 => 'includes/notifications_views_handler_filter_subscription_interval.inc',
          12 => 'includes/notifications_views_handler_filter_subscription_send_method.inc',
          13 => 'includes/notifications_views_handler_filter_subscription_type.inc',
          14 => 'includes/notifications_views_handler_relationship.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'notifications',
        'datestamp' => '1323032143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'notifications_forum' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/notifications_forum/notifications_forum.module',
      'name' => 'notifications_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum Notifications',
        'description' => 'Additional UI on top of Taxonomy Notifications when working with the core Forum module.',
        'core' => '7.x',
        'package' => 'Notifications',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'notifications_tags',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'notifications_forum',
        'datestamp' => '1373847674',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'no_autocomplete' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/no_autocomplete/no_autocomplete.module',
      'name' => 'no_autocomplete',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'No Autocomplete',
        'description' => 'No browser autocomplete in key user forms.',
        'core' => '7.x',
        'configure' => 'admin/config/people/no_autocomplete',
        'version' => '7.x-1.4',
        'project' => 'no_autocomplete',
        'datestamp' => '1521228492',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'openid_connect' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/openid_connect/openid_connect.module',
      'name' => 'openid_connect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Connect',
        'description' => 'A pluggable client implementation for the OpenID Connect protocol.',
        'core' => '7.x',
        'package' => 'OAuth2',
        'configure' => 'admin/config/services/openid-connect',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'includes/OpenIDConnectClientInterface.class.php',
          1 => 'includes/OpenIDConnectClientBase.class.php',
        ),
        'version' => '7.x-1.0-beta8',
        'project' => 'openid_connect',
        'datestamp' => '1478078977',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta8',
    ),
    'i18n_panels' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/panels/i18n_panels/i18n_panels.module',
      'name' => 'i18n_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels translation',
        'description' => 'Supports translatable panels items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'panels',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-3.9',
        'project' => 'panels',
        'datestamp' => '1486394388',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7308',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          5 => 'tests/PanelsEntityViewWebTestCase.test',
          6 => 'tests/PanelsNodeViewWebTestCase.test',
          7 => 'tests/PanelsTermViewWebTestCase.test',
          8 => 'tests/PanelsUserViewWebTestCase.test',
        ),
        'version' => '7.x-3.9',
        'project' => 'panels',
        'datestamp' => '1486394388',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'version' => '7.x-3.9',
        'project' => 'panels',
        'datestamp' => '1486394388',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'version' => '7.x-3.9',
        'project' => 'panels',
        'datestamp' => '1486394388',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'version' => '7.x-3.9',
        'project' => 'panels',
        'datestamp' => '1486394388',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'password_policy_password_tab' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/password_policy/contrib/password_tab/password_policy_password_tab.module',
      'name' => 'password_policy_password_tab',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Password change tab',
        'description' => 'Implements a separate password change tab.',
        'package' => 'Other',
        'dependencies' => 
        array (
          0 => 'password_policy',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'password_policy_password_tab.test',
        ),
        'version' => '7.x-1.16',
        'project' => 'password_policy',
        'datestamp' => '1544018585',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.16',
    ),
    'password_policy' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/password_policy/password_policy.module',
      'name' => 'password_policy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7110',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Password policy',
        'description' => 'The Password Policy module allows you to enforce a specific level of password complexity for the user passwords on the system.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/password_policy.test',
          1 => 'tests/password_policy_authmap.test',
          2 => 'tests/password_policy_expiration.test',
        ),
        'configure' => 'admin/config/people/password_policy',
        'version' => '7.x-1.16',
        'project' => 'password_policy',
        'datestamp' => '1544018585',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.16',
    ),
    'pathologic' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/pathologic/pathologic.module',
      'name' => 'pathologic',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pathologic',
        'description' => 'Helps avoid broken links and incorrect paths in content.',
        'package' => 'Input filters',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathologic.test',
        ),
        'version' => '7.x-2.12',
        'project' => 'pathologic',
        'datestamp' => '1387055607',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.12',
    ),
    'popularapi' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/popularapi/popularapi.module',
      'name' => 'popularapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Popular API Block',
        'description' => 'A featured API block',
        'core' => '7.x',
        'package' => 'IBM API Connect v5',
        'files' => 
        array (
          0 => 'popularapi.module',
          1 => 'plugins/bean/popularapi.popularapi_block.inc',
        ),
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'image',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'popularproduct' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/popularapi/popularproduct/popularproduct.module',
      'name' => 'popularproduct',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Popular Product Block',
        'description' => 'A featured Product block',
        'core' => '7.x',
        'package' => 'IBM API Connect v5',
        'files' => 
        array (
          0 => 'popularproduct.module',
          1 => 'plugins/bean/popularproduct.popularproduct_block.inc',
        ),
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'image',
          2 => 'popularapi',
        ),
        'version' => '7.69',
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'profanity' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/profanity/profanity.module',
      'name' => 'profanity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profanity',
        'description' => 'Provides an input format filter and also rule condition for detecting profanity or banned words.',
        'core' => '7.x',
        'package' => 'Other',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'profanity.views.inc',
        ),
        'configure' => 'admin/config/content/profanity',
        'version' => '7.x-1.1+2-dev',
        'project' => 'profanity',
        'datestamp' => '1420319281',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1+2-dev',
    ),
    'restrict_by_ip' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/restrict_by_ip/restrict_by_ip.module',
      'name' => 'restrict_by_ip',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Restrict By IP',
        'package' => 'Access control',
        'description' => 'Enables limiting user login and role access to specific IP Addresses.',
        'core' => '7.x',
        'configure' => 'admin/config/people/restrict_by_ip',
        'files' => 
        array (
          0 => 'restrict_by_ip.test',
        ),
        'version' => '7.x-3.1',
        'project' => 'restrict_by_ip',
        'datestamp' => '1436699642',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'restws' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/restws/restws.module',
      'name' => 'restws',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RESTful web services',
        'description' => 'Provides RESTful web services.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'restws.entity.inc',
          1 => 'restws.formats.inc',
          2 => 'restws.test',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-2.8',
        'project' => 'restws',
        'datestamp' => '1550680697',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'restws_basic_auth' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/restws/restws_basic_auth/restws_basic_auth.module',
      'name' => 'restws_basic_auth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Basic authentication login',
        'description' => 'User login from HTTP authorization headers (part of RESTful web services).',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'restws_basic_auth.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'restws',
        'datestamp' => '1550680697',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7215',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'React on events and conditionally evaluate actions.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules.features.inc',
          1 => 'includes/faces.inc',
          2 => 'includes/rules.core.inc',
          3 => 'includes/rules.event.inc',
          4 => 'includes/rules.processor.inc',
          5 => 'includes/rules.plugins.inc',
          6 => 'includes/rules.state.inc',
          7 => 'modules/comment.rules.inc',
          8 => 'modules/node.eval.inc',
          9 => 'modules/node.rules.inc',
          10 => 'modules/php.eval.inc',
          11 => 'modules/rules_core.eval.inc',
          12 => 'modules/system.eval.inc',
          13 => 'modules/taxonomy.rules.inc',
          14 => 'ui/ui.controller.inc',
          15 => 'ui/ui.core.inc',
          16 => 'ui/ui.data.inc',
          17 => 'ui/ui.plugins.inc',
          18 => 'tests/rules.test',
          19 => 'tests/rules_test.rules.inc',
        ),
        'dependencies' => 
        array (
          0 => 'entity_token',
          1 => 'entity',
        ),
        'version' => '7.x-2.12',
        'project' => 'rules',
        'datestamp' => '1548305586',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.12',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules UI',
        'description' => 'Administrative interface for managing rules.',
        'package' => 'Rules',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'configure' => 'admin/config/workflow/rules',
        'files' => 
        array (
          0 => 'tests/rules_admin.test',
        ),
        'version' => '7.x-2.12',
        'project' => 'rules',
        'datestamp' => '1548305586',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.12',
    ),
    'rules_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/rules/rules_i18n/rules_i18n.module',
      'name' => 'rules_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules translation',
        'description' => 'Allows translating rules.',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_i18n.i18n.inc',
          1 => 'rules_i18n.rules.inc',
          2 => 'rules_i18n.test',
        ),
        'version' => '7.x-2.12',
        'project' => 'rules',
        'datestamp' => '1548305586',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.12',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of Rules components using actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/rules_scheduler.handler.inc',
          1 => 'includes/rules_scheduler_views_filter.inc',
          2 => 'tests/rules_scheduler.test',
          3 => 'tests/rules_scheduler_test.inc',
        ),
        'version' => '7.x-2.12',
        'project' => 'rules',
        'datestamp' => '1548305586',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.12',
    ),
    'rules_http_client' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/rules_http_client/rules_http_client.module',
      'name' => 'rules_http_client',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules HTTP Client',
        'description' => 'Provides an action for making http requests.',
        'package' => 'Rules',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'rules_http_client',
        'datestamp' => '1386187110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta1',
    ),
    'search404' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/search404/search404.module',
      'name' => 'search404',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search 404',
        'description' => 'Automatically search for the keywords in URLs that result in 404 errors and show results instead of Page-Not-Found. ',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search404.test',
        ),
        'configure' => 'admin/config/search/search404',
        'version' => '7.x-1.6',
        'project' => 'search404',
        'datestamp' => '1510300397',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'search_autocomplete' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/search_autocomplete/search_autocomplete.module',
      'name' => 'search_autocomplete',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7420',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search Autocomplete',
        'description' => 'Provides autocompletion for Drupal search forms and input fields in your site.',
        'core' => '7.x',
        'package' => 'Search',
        'files' => 
        array (
          0 => 'views/plugins/search_autocomplete.views_plugin_style.inc',
        ),
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'configure' => 'admin/config/search/search_autocomplete',
        'version' => '7.x-4.9',
        'project' => 'search_autocomplete',
        'datestamp' => '1540045984',
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.9',
    ),
    'search_config' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/search_config/search_config.module',
      'name' => 'search_config',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search Configuration',
        'description' => 'Modify search form, including enforcing search restrictions by content type.',
        'package' => 'Search',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'search',
        ),
        'configure' => 'admin/config/search/settings',
        'version' => '7.x-1.1',
        'project' => 'search_config',
        'datestamp' => '1399289928',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'seckit' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/seckit/seckit.module',
      'name' => 'seckit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7107',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Security Kit',
        'description' => 'Enhance security of your Drupal website.',
        'package' => 'Security',
        'core' => '7.x',
        'configure' => 'admin/config/system/seckit',
        'files' => 
        array (
          0 => 'seckit.install',
          1 => 'seckit.module',
          2 => 'seckit.test',
          3 => 'includes/seckit.form.inc',
        ),
        'version' => '7.x-1.11',
        'project' => 'seckit',
        'datestamp' => '1561463898',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'security_questions' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/security_questions/security_questions.module',
      'name' => 'security_questions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Security questions',
        'description' => 'Allow users to select and answer security questions for additional login security.',
        'core' => '7.x',
        'configure' => 'admin/config/people/security_questions',
        'version' => '7.x-2.0',
        'project' => 'security_questions',
        'datestamp' => '1372627251',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'session_limit' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/session_limit/session_limit.module',
      'name' => 'session_limit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session Limit',
        'description' => 'Limit simultaneous user sessions.',
        'core' => '7.x',
        'configure' => 'admin/config/people/session-limit',
        'files' => 
        array (
          0 => 'session_limit.install',
          1 => 'session_limit.module',
          2 => 'session_limit.tokens.inc',
          3 => 'tests/session_limit.test',
        ),
        'version' => '7.x-2.3',
        'project' => 'session_limit',
        'datestamp' => '1540976892',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'site_test' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/site_test/site_test.module',
      'name' => 'site_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Test',
        'description' => 'Provides extensions to simpletest to allow testing within the current site configuration.',
        'package' => 'Testing',
        'dependencies' => 
        array (
          0 => 'simpletest',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_web_test_case.php',
          1 => 'tests/site_test.site.test',
          2 => 'tests/site_test.core.test',
          3 => 'tests/site_test.clone.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'site_test',
        'datestamp' => '1459748340',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'site_test_helpers' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/site_test_helpers/site_test_helpers.module',
      'name' => 'site_test_helpers',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Test helpers',
        'description' => 'Test helpers to be used with Simpletest test module.',
        'core' => '7.x',
        'package' => 'Other',
        'version' => '7.x-1',
        'dependencies' => 
        array (
          0 => 'simpletest',
          1 => 'libraries',
          2 => 'drupal_helpers',
        ),
        'files' => 
        array (
          0 => 'site_test_helpers_case.php',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1',
    ),
    'slick' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick/slick.module',
      'name' => 'slick',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick',
        'description' => 'Slick carousel, the last carousel you\'ll ever need.',
        'core' => '7.x',
        'package' => 'Slick',
        'dependencies' => 
        array (
          0 => 'libraries (>=2.x)',
          1 => 'ctools',
          2 => 'jquery_update',
        ),
        'files' => 
        array (
          0 => 'tests/slick.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'slick',
        'datestamp' => '1545225486',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'slick_fields' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick/slick_fields/slick_fields.module',
      'name' => 'slick_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick fields',
        'description' => 'Adds a field display formatter for the Slick carousel.',
        'core' => '7.x',
        'package' => 'Slick',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'slick',
        ),
        'version' => '7.x-2.1',
        'project' => 'slick',
        'datestamp' => '1545225486',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'slick_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick/slick_ui/slick_ui.module',
      'name' => 'slick_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick UI',
        'description' => 'Provides the Slick carousel export UI.',
        'core' => '7.x',
        'package' => 'Slick',
        'dependencies' => 
        array (
          0 => 'slick',
        ),
        'configure' => 'admin/config/media/slick/ui',
        'version' => '7.x-2.1',
        'project' => 'slick',
        'datestamp' => '1545225486',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'slick_devel' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick_extras/slick_devel/slick_devel.module',
      'name' => 'slick_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick development',
        'description' => 'Provides Slick development, the last carousel development.',
        'core' => '7.x',
        'package' => 'Slick',
        'dependencies' => 
        array (
          0 => 'slick',
        ),
        'version' => '7.x-2.0',
        'project' => 'slick_extras',
        'datestamp' => '1545226088',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'slick_example' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick_extras/slick_example/slick_example.module',
      'name' => 'slick_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick example',
        'description' => 'Provides Slick examples, the last carousel examples.',
        'package' => 'Slick',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'slick_fields',
          1 => 'slick_views',
        ),
        'version' => '7.x-2.0',
        'project' => 'slick_extras',
        'datestamp' => '1545226088',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'slick_extras' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick_extras/slick_extras.module',
      'name' => 'slick_extras',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick extras',
        'description' => 'Provides Slick extras, the last carousel extras.',
        'package' => 'Slick',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'slick',
        ),
        'version' => '7.x-2.0',
        'project' => 'slick_extras',
        'datestamp' => '1545226088',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'slick_views' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/slick_views/slick_views.module',
      'name' => 'slick_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Slick views',
        'description' => 'Adds a Views style plugin for the Slick carousel.',
        'core' => '7.x',
        'package' => 'Slick',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'slick',
        ),
        'files' => 
        array (
          0 => 'SlickViews.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'slick_views',
        'datestamp' => '1545225193',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'socialblock' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/socialblock/socialblock.module',
      'name' => 'socialblock',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Social Block',
        'description' => 'Displays latest forum topics and tweets',
        'core' => '7.x',
        'package' => 'IBM API Connect v5',
        'files' => 
        array (
          0 => 'socialblock.module',
          1 => 'plugins/bean/socialblock.socialblock_block.inc',
        ),
        'configure' => 'admin/config/system/socialblock',
        'dependencies' => 
        array (
          0 => 'bean',
          1 => 'image',
          2 => 'forum',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'statsd' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/statsd/statsd.module',
      'name' => 'statsd',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'StatsD',
        'description' => 'Logs and records system events to Graphite via StatsD',
        'core' => '7.x',
        'php' => '5.3',
        'configure' => 'admin/config/development/statsd',
        'files' => 
        array (
          0 => 'includes/statsd.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'statsd',
        'datestamp' => '1461556440',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-1.1',
    ),
    'support' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/support/support.module',
      'name' => 'support',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Support',
        'package' => 'Support',
        'description' => 'A simple helpdesk and support ticketing system.',
        'dependencies' => 
        array (
          0 => 'comment',
          1 => 'file',
          2 => 'entity',
        ),
        'files' => 
        array (
          0 => 'includes/support.ui.inc',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc2',
        'project' => 'support',
        'datestamp' => '1348346701',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'support_charts' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/support/support_charts/support_charts.module',
      'name' => 'support_charts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Support charting',
        'description' => 'Charting for the helpdesk and support ticketing system.',
        'package' => 'Support',
        'dependencies' => 
        array (
          0 => 'support',
          1 => 'chart',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc2',
        'project' => 'support',
        'datestamp' => '1348346701',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'support_mailcmd' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/support/support_mailcmd/support_mailcmd.module',
      'name' => 'support_mailcmd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Support Mail Commands',
        'package' => 'Support',
        'description' => 'Advanced support ticket editing via emil.',
        'dependencies' => 
        array (
          0 => 'support',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc2',
        'project' => 'support',
        'datestamp' => '1348346701',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'support_overview' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/support/support_overview/support_overview.module',
      'name' => 'support_overview',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Support Overview',
        'package' => 'Support',
        'description' => 'Overview summary of clients',
        'dependencies' => 
        array (
          0 => 'support',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc2',
        'project' => 'support',
        'datestamp' => '1348346701',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'support_pm' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/support/support_pm/support_pm.module',
      'name' => 'support_pm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Support Project Management',
        'description' => 'Add project management functionality to the support module',
        'package' => 'Support',
        'dependencies' => 
        array (
          0 => 'support',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc2',
        'project' => 'support',
        'datestamp' => '1348346701',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'support_reference' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/support/support_reference/support_reference.module',
      'name' => 'support_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Support Reference',
        'package' => 'Support',
        'description' => 'Tracks ticket references',
        'dependencies' => 
        array (
          0 => 'support',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc2',
        'project' => 'support',
        'datestamp' => '1348346701',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'syslog_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/syslog_advanced/syslog_advanced.module',
      'name' => 'syslog_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced syslog',
        'description' => 'Allows more detailed settings over syslog',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog_advanced.module',
        ),
        'configure' => 'admin/config/development/logging',
        'version' => '7.x-1.3',
        'project' => 'syslog_advanced',
        'datestamp' => '1366634412',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'tagclouds' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/tagclouds/tagclouds.module',
      'name' => 'tagclouds',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TagClouds',
        'description' => 'TagClouds makes weighted tag clouds from your taxonomy terms.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'drupal:taxonomy',
          1 => 'drupal:system (>=7.40)',
        ),
        'package' => 'Taxonomy',
        'configure' => 'admin/config/content/tagclouds',
        'version' => '7.x-1.12',
        'project' => 'tagclouds',
        'datestamp' => '1549387684',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.12',
    ),
    'taxonomy_menu' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/taxonomy_menu/taxonomy_menu.module',
      'name' => 'taxonomy_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'menu',
        ),
        'description' => 'Adds links to taxonomy terms to a menu.',
        'name' => 'Taxonomy menu',
        'package' => 'Taxonomy menu',
        'files' => 
        array (
          0 => 'taxonomy_menu.batch.inc',
          1 => 'taxonomy_menu.database.inc',
          2 => 'taxonomy_menu.module',
          3 => 'taxonomy_menu.test',
          4 => 'taxonomy_menu.install',
        ),
        'version' => '7.x-1.5',
        'project' => 'taxonomy_menu',
        'datestamp' => '1396359247',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'termcase' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/termcase/termcase.module',
      'name' => 'termcase',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Termcase',
        'description' => 'Enable text case settings per taxonomy (lowercase, uppercase, propercase or only the first character uppercase)',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'version' => '7.x-1.3',
        'project' => 'termcase',
        'datestamp' => '1387905814',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'tfa' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/tfa/tfa.module',
      'name' => 'tfa',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Two-factor Authentication (TFA)',
        'description' => 'Pluggable provider of second factor authentication for Drupal',
        'core' => '7.x',
        'configure' => 'admin/config/people/tfa',
        'files' => 
        array (
          0 => 'tfa.inc',
          1 => 'tests/tfa.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'tfa',
        'datestamp' => '1463169918',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'tfa_basic' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/tfa_basic/tfa_basic.module',
      'name' => 'tfa_basic',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TFA Basic Plugins',
        'description' => 'TFA plugins for Time-based One Time Passwords, Trusted Browsers, Recovery Codes, and Twilio SMS',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'tfa',
        ),
        'files' => 
        array (
          0 => 'tests/tfa_basic.test',
          1 => 'includes/tfa_totp.inc',
          2 => 'includes/tfa_trusted_browser.inc',
          3 => 'includes/tfa_recovery.inc',
          4 => 'includes/tfa_sms.inc',
          5 => 'includes/tfa_help.inc',
          6 => 'includes/googleauthenticator/GoogleAuthenticator.php',
          7 => 'includes/twilio-php/Services/Twilio.php',
        ),
        'version' => '7.x-1.1',
        'project' => 'tfa_basic',
        'datestamp' => '1530072233',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'tfa_rules' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/tfa_rules/tfa_rules.module',
      'name' => 'tfa_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TFA Rules',
        'description' => 'Two-Factor Authentication support for Rules',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'tfa',
        ),
        'version' => '7.x-1.1',
        'project' => 'tfa_rules',
        'datestamp' => '1480719185',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'title' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/title/title.module',
      'name' => 'title',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Title',
        'description' => 'Replaces entity legacy fields with regular fields.',
        'core' => '7.x',
        'package' => 'Fields',
        'configure' => 'admin/config/content/title',
        'dependencies' => 
        array (
          0 => 'system (>7.14)',
        ),
        'files' => 
        array (
          0 => 'views/views_handler_title_field.inc',
          1 => 'tests/TitleAdminSettingsTestCase.test',
          2 => 'tests/TitleFieldReplacementTestCase.test',
          3 => 'tests/TitleTranslationTestCase.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'entity',
          1 => 'entity_translation',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'title',
        'datestamp' => '1571406489',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'token',
        'datestamp' => '1485316088',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'translation_helpers' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/translation_helpers/translation_helpers.module',
      'name' => 'translation_helpers',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation helpers',
        'description' => 'Provides methods for other modules to use with translated content.',
        'dependencies' => 
        array (
          0 => 'translation',
        ),
        'package' => 'Multilanguage',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'translation_helpers',
        'datestamp' => '1322669152',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'transliteration' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/transliteration/transliteration.module',
      'name' => 'transliteration',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7300',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Transliteration',
        'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
        'core' => '7.x',
        'configure' => 'admin/config/media/file-system',
        'version' => '7.x-3.2',
        'project' => 'transliteration',
        'datestamp' => '1395079444',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'twitter_timeline' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/twitter_timeline/twitter_timeline.module',
      'name' => 'twitter_timeline',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Twitter Timeline',
        'description' => 'Display a twitter timeline widget in a block',
        'package' => 'Other',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'bean',
        ),
        'files' => 
        array (
          0 => 'plugins/bean/twitter_timeline.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'twitter_timeline',
        'datestamp' => '1397999028',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'ultimate_cron' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/ultimate_cron/ultimate_cron.module',
      'name' => 'ultimate_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7206',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ultimate Cron',
        'description' => 'Cron',
        'core' => '7.x',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'tests/rules.test',
          1 => 'CronRule.class.php',
          2 => 'ultimate_cron.lock.inc',
          3 => 'ultimate_cron.memcache-lock.inc',
          4 => 'ultimate_cron.job.inc',
          5 => 'ultimate_cron.plugin.inc',
          6 => 'ultimate_cron.progress.inc',
          7 => 'ultimate_cron.memcache-progress.inc',
          8 => 'ultimate_cron.signal.inc',
          9 => 'ultimate_cron.cache-signal.inc',
        ),
        'configure' => 'admin/config/system/cron/settings',
        'version' => '7.x-2.8',
        'project' => 'ultimate_cron',
        'datestamp' => '1531690353',
      ),
      'version' => '7.x-2.8',
    ),
    'underscore' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/underscore/underscore.module',
      'name' => 'underscore',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Underscore.js',
        'description' => 'Adds the Underscore.js JavaScript library to Drupal.',
        'dependencies' => 
        array (
          0 => 'libraries (>=2.0)',
        ),
        'core' => '7.x',
        'version' => '7.x-2.1',
        'project' => 'underscore',
        'datestamp' => '1359991540',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'user_pwreset_timeout' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/user_pwreset_timeout/user_pwreset_timeout.module',
      'name' => 'user_pwreset_timeout',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Password Reset Link Timeout',
        'description' => 'Presents a UI element to set the user password reset link timeout length.',
        'core' => '7.x',
        'configure' => 'admin/config/people/accounts',
        'version' => '7.x-1.0',
        'project' => 'user_pwreset_timeout',
        'datestamp' => '1386725605',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'variable' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/forum.variable.inc',
          1 => 'includes/locale.variable.inc',
          2 => 'includes/menu.variable.inc',
          3 => 'includes/node.variable.inc',
          4 => 'includes/system.variable.inc',
          5 => 'includes/taxonomy.variable.inc',
          6 => 'includes/translation.variable.inc',
          7 => 'includes/user.variable.inc',
          8 => 'variable.test',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_admin' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_example' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/variable/variable_example/variable_example.module',
      'name' => 'variable_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable example',
        'description' => 'An example module showing how to use the Variable API and providing some variables.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'variable_store',
        ),
        'package' => 'Example modules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_example.variable.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_realm' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'files' => 
        array (
          0 => 'variable_realm.class.inc',
          1 => 'variable_realm_union.class.inc',
        ),
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_store' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'files' => 
        array (
          0 => 'variable_store.class.inc',
          1 => 'variable_store.test',
        ),
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_views' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/variable/variable_views/variable_views.module',
      'name' => 'variable_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable views',
        'description' => 'Provides views integration for variable, included a default variable argument.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'views',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views_plugin_argument_default_variable.inc',
          1 => 'includes/views_handler_field_variable_title.inc',
          2 => 'includes/views_handler_field_variable_value.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7302',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_ctools_dropdown.inc',
          19 => 'handlers/views_handler_field_custom.inc',
          20 => 'handlers/views_handler_field_date.inc',
          21 => 'handlers/views_handler_field_entity.inc',
          22 => 'handlers/views_handler_field_links.inc',
          23 => 'handlers/views_handler_field_markup.inc',
          24 => 'handlers/views_handler_field_math.inc',
          25 => 'handlers/views_handler_field_numeric.inc',
          26 => 'handlers/views_handler_field_prerender_list.inc',
          27 => 'handlers/views_handler_field_time_interval.inc',
          28 => 'handlers/views_handler_field_serialized.inc',
          29 => 'handlers/views_handler_field_machine_name.inc',
          30 => 'handlers/views_handler_field_url.inc',
          31 => 'handlers/views_handler_filter.inc',
          32 => 'handlers/views_handler_filter_boolean_operator.inc',
          33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          34 => 'handlers/views_handler_filter_combine.inc',
          35 => 'handlers/views_handler_filter_date.inc',
          36 => 'handlers/views_handler_filter_equality.inc',
          37 => 'handlers/views_handler_filter_entity_bundle.inc',
          38 => 'handlers/views_handler_filter_group_by_numeric.inc',
          39 => 'handlers/views_handler_filter_in_operator.inc',
          40 => 'handlers/views_handler_filter_many_to_one.inc',
          41 => 'handlers/views_handler_filter_numeric.inc',
          42 => 'handlers/views_handler_filter_string.inc',
          43 => 'handlers/views_handler_filter_fields_compare.inc',
          44 => 'handlers/views_handler_relationship.inc',
          45 => 'handlers/views_handler_relationship_groupwise_max.inc',
          46 => 'handlers/views_handler_sort.inc',
          47 => 'handlers/views_handler_sort_date.inc',
          48 => 'handlers/views_handler_sort_formula.inc',
          49 => 'handlers/views_handler_sort_group_by_numeric.inc',
          50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          51 => 'handlers/views_handler_sort_random.inc',
          52 => 'includes/base.inc',
          53 => 'includes/handlers.inc',
          54 => 'includes/plugins.inc',
          55 => 'includes/view.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          65 => 'modules/book/views_plugin_argument_default_book_root.inc',
          66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          67 => 'modules/comment/views_handler_field_comment.inc',
          68 => 'modules/comment/views_handler_field_comment_depth.inc',
          69 => 'modules/comment/views_handler_field_comment_link.inc',
          70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          74 => 'modules/comment/views_handler_field_comment_node_link.inc',
          75 => 'modules/comment/views_handler_field_comment_username.inc',
          76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          78 => 'modules/comment/views_handler_field_node_comment.inc',
          79 => 'modules/comment/views_handler_field_node_new_comments.inc',
          80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          83 => 'modules/comment/views_handler_filter_node_comment.inc',
          84 => 'modules/comment/views_handler_sort_comment_thread.inc',
          85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          87 => 'modules/comment/views_plugin_row_comment_rss.inc',
          88 => 'modules/comment/views_plugin_row_comment_view.inc',
          89 => 'modules/contact/views_handler_field_contact_link.inc',
          90 => 'modules/field/views_handler_field_field.inc',
          91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          92 => 'modules/field/views_handler_argument_field_list.inc',
          93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          94 => 'modules/field/views_handler_argument_field_list_string.inc',
          95 => 'modules/field/views_handler_filter_field_list.inc',
          96 => 'modules/filter/views_handler_field_filter_format_name.inc',
          97 => 'modules/locale/views_handler_field_node_language.inc',
          98 => 'modules/locale/views_handler_filter_node_language.inc',
          99 => 'modules/locale/views_handler_argument_locale_group.inc',
          100 => 'modules/locale/views_handler_argument_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_group.inc',
          102 => 'modules/locale/views_handler_field_locale_language.inc',
          103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          104 => 'modules/locale/views_handler_filter_locale_group.inc',
          105 => 'modules/locale/views_handler_filter_locale_language.inc',
          106 => 'modules/locale/views_handler_filter_locale_version.inc',
          107 => 'modules/locale/views_handler_sort_node_language.inc',
          108 => 'modules/node/views_handler_argument_dates_various.inc',
          109 => 'modules/node/views_handler_argument_node_language.inc',
          110 => 'modules/node/views_handler_argument_node_nid.inc',
          111 => 'modules/node/views_handler_argument_node_type.inc',
          112 => 'modules/node/views_handler_argument_node_vid.inc',
          113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          115 => 'modules/node/views_handler_field_node.inc',
          116 => 'modules/node/views_handler_field_node_link.inc',
          117 => 'modules/node/views_handler_field_node_link_delete.inc',
          118 => 'modules/node/views_handler_field_node_link_edit.inc',
          119 => 'modules/node/views_handler_field_node_revision.inc',
          120 => 'modules/node/views_handler_field_node_revision_link.inc',
          121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          123 => 'modules/node/views_handler_field_node_path.inc',
          124 => 'modules/node/views_handler_field_node_type.inc',
          125 => 'modules/node/views_handler_field_node_version_count.inc',
          126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          127 => 'modules/node/views_handler_filter_node_access.inc',
          128 => 'modules/node/views_handler_filter_node_status.inc',
          129 => 'modules/node/views_handler_filter_node_type.inc',
          130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          131 => 'modules/node/views_handler_filter_node_version_count.inc',
          132 => 'modules/node/views_handler_sort_node_version_count.inc',
          133 => 'modules/node/views_plugin_argument_default_node.inc',
          134 => 'modules/node/views_plugin_argument_validate_node.inc',
          135 => 'modules/node/views_plugin_row_node_rss.inc',
          136 => 'modules/node/views_plugin_row_node_view.inc',
          137 => 'modules/profile/views_handler_field_profile_date.inc',
          138 => 'modules/profile/views_handler_field_profile_list.inc',
          139 => 'modules/profile/views_handler_filter_profile_selection.inc',
          140 => 'modules/search/views_handler_argument_search.inc',
          141 => 'modules/search/views_handler_field_search_score.inc',
          142 => 'modules/search/views_handler_filter_search.inc',
          143 => 'modules/search/views_handler_sort_search_score.inc',
          144 => 'modules/search/views_plugin_row_search_view.inc',
          145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
          147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
          148 => 'modules/system/views_handler_argument_file_fid.inc',
          149 => 'modules/system/views_handler_field_file.inc',
          150 => 'modules/system/views_handler_field_file_extension.inc',
          151 => 'modules/system/views_handler_field_file_filemime.inc',
          152 => 'modules/system/views_handler_field_file_uri.inc',
          153 => 'modules/system/views_handler_field_file_status.inc',
          154 => 'modules/system/views_handler_filter_file_status.inc',
          155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
          159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
          168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          176 => 'modules/system/views_handler_filter_system_type.inc',
          177 => 'modules/translation/views_handler_argument_node_tnid.inc',
          178 => 'modules/translation/views_handler_field_node_link_translate.inc',
          179 => 'modules/translation/views_handler_field_node_translation_link.inc',
          180 => 'modules/translation/views_handler_filter_node_tnid.inc',
          181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          182 => 'modules/translation/views_handler_relationship_translation.inc',
          183 => 'modules/user/views_handler_argument_user_uid.inc',
          184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          185 => 'modules/user/views_handler_field_user.inc',
          186 => 'modules/user/views_handler_field_user_language.inc',
          187 => 'modules/user/views_handler_field_user_link.inc',
          188 => 'modules/user/views_handler_field_user_link_cancel.inc',
          189 => 'modules/user/views_handler_field_user_link_edit.inc',
          190 => 'modules/user/views_handler_field_user_mail.inc',
          191 => 'modules/user/views_handler_field_user_name.inc',
          192 => 'modules/user/views_handler_field_user_permissions.inc',
          193 => 'modules/user/views_handler_field_user_picture.inc',
          194 => 'modules/user/views_handler_field_user_roles.inc',
          195 => 'modules/user/views_handler_filter_user_current.inc',
          196 => 'modules/user/views_handler_filter_user_name.inc',
          197 => 'modules/user/views_handler_filter_user_permissions.inc',
          198 => 'modules/user/views_handler_filter_user_roles.inc',
          199 => 'modules/user/views_plugin_argument_default_current_user.inc',
          200 => 'modules/user/views_plugin_argument_default_user.inc',
          201 => 'modules/user/views_plugin_argument_validate_user.inc',
          202 => 'modules/user/views_plugin_row_user_view.inc',
          203 => 'plugins/views_plugin_access.inc',
          204 => 'plugins/views_plugin_access_none.inc',
          205 => 'plugins/views_plugin_access_perm.inc',
          206 => 'plugins/views_plugin_access_role.inc',
          207 => 'plugins/views_plugin_argument_default.inc',
          208 => 'plugins/views_plugin_argument_default_php.inc',
          209 => 'plugins/views_plugin_argument_default_fixed.inc',
          210 => 'plugins/views_plugin_argument_default_raw.inc',
          211 => 'plugins/views_plugin_argument_validate.inc',
          212 => 'plugins/views_plugin_argument_validate_numeric.inc',
          213 => 'plugins/views_plugin_argument_validate_php.inc',
          214 => 'plugins/views_plugin_cache.inc',
          215 => 'plugins/views_plugin_cache_none.inc',
          216 => 'plugins/views_plugin_cache_time.inc',
          217 => 'plugins/views_plugin_display.inc',
          218 => 'plugins/views_plugin_display_attachment.inc',
          219 => 'plugins/views_plugin_display_block.inc',
          220 => 'plugins/views_plugin_display_default.inc',
          221 => 'plugins/views_plugin_display_embed.inc',
          222 => 'plugins/views_plugin_display_extender.inc',
          223 => 'plugins/views_plugin_display_feed.inc',
          224 => 'plugins/views_plugin_display_page.inc',
          225 => 'plugins/views_plugin_exposed_form_basic.inc',
          226 => 'plugins/views_plugin_exposed_form.inc',
          227 => 'plugins/views_plugin_exposed_form_input_required.inc',
          228 => 'plugins/views_plugin_localization_core.inc',
          229 => 'plugins/views_plugin_localization.inc',
          230 => 'plugins/views_plugin_localization_none.inc',
          231 => 'plugins/views_plugin_pager.inc',
          232 => 'plugins/views_plugin_pager_full.inc',
          233 => 'plugins/views_plugin_pager_mini.inc',
          234 => 'plugins/views_plugin_pager_none.inc',
          235 => 'plugins/views_plugin_pager_some.inc',
          236 => 'plugins/views_plugin_query.inc',
          237 => 'plugins/views_plugin_query_default.inc',
          238 => 'plugins/views_plugin_row.inc',
          239 => 'plugins/views_plugin_row_fields.inc',
          240 => 'plugins/views_plugin_row_rss_fields.inc',
          241 => 'plugins/views_plugin_style.inc',
          242 => 'plugins/views_plugin_style_default.inc',
          243 => 'plugins/views_plugin_style_grid.inc',
          244 => 'plugins/views_plugin_style_list.inc',
          245 => 'plugins/views_plugin_style_jump_menu.inc',
          246 => 'plugins/views_plugin_style_mapping.inc',
          247 => 'plugins/views_plugin_style_rss.inc',
          248 => 'plugins/views_plugin_style_summary.inc',
          249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          250 => 'plugins/views_plugin_style_summary_unformatted.inc',
          251 => 'plugins/views_plugin_style_table.inc',
          252 => 'tests/handlers/views_handlers.test',
          253 => 'tests/handlers/views_handler_area_text.test',
          254 => 'tests/handlers/views_handler_argument_null.test',
          255 => 'tests/handlers/views_handler_argument_string.test',
          256 => 'tests/handlers/views_handler_field.test',
          257 => 'tests/handlers/views_handler_field_boolean.test',
          258 => 'tests/handlers/views_handler_field_custom.test',
          259 => 'tests/handlers/views_handler_field_counter.test',
          260 => 'tests/handlers/views_handler_field_date.test',
          261 => 'tests/handlers/views_handler_field_file_extension.test',
          262 => 'tests/handlers/views_handler_field_file_size.test',
          263 => 'tests/handlers/views_handler_field_math.test',
          264 => 'tests/handlers/views_handler_field_url.test',
          265 => 'tests/handlers/views_handler_field_xss.test',
          266 => 'tests/handlers/views_handler_filter_combine.test',
          267 => 'tests/handlers/views_handler_filter_date.test',
          268 => 'tests/handlers/views_handler_filter_equality.test',
          269 => 'tests/handlers/views_handler_filter_in_operator.test',
          270 => 'tests/handlers/views_handler_filter_numeric.test',
          271 => 'tests/handlers/views_handler_filter_string.test',
          272 => 'tests/handlers/views_handler_manytoone.test',
          273 => 'tests/handlers/views_handler_sort_random.test',
          274 => 'tests/handlers/views_handler_sort_date.test',
          275 => 'tests/handlers/views_handler_sort.test',
          276 => 'tests/test_handlers/views_test_area_access.inc',
          277 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          278 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          279 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          280 => 'tests/plugins/views_plugin_display.test',
          281 => 'tests/styles/views_plugin_style_jump_menu.test',
          282 => 'tests/styles/views_plugin_style.test',
          283 => 'tests/styles/views_plugin_style_base.test',
          284 => 'tests/styles/views_plugin_style_mapping.test',
          285 => 'tests/styles/views_plugin_style_unformatted.test',
          286 => 'tests/views_access.test',
          287 => 'tests/views_analyze.test',
          288 => 'tests/views_basic.test',
          289 => 'tests/views_ajax.test',
          290 => 'tests/views_argument_default.test',
          291 => 'tests/views_argument_validator.test',
          292 => 'tests/views_exposed_form.test',
          293 => 'tests/field/views_fieldapi.test',
          294 => 'tests/views_glossary.test',
          295 => 'tests/views_groupby.test',
          296 => 'tests/views_handler_filter.test',
          297 => 'tests/views_handlers.test',
          298 => 'tests/views_module.test',
          299 => 'tests/views_pager.test',
          300 => 'tests/views_plugin_localization_test.inc',
          301 => 'tests/views_translatable.test',
          302 => 'tests/views_query.test',
          303 => 'tests/views_upgrade.test',
          304 => 'tests/views_test.views_default.inc',
          305 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          306 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          307 => 'tests/node/views_node_revision_relations.test',
          308 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          309 => 'tests/user/views_handler_field_user_name.test',
          310 => 'tests/user/views_user_argument_default.test',
          311 => 'tests/user/views_user_argument_validate.test',
          312 => 'tests/user/views_user.test',
          313 => 'tests/views_cache.test',
          314 => 'tests/views_clone.test',
          315 => 'tests/views_view.test',
          316 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.23',
        'project' => 'views',
        'datestamp' => '1557505389',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.23',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        '# @codingStandardsIgnoreLine
files' => 
        array (
          0 => 'views_ui.module',
        ),
        'files' => 
        array (
          0 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.23',
        'project' => 'views',
        'datestamp' => '1557505389',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.23',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.5',
        'project' => 'views_bulk_operations',
        'datestamp' => '1525821486',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views (>=3.12)',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2.9',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.5',
        'project' => 'views_bulk_operations',
        'datestamp' => '1525821486',
      ),
      'version' => '7.x-3.5',
    ),
    'views_json' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_datasource/views_json.module',
      'name' => 'views_json',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views JSON',
        'description' => 'Views style plugin to render node content as JSON.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_json.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_rdf' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_datasource/views_rdf.module',
      'name' => 'views_rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views RDF',
        'description' => 'Views style plugin to render node content as RDF.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_rdf.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_xhtml' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_datasource/views_xhtml.module',
      'name' => 'views_xhtml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views XHTML',
        'description' => 'Views style plugin to render node content as XHTML microformats.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_xml',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_xhtml.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_xml' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_datasource/views_xml.module',
      'name' => 'views_xml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views XML',
        'description' => 'Views style plugin to render node content as XML.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_xml.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_data_export' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/views_data_export/views_data_export.module',
      'name' => 'views_data_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Data Export',
        'description' => 'Plugin to export views data into various file formats',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'plugins/views_data_export_plugin_display_export.inc',
          1 => 'plugins/views_data_export_plugin_style_export.inc',
          2 => 'plugins/views_data_export_plugin_style_export_csv.inc',
          3 => 'plugins/views_data_export_plugin_style_export_xml.inc',
          4 => 'tests/base.test',
          5 => 'tests/access.test',
          6 => 'tests/garbagecollection.test',
          7 => 'tests/csv_export.test',
          8 => 'tests/doc_export.test',
          9 => 'tests/txt_export.test',
          10 => 'tests/xls_export.test',
          11 => 'tests/xml_export.test',
        ),
        'version' => '7.x-3.2',
        'project' => 'views_data_export',
        'datestamp' => '1491379387',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'votingapi' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/votingapi/votingapi.module',
      'name' => 'votingapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Voting API',
        'description' => 'Provides a shared voting API for other modules.',
        'package' => 'Voting',
        'core' => '7.x',
        'configure' => 'admin/config/search/votingapi',
        'files' => 
        array (
          0 => 'votingapi.migrate.inc',
          1 => 'tests/votingapi.test',
          2 => 'views/votingapi_views_handler_field_value.inc',
          3 => 'views/votingapi_views_handler_sort_nullable.inc',
          4 => 'views/votingapi_views_handler_relationship.inc',
        ),
        'version' => '7.x-2.15',
        'project' => 'votingapi',
        'datestamp' => '1526810587',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.15',
    ),
    'vppr' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/vppr/vppr.module',
      'name' => 'vppr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Vocabulary Permissions Per Role',
        'description' => 'Allow adding to/editing terms of/removing terms from vocabularies per role.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'version' => '7.x-1.0',
        'project' => 'vppr',
        'datestamp' => '1349514718',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'workbench' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/workbench/workbench.module',
      'name' => 'workbench',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench',
        'description' => 'Workbench editorial suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/settings',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.2',
        'project' => 'workbench',
        'datestamp' => '1358534592',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'workbench_moderation' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/workbench_moderation/workbench_moderation.module',
      'name' => 'workbench_moderation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench Moderation',
        'description' => 'Provides content moderation services',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/moderation',
        'files' => 
        array (
          0 => 'workbench_moderation.module',
          1 => 'includes/workbench_moderation_handler_field_history_link.inc',
          2 => 'includes/workbench_moderation_handler_field_links.inc',
          3 => 'includes/workbench_moderation_handler_field_state.inc',
          4 => 'includes/workbench_moderation_handler_filter_state.inc',
          5 => 'includes/workbench_moderation_handler_filter_moderated_type.inc',
          6 => 'includes/workbench_moderation_handler_filter_user_can_moderate.inc',
          7 => 'workbench_moderation.migrate.inc',
          8 => 'tests/external_node_update.test',
          9 => 'tests/workbench_moderation.test',
          10 => 'tests/workbench_moderation.files.test',
          11 => 'tests/workbench_moderation.perms.test',
          12 => 'tests/workbench_moderation.node_access.test',
          13 => 'tests/workbench_moderation.transition.test',
        ),
        'dependencies' => 
        array (
          0 => 'drafty',
        ),
        'version' => '7.x-3.0',
        'project' => 'workbench_moderation',
        'datestamp' => '1478119457',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'wysiwyg',
        'datestamp' => '1563309493',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.6',
    ),
    'xautoload' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/modules/xautoload/xautoload.module',
      'name' => 'xautoload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'X Autoload',
        'description' => 'Autoload based on PSR-0, PSR-4 and a custom PHP 5.2 compatibility mode.',
        'core' => '7.x',
        'php' => '5.3',
        'version' => '7.x-5.7',
        'project' => 'xautoload',
        'datestamp' => '1461353641',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-5.7',
    ),
  ),
  'themes' => 
  array (
    'adaptivetheme' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/themes/adaptivetheme/at_core/adaptivetheme.info',
      'name' => 'adaptivetheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Core',
        'description' => 'AT Core is the framework that drives the responsive layout system and provides an extensive set of tools for theme development. You do not need to enable this theme. Use the provided AT Subtheme to get started.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/at.layout.css',
          ),
        ),
        'unset_core' => 
        array (
          'modules/aggregator/aggregator.css' => 'aggregator.css',
          'modules/block/block.css' => 'block.css',
          'modules/book/book.css' => 'book.css',
          'modules/color/color.css' => 'color.css',
          'modules/comment/comment.css' => 'comment.css',
          'modules/contextual/contextual.css' => 'contextual.css',
          'modules/dashboard/dashboard.css' => 'dashboard.css',
          'modules/dblog/dblog.css' => 'dblog.css',
          'modules/field/theme/field.css' => 'field.css',
          'modules/field_ui/field_ui.css' => 'field_ui.css',
          'modules/file/file.css' => 'file.css',
          'modules/filter/filter.css' => 'filter.css',
          'modules/forum/forum.css' => 'forum.css',
          'modules/help/help.css' => 'help.css',
          'modules/image/image.admin.css' => 'image.admin.css',
          'modules/image/image.css' => 'image.css',
          'modules/locale/locale.css' => 'locale.css',
          'modules/menu/menu.css' => 'menu.css',
          'modules/node/node.css' => 'node.css',
          'modules/openid/openid.css' => 'openid.css',
          'modules/poll/poll.css' => 'poll.css',
          'modules/profile/profile.css' => 'profile.css',
          'modules/search/search.css' => 'search.css',
          'modules/shortcut/shortcut.admin.css' => 'shortcut.admin.css',
          'modules/shortcut/shortcut.css' => 'shortcut.css',
          'modules/simpletest/simpletest.css' => 'simpletest.css',
          'modules/system/system.admin.css' => 'system.admin.css',
          'modules/system/system.base.css' => 'system.base.css',
          'modules/system/system.maintenance.css' => 'system.maintenance.css',
          'modules/system/system.menus.css' => 'system.menus.css',
          'modules/system/system.messages.css' => 'system.messages.css',
          'modules/system/system.theme.css' => 'system.theme.css',
          'modules/taxonomy/taxonomy.css' => 'taxonomy.css',
          'modules/toolbar/toolbar.css' => 'toolbar.css',
          'modules/tracker/tracker.css' => 'tracker.css',
          'modules/update/update.css' => 'update.css',
          'modules/user/user.css' => 'user.css',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Main Content',
          'highlighted' => 'Highlighted',
          'content_aside' => 'Aside',
          'secondary_content' => 'Secondary',
          'tertiary_content' => 'Tertiary',
          'footer' => 'Footer',
          'leaderboard' => 'Leaderboard',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'plugins' => 
        array (
          'page_layout' => 
          array (
            'layouts' => 'layouts/core',
          ),
          'panels' => 
          array (
            'layouts' => 'layouts/panels',
          ),
        ),
        'settings' => 
        array (
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:581px) and (max-width:768px)',
          'smalltouch_landscape_layout' => 'one_col_vert',
          'smalltouch_landscape_page_unit' => '%',
          'smalltouch_landscape_sidebar_unit' => '%',
          'smalltouch_landscape_page_width' => '100',
          'smalltouch_landscape_sidebar_first' => '50',
          'smalltouch_landscape_sidebar_second' => '50',
          'smalltouch_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:580px)',
          'smalltouch_portrait_layout' => 'one_col_stack',
          'smalltouch_portrait_page_unit' => '%',
          'smalltouch_portrait_sidebar_unit' => '%',
          'smalltouch_portrait_page_width' => '100',
          'smalltouch_portrait_sidebar_first' => '100',
          'smalltouch_portrait_sidebar_second' => '100',
          'smalltouch_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20',
          'bigscreen_six_6x16' => 'six-6x16',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smalltouch_landscape_two_50' => 'two-50-stack',
          'smalltouch_landscape_two_33_66' => 'two-33-66-stack',
          'smalltouch_landscape_two_66_33' => 'two-66-33-stack',
          'smalltouch_landscape_two_brick' => 'two-brick-stack',
          'smalltouch_landscape_three_3x33' => 'three-3x33-stack',
          'smalltouch_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smalltouch_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smalltouch_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smalltouch_landscape_four_4x25' => 'four-4x25-stack',
          'smalltouch_landscape_five_5x20' => 'five-5x20-stack',
          'smalltouch_landscape_six_6x16' => 'six-6x16-stack',
          'smalltouch_landscape_three_inset_left' => 'three-inset-left-stack',
          'smalltouch_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smalltouch-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_onmediaqueryjs' => '0',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '0',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '0',
          'base_font_type' => '<none>',
          'site_name_font_type' => '<none>',
          'site_slogan_font_type' => '<none>',
          'page_title_font_type' => '<none>',
          'node_title_font_type' => '<none>',
          'comment_title_font_type' => '<none>',
          'block_title_font_type' => '<none>',
          'main_menu_font_type' => '<none>',
          'secondary_menu_font_type' => '<none>',
          'block_menu_font_type' => '<none>',
          'selectors_font_type' => '<none>',
          'base_font_size' => '<none>',
          'site_name_font_size' => '<none>',
          'site_slogan_font_size' => '<none>',
          'page_title_font_size' => '<none>',
          'node_title_font_size' => '<none>',
          'comment_title_font_size' => '<none>',
          'block_title_font_size' => '<none>',
          'main_menu_font_size' => '<none>',
          'secondary_menu_font_size' => '<none>',
          'block_menu_font_size' => '<none>',
          'content_headings_h1h4_font_type' => '<none>',
          'content_headings_h5h6_font_type' => '<none>',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'site_name_case' => 'snc-n',
          'site_name_weight' => 'snw-b',
          'site_name_alignment' => 'sna-l',
          'site_name_shadow' => 'sns-n',
          'site_slogan_case' => 'ssc-n',
          'site_slogan_weight' => 'ssw-b',
          'site_slogan_alignment' => 'ssa-l',
          'site_slogan_shadow' => 'sss-n',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-l',
          'image_alignment_teaser' => 'iat-l',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1.0, user-scalable=yes',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_ie_document_mode' => '',
          'adaptivetheme_meta_clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => '',
          'apple_touch_icon_path_m' => '',
          'apple_touch_icon_path_h' => '',
          'custom_css' => '',
        ),
        'version' => '7.x-3.4',
        'project' => 'adaptivetheme',
        'datestamp' => '1468404543',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.4',
    ),
    'adaptivetheme_admin' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/themes/adaptivetheme/at_admin/adaptivetheme_admin.info',
      'name' => 'adaptivetheme_admin',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Admin',
        'description' => 'A better admin theme for Drupal 7. Clean, calm, invisible. Includes left and right sidebars, Overlay support and all AT\'s theme setting goodies.',
        'core' => '7.x',
        'base theme' => 'adaptivetheme',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/at_admin.css',
          ),
        ),
        'regions' => 
        array (
          'content' => 'Main content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => 'px',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '180',
          'bigscreen_sidebar_second' => '180',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1330',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:581px) and (max-width:768px)',
          'smalltouch_landscape_layout' => 'one_col_vert',
          'smalltouch_landscape_page_unit' => '%',
          'smalltouch_landscape_sidebar_unit' => '%',
          'smalltouch_landscape_page_width' => '100',
          'smalltouch_landscape_sidebar_first' => '50',
          'smalltouch_landscape_sidebar_second' => '50',
          'smalltouch_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:580px)',
          'smalltouch_portrait_layout' => 'one_col_stack',
          'smalltouch_portrait_page_unit' => '%',
          'smalltouch_portrait_sidebar_unit' => '%',
          'smalltouch_portrait_page_width' => '100',
          'smalltouch_portrait_sidebar_first' => '100',
          'smalltouch_portrait_sidebar_second' => '100',
          'smalltouch_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20',
          'bigscreen_six_6x16' => 'six-6x16',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smalltouch_landscape_two_50' => 'two-50-stack',
          'smalltouch_landscape_two_33_66' => 'two-33-66-stack',
          'smalltouch_landscape_two_66_33' => 'two-66-33-stack',
          'smalltouch_landscape_two_brick' => 'two-brick-stack',
          'smalltouch_landscape_three_3x33' => 'three-3x33-stack',
          'smalltouch_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smalltouch_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smalltouch_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smalltouch_landscape_four_4x25' => 'four-4x25-stack',
          'smalltouch_landscape_five_5x20' => 'five-5x20-stack',
          'smalltouch_landscape_six_6x16' => 'six-6x16-stack',
          'smalltouch_landscape_three_inset_left' => 'three-inset-left-stack',
          'smalltouch_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '0',
          'global_default_layout' => 'smalltouch-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_onmediaqueryjs' => '0',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => '',
          'site_name_font_type' => '',
          'site_slogan_font_type' => '',
          'page_title_font_type' => '',
          'node_title_font_type' => '',
          'comment_title_font_type' => '',
          'block_title_font_type' => '',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'main_menu_font' => 'mmf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'base_font_size' => '1em',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'site_name_case' => 'snc-n',
          'site_name_weight' => 'snw-b',
          'site_name_alignment' => 'sna-l',
          'site_name_shadow' => 'sns-n',
          'site_slogan_case' => 'ssc-n',
          'site_slogan_weight' => 'ssw-b',
          'site_slogan_alignment' => 'ssa-l',
          'site_slogan_shadow' => 'sss-n',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-uc',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-l',
          'image_alignment_teaser' => 'iat-l',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '1',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '1',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1.0, user-scalable=yes',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'adaptivetheme_meta_ie_document_mode' => '',
          'adaptivetheme_meta_clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'favicon',
          3 => 'main_menu',
          4 => 'secondary_menu',
        ),
        'version' => '7.x-3.4',
        'project' => 'adaptivetheme',
        'datestamp' => '1468404543',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.4',
    ),
    'adaptivetheme_subtheme' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/themes/adaptivetheme/at_subtheme/adaptivetheme_subtheme.info',
      'name' => 'adaptivetheme_subtheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Subtheme',
        'description' => 'Copy this subtheme to get started - see the <b><a href="http://adaptivethemes.com/documentation/adaptivethemes-documentation" target="_blank" title="Adaptivethemes.com - Rocking the hardest since 2006">documentation</a></b> for guidence or the included README. Drush users can generate a new theme using the command: drush adaptivetheme. If you need help please use the <b><a href="http://drupal.org/project/issues/adaptivetheme" target="_blank">issue queue</a></b> or ask in the IRC channel: <b><a href="irc://irc.freenode.net/drupal-adaptivetheme">#drupal-adaptivetheme</a></b>.',
        'core' => '7.x',
        'base theme' => 'adaptivetheme',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/global.base.css',
            1 => 'css/global.styles.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Main Content',
          'highlighted' => 'Highlighted',
          'content_aside' => 'Aside',
          'secondary_content' => 'Secondary',
          'tertiary_content' => 'Tertiary',
          'footer' => 'Footer',
          'leaderboard' => 'Leaderboard',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'main_menu',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '1',
          'toggle_slogan' => '1',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'toggle_main_menu' => '1',
          'toggle_secondary_menu' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:581px) and (max-width:768px)',
          'smalltouch_landscape_layout' => 'one_col_vert',
          'smalltouch_landscape_page_unit' => '%',
          'smalltouch_landscape_sidebar_unit' => '%',
          'smalltouch_landscape_page_width' => '100',
          'smalltouch_landscape_sidebar_first' => '50',
          'smalltouch_landscape_sidebar_second' => '50',
          'smalltouch_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:580px)',
          'smalltouch_portrait_layout' => 'one_col_stack',
          'smalltouch_portrait_page_unit' => '%',
          'smalltouch_portrait_sidebar_unit' => '%',
          'smalltouch_portrait_page_width' => '100',
          'smalltouch_portrait_sidebar_first' => '100',
          'smalltouch_portrait_sidebar_second' => '100',
          'smalltouch_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smalltouch_landscape_two_50' => 'two-50-stack',
          'smalltouch_landscape_two_33_66' => 'two-33-66-stack',
          'smalltouch_landscape_two_66_33' => 'two-66-33-stack',
          'smalltouch_landscape_two_brick' => 'two-brick-stack',
          'smalltouch_landscape_three_3x33' => 'three-3x33-stack',
          'smalltouch_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smalltouch_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smalltouch_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smalltouch_landscape_four_4x25' => 'four-4x25-stack',
          'smalltouch_landscape_five_5x20' => 'five-5x20-stack',
          'smalltouch_landscape_six_6x16' => 'six-6x16-stack',
          'smalltouch_landscape_three_inset_left' => 'three-inset-left-stack',
          'smalltouch_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smalltouch-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '0',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '0',
          'base_font_type' => '<none>',
          'site_name_font_type' => '<none>',
          'site_slogan_font_type' => '<none>',
          'page_title_font_type' => '<none>',
          'node_title_font_type' => '<none>',
          'comment_title_font_type' => '<none>',
          'block_title_font_type' => '<none>',
          'main_menu_font_type' => '<none>',
          'secondary_menu_font_type' => '<none>',
          'block_menu_font_type' => '<none>',
          'selectors_font_type' => '<none>',
          'content_headings_h1h4_font_type' => '<none>',
          'content_headings_h5h6_font_type' => '<none>',
          'base_font_size' => '<none>',
          'site_name_font_size' => '<none>',
          'site_slogan_font_size' => '<none>',
          'page_title_font_size' => '<none>',
          'node_title_font_size' => '<none>',
          'comment_title_font_size' => '<none>',
          'block_title_font_size' => '<none>',
          'main_menu_font_size' => '<none>',
          'secondary_menu_font_size' => '<none>',
          'block_menu_font_size' => '<none>',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'site_name_case' => 'snc-n',
          'site_name_weight' => 'snw-b',
          'site_name_alignment' => 'sna-l',
          'site_name_shadow' => 'sns-n',
          'site_slogan_case' => 'ssc-n',
          'site_slogan_weight' => 'ssw-b',
          'site_slogan_alignment' => 'ssa-l',
          'site_slogan_shadow' => 'sss-n',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'user_block_user_name' => '1',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'menu_toggle_tablet_portrait' => '1',
          'menu_toggle_tablet_landscape' => '0',
          'menu_toggle_main_menu' => '1',
          'menu_toggle_secondary_menu' => '1',
          'menu_toggle_leaderboard' => '0',
          'menu_toggle_header' => '0',
          'menu_toggle_menu_bar' => '1',
          'menu_toggle_main_menu_title' => 'Main menu',
          'menu_toggle_secondary_menu_title' => 'User menu',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1.0, user-scalable=yes',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'adaptivetheme_meta_ie_document_mode' => '',
          'adaptivetheme_meta_clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'icon_path_default' => 'images/default-60x60.png',
          'apple_touch_icon_path_ipad' => 'images/ipad-standard-76x76.png',
          'apple_touch_icon_path_iphone_retina' => 'images/iphone-retina-120x120.png',
          'apple_touch_icon_path_ipad_retina' => 'images/ipad-retina-152x152.png',
          'icon_rel' => '0',
          'custom_css' => '',
        ),
        'version' => '7.x-3.4',
        'project' => 'adaptivetheme',
        'datestamp' => '1468404543',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.4',
    ),
    'adminimal' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/themes/adminimal_theme/adminimal.info',
      'name' => 'adminimal',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Adminimal',
        'description' => 'Minimalist administration theme.',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'js/jrespond.js',
          1 => 'js/adminimal_theme.js',
        ),
        'settings' => 
        array (
          'use_bootstrap_grids' => '1',
          'shortcut_module_link' => '1',
          'style_checkboxes' => '1',
          'display_icons_config' => '1',
          'rounded_buttons' => '1',
          'sticky_actions' => '0',
          'avoid_custom_font' => '0',
          'adminimal_ckeditor' => '1',
          'custom_css' => '0',
          'use_custom_media_queries' => '0',
          'media_query_mobile' => 'only screen and (max-width: 480px)',
          'media_query_tablet' => 'only screen and (min-width : 481px) and (max-width : 1024px)',
        ),
        'regions' => 
        array (
          'hidden' => 'Hidden',
          'content_before' => 'Before Content',
          'sidebar_left' => 'Sidebar Left',
          'content' => 'Content',
          'sidebar_right' => 'Sidebar Right',
          'content_after' => 'After Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'version' => '7.x-1.26',
        'project' => 'adminimal_theme',
        'datestamp' => '1558584494',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.26',
    ),
    'bancolombia_theme' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/int.development.developerportalv5.bancolombia.corp/themes/bancolombia_theme/bancolombia_theme.info',
      'name' => 'bancolombia_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'bancolombia',
        'description' => 'A sample theme designed for IBM API Connect but otherwise it is a minimal, re-colorable theme for Drupal 7 that uses HTML5 and <a href="http://drupal.org/project/adaptivetheme">Adaptivetheme 7.x-3.x</a> base theme.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'base theme' => 'connect_theme',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/overrides.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'top_menu' => 'Top menu bar',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'highlighted' => 'Highlighted',
          'content' => 'Main content',
          'content_aside' => 'Content bottom',
          'secondary_content' => 'Secondary content',
          'tertiary_content' => 'Tertiary content',
          'footer' => 'Footer',
          'collapsible' => 'Collapsible',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'three_33_top' => 'AT Three column 3x33 - top',
          'three_33_first' => 'AT Three column 3x33 - left',
          'three_33_second' => 'AT Three column 3x33 - center',
          'three_33_third' => 'AT Three column 3x33 - right',
          'three_33_bottom' => 'AT Three column 3x33 - bottom',
          'four_first' => 'AT Four column 4x25 - 1',
          'four_second' => 'AT Four column 4x25 - 2',
          'four_third' => 'AT Four column 4x25 - 3',
          'four_fourth' => 'AT Four column 4x25 - 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '0',
          'toggle_slogan' => '0',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '20',
          'bigscreen_sidebar_second' => '20',
          'bigscreen_set_max_width' => '0',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '1',
          'enable_heading_settings' => '1',
          'enable_image_settings' => '1',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => 'cfs',
          'site_name_font_type' => 'cfs',
          'site_slogan_font_type' => 'cfs',
          'page_title_font_type' => 'cfs',
          'node_title_font_type' => 'cfs',
          'comment_title_font_type' => 'cfs',
          'main_menu_font_type' => 'cfs',
          'secondary_menu_font_type' => 'cfs',
          'block_menu_font_type' => 'cfs',
          'selectors_font_type' => 'cfs',
          'block_title_font_type' => 'cfs',
          'base_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'site_name_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'site_slogan_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'main_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'page_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'node_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'comment_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'block_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'secondary_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'block_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'selectors_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'content_headings_h1h4_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'content_headings_h5h6_font' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'base_font_size' => '81.3%',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-n',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-n',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-n',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
          'content_corner_radius' => 'rc-0',
          'tabs_corner_radius' => 'rct-0',
          'box_shadows' => 'bs-n',
          'body_background' => 'bb-n',
          'menu_bullets' => 'mb-dd',
          'menu_bar_position' => 'mbp-l',
        ),
        'version' => '7.69',
        'project' => 'bancolombia_theme',
        'datestamp' => '1395577162',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'version' => '7.69',
    ),
    'banka_connect_theme' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/int.development.developerportalv5.bancolombia.corp/themes/banka_connect_theme/banka_connect_theme.info',
      'name' => 'banka_connect_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'banka_connect',
        'description' => 'A sample theme designed for IBM API Connect but otherwise it is a minimal, re-colorable theme for Drupal 7 that uses HTML5 and <a href="http://drupal.org/project/adaptivetheme">Adaptivetheme 7.x-3.x</a> base theme.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'base theme' => 'connect_theme',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/overrides.css',
            1 => 'css/font-awesome/css/all.min.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'top_menu' => 'Top menu bar',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'highlighted' => 'Highlighted',
          'content' => 'Main content',
          'content_aside' => 'Content bottom',
          'secondary_content' => 'Secondary content',
          'tertiary_content' => 'Tertiary content',
          'featured_home' => 'Featured Home',
          'products_home' => 'Products Home',
          'footer' => 'Footer',
          'collapsible' => 'Collapsible',
          'home' => 'Home Contents',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'three_33_top' => 'AT Three column 3x33 - top',
          'three_33_first' => 'AT Three column 3x33 - left',
          'three_33_second' => 'AT Three column 3x33 - center',
          'three_33_third' => 'AT Three column 3x33 - right',
          'three_33_bottom' => 'AT Three column 3x33 - bottom',
          'four_first' => 'AT Four column 4x25 - 1',
          'four_second' => 'AT Four column 4x25 - 2',
          'four_third' => 'AT Four column 4x25 - 3',
          'four_fourth' => 'AT Four column 4x25 - 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '0',
          'toggle_slogan' => '0',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '20',
          'bigscreen_sidebar_second' => '20',
          'bigscreen_set_max_width' => '0',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '1',
          'enable_heading_settings' => '1',
          'enable_image_settings' => '1',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => 'cfs',
          'site_name_font_type' => 'cfs',
          'site_slogan_font_type' => 'cfs',
          'page_title_font_type' => 'cfs',
          'node_title_font_type' => 'cfs',
          'comment_title_font_type' => 'cfs',
          'main_menu_font_type' => 'cfs',
          'secondary_menu_font_type' => 'cfs',
          'block_menu_font_type' => 'cfs',
          'selectors_font_type' => 'cfs',
          'block_title_font_type' => 'cfs',
          'base_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'site_name_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'site_slogan_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'main_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'page_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'node_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'comment_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'block_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'secondary_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'block_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'selectors_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'content_headings_h1h4_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'content_headings_h5h6_font' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'base_font_size' => '81.3%',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-n',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-n',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-n',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
          'content_corner_radius' => 'rc-0',
          'tabs_corner_radius' => 'rct-0',
          'box_shadows' => 'bs-n',
          'body_background' => 'bb-n',
          'menu_bullets' => 'mb-dd',
          'menu_bar_position' => 'mbp-l',
        ),
        'scripts' => 
        array (
          0 => '/js/jquery-2.2.4.min.js',
          1 => '/js/slick.min.js',
          2 => '/js/main.js',
        ),
        'version' => '7.69',
        'project' => 'banka_connect_theme',
        'datestamp' => '1395577162',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'version' => '7.69',
    ),
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'connect_theme' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/themes/connect_theme/connect_theme.info',
      'name' => 'connect_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM API Connect Theme',
        'description' => 'Designed for IBM API Connect but otherwise it is a minimal, re-colorable theme for Drupal 7 that uses HTML5 and <a href="http://drupal.org/project/adaptivetheme">Adaptivetheme 7.x-3.x</a> base theme.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'base theme' => 'adaptivetheme',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/html-elements.css',
            1 => 'css/forms.css',
            2 => 'css/tables.css',
            3 => 'css/page.css',
            4 => 'css/articles.css',
            5 => 'css/comments.css',
            6 => 'css/fields.css',
            7 => 'css/blocks.css',
            8 => 'css/navigation.css',
            9 => 'color/colors.css',
            10 => 'css/connect.settings.style.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/scripts.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'top_menu' => 'Top menu bar',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'highlighted' => 'Highlighted',
          'content' => 'Main content',
          'content_aside' => 'Content bottom',
          'secondary_content' => 'Secondary content',
          'tertiary_content' => 'Tertiary content',
          'footer' => 'Footer',
          'collapsible' => 'Collapsible',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'three_33_top' => 'AT Three column 3x33 - top',
          'three_33_first' => 'AT Three column 3x33 - left',
          'three_33_second' => 'AT Three column 3x33 - center',
          'three_33_third' => 'AT Three column 3x33 - right',
          'three_33_bottom' => 'AT Three column 3x33 - bottom',
          'four_first' => 'AT Four column 4x25 - 1',
          'four_second' => 'AT Four column 4x25 - 2',
          'four_third' => 'AT Four column 4x25 - 3',
          'four_fourth' => 'AT Four column 4x25 - 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '0',
          'toggle_slogan' => '0',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '20',
          'bigscreen_sidebar_second' => '20',
          'bigscreen_set_max_width' => '0',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '1',
          'enable_heading_settings' => '1',
          'enable_image_settings' => '1',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => 'cfs',
          'site_name_font_type' => 'cfs',
          'site_slogan_font_type' => 'cfs',
          'page_title_font_type' => 'cfs',
          'node_title_font_type' => 'cfs',
          'comment_title_font_type' => 'cfs',
          'main_menu_font_type' => 'cfs',
          'secondary_menu_font_type' => 'cfs',
          'block_menu_font_type' => 'cfs',
          'selectors_font_type' => 'cfs',
          'block_title_font_type' => 'cfs',
          'base_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'site_name_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'site_slogan_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'main_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'page_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'node_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'comment_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'block_title_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'secondary_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'block_menu_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'selectors_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'content_headings_h1h4_font_cfs' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'content_headings_h5h6_font' => '"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial, sans-serif',
          'base_font_size' => '81.3%',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-n',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-n',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-n',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
          'content_corner_radius' => 'rc-0',
          'tabs_corner_radius' => 'rct-0',
          'box_shadows' => 'bs-n',
          'body_background' => 'bb-n',
          'menu_bullets' => 'mb-dd',
          'menu_bar_position' => 'mbp-l',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'project' => 'connect_theme',
        'datestamp' => '1395577162',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'ibm_apim_theme' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/all/themes/ibm_apim_theme/ibm_apim_theme.info',
      'name' => 'ibm_apim_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IBM APIM',
        'description' => 'Designed for IBM API Connect but otherwise it is a minimal, re-colorable theme for Drupal 7 that uses HTML5 and <a href="http://drupal.org/project/adaptivetheme">Adaptivetheme 7.x-3.x</a> base theme.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'base theme' => 'adaptivetheme',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/html-elements.css',
            1 => 'css/forms.css',
            2 => 'css/tables.css',
            3 => 'css/page.css',
            4 => 'css/articles.css',
            5 => 'css/comments.css',
            6 => 'css/fields.css',
            7 => 'css/blocks.css',
            8 => 'css/navigation.css',
            9 => 'color/colors.css',
            10 => 'css/ibm_apim.settings.style.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/scripts.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'top_menu' => 'Top menu bar',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'highlighted' => 'Highlighted',
          'content' => 'Main content',
          'content_aside' => 'Content bottom',
          'secondary_content' => 'Secondary content',
          'tertiary_content' => 'Tertiary content',
          'footer' => 'Footer',
          'collapsible' => 'Collapsible',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'three_33_top' => 'AT Three column 3x33 - top',
          'three_33_first' => 'AT Three column 3x33 - left',
          'three_33_second' => 'AT Three column 3x33 - center',
          'three_33_third' => 'AT Three column 3x33 - right',
          'three_33_bottom' => 'AT Three column 3x33 - bottom',
          'four_first' => 'AT Four column 4x25 - 1',
          'four_second' => 'AT Four column 4x25 - 2',
          'four_third' => 'AT Four column 4x25 - 3',
          'four_fourth' => 'AT Four column 4x25 - 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '0',
          'toggle_slogan' => '0',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '20',
          'bigscreen_sidebar_second' => '20',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '1',
          'enable_heading_settings' => '1',
          'enable_image_settings' => '1',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => '',
          'site_name_font_type' => '',
          'site_slogan_font_type' => '',
          'page_title_font_type' => '',
          'node_title_font_type' => '',
          'comment_title_font_type' => '',
          'block_title_font_type' => '',
          'base_font' => 'bf-ssl',
          'site_name_font' => 'bf-ssl',
          'site_slogan_font' => 'bf-ssl',
          'main_menu_font' => 'bf-ssl',
          'page_title_font' => 'bf-ssl',
          'node_title_font' => 'bf-ssl',
          'comment_title_font' => 'bf-ssl',
          'block_title_font' => 'bf-ssl',
          'content_headings_h1h4_font' => 'bf-ssl',
          'content_headings_h5h6_font' => 'bf-ssl',
          'base_font_size' => '1em',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
          'content_corner_radius' => 'rc-0',
          'tabs_corner_radius' => 'rct-0',
          'box_shadows' => 'bs-n',
          'body_background' => 'bb-n',
          'menu_bullets' => 'mb-dd',
          'menu_bar_position' => 'mbp-l',
        ),
        'version' => '7.x-5.0.8.7-iFix-20200116-2206',
        'project' => 'ibm_apim_theme',
        'datestamp' => '1395577162',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.0.8.7-iFix-20200116-2206',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.69',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1576696221',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.69',
    ),
  ),
);
$options['installed'] = true;
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/platforms/devportal-7.x-5.0.8.7-iFix-20200116-2206/sites/int.development.developerportalv5.bancolombia.corp/local.drushrc.php');
