<?php
    $settings = array(


        ###### ADMIN ######
        'admin' => array(
            'max_upload_size' => '5242880',
            'upload_blacklist' => '/\.(?:php[34567s]?|phtml|pht)$/i',
        ),
        ########


        ###### SYMPHONY ######
        'symphony' => array(
            'admin-path' => 'symphony',
            'pagination_maximum_rows' => '20',
            'association_maximum_rows' => '5',
            'lang' => 'en',
            'pages_table_nest_children' => 'no',
            'version' => VERSION,
            'cookie_prefix' => 'sym-',
            'session_gc_divisor' => '10',
            'session_strict_domain' => 'yes',
            'cell_truncation_length' => '75',
            'enable_xsrf' => 'yes',
            'error_reporting_all' => 'no',
        ),
        ########


        ###### LOG ######
        'log' => array(
            'archive' => '1',
            'maxsize' => '10485760',
            'filter' => E_ALL ^ E_DEPRECATED,
        ),
        ########


        ###### DATABASE ######
        'database' => array(
            'host' => 'localhost',
            'port' => '3306',
            'user' => null,
            'password' => null,
            'db' => null,
            'driver' => 'mysql',
            'charset' => 'utf8mb4',
            'collate' => 'utf8mb4_unicode_ci',
            'engine' => 'InnoDB',
            'tbl_prefix' => 'sym_',
            'query_caching' => 'on',
            'query_logging' => 'on'
        ),
        ########


        ###### PUBLIC ######
        'public' => array(
            'display_event_xml_in_source' => 'no',
        ),
        ########


        ###### GENERAL ######
        'general' => array(
            'sitename' => 'Symphony CMS',
            'useragent' => 'Symphony/' . VERSION,
        ),
        ########


        ###### FILE ######
        'file' => array(
            'write_mode' => '0644',
        ),
        ########


        ###### DIRECTORY ######
        'directory' => array(
            'write_mode' => '0755',
        ),
        ########


        ###### REGION ######
        'region' => array(
            'time_format' => 'g:i a',
            'date_format' => 'm/d/Y',
            'datetime_separator' => ' ',
            'timezone' => null
        ),
        ########


        ###### CACHE ######
        'cache_driver' => array(
            'default' => 'database',
        ),
        ########
    );
