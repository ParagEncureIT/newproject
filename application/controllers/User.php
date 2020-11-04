<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
	    parent::__construct();
	    $this->load->model('crud_model');
}

	function create(){
		$this->form_validation->set_rules('txtFullname','Name','required|min_length[5]|max_length[40]|callback_insert_name');
		$this->form_validation->set_message('insert_name', 'Please Enter Full Name');
		
		$this->form_validation->set_rules('selGender','Gender','required|callback_select_gender');
		$this->form_validation->set_message('select_gender', 'Please Select Your Gender');
		
		$this->form_validation->set_rules('email','Email','required|min_length[5]|callback_insert_email');
		$this->form_validation->set_message('insert_email', 'Please Enter Email ID');

		$this->form_validation->set_rules('password','Password','required|min_length[6]|max_length[8]|callback_insert_password');
		$this->form_validation->set_message('insert_password', 'Please Enter Password');

		$this->form_validation->set_rules('selState','State','required|callback_select_state');
		$this->form_validation->set_message('select_state', 'Please Select Your State');

		$this->form_validation->set_rules('selCity','City','required|callback_select_city');
		$this->form_validation->set_message('select_city', 'Please Select Your City');

		$this->form_validation->set_rules('selBranch','Branch','required|callback_select_branch');
		$this->form_validation->set_message('select_branch', 'Please Select Your Branch');


		if($this->form_validation->run()==FALSE){
			$this->load->view('register');
		}

	} 
	
}
