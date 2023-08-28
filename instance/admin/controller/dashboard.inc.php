<?php

$segment = $_REQUEST['q'];
$args    = explode("/", $segment);

$admin_id = _escape(helper::_adminId());

$_SESSION['active_page'] = $args[0];

$glb_breadcrumbs_arr = array();
switch ($args[1]) {
    default:
        $_defaultFile                    = "dashboard.php";
        $glb_breadcrumbs_title           = "Dashboard";
        $glb_breadcrumbs_arr[0]["title"] = "Dashboard";
        $glb_breadcrumbs_arr[0]["class"] = "text-muted";
        $glb_breadcrumbs_arr[0]["link"]  = "javascript:void(0);";
        break;
}

/*
$finance_sql = "SELECT
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 0 AND CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) <= 499.99 THEN 1 ELSE 0 END) AS '0-500',
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 500 AND CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) <= 999.99 THEN 1 ELSE 0 END) AS '500-1000',
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 1000 AND CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) <= 4999.99 THEN 1 ELSE 0 END) AS '1000-5000',
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 5000 AND CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) <= 19999.99 THEN 1 ELSE 0 END) AS '5000-20k',
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 20000 AND CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) <= 49999.99 THEN 1 ELSE 0 END) AS '20k-50k',
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 50000 AND CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) <= 99999.99 THEN 1 ELSE 0 END) AS '50k-100k',
    SUM(CASE WHEN CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2)) >= 100000 THEN 1 ELSE 0 END) AS '100k+'
FROM airtable_master";

$finance_res = qs($finance_sql);

$finance_overview_arr = array();

if(!empty($finance_res)){
    $temp_key = 0;
    foreach($finance_res as $finance_key => $finance_data){
        $finance_overview_arr[$temp_key]["country"] = $finance_key;
        $finance_overview_arr[$temp_key]["value"] = $finance_data!=""?intval($finance_data):0;
        $temp_key = $temp_key + 1;
    }
}

$expense_sql = "SELECT count(*) as total_count, statusCode_value FROM airtable_master GROUP BY statusCode_value;";
$expense_res = q($expense_sql);

$expense_overview_arr = array();

if(count($expense_res) > 0){
    foreach($expense_res as $expense_key => $expense_data){
        $expense_overview_arr[$expense_key]["value"] = $expense_data["total_count"]!=""?intval($expense_data["total_count"]):0;
        $expense_overview_arr[$expense_key]["category"] = $expense_data["statusCode_value"];
    }
}

$data_opration_arr = array();
$data_opration_arr[0]["category"] = "Project A";
$data_opration_arr[0]["start"] = "new Date(".(date("2023,00,16")).").getTime()";
$data_opration_arr[0]["end"] = "new Date(".(date("2023,02,27")).").getTime()";
$data_opration_arr[0]["columnSettings"]["fill"] = "am5.Color.brighten(colors_opration.getIndex(0), 0.4)";
$data_opration_arr[0]["task"] = "Project A";

$reason_data_sql = "SELECT SUM(CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10, 2))) as total_amount, reasonCode_value FROM airtable_master WHERE CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10, 2)) > 0 GROUP BY reasonCode_value";
$reason_data_res = q($reason_data_sql);

$series_temperature_arr = array();

if(count($reason_data_res) > 0){
    foreach($reason_data_res as $reason_key => $reason_data) {
        $series_temperature_arr[$reason_key]["value"] = $reason_data["total_amount"]!=""?doubleval($reason_data["total_amount"]):0;
        $series_temperature_arr[$reason_key]["category"] = $reason_data["reasonCode_value"];
    }
}

//top claiments
$query = "SELECT COUNT(id) as claim_counts, SUM(CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2))) as totalAmount,claimant_fullName FROM `airtable_master` GROUP by claimant_fullName ORDER BY `totalAmount` DESC limit 10";
$top_claiments =  q($query);


$dashboardStatsDetails = array();

    //total claims
  $totalClaimsCount = "SELECT COUNT(id) as total_claims FROM `airtable_master`";
  $exe_totalClaimsCount = q($totalClaimsCount);

  //pending claims
  $pendingClaimsCount = "SELECT COUNT(id) as pending_claims,SUM(CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2))) as pending_claims_amount FROM `airtable_master` WHERE statusCode_value='Pending'";
  $exe_pendingClaimsCount = q($pendingClaimsCount);

  //Outstanding Claims
  $outstandingClaimsCount = "SELECT COUNT(id) as outstanding_claims,SUM(CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2))) as outstanding_claims_amount FROM `airtable_master` WHERE statusCode_value='Outstanding'";
  $exe_outstandingClaimsCount = q($outstandingClaimsCount);

  //Closed Claims
  $closedClaimsCount = "SELECT COUNT(id) as closed_claims,SUM(CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2))) as closed_claims_amount FROM `airtable_master` WHERE statusCode_value='Closed'";
  $exe_closedClaimsCount = q($closedClaimsCount);

  //Suspended/Cancelled Claims
  $suspendClaimsCount = "SELECT COUNT(id) as suspended_cancelled_claims,SUM(CAST(REPLACE(REPLACE(totalAmount, '$', ''), ',', '') AS DECIMAL(10,2))) as suspended_cancelled_claims_amount FROM `airtable_master` WHERE statusCode_value='Suspended/Cancelled'";
  $exe_suspendClaimsCount = q($suspendClaimsCount);

  $dashboardStatsDetails = [
    'total_claims' => $exe_totalClaimsCount[0]['total_claims'],
    'pending_claims' => $exe_pendingClaimsCount[0]['pending_claims'],
    'pending_claims_amount' => $exe_pendingClaimsCount[0]['pending_claims_amount'],
    'outstanding_claims' => $exe_outstandingClaimsCount[0]['outstanding_claims'],
    'outstanding_claims_amount' => $exe_outstandingClaimsCount[0]['outstanding_claims_amount'],
    'closed_claims' => $exe_closedClaimsCount[0]['closed_claims'],
    'closed_claims_amount' => $exe_closedClaimsCount[0]['closed_claims_amount'],
    'suspended_cancelled_claims' => $exe_suspendClaimsCount[0]['suspended_cancelled_claims'],
    'suspended_cancelled_claims_amount' => $exe_suspendClaimsCount[0]['suspended_cancelled_claims_amount'],
  ];


  //Average Processing Time
  $qs = "SELECT AVG(totalDays) AS averageProcessingTime FROM ( SELECT
                        CASE
                            WHEN dateRequested = '' OR dateClosed = '' THEN 0
                            ELSE DATEDIFF(STR_TO_DATE(dateClosed, '%m/%d/%Y'), STR_TO_DATE(dateRequested, '%m/%d/%Y'))
                        END AS totalDays
                    FROM
                        `airtable_master`
                ) AS processed_data";
  $averageProcessTime = q($qs);

  //Document Submission Rate
  $qrs = "SELECT (COUNT(CASE WHEN is_have_documents = 1 THEN 1 ELSE NULL END) / COUNT(*)) * 100 AS documents_submission_rate FROM airtable_master";
  $documentSubmissionRate = q($qrs);

*/

$pageSpecificJS  = array();
$pageSpecificCSS = array();

$page      = "dashboard";
$jsInclude = 'dashboard.js.php';
_cg('page_title', 'Dashboard');
