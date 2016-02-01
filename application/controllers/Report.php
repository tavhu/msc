<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {


	public function index()
	{			
		$data['tbl_student_information'] = $this->table_fields('tbl_student_information');
		$data['tbl_mother_information'] = $this->table_fields('tbl_mother_information');
		$data['tbl_father_information'] = $this->table_fields('tbl_father_information');
		$data['tbl_parent_information'] = $this->table_fields('tbl_parent_information');
		$data['tbl_placeofbirth'] = $this->table_fields('tbl_placeofbirth');
		$data['tbl_address'] = $this->table_fields('tbl_address');
		$data['user'] = $this->table_fields('user');
		$this->load->view('Header');
		$this->load->view('student_report_view',$data);
		$this->load->view('Footer');
	}

	public function query_all(){

		$data['result'] = $this->db->get('tbl_student_information');
		$data['searchQuery'] = 'Select all stuent records '; 
		$this->load->view('Header');
		$this->load->view('student_report_view',$data);
		$this->load->view('Footer');
	}

	public function query(){

		$table_name = $this->input->post('table_name');
		$field_name = $this->input->post('field_name');		
		$secret = $this->input->post('secret');

		$detail = $this->input->post('detail');
		$fromdate = $this->input->post('fromdate');
		$todate = $this->input->post('todate');
		$data='';
		
		$field_name  = substr($field_name , 0 , strpos($field_name, " ") ); //clear search type that add in field_name value in view
		
		if (!  empty($secret) && ! empty($table_name)  && ! empty($field_name) ) {

				if ($secret == 'varchar') {
					if ( ! empty($detail)) {

						$data['searchQuery'] = "Search for: Student's ".$this->translate_word($table_name)." where ".$field_name. " contain words ".$detail; 
						$data['result'] = $this->search_varchar($table_name, $field_name, $detail);
						if (  empty($data['result'])) {
							$data['error'] = "We Can't find you result";
						}

					}else{
						$data['error'] = "Detail can't be empty ";
						
					}
				}else if ($secret == 'date'){
					if ( ! empty($todate) &&  ! empty($fromdate)) {
						$data['searchQuery'] = "Search for: Student's ".$this->translate_word($table_name)." where ".$field_name. " from  ".$fromdate. " to ".$todate ; 
						$data['result'] = $this->search_date($table_name , $fromdate , $todate);
						if ( empty($data['result'])) {
							$data['error'] = "We Can't find you result";
						}
					}else{
						$data['error'] = "Please Select Dates ";
					}
				}

		}else{
			$data['error'] = "Please Select all Student Search Detail before Excute Search";			
		}
		
		$this->load->view('Header');
		$this->load->view('student_report_view',$data);
		$this->load->view('Footer');

	}
	private function table_fields($table_name = 'none' ){
		$fields = $this->db->field_data($table_name);
		return $fields;	
	}

	private function search_date($table_name = '',$datepickerfrom = '' , $datepickerto = ''){

 		$this->db->select('*');
 		$this->db->where('studentenrollDate <=', $datepickerto);
		$this->db->where('studentenrollDate >=', $datepickerfrom);
		$this->db->from('tbl_student_information');
		$field_join = "";
		switch ($table_name) {
			case 'tbl_address':
				$field_join	= "addressID";			
				break;
			case 'tbl_placeofbirth':
				$field_join	= "placeofbirthID";			
				break;
			case 'tbl_mother_information':
				$field_join	= "motherID";			
				break;
			case 'tbl_father_information':
				$field_join	= "fatherID";			
				break;
			case 'tbl_parent_information':
				$field_join	= "parentID";			
				break;
			default:
				# code...
				break;
		}

		if (  $table_name != "tbl_student_information") {
			$this->db->join($table_name,'tbl_student_information.'.$field_join . ' = '.$table_name.".id");
		}

		$result =  $this->db->get();	

		return $result;

		
	}
	private function search_varchar($table_name = '', $field_name ,$searchString = ''){

		$this->db->select('*');
 		$this->db->like($field_name, $searchString);	
		$this->db->from('tbl_student_information');
		$field_join = "";
		switch ($table_name) {
			case 'tbl_address':
				$field_join	= "addressID";			
				break;
			case 'tbl_placeofbirth':
				$field_join	= "placeofbirthID";			
				break;
			case 'tbl_mother_information':
				$field_join	= "motherID";			
				break;
			case 'tbl_father_information':
				$field_join	= "fatherID";			
				break;
			case 'tbl_parent_information':
				$field_join	= "parentID";			
				break;
			case 'user':
				$field_join	= "userID";			
				break;
			default:
				# code...
				break;
		}

		if (  $table_name != "tbl_student_information") {
			$this->db->join($table_name,'tbl_student_information.'.$field_join . ' = '.$table_name.".id");
		}

		$result =  $this->db->get();
		return $result;
		
	}

	private function translate_word($words = ''){


		switch ($words) {
			case 'tbl_student_information':
				return 'Student Information';
				break;
			case 'tbl_address':
				return 'Current Address';
				break;
			case 'tbl_placeofbirth':
				return 'Place of Birth';
				break;
			case 'tbl_parent_information':
				return 'Parent Information';
				break;
			case 'user':
				return 'Data Entry Information';
				break;				
			default:
				# code...
				break;
		}

		return 0;


	}





}

