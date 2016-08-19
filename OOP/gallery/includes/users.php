<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 27.7.2016
 * Time: 12:23
 */

require_once dirname(__FILE__) . '\php-activerecord\ActiveRecord.php';



class UserSQL extends ActiveRecord\Model
{
    static $table = "users";

    public static function insert_user($username, $password, $first_name, $last_name)
    {
        if ($username != null && $password != null && $first_name != null && $last_name != null) {
            if (!self::find_by_username($username)) {
                $user = new self;
                $user->username = $username;
                $user->password = $password;
                $user->first_name = $first_name;
                $user->last_name = $last_name;
                $user->save();
                echo "Korisnik je sačuvan";
            } else {
                echo "Korisnik već postoji!";
            }

        } else {
            echo "Snimanje nije uspelo";
        }

    }


}


;