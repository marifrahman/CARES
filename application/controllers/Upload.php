<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author arifur.rahman
 */
class Upload extends CI_Controller {

    public function Upload() {
        parent::__construct();
        $this->load->helper('form', 'url');
    }

    public function index() {
        $this->load->view('uploadTest', array('error' => ''));
    }

    public function do_upload() {

        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = FCPATH . 'uploads/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '30000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('uploadTest', $error);
        } else {
            $data = $this->upload->data();
            /* 	
              // to re-size for thumbnail images un-comment and set path here and in json array
              $config = array(
              'source_image' => $data['full_path'],
              'new_image' => $this->$upload_path_url '/thumbs',
              'maintain_ration' => true,
              'width' => 80,
              'height' => 80
              );

              $this->load->library('image_lib', $config);
              $this->image_lib->resize();
             */
            //set the data for the json array	
            $info->name = $data['file_name'];
            $info->size = $data['file_size'];
            $info->type = $data['file_type'];
            $info->url = $upload_path_url . $data['file_name'];
            $info->thumbnail_url = $upload_path_url . $data['file_name']; //I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
            $info->delete_url = base_url() . 'upload/deleteImage/' . $data['file_name'];
            $info->delete_type = 'DELETE';


            if (IS_AJAX) {   //this is why we put this in the constants to pass only json data
                echo json_encode(array($info));
                //this has to be the only the only data returned or you will get an error.
                //if you don't give this a json array it will give you a Empty file upload result error
                //it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)
            } else {   // so that this will still work if javascript is not enabled
                $file_data['upload_data'] = $this->upload->data();
                $this->load->view('admin/upload_success', $file_data);
            }
        }
    }

    public function deleteImage($file) {//gets the job done but you might want to add error checking and security
        $success = unlink(FCPATH . 'uploads/' . $file);
        //info to see if it is doing what it is supposed to	
        $info->sucess = $success;
        $info->path = base_url() . 'uploads/' . $file;
        $info->file = is_file(FCPATH . 'uploads/' . $file);

        if (IS_AJAX) {//I don't think it matters if this is set but good for error checking in the console/firebug
            echo json_encode(array($info));
        } else {     //here you will need to decide what you want to show for a successful delete
            $file_data['delete_data'] = $file;
            $this->load->view('admin/delete_success', $file_data); 
        }
    }

}
