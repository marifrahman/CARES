<header class="jumbotron subhead" id="overview">


    <div class="subnav">
        <ul class="nav nav-pills">

            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Missions <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('filecontroller/create'); ?>">Create new mission</a></li>
                    <li><a href="<?php echo site_url('filecontroller/ShowallTMR'); ?>">List of missions</a></li>
                </ul>
            </li>
            <?php if ($this->dx_auth->is_admin()) { ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage users <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('auth/createUser'); ?>">Create new user</a></li>
                        <li><a href="<?php echo site_url('backend/users'); ?>">List of all user</a></li>
                    </ul>
                </li>
            <?php } ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown submenu"><a href="#">Static reports</a>
                        <ul class="dropdown-menu submenu-show submenu-hide">
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
                    </li>
                    <li  class="dropdown submenu"><a href="<?php echo site_url('rptman/onlineReports'); ?>">Online reports</a>
                        <ul class="dropdown-menu submenu-show submenu-hide">
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

                    </li>
                    <li  class="dropdown ">
                        <a href="<?php echo site_url('rptman/dynamicReport'); ?>">Dynamic report</a>
                    </li>


                </ul>
            </li>
            <?php if ($this->dx_auth->is_admin()) { ?>
                <li><a href="#">Setting</a>


                </li>
            <?php } ?>


        </ul>
    </div>

</header>