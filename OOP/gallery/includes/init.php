<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 28.7.2016
 * Time: 12:34
 */


//win DS = "\", Mac/Linux DS = "/"
defined('DS') ? null :define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT','C:'.DS.'AppServ'.DS.'www'.DS.'wwwkurs'.DS.'OOP'.DS.'gallery');

defined('LIB_PATH') ? null : define('LIB_PATH',SITE_ROOT.DS.'includes');

require LIB_PATH.DS.'config.php';
require LIB_PATH.DS.'functions.php';
require LIB_PATH.DS.'Session.php';
require LIB_PATH.DS.'users.php';
require LIB_PATH.DS.'photographs.php';
require LIB_PATH.DS.'db.php';
