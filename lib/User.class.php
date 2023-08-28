<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {

    /**
     * Mechanism to access variable globally
     * @var Array $_vars
     */
    // public static $_vars = array();
    # constructor

    public function __construct() {
        
    }

    /**
     *  Kill the session
     */
    public static function killSession() {
        session_destroy();
        unset($_SESSION);
    }

    public static function generate_password($length = 12, $special_chars = true) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ($special_chars)
            $chars .= '!@#$%^&*()';
        $password = '';
        for ($i = 0; $i < $length; $i++)
            $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        return $password;
    }

}
