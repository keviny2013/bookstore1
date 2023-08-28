<?php

class helper {

    public function __construct() {
        
    }
    public static function getRefId($length = 10){
        
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        $ref_id = $randomString;

        $qry = "SELECT id FROM sms_queue WHERE ref_id ='{$ref_id}'";
        $rows = qs($qry);

        if(isset($rows) && count($rows) > 0){
            getRefId();
        }else{
            return $ref_id;
        }
    }
    public static function _tenantId() {
        return $_SESSION['admin']['id'];
    }
    public static function _subUserId() {
        return $_SESSION['sub_user']['id'];
    }
    public static function _adminId() {
        return $_SESSION['admin']['id'];
    }

    public static function _tenantDataById($t_id) {
        return qs("select * from tenants where id='{$t_id}'");
    }
    public static function _getAnyMailFinderKey($tenant_id) {
        $res = qs("select amf_key from tenants where id='{$tenant_id}'");
        return $res['amf_key']; 
    }

    public static function _subuserDataById($s_id) {
        return qs("select * from sub_users where id='{$s_id}'");
    }

    public static function _customerData() {
        return q("select * from customers where tenant_id=" . helper::_tenantId()." ORDER BY name ASC");
    }
    public static function _customerSubUserData() {
        return q("select * from customers where sub_user_id=" . helper::_subUserId()." ORDER BY name ASC");
    }

    public function loadTemplate(){
        return q("select * from sms_template where tenant_id=" . helper::_tenantId()." ORDER BY name ASC");
    }
    public function loadSubUserTemplate(){
        return q("select * from sms_template where sub_user_id=" . helper::_subUserId()." ORDER BY name ASC");
    }
    public function loadPlans(){
        return q("select * from plan where 1 ORDER BY ord ASC");
    }
    
    public function isCreditAvail($tenant_id,$chinese_flag=false){
        
        $row = qs("SELECT remaining_credits FROM credits where tenant_id='{$tenant_id}' ORDER BY id DESC");
        
        if($chinese_flag){
            if($row['remaining_credits']>1){
                return true;
            }else{
                return false;
            }
        }else{
            if($row['remaining_credits']>0){
                return true;
            }else{
                return false;
            }    
        }

        
    }

    public function isSubUserCreditAvail($sid,$chinese_flag=false){
            
        $row = qs("SELECT remaining_credits FROM credits where sub_user_id='{$sid}' ORDER BY id DESC");
        
        if($chinese_flag){
            if($row['remaining_credits']>1){
                return true;
            }else{
                return false;
            }
        }else{
            if($row['remaining_credits']>0){
                return true;
            }else{
                return false;
            }    
        }

    }

    public function getTotalCredit($tenant_id){
        $qry = "SELECT remaining_credits FROM credits where tenant_id='{$tenant_id}' ORDER BY id DESC";
        $row = qs($qry);
        
        if($row['remaining_credits']>0){
            return $row['remaining_credits'];
        } else {
            return "0";
        }
    }

    public function getSubUserTotalCredit($sid){
        $qry = "SELECT remaining_credits FROM credits where sub_user_id='{$sid}' ORDER BY id DESC";
        $row = qs($qry);
        
        if($row['remaining_credits']>0){
            return $row['remaining_credits'];
        } else {
            return "0";
        }
    }

    public static function _groupData() {
        return q("select * from groups where tenant_id=" . helper::_tenantId()." ORDER BY group_name ASC");
    }
    public static function _groupSubUserData() {
        return q("select * from groups where sub_user_id=" . helper::_subUserId()." ORDER BY group_name ASC");
    }

    public static function _getCustomerDataById($id) {
        return qs("select * from customers where tenant_id=" . helper::_tenantId() . " and id='{$id}'");
    }

    public static function _getCronCustomerDataById($id,$tid) {
        return qs("select * from customers where tenant_id=" . $tid . " and id='{$id}'");
    }
    public static function _getCronCustomerSubUserDataById($id,$sid) {
        return qs("select * from customers where sub_user_id=" . $sid . " and id='{$id}'");
    }

    public static function _getEventStartDate($id) {
        return qs("select * from events where tenant_id=" . helper::_tenantId() . " and id='{$id}'");
    }

