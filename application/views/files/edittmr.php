<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>
<?php if (isset($successmsg)) { ?>
    <div class="alert alert-success" style="text-align:center; ">
        <a class="close" data-dismiss="alert">×</a>
        <h4>Success! </h4>
        <?php echo $successmsg; ?>
    </div>
<?php } ?>
<?php if (isset($errormsg)) { ?>
    <div class="alert alert-error" style="text-align:center; ">
        <a class="close" data-dismiss="alert">×</a>
        <h4>Error! </h4>
        <?php echo $errormsg; ?>
    </div>
<?php } ?>
<h2>Edit Transportation Movement Request(TMR) </h2>
<hr/>
<div class="row">
    <div class="span4">

        <form class="well" action=""  method="post">

            <fieldset> 

                <div class="control-group">
                    <label class="control-label">TMR no</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="tmr_no" name="tmr_no" ><?php echo isset($tmr_no) ? $tmr_no : ''; ?></span>
                    </div>
                    <input type="hidden" value="<?php echo isset($tmr_no) ? $tmr_no : ''; ?>" name="tmr_no"/>
                </div>
                <label>RSD</label>
                <input  type="text" class="datetime span3" id="rsd" value="<?php echo isset($rsd) ? $rsd : ''; ?>" name="rsd"  />
                <label>Client</label>
                <select name="client_name" id="client_name" class="shadow_select span1">
                    <?php foreach ($all_client_name as $name) { ?>
                        <option value="<?php echo $name['id']; ?>" <?php if ($client_name == $name['id'])
                        echo 'selected=1'; ?> ><?php echo $name['client_name'] ?></option>
                            <?php } ?>
                </select>
                <label>Previous TMR</label>
                <input class="span3"  type="text" id="previous_tmr" value="<?php echo isset($previous_tmr) ? $previous_tmr : ''; ?>" name="previous_tmr"  />
                <label>Remission to TMR no.</label>
                <input class="span3"  type="text" id="remission_to_tmr" value="<?php echo isset($remission_to_tmr) ? $remission_to_tmr : ''; ?>" name="remission_to_tmr"  />
                <label>Type of truck</label>
                <select name="type_of_truck_id" id="type_of_truck_id" class="shadow_select span2">
                    <?php foreach ($all_type_of_truck as $truck) { ?>
                        <option value="<?php echo $truck['id']; ?>" <?php if ($type_of_truck_id == $truck['id'])
                        echo 'selected=1'; ?> ><?php echo $truck['truck_type'] ?></option>
                            <?php } ?>
                </select>
                <label>Container no.</label>
                <input  type="text" class="span3" id="container_no" value="<?php echo isset($container_no) ? $container_no : ''; ?>"  name="container_no"  />
                <label>Origin</label>
                <select name="origin" id="origin" class="shadow_select span1">
                    <option value="baf" <?php if ($origin == 'baf')
                                echo 'selected=1'; ?> >BAF </option>
                    <option value="kaf" <?php if ($origin == 'kaf')
                                echo 'selected=1'; ?> >KAF</option>
                    <option value="pheonix" <?php if ($origin == 'pheonix')
                                echo 'selected=1'; ?> >PHEONIX</option>
                </select>
                <label>Destination</label>
                <select name="destination" id="destination" class="shadow_select span1">
                    <option value="baf" <?php if ($destination == 'baf')
                                echo 'selected=1'; ?> >BAF </option>
                    <option value="kaf" <?php if ($destination == 'kaf')
                                echo 'selected=1'; ?> >KAF</option>
                    <option value="pheonix" <?php if ($destination == 'pheonix')
                                echo 'selected=1'; ?> >PHEONIX</option>
                </select>
                <label>Type of cargo</label>
                <select name="type_of_cargo_id" id="type_of_cargo_id" class="shadow_select span2">
                    <?php foreach ($all_type_of_cargo as $cargo) { ?>
                        <option value="<?php echo $cargo['id']; ?>" <?php if ($type_of_cargo_id == $cargo['id'])
                        echo 'selected=1'; ?> ><?php echo $cargo['cargo_type'] ?></option>
                            <?php } ?>
                </select>
                <label>GDMS no</label>
                <input  type="text" class="span3" value="<?php echo isset($gdms_no) ? $gdms_no : ''; ?>"  name="gdms_no"  />
                <label>ESCORT</label>
                <select name="escort" class="shadow_select span1">
                    <option value="usg" <?php if ($escort == 'usg')
                                echo 'selected=1'; ?> >USG</option>
                    <option value="psc" <?php if ($escort == 'psc')
                                echo 'selected=1'; ?> >PSC</option>
                    <option value="none" <?php if ($escort == 'none')
                                echo 'selected=1'; ?> >None</option>
                </select>
                <label>Ping status</label>
                <select name="ping_status" class="shadow_select span2">
                    <option value="pinging" <?php if ($ping_status == 'pinging') echo 'selected=1'; ?> >Pinging</option>
                    <option value="not_pinging" <?php if ($ping_status == 'not_pinging') echo 'selected=1'; ?> >Not Pinging</option>
                </select>
                <label>Ping status reason</label>
                <input class="span3"  type="text" id="ping_status_reason" value="<?php echo isset($ping_status_reason) ? $ping_status_reason : ''; ?>" name="ping_status_reason"  />

                <label>Cooldown status</label>
                <select name="cooldown_status" id="cooldown_status" class="shadow_select span2">
                    <option value="away_cooldown" <?php if ($cooldown_status == 'away_cooldown')
                                echo 'selected=1'; ?> >Away Cooldown</option>
                    <option value="inside_cooldown" <?php if ($cooldown_status == 'inside_cooldown')
                                echo 'selected=1'; ?> >Inside Cooldown</option>
                </select>
                <label>Cooldown status reason</label>
                <input class="span3"  type="text" id="cooldown_status_reason" value="<?php echo isset($cooldown_status_reason) ? $cooldown_status_reason : ''; ?>" name="cooldown_status_reason"  />
                <label>RSD Status</label>
                <select name="rsd_status" id="rsd_status" class="shadow_select span2">
                        <option value="met" <?php if ($rsd_status == 'met') echo 'selected=1'; ?> >Met</option>
                        <option value="not_met" <?php if ($rsd_status == 'not_met') echo 'selected=1'; ?> >Not Met</option>
                </select>
                <label>RSD Status reason</label>
                <input class="span3"  type="text" id="rsd_status_reason" value="<?php echo isset($rsd_status_reason) ? $rsd_status_reason : ''; ?>" name="rsd_status_reason"  />
                <label>Mission Units</label>
                <input class="span1"  type="text" id="mission_units" value="<?php echo isset($mission_units) ? $mission_units : ''; ?>" name="mission_units"  />

                <label>RLD</label>
                <input class="date span3"  type="text" id="rld" value="<?php echo isset($rld) ? $rld : ''; ?>"  name="rld"  />

                <label>AAAO</label>
                <input class="nofuturedate span3"  type="text" id="aaao" value="<?php echo isset($aaao) ? $aaao : ''; ?>" name="aaao"  />
                <label>ALD</label>
                <input class="nofuturedate span3"  type="text" id="ald" value="<?php echo isset($ald) ? $ald : ''; ?>" name="ald"  />

                <div class="control-group">
                    <label class="control-label">Days delayed in upload</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="days_delay_upload" name="days_delay_upload" ></span>
                    </div>
                </div>
                <label>RDD</label>
                <input class="date span3"  type="text" id="rdd" value="<?php echo isset($rdd) ? $rdd : ''; ?>" name="rdd"  />
                <!--<label>ARDD</label>
                <input class="date span3"  type="text" id="ardd" name="ardd"   /> It should be ALD+RDD-RLD+7 --> 
                <label>AAAD</label>
                <input class="nofuturedate span3"  type="text" id="aaad" value="<?php echo isset($aaad) ? $aaad : ''; ?>" name="aaad"  />
                <label>ADD</label>
                <input class="nofuturedate span3"  type="text" id="ad_d" value="<?php echo isset($ad_d) ? $ad_d : ''; ?>" name="ad_d"  />

                <div class="control-group">
                    <label class="control-label">Days delayed in download</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="days_delay_download" name="days_delay_download" ></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Total delay in days</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="total_delay" name="total_delay" ></span>
                    </div>
                </div>
                <label>Driver name</label>
                <input class="span3"  type="text" id="driver_name" value="<?php echo isset($driver_name) ? $driver_name : ''; ?>" name="driver_name"  />
                <label>Driver Tazkira no.</label>
                <input class="span3"  type="text" id="driver_tazkira" value="<?php echo isset($driver_tazkira) ? $driver_tazkira : ''; ?>" name="driver_tazkira"  />
                <label>Driver Phone no.</label>
                <input class="span3"  type="text" id="driver_phone" value="<?php echo isset($driver_phone) ? $driver_phone : ''; ?>" name="driver_phone"  />
                <label>Truck no.</label>
                <input class="span3"  type="text" id="truck_no" value="<?php echo isset($truck_no) ? $truck_no : ''; ?>" name="truck_no"  />
                <label>Seal no.</label>
                <input class="span3"  type="text" id="seal_no" value="<?php echo isset($seal_no) ? $seal_no : ''; ?>" name="seal_no"  />
                <label>Name of the vendor</label>
                <select name="vendor_name" id="vendor_name" class="shadow_select span1">
                    <option value=""></option>
                    <?php foreach ($vendors as $vendor) { ?>
                        <option value="<?php echo $vendor['vend_id']; ?>" <?php if ($vendor_name == $vendor['vend_id'])
                        echo 'selected=1'; ?> ><?php echo $vendor['vendor_name']; ?></option>
                            <?php } ?>
                </select>
                <label>Vendor phone no.</label>
                <input class="span3"  type="text" id="vendor_phone" value="<?php echo isset($vendor_phone) ? $vendor_phone : ''; ?>" name="vendor_phone"  />
                <label>Fuel type</label>
                <select name="fuel_type" id="fuel_type" class="shadow_select span1">
                    <option value="JP8" <?php if ($fuel_type == 'JP8')
                                echo 'selected=1'; ?>  >JP8 </option>
                    <option value="MG" <?php if ($fuel_type == 'MG')
                                echo 'selected=1'; ?> >MG</option>
                    <option value="DF2" <?php if ($fuel_type == '')
                                echo 'selected=1'; ?> >DF2</option>
                    <option value="TS1" <?php if ($fuel_type == 'TS1')
                                echo 'selected=1'; ?> >TS1</option>
                </select>
                <label>Mission Status as per OPS</label>
                <select name="mission_status_ops" id="mission_status_ops" class="shadow_select span3">
                    <?php foreach ($all_mission_status_ops as $status) { ?>
                        <option value="<?php echo $status['id']; ?>" <?php if ($mission_status_ops == $status['id'])
                        echo 'selected=1'; ?> ><?php echo $status['status'] ?></option>
                            <?php } ?>
                </select>
                <label>Mission Status as per USC</label>
                <select name="mission_status_usc" id="mission_status_usc" class="shadow_select span3">
                    <?php foreach ($all_mission_status_usc as $status) { ?>
                        <option value="<?php echo $status['id']; ?>" <?php if ($mission_status_usc == $status['id'])
                        echo 'selected=1'; ?> ><?php echo $status['status'] ?></option>
                            <?php } ?>
                </select>
                <label>Mission Status as per client</label>
                <select name="mission_status_client" id="mission_status_client" class="shadow_select span3">
                    <?php foreach ($all_mission_status_client as $status) { ?>
                        <option value="<?php echo $status['id']; ?>"  <?php if ($mission_status_client == $status['id'])
                        echo 'selected=1'; ?> ><?php echo $status['status'] ?></option>
                            <?php } ?>
                </select>
                <label>Reason of Mission Status</label>
                <select name="mission_status_reason" id="mission_status_reason" class="shadow_select span3">
                    <?php foreach ($all_mission_status_reasons as $status) { ?>
                        <option value="<?php echo $status['id']; ?>" <?php if ($mission_status_client == $status['id'])
                        echo 'selected=1'; ?>  ><?php echo $status['reason'] ?></option>
                            <?php } ?>
                </select>
                <label>M/Sheet turned into distributor</label>
                <input class="span3"  type="text" id="m_sheet_trun_distributor" value="<?php echo isset($m_sheet_trun_distributor) ? $m_sheet_trun_distributor : ''; ?>" name="m_sheet_trun_distributor"  />
                <label>M/Sheet turned into distributor date</label>
                <input class="nofuturedate"  type="text" id="m_sheet_trun_distributor_date" value="<?php echo isset($m_sheet_trun_distributor_date) ? $m_sheet_trun_distributor_date : ''; ?>" name="m_sheet_trun_distributor_date"  />
                <label>ITV Returned status</label>
                <select name="itv_return_status" id="itv_return_status" class="shadow_select span2">
                    <option value="" <?php if ($itv_return_status == '')
                                echo 'selected=1'; ?> ></option>
                    <option value="returned" <?php if ($itv_return_status == 'returned')
                                echo 'selected=1'; ?> >Returned</option>
                    <option value="not_returned" <?php if ($itv_return_status == 'not_returned')
                                echo 'selected=1'; ?> >Not Returned</option>
                </select>
                <label>Round trip</label>
                <select name="round_trip" id="round_trip" class="shadow_select span1">
                    <option value="no" <?php if ($round_trip == 'no')
                                echo 'selected=1'; ?> >No</option>
                    <option value="yes" <?php if ($round_trip == 'yes')
                                echo 'selected=1'; ?> >Yes</option>
                </select>
                <label>Demurrage invoice amount</label>
                <input class="span1"  type="text" id="dem_invoice_amt" value="<?php echo isset($dem_invoice_amt) ? $dem_invoice_amt : ''; ?>" name="dem_invoice_amt"  />
                <label>Demurrage invoice date</label>
                <input class="nofuturedate"  type="text" id="dem_invoice_date" value="<?php echo isset($dem_invoice_date) ? $dem_invoice_date : ''; ?>" name="dem_invoice_date"  />
                <label>Demurrage Paid status</label>
                <select name="dem_paid_status" id="dem_paid_status" class="shadow_select span2">
                    <option value="not_approved" <?php if ($dem_paid_status == 'not_approved')
                                echo 'selected=1'; ?> >Not Approved</option>
                    <option value="unpaid" <?php if ($dem_paid_status == 'unpaid')
                                echo 'selected=1'; ?> >Unpaid</option>
                    <option value="paid" <?php if ($dem_paid_status == 'paid')
                                echo 'selected=1'; ?> >Paid</option>
                </select>
                <label>Demurrage Remark</label>
                <input class="span3"  type="text" id="dem_remark" value="<?php echo isset($dem_remark) ? $dem_remark : ''; ?>" name="dem_remark"  />
                <label>Price per mission unit</label>
                <input class="span3"  type="text" id="mission_unit_price" value="<?php echo isset($mission_unit_price) ? $mission_unit_price : ''; ?>" name="mission_unit_price"  />
                <label>Total price of mission</label>
                <input class="span3"  type="text" id="mission_total_price"  value="<?php echo isset($mission_total_price) ? $mission_total_price : ''; ?>" name="mission_total_price"  />
                <label>Deductions by client</label>
                <input class="span3"  type="text" id="deduction_by_client" value="<?php echo isset($deduction_by_client) ? $deduction_by_client : ''; ?>" name="deduction_by_client"  />
                <label>Turned in to Client Date</label>
                <input class="nofuturedate span3"  type="text" id="turned_to_client_date" value="<?php echo isset($turned_to_client_date) ? $turned_to_client_date : ''; ?>" name="turned_to_client_date"  />
                <label>Transport invoice status</label>
                <input class="span3"  type="text" id="transport_invoice_status" value="<?php echo isset($transport_invoice_status) ? $transport_invoice_status : ''; ?>" name="transport_invoice_status"  />
                <label>Transport invoice date</label>
                <input class="nofuturedate"  type="text" id="transport_invoice_date" value="<?php echo isset($transport_invoice_date) ? $transport_invoice_date : ''; ?>" name="transport_invoice_date"  />
                <label>Distributor's remark </label>
                <input class="span3"  type="text" id="distributor_remark" value="<?php echo isset($distributor_remark) ? $distributor_remark : ''; ?>" name="distributor_remark"  />
                <label>Prime customer's remark </label>
                <input class="span3"  type="text" id="prime_customer_remark" value="<?php echo isset($prime_customer_remark) ? $prime_customer_remark : ''; ?>" name="prime_customer_remark"  />
                <label>USC remark 1 </label>
                <input class="span3"  type="text" id="usc_remark_1" value="<?php echo isset($usc_remark_1) ? $usc_remark_1 : ''; ?>" name="usc_remark_1"  />
                <label>USC remark 2 </label>
                <input class="span3"  type="text" id="usc_remark_2" value="<?php echo isset($usc_remark_2) ? $usc_remark_2 : ''; ?>" name="usc_remark_2"  />
                <label>Advance vendor amount 1 </label>
                <input class="span3"  type="text" id="adv_vendor_amt_1" value="<?php echo isset($adv_vendor_amt_1) ? $adv_vendor_amt_1 : ''; ?>" name="adv_vendor_amt_1"  />
                <label>Advance vendor amount 1 Date </label>
                <input class="nofuturedate"  type="text" id="adv_vendor_amt_1_date" value="<?php echo isset($adv_vendor_amt_1_date) ? $adv_vendor_amt_1_date : ''; ?>" name="adv_vendor_amt_1_date"  />
                <label>Advance vendor amount 2 </label>
                <input class="span3"  type="text" id="adv_vendor_amt_2" value="<?php echo isset($adv_vendor_amt_2) ? $adv_vendor_amt_2 : ''; ?>" name="adv_vendor_amt_2"  />
                <label>Advance vendor amount 2 Date </label>
                <input class="nofuturedate"  type="text" id="adv_vendor_amt_2_date" value="<?php echo isset($adv_vendor_amt_2_date) ? $adv_vendor_amt_2_date : ''; ?>" name="adv_vendor_amt_2_date"  />
                <label>Advance vendor amount 3 </label>
                <input class="span3"  type="text" id="adv_vendor_amt_3" value="<?php echo isset($adv_vendor_amt_3) ? $adv_vendor_amt_3 : ''; ?>" name="adv_vendor_amt_3"  />
                <label>Advance vendor amount 3 Date </label>
                <input class="nofuturedate"  type="text" id="adv_vendor_amt_3_date" value="<?php echo isset($adv_vendor_amt_3_date) ? $adv_vendor_amt_3_date : ''; ?>" name="adv_vendor_amt_3_date"  />
                <div class="control-group">
                    <label class="control-label">Total Advance paid</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="total_advance" name="total_advance" ></span>
                    </div>
                </div>
                <label>Penalty to vendor </label>
                <input class="span3"  type="text" id="vendor_penalty" value="<?php echo isset($vendor_penalty) ? $vendor_penalty : ''; ?>" name="vendor_penalty"  />
                <label>Total mission cost </label>
                <input class="span3"  type="text" id="total_mission_cost" value="<?php echo isset($total_mission_cost) ? $total_mission_cost : ''; ?>" name="total_mission_cost"  />
                <div class="control-group">
                    <label class="control-label">Remaining amount</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="remaining_amt" name="remaining_amt" ></span>
                    </div>
                </div>
                <label>Final payment to vendor </label>
                <input class="span3"  type="text" id="final_vendor_pay" value="<?php echo isset($final_vendor_pay) ? $final_vendor_pay : ''; ?>" name="final_vendor_pay"  />
                <label>Final payment to vendor date </label>
                <input class="nofuturedate"  type="text" id="final_vendor_pay_date" value="<?php echo isset($final_vendor_pay_date) ? $final_vendor_pay_date : ''; ?>" name="final_vendor_pay_date"  />
                <label>USC Payment remark</label>
                <input class="span3"  type="text" id="usc_pay_remark" value="<?php echo isset($usc_pay_remark) ? $usc_pay_remark : ''; ?>" name="usc_pay_remark"  />
                <label>Final mission status</label>
                <select name="final_mission_status" id="final_mission_status" class="shadow_select span1">
                    <option value="" <?php if ($final_mission_status == '')
                                echo 'selected=1'; ?> > </option>
                    <option value="open" <?php if ($final_mission_status == 'open')
                                echo 'selected=1'; ?> >Open</option>
                    <option value="close" <?php if ($final_mission_status == 'close')
                                echo 'selected=1'; ?> >Closed</option>
                </select>
                <label>Fuel quantity uploaded</label>
                <input class="span3"  type="text" id="fuel_qty_up" value="<?php echo isset($fuel_qty_up) ? $fuel_qty_up : ''; ?>" name="fuel_qty_up"  />
                <label>Fuel quantity downloaded 1</label>
                <input class="span3"  type="text" id="fuel_qty_dw_1" value="<?php echo isset($fuel_qty_dw_1) ? $fuel_qty_dw_1 : ''; ?>" name="fuel_qty_dw_1"  />
                <label>Placard 1 request </label>
                <select name="placard_1_rqst" id="placard_1_rqst" class="shadow_select span1">
                    <option value="" <?php if ($placard_1_rqst == '')
                                echo 'selected=1'; ?> > </option>
                    <option value="no" <?php if ($placard_1_rqst == 'no')
                                echo 'selected=1'; ?> >No</option>
                    <option value="yes" <?php if ($placard_1_rqst == 'yes')
                                echo 'selected=1'; ?> >Yes</option>
                </select>
                <label>Destination 2 </label>
                <select name="destination_2" id="destination_2" class="shadow_select span1">
                    <option value="baf" <?php if ($destination_2 == 'baf')
                                echo 'selected=1'; ?> >BAF </option>
                    <option value="kaf" <?php if ($destination_2 == 'kaf')
                                echo 'selected=1'; ?> >KAF</option>
                    <option value="pheonix" <?php if ($destination_2 == 'pheonix')
                                echo 'selected=1'; ?> >PHEONIX</option>
                </select>
                <label>Fuel quantity downloaded 2</label>
                <input class="span3"  type="text" id="fuel_qty_dw_2" value="<?php echo isset($fuel_qty_dw_2) ? $fuel_qty_dw_2 : ''; ?>" name="fuel_qty_dw_2"  />
                <label>Placard 2 request </label>
                <select name="placard_2_rqst" id="placard_2_rqst" class="shadow_select span1">
                    <option value="" <?php if ($placard_2_rqst == '')
                                echo 'selected=1'; ?> > </option>
                    <option value="no" <?php if ($placard_2_rqst == 'no')
                                echo 'selected=1'; ?> >No</option>
                    <option value="yes" <?php if ($placard_2_rqst == 'yes')
                                echo 'selected=1'; ?> >Yes</option>
                </select>
                <label>Destination 3 </label>
                <select name="destination_3" id="destination_3" class="shadow_select span1">
                    <option value="baf" <?php if ($destination_3 == 'baf')
                                echo 'selected=1'; ?> >BAF </option>
                    <option value="kaf" <?php if ($destination_3 == 'kaf')
                                echo 'selected=1'; ?> >KAF</option>
                    <option value="pheonix" <?php if ($destination_3 == 'pheonix')
                                echo 'selected=1'; ?> >PHEONIX</option>
                </select>
                <label>Fuel quantity downloaded 3</label>
                <input class="span3"  type="text" id="fuel_qty_dw_3" value="<?php echo isset($fuel_qty_dw_3) ? $fuel_qty_dw_3 : ''; ?>" name="fuel_qty_dw_3"  />
                <label>Placard 3 request </label>
                <select name="placard_3_rqst" id="placard_3_rqst" class="shadow_select span1">
                    <option value="" <?php if ($placard_3_rqst == '')
                                echo 'selected=1'; ?> > </option>
                    <option value="no" <?php if ($placard_3_rqst == 'no')
                                echo 'selected=1'; ?> >No</option>
                    <option value="yes" <?php if ($placard_3_rqst == 'yes')
                                echo 'selected=1'; ?> >Yes</option>
                </select>
                <label>Destination 4 </label>
                <select name="destination_4" id="destination_4" class="shadow_select span1">
                    <option value="" <?php if ($destination_4 == '')
                                echo 'selected=1'; ?> > </option>
                    <option value="no" <?php if ($destination_4 == 'no')
                                echo 'selected=1'; ?> >No</option>
                    <option value="yes" <?php if ($destination_4 == 'yes')
                                echo 'selected=1'; ?> >Yes</option>
                </select>
                <label>Fuel quantity downloaded 4</label>
                <input class="span3"  type="text" id="fuel_qty_dw_4" value="<?php echo isset($fuel_qty_dw_4) ? $fuel_qty_dw_4 : ''; ?>" name="fuel_qty_dw_4"  />
                <div class="control-group">
                    <label class="control-label">Final Shortage</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="final_shrtg_calc" name="final_shrtg_calc" ></span>
                    </div>
                </div>
                <label>Final shortage as per customer </label>
                <input class="span3"  type="text" id="final_shrtg_as_customer" value="<?php echo isset($final_shrtg_as_customer) ? $final_shrtg_as_customer : ''; ?>" name="final_shrtg_as_customer"  />
                <div class="control-group">
                    <label class="control-label">Final delivery %</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input" id="final_delivery_percentange_calc" name="final_delivery_percentange_calc" ></span>
                    </div>
                </div>
                <label>Final delivered % as per client </label>
                <input class="span3"  type="text" id="final_delivery_percentange_as_client" value="<?php echo isset($final_delivery_percentange_as_client) ? $final_delivery_percentange_as_client : ''; ?>" name="final_delivery_percentange_as_client"  />
                <label>Pilferage </label>
                <select name="pilferage" id="pilferage" class="shadow_select span1">
                    <option value="no" <?php if ($pilferage == 'no')
                                echo 'selected=1'; ?> >No</option>
                    <option value="yes" <?php if ($pilferage == 'yes')
                                echo 'selected=1'; ?> >Yes</option>
                </select>
                <label>Current location </label>
                <input class="span3"  type="text" id="current_location" name="current_location" value="<?php echo isset($current_location) ? $current_location : ''; ?>"  />
                
                <button type="submit" name="updatetrm" value="updatetrm" class="btn btn-primary btn-large ">Update TMR info</button>

            </fieldset>

        </form>  

    </div>
    <div class="span4">
        <form class="well" action="" method="post">
            <p>
            <lable>New Email</lable><br/>
            <textarea name="newemail" id="newemail" rows="25" style="width: 100%"></textarea>
            </p>
            <p>
                <button type="submit" name="savenewemail" id="savenewemail" value="savenewemail"  class="btn btn-primary ">Save this conversation</button>
            </p>
        </form>


    </div>
    <div class="span4">
        <div class="well">
            <p>
            <lable>Previous follow up Email </lable><br/>
            <textarea rows="27" style="width: 100%" class="uneditable-input uneditable-textarea" ><?php if (isset($previousemail))
                                echo $previousemail; ?></textarea>
            </p>

        </div>  
    </div>
    <div id="attachment"  class="span8">
        <div class="span2" style="margin:0px;">
            <div class="well">
                <small>GDSM Snapshot RSD Attachments: </small><br/>
                <!--<input id="fileInput" class="input-file" type="file">-->
                <!--<a class="btn btn-primary btn-mini">Select a file</a><br/>-->
                <?php if ($attachments) { ?>
                    <ul>
                        <?php
                        foreach ($attachments as $attachment) {
                            if ($attachment['attach_type'] == "rsd") {
                                ?>
                                <li><a target="_blank" href="<?php echo base_url('attachments') . '/' . $attachment['attach_saved_name']; ?>"><?php echo $attachment['attach_orig_name']; ?></a></li>
                            <?php }
                        } ?>
                    </ul>
                <?php } ?>
            </div>


        </div>
        <div class="span2">
            <div class="well">
                <small>GDSM on the way Attachments</small><br/>
                <!--<a class="btn btn-primary btn-mini">Select a file</a><br/>-->
                <?php if (($attachments)) { ?>
                    <ul>
                        <?php
                        foreach ($attachments as $attachment) {
                            if ($attachment['attach_type'] == "ontheway") {
                                ?>
                                <li><a target="_blank" href="<?php echo base_url('attachments') . '/' . $attachment['attach_saved_name']; ?>"><?php echo $attachment['attach_orig_name']; ?></a></li>
                            <?php }
                        } ?>
                    </ul>
                <?php } ?>
            </div>

        </div>  
        <div class="span2">
            <div class="well">
                <small>GDSM After RLD Attachments</small><br/>
                <!--<a class="btn btn-primary btn-mini">Select a file</a><br/>--> 
                <?php if (($attachments)) { ?>
                    <ul>
                        <?php
                        foreach ($attachments as $attachment) {
                            if ($attachment['attach_type'] == "rld") {
                                ?>
                                <li><a target="_blank" href="<?php echo base_url('attachments') . '/' . $attachment['attach_saved_name']; ?>"><?php echo $attachment['attach_orig_name']; ?></a></li>
                            <?php }
                        } ?>
                    </ul>
                <?php } ?>
            </div>

        </div>
        <div class="span2">
            <div class="well">
                <small>GDSM Demurrage  Attachments </small><br/>
                <!--<a class="btn btn-primary btn-mini">Select a file</a><br/>-->
                <?php if (($attachments)) { ?>
                    <ul>
                        <?php
                        foreach ($attachments as $attachment) {
                            if ($attachment['attach_type'] == "dem") {
                                ?>
                                <li><a target="_blank" href="<?php echo base_url('attachments') . '/' . $attachment['attach_saved_name']; ?>"><?php echo $attachment['attach_orig_name']; ?></a></li>
                            <?php }
                        } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>  

    </div>

</div>


<script type="text/javascript">
    
    //Auto calculation
    $(document).ready(function(){
        
        //Remaining amount
        $("input[id='adv_vendor_amt_1'],input[id='adv_vendor_amt_2',input[id='adv_vendor_amt_3'],input[id='total_mission_cost'],input[id='vendor_penalty']").bind("keyup", remaining);
        function remaining() {
            var down = $("input[id='adv_vendor_amt_1'],input[id='adv_vendor_amt_2',input[id='adv_vendor_amt_3'],input[id='vendor_penalty'] ").sum();
            var up = $("[id^='total_mission_cost']").val();
            var remaining = up-down;
            //alert(remaining);
            $("#remaining_amt").text(remaining); 
        }
        //Total advance paid
        $("input[id='adv_vendor_amt_1'],input[id='adv_vendor_amt_2',input[id='adv_vendor_amt_3'] ").sum("keyup", "#total_advance");
        //Days delay in upload
        $("input[id=rsd],input[id=ald]").bind("change", daysdelayup);
        function daysdelayup() {
            var rsd = $("#rsd").val();
            var ald = $("#ald").val();
            var days_delay_upload = "";
            var diff = Math.floor(( Date.parse(ald) - Date.parse(rsd)  ) / 86400000);
            if(diff > 2)
                days_delay_upload = Math.floor((Date.parse(ald) - (Date.parse(rsd) + 3* 86400000 ))/86400000);
            else
                days_delay_upload = 0;
            $("#days_delay_upload").text(days_delay_upload);
            updateTotalDelay();
        } 
        //Days delay in download
        $("input[id=ad_d],input[id=aaad]").bind("change", daysdelaydown);
        function daysdelaydown() {
            var ad_d = $("#ad_d").val();
            var aaad = $("#aaad").val();
            var days_delay = "";
            var diff = Math.floor(( Date.parse(ad_d) - Date.parse(aaad)  ) / 86400000);
            if(diff > 2)
                days_delay = Math.floor((Date.parse(ad_d) - (Date.parse(aaad) + 3* 86400000 ))/86400000);
            else
                days_delay = 0;
            $("#days_delay_download").text(days_delay);
            updateTotalDelay();
        }  
        //Total delay in days
        function updateTotalDelay() {
            //alert("sdf");
            var days_delay_upload = $("#days_delay_upload").text();
            var days_delay_download = $("#days_delay_download").text();
           
            var total_delay = parseInt(days_delay_upload) + parseInt(days_delay_download);
            
            $("#total_delay").text(total_delay);
        } 
       
        //Final delivered % auto calc
        $("input[name^=fuel_qty_]").bind("keyup", finaldelivery);
        function finaldelivery() {
            
            var down = $("input[name^='fuel_qty_dw_']").sum();
            var up = $("[id^='fuel_qty_up']").val();
            var delivered = (100*down)/up;
            $("#final_delivery_percentange_calc").text((delivered).toFixed(3)); 
        } 
        //Final fuel shortage calculation
        $("input[name^=fuel_qty_]").bind("keyup", fuelcal);
        function fuelcal() {
            
            var down = $("input[name^='fuel_qty_dw_']").sum();
            var up = $("[id^='fuel_qty_up']").val();
            var shortage = up-down;
            $("#final_shrtg_calc").text(shortage); 
        } 
    })

   
    
    
    var rsd = new LiveValidation('rsd',{validMessage: " "});
    rsd.add( Validate.Presence );
    
    var client_name = new LiveValidation('client_name',{validMessage: " "});
    client_name.add( Validate.Presence );
    
    var type_of_truck_id = new LiveValidation('type_of_truck_id',{validMessage: " "});
    type_of_truck_id.add( Validate.Presence );
    
    var origin = new LiveValidation('origin',{validMessage: " "});
    origin.add( Validate.Presence );
    var destination = new LiveValidation('destination',{validMessage: " "});
    destination.add( Validate.Presence );
    var type_of_cargo_id = new LiveValidation('type_of_cargo_id',{validMessage: " "});
    type_of_cargo_id.add( Validate.Presence );
    var escort = new LiveValidation('escort',{validMessage: " "});
    escort.add( Validate.Presence );
    var round_trip = new LiveValidation('round_trip',{validMessage: " "});
    round_trip.add( Validate.Presence );
    
    var mission_units = new LiveValidation('mission_units',{validMessage: " "});
    mission_units.add( Validate.Presence );
    var rld = new LiveValidation('rld',{validMessage: " "});
    rld.add( Validate.Presence );
    var rdd = new LiveValidation('rdd',{validMessage: " "});
    rdd.add( Validate.Presence );
    
     
    var adv_vendor_amt_1 = new LiveValidation('adv_vendor_amt_1',{validMessage: " "});
    adv_vendor_amt_1.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_1_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
   
   
    var adv_vendor_amt_1_date = new LiveValidation('adv_vendor_amt_1_date',{validMessage: " "});
    adv_vendor_amt_1_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_1').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );

    var adv_vendor_amt_1 = new LiveValidation('adv_vendor_amt_2',{validMessage: " "});
    adv_vendor_amt_1.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_2_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
   
   
    var adv_vendor_amt_1_date = new LiveValidation('adv_vendor_amt_2_date',{validMessage: " "});
    adv_vendor_amt_1_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_2').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );

    var adv_vendor_amt_1 = new LiveValidation('adv_vendor_amt_3',{validMessage: " "});
    adv_vendor_amt_1.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_3_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
   
   
    var adv_vendor_amt_1_date = new LiveValidation('adv_vendor_amt_3_date',{validMessage: " "});
    adv_vendor_amt_1_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_3').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );



    var adv_vendor_amt_1 = new LiveValidation('final_vendor_pay',{validMessage: " "});
    adv_vendor_amt_1.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#final_vendor_pay_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
    var adv_vendor_amt_1_date = new LiveValidation('final_vendor_pay_date',{validMessage: " "});
    adv_vendor_amt_1_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#final_vendor_pay').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );

    var adv_vendor_amt_1 = new LiveValidation('final_vendor_pay',{validMessage: " "});
    adv_vendor_amt_1.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#final_vendor_pay_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
    var adv_vendor_amt_1_date = new LiveValidation('final_vendor_pay_date',{validMessage: " "});
    adv_vendor_amt_1_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#final_vendor_pay').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );
</script>


<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>