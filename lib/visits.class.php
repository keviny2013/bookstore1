<?php

class visits {

    public static function pingSlack($key, $data = array(),$totalCustomers="") {
        $user_agent = new user_agent();
        $user_agent = $user_agent->parse_user_agent($_SERVER['HTTP_USER_AGENT']);
        $user_agent_message = "";
        if (isset($user_agent['platform'])) {
            $user_agent_message .= "*PLATFORM:*\t`" . $user_agent['platform'] . "`\n";
            $user_agent_message .= "*BROWSER:*\t`" . $user_agent['browser'] . "`\n";
        }
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        $location = $_SERVER["HTTP_CF_IPCOUNTRY"];

        if ($ip) {
            $user_agent_message .= "*IP:*\t`" . $ip . "`\n";
        }
        if ($location) {
            $user_agent_message .= "*LOCATION:*\t`" . $location . "`\n";
        }
        /*switch ($key) {
            case "Home":
                $message .= $user_agent_message . ">\n*Yanto: User has subscribed to Yanto Email Updates.*\n" . $data;
                break;
            case "Listen":
                $message .= $user_agent_message . ">\n*Yanto: Podcast Subscription Received.*\n" . $data;
                break;
            case "Notify":
                $message .= $user_agent_message . ">\n*Yanto: Notify for membership list.*\n" . $data;
                break;
            case "MEMBERSHIP_SIGNUP":
                $message .= "> *Yanto: Membership Signup Received.* \n" . $data;
                break;
            case "MASTERMIND":
                $message .= "> *Yanto: MasterMind.* \n" . $data;
                break;
            case "MEMBERSHIP_SIGNUP_NOTIFY":
                $message .= "> *Yanto: Waitlist For Membership Received.* \n" . $data;
                //$message .= "\n" . $user_agent_message;
                break;
            default:
                break;
        }*/
        switch ($key) {
            case "QUICK_SMS":
                $message .= "> *Yanto: Quick sms* \n" . $data;
                $message .= "\n". $user_agent_message;
                break;
            case "GROUP_TEXT":
                $message .= "> *Yanto: Group Text* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break; 
            case "LOGIN":
                $message .= "> *Yanto: Login* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break; 
            case "LOGOUT":
                $message .= "> *Yanto: Logout* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break;
            case "SIGNUP":
                $message .= "> *Yanto: Signup* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break;
            case "SUB_LOGIN":
                $message .= "> *Yanto: Subuser Login* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break; 
            case "SUB_LOGOUT":
                $message .= "> *Yanto: Subuser Logout* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break;    
            case "SUB_SIGNUP":
                $message .= "> *Yanto: Subuser Signup* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break;
            case "SUB_QUICK_SMS":
                $message .= "> *Yanto: Subuser Quick sms* \n" . $data;
                $message .= "\n". $user_agent_message;
                break;
            case "SUB_GROUP_TEXT":
                $message .= "> *Yanto: Subuser Group Text* \n" . $data;
                $message .= "\n" .$user_agent_message;
                break;                        
            default:
                break;
        }

        
        $data = "payload=" . json_encode(array(
                    "text" => $message
        ));

        if (_isLocalMachine()) {
            
            if($key=="LOGIN" || $key=="LOGOUT" || $key=="SIGNUP" || $key=="SUB_LOGIN" || $key=="SUB_LOGOUT" || $key=="SUB_SIGNUP"){
                //$url = "https://hooks.slack.com/services/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";
            }else{
                if($totalCustomers <10){
                    $url = "https://hooks.slack.com/services/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";
                }else{
                    $url = "https://hooks.slack.com/services/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";    
                }
                    
            }
            

        } else {
            
            if($key=="LOGIN" || $key=="LOGOUT" || $key=="SIGNUP" || $key=="SUB_LOGIN" || $key=="SUB_LOGOUT" || $key=="SUB_SIGNUP"){
                $url = "https://hooks.slack.com/services/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";
            }else{
                if($totalCustomers <10){
                    $url = "https://hooks.slack.com/services/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";
                }else{
                    $url = "https://hooks.slack.com/services/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";    
                }    
            }
        }
        // You can get your webhook endpoint from your Slack settings
        $ch = curl_init();
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        $errors = curl_error($ch);
        curl_close($ch);
        return $result;
    }

  	public static function slack_inventory($message){

        $data = "payload=" . json_encode(array(
                    "text" => $message
        ));
        if (_isLocalMachine()) {
            //$url = "https://hooks.slack.com/services/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";
        } else {
            //$url = "https://hooks.slack.com/services/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";
        }
        // You can get your webhook endpoint from your Slack settings
        $ch = curl_init();
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        $errors = curl_error($ch);
        curl_close($ch);
        return $result;		 
  	}
}
