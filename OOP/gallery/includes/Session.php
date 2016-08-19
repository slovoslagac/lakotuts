<?php

/**
 * Created by PhpStorm.
 * User: petar
 * Date: 27.7.2016
 * Time: 16:09
 */
class Session
{
    private $logged_in;
    public $user_id;
    public $message;
    public $firstname;



    public function __construct()
    {
        session_start();
        $this->check_message();
        $this->check_login();

    }

    public function is_logged_in() {
        return $this->logged_in;
    }

    public function login($user){
        if($user){
            $this->user_id = $_SESSION["user_id"] = $user ->id;
            $this->logged_in = true;
        }
    }

    public function set_firstname ($usr) {
        $this->firstname = $usr;
    }

    public function get_firstname() {
        return $this->firstname;
    }

    public function logout() {
        unset($_SESSION["user_id"]);
        unset($this->user_id);
        $this->logged_in = false;
    }

    public function message($msg="") {
        if(empty($msg)){
            return $this->message;
        } else {
            $_SESSION["message"] = $msg;
        }
    }

    private function check_login()
    {
        if (isset($_SESSION["user_id"])) {
            $this->user_id = $_SESSION["user_id"];
            $this->logged_in = true;
        } else {
            unset($user_id);
            $this->logged_in = false;
        }
    }

    private function check_message() {
        if(isset($_SESSION["message"])){
            $this->message = $_SESSION["message"];
            unset ($_SESSION["message"]);
        } else {
            $this->message = "";
        }
    }
}

$session = new Session();
$message = $session->message();