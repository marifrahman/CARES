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
class rptman_async extends CI_Controller {

    function rptman_async() {
        parent::__construct();

        if (!$this->input->is_ajax_request()) {
            show_error("No direct access allowed");
        } else {
            $this->load->library("Datatables");
        }
    }

    function trucks_waiting_for_upload() {

        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->trucks_waiting_for_upload();
    }

    function trucks_waiting_for_download() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->trucks_waiting_for_download();
    }

    function trucks_with_military_escort() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->trucks_with_military_escort();
    }

    function trucks_with_PSC_escort() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->trucks_with_PSC_escort();
    }

    function list_of_remission_without_memo() {
        //$this->output->enable_profiler(TRUE);
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->list_of_remission_without_memo();
    }

    function list_of_remission_with_memo() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->list_of_remission_with_memo();
    }

    function list_of_roundup_trips() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->list_of_roundup_trips();
    }

    function total_closed_mission() {
        
    }

    function next_day_mission_by_dist_without_driver() {
        
    }

    function next_day_mission_by_dist_without_ITV() {
        
    }

    function missions_sheets_rolled_over() {
        $this->load->model("rptmodels/rptmodel", "rptmodel");
        echo $this->rptmodel->missions_sheets_rolled_over();
    }

    function missions_sheets_not_turned_into_client() {
        $this->load->model("rptmodels/rptmodel","rptmodel");
        echo $this->rptmodel->missions_sheets_not_turned_into_client();
    }

    function missions_awaiting_usg_escort() {
        $this->load->model("rptmodels/rptmodel","rptmodel");
        echo $this->rptmodel->missions_awaiting_usg_escort();
    }

    function ardd_report() {
        $this->load->model("rptmodels/rptmodel","rptmodel");
        echo $this->rptmodel->ardd_report();
    }

    function container_report() {
        $this->load->model("rptmodels/rptmodel","rptmodel");
        echo $this->rptmodel->container_report();
    }

    function daily_collective_ping_report() {
        $this->load->model("rptmodels/rptmodel","rptmodel");
        echo $this->rptmodel->daily_collective_ping_report();
    }
    
    function dynamicrpt()
    {
        $this->load->model("rptmodels/rptmodel","rptmodel");
        echo $this->rptmodel->dynamicrpt();
    }
    

}

?>
