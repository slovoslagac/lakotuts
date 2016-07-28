<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 27.7.2016
 * Time: 10:49
 */


function redirect_to($location = null) {
    if($location != null) {
        header ("location:{$location}");
        exit;
    }
}

function output_message($message = ""){
    if(!empty($message)) {
        return "<p class='message'>{$message}</p>";
    } else {
        return "";
    }
}

function include_layout_template($template = ""){
    include SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template;
}


function log_action($action,$message){
    $log_file = SITE_ROOT.DS.'log'.DS.'log.txt';
    $new_file = file_exists($log_file) ? true : false;
    if($handle = fopen($log_file, 'a')) {
        $timestamp = strftime("%d.%m.%Y %H:%M:%S", time());
        $content = "{$timestamp} | {$action} : {$message}\n";
        fwrite($handle, $content);
        fclose($handle);
        if($new_file){chmod($log_file, 0755);}
    } else {
        echo "Nije uspelo zapisivanje u log";
    }
}

?>