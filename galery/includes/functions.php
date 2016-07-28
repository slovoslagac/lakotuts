<?php

function redirect_to($location = null) {
	if($location != null){
		header ("LocationL: {$location}");
	}
}

function output_messages($message = "") {
	if (!empty($message)){
		return "<p class ='message'>{$message}</p>";
	} else {
		return "";
	}
}




?>