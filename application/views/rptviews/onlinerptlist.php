<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>
<div class="container">
    <h2> List of Online reports </h2>
    <hr/>

    <div class="well">
        <ul >
            <li><a href="<?php echo site_url('rptman/trucks_waiting_for_upload') ?>">Trucks waiting for upload</a></li>
            <li><a href="<?php echo site_url('rptman/trucks_waiting_for_download') ?>">Trucks waiting for download</a></li>
            <li><a href="<?php echo site_url('rptman/trucks_with_military_escort') ?>">Trucks with Military Escort</a></li>
            <li><a href="<?php echo site_url('rptman/trucks_with_PSC_escort') ?>">Trucks with PSC Escort</a></li>
            <li><a href="<?php echo site_url('rptman/list_of_remission_without_memo') ?>">List of Remission without Memo</a></li>
            <li><a href="<?php echo site_url('rptman/list_of_remission_with_memo') ?>">List of Remission with Memo</a></li>
            <li><a href="<?php echo site_url('rptman/list_of_roundup_trips') ?>">List of Round Up Trips</a></li>
            <li><a href="<?php echo site_url('rptman/total_closed_mission') ?>">Total Closed Mission</a></li>
            <li><a href="<?php echo site_url('rptman/next_day_mission_by_dist_without_vendor') ?>">Total Missions of next days by Distributor without Vendor Assignment</a></li>
            <li><a href="<?php echo site_url('rptman/next_day_mission_by_dist_without_ITV') ?>">Total Missions of next days by Distributor without ITV Assignment</a></li>
            <li><a href="<?php echo site_url('rptman/missions_sheets_rolled_over') ?>">Mission Sheets Rolled Over</a></li>
            <li><a href="<?php echo site_url('rptman/missions_sheets_not_turned_into_client') ?>">Mission Sheets not Tunred in to Client</a></li>
            <li><a href="<?php echo site_url('rptman/missions_awaiting_usg_escort') ?>">Missions Awaiting USG Escort</a></li>
            <li><a href="<?php echo site_url('rptman/ardd_report') ?>">ARDD Report</a></li>
            <li><a href="<?php echo site_url('rptman/container_report') ?>">Container Report</a></li>
            <li><a href="<?php echo site_url('rptman/daily_collective_ping_report') ?>">Daily Collective Ping Report</a></li>

        </ul>

    </div>

</div>



<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>