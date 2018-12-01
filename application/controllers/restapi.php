<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH.'/libraries/REST_Controller.php');
class Restapi extends CI_Controller
{

   function trainee_login()
    {

	    $data['msg'] = '';
	    $data['status'] = 'N';
	   
	    $this->load->model('trainee_model');			
		$status = $this->trainee_model->login($this->input->post('email'),$this->input->post('password'));	

	 	if($status){
				$data['msg'] = 'Found';
				$data['status'] = 'Y';
				$data['trainee'] = $this->session->userdata('traineeInfo');
		}

		print_r(json_encode($data));
    }

    function trainee_logout(){

    	$this->session->set_userdata('traineeInfo','');

		$this->session->unset_userdata('traineeInfo');

		if($this->session->userdata('traineeInfo') == ''){
			return true;
		}
		return false;
    }

    function trainee_profile(){

    	$this->session->set_userdata('traineeInfo','');

		$this->session->unset_userdata('traineeInfo');

		if($this->session->userdata('traineeInfo') == ''){
			return true;
		}
		return false;
    }
}