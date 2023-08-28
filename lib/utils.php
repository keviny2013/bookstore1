<?php
/**
 * General Functions
 * 
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 * 
 */

/**
 * Function to check whether variable is set or not.
 * @param String $var
 * @return Boolean
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 * 
 */
function _set($var) {
    return isset($var) && $var ? true : false;
}

//function isMobile() {
//    $useragent = $_SERVER['HTTP_USER_AGENT'];
//
//    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
//
//        return TRUE;
//    }
//    return FALSE;
//}

function _t($key, $default_value) {
    if (isset($_SESSION['lang'][$key])) {
        return $_SESSION['lang'][$key];
    } else {
        return $default_value;
    }
}

/**
 * Checks if variable is set or not. if
 * variable is not set, it will reutnr second arc
 * @param String $var
 * @param String $var
 * @return String $var
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 * 
 */
function _e(&$s, $a = null) {
    return !empty($s) ? $s : $a;
}

/**
 * function to escape string
 * 
 * @param String $string
 * @return String escaped string
 * @author Denish Faldu 
 * @version 1.0
 * 
 */
function _escape($string) {
//    $string = stripslashes($string);
//    return mysql_real_escape_string(trim($string));
    $string = stripslashes($string);
    $db = Db::__d();
    return mysqli_real_escape_string($db->_link, trim($string));
}

/**
 * Wrapper function for db insert query
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 */
function qi($table, $fields, $operation = 'INSERT') {
    $db = Db::__d();
    return $db->insert_query($table, $fields, $operation);
}

function qi_bulk($table,$rows){
	$db = Db::__d();
	$fields = implode(",",array_keys($rows[0]));
	$query = "INSERT INTO {$table}({$fields}) values ";
	$values = array();
	foreach($rows as $ef){
		$ef = _escapeArray($ef);
		$values[] = "'" . implode("','",$ef) . "'";
	}
	$values = "(" . implode("),(",$values ) . ")";
	$query .= $values . " ;" ;
	q($query);
}


function qd($table, $condition) {
    $db = Db::__d();
    return $db->delete_query($table, $condition);
}

function q($query) {
    $db = Db::__d();
    return $db->format_data($db->query($query));
}

function qs($query) {
    $result = q($query);
    return $result[0];
}

/**
 * Wrapper function for db update query
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 */
function qu($table, $fields, $condition) {
    $db = Db::__d();
    return $db->update_query($table, $fields, $condition);
}

/**
 * Return date format that mysql likes YYYY-MM-DD H:I:S
 * 
 * @param String $timestamp optional unixtimestamp
 * @return String $date
 * 
 * @author Denish Faldu 
 * @version 1.0
 * 
 */
function _mysqlDate($timestamp = 0) {
    $timestamp = $timestamp ? $timestamp : time();
    return date('Y-m-d H:i:s');
}

function GetdataFromdb($array) {
    $counter = 0;
    for ($i = 0, $e = count($array); $i < $e; $i++) {
        if (!empty($array[$i])) {
            $counter += 1;
        }
    }
    return $counter;
}

function _getInstance($url) {
    $arg = explode("/", $url);
    
    switch ($arg[0]) {
        case 'admin':
            _cg('url', _e($arg[1], "login"));
            _cg("url_instance", $arg[0]);
            _cg("instance", "admin");
            break;
        case 'subuser':
            _cg('url', _e($arg[1], "login"));
            _cg("url_instance", $arg[0]);
            _cg("instance", "subuser");
            break; 
        case 'emailvalidator':
            _cg('url', _e($arg[1], "login"));
            _cg("url_instance", $arg[0]);
            _cg("instance", "emailvalidator");
            break;        
        default:
            if ($arg[0] != '') {
                $url_d = $arg[0];
            } else {
                $url_d = 'login';
            }
            _cg('url', $url_d);
            _cg("url_instance", '');
            _cg("instance", "admin");

            if (isset($arg[1])) {
                array_shift($arg);
                _cg("url_vars", $arg);
            }
    }
}

/**
 *  Wrapper function for application level
 *  global variable
 * 
 *  set/get key/value
 * 
 *  @param String $key key
 *  @param $value value
 * 
 *  @return Array 
 * 
 */
function _cg($key, $value = null) {
    if (is_null($value)) {
        return Config::$_vars[$key];
    } else {
        Config::$_vars[$key] = $value;
    }
}

/**
 *  Wrapper function for application level
 *  global variable
 * 
 *  set/get key/value
 * 
 *  @param String $key key
 *  @param $value value
 * 
 *  @return Array 
 * 
 */
function _cgd($key, $value = null) {

    if (is_null($value)) {

        return Config::$_vars[$key];
    } else {
        Config::$_vars[$key] = $value;
    }
}

function lr($url) {
    return _U . $url;
}

function l($url) {
    print lr($url);
}

function lr_e($url) {
    return _U_EMAIL_VALIDATOR . $url;
}

function l_e($url) {
    print lr_e($url);
}

function lr_su($url) {
    return _U_SUBUSER . $url;
}

function l_s($url) {
    print lr_su($url);
}

