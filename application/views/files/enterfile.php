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
<!--<section>-->
<h2>New Transportation Movement Request(TMR) info.</h2>
<hr/>
<div class="row">

    <form  action="<?php echo site_url('filecontroller/create'); ?>" method="post" enctype="multipart/form-data" >
        <div class="span4">

            <div class="well">
                <fieldset> 
                    <label>TMR no.</label>
                    <input type="text" class="span3" id="tmr_no" name="tmr_no"  />
                    <label>RSD</label>
                    <input  type="text" class="datetime span3" id="rsd" name="rsd"  />
                    <label>Client name</label>
                    <select name="client_name" id="client_name" class="shadow_select span1">
                        <?php foreach ($all_client_name as $name) { ?>
                            <option value="<?php echo $name['id']; ?>"><?php echo $name['client_name'] ?></option>
                        <?php } ?>
                    </select>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE)) { ?>
                        <label>Previous TMR no.</label>
                        <input class="span3"  type="text" id="previous_tmr" name="previous_tmr"  />

                        <label>Remission to TMR no.</label>
                        <input class="span3"  type="text" id="remission_to_tmr" name="remission_to_tmr"  />
                    <?php } ?>
                    <label>Type of truck</label>
                    <select name="type_of_truck_id" id="type_of_truck_id" class="shadow_select span3">
                        <?php foreach ($all_type_of_truck as $truck) { ?>
                            <option value="<?php echo $truck['id']; ?>"><?php echo $truck['truck_type'] ?></option>
                        <?php } ?>
                    </select>
                    <label>Container no.</label>
                    <input  type="text" class="span3"  name="container_no"  />
                    <label>Container return date</label>
                    <input  type="text" class="span3 nofuturedate" id="container_return_date" name="container_return_date"  />
                    <label>Container remark</label>
                    <input  type="text" class="span3"  name="container_remark"  />
                    <label>Origin</label>
                    <select id="origin" name="origin" class="shadow_select span2" >
                        <option value="baf">BAF</option>
                        <option value="kaf">KAF</option>
                        <option value="pheonix">PHEONIX</option>
                    </select>
                    <label>Destination</label>
                    <select id="destination" name="destination" class="shadow_select span2" >
                        <option value="baf">BAF</option>
                        <option value="kaf">KAF</option>
                        <option value="pheonix">PHEONIX</option>
                    </select>
                    <label>Type of cargo</label>
                    <select name="type_of_cargo_id" id="type_of_cargo_id" class="shadow_select span2">
                        <?php foreach ($all_type_of_cargo as $cargo) { ?>
                            <option value="<?php echo $cargo['id']; ?>"><?php echo $cargo['cargo_type'] ?></option>
                        <?php } ?>
                    </select>
                    <label>GDMS no.</label>
                    <input  type="text" class="span3"  name="gdms_no"  />
                    <label>ESCORT</label>
                    <select name="escort" id="escort" class="shadow_select span1">
                        <option value="none">NONE</option>
                        <option value="usg">USG</option>
                        <option value="psc">PSC</option>
                        <option value="none">None</option>
                    </select>
                    <label>Ping status</label>
                    <select name="ping_status" class="shadow_select span2">
                        <option value=" "> </option>
                        <option value="pinging">Pinging</option>
                        <option value="not_pinging">Not Pinging</option>
                    </select>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE)) { ?>
                        <label>Ping status reason</label>
                        <input class="span3"  type="text" id="ping_status_reason" name="ping_status_reason"  />
                    <?php } ?>
                    <label>Cooldown status</label>
                    <select name="cooldown_status" id="cooldown_status" class="shadow_select span2">
                        <option value=" "> </option>
                        <option value="away_cooldown">Away Cooldown</option>
                        <option value="inside_cooldown">Inside Cooldown</option>
                    </select>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE)) { ?>
                        <label>Cooldown status reason</label>
                        <input class="span3"  type="text" id="cooldown_status_reason" name="cooldown_status_reason"  />
                        <label>RSD Status</label>
                        <select name="rsd_status" id="rsd_status" class="shadow_select span2">
                            <option value=" "> </option>
                            <option value="met">Met</option>
                            <option value="not_met">Not Met</option>
                        </select>
                    <?php } ?>
                    <label>RSD Status reason</label>
                    <input class="span3"  type="text" id="rsd_status_reason" name="rsd_status_reason"  />
                    <label>Mission Units</label>
                    <input class="span1"  type="text" id="mission_units" name="mission_units"  />
                    <label>RLD</label>
                    <input class="date span3"  type="text" id="rld" name="rld"  />
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE) && !$this->dx_auth->is_role(array(9), FALSE, TRUE)) { ?>
                        <label>AAAO</label>
                        <input class="nofuturedate span3"  type="text" id="aaao" name="aaao"  />
                        <label>ALD</label>
                        <input class="nofuturedate span3"  type="text" id="ald" name="ald"  />
                    <?php } ?>
                    <div class="control-group">
                        <label class="control-label">Days delayed in upload</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="days_delay_upload" name="days_delay_upload" ></span>
                        </div>
                    </div>
                    <label>RDD</label>
                    <input class="date span3"  type="text" id="rdd" name="rdd"  />
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE)) { ?>
                        <!--<div class="control-group">
                            <label class="control-label">ARDD</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input" id="ardd" name="ardd" ></span>
                            </div>
                        </div>-->
                        <!--<label>ARDD</label>
                        <input class="date span3"  type="text" id="ardd" name="ardd"   /> It should be ALD+RDD-RLD+7 --> 
                    <?php } ?>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE) && !$this->dx_auth->is_role(array(9), FALSE, TRUE)) { ?>
                        <label>AAAD</label>
                        <input class="nofuturedate span3"  type="text" id="aaad" name="aaad"  />
                        <label>ADD</label>
                        <input class="nofuturedate span3"  type="text" id="ad_d" name="ad_d"  />
                        <div class="control-group">
                            <label class="control-label">Days delayed in download</label>
                            <div class="controls">
                                <span class="input-xlarge uneditable-input" id="days_delay_download" name="days_delay_download" ></span>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="control-group">
                        <label class="control-label">Total delay in days</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="total_delay" name="total_delay" ></span>
                        </div>
                    </div>
                    <label>Driver name</label>
                    <input class="span3"  type="text" id="driver_name" name="driver_name"  />
                    <label>Driver Tazkira no.</label>
                    <input class="span3"  type="text" id="driver_tazkira" name="driver_tazkira"  />
                    <label>Driver Phone no.</label>
                    <input class="span3"  type="text" id="driver_phone" name="driver_phone"  />
                    <label>Truck no.</label>
                    <input class="span3"  type="text" id="truck_no" name="truck_no"  />
                    <?php if ($this->dx_auth->is_role(array(4), FALSE, TRUE) && !$this->dx_auth->is_role(array(5), FALSE, TRUE) && $this->dx_auth->is_admin()) { ?>
                        <label>Seal no.</label>
                        <input class="span3"  type="text" id="seal_no" name="seal_no"  />
                    <?php } ?>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE)) { ?>
                        <label>Name of the vendor</label>
                        <select name="vendor_name" id="vendor_name" class="shadow_select span1">
                            <option value=""></option>
                            <?php foreach ($vendors as $vendor) { ?>
                                <option value="<?php echo $vendor['vend_id']; ?>"><?php echo $vendor['vendor_name']; ?></option>
                            <?php } ?>
                        </select>

                        <label>Vendor phone no.</label>
                        <input class="span3"  type="text" id="vendor_phone" name="vendor_phone"  />
                    <?php } ?>
                    <label>Fuel type</label>
                    <select name="fuel_type" id="fuel_type" class="shadow_select span1">
                        <option value="JP8">JP8 </option>
                        <option value="MG">MG</option>
                        <option value="DF2">DF2</option>
                        <option value="TS1">TS1</option>
                    </select>
                    <?php if (!$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE) && !$this->dx_auth->is_role(array(9), FALSE, TRUE)) { ?>
                        <label>Mission Status as per OPS</label>
                        <select name="mission_status_ops" id="mission_status_ops" class="shadow_select span3">
                            <?php foreach ($all_mission_status_ops as $status) { ?>
                                <option value="<?php echo $status['id']; ?>"><?php echo $status['status'] ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(4), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE) && !$this->dx_auth->is_role(array(9), FALSE, TRUE)) { ?>
                        <label>Mission Status as per USC</label>
                        <select name="mission_status_usc" id="mission_status_usc" class="shadow_select span3">
                            <?php foreach ($all_mission_status_usc as $status) { ?>
                                <option value="<?php echo $status['id']; ?>"><?php echo $status['status'] ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(9), FALSE, TRUE) && !$this->dx_auth->is_role(array(10), FALSE, TRUE) && $this->dx_auth->is_admin()) { ?>
                        <label>Mission Status as per client</label>
                        <select name="mission_status_client" id="mission_status_client" class="shadow_select span3">
                            <?php foreach ($all_mission_status_client as $status) { ?>
                                <option value="<?php echo $status['id']; ?>"><?php echo $status['status'] ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE) && !$this->dx_auth->is_role(array(9), FALSE, TRUE)) { ?>
                        <label>Reason of Mission Status</label>
                        <select name="mission_status_reason" id="mission_status_reason" class="shadow_select span3">
                            <?php foreach ($all_mission_status_reasons as $status) { ?>
                                <option value="<?php echo $status['id']; ?>"><?php echo $status['reason'] ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE) && !$this->dx_auth->is_role(array(8), FALSE, TRUE) && !$this->dx_auth->is_role(array(9), FALSE, TRUE) && !$this->dx_auth->is_role(array(10), FALSE, TRUE)) { ?>
                        <label>M/Sheet turned into distributor</label>
                        <input class="span3"  type="text" id="m_sheet_trun_distributor" name="m_sheet_trun_distributor"  />
                        <label>M/Sheet turned into distributor date</label>
                        <input class="nofuturedate"  type="text" id="m_sheet_trun_distributor_date" name="m_sheet_trun_distributor_date"  />
                        <label>ITV Returned status</label>
                        <select name="itv_return_status" id="itv_return_status" class="shadow_select span2">
                            <option value=""></option>
                            <option value="returned">Returned</option>
                            <option value="not_returned">Not Returned</option>
                        </select>
                    <?php } ?>
                    <?php if (!$this->dx_auth->is_role(array(3), FALSE, TRUE) && !$this->dx_auth->is_role(array(7), FALSE, TRUE)) { ?>
                        <label>Round trip</label>
                        <select name="round_trip" id="round_trip" class="shadow_select span1">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Demurrage invoice amount</label>
                        <input class="span1"  type="text" id="dem_invoice_amt" name="dem_invoice_amt"  />
                        <label>Demurrage invoice date</label>
                        <input class="nofuturedate"  type="text" id="dem_invoice_date" name="dem_invoice_date"  />
                        <label>Demurrage Paid status</label>
                        <select name="dem_paid_status" id="dem_paid_status" class="shadow_select span2">
                            <option value="not_approved">Not approved</option>
                            <option value="unpaid">Unpaid</option>
                            <option value="paid">Paid</option>
                        </select>
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(5), FALSE, TRUE) || $this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Demurrage Remark</label>
                        <input class="span3"  type="text" id="dem_remark" name="dem_remark"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Price per mission unit</label>
                        <input class="span3"  type="text" id="mission_unit_price" name="mission_unit_price"  />
                        <label>Total price of mission</label>
                        <input class="span3"  type="text" id="mission_total_price" name="mission_total_price"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Deductions by client</label>
                        <input class="span3"  type="text" id="deduction_by_client" name="deduction_by_client"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Turned in to Client Date</label>
                        <input class="nofuturedate span3"  type="text" id="turned_to_client_date" name="turned_to_client_date"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Transport invoice status</label>
                        <input class="span3"  type="text" id="transport_invoice_status" name="transport_invoice_status"  />
                        <label>Transport invoice date</label>
                        <input class="nofuturedate"  type="text" id="transport_invoice_date" name="transport_invoice_date"  />
                        <label>Distributor's remark </label>
                        <input class="span3"  type="text" id="distributor_remark" name="distributor_remark"  />
                        <label>Prime customer's remark </label>
                        <input class="span3"  type="text" id="prime_customer_remark" name="prime_customer_remark"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(5), FALSE, TRUE) || $this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>USC remark 1 </label>
                        <input class="span3"  type="text" id="usc_remark_1" name="usc_remark_1"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(4), FALSE, TRUE) || $this->dx_auth->is_role(array(5), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>USC remark 2 </label>
                        <input class="span3"  type="text" id="usc_remark_2" name="usc_remark_2"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(8), FALSE, TRUE) || $this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Advance vendor amount 1 </label>
                        <input class="span3 "  type="text" id="adv_vendor_amt_1" name="adv_vendor_amt_1"  />
                        <label>Advance vendor amount 1 Date </label>
                        <input class="nofuturedate"  type="text" id="adv_vendor_amt_1_date" name="adv_vendor_amt_1_date"  />
                        <label>Advance vendor amount 2 </label>
                        <input class="span3 "  type="text" id="adv_vendor_amt_2" name="adv_vendor_amt_2"  />
                        <label>Advance vendor amount 2 Date </label>
                        <input class="nofuturedate"  type="text" id="adv_vendor_amt_2_date" name="adv_vendor_amt_2_date"  />
                        <label>Advance vendor amount 3 </label>
                        <input class="span3 "  type="text" id="adv_vendor_amt_3" name="adv_vendor_amt_3"  />
                        <label>Advance vendor amount 3 Date </label>
                        <input class="nofuturedate"  type="text" id="adv_vendor_amt_3_date" name="adv_vendor_amt_3_date"  />
                    <?php } ?>
                    <div class="control-group">
                        <label class="control-label">Total Advance paid</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="total_advance" name="total_advance" ></span>
                        </div>
                    </div>
                    <?php if ($this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Penalty to vendor </label>
                        <input class="span3"  type="text" id="vendor_penalty" name="vendor_penalty"  />
                        <label>Total mission cost </label>
                        <input class="span3"  type="text" id="total_mission_cost" name="total_mission_cost"  />
                    <?php } ?>
                    <div class="control-group">
                        <label class="control-label">Remaining amount</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="remaining_amt" name="remaining_amt" ></span>
                        </div>
                    </div>
                    <?php if ($this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Final payment to vendor </label>
                        <input class="span3"  type="text" id="final_vendor_pay" name="final_vendor_pay"  />
                        <label>Final payment to vendor date </label>
                        <input class="nofuturedate"  type="text" id="final_vendor_pay_date" name="final_vendor_pay_date"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(8), FALSE, TRUE) || $this->dx_auth->is_role(array(9), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>USC Payment remark</label>
                        <input class="span3"  type="text" id="usc_pay_remark" name="usc_pay_remark"  />
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Final mission status</label>
                        <select name="final_mission_status" id="final_mission_status" class="shadow_select span1">
                            <option value=""></option>
                            <option value="open">Open</option>
                            <option value="close">Closed</option>
                        </select>
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(4), FALSE, TRUE) || $this->dx_auth->is_role(array(5), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Fuel quantity uploaded</label>
                        <input class="span3"  type="text" id="fuel_qty_up" name="fuel_qty_up"  />
                        <label>Fuel quantity downloaded 1</label>
                        <input class="span3 "  type="text" id="fuel_qty_dw_1" name="fuel_qty_dw_1"  />
                        <label>Fuel quantity downloaded 1 Date</label>
                        <input class="span3 nofuturedate "  type="text" id="fuel_qty_dw_1_date" name="fuel_qty_dw_1_date"  />
                        <label>Placard 1 request </label>
                        <select name="placard_1_rqst" id="placard_1_rqst" class="shadow_select span1">
                            <option value=""> </option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <label>Destination 2 </label>
                        <select name="destination_2" id="destination_2" class="shadow_select span1">
                            <option value="baf">BAF </option>
                            <option value="kaf">KAF</option>
                            <option value="pheonix">PHEONIX</option>
                        </select>
                        <label>Fuel quantity downloaded 2</label>
                        <input class="span3"  type="text" id="fuel_qty_dw_2" name="fuel_qty_dw_2"  />
                        <label>Fuel quantity downloaded 2 Date</label>
                        <input class="span3 nofuturedate"  type="text" id="fuel_qty_dw_2_date" name="fuel_qty_dw_2_date"  />
                        <label>Placard 2 request </label>
                        <select name="placard_2_rqst" id="placard_2_rqst" class="shadow_select span1">
                            <option value=""> </option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <label>Destination 3 </label>
                        <select name="destination_3" id="destination_3" class="shadow_select span1">
                            <option value="baf">BAF </option>
                            <option value="kaf">KAF</option>
                            <option value="pheonix">PHEONIX</option>
                        </select>
                        <label>Fuel quantity downloaded 3</label>
                        <input class="span3 "  type="text" id="fuel_qty_dw_3" name="fuel_qty_dw_3"  />
                        <label>Fuel quantity downloaded 3 Date</label>
                        <input class="span3 nofuturedate "  type="text" id="fuel_qty_dw_3_date" name="fuel_qty_dw_3_date"  />
                        <label>Placard 3 request </label>
                        <select name="placard_3_rqst" id="placard_3_rqst" class="shadow_select span1">
                            <option value=""> </option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <label>Destination 4 </label>
                        <select name="destination_4" id="destination_4" class="shadow_select span1">
                            <option value=""> </option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <label>Fuel quantity downloaded 4</label>
                        <input class="span3 fule_dl"  type="text" id="fuel_qty_dw_4" name="fuel_qty_dw_4"  />
                        <label>Fuel quantity downloaded 4 Date</label>
                        <input class="span3 nofuturedate"  type="text" id="fuel_qty_dw_4_date" name="fuel_qty_dw_4_date"  />
                    <?php } ?>

                    <div class="control-group">
                        <label class="control-label">Final Shortage</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="final_shrtg_calc" name="final_shrtg_calc" ></span>
                        </div>
                    </div>
                    <?php if ($this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Final shortage as per customer </label>
                        <input class="span3"  type="text" id="final_shrtg_as_customer" name="final_shrtg_as_customer"  />
                    <?php } ?>
                    <div class="control-group">
                        <label class="control-label">Final delivery %</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="final_delivery_percentange_calc" name="final_delivery_percentange_calc" ></span>
                        </div>
                    </div>
                    <label>Final delivered % as per client </label>
                    <input class="span3"  type="text" id="final_delivery_percentange_as_client" name="final_delivery_percentange_as_client"  />
                    <?php if ($this->dx_auth->is_role(array(5), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Pilferage </label>
                        <select name="pilferage" id="pilferage" class="shadow_select span1">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    <?php } ?>
                    <?php if ($this->dx_auth->is_role(array(4), FALSE, TRUE) || $this->dx_auth->is_role(array(5), FALSE, TRUE) || $this->dx_auth->is_role(array(10), FALSE, TRUE) || $this->dx_auth->is_admin()) { ?>
                        <label>Current location </label>
                        <input class="span3"  type="text" id="current_location" name="current_location"  />
                    <?php } ?>
                    <button type="submit" class="btn btn-primary btn-large ">Create TMR</button>
                </fieldset>
            </div>     


        </div>
        <div class="span8">
            <div class="well">
                
                <label>Mission Issue status </label>
                <select name="mission_issue_status" id="mission_issue_status" class="shadow_select span3">
                    <option value="open">Open </option>
                    <option value="urgent">Urgent</option>
                    <option value="open_fin">Open Fin</option>
                    <option value="urgent_fin">Urgent Fin</option>
                    <option value="closed">Closed</option>
                </select>
                <label>Date of issue </label>
                <input class="span3 nofuturedate"  type="text" id="mission_issue_status_date" name="mission_issue_status_date"  />
                
                <br/>
                New email<br/>
                <textarea name="newemail" id="newemail" rows="25" style="width: 100%"></textarea>
                <!--<button name="newemail" id="newemail"  class="btn btn-primary ">Create</button>-->
            </div>

        </div>
        <div id="attachment"  class="span8">
            <div class="span2" style="margin:0px;">
                <div class="well">
                    <small>GDSM Snapshot RSD Attachments: </small><br/>
                    <table>
                        <tr>
                            <td>
                                <span class="btn btn-success btn-mini fileinput-button" >
                                    <span>...</span>
                                    <input  id="rsdfile" type="file"  name="rsdfiles[]">
                                </span> 
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>  
                    <a id="add_rsd_file" href="#" rel="tooltip" title="Add more files" style="float:right; "><i class="icon-plus-sign clear" ></i></a>

                </div>

            </div>
            <div class="span2">
                <div class="well">
                    <small>GDSM on the way Attachments</small><br/>
                    <table>
                        <tr>
                            <td>
                                <span class="btn btn-success btn-mini fileinput-button" style="float: right">
                                    <span>...</span>
                                    <input  id="onthewayfile" type="file" name="onthewayfiles[]" data-url="server/php/" >
                                </span>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>  
                    <a id="add_ontheway_file" href="#" rel="tooltip" title="Add more files" style="float:right; "><i class="icon-plus-sign clear" ></i></a>
                </div>

            </div>  
            <div class="span2">
                <div class="well">
                    <small>GDSM After RLD Attachments</small><br/>
                    <table>
                        <tr>
                            <td>
                                <span class="btn btn-success btn-mini fileinput-button" style="float: right">
                                    <span>...</span>
                                    <input  id="rldfile" type="file" name="rldfiles[]" data-url="server/php/" multiple>
                                </span>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>
                    <a id="add_rld_file" href="#" rel="tooltip" title="Add more files" style="float:right; "><i class="icon-plus-sign clear" ></i></a>
                </div>

            </div>
            <div class="span2">
                <div class="well">
                    <small>GDSM Demurrage  Attachments </small><br/>
                    <table>
                        <tr>
                            <td>
                                <span class="btn btn-success btn-mini fileinput-button" style="float: right">
                                    <span>...</span>
                                    <input  id="demfile" type="file" name="demfiles[]" data-url="server/php/" multiple>
                                </span>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>
                    <a id="add_dem_file" href="#" rel="tooltip" title="Add more files" style="float:right; "><i class="icon-plus-sign clear" ></i></a>
                </div>
            </div>  

        </div>
    </form>  
</div>
<!--</section>-->

<script type="text/javascript">
    
   
    $(document).ready(function(){
        
        //Dynamic field for file attachment
        $('#add_rsd_file').live('click',function() {
            var file_input = '<tr><td> <span class="btn btn-success btn-mini fileinput-button"><span>...</span><input  id="rsdfile" type="file" name="rsdfiles[]"></span></td><td name="filename"></td><td><a href="#" id="remove"><i class="icon-minus-sign" ></i> </a></td>  </tr>';
            $(this).before(file_input);
            return false;
        });
        $('#add_ontheway_file').live('click',function() {
            var file_input = '<tr><td> <span class="btn btn-success btn-mini fileinput-button"><span>...</span><input  id="onthewayfile" type="file" name="onthewayfiles[]"></span></td><td name="filename"></td><td><a href="#" id="remove"><i class="icon-minus-sign" ></i> </a></td>  </tr>';
            $(this).before(file_input);
            return false;
        });
        $('#add_rld_file').live('click',function() {
            var file_input = '<tr><td> <span class="btn btn-success btn-mini fileinput-button"><span>...</span><input  id="rldfile" type="file" name="rldfiles[]"></span></td><td name="filename"></td><td><a href="#" id="remove"><i class="icon-minus-sign" ></i> </a></td>  </tr>';
            $(this).before(file_input);
            return false;
        });
        $('#add_dem_file').live('click',function() {
            var file_input = '<tr><td> <span class="btn btn-success btn-mini fileinput-button"><span>...</span><input  id="demfile" type="file" name="demfiles[]"></span></td><td name="filename"></td><td><a href="#" id="remove"><i class="icon-minus-sign" ></i> </a></td>  </tr>';
            $(this).before(file_input);
            return false;
        });
        $('#remove').live('click', function() {
            $(this).closest('tr').remove();
            return false;
        });
        $('input[type=file]').live('change', function() {
            var str = "";
            str = $(this).val();
            file = str.substr(str.lastIndexOf('\\') + 1);
            if(file !='')
            {
                if(file.length > 10) {
                    file = file.substring(0,10)+"...";
                }
                var addnode =  file;
                $(this).closest('td').next('td').text(addnode)
                //$("#filename").text(file);
            }
        }).change()
        
        //Auto calculation
        //Remaining amount
        $("input[id='adv_vendor_amt_1'],input[id='adv_vendor_amt_2'],input[id='adv_vendor_amt_3'],input[id='total_mission_cost'],input[id='vendor_penalty']").bind("keyup", remaining);
        function remaining() {
            var down = $("input[id='adv_vendor_amt_1'],input[id='adv_vendor_amt_2'],input[id='adv_vendor_amt_3'],input[id='vendor_penalty'] ").sum();
            var up = $("[id^='total_mission_cost']").val();
            var remaining = up-down;
            //alert(remaining);
            $("#remaining_amt").text(remaining); 
        }                     
        //Total advance paid
        $("input[id='adv_vendor_amt_1'],input[id='adv_vendor_amt_2'],input[id='adv_vendor_amt_3'] ").sum("keyup", "#total_advance");
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
        
        //ARDD = ALD+RDD-RLD+7
        /*$("input[id=ald],input[id=rdd],input[id=rld]").bind("change", ardd_calc);
        function ardd_calc() {
            var ald = $("#ald").val();
            var rdd = $("#rdd").val();
            var rld = $("#rld").val();
            
            var ardd = Math.floor((( Date.parse(ald) + Date.parse(rdd)  + 7 * 86400000) - Date.parse(rld) ) / 86400000);
            
            $("#ardd").text(ardd);
            
        }*/
    
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

    function check_avail(id, postUrl)
    {
        var dataVal = id+'='+$("#"+id).val();
        
        var isaccepted = ''
        $('#'+id).next('span').remove();
        $("#check-"+id).show();
        $.ajax({
            url: postUrl,
            cache: false,
            type: 'post',
            dataType: 'json',
            data: dataVal,
            async:  false,
            success: function(data) {
                $("#check-"+id).hide();
                if( data.success === 'true' )
                {
                    isaccepted = false;
                }

                if( data.success === 'false' )
                {
                    isaccepted = true;
                }
                
            }
        });
        if (isaccepted === false) {
            
            
            return false;   
        } else{
            return true
        };
    }
    
    function showGrowl()
    {
        
        showNoty("<strong>Error:</strong> "+this.message+"!!");
        this.insertMessage( this.createMessageSpan() ); this.addFieldClass(); 
    }
    var trm_no = new LiveValidation('tmr_no',{validMessage: " ",onlyOnBlur: true, onInvalid : showGrowl  });
    trm_no.add( Validate.Presence,{failureMessage: 'TMR no can not be empty !'} );
    trm_no.add(Validate.Custom, { against: function() {
            return check_avail( 'tmr_no', '<?php echo site_url('filecontroller/ajax_check_avilable'); ?>' ); 
        }, failureMessage: 'TMR no already exists !' } );
    
    var rsd = new LiveValidation('rsd',{validMessage: " ",onlyOnBlur: true, onInvalid : showGrowl  });
    rsd.add( Validate.Presence,{failureMessage: 'RSD can not be empty !'} );
    
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

    var adv_vendor_amt_2 = new LiveValidation('adv_vendor_amt_2',{validMessage: " "});
    adv_vendor_amt_2.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_2_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
   
   
    var adv_vendor_amt_2_date = new LiveValidation('adv_vendor_amt_2_date',{validMessage: " "});
    adv_vendor_amt_2_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_2').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );

    var adv_vendor_amt_3 = new LiveValidation('adv_vendor_amt_3',{validMessage: " "});
    adv_vendor_amt_3.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_3_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
   
   
    var adv_vendor_amt_3_date = new LiveValidation('adv_vendor_amt_3_date',{validMessage: " "});
    adv_vendor_amt_3_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#adv_vendor_amt_3').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );



    var final_vendor_pay = new LiveValidation('final_vendor_pay',{validMessage: " "});
    final_vendor_pay.add(Validate.Custom, { against: function(value, args) {
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#final_vendor_pay_date').val()))
            {
                return false;
            }
            return true;
        },failureMessage : "You must also fill up the following date field !!"} );
   
   
   
    var final_vendor_pay_date = new LiveValidation('final_vendor_pay_date',{validMessage: " "});
    final_vendor_pay_date.add(Validate.Custom, { against: function(value, args) {
            
            if(Validate.now( Validate.Presence,value) && !Validate.now( Validate.Presence,$('#final_vendor_pay').val()))
            {
                return false;
            }
            return true;
            
        },failureMessage:"You must fill up the above amount field !"} );
    
       
    /*
     * Need further cleaning up following validation
     */
    /*
    var aaao = new LiveValidation('aaao',{OnlyOnBlur:true,validMessage: " ", onInvalid :showGrowl});
    aaao.add(Validate.Custom, { against: function(value, args) {
            if(new Date(value).getTime() < new Date($('#rsd').val()).getTime() ) 
                return false;
            else 
                return true;   
        },failureMessage:"AAAO shouldn't be Before than RSD; please check and try again !"} );
       
    var ald = new LiveValidation('ald',{OnlyOnBlur:true,validMessage: " ", onInvalid :showGrowl});
    ald.add(Validate.Custom, { against: function(value, args) {
            var ald_time = new Date(value).getTime();
            var rsd_time = new Date($('#rsd').val()).getTime();
            var aaao_time = new Date($('#aaao').val()).getTime();
            
            if( ald_time < rsd_time || ald_time < aaao_time  ) 
                return false;
            else 
                return true;   
        },failureMessage:"ALD shouldn't be Before than RSD/AAAO; Please check and try again !"} );   
    
    var rld = new LiveValidation('rld',{OnlyOnBlur:true,validMessage: " ", onInvalid :showGrowl});
    rld.add(Validate.Custom, { against: function(value, args) {
            if(new Date(value).getTime() < new Date($('#rsd').val()).getTime() ) 
                return false;
            else 
                return true;   
        },failureMessage:"RLD shouldn't be Before than RSD; please check and try again !"} );
    
    var rdd = new LiveValidation('rdd',{OnlyOnBlur:true,validMessage: " ", onInvalid :showGrowl});
    rdd.add(Validate.Custom, { against: function(value, args) {
            var ald_time = new Date(value).getTime();
            var rsd_time = new Date($('#rsd').val()).getTime();
            var aaao_time = new Date($('#rld').val()).getTime();
            
            if( ald_time < rsd_time || ald_time < aaao_time  ) 
                return false;
            else 
                return true;   
        },failureMessage:"ALD shouldn't be Before than RSD/RLD; Please check and try again !"} ); 
     */  
</script>

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>