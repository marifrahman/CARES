<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of filecontroller
 *
 * @author arifur.rahman
 */
class filecontroller extends CI_Controller {

    function filecontroller() {
        parent::__construct();


        if (!$this->dx_auth->is_logged_in())
            redirect(site_url(), "");
    }

    function index() {

        $this->create();
    }

    public function do_upload($trnscn_id) {

        $imagedata = array();
        $config = array(
            'allowed_types' => 'jpg|jpeg|gif|png|pdf|doc|docx',
            'upload_path' => FCPATH . 'attachments/',
            'max_size' => 30000,
            'encrypt_name' => TRUE
        );

        //Upload-1       
        $this->load->library('upload', $config);
        if (!$this->upload->do_multi_upload("rsdfiles")) {
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);
        } else {

            $imagedata["rsd"] = $this->upload->multi_upload_data();
        }
        //Upload-2       
        $this->load->library('upload', $config);
        if (!$this->upload->do_multi_upload("onthewayfiles")) {
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);
        } else {

            $imagedata["ontheway"] = $this->upload->multi_upload_data();
        }
//Upload-3 
        $this->load->library('upload', $config);
        if (!$this->upload->do_multi_upload("rldfiles")) {
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);
        } else {

            $imagedata["rld"] = $this->upload->multi_upload_data();
        }
