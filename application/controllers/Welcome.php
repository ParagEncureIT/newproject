<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
	    parent::__construct();
	    $this->load->model('crud_model');
}


	public function index()
	{
		$data['data'] = $this->crud_model->get_data();
		$this->load->view('view',$data);
	}

	public function add()
	{
		$this->load->view('register');
	}

	public function add_action()
	{
		// echo "<pre>";
		// print_r($this->input->post());
		// Array
		// (
		//     [txtFullname] => Parag khambalkar
		//     [selGender] => Male
		//     [email] => keshavkirloskar12@gmail.com
		//     [password] => 123
		//     [selState] => maharashtra
		//     [selCity] => nagpur
		//     [selBranch] => science
		// )
		$add_array = array(
						'full_name'=> $this->input->post('txtFullname'),
						'gender'=> $this->input->post('selGender'),
						'email'=> $this->input->post('email'),
						'password'=> $this->input->post('password'),
						'state'=> $this->input->post('selState'),
						'city'=> $this->input->post('selCity'),
						'branch'=> $this->input->post('selBranch'),
						);
		$inserted_id = $this->crud_model->save_data($add_array);
		if($inserted_id>0){
			redirect('welcome/index');
		}
		else{
			redirect('welcome/add');
		}
	}

	public function edit(){
		 $page_id =$this->uri->segment(3);
		 $con = "id='".$page_id."'"; 
		 $select['select'] = $this->crud_model->select_data($con);
		 $this->load->view('update',$select);
	}

	public function update_action()
	{
		// echo "<pre>";
		// print_r($this->input->post());
		// Array
		// (
		//     [id] => 2
		//     [txtFullname] => Parag khambalkar
		//     [selGender] => Female
		//     [email] => keshavkirloskar12@gmail.com
		//     [password] => 321
		//     [selState] => karnataka
		//     [selCity] => mumbai
		//     [selBranch] => science
		// )
		$add_array = array(
						'full_name'=> $this->input->post('txtFullname'),
						'gender'=> $this->input->post('selGender'),
						'email'=> $this->input->post('email'),
						'password'=> $this->input->post('password'),
						'state'=> $this->input->post('selState'),
						'city'=> $this->input->post('selCity'),
						'branch'=> $this->input->post('selBranch'),
						);
		 $con = "id='".$this->input->post('id')."'"; 
		 $this->crud_model->update_data($add_array,$con);
		redirect('welcome/index');
		
		
	}

	public function delete(){
		 $page_id =$this->uri->segment(3);
		 $con = "id='".$page_id."'"; 
		 $select['select'] = $this->crud_model->delete_data($con);
		 redirect('welcome/index');
	}
}
