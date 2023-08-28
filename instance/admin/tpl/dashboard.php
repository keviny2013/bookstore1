<style>
    #finance_overview, #sales_overview, #expense_overview, #temp_overview, #opration_overview {
        width: 100%;
        height: 300px;
    }
   /* .card .card-body {
        padding: 0rem 0.25rem;
    }
    .card-body {
        flex: 1 1 auto;
        padding: 0.25rem 0.25rem;
    }*/
    #kt_content_container .card .card-body{
        padding: 1.5rem 2.25rem !important;
    }
   
    .average_claim{
        max-width: 226px !important;
        /*font-size: 11px !important;*/
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="min-height: 670px;">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl load_html_data">
            
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Pending Claims">Coming Soon!</h5>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>   
            </div>
            
            
            <?php /* ?>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Pending Claims">Pending Claims</h5>
                                <div class="col-8">
                                    <h3 class=""><?= $dashboardStatsDetails['pending_claims']?></h3>
                                    <p class="mb-0 text-muted">
                                        <span class="fs-4 fw-bolder"><?= !empty($dashboardStatsDetails['pending_claims_amount'])?USCurrencyFormat($dashboardStatsDetails['pending_claims_amount']):"$0.00" ?></span>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                         <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                            <path d="m627-287 45-45-159-160v-201h-60v225l174 181ZM480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-82 31.5-155t86-127.5Q252-817 325-848.5T480-880q82 0 155 31.5t127.5 86Q817-708 848.5-635T880-480q0 82-31.5 155t-86 127.5Q708-143 635-111.5T480-80Zm0-400Zm0 340q140 0 240-100t100-240q0-140-100-240T480-820q-140 0-240 100T140-480q0 140 100 240t240 100Z" fill="#FFB607"/>
                                        </svg>

                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Outstanding Claims">Outstanding Claims</h5>
                                <div class="col-8">
                                    <h3 class=""><?= $dashboardStatsDetails['outstanding_claims']?></h3>
                                    <p class="mb-0 text-muted">
                                        <span class="fs-4 fw-bolder"><?= !empty($dashboardStatsDetails['outstanding_claims_amount'])?USCurrencyFormat($dashboardStatsDetails['outstanding_claims_amount']):"$0.00" ?></span>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                                <path d="M479.982-280q14.018 0 23.518-9.482 9.5-9.483 9.5-23.5 0-14.018-9.482-23.518-9.483-9.5-23.5-9.5-14.018 0-23.518 9.482-9.5 9.483-9.5 23.5 0 14.018 9.482 23.518 9.483 9.5 23.5 9.5ZM453-433h60v-253h-60v253Zm27.266 353q-82.734 0-155.5-31.5t-127.266-86q-54.5-54.5-86-127.341Q80-397.681 80-480.5q0-82.819 31.5-155.659Q143-709 197.5-763t127.341-85.5Q397.681-880 480.5-880q82.819 0 155.659 31.5Q709-817 763-763t85.5 127Q880-563 880-480.266q0 82.734-31.5 155.5T763-197.684q-54 54.316-127 86Q563-80 480.266-80Zm.234-60Q622-140 721-239.5t99-241Q820-622 721.188-721 622.375-820 480-820q-141 0-240.5 98.812Q140-622.375 140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z" fill="#FF5722"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Closed Claims">Closed Claims</h5>
                                <div class="col-8">
                                    <h3 class=""><?= $dashboardStatsDetails['closed_claims']?></h3>
                                    <p class="mb-0 text-muted">
                                        <span class="fs-4 fw-bolder"><?= !empty($dashboardStatsDetails['closed_claims_amount'])?USCurrencyFormat($dashboardStatsDetails['closed_claims_amount']):"$0.00" ?></span>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                           <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                                <path d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" fill="#4CAF50"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->    

                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Suspended Claims">Suspended Claims</h5>
                                <div class="col-8">
                                    <h3 class=""><?= $dashboardStatsDetails['suspended_cancelled_claims']?></h3>
                                    <p class="mb-0 text-muted">
                                        <span class="fs-4 fw-bolder"><?= !empty($dashboardStatsDetails['suspended_cancelled_claims_amount'])?USCurrencyFormat($dashboardStatsDetails['suspended_cancelled_claims_amount']):"$0.00" ?></span>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                           <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                            <path d="M370-320h60v-320h-60v320Zm160 0h60v-320h-60v320ZM480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" fill="#9E9E9E"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->    

                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h6 class="text-muted fw-normal mt-0" title="Total Claims">Total Claims</h6>
                                <div class="col-8">
                                    <h3 class=""><?= $dashboardStatsDetails['total_claims'];?></h3>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#40739e"/>
                                                    <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#40739e" opacity="0.3"/>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->   

                 <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Claim Approval Rate">Claim Approval Rate</h5>
                                <div class="col-8">
                                    <h3 class=""><?php
                                        $claimApprovalRate = 0;
                                        $claimApprovalRate = (($dashboardStatsDetails['outstanding_claims'] + $dashboardStatsDetails['closed_claims'] + $dashboardStatsDetails['suspended_cancelled_claims']) / $dashboardStatsDetails['closed_claims'])*100;
                                        echo $claimApprovalRate = number_format($claimApprovalRate, 2). '%';
                                    ?></h3>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <rect fill="#353b48" opacity="0.3" x="7" y="4" width="10" height="4"/>
                                                    <path d="M7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,20 C19,21.1045695 18.1045695,22 17,22 L7,22 C5.8954305,22 5,21.1045695 5,20 L5,4 C5,2.8954305 5.8954305,2 7,2 Z M8,12 C8.55228475,12 9,11.5522847 9,11 C9,10.4477153 8.55228475,10 8,10 C7.44771525,10 7,10.4477153 7,11 C7,11.5522847 7.44771525,12 8,12 Z M8,16 C8.55228475,16 9,15.5522847 9,15 C9,14.4477153 8.55228475,14 8,14 C7.44771525,14 7,14.4477153 7,15 C7,15.5522847 7.44771525,16 8,16 Z M12,12 C12.5522847,12 13,11.5522847 13,11 C13,10.4477153 12.5522847,10 12,10 C11.4477153,10 11,10.4477153 11,11 C11,11.5522847 11.4477153,12 12,12 Z M12,16 C12.5522847,16 13,15.5522847 13,15 C13,14.4477153 12.5522847,14 12,14 C11.4477153,14 11,14.4477153 11,15 C11,15.5522847 11.4477153,16 12,16 Z M16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 C15.4477153,10 15,10.4477153 15,11 C15,11.5522847 15.4477153,12 16,12 Z M16,16 C16.5522847,16 17,15.5522847 17,15 C17,14.4477153 16.5522847,14 16,14 C15.4477153,14 15,14.4477153 15,15 C15,15.5522847 15.4477153,16 16,16 Z M16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 C15.4477153,18 15,18.4477153 15,19 C15,19.5522847 15.4477153,20 16,20 Z M8,18 C7.44771525,18 7,18.4477153 7,19 C7,19.5522847 7.44771525,20 8,20 L12,20 C12.5522847,20 13,19.5522847 13,19 C13,18.4477153 12.5522847,18 12,18 L8,18 Z M7,4 L7,8 L17,8 L17,4 L7,4 Z" fill="#353b48"/>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0 mb-2 average_claim" title="Average Claim Processing Time">Average Processing Time</h5>
                                <div class="col-8">
                                    <h3 class=""><?= !empty($averageProcessTime[0]['averageProcessingTime'])?number_format($averageProcessTime[0]['averageProcessingTime'],2)." Days" :"0 Days"?></h3>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                       <span class="svg-icon svg-icon-primary svg-icon-4x">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#273c75" opacity="0.3"/>
                                                <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#273c75"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

               <div class="col-md-6 col-xl-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="text-muted fw-normal mt-0" title="Document Submission Rate">Document Submission Rate</h5>
                                <div class="col-8">
                                    <h3 class=""><?= !empty($documentSubmissionRate[0]['documents_submission_rate'])?number_format($documentSubmissionRate[0]['documents_submission_rate'],2)."%":"0%"?></h3>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#009432" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#009432"/>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>

            <div class="row">
             
                <div class="col-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="card-title align-items-start flex-column">            
                                <span class="card-label fw-bold text-dark">Claim Status Distribution</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div id="expense_overview"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="card-title align-items-start flex-column">            
                                <span class="card-label fw-bold text-dark">Top Claimants</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table gs-2 gy-2 gx-2">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800">
                                            <th>Name</th>
                                            <th>Total Claims</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($top_claiments))
                                        {
                                            foreach ($top_claiments as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td><?= $value['claimant_fullName'];?></td>
                                                    <td><?= $value['claim_counts'];?></td>
                                                    <td><?= USCurrencyFormat($value['totalAmount']);?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="card-title align-items-start flex-column">            
                                <span class="card-label fw-bold text-dark">Average Claim Amount By Reason</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div id="temp_overview"></div>
                        </div>
                    </div>
                </div>  

                <div class="col-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="card-title align-items-start flex-column">            
                                <span class="card-label fw-bold text-dark">Claim Amount Distribution</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div id="finance_overview"></div>
                        </div>
                    </div>
                </div>
		
            </div>
            <?php */ ?>

        </div>
    </div>
</div>
