<?php

require_once dirname(__FILE__) . '/../app/Sample1_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Sample1_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Sample1_Controller::main('Sample1_Controller', 'index');

