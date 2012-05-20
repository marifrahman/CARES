<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trm_model
 *
 * @author arifur.rahman
 */
class tmr_model extends CI_Model {

    function create($data) {
        $data['tmr_created_by'] = $this->dx_auth->get_user_id();
        $data['tmr_created'] = date('Y-m-d H:i:s', time());
        if($this->db->insert("usc_tmr", $data))
                return $this->db->insert_id();
        return false ;
    }
    
    function createAttachment($data)
    {
        //$data['tmr_created_by'] = $this->dx_auth->get_user_id();
        //$data['tmr_created'] = date('Y-m-d H:i:s', time());
        if($this->db->insert_batch("usc_tmr_attachments", $data))
                return $this->db->insert_id();
        return false ;
        
    }
    function loadAttachmentById($trnscn_id)
    {
        $query = $this->db->get_where('usc_tmr_attachments', array('trnscn_id' => $trnscn_id));
        if ($query->num_rows() > 0) {
            
            return $query->result_array();
        }
        return false;
    }
    
    function update($trnscn_id, $data) {
        $data['tmr_updated_by'] = $this->dx_auth->get_user_id();
        $this->db->where('trnscn_id', $trnscn_id);
        return $this->db->update('usc_tmr', $data);
    }

    function loadVendors() {
        $query = $this->db->get('vendor_info');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    
    function loadMissionStatusReason() {
        $query = $this->db->get('mission_status_reason');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadMissionStatusClient() {
        $query = $this->db->get('mission_status_client');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadMissionStatusUSC() {
        $query = $this->db->get('mission_status_usc');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadMissionStatusOPS() {
        $query = $this->db->get('mission_status_ops');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadCargoType() {
        $query = $this->db->get('type_of_cargo');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadTruckType() {
        $query = $this->db->get('type_of_truck');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadClientName() {
        $query = $this->db->get('client_name');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    function loadAll() {
        
    }

    //Function to load the datatables
    function dt_ajax_get_all() {


        $edit = "<a href=" . site_url('filecontroller/editTMR/$1') . " title='Edit'><i class='icon-edit'> </i></a>";
        $view = "<a href='#' title='View details'><i class='icon-check'> </i></a>"; //. site_url('filecontroller/viewTMR/$1') .
        $this->load->helper("formater");
        $this->datatables->select('tmr_no,gdms_no,remission_to_tmr,ping_status,rsd,mission_status_ops.status,container_no,driver_name,driver_tazkira,trnscn_id');
        $this->datatables->from('usc_tmr');
       
        $this->datatables->join('mission_status_ops', 'mission_status_ops.id = usc_tmr.mission_status_ops');
        //if ($this->dx_auth->is_admin()) {
        //    $this->datatables->add_column('', $edit . $delete, 'saf_id');
        //} else {
        $this->datatables->edit_column('trnscn_id', $edit.$view, 'trnscn_id');
        //}

        return $this->datatables->generate();
    }
 function check_tmr_no($tmr_no) {
        
        $this->db->select('1', FALSE);
        $this->db->where('tmr_no =', $tmr_no);
        $query = $this->db->get("usc_tmr");
        
        if ($query->num_rows() > 0)
            return true;
        return false;
    }
    function loadTRMbyId($trnsn_id) {

        $query = $this->db->get_where('usc_tmr', array('trnscn_id' => $trnsn_id));
        if ($query->num_rows() > 0) {
            //var_dump($query->result_array());die("");
            return $query->row_array();
        }
        return false;
    }
    
    function loadEmailbyId($trnsn_id)
    {
        
        $this->db->order_by("created", "desc");
        $query = $this->db->get_where('usc_tmr_email', array('trnscn_id' => $trnsn_id));
        if ($query->num_rows() > 0) {
            
            return $query->result_array();
        }
        return false;
    }
    function createNewEmail($data) {

        $data['created_by'] = $this->dx_auth->get_user_id();
        return $this->db->insert("usc_tmr_email", $data);
    }

}

?>
