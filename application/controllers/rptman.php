<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rptman
 *
 * @author arifur.rahman
 */
class rptman extends CI_Controller {

    function rptman() {
        parent::__construct();

        if (!$this->dx_auth->is_logged_in())
            redirect(site_url(), "");
    }

    function trucks_waiting_for_upload() {


        /* if ($this->input->is_ajax_request()) {
          $this->load->model("rptmodels/rptmodel");

          $this->load->library("Datatables");
          //Datatables load with ajax call

          $this->load->model('tmr_model');
          echo $this->tmr_model->dt_ajax_get_all();
          } else { */
        $this->load->view("rptviews/trucks_waiting_for_upload");
        //}
    }

    function trucks_waiting_for_download() {
        $this->load->view("rptviews/trucks_waiting_for_download");
    }

    function trucks_with_military_escort() {
        $this->load->view("rptviews/trucks_with_military_escort");
    }

    function trucks_with_PSC_escort() {
        $this->load->view("rptviews/trucks_with_PSC_escort");
    }

    function list_of_remission_without_memo() {
        $this->load->view("rptviews/list_of_remission_without_memo");
    }

    function list_of_remission_with_memo() {
        $this->load->view("rptviews/list_of_remission_with_memo");
    }

    function list_of_roundup_trips() {
        $this->load->view("rptviews/list_of_roundup_trips");
    }

    function total_closed_mission() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->total_closed_mission();

