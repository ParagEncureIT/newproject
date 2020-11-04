<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

			function __construct() {
			    parent::__construct();
			    
		}


	function save_data($data){
		$query = $this->db->insert('tbl_register',$data);
		return ($this->db->insert_id());
	}

	function update_data($data,$conn){
		// echo "<pre>";
		// print_r($data);
		// exit;
		$this->db->set('full_name',$data['full_name']);
		$this->db->set('gender',$data['gender']);
		$this->db->set('email',$data['email']);
		$this->db->set('password',$data['password']);
		$this->db->set('state',$data['state']);
		$this->db->set('city',$data['city']);
		$this->db->set('branch',$data['branch']);
		$this->db->where($conn);
		$this->db->update('tbl_register');
	}

	function get_data(){
		$query = $this->db->query("SELECT * FROM `tbl_register`");
		return ($query->result());
	}

	function select_data($conn){
		$query = $this->db->query("SELECT * FROM `tbl_register` WHERE ".$conn." ");
		return ($query->result());
	}

	function delete_data($conn){
		$query = $this->db->query("DELETE FROM `tbl_register` WHERE ".$conn." ");
		return ($query->num_rows());
	}
}
