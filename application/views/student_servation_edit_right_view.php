<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datepicker.css">
<?php 
  
    $arr = array('role'=>'form', 'id'=>'registration-form','class'=>'form');
    echo form_open('student/servation_validation',$arr); 
  
 ?>
<div class="col-sm-9">
  <div class="row">
      <div class="col-sm-10 form-horizontal">
         <div class="form-group">
                  <label for="email" class='col-sm-4 label-control'>ID:</label>
                  <div class="col-sm-6">
                    <?php echo isset($row->studentID) ? $row->studentID : "Something wrong here! "; ?>
                  </div>
          </div>
          <div class="form-group">
                  <label for="email" class='col-sm-4 label-control'>Student Name:</label>
                  <div class="col-sm-6">
                    <?php echo humanize(isset($row->studentNameInEnglish) ? $row->studentNameInEnglish : "Something wrong here! "); ?> / <?php echo isset($row->studentNameInKhmer) ? $row->studentNameInKhmer : " "; ?>
                  </div>
          </div>
          <div class="form-group">
                  <label for="email" class='col-sm-4 label-control'>Date of Servation</label>
                  <div class="col-sm-6">
                    <div class='input-group date'>
                      <?php 

                          $defaultDate = date('Y-m-d');
                          $setvalue = set_value('dateofservation');
                          if (! empty($setvalue)) {
                            $defaultDate = $setvalue ;
                          }

                      ?>
                            <input type='text' name="dateofservation" value='<?php echo isset($servation_row->dateofservation) ? $servation_row->dateofservation : $defaultDate;?>' class="form-control input-sm datepicker"/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                      </div>
                  </div>
          </div>
          <div class="form-group">
                  <label for="email" class='col-sm-4 label-control'>Data Entry Name</label>
                  <div class="col-sm-6">
                     <?php 

                              echo humanize($this->session->userdata('real_name'));
                          
                      ?>
                  </div>
          </div>          
      </div>
  </div>
