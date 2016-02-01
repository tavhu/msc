<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index()
	{	
		$this->Registration();
	}
	public function Registration(){
			$config = array(
			  'upload_path'   => './assets/images/',
              'allowed_types'=> 'gif|jpg|png',
              'max_size'     => 10000,
              'max_width'    => 3024,
              'max_height'   => 3024,
			);
		 $this->load->library('upload',$config);
		$this->load->view('Header');
		$this->load->view('student_register_view');
		$this->load->view('Footer');
	}
	private function check_if_student_existed($id = 'erer'){

		$this->load->library('myencryption');		
		$config = array(
			  'upload_path'   => './assets/images/',
              'allowed_types'=> 'gif|jpg|png',
              'max_size'     => 10000,
              'max_width'    => 3024,
              'max_height'   => 3024,
			);
		$this->load->library('upload',$config);
		

		$data = "";
		$this->db->where('auto_id',$this->myencryption->decode($id));
		$query = $this->db->get('tbl_student_information');
		
		if ($query->num_rows() < 1) {
			$data['failed'] = 'No Record Existed';
		}else{			
			$data['row'] = $query->row();
			$data['auto'] = $query->row();
		}
		return $data;
	}

	private function get_row($field_name, $match ,$table_name){

		$this->db->where($field_name,$match);
		return $this->db->get($table_name);


	}

	public function profile($id = 'none'){
		$this->load->library("Translate");
		$data = $this->check_if_student_existed($id);

		$this->load->view('Header');
		$this->load->view('student_profile_view',$data);
		$this->load->view('Footer');

	}

	public function edit($id = 'none'){
			
		$data = $this->check_if_student_existed($id);

		$this->load->view('Header');
		$this->load->view('student_register_view',$data);
		$this->load->view('Footer');

	}
	public function view(){


		$data['header_info'] = "Student List";
		$data['panel_info'] = "Student Information";

		$this->load->view('Header');
		$this->load->view('Student_List_View',$data);
		$this->load->view('Footer');
	}

	public function server_side_wating(){

		$this->load->library('myencryption');	
		//$this->db->sql( "SET NAMES 'utf8'" );		
		$table = 'tbl_student_information';
		// Table's primary key
		$primaryKey = 'auto_id';

		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		
				$columns = array(	
						
				array( 'db' => 'studentID', 'dt' => 'StudentID' ),
					array( 'db' => 'studentStatus',  'dt' => '' ),
					array( 'db' => 'studentNameInKhmer',  'dt' => '' ),
					array( 'db' => 'studentNameInEnglish',  'dt' => 'FullName','formatter' => function( $d, $row ) {
				            // Technically a DOM id cannot start with an integer, so we prefix
				            // a string. This can also be useful if you have multiple tables
				            // to ensure that the id is unique with a different prefix					                    
				            return $row['studentNameInKhmer']." / ".$row['studentNameInEnglish'];
				        } ),
				array( 'db' => 'studentGender',  'dt' => 'Gender' ),
				array( 'db' => 'studentDateofbirth',  'dt' => 'DateOfBirth' ),
				array( 'db' => 'studentEntryDate',  'dt' => 'EntryDate' ),	
				array( 'db' => 'studentenrollDate',  'dt' => 'EnrollDate' ),
				array(
				        'db' => 'auto_id',
				        'dt' => 'auto_id',
				        'formatter' => function( $d, $row ) {
				            // Technically a DOM id cannot start with an integer, so we prefix
				            // a string. This can also be useful if you have multiple tables
				            // to ensure that the id is unique with a different prefix		
				            $vv = base_url()."student/edit/".$this->myencryption->encode($d);
				            $view = base_url()."student/profile/".$this->myencryption->encode($d);
				            return "<a href='$view'>View</a> | <a href='$vv'>Edit</a>";
				        }
				 ),		
			);
		

		
		$CI = &get_instance();
		$CI->load->database();
		
		$sql_details = array(
			'user' => $CI->db->username,
			'pass' => $CI->db->password,
			'db'   => $CI->db->database,
			'host' => $CI->db->hostname
		);

		
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */
		$this->load->helper('ssp_helper');
		echo json_encode(
			SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null , "studentActive = '1'")
		);
	}

	public function server_side($id='default'){		
		$this->load->library('myencryption');	
		//$this->db->sql( "SET NAMES 'utf8'" );		
		$table = 'tbl_student_information';
		// Table's primary key
		$primaryKey = 'auto_id';

		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes

		if ($id === 'default') {

				$columns = array(							
				array( 'db' => 'studentID', 'dt' => 'StudentID' ),
					array( 'db' => 'studentNameInKhmer',  'dt' => '' ),
					array( 'db' => 'studentNameInEnglish',  'dt' => 'FullName','formatter' => function( $d, $row ) {
				            // Technically a DOM id cannot start with an integer, so we prefix
				            // a string. This can also be useful if you have multiple tables
				            // to ensure that the id is unique with a different prefix					                    
				            return $row['studentNameInKhmer']." / ".$row['studentNameInEnglish'];
				        } ),
				array( 'db' => 'studentGender',  'dt' => 'Gender' ),
				array( 'db' => 'studentDateofbirth',  'dt' => 'DateOfBirth' ),
				array( 'db' => 'studentEntryDate',  'dt' => 'EntryDate' ),	
				array( 'db' => 'studentenrollDate',  'dt' => 'EnrollDate' ),
				array(
				        'db' => 'auto_id',
				        'dt' => 'auto_id',
				        'formatter' => function( $d, $row ) {
				            // Technically a DOM id cannot start with an integer, so we prefix
				            // a string. This can also be useful if you have multiple tables
				            // to ensure that the id is unique with a different prefix		
				            $vv = base_url()."student/edit/".$this->myencryption->encode($d);
				            $view = base_url()."student/profile/".$this->myencryption->encode($d);;	         
				            return "<a href='$view'>View</a> | <a href='$vv'>Edit</a> | <a href='#' onclick='showModal($d)'>Delete</a> ";
				        }
				 ),		
			);
		
		}else if($id==='servation'){
			
				$columns = array(	
						
				array( 'db' => 'studentID', 'dt' => 'StudentID' ),
					array( 'db' => 'studentNameInKhmer',  'dt' => '' ),
					array( 'db' => 'studentNameInEnglish',  'dt' => 'FullName','formatter' => function( $d, $row ) {
				            // Technically a DOM id cannot start with an integer, so we prefix
				            // a string. This can also be useful if you have multiple tables
				            // to ensure that the id is unique with a different prefix					                    
				            return $row['studentNameInKhmer']." / ".$row['studentNameInEnglish'];
				        } ),
				array( 'db' => 'studentGender',  'dt' => 'Gender' ),
				array( 'db' => 'studentDateofbirth',  'dt' => 'DateOfBirth' ),
				array( 'db' => 'studentEntryDate',  'dt' => 'EntryDate' ),	
				array( 'db' => 'studentenrollDate',  'dt' => 'EnrollDate' ),
				array(
				        'db' => 'auto_id',
				        'dt' => 'auto_id',
				        'formatter' => function( $d, $row ) {
				            // Technically a DOM id cannot start with an integer, so we prefix
				            // a string. This can also be useful if you have multiple tables
				            // to ensure that the id is unique with a different prefix		
				            $vv = base_url()."student/edit_servation/".$this->myencryption->encode($d);
				            $view = base_url()."student/view_servation/".$this->myencryption->encode($d);
				            $add =  base_url()."student/register_servation/".$this->myencryption->encode($d);       
				            return "<a href='$view'>View</a> | <a href='$vv'>Edit</a>";
				        }
				 ),		
			);
		}

		
		$CI = &get_instance();
		$CI->load->database();
		
		$sql_details = array(
			'user' => $CI->db->username,
			'pass' => $CI->db->password,
			'db'   => $CI->db->database,
			'host' => $CI->db->hostname
		);

		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */
		$this->load->helper('ssp_helper');
		echo json_encode(
			SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
	}

	function deleteUser(){
		$this->load->library('myencryption');
		$var = $this->input->post('post_data');				
		$this->db->delete('tbl_student_information',array('auto_id'=>$var));

		echo '<scrip type="text/javascript" language="javascript" charset="utf-8" > window.location.reload();  </script>';	
	}

	public function validation(){

		$this->load->library('form_validation');
		$this->load->library('Myencryption');
		$config = array(
			  'upload_path'   => './assets/images/',
              'allowed_types'=> 'gif|jpg|png',
              'max_size'     => 10000,
              'max_width'    => 3024,
              'max_height'   => 3024,
			);
		 $this->load->library('upload',$config);	
		//place of birth
		$this->form_validation->set_rules('placeofbirthCountry','Place Of Birth Country', 'trim|required');
		$this->form_validation->set_rules('placeofbirthCity','Place Of Birth City', 'trim|required');

		$placeofbirthCountry = $this->input->post('placeofbirthCountry');
		$placeofbirthCity = $this->input->post('placeofbirthCity');
		$placeofbirthDestrict = $this->input->post('placeofbirthDestrict');
		$placeofbirthCommune = $this->input->post('placeofbirthCommune');
		$placeofbirthVillage = $this->input->post('placeofbirthVillage');
		$placeofbirthGroup = $this->input->post('placeofbirthGroup');
		$placeofbirthHomeHospital = $this->input->post('placeofbirthHomeHospital');
		$placeofbirthStreet = $this->input->post('placeofbirthStreet');
		$placeofbirthDetail = $this->input->post('placeofbirthDetail');

		$placeofbirthData = array(
							'placeofbirthCountry' => $placeofbirthCountry,
							'placeofbirthCity' => $placeofbirthCity,
							'placeofbirthDestrict' => $placeofbirthDestrict,
							'placeofbirthCommune' => $placeofbirthCommune,
							'placeofbirthVillage' => $placeofbirthVillage,
							'placeofbirthGroup' => $placeofbirthGroup,
							'placeofbirthHomeHospital' => $placeofbirthHomeHospital,
							'placeofbirthStreet' => $placeofbirthStreet,
							'placeofbirthDetail' => $placeofbirthDetail,
							);


		//address 		
		$addressCountry = $this->input->post('addressCountry');
		$addressCity = $this->input->post('addressCity');
		$addressDestrict = $this->input->post('addressDestrict');
		$addressCommune = $this->input->post('addressCommune');
		$addressVillage = $this->input->post('addressVillage');
		$addressGroup = $this->input->post('addressGroup');
		$addressHome = $this->input->post('addressHome');
		$addressStreet = $this->input->post('addressStreet');
		$addressDetail = $this->input->post('addressDetail');

		$addressData = array(
							'addressCountry' => $addressCountry,
							'addressCity' => $addressCity,
							'addressDestrict' => $addressDestrict,
							'addressCommune' => $addressCommune,
							'addressVillage' => $addressVillage,
							'addressGroup' => $addressGroup,
							'addressHome' => $addressHome,
							'addressStreet' => $addressStreet,
							'addressDetail' => $addressDetail,
							);


		//mother information 
		$motherName = $this->input->post('motherName');		
		$motherStatus = $this->input->post('motherStatus');				
		$motherOccupation = $this->input->post('motherOccupation');
		$motherPhone = $this->input->post('motherPhone');
		$motherCountry = $this->input->post('motherCountry');
		$motherCity = $this->input->post('motherCity');
		$motherDestrict = $this->input->post('motherDestrict');
		$motherCommune = $this->input->post('motherCommune');
		$motherVillage = $this->input->post('motherVillage');
		$motherGroup = $this->input->post('motherGroup');
		$motherHome = $this->input->post('motherHome');
		$motherStreet = $this->input->post('motherStreet');
		$motherDetail = $this->input->post('motherDetail');

		$motherinformationData = array(
							'motherName' => $motherName,
							'motherStatus' => $motherStatus,
							'motherOccupation' => $motherOccupation,
							'motherPhone' => $motherPhone,
							'motherCountry' => $motherCountry,
							'motherCity' => $motherCity,
							'motherDestrict' => $motherDestrict,
							'motherCommune' => $motherCommune,
							'motherVillage' => $motherVillage,
							'motherGroup' => $motherGroup,
							'motherHome' => $motherHome,
							'motherStreet' => $motherStreet,
							'motherDetail' => $motherDetail,
							);

		//father information 
		$fatherName = $this->input->post('fatherName');		
		$fatherStatus = $this->input->post('fatherStatus');				
		$fatherOccupation = $this->input->post('fatherOccupation');
		$fatherPhone = $this->input->post('fatherPhone');
		$fatherCountry = $this->input->post('fatherCountry');
		$fatherCity = $this->input->post('fatherCity');
		$fatherDestrict = $this->input->post('fatherDestrict');
		$fatherCommune = $this->input->post('fatherCommune');
		$fatherVillage = $this->input->post('fatherVillage');
		$fatherGroup = $this->input->post('fatherGroup');
		$fatherHome = $this->input->post('fatherHome');
		$fatherStreet = $this->input->post('fatherStreet');
		$fatherDetail = $this->input->post('fatherDetail');

		$fatherinformationData = array(
							'fatherName' => $fatherName,
							'fatherStatus' => $fatherStatus,
							'fatherOccupation' => $fatherOccupation,
							'fatherPhone' => $fatherPhone,
							'fatherCountry' => $fatherCountry,
							'fatherCity' => $fatherCity,
							'fatherDestrict' => $fatherDestrict,
							'fatherCommune' => $fatherCommune,
							'fatherVillage' => $fatherVillage,
							'fatherGroup' => $fatherGroup,
							'fatherHome' => $fatherHome,
							'fatherStreet' => $fatherStreet,
							'fatherDetail' => $fatherDetail,
							);

		//parent information 
		$parentName = $this->input->post('parentName');	
		$parentOccupation = $this->input->post('parentOccupation');
		$parentPhone = $this->input->post('parentPhone');
		$parentCountry = $this->input->post('parentCountry');
		$parentCity = $this->input->post('parentCity');
		$parentDestrict = $this->input->post('parentDestrict');
		$parentCommune = $this->input->post('parentCommune');
		$parentVillage = $this->input->post('parentVillage');
		$parentGroup = $this->input->post('parentGroup');
		$parentHome = $this->input->post('parentHome');
		$parentStreet = $this->input->post('parentStreet');
		$parentDetail = $this->input->post('parentDetail');

		$parentinformationData = array(
							'parentName' => $parentName,							
							'parentOccupation' => $parentOccupation,
							'parentPhone' => $parentPhone,
							'parentCountry' => $parentCountry,
							'parentCity' => $parentCity,
							'parentDestrict' => $parentDestrict,
							'parentCommune' => $parentCommune,
							'parentVillage' => $parentVillage,
							'parentGroup' => $parentGroup,
							'parentHome' => $parentHome,
							'parentStreet' => $parentStreet,
							'parentDetail' => $parentDetail,
							);
		//studentinformation
		$this->form_validation->set_rules('studentID','student ID', 'trim|required');
		$this->form_validation->set_rules('studentenrollDate','Enroll Date', 'trim|required');
		$this->form_validation->set_rules('studentNameInEnglish','First Name', 'trim|required');
		$this->form_validation->set_rules('studentNameInKhmer','Last Name', 'trim|required');
		$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");


		//data entry ID

		$data_entry_id = $this->input->post('data_entry_id');

		
		$studentID = $this->input->post('studentID');
		$studentenrollDate = $this->input->post('studentenrollDate');
		$studentNameInEnglish = $this->input->post('studentNameInEnglish');
		$studentNameInKhmer = $this->input->post('studentNameInKhmer');
		$studentDateofbirth = $this->input->post('studentDateofbirth');
		$studentNationality = $this->input->post('studentNationality');
		$studentGender = $this->input->post('studentGender');
		$studentStatus = $this->input->post('studentStatus');
		$studentFamilyMembers = $this->input->post('studentFamilyMembers');
		$studentIm = $this->input->post('studentIm');
		$studentEntryDate = $this->input->post('studentEntryDate');
		$studentEntryDateGrade = $this->input->post('studentEntryDateGrade');
		$studentLeavingDate = $this->input->post('studentLeavingDate');
		$studentLeavingDateGrade = $this->input->post('studentLeavingDateGrade');
		$studentJob = $this->input->post('studentJob');
		$studentSchool = $this->input->post('studentSchool');
		$studentAcademyYear = $this->input->post('studentAcademyYear');
		$studentDetail = $this->input->post('studentDetail');
		$studentDisability = $this->input->post('studentDisability');
		$studentActive = $this->input->post('studentActive');	

		$uid = $this->input->post('uid');	
		$check_file_upload = FALSE;

		if (isset($_FILES['userfile']['error']) && $_FILES['userfile']['error'] != 4) {
			$check_file_upload = TRUE;
		}

		if (! $this->form_validation->run() || ($check_file_upload && !$this->upload->do_upload('userfile'))){
			$this->load->view('Header');
			$this->load->view('student_register_view');
			$this->load->view('Footer');
		}else{

			if ($this->input->post('secret') == 'INSERT') {

				$CleanplaceofbirthData = $this->security->xss_clean($placeofbirthData);
				$CleanaddressData = $this->security->xss_clean($addressData);
				$CleanmotherinformationData = $this->security->xss_clean($motherinformationData);
				$CleanfatherinformationData = $this->security->xss_clean($fatherinformationData);
				$CleanparentinformationData = $this->security->xss_clean($parentinformationData);

				$this->db->insert('tbl_placeofbirth',$CleanplaceofbirthData);
				$placeofbirthID = $this->db->insert_id();

				$this->db->insert('tbl_address',$CleanaddressData);
				$addressID = $this->db->insert_id();

				$this->db->insert('tbl_mother_information',$CleanmotherinformationData);
				$motherID = $this->db->insert_id();

				$this->db->insert('tbl_father_information',$CleanfatherinformationData);
				$fatherID = $this->db->insert_id();

				$this->db->insert('tbl_parent_information',$CleanparentinformationData);
				$parentID = $this->db->insert_id();

				$uploadImageName = "";
				$upload_data = $this->upload->data();
				if (isset($upload_data['file_name'])) {
					$uploadImageName = $upload_data['file_name'];
				}

					$studentData = array(
					'studentID' => $studentID,
					'studentenrollDate' => $studentenrollDate,
					'studentNameInEnglish' => $studentNameInEnglish,
					'studentNameInKhmer' => $studentNameInKhmer,
					'studentDateofbirth' => $studentDateofbirth,
					'studentNationality' => $studentNationality,
					'studentGender' => $studentGender,
					'studentStatus' => $studentStatus,
					'studentFamilyMembers' => $studentFamilyMembers,
					'studentEntryDate' => $studentEntryDate,
					'studentEntryDateGrade' => $studentEntryDateGrade,
					'studentLeavingDate' => $studentLeavingDate,
					'studentLeavingDateGrade' => $studentLeavingDateGrade,
					'studentJob' => $studentJob,
					'studentSchool' => $studentSchool,
					'studentAcademyYear' => $studentAcademyYear,
					'studentDetail' => $studentDetail,
					'studentActive' => $studentActive,
					'studentIm' => $studentIm,
					'imgPath' => $uploadImageName,
					'studentDisability' => $studentDisability,
					'placeofbirthID'  => $placeofbirthID,
					'addressID'  => $addressID ,
					'motherID'  => $motherID ,
					'fatherID'  => $fatherID ,
					'parentID'  => $parentID,
					'userID'	=> $data_entry_id			
					);

				$CleanstudentData = $this->security->xss_clean($studentData);
				$this->db->insert('tbl_student_information',$CleanstudentData);
				$message = "";
				if ($this->db->insert_id() > 0 ) {
					$message['success'] = "Student data successfully save";
				}else{
					$message['failed'] = "Failed to save student data! Please try again after few minute.";
				}

				$this->load->view('Header');
				$this->load->view('student_register_view',$message);
				$this->load->view('Footer');

			}else if($this->input->post('secret') == 'EDIT'){
				$this->db->trans_start();
				$update_ID = $this->myencryption->decode($uid);
				$CleanplaceofbirthData = $this->security->xss_clean($placeofbirthData);
				$CleanaddressData = $this->security->xss_clean($addressData);
				$CleanmotherinformationData = $this->security->xss_clean($motherinformationData);
				$CleanfatherinformationData = $this->security->xss_clean($fatherinformationData);
				$CleanparentinformationData = $this->security->xss_clean($parentinformationData);

				$this->db->where('id',$update_ID);
				$this->db->update('tbl_placeofbirth',$CleanplaceofbirthData);

				$this->db->where('id',$update_ID);
				$this->db->update('tbl_address',$CleanaddressData);
			
				$this->db->where('id',$update_ID);
				$this->db->update('tbl_mother_information',$CleanmotherinformationData);
				
				$this->db->where('id',$update_ID);
				$this->db->update('tbl_father_information',$CleanfatherinformationData);
				
				$this->db->where('id',$update_ID);
				$this->db->update('tbl_parent_information',$CleanparentinformationData);
				
				$studentData = "";
				$uploadImageName = "";
				$upload_data = $this->upload->data();
				if (! empty($upload_data['file_name'])) {
					$uploadImageName = $upload_data['file_name'];

					$studentData = array(
					'studentID' => $studentID,
					'studentenrollDate' => $studentenrollDate,
					'studentNameInEnglish' => $studentNameInEnglish,
					'studentNameInKhmer' => $studentNameInKhmer,
					'studentDateofbirth' => $studentDateofbirth,
					'studentNationality' => $studentNationality,
					'studentGender' => $studentGender,
					'studentStatus' => $studentStatus,
					'studentFamilyMembers' => $studentFamilyMembers,
					'studentEntryDate' => $studentEntryDate,
					'studentEntryDateGrade' => $studentEntryDateGrade,
					'studentLeavingDate' => $studentLeavingDate,
					'studentLeavingDateGrade' => $studentLeavingDateGrade,
					'studentJob' => $studentJob,
					'studentSchool' => $studentSchool,
					'studentAcademyYear' => $studentAcademyYear,
					'studentDetail' => $studentDetail,
					'studentActive' => $studentActive,
					'studentIm' => $studentIm,
					'imgPath' => $uploadImageName,
					'studentDisability' => $studentDisability								
					);
				}else{

					$studentData = array(
					'studentID' => $studentID,
					'studentenrollDate' => $studentenrollDate,
					'studentNameInEnglish' => $studentNameInEnglish,
					'studentNameInKhmer' => $studentNameInKhmer,
					'studentDateofbirth' => $studentDateofbirth,
					'studentNationality' => $studentNationality,
					'studentGender' => $studentGender,
					'studentStatus' => $studentStatus,
					'studentFamilyMembers' => $studentFamilyMembers,
					'studentEntryDate' => $studentEntryDate,
					'studentEntryDateGrade' => $studentEntryDateGrade,
					'studentLeavingDate' => $studentLeavingDate,
					'studentLeavingDateGrade' => $studentLeavingDateGrade,
					'studentJob' => $studentJob,
					'studentSchool' => $studentSchool,
					'studentAcademyYear' => $studentAcademyYear,
					'studentDetail' => $studentDetail,
					'studentActive' => $studentActive,
					'studentIm' => $studentIm,					
					'studentDisability' => $studentDisability								
					);
				}

				$CleanstudentData = $this->security->xss_clean($studentData);
				$this->db->where('auto_id',$update_ID);
				echo $update_ID;
				$this->db->update('tbl_student_information',$CleanstudentData);
				$data = "";

				
				$this->db->trans_complete();

				if ($this->db->trans_status() === TRUE)
				{
					$data['success'] = "Update data successfully save";
				}else{
					$data['failed'] = "Failed to update student data! Please try again after few minute.";
				}
				$data['disabled'] = 'disabled';
				$this->load->view('Header');
				$this->load->view('student_register_view',$data);
				$this->load->view('Footer');

			}

			

		}
	}

	public function add_servation(){
		$data['header_info'] = "Student Servation List";
		$data['panel_info'] = "Student Servation Information";
		$data['select_student'] = "servation";
		$this->load->view('Header');
		$this->load->view('Student_List_View',$data);
		$this->load->view('Footer');
	}

	private function table_fields($table_name = 'none' ){
		$fields = $this->db->field_data($table_name);
		return $fields;	
	}

	public function edit_servation($id = ''){

		$data = $this->check_if_student_existed($id);	

		$data['header_info'] = "Student Servation Form";
		$data['panel_info'] = "Student Servation Information";
		$data['select_student'] = "servation";
		$result = $this->get_row('studentID',$id,'tbl_student_servation');
		$data['servation_row'] = $result->row();
		$this->load->view('Header');
		$this->load->view('student_servation_edit_view',$data);
		$this->load->view('Footer');
	}

 	public function waiting_list(){


		$data['header_info'] = "Student Waiting List";
		$data['panel_info'] = "Student Information";


 		$this->load->view("Header");
 		$this->load->view("student_wating_list_view",$data);
 		$this->load->view("Footer");

 	}

 	public function servation_validation(){
 		
 		$this->load->library("form_validation");
 		$this->load->library("Myencryption");

 		$data_entry_id = $this->input->post("data_entry_id");
 		$studentID_Encryptyed = $this->input->post("uid");
 		$studentID = $this->myencryption->decode($studentID_Encryptyed);
 		$dateofservation = $this->input->post("dateofservation");
 		//load one series input form
 		$oneofone = $this->input->post("oneofone");
 		$oneoftwo = $this->input->post("oneoftwo");
 		$oneofthreeYN = $this->input->post("oneofthreeYN");
 		$oneofthree = $this->input->post("oneofthree");
 		$oneoffour = $this->input->post("oneoffour");
 		$oneoffiveYN = $this->input->post("oneoffiveYN");
 		$oneofsixYN = $this->input->post("oneofsixYN");
 		$oneofsevenYN = $this->input->post("oneofsevenYN");
 		$oneofseven = $this->input->post("oneofseven");
 		$oneofeightYN = $this->input->post("oneofeightYN");
 		$oneofnineYN = $this->input->post("oneofnineYN");
 		$oneoften = $this->input->post("oneoften");
 		$oneofelevenYN = $this->input->post("oneofelevenYN");
 		$oneofeleven = $this->input->post("oneofeleven");
 		$oneoftwelveYN = $this->input->post("oneoftwelveYN");
 		$oneoftwelve = $this->input->post("oneoftwelve");
 		$oneofthirteenYN = $this->input->post("oneofthirteenYN");
 		$oneofthirteen = $this->input->post("oneofthirteen");
 		$oneoffourteen = $this->input->post("oneoffourteen");
 		$oneoffourteenYN = $this->input->post("oneoffourteenYN");
 		$oneoffifthteenYN = $this->input->post("oneoffifthteenYN");
 		$oneofsixteenYN = $this->input->post("oneofsixteenYN");
 		$oneofseventeenYN = $this->input->post("oneofseventeenYN");
 		$oneofeightteenYN = $this->input->post("oneofeightteenYN");
 		$oneofnineteen = $this->input->post("oneofnineteen");
 		$onedetail = $this->input->post("onedetail");

 		
 		//load two series input form

 		$twoofoneYN = $this->input->post("twoofoneYN");
 		$twoofone = $this->input->post("twoofone");
 		$twooftwoYN = $this->input->post("twooftwoYN");
 		$twoofthree = $this->input->post("twoofthree");
 		$twooffour = $this->input->post("twooffour");
 		$twodetail = $this->input->post("twodetail");

 		        

 		//load three series input form

 		$threeofoneYN = $this->input->post("threeofoneYN");
 		$threeofone = $this->input->post("threeofone");
 		$threeoftwoYN = $this->input->post("threeoftwoYN");
 		$threeoftwo = $this->input->post("threeoftwo");
 		$threeofthreeYN = $this->input->post("threeofthreeYN");
 		$threeofthree = $this->input->post("threeofthree");
 		$threeoffourYN = $this->input->post("threeoffourYN");
 		$threedetail = $this->input->post("threedetail");


 		//load four series input form

 		$fourofoneYN = $this->input->post("fourofoneYN");
 		$fourofone = $this->input->post("fourofone");
 		$fouroftwoYN = $this->input->post("fouroftwoYN");
 		$fouroftwo = $this->input->post("fouroftwo");
 		$fourdetail = $this->input->post("fourdetail");


 		//load five series input form

 		$fiveofoneYN = $this->input->post("fiveofoneYN");
 		$fiveofone = $this->input->post("fiveofone");
 		$fiveoftwoYN = $this->input->post("fiveoftwoYN");
 		$fiveoftwo = $this->input->post("fiveoftwo");
 		$fiveofthreeYN = $this->input->post("fiveofthreeYN");
 		$fiveofthree = $this->input->post("fiveofthree");
 		$fiveoffourYN = $this->input->post("fiveoffourYN");
 		$fiveoffour = $this->input->post("fiveoffour");
 		$fivedetail = $this->input->post("fivedetail");


 		$one_series_array = array(
 			'oneofone' => $oneofone,
 			'oneoftwo' => $oneoftwo,
 			'oneofthreeYN' => $oneofthreeYN,
 			'oneofthree' => $oneofthree,
 			'oneoffour' => $oneoffour, 			
 			'oneoffiveYN' => $oneoffiveYN,
 			'oneofsixYN' => $oneofsixYN,
 			'oneofseven' => $oneofseven,
 			'oneofsevenYN' => $oneofsevenYN,
 			'oneofeightYN' => $oneofeightYN,
 			'oneofnineYN' => $oneofnineYN,
 			'oneoften' => $oneoften,
 			'oneofeleven' => $oneofeleven,
 			'oneofelevenYN' => $oneofelevenYN,
 			'oneoftwelve' => $oneoftwelve,
 			'oneoftwelveYN' => $oneoftwelveYN,
 			'oneofthirteen' => $oneofthirteen,
 			'oneofthirteenYN' => $oneofthirteenYN,
 			'oneoffourteen' => $oneoffourteen,
 			'oneoffourteenYN' => $oneoffourteenYN,
 			'oneoffifthteenYN' => $oneoffifthteenYN,
 			'oneofsixteenYN' => $oneofsixteenYN,
 			'oneofseventeenYN' => $oneofseventeenYN,
 			'oneofeightteenYN' => $oneofeightteenYN, 			
 			'oneofnineteen' => $oneofnineteen,
 			'onedetail' => $onedetail,
 			'studentID' => $studentID,
 			'data_entry_id' => $data_entry_id,
 			'dateofservation' => $dateofservation,
 			'twoofoneYN'  => $twoofoneYN ,        
            'twoofone' =>    $twoofone ,
 		    'twooftwoYN' =>  $twooftwoYN ,
 		    'twoofthree'=>  $twoofthree ,
           	'twooffour' =>   $twooffour ,
           	'twodetail' =>   $twodetail ,
           	'threeofoneYN' => $threeofoneYN ,
	 		'threeofone' => $threeofone ,
	 		'threeoftwoYN' => $threeoftwoYN ,
	 		'threeoftwo' => $threeoftwo ,
	 		'threeofthreeYN' => $threeofthreeYN ,
	 		'threeofthree' => $threeofthree ,
	 		'threeoffourYN' => $threeoffourYN ,
	 		'threedetail' => $threedetail ,
	 		'fourofoneYN' => $fourofoneYN ,
	 		'fourofone' => $fourofone ,
	 		'fouroftwoYN' => $fouroftwoYN ,
	 		'fouroftwo' => $fouroftwo ,
	 		'fourdetail' => $fourdetail ,
	 		'fiveofoneYN' => $fiveofoneYN ,
	 		'fiveofone' => $fiveofone ,
	 		'fiveoftwoYN' => $fiveoftwoYN ,
	 		'fiveoftwo' => $fiveoftwo ,
	 		'fiveofthreeYN' => $fiveofthreeYN ,
	 		'fiveofthree' => $fiveofthree ,
	 		'fiveoffourYN' => $fiveoffourYN ,
	 		'fiveoffour' => $fiveoffour ,
	 		'fivedetail' => $fivedetail ,
 			);

		var_dump($one_series_array);




 	}

	
}
