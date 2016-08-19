<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 27.7.2016
 * Time: 12:23
 */

require_once dirname(__FILE__) . '\php-activerecord\ActiveRecord.php';
require_once dirname(__FILE__) . '\config.php';


ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('.');
    $cfg->set_connections(array(
        'development' => 'mysql://' . db_user . ':' . db_pass . '@' . db_server . '/' . db_name . ''));
});