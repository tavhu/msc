<div class="col-sm-9" style='text-align:right;'>   
        <?php
          
           $id = $this->uri->segment(3);
            
         ?>
        <a href="<?php echo base_url().'student/edit/'.$id;?>" class="btn btn-success" >Edit Information</a> &nbsp
        <a href="#" class="btn btn-success" id='printbutton'>Print Preview</a>
      
</div>
<div class="col-sm-9 form-horizontal" style='background-color:#f7f7f7; font-size:10pt; padding:25px 25px 25px 25px;' id='recieve'>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whitebackground_profile "   style='padding:25px 25px 25px 25px;' > 
		<div class="row">
			<div class="">		
      <?php

       $image =  isset($row->imgPath) ? $row->imgPath : '';

       $image = substr($image, strlen($image) -4,1);
       $images = null;
       if ($image != ".") {
         $images = "unavailable.jpg";
       }else{
        $images = $row->imgPath;
       }

       ?>	
				<img src="<?php echo base_url();?>assets/images/<?php echo isset($images) ? $images : "unavailable.jpg"; ?>" class='img-responsive col-sm-6 col-xs-12 col-lg-5 col-md-5'>			
			</div>
			<div class="col-sm-12 col-xs-12 col-lg-7 col-md-7">
				<span class='profile_name'​ style='font-size:1.7em; line-height:80px;' ><?php echo isset($row->studentNameInEnglish) ? $row->studentNameInEnglish : set_value('studentNameInEnglish');?> / <?php echo isset($row->studentNameInKhmer) ? $row->studentNameInKhmer : set_value('studentNameInKhmer');?></span><br>
				<b>Student ID:</b> <?php echo isset($row->studentID) ? $row->studentID : set_value('studentID');?>  <br>
				<b>Gender:</b> <?php  echo isset($row->studentGender) ? ($row->studentGender == 'male' ? 'Male' : 'Female') : "";?> <br>
				<b>Date of Birth:</b> <?php echo isset($row->studentDateofbirth) ? $row->studentDateofbirth : set_value('studentDateofbirth');?> <br>
        <?php 
        $dataUser = "";      
        if (isset( $row->userID ) ) {
            $this->db->where('id',$row->userID);
            $dataEntry = $this->db->get('user');
            $dataUser = $dataEntry->row();

            $YearNow = date("Y");
            $UpgradeClass = $YearNow - $row->studentAcademyYear;
        }
       
         ?>
        <b>Data Entry Name:</b> <?php echo humanize(isset($dataUser->real_name) ? $dataUser->real_name : "information wrong");?> 
				<hr>
				                    <div class="form-group">
                            <label for="" class='control-label col-sm-4'>Enroll Date/ថ្ងៃស្រង់ព័ត៌មាន</label>
                                  <div class='col-sm-8 ' >
                                        <input type='text' disabled name="studentenrollDate" id='studentenrollDate' value='<?php echo isset($row->studentenrollDate) ? $row->studentenrollDate : set_value('studentenrollDate');?>' class="form-control "/>
                                  </div>  
                            </div>
                          
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Nationality /សញ្ជាតិ</label>
                                        <div class="col-sm-8" >
                                            <input type='text' disabled value= '<?php echo isset($row->studentNationality) ? $row->studentNationality : set_value('studentNationality'); ?> ' class='form-control'>                                            
                                        </div>
                                  </div>             
                                  <div class="form-group">
                                          <label for="username" class="col-sm-4 control-label">Status /ស្ថានភាព  </label>
                                          <div class="col-sm-8">  
                                              <label> <input type='checkbox' disabled name='studentStatus'  value='1' <?php  echo isset($row->studentStatus) ? ($row->studentStatus == '1' ? 'checked' : '') : "";?>  > Dead / បានស្លាប់ </label> 
                                          </div>
                                  </div>        
                                      
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Family Members / សមាជិកគ្រួសារ</label>
                                       <div class="col-sm-8">                                        
                                            <input type='number' disabled name="studentFamilyMembers" value="<?php echo  isset($row->studentFamilyMembers) ? $row->studentFamilyMembers : set_value('studentFamilyMembers');?>" class="form-control" />
                                       </div>                                                            
                                </div>
			</div> 
    </div>
  </div>
