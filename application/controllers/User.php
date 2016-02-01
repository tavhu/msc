<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function index(){

		$this->load->library('myencryption');
		$this->load->helper('inflector');
		$this->load->view('Header');
		$this->load->view('manage_profile_view');
		$this->load->view('Footer');

	}

	function update_validation(){

		$this->load->library('myencryption');
		$this->load->library('form_validation');
		$this->load->helper('inflector');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','valid_email');	
		$this->form_validation->set_error_delimiters("<div class=' alert alert-danger' id='showmessage' style='margin-bottom:5px'><span>","&nbsp&nbsp&nbsp&nbsp&nbsp </span><i class='fa  fa-times fa-lg closeicon' id='closeicon'></i></div> ");
		$password = $this->input->post('currentpassword');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$newpass = $this->input->post('password');// new password

		if ($newpass != "") {

			$this->form_validation->set_rules('password', 'Password Confirmation', 'required');
			$this->form_validation->set_rules('password_confirm','New Password','trim|required|matches[password]');
			$this->form_validation->set_message('matches','New password and confirm password does not matches');
		}
		
		if ($this->form_validation->run() == false) {
				
				$this->load->view('Header');
				$this->load->view('manage_profile_view');
			    $this->load->view('Footer');
		}else{

					
			$value = $this->session->userdata('user_id');
			
			$encrypted_password = $this->myencryption->encode((trim($newpass)));
			$encrypted_username = $this->myencryption->encode((trim($username)));
			$update_data = null;
			$result = null;
				if ($password != "") {

					$encrypted_oldpassword = $this->myencryption->encode(trim($password));
					$update_data = array('username'=>$encrypted_username,'password'=>$encrypted_password,'email_address'=>$email);
					$result = $this->db->get_where('user',array('password'=>$encrypted_oldpassword,'id'=>$value));
			
				}else{

					$update_data = array('username'=>$encrypted_username,'email_address'=>$email);
					$result = $this->db->get_where('user',array('id'=>$value));
				}
			

				if ($result->num_rows() == 1) {

					$row = $result->row();		
					$clean_data  = $this->security->xss_clean($update_data);

					$this->db->where('id',$row->id);
					$this->db->update('user',$clean_data);

					$arr['message']= "<div class=' alert alert-success' id='showmessage' style='margin-bottom:5px'><span> Successfully updated &nbsp&nbsp&nbsp&nbsp&nbsp </span><i class='fa  fa-times fa-lg closeicon' id='closeicon'></i></div> ";
					$this->load->view('Header');
					$this->load->view('manage_profile_view',$arr);
					$this->load->view('Footer');
				}else{
					
					$arr['message']= "<div class=' alert alert-danger' id='showmessage' style='margin-bottom:5px'><span> Current Password is does not correct! &nbsp&nbsp&nbsp&nbsp&nbsp </span><i class='fa  fa-times fa-lg closeicon' id='closeicon'></i></div> ";
					$this->load->view('Header');
					$this->load->view('manage_profile_view',$arr);
					$this->load->view('Footer');
				}

		}
	}	
	function logout(){
		$arr = array('user'=>false);
		$cookie = "";
		$this->input->set_cookie($cookie);
			         $cookie = array(
			           'name'   => 'remember_me',
			           'value'  => 'false',
			           'expire' => '15000000',
			           'prefix' => ''
			        );
		$this->input->set_cookie($cookie);
		$this->session->sess_destroy();	
		redirect('home');
	}
}