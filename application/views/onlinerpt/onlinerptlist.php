<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>
<div class="container">
    <h2> List of Online reports </h2>
    <hr/>

    <div class="well">
        <ul >
            <li><a href="<?php echo site_url('rptman/daily_tmr_rpt_fule') ?>">Daily TMR Report Fuel</a></li>
            <li><a href="<?php echo site_url('rptman/daily_tmr_rpt_dry') ?>">Daily TMR Report Dry</a></li>
            <li><a href="<?php echo site_url('rptman/daily_tmr_rpt_heavy') ?>">Daily TMR Report Heavy</a></li>
            <li><a href="<?php echo site_url('rptman/total_mission_next_days_wrt_dist') ?>">Total Missions of next days w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/next_day_mission_by_dist_without_vendor') ?>">Total Missions of next days w.r.t. Distributor without Venders Assignment</a></li>
            <li><a href="<?php echo site_url('rptman/next_day_mission_by_dist_without_ITV') ?>">Total Missions of next days w.r.t. Distributor without ITVs Assignment</a></li>
            <li><a href="<?php echo site_url('rptman/rsd_met_wrt_dist') ?>">RSD Met w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/rsd_not_met_wrt_dist') ?>">RSD Not Met w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/itv_pinging_for_rsd_wrt_dist') ?>">ITV Pinging for RSD w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/itv_not_pinging_for_rsd_wrt_dist') ?>">ITV Not Pinging for RSD w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/itv_pinging_in_cooldown_wrt_dist') ?>">ITV Pinging inside the cool down w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/itv_pinging_not_in_cooldown_wrt_dist') ?>">ITV Not pinging inside cooldown w.r.t. Distributor</a></li>
            <li><a href="<?php echo site_url('rptman/total_mission_closed_itv_not_returned') ?>">Total Missions Closed and ITVs not returned</a></li>
            <li><a href="<?php echo site_url('rptman/total_mission_closed_waiting_mission_sheet_returned') ?>">Total Missions Closed waiting for Mission Sheet Return</a></li>
            <li><a href="<?php echo site_url('rptman/trucks_with_psc_pinging') ?>">Trucks with PSC Escort pinging on the way</a></li>
            <li><a href="<?php echo site_url('rptman/trucks_with_psc_not_pinging') ?>">Trucks with PSC Escort not pinging on the way</a></li>

            <li><a href="<?php echo site_url('rptman/total_active_mission_wrt_dist_suits') ?>">Total Active Missions w.r.t. Distributor & Suits</a></li>
        </ul>

    </div>

</div>



<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>