//Upload-4
        $this->load->library('upload', $config);
        if (!$this->upload->do_multi_upload("demfiles")) {
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);
        } else {

            $imagedata["dem"] = $this->upload->multi_upload_data();
        }
        // var_dump($imagedata);

        $finaldata = array();
        foreach ($imagedata as $key => $value) {

            foreach ($value as $img) {
                array_push($finaldata, array('trnscn_id' => $trnscn_id,
                    'attach_orig_name' => $img['orig_name'],
                    'attach_saved_name' => $img['file_name'],
                    'attach_type' => $key, 'created' => date('Y-m-d H:i:s', time()),
                    'created_by' => $this->dx_auth->get_user_id()
                        )
                );
            }
        }

        return $finaldata;
    }

    function _loadGeneralData() {
        $this->load->model('tmr_model');

        $data["vendors"] = $this->tmr_model->loadVendors();
        $data["all_mission_status_reasons"] = $this->tmr_model->loadMissionStatusReason();

        $data["all_mission_status_client"] = $this->tmr_model->loadMissionStatusClient();
        $data["all_mission_status_usc"] = $this->tmr_model->loadMissionStatusUSC();
        $data["all_mission_status_ops"] = $this->tmr_model->loadMissionStatusOPS();

        $data["all_type_of_cargo"] = $this->tmr_model->loadCargoType();
        $data["all_type_of_truck"] = $this->tmr_model->loadTruckType();
        $data["all_client_name"] = $this->tmr_model->loadClientName();

        return $data;
    }

    function create() {

        //$this->output->enable_profiler(TRUE);
        $returnmsg = '';
        $data = $this->_loadGeneralData();



        if ($this->input->post()) {

            $this->load->helper('date');
            $this->load->model('tmr_model');



            $tmr_data = array();
            foreach ($this->input->post() as $key => $value) {
                if ($key != "newemail") {

                    $tmr_data[$key] = $value;
                }
            }
            isset($tmr_data['rsd']) ? $tmr_data['rsd'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['rsd'])) : '';
            $tmr_data['aaao'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['aaao']));
            $tmr_data['aaad'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['aaad']));
            $tmr_data['ald'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['ald']));
            $tmr_data['ad_d'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['ad_d']));

            $trnscn_id = $this->tmr_model->create($tmr_data);


            if ($this->input->post("newemail") != "") {
                $tmr_email_data['email_msg'] = $this->input->post("newemail");
                $tmr_email_data['trnscn_id'] = $trnscn_id;
                $this->tmr_model->createNewEmail($tmr_email_data);
            }

            $attachments = $this->do_upload($trnscn_id);
            if ($attachments)
                $this->tmr_model->createAttachment($attachments);

            $data['successmsg'] = "Successfuly saved the TMR !";
        }



        $this->load->view("files/enterfile", $data);
    }

    function ShowallTMR() {

        //if ($this->dx_auth->is_role(array(4), FALSE, TRUE) || $this->dx_auth->is_admin()) {
        $data["msg"] = "";
        /* $this->load->model("recycledsafmodel");
          $data["saflist"] = $this->recycledsafmodel->loadallsubscriber();
          if (!$data["saflist"]) {
          $data["msg"] = "<div class=\"alert alert_orange\"><img height=\"24\" width=\"24\" src=\"" . base_url('assets/images/icons/small/white/Alert.png') . "\">
          <strong> Sorry, din find any SAF !!</strong>The list is empty !</div>";
          }
         */
        $this->load->view("files/alltmr", $data);
        // } else {
        //     redirect(site_url(), "");
        //}
    }

    //Datatables load with ajax call
    function load_ajax_alltmr() {
        $this->load->library("Datatables");
        //Datatables load with ajax call

        $this->load->model('tmr_model');
        echo $this->tmr_model->dt_ajax_get_all();
    }

    function check_tmr_no($tmr_no) {
        $this->load->model("tmr_model");
        return $this->tmr_model->check_tmr_no($tmr_no);
    }

    function ajax_check_avilable() {
        $validate = "";
        if ($this->input->post('tmr_no')) {
            $validate = $this->check_tmr_no($this->input->post('tmr_no'));
        }

        if ($validate === true) {
            $output = '{ "success": "true" }';
        } else {
            $output = '{ "success": "false" }';
        }
        //$output = $this->input->post("number");
        $output = str_replace("\r", "", $output);
        $output = str_replace("\n", "", $output);
        echo $output;
        //if(!$this->check_mob_no($mobile_no)) echo "notavailable";
    }

    function editTMR($trnscn_id) {

        $this->load->helper('formater');
        $this->load->helper('date');
        $this->load->model('tmr_model');

        $tmr_data = array();

        if ($this->input->post()) {
            if ($this->input->post('updatetrm')) {

                //$tmr_data = array();
                foreach ($this->input->post() as $key => $value) {
                    if ($key != "updatetrm") {

                        $tmr_data[$key] = $value;
                    }
                }
                isset($tmr_data['rsd']) ? $tmr_data['rsd'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['rsd'])) : '';
                isset($tmr_data['aaao']) ? $tmr_data['aaao'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['aaao'])) : '';
                isset($tmr_data['aaad']) ? $tmr_data['aaad'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['aaad'])) : '';
                isset($tmr_data['ald']) ? $tmr_data['ald'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['ald'])) : '';
                isset($tmr_data['ad_d']) ? $tmr_data['ad_d'] = mdate("%Y-%m-%d %H:%i", strtotime($tmr_data['ad_d'])) : '';

                //var_dump($tmr_data);
                
                //die("sdfsd");
                $this->tmr_model->update($trnscn_id, $tmr_data);
                $tmr_data['successmsg'] = "Successfuly updated the TMR !";
            } else if ($this->input->post('savenewemail')) {


                $tmr_email_data["email_msg"] = $this->input->post("newemail");
                $tmr_email_data["trnscn_id"] = $trnscn_id;
                $this->tmr_model->createNewEmail($tmr_email_data);
                $tmr_data = $this->tmr_model->loadTRMbyId($trnscn_id);

                $tmr_data["previousemail"] = "";
                $previousemaildata = $this->tmr_model->loadEmailbyId($trnscn_id);
                if ($previousemaildata) {
                    foreach ($previousemaildata as $emailmsg)
                        $tmr_data["previousemail"] .= $emailmsg["email_msg"] . "\n----------\n";
                }
                $tmr_data["attachments"] = $this->tmr_model->loadAttachmentById($trnscn_id);
                $tmr_data['successmsg'] = "Successfuly saved the new email conversation !";
                //var_dump($tmr_email);
                //die("sd");
            }
        }

        $tmr_data = array_merge($tmr_data,$this->_loadGeneralData());
        $tmr_main_data = $this->tmr_model->loadTRMbyId($trnscn_id);
        $tmr_data = array_merge($tmr_data, $tmr_main_data);
        //$tmr_data = $this->tmr_model->loadTRMbyId($trnscn_id);
        //var_dump($tmr_data); die();
        $tmr_data["previousemail"] = "";
        $previousemaildata = $this->tmr_model->loadEmailbyId($trnscn_id);
        if ($previousemaildata) {
            foreach ($previousemaildata as $emailmsg)
                $tmr_data["previousemail"] .= $emailmsg["email_msg"] . "\n----------\n";
        }

        $tmr_data["attachments"] = $this->tmr_model->loadAttachmentById($trnscn_id);




        $tmr_data['rsd'] = formatdate($tmr_data['rsd']);
        $tmr_data['aaao'] = formatdate($tmr_data['aaao']);
        $tmr_data['aaad'] = formatdate($tmr_data['aaad']);
        $tmr_data['ald'] = formatdate($tmr_data['ald']);
        $tmr_data['ad_d'] = formatdate($tmr_data['ad_d']);

        

        $this->load->view("files/edittmr", $tmr_data);
    }

}

?>
