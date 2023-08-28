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
class Tenant {

    /**
     * Mechanism to access variable globally
     * @var Array $_vars
     */
    // public static $_vars = array();
    # constructor

    public function __construct() {
        
    }

    public static function load_tenant($id) {
        return qs("SELECT * FROM tenants where id='{$id}'");
    }
    public static function load_subuser($id) {
        return qs("SELECT * FROM sub_users where id='{$id}'");
    }

    public static function update_last_login($tenant_id = null) {
        if (!$tenant_id) {
            return;
        }
        # For CloudFlare
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        qu("tenants", array('last_login_time' => _mysqlDate(), "last_login_ip" => $_SERVER['REMOTE_ADDR']), " id = '{$tenant_id}'  ");
    }

    public static function update_sub_user_last_login($sub_user_id = null) {
        if (!$sub_user_id) {
            return;
        }
        # For CloudFlare
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        qu("sub_users", array('last_login_time' => _mysqlDate(), "last_login_ip" => $_SERVER['REMOTE_ADDR']), " id = '{$sub_user_id}'  ");
    }


}

?>