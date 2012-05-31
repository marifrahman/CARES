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
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where('mission_status_reason', '4'); //AWAITING UPLOAD AT ORIGIN
        return $this->datatables->generate();
    }

    function trucks_waiting_for_download() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where('mission_status_reason', '9'); //Awaiting for Download at Destination

        return $this->datatables->generate();
    }

    function trucks_with_military_escort() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where('escort', 'usg');

        return $this->datatables->generate();
    }

    function trucks_with_PSC_escort() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where('escort', 'psc');

        return $this->datatables->generate();
    }

    function list_of_remission_without_memo() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,previous_tmr,remission_to_tmr,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_ops.status,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->where('mission_status_ops', '4');
        $this->datatables->or_where('mission_status_ops', '5');
        //Illegal Remission – Memo/Remission Sheet Requested

        return $this->datatables->generate();
    }

    function list_of_remission_with_memo() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,previous_tmr,remission_to_tmr,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_ops.status,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->where('mission_status_ops', '5'); //Authorized Remission


        return $this->datatables->generate();
    }

    function list_of_roundup_trips() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,previous_tmr,remission_to_tmr,round_trip,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
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
        $strQuery .= " from usc_tmr LEFT JOIN client_name ON client_name.id = usc_tmr.client_name where vendor_name='' GROUP BY usc_tmr.client_name"; //" count(rsd) as Total from usc_tmr where vendor_name='' GROUP BY client_name";
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
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('vendor_info', 'vendor_info.vend_id=usc_tmr.vendor_name', 'left');
        $this->datatables->where('distributor_remark', 'Rolled Over');

        return $this->datatables->generate();
    }

    //Rpt - Static-12
    function missions_sheets_not_turned_into_client() {

        $this->load->helper("formater");
        $this->datatables->select("rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,escort,
                                   type_of_cargo.cargo_type,client_name.client_name,mission_status_ops.status,usc_remark_1, usc_remark_2");
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where('turned_to_client_date', NULL);

        return $this->datatables->generate();
    }

    //Rpt - Static-13 
    function missions_awaiting_usg_escort() {

        $query = $this->db->query("SELECT   client_name.client_name,
         escort,
         SUM(mission_status_reason = 4)        AS awaiting_upload_at_origin,
         SUM(mission_status_reason = 6)        AS awaiting_military_escort,
         SUM(mission_status_reason = 3)        AS enrouted_to_destination,
         SUM(mission_status_reason = 9)        AS awaiting_download,
         SUM(mission_status_reason IN (3,6,9)) AS total
         FROM     usc_tmr LEFT JOIN client_name ON client_name.id = usc_tmr.client_name
         WHERE    escort = 'usg' AND mission_status_ops IN (1,4,5,6)
         GROUP BY client_name");
        //$this->db->query("SELECT client_name as `Client Name`, type_of_cargo_id as `Type of Cargo`,count(case mission_status_client when '' then mission_status_client end) as Unbilled,count(case mission_status_client when 'closed' then mission_status_client end) as Closed,count(case mission_status_client when 'cancelled_half' then mission_status_client end) as Cancelled_Half,count(case mission_status_client when 'cancelled' then mission_status_client end) as Cancelled,count(mission_status_client) as Total FROM PivotTestTable GROUP BY CustName, type_of_cargo");    
        return $query->result_array();
    }

    function ardd_report() {

        $this->load->helper("formater");
        $this->datatables->select("rld,tmr_no,gdms_no,origin,destination,
                                   aaao,aaad,ald,mission_status_reason.reason as mission_status_reason ,
                                   escort,rdd,client_name.client_name as client_name,ping_status,usc_remark_2");
        //ardd = ALD+RDD-RLD+7
        $this->datatables->from('usc_tmr');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where('escort', 'psc');
        $this->datatables->add_column('ardd', '$1', "calc_ardd(ald,rdd,rld)");


        return $this->datatables->generate();
    }

    function container_report() {

        $this->load->helper("formater");
        $this->datatables->select("rld,tmr_no,type_of_truck.truck_type,
                                   container_no,origin,destination,escort,type_of_cargo.cargo_type,client_name.client_name");
        $this->datatables->from('usc_tmr');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('type_of_truck', 'type_of_truck.id=usc_tmr.type_of_truck_id', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->where("type_of_truck_id IN ('2','7','8','9','11')"); 
        $this->datatables->where("container_no != '' "); 
        return $this->datatables->generate();
    }

    function daily_collective_ping_report() {

        $this->load->helper("formater");
        $this->datatables->select("tmr_no,gdms_no,origin,destination,escort,type_of_cargo.cargo_type,vendor_info.vendor_name,vendor_phone,mission_status_reason.reason,client_name.client_name,ping_status,ping_status_reason");

        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->join('vendor_info', 'vendor_info.vend_id=usc_tmr.vendor_name', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        //$this->datatables->join('mission_status_ops','mission_status_ops.id=usc_tmr.mission_status_ops','left');
        $this->datatables->where("mission_status_ops NOT IN ('2','3') AND ping_status = 'not_pinging'");

        $this->datatables->from('usc_tmr');
        //$this->datatables->or_where(array('mission_status_ops' =>'1','mission_status_ops' =>'4','mission_status_ops' =>'5','mission_status_ops' =>'6'));

        return $this->datatables->generate();
    }

    /* Online Reports */

    function daily_tmr_rpt_fule() {
        $this->load->helper("formater");

        $this->datatables->select('tmr_no,rsd,client_name.client_name,origin,destination,ald,mission_status_ops.status,escort,seal_no,fuel_qty_up,fuel_type,(fuel_qty_dw_1 + fuel_qty_dw_2 + fuel_qty_dw_3 + fuel_qty_dw_4) as fuel_qty_dw,ad_d, final_shrtg_calc,driver_name,truck_no,driver_tazkira,gdms_no,current_location,mission_status_reason.reason,usc_remark_2,type_of_cargo.cargo_type ');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        //$this->datatables->where('mission_status_reason', '4'); //AWAITING UPLOAD AT ORIGIN
        return $this->datatables->generate();
    }

    function daily_tmr_rpt_dry() {
        $this->load->helper("formater");

        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name ');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        //$this->datatables->where('mission_status_reason', '4'); //AWAITING UPLOAD AT ORIGIN
        return $this->datatables->generate();
    }

    function daily_tmr_rpt_heavy() {
        $this->load->helper("formater");

        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,mission_status_reason.reason,escort,type_of_cargo.cargo_type,client_name.client_name ');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('mission_status_reason', 'mission_status_reason.id=usc_tmr.mission_status_reason', 'left');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        //$this->datatables->where("'mission_status_reason' IN ('1','2','3','4','5','6','7')"); //AWAITING UPLOAD AT ORIGIN
        return $this->datatables->generate();
    }

    function total_mission_next_days_wrt_dist($dates) {
        $strQuery = "SELECT client_name.client_name as 'Client Name' ,";
        foreach ($dates as $date)
            $strQuery .= " count(case when rsd BETWEEN '$date 00:00:00' and '$date 23:59:59' then rsd end) as '" . mdate("%d-%M-%y", strtotime($date)) . "',";

        $strQuery = substr($strQuery, 0, -1);
        $strQuery .= " from usc_tmr LEFT JOIN client_name ON client_name.id = usc_tmr.client_name GROUP BY usc_tmr.client_name"; //" count(rsd) as Total from usc_tmr where vendor_name='' GROUP BY client_name";
        //die($strQuery);
        $query = $this->db->query($strQuery);
        return $query->result_array();
    }

    function rsd_met_wrt_dist($where_clause) {
        $this->load->helper('date');
        $today = mdate("%Y-%m-%d");

        $query = $this->db->query("SELECT client_name.client_name as client_name ,
                                count(*) as rsd_today,
                                count(case ping_status when 'pinging' then ping_status end) as itv_pinging,
                                count(case ping_status when 'not_pinging' then ping_status end) as itv_not_pinging, 
                                count(case cooldown_status when 'inside_cooldown' then cooldown_status end) as in_cooldown,
                                count(case cooldown_status when 'away_cooldown' then cooldown_status end) as not_in_cooldown, 
                                count(case rsd_status when 'met' then rsd_status end) as rsd_met,  
                                count(case rsd_status when 'not_met' then rsd_status end) as rsd_not_met  
                                FROM usc_tmr LEFT JOIN client_name on client_name.id = usc_tmr.client_name
                                $where_clause
                                GROUP BY client_name");
        //$this->db->query("SELECT client_name as `Client Name`, type_of_cargo_id as `Type of Cargo`,count(case mission_status_client when '' then mission_status_client end) as Unbilled,count(case mission_status_client when 'closed' then mission_status_client end) as Closed,count(case mission_status_client when 'cancelled_half' then mission_status_client end) as Cancelled_Half,count(case mission_status_client when 'cancelled' then mission_status_client end) as Cancelled,count(mission_status_client) as Total FROM PivotTestTable GROUP BY CustName, type_of_cargo");    
        return $query->result_array();
    }

    function total_mission_closed_itv_not_returned() {
        $this->load->helper("formater");

        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,escort,type_of_cargo.cargo_type,client_name.client_name,mission_status_ops.status,vendor_info.vendor_name,vendor_phone ');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('vendor_info', 'vendor_info.vend_id=usc_tmr.vendor_name', 'left');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->where('itv_return_status', 'not_returned');
        return $this->datatables->generate();
    }

    function total_mission_closed_waiting_mission_sheet_returned() {
        $this->load->helper("formater");

        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,ad_d,escort,type_of_cargo.cargo_type,client_name.client_name,mission_status_ops.status,vendor_info.vendor_name,vendor_phone ');
        $this->datatables->from('usc_tmr');
        $this->datatables->join('client_name', 'client_name.id=usc_tmr.client_name', 'left');
        $this->datatables->join('vendor_info', 'vendor_info.vend_id=usc_tmr.vendor_name', 'left');
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id=usc_tmr.mission_status_ops', 'left');
        $this->datatables->join('type_of_cargo', 'type_of_cargo.id=usc_tmr.type_of_cargo_id', 'left');
        $this->datatables->where("mission_status_ops IN ('2','3')");
        $this->datatables->where("m_sheet_trun_distributor", "''");
        return $this->datatables->generate();
    }

    function trucks_with_psc_pinging($where_ping_status) {
        $query = $this->db->query("SELECT   client_name.client_name,
         escort,
         SUM(mission_status_reason = '4' && ping_status = 'pinging')       AS pinging_awaiting_upload_at_origin,
         SUM(mission_status_reason = '4' && ping_status = 'not_pinging')   AS not_pinging_awaiting_upload_at_origin,
         SUM(mission_status_reason = '7' && ping_status = 'pinging')       AS pinging_waiting_local_escort,
         SUM(mission_status_reason = '7' && ping_status = 'not_pinging')   AS not_pinging_waiting_local_escort,
         SUM(mission_status_reason = '8' && ping_status = 'pinging')       AS pinging_enrouted_dest,
         SUM(mission_status_reason = '8' && ping_status = 'not_pinging')   AS not_pinging_enrouted_dest,
         SUM(mission_status_reason = '9' && ping_status = 'pinging')       AS pinging_awaiting_down,
         SUM(mission_status_reason = '9' && ping_status = 'not_pinging')   AS not_pinging_awaiting_down,
         SUM(mission_status_reason IN ('4','7','8','9'))                   AS total
         FROM     usc_tmr LEFT JOIN client_name ON client_name.id = usc_tmr.client_name
         WHERE    escort = 'psc' AND $where_ping_status
         GROUP BY client_name");

        return $query->result_array();
    }

    function total_active_mission_wrt_dist_suits() {
        $query_1 = $this->db->get('type_of_cargo');
        $cargos = $query_1->result();
        
        //var_dump($cargos);
        
        $queryStr = "SELECT client_name.client_name AS 'Client Name'";
        foreach ($cargos as $cargo) {
            $queryStr .= ", SUM(usc_tmr.type_of_cargo_id = '$cargo->id') AS '$cargo->cargo_type' ";
        }
        var_dump($cargo->id);
        die();
        $queryStr .= "FROM usc_tmr 
                    LEFT JOIN client_name on client_name.id = usc_tmr.client_name 
                    GROUP BY usc_tmr.client_name";
        
        //die($queryStr);
        
        $query = $this->db->query($queryStr);
        return $query->result_array();
    }

    /* Dynamic reports */

    function dynamicrpt() {

        $this->load->helper("formater");
        $this->datatables->select('rld,tmr_no,gdms_no,origin,destination,aaao,aaad,ald,mission_status_reason,escort,type_of_cargo_id,client_name');
        $this->datatables->from('usc_tmr');
        $this->datatables->where('mission_status_reason', 'Awaiting for Download at Destination');

        return $this->datatables->generate();
    }

}

?>