function lr_admin($url) {
    return _U_ADMIN . $url;
}

function l_admin($url) {
    print lr_admin($url);
}

function d($arr, $hideStyle = "block") {
    if (is_array($arr) || is_object($arr)) {
        print "<pre style='display:{$hideStyle}'>" . "...";
        print_r($arr);
        print "</pre>";
    } else {
        print "<div class='debug' style='display:{$hideStyle}'>Debug:<br>$arr</div>";
    }
}

function _R($url) {
    header("Location:{$url}");
    exit;
}

function _auth_email_url($pages, $return_page) {

    if (!$_SESSION['tenant'] && in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}
function _auth_url($pages, $return_page) {

    if (!$_SESSION['tenant'] && in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}
function _sub_user_auth_url($pages, $return_page) {

    if (!$_SESSION['sub_user'] && in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}
function _admin_auth_url($pages, $return_page) {
    
    if (!isset($_SESSION['admin']) && in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}

function _level_auth_url($pages, $return_page) {
    if (!in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}

function back_trace() {
    $array = debug_backtrace();
    $output = 'Execution Backtrace:<br><ul>';
    foreach ($array as $debug_data) {
        $output .= "<li><b> " . $debug_data['file'] . "</b> [ Line : <b>" . $debug_data['line'] . "</b> ] <br></li>";
    }
    $output .= '</ul>';
    d($output);
}

function random_string() {
    return date("ymd") . mt_rand(1, 1000) . mt_rand(99, 99999);
}

//function _escapeArray($array) {
//    $array = array_map('mysqli_real_escape_string', $array);
//    return array_map('trim', $array);
//}

function _escapeArray($array) {
    $array = array_map('_escape', $array);
    return array_map('trim', $array);
}

function _bindArray($array, $map) {
    $return = array();
    foreach ($map as $form_field => $db_field) {
        $return[$db_field] = $array[$form_field];
    }
    return $return;
}

function _normalDate($date) {
    return date("d-M-Y H:i a", strtotime($date));
}

function json_die($status = true, $array = array()) {
    $response = array();
    $response['status'] = $status;
    $response['data'] = $array;
    die(json_encode($response));
}

function _errors_on() {
    ini_set("display_errors", "on");
    error_reporting(E_ALL);
}

function _errors_off() {
    ini_set("display_errors", "off");
    error_reporting(0);
}

function clearNumber($number) {
    return str_replace(array("-", "+", "(", ")", " ", "."), array("", "", "", "", "", ""), $number);
}

function lastTenDigit($number) {
    return substr($number, -10);
}

function formatCellDash($data) {
    $data = clearNumber($data);

    return $data ? "(" . substr($data, 0, 3) . ") " . substr($data, 3, 3) . "-" . substr($data, 6) : "--";
}

function formatCell($data) {
    if (preg_match('/^\+\d(\d{3})(\d{3})(\d{4})$/', $data, $matches)) {
        $result = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
        return $result;
    } else {
        return $data;
    }
}

function formatUSCell($data){
    $data = str_replace(array("-", "(", ")", " ", "."), "", $data);
    $prefix = substr($data, 0, -10);
    $postfix = substr($data, -10);
    $postfix = "(" . substr($postfix, 0, 3) . ") " . substr($postfix, 3, 3) . "-" . substr($postfix, 6);
    if(empty($prefix)){
        return $postfix;
    }else{
        return $prefix. " ". $postfix;        
    }
}

function last10Char($str){
    $str_new =  str_replace(array("+","(",")","<",">"," ","-","."),"",$str);
    return substr($str_new,-10);
    
}
/**
 * Whether its a local machine or host
 */
function _isLocalMachine() {
    return IS_DEV_ENV == 'true' ? true : false; //$_SERVER['HTTP_HOST'] == 'localhost' ? true : false;
}

/**
 * Custom Mail function.
 *    
 * Uses swift mail library and sends mail
 * 
 * @param type $to
 * @param type $subject
 * @param type $content
 * @param type $extra
 * 
 * @author  Denish Faldu <denish.faldu226@gmail.com>
 * @since November 28, 2013
 */
function _mail($to, $subject, $content) {

    if (_isLocalMachine()) {
        //return TRUE;
    }
    # unfortunately, need to use require within function.
    # swift lib overrides the autoloader 
    # and that stops native app classes being resolved and included

    require_once _PATH . 'lib/mail/swift/lib/swift_required.php';

    if (_isLocalMachine()) {
        $to = 'denish.faldu226@gmail.com';
    } else {
        $bcc = 'denish.faldu226@gmail.com';
    }

    $transport = Swift_SmtpTransport::newInstance('smtp.postmarkapp.com', 587, "tls")
            ->setUsername(SMTP_EMAIL_USER_NAME) // Your Gmail Username
            ->setPassword(SMTP_EMAIL_USER_PASSWORD); // Your Gmail Password


    $mailer = Swift_Mailer::newInstance($transport);

    if (!is_array($to)) {
        $to = array($to);
    }

    $message = Swift_Message::newInstance($subject)
            ->setFrom(array(MAIL_FROM_EMAIL => MAIL_FROM_NAME))
            ->setTo($to)
            ->setBcc($bcc)
            ->setBody($content, 'text/html', 'utf-8')
            ->addPart(strip_tags(nl2br($content)), 'text/plain');


    $result = $mailer->send($message);

    return $result;
}

function _cprint($key, $value, $print, $doPrint = true) {

    if ($key == $value) {
        if ($doPrint) {
            print $print;
        } else {
            return $print;
        }
    }
}

/**
 * $ 275.00 => 275.00
 * @param type $subject
 * @return type
 */
function clearDecimal($subject) {
    $search = array(" "
        , "$", "_", "-", "(",
        ")", "%");
    $replace = array("", "", "", "", "", "", "");
    return trim(str_replace($search, $replace, $subject));
}

function clearString($subject) {
    $search = array(" ", "$", "_", "-", "(", ")", "%", "'", '"', "/", "\"", "&", "^", "@", "#", "$", "!", "`", "~", ",");
    $replace = array
        ("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ",");
    return trim(str_replace($search, $replace, $subject));
}

function writeLog($log, $filePath = '') {
    if ($filePath == '') {
        $filePath = _PATH . "error_log/log_" . date("Y-m-d") . ".txt";
    }
    $log = "Time: " . date("h:i A") . $log . "\n\n----------------------------------------------------\n\n";
    file_put_contents($filePath, $log, FILE_APPEND);
}

function getTimetoDefaultTime($timeZone, $time = '') {
    $default_timezone = date_default_timezone_get();
    date_default_timezone_set($timeZone);

    $current_time = new Datetime($time);
    $ny_time = new DateTimeZone($default_timezone);
    $current_time->setTimezone($ny_time);
    $current_time = new DateTime($current_time->format("Y-m-d H:i:s"));

    date_default_timezone_set($default_timezone);
    return $current_time;
}

function getTimeforSMS($timezone, $alert_schedule_from, $alert_schedule_interval, $checkin_time, $checkout_time) {
    $sms_datetime = "";
    if ($alert_schedule_from == "BEFORE_CHECKIN") {
        $sms_datetime = date("Y-m-d H:i:s", strtotime("{$checkin_time} -{$alert_schedule_interval} days"));
    } elseif ($alert_schedule_from == "AFTER_CHECKIN") {
        $sms_datetime = date("Y-m-d H:i:s", strtotime("{$checkin_time} +{$alert_schedule_interval} days"));
    } elseif ($alert_schedule_from == "BEFORE_CHECKOUT") {
        $sms_datetime = date("Y-m-d H:i:s", strtotime("{$checkout_time} -{$alert_schedule_interval} days"));
    } elseif ($alert_schedule_from == "AFTER_CHECKOUT") {
        $sms_datetime = date("Y-m-d H:i:s", strtotime("{$checkout_time} +{$alert_schedule_interval} days"));
    }
    $time_tz = getTimetoDefaultTime($timezone, $sms_datetime);
    return $time_tz->format("Y-m-d H:i:s");
}

function _clear_quotes($string) {
    $string = strip_tags($string);
    return str_replace(array("&", "+", "'", '"'), array("", "", "",""), $string);

}

function addLogs($tenant_id,$logs){
    $logs_data = array();
    $logs_data['page'] = getPage();
    $logs_data['ip'] = getRealIpAddr();
    $logs_data['tenant_id'] = $tenant_id;
    $logs_data['log'] = $logs;
    qi("logs", _escapeArray($logs_data));
}

function getPage() {
    $page_str = substr($_SERVER["REQUEST_URI"], (stripos($_SERVER["REQUEST_URI"], "/admin/") + 7));
    $last_pos = stripos($page_str, "?");
    if ($last_pos) {
        return substr($page_str, 0, $last_pos);
    } else {
        return substr($page_str, 0);
    }
}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function RandomStringGenerator($n) {
    $generated_string = "";
    $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $len = strlen($domain);
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, $len - 1);
        $generated_string = $generated_string . $domain[$index];
    }
    return $generated_string;
}

function _sendWhatsAppMsg($send_to, $send_msg){
    
    if (_isLocalMachine()) {
        $send_to = '+919737405760';
    }
    
    $data = [
        'phone' => $send_to, // Receivers phone
        'body' => $send_msg, // Message
    ];
    $json = json_encode($data); // Encode data to JSON
    
    // URL for request POST /message
    $url = 'https://eu205.chat-api.com/'.WHATSAPP_INSTANCE.'/message?token='.WHATSAPP_TOKEN;
    
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    // Send a request
    
    $result = file_get_contents($url, false, $options);
    
    return $result;
}

function weekOfYear($date) {
    $weekOfYear = intval(date("W", $date));
    if (date('n', $date) == "1" && $weekOfYear > 51) {
        // It's the last week of the previos year.
        return 0;
    }
    else if (date('n', $date) == "12" && $weekOfYear == 1) {
        // It's the first week of the next year.
        return 53;
    }
    else {
        // It's a "normal" week.
        return $weekOfYear;
    }
}