<div class="row">
 <div class="panel panel-default">
        <div class='panel-heading'>
           <a data-toggle="collapse" class='no-decoration' href="#collapse1" ><h3 class='panel-title'><strong> Physical Function</strong></h3></a> 
        </div>   

    <div id="collapse1" class="panel-collapse ">       
    <div class="panel-body">
      
            <div class="form-group">
              <label for="email">1.01    Bref description of the disability</label>
              <input type="text" name='oneofone' value="<?php echo isset($servation_row->oneofone) ? $servation_row->oneofone : set_value('oneofone'); ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="pwd">1.02  Has the diagnosis been set by a specialist and did he / she make a plan? :</label>
              <input type="text"  name="oneoftwo" value="<?php echo isset($servation_row->oneoftwo) ? $servation_row->oneoftwo : set_value('oneoftwo'); ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="pwd">1.03 Does the child useand medicine?</label>  <br>
              <label> <input type='radio' name='oneofthreeYN'  value='Yes' <?php  echo isset($servation_row->oneofthreeYN) ? ($servation_row->oneofthreeYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofthreeYN' <?php echo isset($servation_row->oneofthreeYN) ?  ($servation_row->oneofthreeYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'> if Yes, Specify</span>
              <input type="text"  name="oneofthree" value="<?php echo isset($servation_row->oneofthree) ? $servation_row->oneofthree : set_value('oneofthree'); ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="pwd">1.04 How is the child's general health condition (other than the disability)?</label>
              <input type="text" name="oneoffour" value="<?php echo isset($servation_row->oneoffour) ? $servation_row->oneoffour : set_value('oneoffour'); ?>" class="form-control" >
            </div>
             <div class="form-group">
              <label for="pwd">1.05 Does the child have fits</label>  <br>
              <label> <input type='radio' name='oneoffiveYN'  value='Yes' <?php  echo isset($servation_row->oneoffiveYN) ? ($servation_row->oneoffiveYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneoffiveYN' <?php echo isset($servation_row->oneoffiveYN) ?  ($servation_row->oneoffiveYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
             </div>
             <div class="form-group">
              <label for="pwd">1.06 Can the child move limbs adequately?</label>  <br>
              <label> <input type='radio' name='oneofsixYN'  value='Yes' <?php  echo isset($servation_row->oneofsixYN) ? ($servation_row->oneofsixYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofsixYN' <?php echo isset($servation_row->oneofsixYN) ?  ($servation_row->oneofsixYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
             </div>
             <div class="form-group">
              <label for="pwd">1.07 Can the child talk?</label>  <br>
              <label> <input type='radio' name='oneofsevenYN'  value='Yes' <?php  echo isset($servation_row->oneofsevenYN) ? ($servation_row->oneofsevenYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofsevenYN' <?php echo isset($servation_row->oneofsevenYN) ?  ($servation_row->oneofsevenYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if not, how does the child communicate?</span>
              <input type="text" name="oneofseven" value="<?php echo isset($servation_row->oneofseven) ? $servation_row->oneofseven : set_value('oneofseven'); ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="pwd">1.08 Can the child hear?</label>  <br>
              <label> <input type='radio' name='oneofeightYN'  value='A_little' <?php  echo isset($servation_row->oneofeightYN) ? ($servation_row->oneofeightYN == 'A_little' ? 'checked' : '') : "";?>  > A little </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofeightYN' <?php echo isset($servation_row->oneofeightYN) ?  ($servation_row->oneofeightYN == 'Yes' ? 'checked' : '') : "";?> value='Yes'> Yes </label>
              <label style='padding-left:25px;'> <input type='radio' name='oneofeightYN' <?php echo isset($servation_row->oneofeightYN) ?  ($servation_row->oneofeightYN == 'No' ? 'checked' : '') : "";?>  value='No'> No </label>
             </div>
             <div class="form-group">
              <label for="pwd">1.09 Can the child see?</label>  <br>
              <label> <input type='radio' name='oneofnineYN'  value='A_little' <?php  echo isset($servation_row->oneofnineYN) ? ($servation_row->oneofnineYN == 'A_little' ? 'checked' : '') : "";?>  > A little </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofnineYN' <?php echo isset($servation_row->oneofnineYN) ?  ($servation_row->oneofnineYN == 'Yes' ? 'checked' : '') : "";?> value='Yes'> Yes </label>
              <label style='padding-left:25px;'> <input type='radio' name='oneofnineYN' <?php echo isset($servation_row->oneofnineYN) ?  ($servation_row->oneofnineYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
             </div>
              <div class="form-group">
              <label for="pwd">1.10 How are the child's mental capacities? </label>
              <input type="text" name="oneoften" value="<?php echo isset($servation_row->oneoften) ? $servation_row->oneoften : set_value('oneoften'); ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="pwd">1.11 Does the child use any aid or appliances?</label>  <br>
              <label> <input type='radio' name='oneofelevenYN'  value='Yes' <?php  echo isset($servation_row->oneofelevenYN) ? ($servation_row->oneofelevenYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofelevenYN' <?php echo isset($servation_row->oneofelevenYN) ?  ($servation_row->oneofelevenYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if yes, specify</span>
              <input type="text" name="oneofeleven" value="<?php echo isset($servation_row->oneofeleven) ? $servation_row->oneofeleven : set_value('oneofeleven'); ?>" class="form-control" >
            </div>
             <div class="form-group">
              <label for="pwd">1.12 Does the child use any aid/appliance previously?</label>  <br>
              <label> <input type='radio' name='oneoftwelveYN'  value='Yes' <?php  echo isset($servation_row->oneoftwelveYN) ? ($servation_row->oneoftwelveYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneoftwelveYN' <?php echo isset($servation_row->oneoftwelveYN) ?  ($servation_row->oneoftwelveYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, Please specify type and reason why the child stoped using it </span>
              <input type="text" name="oneoftwelve" value="<?php echo isset($servation_row->oneoftwelve) ? $servation_row->oneoftwelve : set_value('oneoftwelve'); ?>" class="form-control" >
            </div>
             <div class="form-group">
              <label for="pwd">1.13 Does the aid / appliance need repair ?</label>  <br>
              <label> <input type='radio' name='oneofthirteenYN'  value='Yes' <?php  echo isset($servation_row->oneofthirteenYN) ? ($servation_row->oneofthirteenYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofthirteenYN' <?php echo isset($servation_row->oneofthirteenYN) ?  ($servation_row->oneofthirteenYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="oneofthirteen" value="<?php echo isset($servation_row->oneofthirteen) ? $servation_row->oneofthirteen : set_value('oneofthirteen'); ?>"  class="form-control" >
            </div>
            <div class="form-group">
              <label for="pwd">1.14 Does the aid / appliance fit the individual needs of the child?</label>  <br>
              <label> <input type='radio' name='oneoffourteenYN'  value='Yes' <?php  echo isset($servation_row->oneoffourteenYN) ? ($servation_row->oneoffourteenYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneoffourteenYN' <?php echo isset($servation_row->oneoffourteenYN) ?  ($servation_row->oneoffourteenYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text"  name="oneoffourteen" value="<?php echo isset($servation_row->oneoffourteen) ? $servation_row->oneoffourteen : set_value('oneoffourteen'); ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="pwd">1.15 Do the parents and the child know how to use the aid / appliance?</label>  <br>
              <label> <input type='radio' name='oneoffifthteenYN'  value='Yes' <?php  echo isset($servation_row->oneoffifthteenYN) ? ($servation_row->oneoffifthteenYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneoffifthteenYN' <?php echo isset($servation_row->oneoffifthteenYN) ?  ($servation_row->oneoffifthteenYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                
            </div>
             <div class="form-group">
              <label for="pwd">1.16 Does the child eat and drink by him/self?</label>  <br>
              <label> <input type='radio' name='oneofsixteenYN'  value='FullyIndependent' <?php  echo isset($servation_row->oneofsixteenYN) ? ($servation_row->oneofsixteenYN == 'FullyIndependent' ? 'checked' : '') : "";?>  > Fully Independent </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofsixteenYN' <?php echo isset($servation_row->oneofsixteenYN) ?  ($servation_row->oneofsixteenYN == 'PartiallyDependent' ? 'checked' : '') : "";?> value='PartiallyDependent'> Partially Dependent </label>
              <label style='padding-left:25px;'> <input type='radio' name='oneofsixteenYN' <?php echo isset($servation_row->oneofsixteenYN) ?  ($servation_row->oneofsixteenYN == 'Fullydependent' ? 'checked' : '') : "";?> value='Fullydependent'> Fully dependent </label>   
            </div>
             <div class="form-group">
              <label for="pwd">1.17 Does the child wash and dress him/her self?</label>  <br>
              <label> <input type='radio' name='oneofseventeenYN'  value='FullyIndependent' <?php  echo isset($servation_row->oneofseventeenYN) ? ($servation_row->oneofseventeenYN == 'FullyIndependent' ? 'checked' : '') : "";?>  > Fully Independent </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofseventeenYN' <?php echo isset($servation_row->oneofseventeenYN) ?  ($servation_row->oneofseventeenYN == 'PartiallyDependent' ? 'checked' : '') : "";?> value='PartiallyDependent'> Partially Dependent </label>
              <label style='padding-left:25px;'> <input type='radio' name='oneofseventeenYN' <?php echo isset($servation_row->oneofseventeenYN) ?  ($servation_row->oneofseventeenYN == 'Fullydependent' ? 'checked' : '') : "";?> value='Fullydependent'> Fully dependent </label>   
                
            </div>
             <div class="form-group">
              <label for="pwd">1.18 Can the child manage toilet activities?</label>  <br>
               <label> <input type='radio' name='oneofeightteenYN'  value='FullyIndependent' <?php  echo isset($servation_row->oneofeightteenYN) ? ($servation_row->oneofeightteenYN == 'FullyIndependent' ? 'checked' : '') : "";?>  > Fully Independent </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='oneofeightteenYN' <?php echo isset($servation_row->oneofeightteenYN) ?  ($servation_row->oneofeightteenYN == 'PartiallyDependent' ? 'checked' : '') : "";?> value='PartiallyDependent'> Partially Dependent </label>
              <label style='padding-left:25px;'> <input type='radio' name='oneofeightteenYN' <?php echo isset($servation_row->oneofeightteenYN) ?  ($servation_row->oneofeightteenYN == 'Fullydependent' ? 'checked' : '') : "";?> value='Fullydependent'> Fully dependent </label>   
                
            </div>
            <div class="form-group">
              <label for="pwd">1.19 How does the child move inside and outside the house? </label>  <br>
              <input type='text'  name="oneofnineteen" value="<?php echo isset($servation_row->oneofnineteen) ? $servation_row->oneofnineteen : set_value('oneofnineteen'); ?>"  class='form-control'>
            </div>
             <div class="form-group">
              <label for="pwd"><span class='red'> Room for specifications/further remarks concerning the physical functionality of the child </span></label>  <br>
              <textarea class='form-control' name="onedetail" style='resize:none;'><?php echo isset($servation_row->onedetail) ? $servation_row->onedetail : set_value('onedetail'); ?></textarea>
            </div>           
      
       
    </div>
  </div><!-- end Physical Funciton -->
</div>
<div class="panel panel-default">
        <div class='panel-heading'>
           <a data-toggle="collapse" class='no-decoration' href="#collapse2" > <h3 class='panel-title'><strong> Whitin Family</strong></h3> </a> 
        </div>   
    <div id='collapse2' class="panel-collapse collapse">    
    <div class="panel-body">
      
         <div class="form-group">
              <label for="pwd">2.1 Does the child participate in activities in the family?</label>  <br>
              <label> <input type='radio' name='twoofoneYN'  value='Yes' <?php  echo isset($servation_row->twoofoneYN) ? ($servation_row->twoofoneYN == 'Yes' ? 'checked' : '') : "";?> > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='twoofoneYN' <?php echo isset($servation_row->twoofoneYN) ?  ($servation_row->twoofoneYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="twoofone" value="<?php echo isset($servation_row->twoofone) ? $servation_row->twoofone : set_value('twoofone'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">2.2  Is the child accepted by the family?</label>  <br>
              <label> <input type='radio' name='twooftwoYN'  value='Yes' <?php  echo isset($servation_row->twooftwoYN) ? ($servation_row->twooftwoYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='twooftwoYN' <?php echo isset($servation_row->twooftwoYN) ?  ($servation_row->twooftwoYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
          </div>
          <div class="form-group">
              <label for="pwd">2.3  Is it possible or necessary to adjust the home to improve family participation for the child?</label>  <br>   
              <input type="text" name="twoofthree" value="<?php echo isset($servation_row->twoofthree) ? $servation_row->twoofthree : set_value('twoofthree'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">2.4  Do the parents participate in a parent group</label>  <br>   
              <input type="text" name="twooffour" value="<?php echo isset($servation_row->twooffour) ? $servation_row->twooffour : set_value('twooffour'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd"><span class='red'>Room for specifications/further remarks concerning the Participation whithin the family</span></label>  <br>   
              <textarea class='form-control' name="twodetail" style='resize:none'><?php echo isset($servation_row->twodetail) ? $servation_row->twodetail : set_value('twodetail'); ?></textarea>
          </div>


      
    </div>
    </div>   
  </div> <!-- end Whitin Famliy -->
  <div class="panel panel-default">
        <div class='panel-heading'>
          <a data-toggle="collapse" class='no-decoration' href="#collapse3" ><h3 class='panel-title'><strong> Outside Family </strong></h3> </a>
        </div> 
    <div id='collapse3'class="panel-collapse collapse">        
    <div class="panel-body">
      
        <div class="form-group">
              <label for="pwd">3.01 Does the child participate in activities outside the family?</label>  <br>
              <label> <input type='radio' name='threeofoneYN'  value='Yes' <?php  echo isset($servation_row->threeofoneYN) ? ($servation_row->threeofoneYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='threeofoneYN' <?php echo isset($servation_row->threeofoneYN) ?  ($servation_row->threeofoneYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="threeofone" value="<?php echo isset($servation_row->threeofone) ? $servation_row->threeofone : set_value('threeofone'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">3.2  Is the Child acceptd by the community</label>  <br>
              <label> <input type='radio' name='threeoftwoYN'  value='Yes' <?php  echo isset($servation_row->threeoftwoYN) ? ($servation_row->threeoftwoYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='threeoftwoYN' <?php echo isset($servation_row->threeoftwoYN) ?  ($servation_row->threeoftwoYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="threeoftwo" value="<?php echo isset($servation_row->threeoftwo) ? $servation_row->threeoftwo : set_value('threeoftwo'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">3.3  Does the youngster know about participate in a self help group</label>  <br>
              <label> <input type='radio' name='threeofthreeYN'  value='Yes' <?php  echo isset($servation_row->threeofthreeYN) ? ($servation_row->threeofthreeYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='threeofthreeYN' <?php echo isset($servation_row->threeofthreeYN) ?  ($servation_row->threeofthreeYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="threeofthree" value="<?php echo isset($servation_row->threeofthree) ? $servation_row->threeofthree : set_value('threeoftwo'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">3.4  Does the family youngster know participate in a Disabled People Organisation?</label>  <br>
              <label> <input type='radio' name='threeoffourYN'  value='Yes' <?php  echo isset($servation_row->threeoffourYN) ? ($servation_row->threeoffourYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='threeoffourYN' <?php echo isset($servation_row->threeoffourYN) ?  ($servation_row->threeoffourYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="threeofthree" value="<?php echo isset($servation_row->threeofthree) ? $servation_row->threeofthree : set_value('threeoftwo'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd"><span class='red'>Room for specifications/further remarks concerning the Participation whithin the family</span></label>  <br>   
              <textarea class='form-control' name="threedetail" style='resize:none'><?php echo isset($servation_row->threedetail) ? $servation_row->threedetail : set_value('threedetail'); ?></textarea>
          </div>
      
      </div>
    </div> 
  </div> <!-- end outside family -->

    <div class="panel panel-default">
        <div class='panel-heading'>
           <a data-toggle="collapse" class='no-decoration' href="#collapse4"> <h3 class='panel-title'><strong> Education </strong></h3> </a>
        </div>          
    <div id='collapse4' class="panel-collapse collapse">
    <div class="panel-body">
      
        <div class="form-group">
              <label for="pwd">4.1  Doest the child go to school</label>  <br>
              <label> <input type='radio' name='fourofoneYN'  value='Yes' <?php  echo isset($servation_row->fourofoneYN) ? ($servation_row->fourofoneYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='fourofoneYN' <?php echo isset($servation_row->fourofoneYN) ?  ($servation_row->fourofoneYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
             <input type="text" name="fourofone" value="<?php echo isset($servation_row->fourofone) ? $servation_row->fourofone : set_value('fourofone'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">4.2  If not gioing to school or having a job, is there a structured programme for daily activities in place?</label>  <br>
              <label> <input type='radio' name='fouroftwoYN'  value='Yes' <?php  echo isset($servation_row->fouroftwoYN) ? ($servation_row->fouroftwoYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='fouroftwoYN' <?php echo isset($servation_row->fouroftwoYN) ?  ($servation_row->fouroftwoYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="fouroftwo" value="<?php echo isset($servation_row->fouroftwo) ? $servation_row->fouroftwo : set_value('fouroftwo'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd"><span class='red'>Room for specifications/further remarks concerning the Participation whithin the family</span></label>  <br>   
              <textarea class='form-control' name="fourdetail" style='resize:none'><?php echo isset($servation_row->fourdetail) ? $servation_row->fourdetail : set_value('fourdetail'); ?></textarea>
          </div>

      
      </div>
    </div>
  </div> <!-- end Education -->
    <div class="panel panel-default">
        <div class='panel-heading'>
           <a data-toggle="collapse" class='no-decoration' href="#collapse5" > <h3 class='panel-title'><strong> Economic</strong></h3> </a>
        </div>          
    <div id='collapse5'class="panel-collapse collapse">
    <div class="panel-body">
      
        <div class="form-group">
              <label for="pwd">5.1 Does the youngster have a job does the youngster earn an income?</label>  <br>
              <label> <input type='radio' name='fiveofoneYN'  value='Yes' <?php  echo isset($servation_row->fiveofoneYN) ? ($servation_row->fiveofoneYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='fiveofoneYN' <?php echo isset($servation_row->fiveofoneYN) ?  ($servation_row->fiveofoneYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="fiveofone" value="<?php echo isset($servation_row->fiveofone) ? $servation_row->fiveofone : set_value('fiveofone'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">5.2  Does the youngster recieve my vocational or job training?</label>  <br>
              <label> <input type='radio' name='fiveoftwoYN'  value='Yes' <?php  echo isset($servation_row->fiveoftwoYN) ? ($servation_row->fiveoftwoYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='fiveoftwoYN' <?php echo isset($servation_row->fiveoftwoYN) ?  ($servation_row->fiveoftwoYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="fiveoftwo" value="<?php echo isset($servation_row->fiveoftwo) ? $servation_row->fiveoftwo : set_value('fiveoftwo'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">5.3  Does the youngster have a good prospect to become self-supporting?</label>  <br>
              <label> <input type='radio' name='fiveofthreeYN'  value='Yes' <?php  echo isset($servation_row->fiveofthreeYN) ? ($servation_row->fiveofthreeYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='fiveofthreeYN' <?php echo isset($servation_row->fiveofthreeYN) ?  ($servation_row->fiveofthreeYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="fiveofthree" value="<?php echo isset($servation_row->fiveofthree) ? $servation_row->fiveofthree : set_value('fiveofthree'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd">5.4  In case of a severely disabled child does the parents caregivers have sufficient income to support the child on the long term</label>  <br>
              <label> <input type='radio' name='fiveoffourYN'  value='Yes' <?php  echo isset($servation_row->fiveoffourYN) ? ($servation_row->fiveoffourYN == 'Yes' ? 'checked' : '') : "";?>  > Yes </label>                                       
              <label style='padding-left:25px;'> <input type='radio' name='fiveoffourYN' <?php echo isset($servation_row->fiveoffourYN) ?  ($servation_row->fiveoffourYN == 'No' ? 'checked' : '') : "";?> value='No'> No </label>
                <br> <span class='red'>if Yes, specify</span>
              <input type="text" name="fiveoffour" value="<?php echo isset($servation_row->fiveoffour) ? $servation_row->fiveoffour : set_value('fiveoffour'); ?>"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="pwd"><span class='red'>Room for specifications/further remarks concerning the Participation whithin the family</span></label>  <br>   
              <textarea class='form-control' name="fivedetail" style='resize:none'><?php echo isset($servation_row->fivedetail) ? $servation_row->fivedetail : set_value('fivedetail'); ?></textarea>
          </div>

      
      </div>
    </div>
  </div> <!-- end Economic -->
  <div class='form-group'>
                          <div class=''></div>  
                          <div class='col-sm-6'>
                            <input type='hidden' name='uid' value='<?php echo $this->myencryption->encode($auto->auto_id);?>' class='hidden'>
                            <input  type='hidden' name='data_entry_id' value='<?php echo $this->session->userdata('user_id');?>'>
                            <input type='hidden' name='secret' value='<?php echo isset($auto->auto_id) ? "EDIT" : "INSERT"; ?>'   class='hidden'>
                            <input type='submit' value='<?php echo isset($auto->auto_id) ? "Update" : "Save changes";  ?>' <?php echo isset($disabled) ? $disabled : "";?> class='btn btn-primary'>                            
                            <input type='button' value='Cancel'  class='btn btn-default' id='cancel')>
                          </div>                                                    
                        </div> 
</div>

</div>
<?php echo form_close(); ?>   <!-- close form -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  
  $(function(){

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: 'now',    
       });
  });
  
</script>