<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rptmodel
 *
 * @author arifur.rahman
 */
class rptmodel extends CI_Model {

    function rptmodel() {
        parent::__construct();
    }

    function trucks_waiting_for_upload() {

        $this->load->helper("formater");

        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('mission_status_reason', '4'); //AWAITING UPLOAD AT ORIGIN
        return $this->datatables->generate();
    }

    function trucks_waiting_for_download() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('mission_status_reason', '9');//Awaiting for Download at Destination

        return $this->datatables->generate();
    }

    function trucks_with_military_escort() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('escort', 'usg');

        return $this->datatables->generate();
    }

    function trucks_with_PSC_escort() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('escort', 'psc');

        return $this->datatables->generate();
    }

    function list_of_remission_without_memo() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,previous_tmr,remission_to_tmr,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->join('mission_status_ops','mission_status_ops.id=usc_tmr.mission_status_ops','left');
        $this->datatables->where('mission_status_ops', '4');
        $this->datatables->or_where('mission_status_ops', '5');
        //Illegal Remission – Memo/Remission Sheet Requested

        return $this->datatables->generate();
    }

    function list_of_remission_with_memo() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,previous_tmr,remission_to_tmr,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason,reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->join('mission_status_ops','mission_status_ops.id=usc_tmr.mission_status_ops','left');
        $this->datatables->where('mission_status_ops', '5');//Authorized Remission
        

        return $this->datatables->generate();
    }

    function list_of_roundup_trips() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,previous_tmr,remission_to_tmr,round_trip,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('round_trip', 'yes');

        return $this->datatables->generate();
    }

    //Rpt-8
    function total_closed_mission() {
        $query = $this->db->query("SELECT client_name.client_name , cargo_type ,count(case mission_status_client when '' then mission_status_client end) as unbilled,count(case mission_status_client when '3' then mission_status_client end) as closed,count(case mission_status_client when '2' then mission_status_client end) as cancelled_half,count(case mission_status_client when '1' then mission_status_client end) as cancelled,count(mission_status_client) as total FROM usc_tmr LEFT JOIN type_of_cargo on usc_tmr.type_of_cargo_id = type_of_cargo.id LEFT JOIN client_name on client_name.id = usc_tmr.client_name GROUP BY client_name, cargo_type");
        //$this->db->query("SELECT client_name as `Client Name`, type_of_cargo_id as `Type of Cargo`,count(case mission_status_client when '' then mission_status_client end) as Unbilled,count(case mission_status_client when 'closed' then mission_status_client end) as Closed,count(case mission_status_client when 'cancelled_half' then mission_status_client end) as Cancelled_Half,count(case mission_status_client when 'cancelled' then mission_status_client end) as Cancelled,count(mission_status_client) as Total FROM PivotTestTable GROUP BY CustName, type_of_cargo");    
        return $query->result_array();
    }

    //Rpt-9
    function next_day_mission_by_dist_without_vendor($dates) {
        $strQuery = "SELECT client_name.client_name as 'Client Name' ,";
        foreach ($dates as $date)
            $strQuery .= " count(case when rsd BETWEEN '$date 00:00:00' and '$date 23:59:59' then rsd end) as '" . mdate("%d-%M-%y", strtotime($date)) . "',";

        $strQuery = substr($strQuery, 0, -1);
        $strQuery .= " from usc_tmr LEFT JOIN client_name ON client_name.id = usc_tmr.client_name where vendor_name='' GROUP BY usc_tmr.client_name";//" count(rsd) as Total from usc_tmr where vendor_name='' GROUP BY client_name";
        //die($strQuery);
        $query = $this->db->query($strQuery);
        return $query->result_array();
    }

    //Rpt-10
    function next_day_mission_by_dist_without_ITV($dates) {
        $strQuery = "SELECT client_name.client_name as 'Client Name' ,";
        foreach ($dates as $date)
            $strQuery .= " count(case when rsd BETWEEN '$date 00:00:00' and '$date 23:59:59' then rsd end) as '" . mdate("%d-%M-%y", strtotime($date)) . "',";

        $strQuery = substr($strQuery, 0, -1);
        $strQuery .= " from usc_tmr LEFT JOIN client_name ON client_name.id = usc_tmr.client_name where gdms_no='' GROUP BY usc_tmr.client_name";
        //die($strQuery);
        $query = $this->db->query($strQuery);
        return $query->result_array();
    }

    //Rpt - Static-11
    function missions_sheets_rolled_over() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,escort,type_of_cargo.cargo_type,client_name.client_name,mission_status_ops.status,vendor_info.vendor_name,vendor_phone,prime_customer_remark,distributor_remark,usc_remark_1');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_ops','mission_status_ops.id=usc_tmr.mission_status_ops','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->join('vendor_info','vendor_info.vend_id=usc_tmr.vendor_name','left');
        $this->datatables->where('distributor_remark', 'Rolled Over');

        return $this->datatables->generate();
    }

    function missions_sheets_not_turned_into_client() {

        $this->load->helper("formater");
        $this->datatables->select("rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,escort,type_of_cargo.cargo_type,client_name.client_name,mission_status_ops.status,usc_remark_1");
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('mission_status_ops','mission_status_ops.id=usc_tmr.mission_status_ops','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('turned_to_client_date', NULL);

        return $this->datatables->generate();
    }

    function ardd_report() {

        $this->load->helper("formater");
        $this->datatables->select("rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,mission_status_reason.reason as mission_status_reason ,escort,rdd,client_name.client_name as client_name,usc_remark_2");
        //ardd = ALD+RDD-RLD+7
        $this->datatables->from('usc_tmr');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->where('escort', 'psc');
        $this->datatables->add_column('ardd', '$1', "calc_ardd(ald,rdd,rld)");


        return $this->datatables->generate();
    }

    function container_report() {

        $this->load->helper("formater");
        $this->datatables->select("rld,tmr_no,type_of_truck.truck_type,container_no,origin,destination,escort,type_of_cargo.cargo_type,client_name.client_name");

        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('type_of_truck','type_of_truck.id=usc_tmr.type_of_truck_id','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        
        $this->datatables->where('type_of_truck_id', 1); //20’ flatbed with container

        return $this->datatables->generate();
    }

    function daily_collective_ping_report() {

        $this->load->helper("formater");
        $this->datatables->select("tmr_no,gdms_no,origin,destination,escort,type_of_cargo.cargo_type,vendor_info.vendor_name,vendor_phone,mission_status_reason.reason,client_name.client_name,ping_status,ping_status_reason");
        
        $this->datatables->join('type_of_cargo','type_of_cargo.id=usc_tmr.type_of_cargo_id','left');
        $this->datatables->join('vendor_info','vendor_info.vend_id=usc_tmr.vendor_name','left');
        $this->datatables->join('client_name','client_name.id=usc_tmr.client_name','left');
        $this->datatables->join('mission_status_reason','mission_status_reason.id=usc_tmr.mission_status_reason','left');
        //$this->datatables->join('mission_status_ops','mission_status_ops.id=usc_tmr.mission_status_ops','left');
        $this->datatables->where("mission_status_ops NOT IN ('1','4','5','6') AND ping_status = 'not_pinging'");
        
        $this->datatables->from('usc_tmr');
        //$this->datatables->or_where(array('mission_status_ops' =>'1','mission_status_ops' =>'4','mission_status_ops' =>'5','mission_status_ops' =>'6'));
        
        return $this->datatables->generate();
    }

    function dynamicrpt() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,mission_status_reason,escort,type_of_cargo_id,client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->where('mission_status_reason', 'Awaiting for Download at Destination');

        return $this->datatables->generate();
    }

}

?>
