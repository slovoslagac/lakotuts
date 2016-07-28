<?php
require_once dirname(__FILE__).'\php-activerecord\ActiveRecord.php';
require_once dirname(__FILE__).'\config.php';

class Usersql extends ActiveRecord\Model
{
	static $table = "users";
	
	public static function insert_user ($username,$password,$first_name,$last_name){
		if($username != null && $password != null && $first_name != null && $last_name != null) {
			if(!self::find_by_username($username)){
				
				$user = new self;
				$user->username = $username;
				$user->password = $password;
				$user->first_name = $first_name;
				$user->last_name = $last_name;
				$user->save();
				echo "Korisnik uspravno unesen";
			} else echo "Korisnik vec postoji";
		}	else {
				echo "Korisnik not saved";
			}
	}
	
}


ActiveRecord\Config::initialize(function($cfg)
	{
	    $cfg->set_model_directory('.');
	    $cfg->set_connections(array(
		       'development' => 'mysql://'.DB_USER.':'.DB_PASS.'@'.DB_SERVER.'/'.DB_NAME.''));
 });


?>