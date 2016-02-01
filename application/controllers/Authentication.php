<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	function index(){

		$value = $this->input->cookie('remember_me');
		if ($value == 'true') {
			$arr = array(
				   'user' => $this->input->cookie('user'),
				   'real_name' => $this->input->cookie('real_name'),
				   'user_id' => $this->input->cookie('user_id'),
				);	
			$this->session->set_userdata($arr);	
			
		}		
		$this->load->view('login_view');

	}

	function create_user(){

		$this->load->library('myencryption');
		$arr = array('username'=>$this->myencryption->encode('admin'),
					 'password'=>$this->myencryption->encode('123'));
		$this->db->insert('user',$arr);
	}

	function resetPassword(){

		$this->load->library('myencryption');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('resetmail','Reset email','valid_email');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');

		if ($this->form_validation->run() == false) {			
			$this->load->view('login_view');
		}else{
			$mail = $this->input->post('resetmail');			
			$this->db->where('email_address',trim(strtolower($mail)));
			$result = $this->db->get('user');
			if ($result->num_rows() == 1 ){

				function get_random_password($chars_min=8, $chars_max=10, $use_upper_case=true, $include_numbers=true, $include_special_chars=false){
			        $length = rand($chars_min, $chars_max);
			        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
			        if($include_numbers) {
			            $selection .= "1234567890";
			        }
			        if($include_special_chars) {
			            $selection .= "!@\"#$%&[]{}?|";
			        }

			        $password = "";
			        for($i=0; $i<$length; $i++) {
			            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
			            $password .=  $current_letter;
			        }                

			      return $password;
			    }
				 
			    $newpass =  get_random_password();
			    $this->db->where('email_address',trim(strtolower($mail)));
			    $newpass1 = $this->myencryption->encode($newpass);
			    $this->db->update('user',array('password'=>$newpass1));
			    if ($this->db->affected_rows() == 1){
			    		$config = Array(						  
						    'protocol' => 'smtp',
						    'smtp_host' => 'ssl://smtp.gmail.com',
						    'smtp_port' => 465,
						    'smtp_user' => 'thythona168@gmail.com',
						    'smtp_pass' => 'Broskomsot123',
						    'mailtype'  => 'html', 
						    'charset'   => 'iso-8859-1'
						
						);
						$this->load->library('email',$config);
						$this->email->set_newline("\r\n");
						// Set to, from, message, etc.
						$this->email->from('thythona168@gmail.com', 'Rest password MSC');		
						$this->email->to($mail);
						$this->email->subject('New Password');
						$this->email->message('Your New Password is : '.$newpass);	

						if (! $this->email->send()) {
							$arr['message'] = '<div class="alert alert-warning" style="text-align:left">Reset password failed. please try again later.</div>';
							$this->load->view('login_view',$arr);
						}else{
							$arr['message'] = '<div class="alert alert-success" style="text-align:left">Reset password successful. Please check your email for the new password</div>';
							$this->load->view('login_view',$arr);
						}
			    }
			}else{
				$arr['message'] = '<div class="alert alert-warning">Given reset email dose not exist!</div>';
				$this->load->view('login_view',$arr);
			}
		}


	}

	function validation(){

		$this->load->library('myencryption');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');
		
		if ($this->form_validation->run() == false ) {
			$this->load->view('login_view');
		}else{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$rememberme = $this->input->post('rememberme');
		$this->db->where('username',$this->myencryption->encode($username));
		$this->db->where('password',$this->myencryption->encode($password));
		$result = $this->db->get('user');				
			if ($result->num_rows()==1) {
				$value = $result->row();
				
				if ($rememberme == 'on'){
					$arr = array('user'=>TRUE,'real_name'=>$value->real_name,'user_id'=>$value->id);										
					$this->session->set_userdata($arr);	
					 $cookie = array(
			           'name'   => 'remember_me',
			           'value'  => 'true',
			           'expire' => '15000000',
			           'prefix' => ''
			        );
			        $this->input->set_cookie($cookie);
			         $cookie = array(
			           'name'   => 'user',
			           'value'  => TRUE,
			           'expire' => '15000000',
			           'prefix' => ''
			        );
			        $this->input->set_cookie($cookie);
			         $cookie = array(
			           'name'   => 'real_name',
			           'value'  => $value->real_name,
			           'expire' => '15000000',
			           'prefix' => ''
			        );
			        $this->input->set_cookie($cookie);
			         $cookie = array(
			           'name'   => 'user_id',
			           'value'  => $value->id,
			           'expire' => '15000000',
			           'prefix' => ''
			        );
			        $this->input->set_cookie($cookie);


				}else{
					$arr = array('user'=>TRUE,'real_name'=>$value->real_name,'user_id'=>$value->id);										
					$this->session->set_userdata($arr);	
					 $cookie = array(
			           'name'   => 'remember_me',
			           'value'  => 'false',
			           'expire' => '15000000',
			           'prefix' => ''
			        );
			        $this->input->set_cookie($cookie);
				}
				
				redirect('home');				

			}else{
				$arr['message'] = '<div class="alert alert-danger" style="text-align:left">Incorrect username or password !!! </div>';
				$this->load->view('login_view',$arr);
			}
		}
	}



}