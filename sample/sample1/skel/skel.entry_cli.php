<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Sample1
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Sample1_Controller.php';

ini_set('max_execution_time', 0);

Sample1_Controller::main_CLI('Sample1_Controller', '{$action_name}');