    public static function _getGroupMessageCustomer($message_id) {
        $customer = q("select * from group_text_customers where tenant_id=" . helper::_tenantId() . " and group_text_id='{$message_id}'");
        foreach ($customer as $each_customer) {
            $customer_data[] = helper::_getCustomerDataById($each_customer['customer_id']);
        }
        return $customer_data;
    }

    public static function _getEventByCustomerId($cus_id) {
        return qs("select * from events where customer_id='{$cus_id}'");
    }

    public static function _isCalendarExist($calendar_id) {
        return qs("select * from google_calendar_summary where calendar_id='{$calendar_id}' and tenant_id=" . helper::_tenantId());
    }

    public static function _getCalendar() {
        return q("select * from google_calendar_summary where tenant_id=" . helper::_tenantId());
    }

    public static function _getCalendarDataById($id) {
        return qs("select * from google_calendar_summary where id='{$id}' and tenant_id=" . helper::_tenantId());
    }
    public static function _getCustomerDataByGroupId($group_id) {
        return q("select * from customers where tenant_id=" . helper::_tenantId() . " and FIND_IN_SET({$group_id},group_id)");
    }
    public static function _getCustomerDataBySubUserGroupId($group_id) {
        return q("select * from customers where sub_user_id=" . helper::_subUserId() . " and FIND_IN_SET({$group_id},group_id)");
    }
    public static function _getCronCustomerDataByGroupId($group_id,$tid) {
        return q("select * from customers where tenant_id=" . $tid . " and FIND_IN_SET({$group_id},group_id)");
    }
    public static function _getSchedularEventByEventId($event_id) {
        return q("select * from scheduler_events where event_id='{$event_id}' and tenant_id=" . helper::_tenantId());
    }

    public static function _getResponseByEventId($event_id) {
        return qs("select * from text_responses where event_id='{$event_id}'");
    }

    public static function numhash($n) {
        return (((0x0000FFFF & $n) << 16) + ((0xFFFF0000 & $n) >> 16));
    }

    public static function customerEmailRemindar($customer) {
        return "<option data-customer='{$customer['name']}' value='{$customer['id']}'>" . $customer['name'] . " " . "(" . $customer['email'] . ")" . "</option>";
    }

    public static function SMSConfirm($customer_id) {
        $customer_data = qs("select * from  customers where id='{$customer_id}' and tenant_id=" . helper::_tenantId());
        $mobile = clearNumber($customer_data['mobile']);
        return qs("select * from text_responses where number='{$mobile}' order by id desc");
    }

    public static function planStartEndDate($tenant_id) {

        $plan = array();

        $tenant_data = qs("select * from credit_card_details where tenant_id='{$tenant_id}'");

        $subscription_date = date("d", strtotime($tenant_data['subscription_date']));
        $subscription_month = date("m", strtotime($tenant_data['subscription_date']));

        $current_month = date("m");
        $current_year = date("Y");

        if ($subscription_month == $current_month) {
            $subscrip_date = strtotime($tenant_data['subscription_date']);
            $expire_date = date("M d, Y", strtotime("+1 month", $subscrip_date));
        } else if ($subscription_month == '12') {
            $next_year = date('Y', strtotime('+1 year'));
            $expire_date = "Jan " . $subscription_date . ", " . $next_year;
        } else {
            $subscrip_date = $current_month . "/" . $subscription_date . "/" . $current_year;
            $expire_date = date("M d, Y", strtotime($subscrip_date));
        }

        $str_time_expire_date = strtotime($expire_date);
        $plan_month_start_date = date("Y-m-d", strtotime("-1 month", $str_time_expire_date));
        $plan_month_end_date = date("Y-m-d", strtotime($expire_date));

        $plan['start_date'] = $plan_month_start_date;
        $plan['end_date'] = $plan_month_end_date;

        return $plan;
    }

    public static function getCreditCardData($id) {
        return qs("select * from credit_card_details where tenant_id='{$id}'");
    }

    public static function converDateintoTimezone($time = "", $toTz = '') {
        $date = new DateTime($time, new DateTimeZone(TIMEZONE));
        $date->setTimezone(new DateTimeZone($toTz));
        $time = $date->format('Y-m-d H:i:s');
        return $time;
    }

}

?>