        $this->load->view("rptviews/total_closed_mission", $data);
    }

    function getDateRangeArray($strDateFrom, $strDateTo) {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.
        // could test validity of dates here but I'm already doing
        // that in the main script

        $aryRange = array();

        $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
        $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

        if ($iDateTo >= $iDateFrom) {
            array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry

            while ($iDateFrom < $iDateTo) {
                $iDateFrom+=86400; // add 24 hours
                array_push($aryRange, date('Y-m-d', $iDateFrom));
            }
        }
        return $aryRange;
    }

    function next_day_mission_by_dist_without_vendor() {
        $data = "";
        if ($this->input->post()) {
            $this->load->helper('date');
            $dateFrom = mdate("%Y-%m-%d", strtotime($this->input->post("dateFrom")));
            $dateTo = mdate("%Y-%m-%d", strtotime($this->input->post("dateTo")));

            $dates = $this->getDateRangeArray($dateFrom, $dateTo);

            $this->load->model("rptmodels/rptmodel", "rptmodel");
            $data["missiondata"] = $this->rptmodel->next_day_mission_by_dist_without_vendor($dates);
            //var_dump($data["missiondata"]); die('dsf');
        }
        $this->load->view("rptviews/next_day_mission_by_dist_without_vendor", $data);
    }

    function next_day_mission_by_dist_without_ITV() {
        $data = "";
        if ($this->input->post()) {
            $this->load->helper('date');
            $dateFrom = mdate("%Y-%m-%d", strtotime($this->input->post("dateFrom")));
            $dateTo = mdate("%Y-%m-%d", strtotime($this->input->post("dateTo")));

            $dates = $this->getDateRangeArray($dateFrom, $dateTo);

            $this->load->model("rptmodels/rptmodel", "rptmodel");
            $data["missiondata"] = $this->rptmodel->next_day_mission_by_dist_without_ITV($dates);
            //var_dump($data["missiondata"]); die('dsf');
        }
        $this->load->view("rptviews/next_day_mission_by_dist_without_ITV", $data);
    }

    function missions_sheets_rolled_over() {
        $this->load->view("rptviews/missions_sheets_rolled_over");
    }

    function missions_sheets_not_turned_into_client() {
        $this->load->view("rptviews/missions_sheets_not_turned_into_client");
    }

    function missions_awaiting_usg_escort() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->missions_awaiting_usg_escort();

        $this->load->view("rptviews/missions_awaiting_usg_escort", $data);
    }

    function ardd_report() {
        $this->load->view("rptviews/ardd_report");
    }

    function container_report() {
        $this->load->view("rptviews/container_report");
    }

    function daily_collective_ping_report() {
        $this->load->view("rptviews/daily_collective_ping_report");
    }

    /* Online reports */

    function onlineReports() {
        $this->load->view("onlinerpt/onlinerptlist");
    }

    function daily_tmr_rpt_fule() {
        $this->load->view("onlinerpt/daily_tmr_rpt_fule");
    }

    function daily_tmr_rpt_dry() {
        $this->load->view("onlinerpt/daily_tmr_rpt_dry");
    }

    function daily_tmr_rpt_heavy() {
        $this->load->view("onlinerpt/daily_tmr_rpt_heavy");
    }

    function total_mission_next_days_wrt_dist() {
        $data = "";
        if ($this->input->post()) {
            $this->load->helper('date');
            $dateFrom = mdate("%Y-%m-%d", strtotime($this->input->post("dateFrom")));
            $dateTo = mdate("%Y-%m-%d", strtotime($this->input->post("dateTo")));

            $dates = $this->getDateRangeArray($dateFrom, $dateTo);

            $this->load->model("rptmodels/rptmodel", "rptmodel");
            $data["missiondata"] = $this->rptmodel->total_mission_next_days_wrt_dist($dates);
            //var_dump($data["missiondata"]); die('dsf');
        }

        $this->load->view("onlinerpt/total_mission_next_days_wrt_dist", $data);
    }

    //Online -7
    function rsd_met_wrt_dist() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->rsd_met_wrt_dist("WHERE rsd_status='met'");

        $this->load->view("onlinerpt/rsd_met_wrt_dist", $data);
    }

    //Online -8
    function rsd_not_met_wrt_dist() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->rsd_met_wrt_dist("WHERE rsd_status='not_met'");

        $this->load->view("onlinerpt/rsd_not_met_wrt_dist", $data);
    }

    //Online -9
    function itv_pinging_for_rsd_wrt_dist() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->rsd_met_wrt_dist("WHERE ping_status='pinging'");

        $this->load->view("onlinerpt/itv_pinging_for_rsd_wrt_dist", $data);
    }

    //Online -10
    function itv_not_pinging_for_rsd_wrt_dist() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->rsd_met_wrt_dist("WHERE ping_status='not_pinging'");

        $this->load->view("onlinerpt/itv_not_pinging_for_rsd_wrt_dist", $data);
    }

    //Online -11
    function itv_pinging_in_cooldown_wrt_dist() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->rsd_met_wrt_dist("WHERE ping_status='pinging' AND cooldown_status = 'inside_cooldown'");

        $this->load->view("onlinerpt/itv_pinging_in_cooldown_wrt_dist", $data);
    }

    //Online -12
    function itv_pinging_not_in_cooldown_wrt_dist() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->rsd_met_wrt_dist("WHERE ping_status='not_pinging' AND cooldown_status = 'inside_cooldown'");

        $this->load->view("onlinerpt/itv_pinging_not_in_cooldown_wrt_dist", $data);
    }

    //Online -13
    function total_mission_closed_itv_not_returned() {
        $this->load->view("onlinerpt/total_mission_closed_itv_not_returned");
    }

    //Online -14
    function total_mission_closed_waiting_mission_sheet_returned() {
        $this->load->view("onlinerpt/total_mission_closed_waiting_mission_sheet_returned");
    }

    //Online -15
    function trucks_with_psc_pinging() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->trucks_with_psc_pinging("ping_status = 'pinging'");

        $this->load->view("onlinerpt/trucks_with_psc_pinging", $data);
    }

    function trucks_with_psc_not_pinging() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["clossed_mission_data"] = $this->rptmodel->trucks_with_psc_pinging("ping_status = 'not_pinging'");

        $this->load->view("onlinerpt/trucks_with_psc_not_pinging", $data);
    }
    
    function total_active_mission_wrt_dist_suits() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        $data["missiondata"] = $this->rptmodel->total_active_mission_wrt_dist_suits();

        $this->load->view("onlinerpt/total_active_mission_wrt_dist_suits", $data);
    }
    
    

    /* Dynamic reports */

    function dynamicReport() {
        $this->load->view("rptviews/dynamicrpt");
    }

}

?>
