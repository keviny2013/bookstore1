<?php

/**
 * Config Class
 * 
 * Class to handle config operations
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 * 
 */
class Admin {

    /**
     * Mechanism to access variable globally
     * @var Array $_vars
     */
    // public static $_vars = array();
    # constructor

    public function __construct() {
        
    }

    public static function load_admin($id) {
        return qs("SELECT * FROM users where id='{$id}'");
    }

}

?>