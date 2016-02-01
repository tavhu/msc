<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jasny-bootstrap.css">
<title>Student</title>

   <?php 
            $arr = array('role'=>'form', 'id'=>'registration-form','class'=>'form form-horizontal');
            echo form_open_multipart('student/validation',$arr); 
            $provinces = $this->db->get('tbl_province');
  ?>    
<div class="container font-metal ">
    <div class="row">
        <div class="under_line">
            <h3><i class='fa fa-user-plus'></i> Student Registration </h3>
        </div>
    </div>
    <div class="row"> 

        <div class="panel panel-default">
      		<div class='panel-heading' >
      			<h3 class='panel-title'><strong> <i class='fa fa-user'></i> Student information / ព័ត៌មានផ្ទាល់ខ្លួន </strong></h3>
      		</div>       	 	
      		<div class="panel-body">  
                <div class="row">
                  <div class="col-sm-12">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->upload->display_errors('<div class="alert alert-danger">','</div>'); ?>
                    <?php echo isset($success) ? '<div class="alert alert-success">'. $success .'</div>':''; ?>
                    <?php echo isset($failed) ? '<div class="alert alert-danger">'. $failed .'</div>':''; ?>
                  </div>
                </div>
      					<div class="row">                  
                  <div class="col-sm-9">
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>ID /លេខកូដ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='studentID' value= "<?php echo isset($row->studentID) ? $row->studentID : set_value('studentID');?>" class='form-control' data-validation='required' >
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-6'>Enroll Date/ថ្ងៃស្រង់ព័ត៌មាន</label>
                                  <div class='col-sm-6'>
                                     <div class='input-group date'>

                        <?php 

                          $defaultDate = date('Y-m-d');
                          $setvalue = set_value('studentenrollDate');
                          if (! empty($setvalue)) {
                            $defaultDate = $setvalue ;
                          }

                         ?>
                                              <input type='text' name="studentenrollDate" id='studentenrollDate' value='<?php echo isset($row->studentenrollDate) ? $row->studentenrollDate : $defaultDate;?>' class="form-control input-sm datepicker"/>
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                    </div> 
                                  </div>  
                            </div>
                        </div>
                    </div>  
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>FullName</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='studentNameInEnglish' placeholder='In English'value= "<?php echo isset($row->studentNameInEnglish) ? $row->studentNameInEnglish : set_value('studentNameInEnglish');?>" class='form-control' data-validation='required' >
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>ឈ្មោះពេញ</label>
                                  <div class='col-sm-8'>
                                     <input type='text' name='studentNameInKhmer'  placeholder='ជាភាសា ខ្មែរ '  value= "<?php echo isset($row->studentNameInKhmer) ? $row->studentNameInKhmer : set_value('studentNameInKhmer');?>" class='form-control' data-validation='required' >
                                  </div>  
                            </div>
                        </div>
                    </div>   
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Date of birth /ថ្ងៃកំណើត</label>
                                        <div class="col-sm-8">
                                             <div class='input-group date'>
                                              <input type='text' name="studentDateofbirth" id='studentDateofbirth' value='<?php echo isset($row->studentDateofbirth) ? $row->studentDateofbirth : set_value('studentDateofbirth');?>' class="form-control input-sm datepicker" />
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div> 
                                        </div>                         
                                </div>
                            </div>

                            <div class="col-sm-6">
                                
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Nationality /សញ្ជាតិ</label>
                                        <div class="col-sm-8" >
                                            
                                            <select class='form-control' name='studentNationality' id='studentNationality'>                                             
                                              <option  <?php  if (isset($row->studentNationality)) { if($row->studentNationality == "Khmer")  echo "selected"; } ?> value="Khmer">Khmer</option>
                                              <option  <?php  if (isset($row->studentNationality)) { if($row->studentNationality == "Khmer-Kouy")  echo "selected"; }?> value="Khmer-Kouy">Khmer-Kouy</option>
                                              <option  <?php  if (isset($row->studentNationality)) { if($row->studentNationality == "Khmer-Pnong") echo "selected"; }?> value="Khmer-Pnong">Khmer-Pnong</option>
                                              <option  <?php  if (isset($row->studentNationality)) { if($row->studentNationality == "Khmer-Islam") echo "selected"; }?> value="Khmer-Islam">Khmer-Islam</option>
                                            </select>
                                        </div>
                                  </div>  
                            </div>                          
                    </div>  
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="username" class="col-sm-4 control-label">Gender /ភេទ  </label>
                                        <div class="col-sm-8">  
                                            <label> <input type='radio' name='studentGender'  value='male' <?php  echo isset($row->studentGender) ? ($row->studentGender == 'male' ? 'checked' : '') : "";?>  > Male </label>                                       
                                            <label style='padding-left:25px;'> <input type='radio' name='studentGender' <?php echo isset($row->studentGender) ?  ($row->studentGender == 'female' ? 'checked' : '') : "";?> value='female'> Female </label>                             
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-6">                            
                                  <div class="form-group">
                                          <label for="username" class="col-sm-4 control-label">Status /ស្ថានភាព  </label>
                                          <div class="col-sm-8">  
                                              <label> <input type='checkbox' name='studentStatus'  value='1' <?php  echo isset($row->studentStatus) ? ($row->studentStatus == '1' ? 'checked' : '') : "";?>  > Dead / បានស្លាប់ </label> 
                                          </div>
                                  </div>                           
                            </div>                         
                    </div>                     
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Family Members / សមាជិកគ្រួសារ</label>
                                       <div class="col-sm-8">                                        
                                            <input type='number'  name="studentFamilyMembers" value="<?php echo  isset($row->studentFamilyMembers) ? $row->studentFamilyMembers : set_value('studentFamilyMembers');?>" class="form-control" />
                                       </div>                                                            
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>i'm a /គឺជាកូនទី</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='studentIm' value="<?php echo isset($row->studentIm) ? $row->studentIm : set_value('studentIm'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>                  
                     <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Disability / ពិការភាព</label>
                                        <div class="col-sm-10">                                          
                                            <textarea class='form-control' style='resize:none' name='studentDisability' ><?php echo isset($row->studentDisability) ? $row->studentDisability : set_value('studentDisability'); ?></textarea>
                                        </div>                         
                                </div>                       
                  </div><!-- end colume right-->
                  <!-- Profile Column-->               
                  <div class="col-sm-3">
                      <div class="row" style='text-align:center'>
                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 240px;">
                                    <img src="<?php echo site_url();?>assets/images/<?php echo isset($row->imgPath)  ?  $row->imgPath : "unavailable.jpg";   ?>" alt="..." style="width:200px;height:240px">
                            </div>
                            <div>
                              <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"  ></span>
                              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                          </div>
                      </div>                   
                  </div><!-- end picture porfile-->
                  <div class="col-sm-12">                
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Entry Date / ថ្ងៃចូលមណ្ឌល</label>
                                     <div class="col-sm-8">
                                          <div class='input-group date' >
                                              <input type='text'  name="studentEntryDate" value="<?php echo  isset($row->studentEntryDate) ? $row->studentEntryDate : set_value('studentEntryDate');?>" class="form-control input-sm datepicker" />
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div> 
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-5'>Grade / ជាសិស្សថ្នាក់ទី</label>
                                        <div class="col-sm-7">
                                            <input type='text' name='studentEntryDateGrade' value="<?php echo isset($row->studentEntryDateGrade) ? $row->studentEntryDateGrade : set_value('studentEntryDateGrade'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>                
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Leaving Date / ថ្ងៃចាកចេញពីមណ្ឌល</label>
                                     <div class="col-sm-8">
                                          <div class='input-group date' >
                                              <input type='text'  name="studentLeavingDate" value="<?php echo  isset($row->studentLeavingDate) ? $row->studentLeavingDate : set_value('studentLeavingDate');?>" class="form-control input-sm datepicker" />
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div> 
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-5'>Grade / ជាសិស្សថ្នាក់ទី</label>
                                        <div class="col-sm-7">
                                            <input type='text' name='studentLeavingDateGrade' value="<?php echo isset($row->studentLeavingDateGrade) ? $row->studentLeavingDateGrade : set_value('studentLeavingDateGrade'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                     </div>
                     <div class="row">
                     <div class="col-sm-6 ">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Job / មុខរបរ</label>
                                     <div class="col-sm-8">
                                          <div class="form-group">                                              
                                                  <div class="col-sm-8">  
                                                      <label> <input type='radio' name='studentJob' id='radioStudying' value='studying'  <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? 'checked' : '') : "checked";  ?>   > Studying </label>                                       
                                                      <label style='padding-left:25px;'> <input type='radio'  id='radioWorking'name='studentJob'  value='working' <?php  echo isset($row->studentJob) ? ($row->studentJob == 'working' ? 'checked' : '') : "";?>> Working </label>                             
                                                  </div>
                                          </div>
                                     </div>                           
                                </div>
                    </div> 
                    <div class="col-sm-6 studyingClass <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? '' : 'hidden') : "";  ?> "​>
                                  <div class="form-group">
                                        <label class='control-label col-sm-5'>School / ទីកន្លែងសិក្សារ</label>
                                        <div class="col-sm-7">
                                            <input type='text' name='studentSchool' value="<?php echo isset($row->studentSchool) ? $row->studentSchool : set_value('studentSchool'); ?>" class='form-control ' >
                                        </div>                                      
                                  </div>  
                            </div>    
                                     
                    </div>   
                    <div class="row studyingClass <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? '' : 'hidden') : "";  ?> ">
                       <div class="col-sm-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-4'>Grade Level / ជាសិស្ស</label>
                                            <div class="col-sm-8">                                             
                                                <select class='form-control' name='studentGradeLevel'>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "0") echo "selected"; }?> value='0' >Choose</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "1") echo "selected"; }?> value='1'>Grade 1 / ថ្នាក់ទី ១</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "2") echo "selected"; }?> value='2' >Grade 2 / ថ្នាក់ទី ២</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "3") echo "selected"; }?> value='3'>Grade 3 / ថ្នាក់ទី ៣</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "4") echo "selected"; }?> value='4'>Grade 4 / ថ្នាក់ទី ៤</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "5") echo "selected"; }?> value='5'>Grade 5 / ថ្នាក់ទី ៥</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "6") echo "selected"; }?> value='6'>Grade 6 / ថ្នាក់ទី ៦</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "7") echo "selected"; }?> value='7'>Grade 7 / ថ្នាក់ទី ៧</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "8") echo "selected"; }?> value='8'>Grade 8 / ថ្នាក់ទី ៨</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "9") echo "selected"; }?> value='9'>Grade 9 / ថ្នាក់ទី ៩</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "10") echo "selected"; }?> value='10'>Grade 10 / ថ្នាក់ទី ១០</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "11") echo "selected"; }?> value='11'>Grade 11 / ថ្នាក់ទី ១១</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "12") echo "selected"; }?> value='12'>Grade 12 / ថ្នាក់ទី ១២</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "13") echo "selected"; }?> value='13'>Year 1 / ឆ្នាំទី ១</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "14") echo "selected"; }?> value='14'>Year 2 / ឆ្នាំទី ២</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "15") echo "selected"; }?> value='15'>Year 3 / ឆ្នាំទី ៣</option>
                                                  <option  <?php  if (isset($row->studentGradeLevel)) { if($row->studentGradeLevel == "16") echo "selected"; }?> value='16'>Year 4 / ឆ្នាំទី ៤</option>
                                                </select>
                                            </div>                                      
                                    </div>  
                      </div> 
                      <div class="col-sm-6">
                                      <div class="form-group">
                                            <label class='control-label col-sm-5'>Academy Year / ឆ្នាំសិកស្សារ</label>
                                            <?php 

                                              $defaultAcademic = date('Y');
                                              $inputdate = set_value("studentAcademyYear");
                                              if ( ! empty ($inputdate)) {
                                                $defaultAcademic = $inputdate;
                                              }
                                             ?>
                                            <div class="col-sm-7">
                                                <div class='input-group date' >
                                              <input type='text'  name="studentAcademyYear" value="<?php echo  isset($row->studentAcademyYear) ? $row->studentAcademyYear : $defaultAcademic;?>" class="form-control input-sm " />
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div> 
                                            </div>                                      
                                    </div>  
                      </div>                     
                    </div>  
                     <div class="row  workingClass <?php  echo isset($row->studentJob) ? ($row->studentJob == 'studying' ? 'hidden' : '') : "hidden";  ?>">
                      <div class="col-sm-12">
                          <div class="form-group">
                              <label class='control-label col-sm-3'>Detail / ព័ត៌មាន​​​លំអិត</label>
                              <div class="col-sm-9">
                                 <textarea class='form-control' name='studentDetail'><?php echo  isset($row->studentDetail) ? $row->studentDetail : set_value('studentDetail');?></textarea>
                              </div>                                              
                          </div>  
                      </div>
                    </div>  
                      <div class="row">
                            <div class="col-sm-2">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-12'>Active /អនុញ្ញាត</label>                                                           
                                </div>
                            </div>   
                            <div class="col-sm-8">
                                <label> <input type='checkbox' name='studentActive'  value='1' <?php  echo isset($row->studentActive) ? ($row->studentActive == '1' ? 'checked' : '') : "";?>  > Add to wating List / ដាក់បញ្ចូលទៅបញ្ចីសិស្សដែលត្រូវរងចាំចូលស្នាក់នៅមណ្ឌល</label>                                       
                            </div>                                                                
                     </div>


                  </div>
                  
                </div>	 

      		</div>	
      	</div>
        <!--  Student Information Panel -->

        <?php  

            if (isset($auto->auto_id)) {
                $this->db->where('id',$auto->placeofbirthID);
                $query = $this->db->get('tbl_placeofbirth');
                $row = $query->row();
            }

         ?>
        <div class="panel panel-default">
          <div class='panel-heading'>
            <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Place of Birth / ទីកន្លែងកំណើត </strong></h3>
          </div>          
          <div class="panel-body">           
                <div class="row">
                  <div class="col-sm-12">
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='placeofbirthCountry' value= "Cambodia" class='form-control' data-validation='required' >
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                  <div class='col-sm-8'>                                  
                                  <select class='form-control' name='placeofbirthCity' data-validation='required'>
                                    <option>Please Choose</option>
                          <?php 
                                   $province_from_setvalue = set_value('placeofbirthCity');
                                   foreach ($provinces->result() as  $value) {
                                    $selected = "";

                                    if (isset($row->placeofbirthCity)) {                                      
                                        if ($row->placeofbirthCity === $value->name) {
                                          $selected = "selected";
                                        }
                                    }else {
                                        if ($province_from_setvalue == $value->name) {
                                             $selected = "selected";
                                        }
                                    }

                                     echo "<option value='$value->name' $selected >$value->name</option>";
                                   }


                           ?>
                                  </select>
                                  </div>  
                            </div>
                        </div>
                    </div>  
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='placeofbirthDestrict' value= "<?php echo isset($row->placeofbirthDestrict) ? $row->placeofbirthDestrict : set_value('placeofbirthDestrict');?>" class='form-control'  >
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                  <div class='col-sm-8'>
                                     <input type='text' name='placeofbirthCommune' value= "<?php echo isset($row->placeofbirthCommune) ? $row->placeofbirthCommune : set_value('placeofbirthCommune');?>" class='form-control'  >
                                  </div>  
                            </div>
                        </div>
                    </div>   
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='placeofbirthVillage' value= "<?php echo isset($row->placeofbirthVillage) ? $row->placeofbirthVillage : set_value('placeofbirthVillage');?>" class='form-control'  >
                                        </div>                         
                                </div>
                            </div>

                            <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                        <div class="col-sm-8">
                                           <input type='text' name='placeofbirthGroup' value= "<?php echo isset($row->placeofbirthGroup) ? $row->placeofbirthGroup : set_value('placeofbirthGroup');?>" class='form-control'  >
                                        </div>
                                  </div>  
                            </div>                          
                    </div>  
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Home/Hospital / ផ្ទះឬមន្ទីរពេទ្យ</label>
                                     <div class="col-sm-8">                                       
                                              <input type='text'  name="placeofbirthHomeHospital" value="<?php echo  isset($row->placeofbirthHomeHospital) ? $row->placeofbirthHomeHospital : set_value('placeofbirthHomeHospital');?>" class="form-control" />                                            
                                            
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='placeofbirthStreet' value="<?php echo isset($row->placeofbirthStreet) ? $row->placeofbirthStreet : set_value('placeofbirthStreet'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>
                        
                            
                                 <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                        <div class="col-sm-10">                                          
                                            <textarea class='form-control' style='resize:none' name='placeofbirthDetail'><?php echo isset($row->placeofbirthDetail) ? $row->placeofbirthDetail : set_value('placeofbirthDetail'); ?></textarea>
                                        </div>                         
                                </div>          
                                         
                  </div><!-- end colume right-->
                </div>                      
               
          </div>  
        </div>
        <!-- place of birth Panel -->
        <?php 
            if (isset($auto->auto_id)) {
                $this->db->where('id',$auto->addressID);
                $query = $this->db->get('tbl_address');
                $row = $query->row();
            }
         ?>
        <div class="panel panel-default">
          <div class='panel-heading'>
            <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Address / អាសយដ្ឋានស្នាក់នៅ </strong></h3>
          </div>          
          <div class="panel-body">           
                <div class="row">
                  <div class="col-sm-12">
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='addressCountry' value= "Cambodia" class='form-control' value= "<?php echo isset($row->addressCountry) ? $row->addressCountry : set_value('addressCountry');?>" >
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                  <div class='col-sm-8'>
                                    
                                
                                <select  name='addressCity' class='form-control' >
                                  <option>Please Choose</option>
                                
                             <?php 
                                   $province_from_setvalue = set_value('addressCity');
                                   foreach ($provinces->result() as  $value) {
                                    $selected = "";

                                    if (isset($row->addressCity)) {                                      
                                        if ($row->addressCity === $value->name) {
                                          $selected = "selected";
                                        }
                                    }else {
                                        if ($province_from_setvalue == $value->name) {
                                             $selected = "selected";
                                        }
                                    }

                                     echo "<option value='$value->name' $selected >$value->name</option>";
                                   }


                           ?>
                            </select>
                                  </div>  
                            </div>
                        </div>
                    </div>  
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='addressDestrict' value= "<?php echo isset($row->addressDestrict) ? $row->addressDestrict : set_value('addressDestrict');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                  <div class='col-sm-8'>
                                     <input type='text' name='addressCommune' value= "<?php echo isset($row->addressCommune) ? $row->addressCommune : set_value('addressCommune');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>   
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='addressVillage' value= "<?php echo isset($row->addressVillage) ? $row->addressVillage : set_value('addressVillage');?>" class='form-control'>
                                        </div>                         
                                </div>
                            </div>

                            <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                        <div class="col-sm-8">
                                           <input type='text' name='addressGroup' value= "<?php echo isset($row->addressGroup) ? $row->addressGroup : set_value('addressGroup');?>" class='form-control'>
                                        </div>
                                  </div>  
                            </div>                          
                    </div>  
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                     <div class="col-sm-8">                                     
                                              <input type='text'  name="addressHome" value="<?php echo  isset($row->addressHome) ? $row->addressHome : set_value('addressHome');?>" class="form-control" />                                                                                    
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='addressStreet' value="<?php echo isset($row->addressStreet) ? $row->addressStreet : set_value('addressStreet'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>
                        
                            
                                 <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                        <div class="col-sm-10">                                          
                                            <textarea class='form-control' style='resize:none' name='addressDetail'><?php echo isset($row->addressDetail) ? $row->addressDetail : set_value('addressDetail'); ?></textarea>
                                        </div>                         
                                </div>    
                  </div><!-- end colume right-->
                </div>                      
                 
          </div>  
        </div>
        <!-- Address Panel -->

        <?php 
            if (isset($auto->auto_id)) {
                $this->db->where('id',$auto->motherID);
                $query = $this->db->get('tbl_mother_information');
                $row = $query->row();
            }
         ?>
        <div class="panel panel-default">
          <div class='panel-heading'>
            <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Mother Infomation /  ព័ត៌មានម្តាយ </strong></h3>
          </div>          
          <div class="panel-body">  
            
                <div class="row">
                  <div class="col-sm-12">
                     <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Name /ម្តាយឈ្មោះ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='motherName'  value= "<?php echo isset($row->motherName) ? $row->motherName : set_value('motherName');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                             <div class="form-group">
                                          <label for="username" class="col-sm-4 control-label">Status /ស្ថានភាព  </label>
                                          <div class="col-sm-8">  
                                              <label> <input type='radio' name='motherStatus'  value='dead' <?php  echo isset($row->motherStatus) ? ($row->motherStatus == 'dead' ? 'checked' : '') : "";?>  > Dead / បានស្លាប់ </label> &nbsp  &nbsp                                     
                                                <label> <input type='radio' name='motherStatus'  value='unknown' <?php  echo isset($row->motherStatus) ? ($row->motherStatus == 'unknown' ? 'checked' : '') : "";?>  > Unknown / មិនដឹង </label>                                                             
                                          </div>
                            </div> 
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Occupation /មុខរបរ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='motherOccupation' value= "<?php echo isset($row->motherOccupation) ? $row->motherOccupation : set_value('motherOccupation');?>"  class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> Phone /ទូរស័ព្ទ</label>
                                  <div class='col-sm-8'>
                                     <input type='number' name='motherPhone' value= "<?php echo isset($row->motherPhone) ? $row->motherPhone : set_value('motherPhone');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>    
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='motherCountry' value= "<?php echo isset($row->motherCountry) ? $row->motherCountry : set_value('motherCountry');  echo isset($row->motherCountry) ? set_value('motherCountry') : "Cambodia"; ?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                  <div class='col-sm-8'>    

                                    <select  name='motherCity' class='form-control' >
                                        <option>Please Choose</option>
                                      
                                   <?php 
                                         $province_from_setvalue = set_value('motherCity');
                                         foreach ($provinces->result() as  $value) {
                                          $selected = "";

                                          if (isset($row->motherCity)) {                                      
                                              if ($row->motherCity === $value->name) {
                                                $selected = "selected";
                                              }
                                          }else {
                                              if ($province_from_setvalue == $value->name) {
                                                   $selected = "selected";
                                              }
                                          }

                                           echo "<option value='$value->name' $selected >$value->name</option>";
                                         }

                                 ?>
                                  </select>

                                  </div>  
                            </div>
                        </div>
                    </div>  
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='motherDestrict' value= "<?php echo isset($row->motherDestrict) ? $row->motherDestrict : set_value('motherDestrict');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                  <div class='col-sm-8'>
                                     <input type='text' name='motherCommune' value= "<?php echo isset($row->motherCommune) ? $row->motherCommune : set_value('motherCommune');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>   
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='motherVillage' value= "<?php echo isset($row->motherVillage) ? $row->motherVillage : set_value('motherVillage');?>" class='form-control'>
                                        </div>                         
                                </div>
                            </div>

                            <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                        <div class="col-sm-8">
                                           <input type='text' name='motherGroup' value= "<?php echo isset($row->motherGroup) ? $row->motherGroup : set_value('motherGroup');?>" class='form-control'>
                                        </div>
                                  </div>  
                            </div>                          
                    </div>  
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                     <div class="col-sm-8">
                                              <input type='text'  name="motherHome" value="<?php echo  isset($row->motherHome) ? $row->motherHome : set_value('motherHome');?>" class="form-control" />
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='motherStreet' value="<?php echo isset($row->motherStreet) ? $row->motherStreet : set_value('motherStreet'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>
                        
                            
                                 <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                        <div class="col-sm-10">                                          
                                            <textarea class='form-control' style='resize:none' name='motherDetail'><?php echo isset($row->motherDetail) ? $row->motherDetail : set_value('motherDetail'); ?></textarea>
                                        </div>                         
                                </div>          
                                           
                  </div><!-- end colume right-->
                </div>                      
                  
          </div>  
        </div>
        <!-- Mother Information Panel -->

        <?php 
            if (isset($auto->auto_id)) {
                $this->db->where('id',$auto->fatherID);
                $query = $this->db->get('tbl_father_information');
                $row = $query->row();
            }
         ?>
        <div class="panel panel-default">
          <div class='panel-heading'>
            <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Father Infomation /  ព័ត៌មានឱពុក </strong></h3>
          </div>          
          <div class="panel-body">  
             
                <div class="row">
                  <div class="col-sm-12">
                     <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Name /ឱពុកឈ្មោះ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='fatherName' value= "<?php echo isset($row->fatherName) ? $row->fatherName : set_value('fatherName');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                             <div class="form-group">
                                          <label for="username" class="col-sm-4 control-label">Status /ស្ថានភាព  </label>
                                          <div class="col-sm-8">  
                                              <label> <input type='radio' name='fatherStatus'  value='dead' <?php  echo isset($row->fatherStatus) ? ($row->fatherStatus == 'dead' ? 'checked' : '') : "";?>  > Dead / បានស្លាប់ </label> &nbsp  &nbsp                                     
                                                <label> <input type='radio' name='fatherStatus'  value='unknown' <?php  echo isset($row->fatherStatus) ? ($row->fatherStatus == 'unknown' ? 'checked' : '') : "";?>  > Unknown / មិនដឹង </label>                                                             
                                          </div>
                            </div> 
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Occupation /មុខរបរ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='fatherOccupation' value= "<?php echo isset($row->fatherOccupation) ? $row->fatherOccupation : set_value('fatherOccupation');?>"  class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> Phone /ទូរស័ព្ទ</label>
                                  <div class='col-sm-8'>
                                     <input type='number' name='fatherPhone' value= "<?php echo isset($row->fatherPhone) ? $row->fatherPhone : set_value('fatherPhone');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>    
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='fatherCountry' value= "<?php echo isset($row->fatherCountry) ? $row->fatherCountry : set_value('fatherCountry');  echo isset($row->fatherCountry) ? set_value('fatherCountry') : "Cambodia"; ?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                  <div class='col-sm-8'>
                                  
                                  <select  name='fatherCity' class='form-control' >
                                        <option>Please Choose</option>
                                      
                                   <?php 
                                         $province_from_setvalue = set_value('fatherCity');
                                         foreach ($provinces->result() as  $value) {
                                          $selected = "";

                                          if (isset($row->fatherCity)) {                                      
                                              if ($row->fatherCity === $value->name) {
                                                $selected = "selected";
                                              }
                                          }else {
                                              if ($province_from_setvalue == $value->name) {
                                                   $selected = "selected";
                                              }
                                          }

                                           echo "<option value='$value->name' $selected >$value->name</option>";
                                         }

                                 ?>
                                  </select>

                                  </div>  
                            </div>
                        </div>
                    </div>  
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='fatherDestrict' value= "<?php echo isset($row->fatherDestrict) ? $row->fatherDestrict : set_value('fatherDestrict');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                  <div class='col-sm-8'>
                                     <input type='text' name='fatherCommune' value= "<?php echo isset($row->fatherCommune) ? $row->fatherCommune : set_value('fatherCommune');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>   
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='fatherVillage' value= "<?php echo isset($row->fatherVillage) ? $row->fatherVillage : set_value('fatherVillage');?>" class='form-control'>
                                        </div>                         
                                </div>
                            </div>

                            <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                        <div class="col-sm-8">
                                           <input type='text' name='fatherGroup' value= "<?php echo isset($row->fatherGroup) ? $row->fatherGroup : set_value('fatherGroup');?>" class='form-control'>
                                        </div>
                                  </div>  
                            </div>                          
                    </div>  
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                     <div class="col-sm-8">
                                              <input type='text'  name="fatherHome" value="<?php echo  isset($row->fatherHome) ? $row->fatherHome : set_value('fatherHome');?>" class="form-control" />
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='fatherStreet' value="<?php echo isset($row->fatherStreet) ? $row->fatherStreet : set_value('fatherStreet'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>
                                 <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                        <div class="col-sm-10">                                          
                                            <textarea class='form-control' style='resize:none' name='fatherDetail'><?php echo isset($row->fatherDetail) ? $row->fatherDetail : set_value('fatherDetail'); ?></textarea>
                                        </div>                         
                                </div>          
                                           
                  </div><!-- end colume right-->
                </div>                      
                  
          </div>  
        </div>
        <!-- Father Information Panel --> 
        <?php 
            if (isset($auto->auto_id)) {
                $this->db->where('id',$auto->parentID);
                $query = $this->db->get('tbl_parent_information');
                $row = $query->row();
            }
         ?>
        <div class="panel panel-default">
          <div class='panel-heading'>
            <h3 class='panel-title'><strong> <i class='fa fa-user'></i> Parent Infomation /  ព័ត៌មានអាណាព្យាបាល</strong></h3>
          </div>          
          <div class="panel-body">            
                <div class="row">
                  <div class="col-sm-12">
                     <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Name /អាណាព្យាបាលឈ្មោះ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='parentName'  value= "<?php echo isset($row->parentName) ? $row->parentName : set_value('parentName');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Occupation /មុខរបរ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='parentOccupation' value= "<?php echo isset($row->parentOccupation) ? $row->parentOccupation : set_value('parentOccupation');?>"  class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> Phone /ទូរស័ព្ទ</label>
                                  <div class='col-sm-8'>
                                     <input type='number' name='parentPhone' value= "<?php echo isset($row->parentPhone) ? $row->parentPhone : set_value('parentPhone');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>    
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Country /ប្រទេស</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='parentCountry' value= "<?php echo isset($row->parentCountry) ? $row->parentCountry : set_value('parentCountry');  echo isset($row->parentCountry) ? set_value('parentCountry') : "Cambodia"; ?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'> City /ខេត្តក្រុង</label>
                                  <div class='col-sm-8'>
                                                                    
                                     <select  name='parentCity' class='form-control' >
                                        <option>Please Choose</option>
                                      
                                   <?php 
                                         $province_from_setvalue = set_value('parentCity');
                                         foreach ($provinces->result() as  $value) {
                                          $selected = "";

                                          if (isset($row->parentCity)) {                                      
                                              if ($row->parentCity === $value->name) {
                                                $selected = "selected";
                                              }
                                          }else {
                                              if ($province_from_setvalue == $value->name) {
                                                   $selected = "selected";
                                              }
                                          }

                                           echo "<option value='$value->name' $selected >$value->name</option>";
                                         }

                                 ?>
                                  </select>

                                  </div>  
                            </div>
                        </div>
                    </div>  
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group" style='border:1px'>
                                  <label  for='fullname' class='control-label col-sm-4'>Destrict /ស្រុកខណ្ឌ</label>  
                                  <div class='col-sm-8'>
                                      <input type='text' name='parentDestrict' value= "<?php echo isset($row->parentDestrict) ? $row->parentDestrict : set_value('parentDestrict');?>" class='form-control'>
                                  </div>      
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>Commune /ឃុំសង្កាត់</label>
                                  <div class='col-sm-8'>
                                     <input type='text' name='parentCommune' value= "<?php echo isset($row->parentCommune) ? $row->parentCommune : set_value('parentCommune');?>" class='form-control'>
                                  </div>  
                            </div>
                        </div>
                    </div>   
                     <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Village /ភូមិ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='parentVillage' value= "<?php echo isset($row->parentVillage) ? $row->parentVillage : set_value('parentVillage');?>" class='form-control'>
                                        </div>                         
                                </div>
                            </div>

                            <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Group /ក្រុម</label>
                                        <div class="col-sm-8">
                                           <input type='text' name='parentGroup' value= "<?php echo isset($row->parentGroup) ? $row->parentGroup : set_value('parentGroup');?>" class='form-control'>
                                        </div>
                                  </div>  
                            </div>                          
                    </div>  
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="" class='control-label col-sm-4'>Home /ផ្ទះលេខ</label>
                                     <div class="col-sm-8">
                                              <input type='text'  name="parentHome" value="<?php echo  isset($row->parentHome) ? $row->parentHome : set_value('parentHome');?>" class="form-control" />
                                     </div>                           
                                </div>
                            </div>  
                            
                              <div class="col-sm-6">
                                  <div class="form-group">
                                        <label class='control-label col-sm-4'>Street /ផ្លូវ</label>
                                        <div class="col-sm-8">
                                            <input type='text' name='parentStreet' value="<?php echo isset($row->parentStreet) ? $row->parentStreet : set_value('parentStreet'); ?>" class='form-control' >
                                        </div>                                      
                                  </div>  
                            </div>                                                                         
                    </div>
                        
                            
                                 <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
                                        <div class="col-sm-10">                                          
                                            <textarea class='form-control' style='resize:none' name='parentDetail'><?php echo isset($row->parentDetail) ? $row->parentDetail : set_value('parentDetail'); ?></textarea>
                                        </div>                         
                                </div> 
                        <hr>  
                        <div class='form-group'>
                          <div class='col-sm-2'></div>  
                          <div class='col-sm-6'>
                            <input type='hidden' name='uid' value='<?php echo $this->uri->segment(3);?>' class='hidden'>
                            <input  type='hidden' name='data_entry_id' value='<?php echo $this->session->userdata('user_id');?>'>
                            <input type='hidden' name='secret' value='<?php echo isset($auto->auto_id) ? "EDIT" : "INSERT"; ?>'   class='hidden'>
                            <input type='submit' value='<?php echo isset($auto->auto_id) ? "Update" : "Save changes";  ?>' <?php echo isset($disabled) ? $disabled : "";?> class='btn btn-primary'>                            
                            <input type='button' value='Cancel'  class='btn btn-default' id='cancel')>
                          </div>                                                    
                        </div>                      
                  </div><!-- end colume right-->
                </div>                      
       
          </div>  
        </div>
        <!-- Mother Information Panel -->



    </div>  
</div>
   
<?php echo form_close();?>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jasny-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.form-validator.min.js"></script>
<script type="text/javascript">


</script>
<script type="text/javascript">
  $(function(){

      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: 'now',    
       });
      $('input[name="studentJob"]').click(function() {

        if($('#radioWorking').is(':checked')) { $(".workingClass").removeClass('hidden'); $(".studyingClass").addClass('hidden'); }
        if($('#radioStudying').is(':checked')) { $(".studyingClass").removeClass('hidden'); $(".workingClass").addClass('hidden'); }
      });

      $("#cancel").click(function(){
        window.history.back();        
      });
  })

</script>

<script> $.validate();</script>