<!--end picture line -->   

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "   >
   
	                       <div class='panel panel-default row' id='studentinformation'>
                            <div class='panel-heading'>
                              <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Student information / ព័ត៌មានផ្ទាល់ខ្លួន  </strong></h3>
                            </div>   
                            <div class='panel-body'>
                            <div class="form-group">
                                                <label for="email" class="col-sm-4 col-md-2 control-label">Disability / ពិការភាព</label>
                                                <div class="col-sm-8 col-md-10">                                          
                                                    <textarea class='form-control' disabled style='resize:none' name='studentDisability' ><?php echo isset($row->studentDisability) ? $row->studentDisability : set_value('studentDisability'); ?></textarea>
                                                </div>                         
                            </div>         
                          
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Entry Date / ថ្ងៃចូលមណ្ឌល</label>
                                     <div class="col-sm-8">
                                              <input type='text' disabled  name="studentEntryDate" value="<?php echo  isset($row->studentEntryDate) ? $row->studentEntryDate : set_value('studentEntryDate');?>" class="form-control" />
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4 '>Grade / ជាសិស្សថ្នាក់ទី</label>
                                        <div class="col-sm-8 ">
                                            <input type='text' disabled name='studentEntryDateGrade' value="<?php echo isset($row->studentEntryDateGrade) ? $row->studentEntryDateGrade : set_value('studentEntryDateGrade'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>    
                          </div>
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Left Date / ថ្ងៃចេញពីមណ្ឌល</label>
                                     <div class="col-sm-8 ">
                                              <input type='text' disabled  name="studentLeavingDate" value="<?php echo  isset($row->studentLeavingDate) ? $row->studentLeavingDate : set_value('studentLeavingDate');?>" class="form-control " />
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-12 col-md-6 ">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4 '>Grade / ជាសិស្សថ្នាក់ទី</label>
                                        <div class="col-sm-8 ">
                                            <input type='text' disabled name='studentLeavingDateGrade' value="<?php echo isset($row->studentLeavingDateGrade) ? $row->studentLeavingDateGrade : set_value('studentLeavingDateGrade'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                        
                        </div>
                        <div class="row">  
    	                     <div class="col-sm-12 col-md-6 ">
    	                                 <div class="form-group">
    	                                     <label for="" class='control-label col-sm-4'>Job / មុខរបរ</label>  
                                           <div class="col-sm-8">
      	                                     <label> <input type='radio' disabled name='studentJob' id='radioStudying' value='studying'  <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? 'checked' : '') : "checked";  ?>   > Studying </label>                                       
      	                                     <label style='padding-left:25px;'> <input  disabled type='radio'  id='radioWorking'name='studentJob'  value='working' <?php  echo isset($row->studentJob) ? ($row->studentJob == 'working' ? 'checked' : '') : "";?>> Working </label>                                                           
    	                                     </div>
                                      </div>       
    	                           
    	                    </div>                  
    	                    <div class="col-sm-12 col-md-6  <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? '' : 'hidden') : "";  ?> "​>
    	                                  <div class="form-group">
    	                                        <label class='control-label col-sm-4 '>School / ទីកន្លែងសិក្សារ</label>
    	                                        <div class="col-sm-8">
    	                                            <input type='text' name='studentSchool' disabled value="<?php echo isset($row->studentSchool) ? $row->studentSchool : set_value('studentSchool'); ?>" class='form-control ' >
    	                                        </div>                                      
    	                                  </div>  
    	                     </div>    
                       </div>       
                       <div class="row">           
                           <div class="col-sm-12 col-md-6 <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? '' : 'hidden') : "";  ?>">
                                          <div class="form-group">
                                                <label class='control-label col-sm-4'>Grade Level / ជាសិស្ស  </label>
                                                 <div class="col-sm-8">
                                                 	<input type='text' class='form-control' disabled value='<?php  echo  $this->translate->gradelevel(isset($row->studentGradeLevel) ? $row->studentGradeLevel + $UpgradeClass : "");   ?>'>                            
                                                 </div>
                                        </div>  
                          </div> 
                          <div class="col-sm-12 col-md-6 <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? '' : 'hidden') : "";  ?>">
                                          <div class="form-group">
                                                <label class='control-label col-sm-4'>Academy Year / ឆ្នាំសិកស្សារ</label>
                                                  <div class="col-sm-8">                                               
                                                    <input type='text'  disabled name="studentAcademyYear" value="<?php echo  isset($row->studentAcademyYear) ? $row->studentAcademyYear : set_value('studentAcademyYear');?>" class="form-control " />
                                                  </div>                                                                               
                                        </div>  
                          </div>                     
                     </div>
                     <div class="row">
                        <div class="col-sm-12 col-md-12  workingClass <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? 'hidden' : '') : "hidden";  ?>">
                            <div class="form-group">
                                <label class='control-label col-sm-4'>Detail / ព័ត៌មាន​​​លំអិត</label>
                                <div class="col-sm-8">
                                   <textarea class='form-control' disabled name='studentDetail'><?php echo  isset($row->studentDetail) ? $row->studentDetail : set_value('studentDetail');?></textarea>
                                </div>                                              
                            </div>  
                        </div>

                        <div class="col-sm-12 col-md-12">
                              <div class="form-group">                                
                                  <label for="" class='control-label col-sm-4 col-md-2'>Active /អនុញ្ញាត</label>     
                                   <div class="col-sm-8 col-md-10">
                                      <label> <input type='checkbox' disabled  name='studentActive'  value='1' <?php  echo isset($row->studentActive) ? ($row->studentActive == '1' ? 'checked' : '') : "";?>  > Add to wating List / ដាក់បញ្ចូលទៅបញ្ចីសិស្សដែលត្រូវរងចាំចូលស្នាក់នៅមណ្ឌល</label>                                       
                                  </div>
                              </div>                                                                
                       </div>
                    </div>
              </div>
            </div>
          </div><!-- end studen information end whitebackground-->


          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id='placeofbirth' >
                     <?php  

                  if (isset($auto->auto_id)) {
                      $this->db->where('id',$auto->placeofbirthID);
                      $query = $this->db->get('tbl_placeofbirth');
                      $row = $query->row();
                  }

               ?>
              <div class="panel panel-default row">
                <div class='panel-heading'>
                  <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Place of Birth / ទីកន្លែងកំណើត </strong></h3>
                </div>          
                <div class="panel-body">    
                        <div class='row'>
                              <div class='col-sm-12 col-md-6'>
                                  <div class="form-group" >
                                        <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                        <div class='col-sm-8'>
                                            <input type='text' disabled name='placeofbirthCountry' value= "Cambodia" class='form-control' data-validation='required' >
                                        </div>      
                                  </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                        <div class='col-sm-8'>
                                           <input type='text' disabled name='placeofbirthCity' value= "<?php echo isset($row->placeofbirthCity) ? $row->placeofbirthCity : set_value('placeofbirthCity');?>" class='form-control' data-validation='required' >
                                        </div>  
                                  </div>
                              </div>  
                        </div>       
                        <div class='row'>                
                              <div class='col-sm-12 col-md-6'>
                                  <div class="form-group" >
                                        <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                        <div class='col-sm-8'>
                                            <input type='text' disabled name='placeofbirthDestrict' value= "<?php echo isset($row->placeofbirthDestrict) ? $row->placeofbirthDestrict : set_value('placeofbirthDestrict');?>" class='form-control'  >
                                        </div>      
                                  </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                        <div class='col-sm-8'>
                                           <input type='text' disabled name='placeofbirthCommune' value= "<?php echo isset($row->placeofbirthCommune) ? $row->placeofbirthCommune : set_value('placeofbirthCommune');?>" class='form-control'  >
                                        </div>  
                                  </div>
                              </div>
                        </div>
                           <div class="row">
                                  <div class="col-sm-12 col-md-6">
                                       <div class="form-group">
                                              <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                              <div class="col-sm-8">
                                                  <input type='text' disabled name='placeofbirthVillage' value= "<?php echo isset($row->placeofbirthVillage) ? $row->placeofbirthVillage : set_value('placeofbirthVillage');?>" class='form-control'  >
                                              </div>                         
                                      </div>
                                  </div>

                                  <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                              <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                              <div class="col-sm-8">
                                                 <input type='text' disabled name='placeofbirthGroup' value= "<?php echo isset($row->placeofbirthGroup) ? $row->placeofbirthGroup : set_value('placeofbirthGroup');?>" class='form-control'  >
                                              </div>
                                        </div>  
                                  </div>                          
                          </div>  
                          <div class="row">
                                  <div class="col-sm-12 col-md-6">
                                       <div class="form-group">
                                           <label for="" class='control-label col-sm-4'>Home/Hospital / ផ្ទះឬមន្ទីរពេទ្យ</label>
                                           <div class="col-sm-8">                                       
                                                    <input type='text' disabled  name="placeofbirthHomeHospital" value="<?php echo  isset($row->placeofbirthHomeHospital) ? $row->placeofbirthHomeHospital : set_value('placeofbirthHomeHospital');?>" class="form-control" />                                            
                                                  
                                           </div>                           
                                      </div>
                                  </div>  
                                  
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                              <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                              <div class="col-sm-8">
                                                  <input type='text' disabled name='placeofbirthStreet' value="<?php echo isset($row->placeofbirthStreet) ? $row->placeofbirthStreet : set_value('placeofbirthStreet'); ?>" class='form-control' >
                                              </div>                                      
                                        </div>  
                                  </div>                                                                         
                          </div>                              
                                       <div class="form-group">
                                              <label for="email" class="col-sm-4 col-md-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                              <div class="col-sm-8 col-md-10">                                          
                                                  <textarea class='form-control' disabled style='resize:none' name='placeofbirthDetail'><?php echo isset($row->placeofbirthDetail) ? $row->placeofbirthDetail : set_value('placeofbirthDetail'); ?></textarea>
                                              </div>                         
                                      </div>          
                                               
                     
                      



                </div>  
              </div>
              
          </div> <!-- place of birth Panel -->

       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id='currentaddress'>
              <?php 
                if (isset($auto->auto_id)) {
                    $this->db->where('id',$auto->addressID);
                    $query = $this->db->get('tbl_address');
                    $row = $query->row();
                }
             ?>
            <div class="panel panel-default row">
              <div class='panel-heading'>
                <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Address / អាសយដ្ឋានស្នាក់នៅ </strong></h3>
              </div>          
              <div class="panel-body">   
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='addressCountry' value= "Cambodia" class='form-control' value= "<?php echo isset($row->addressCountry) ? $row->addressCountry : set_value('addressCountry');?>" >
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                      <div class='col-sm-8'>
                                         <input type='text' disabled name='addressCity' value= "<?php echo isset($row->addressCity) ? $row->addressCity : set_value('addressCity');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>  
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='addressDestrict' value= "<?php echo isset($row->addressDestrict) ? $row->addressDestrict : set_value('addressDestrict');?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                      <div class='col-sm-8'>
                                         <input type='text' disabled name='addressCommune' value= "<?php echo isset($row->addressCommune) ? $row->addressCommune : set_value('addressCommune');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>   
                         <div class="row">
                                <div class="col-sm-12 col-md-6">
                                     <div class="form-group">
                                            <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                            <div class="col-sm-8">
                                                <input type='text' disabled name='addressVillage' value= "<?php echo isset($row->addressVillage) ? $row->addressVillage : set_value('addressVillage');?>" class='form-control'>
                                            </div>                         
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                            <div class="col-sm-8">
                                               <input type='text' disabled name='addressGroup' value= "<?php echo isset($row->addressGroup) ? $row->addressGroup : set_value('addressGroup');?>" class='form-control'>
                                            </div>
                                      </div>  
                                </div>                          
                        </div>  
                        <div class="row">
                                <div class="col-sm-12 col-md-6">
                                     <div class="form-group">
                                         <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                         <div class="col-sm-8">                                     
                                                  <input type='text' disabled  name="addressHome" value="<?php echo  isset($row->addressHome) ? $row->addressHome : set_value('addressHome');?>" class="form-control" />                                                                                    
                                         </div>                           
                                    </div>
                                </div>  
                                
                                  <div class="col-sm-12 col-md-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                            <div class="col-sm-8">
                                                <input type='text' disabled name='addressStreet' value="<?php echo isset($row->addressStreet) ? $row->addressStreet : set_value('addressStreet'); ?>" class='form-control' >
                                            </div>                                      
                                      </div>  
                                </div>                                                                         
                        </div>
                            
                                     <div class="form-group">
                                            <label for="email" class="col-sm-4 col-md-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                            <div class="col-sm-8 col-md-10">                                          
                                                <textarea class='form-control' disabled style='resize:none' name='addressDetail'><?php echo isset($row->addressDetail) ? $row->addressDetail : set_value('addressDetail'); ?></textarea>
                                            </div>                         
                                    </div>    
                     
                                         
                     
              </div>  
            </div>
           
       </div> <!-- Address Panel -->
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id='motherinformation'>
             <?php 
              if (isset($auto->auto_id)) {
                  $this->db->where('id',$auto->motherID);
                  $query = $this->db->get('tbl_mother_information');
                  $row = $query->row();
              }
           ?>
          <div class="panel panel-default row">
            <div class='panel-heading'>
              <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Mother Infomation /  ព័ត៌មានម្តាយ </strong></h3>
            </div>          
            <div class="panel-body">  
                       <div class='row'>
                          <div class='col-sm-12 col-md-6'>
                              <div class="form-group" style='border:1px'>
                                    <label  for='fullname' class='control-label col-sm-4'>Name /ម្តាយឈ្មោះ</label>  
                                    <div class='col-sm-8'>
                                        <input type='text' disabled name='motherName'  value= "<?php echo isset($row->motherName) ? $row->motherName : set_value('motherName');?>" class='form-control'>
                                    </div>      
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6">
                               <div class="form-group">
                                            <label for="username" class="col-sm-4 control-label">Status /ស្ថានភាព  </label>
                                            <div class="col-sm-8">  
                                                <label> <input  disabled type='radio' name='motherStatus'  value='dead' <?php  echo isset($row->motherStatus) ? ($row->motherStatus == 'dead' ? 'checked' : '') : "";?>  > Dead / បានស្លាប់ </label> &nbsp  &nbsp                                     
                                                  <label> <input  disabled type='radio' name='motherStatus'  value='unknown' <?php  echo isset($row->motherStatus) ? ($row->motherStatus == 'unknown' ? 'checked' : '') : "";?>  > Unknown / មិនដឹង </label>                                                             
                                            </div>
                              </div> 
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-12 col-md-6'>
                              <div class="form-group" style='border:1px'>
                                    <label  for='fullname' class='control-label col-sm-4'>Occupation /មុខរបរ</label>  
                                    <div class='col-sm-8'>
                                        <input type='text' disabled name='motherOccupation' value= "<?php echo isset($row->motherOccupation) ? $row->motherOccupation : set_value('motherOccupation');?>"  class='form-control'>
                                    </div>      
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="" class='control-label col-sm-4'> Phone /ទូរស័ព្ទ</label>
                                    <div class='col-sm-8'>
                                       <input type='number'  disabled name='motherPhone' value= "<?php echo isset($row->motherPhone) ? $row->motherPhone : set_value('motherPhone');?>" class='form-control'>
                                    </div>  
                              </div>
                          </div>
                      </div>    
                      <div class='row'>
                          <div class='col-sm-12 col-md-6'>
                              <div class="form-group" style='border:1px'>
                                    <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                    <div class='col-sm-8'>
                                        <input type='text' disabled name='motherCountry' value= "<?php echo isset($row->motherCountry) ? $row->motherCountry : set_value('motherCountry');  echo isset($row->motherCountry) ? set_value('motherCountry') : "Cambodia"; ?>" class='form-control'>
                                    </div>      
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                    <div class='col-sm-8'>
                                       <input type='text' disabled name='motherCity' value= "<?php echo isset($row->motherCity) ? $row->motherCity : set_value('motherCity');?>" class='form-control'>
                                    </div>  
                              </div>
                          </div>
                      </div>  
                      <div class='row'>
                          <div class='col-sm-12 col-md-6'>
                              <div class="form-group" style='border:1px'>
                                    <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                    <div class='col-sm-8'>
                                        <input type='text' disabled name='motherDestrict' value= "<?php echo isset($row->motherDestrict) ? $row->motherDestrict : set_value('motherDestrict');?>" class='form-control'>
                                    </div>      
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                    <div class='col-sm-8'>
                                       <input type='text' disabled name='motherCommune' value= "<?php echo isset($row->motherCommune) ? $row->motherCommune : set_value('motherCommune');?>" class='form-control'>
                                    </div>  
                              </div>
                          </div>
                      </div>   
                       <div class="row">
                              <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                          <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                          <div class="col-sm-8">
                                              <input type='text' disabled name='motherVillage' value= "<?php echo isset($row->motherVillage) ? $row->motherVillage : set_value('motherVillage');?>" class='form-control'>
                                          </div>                         
                                  </div>
                              </div>

                              <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                          <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                          <div class="col-sm-8">
                                             <input type='text' disabled name='motherGroup' value= "<?php echo isset($row->motherGroup) ? $row->motherGroup : set_value('motherGroup');?>" class='form-control'>
                                          </div>
                                    </div>  
                              </div>                          
                      </div>  
                      <div class="row">
                              <div class="col-sm-12 col-md-6">
                                   <div class="form-group">
                                       <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                       <div class="col-sm-8">
                                                <input type='text' disabled name="motherHome" value="<?php echo  isset($row->motherHome) ? $row->motherHome : set_value('motherHome');?>" class="form-control" />
                                       </div>                           
                                  </div>
                              </div>  
                              
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                          <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                          <div class="col-sm-8">
                                              <input type='text' disabled name='motherStreet' value="<?php echo isset($row->motherStreet) ? $row->motherStreet : set_value('motherStreet'); ?>" class='form-control' >
                                          </div>                                      
                                    </div>  
                              </div>                                                                         
                      </div>
                          
                              
                                   <div class="form-group">
                                          <label for="email" class="col-sm-4  col-md-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                          <div class="col-sm-8 col-md-10">                                          
                                              <textarea class='form-control' disabled style='resize:none' name='motherDetail'><?php echo isset($row->motherDetail) ? $row->motherDetail : set_value('motherDetail'); ?></textarea>
                                          </div>                         
                                  </div>         
                    
            </div>  
          </div>
         
       </div> <!-- Mother Information Panel -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id='fatherinformation'>

            <?php 
                if (isset($auto->auto_id)) {
                    $this->db->where('id',$auto->fatherID);
                    $query = $this->db->get('tbl_father_information');
                    $row = $query->row();
                }
             ?>
            <div class="panel panel-default row">
              <div class='panel-heading'>
                <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Father Infomation /  ព័ត៌មានឱពុក </strong></h3>
              </div>          
              <div class="panel-body">  
                         <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Name /ឱពុកឈ្មោះ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='fatherName' value= "<?php echo isset($row->fatherName) ? $row->fatherName : set_value('fatherName');?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                 <div class="form-group">
                                              <label for="username" class="col-sm-4 control-label">Status /ស្ថានភាព  </label>
                                              <div class="col-sm-8">  
                                                  <label> <input disabled type='radio' name='fatherStatus'  value='dead' <?php  echo isset($row->fatherStatus) ? ($row->fatherStatus == 'dead' ? 'checked' : '') : "";?>  > Dead / បានស្លាប់ </label> &nbsp  &nbsp                                     
                                                    <label> <input disabled type='radio' name='fatherStatus'  value='unknown' <?php  echo isset($row->fatherStatus) ? ($row->fatherStatus == 'unknown' ? 'checked' : '') : "";?>  > Unknown / មិនដឹង </label>                                                             
                                              </div>
                                </div> 
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Occupation /មុខរបរ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='fatherOccupation' value= "<?php echo isset($row->fatherOccupation) ? $row->fatherOccupation : set_value('fatherOccupation');?>"  class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'> Phone /ទូរស័ព្ទ</label>
                                      <div class='col-sm-8'>
                                         <input type='number' disabled name='fatherPhone' value= "<?php echo isset($row->fatherPhone) ? $row->fatherPhone : set_value('fatherPhone');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>    
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='fatherCountry' value= "<?php echo isset($row->fatherCountry) ? $row->fatherCountry : set_value('fatherCountry');  echo isset($row->fatherCountry) ? set_value('fatherCountry') : "Cambodia"; ?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                      <div class='col-sm-8'>
                                         <input type='text' disabled name='fatherCity' value= "<?php echo isset($row->fatherCity) ? $row->fatherCity : set_value('fatherCity');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>  
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='fatherDestrict' value= "<?php echo isset($row->fatherDestrict) ? $row->fatherDestrict : set_value('fatherDestrict');?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                      <div class='col-sm-8'>
                                         <input type='text' disabled name='fatherCommune' value= "<?php echo isset($row->fatherCommune) ? $row->fatherCommune : set_value('fatherCommune');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>   
                         <div class="row">
                                <div class="col-sm-12 col-md-6">
                                     <div class="form-group">
                                            <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                            <div class="col-sm-8">
                                                <input type='text' disabled name='fatherVillage' value= "<?php echo isset($row->fatherVillage) ? $row->fatherVillage : set_value('fatherVillage');?>" class='form-control'>
                                            </div>                         
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                            <div class="col-sm-8">
                                               <input type='text' disabled name='fatherGroup' value= "<?php echo isset($row->fatherGroup) ? $row->fatherGroup : set_value('fatherGroup');?>" class='form-control'>
                                            </div>
                                      </div>  
                                </div>                          
                        </div>  
                        <div class="row">
                                <div class="col-sm-12 col-md-6">
                                     <div class="form-group">
                                         <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                         <div class="col-sm-8">
                                                  <input type='text'  disabled name="fatherHome" value="<?php echo  isset($row->fatherHome) ? $row->fatherHome : set_value('fatherHome');?>" class="form-control" />
                                         </div>                           
                                    </div>
                                </div>  
                                
                                  <div class="col-sm-12 col-md-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                            <div class="col-sm-8">
                                                <input type='text' disabled name='fatherStreet' value="<?php echo isset($row->fatherStreet) ? $row->fatherStreet : set_value('fatherStreet'); ?>" class='form-control' >
                                            </div>                                      
                                      </div>  
                                </div>                                                                         
                        </div>
                                     <div class="form-group">
                                            <label for="email" class="col-sm-4 col-md-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                            <div class="col-sm-8 col-md-10">                                          
                                                <textarea class='form-control' disabled style='resize:none' name='fatherDetail'><?php echo isset($row->fatherDetail) ? $row->fatherDetail : set_value('fatherDetail'); ?></textarea>
                                            </div>                         
                                    </div>   
                                       
              </div>  
            </div>
           
        </div> <!-- Father Information Panel --> 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id='parentinformation'>
                 <?php 
                if (isset($auto->auto_id)) {
                    $this->db->where('id',$auto->parentID);
                    $query = $this->db->get('tbl_parent_information');
                    $row = $query->row();
                }
             ?>
            <div class="panel panel-default row">
              <div class='panel-heading'>
                <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Parent Infomation /  ព័ត៌មានអាណាព្យាបាល</strong></h3>
              </div>          
              <div class="panel-body">    
                         <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Name /អាណាព្យាបាលឈ្មោះ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='parentName'  value= "<?php echo isset($row->parentName) ? $row->parentName : set_value('parentName');?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Occupation /មុខរបរ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text'  disabled name='parentOccupation' value= "<?php echo isset($row->parentOccupation) ? $row->parentOccupation : set_value('parentOccupation');?>"  class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'> Phone /ទូរស័ព្ទ</label>
                                      <div class='col-sm-8'>
                                         <input type='number' disabled name='parentPhone' value= "<?php echo isset($row->parentPhone) ? $row->parentPhone : set_value('parentPhone');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>    
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='parentCountry' value= "<?php echo isset($row->parentCountry) ? $row->parentCountry : set_value('parentCountry');  echo isset($row->parentCountry) ? set_value('parentCountry') : "Cambodia"; ?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                      <div class='col-sm-8'>
                                         <input type='text' disabled name='parentCity' value= "<?php echo isset($row->parentCity) ? $row->parentCity : set_value('parentCity');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>  
                        <div class='row'>
                            <div class='col-sm-12 col-md-6'>
                                <div class="form-group" style='border:1px'>
                                      <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                      <div class='col-sm-8'>
                                          <input type='text' disabled name='parentDestrict' value= "<?php echo isset($row->parentDestrict) ? $row->parentDestrict : set_value('parentDestrict');?>" class='form-control'>
                                      </div>      
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                  <div class="form-group">
                                      <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                      <div class='col-sm-8'>
                                         <input type='text' disabled name='parentCommune' value= "<?php echo isset($row->parentCommune) ? $row->parentCommune : set_value('parentCommune');?>" class='form-control'>
                                      </div>  
                                </div>
                            </div>
                        </div>   
                         <div class="row">
                                <div class="col-sm-12 col-md-6">
                                     <div class="form-group">
                                            <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                            <div class="col-sm-8">
                                                <input type='text' disabled name='parentVillage' value= "<?php echo isset($row->parentVillage) ? $row->parentVillage : set_value('parentVillage');?>" class='form-control'>
                                            </div>                         
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                            <div class="col-sm-8">
                                               <input type='text' disabled name='parentGroup' value= "<?php echo isset($row->parentGroup) ? $row->parentGroup : set_value('parentGroup');?>" class='form-control'>
                                            </div>
                                      </div>  
                                </div>                          
                        </div>  
                        <div class="row">
                                <div class="col-sm-12 col-md-6">
                                     <div class="form-group">
                                         <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                         <div class="col-sm-8">
                                                  <input type='text' disabled  name="parentHome" value="<?php echo  isset($row->parentHome) ? $row->parentHome : set_value('parentHome');?>" class="form-control" />
                                         </div>                           
                                    </div>
                                </div>  
                                
                                  <div class="col-sm-12 col-md-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                            <div class="col-sm-8">
                                                <input type='text' disabled name='parentStreet' value="<?php echo isset($row->parentStreet) ? $row->parentStreet : set_value('parentStreet'); ?>" class='form-control' >
                                            </div>                                      
                                      </div>  
                                </div>                                                                         
                        </div>
                            
                                
                                     <div class="form-group">
                                            <label for="email" class="col-sm-4 col-md-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                            <div class="col-sm-8 col-md-10">                                          
                                                <textarea class='form-control' disabled style='resize:none' name='parentDetail'><?php echo isset($row->parentDetail) ? $row->parentDetail : set_value('parentDetail'); ?></textarea>
                                            </div>                         
                                    </div> 
              </div>  
            </div>
        </div> <!-- Mother Information Panel -->
</div>
<script src="<?php echo base_url();?>assets/js/printdiv.js"></script>
<script type="text/javascript">

  $(function(){

    $('#printbutton').click(function(){      
      $("#recieve").printThis();      
    });

  });
</script>