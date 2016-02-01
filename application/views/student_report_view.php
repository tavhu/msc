<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datepicker.css">

<title>Employee Profiles</title>
<div class="container font-metal">
		<div class="panel panel-default row">
              <div class='panel-heading'>
                <h3 class='panel-title'><strong> <i class='glyphicon glyphicon-search ' ></i> Search Queary</strong> </h3>
              </div>          
              <div class="panel-body font-metal ">   
    <div class="row form-horizontal col-sm-12 col-xs-12">
   <?php 
   		$arr = array('role'=>'form', 'id'=>'registration-form');
        echo form_open('report/query',$arr);
   		if (isset($tbl_student_information) && isset($tbl_mother_information) && isset($tbl_father_information) && isset($tbl_parent_information) && isset($tbl_placeofbirth) && isset($tbl_address) && empty($result)) {
   	
    ?>	
    <div class="row">
    	<div class="col-sm-6 col-md-6">
    		<div class="form-group">
    			<label class='control-label col-sm-4'> Select student </label>
	    		<div class="col-sm-8">
		    		<select class='form-control' name='table_name'id='selectstudent'>
			    		<?php 

			    			echo "<option value='tbl_student_information'> Information</option>";
			    			echo "<option value='tbl_placeofbirth'> Place of Birth</option>";
			    			echo "<option value='tbl_address'> Current Address </option>";
			    			echo "<option value='tbl_mother_information'> Mother information </option>";
			    			echo "<option value='tbl_father_information'> Father information </option>";
			    			echo "<option value='tbl_parent_information'> Parent information </option>";
			    			echo "<option value='user'> Data Entry Information </option>";

			    		 ?>
			    	</select>
	    		</div>
    		</div>
    	</div>
    	<div class="col-sm-6 col-md-6">
    		<div class="form-group">
    			<label class='control-label col-sm-4'> Base on </label>
	    		<div class="col-sm-8">
		    		<select class='form-control' name='field_name' id='base_on'>
			    		<?php 
			    				echo "<option value='' id='' class=''> please select field </option>";
			    			foreach ($tbl_student_information as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='tbl_student_information'> $value->name </option>";
			    			}

			    			foreach ($tbl_placeofbirth as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='tbl_placeofbirth hidden $value->name'> $value->name </option>";
			    			}

			    			foreach ($tbl_address as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='tbl_address hidden $value->name'> $value->name </option>";
			    			}

			    			foreach ($tbl_mother_information as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='tbl_mother_information hidden $value->name'> $value->name </option>";
			    			}

			    			foreach ($tbl_father_information as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='tbl_father_information hidden $value->name'> $value->name </option>";
			    			}

			    			foreach ($tbl_parent_information as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='tbl_parent_information hidden $value->name'> $value->name </option>";
			    			}

			    			foreach ($user as $value) {
			    				echo "<option value='$value->name $value->type' id='$value->name' class='user hidden $value->name'> $value->name </option>";
			    			}

			    		 ?>
			    	</select>
	    		</div>
    		</div>
    	</div>
    </div>
    <div class="form-group typevarchar hidden">
             <label for="email" class="col-sm-2 col-md-2 control-label">Detail / ព័ត៌មាន​​​លំអិត</label>
             <div class="col-sm-10 col-md-10">                                          
                <input class='form-control'  name='detail' value='<?php echo isset($row->detail) ? $row->detail : set_value('detail'); ?>'>
             </div>                         
    </div>
    <div class="row typedate hidden">
    					<div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>From</label>
                                  <div class='col-sm-8'>
                                     <div class='input-group date'>
                                              <input type='text' name="fromdate" id='fromdate' value='<?php echo isset($row->fromdate) ? $row->fromdate : set_value('fromdate');?>' class="form-control input-sm datepicker"/>
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                    </div> 
                                  </div>  
                            </div>
                        </div>
    					<div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                  <label for="" class='control-label col-sm-4'>To</label>
                                  <div class='col-sm-8'>
                                     <div class='input-group date'>
                                              <input type='text' name="todate" id='todate' value='<?php echo isset($row->todate) ? $row->todate : set_value('todate');?>' class="form-control input-sm datepicker"/>
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                    </div> 
                                  </div>  
                            </div>
                        </div>

    </div> 
    <hr>  
                        <div class='form-group'>
                          <div class='col-sm-2'></div>  
                          <div class='col-sm-6'>
                          	<input type='hidden' name='secret' value='' id='secret' class='hidden'>
                            <input type='submit' value='<?php echo isset($auto->auto_id) ? "Update" : "Submit";  ?>' class='btn btn-primary'>                            
                            
                          </div>                                                    
                        </div> 

    <?php 

	 }else{ 
	 	// if can't load all student information form database.
	 
	 	if (! empty($result) ) {   
	 			?>

	 			<div class="col-sm-12 col-md-12 " style='margin-bottom:10px'>
	 			<?php
	 			echo  isset($searchQuery) ? "<b><span   style='color:#53b380'>".$searchQuery : "</span></b> <br><br>";	 			
	 			?>
	 			</div>
	 			 <div class="col-sm-12 col-md-12">
                            <a href="<?php echo base_url();?>report" class='btn btn-primary'> Back to Search </a>                            
                            <input type='button' value='Print'  class='btn btn-success' id="printbutton">
                          
	 			 </div>

	 			<?php
	 	}else{
	 			if ($this->uri->segment(3) === FALSE) {
	 				echo "<span style='color:red'>database Error please contact page Administrator for more information!</span>";
	 			}else{
	 				echo "<span style='color:red'>Please perform query search before enter this page</span> <a href='". base_url()."report"."'> Back </a>"; 
	 			}
	 	}
	 }  

	 echo form_close();
    ?>
    </div>


    </div>	
   </div> <!--- end panel search option -->
    
    <?php 

    if (! empty($result) ) {    	
    ?>

		    <div class='row'>
			   		<div class="class-col-sm-12" id="recieve">

								<table class='table table-bordered text-centered' >
									<thead>
										<tr >
											<th style='text-align:center;'>ID</th>
											<th style='text-align:center;'>Full Name</th>
											<th style='text-align:center;'>Gender</th>
											<th style='text-align:center;'>Date Of Birth</th>
											<th style='text-align:center;'>Entry Date</th>
											<th style='text-align:center;'>Occupation</th>
										</tr>

									</thead>
									<tbody>
    <?php
 
 		foreach ($result->result() as $row) {   		
    	

     ?>
										<tr style='font-weight:normal;'>
											<td><?php echo $row->studentID; ?></td>
											<td><?php echo $row->studentNameInEnglish ." / ". $row->studentNameInKhmer; ?></td>
											<td><?php echo $row->studentGender; ?></td>
											<td><?php echo $row->studentDateofbirth; ?></td>
											<td><?php echo $row->studentEntryDate; ?></td>
											<td><?php echo $row->studentJob; ?></td>
										</tr>
	<?php  

	}

 	?>	
									</tbody>

								</table>
					</div>
				</div>
    <?php
    }
     ?>


</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
	$(function(){

		$('.datepicker').datepicker({
	        format: 'yyyy-mm-dd',
	        startDate: 'now',    
	    });

				//refresh base on select dropdown
				defaultload();
		     	hide_typedate_typevarchar();	

		 $("#selectstudent").change(function () {
		        
		 	    $('.tbl_address').addClass('hidden');
		 	    $('.tbl_student_information').addClass('hidden');
		 	    $('.tbl_placeofbirth').addClass('hidden');
		 	    $('.tbl_mother_information').addClass('hidden');
		 	    $('.tbl_father_information').addClass('hidden');
		 	    $('.tbl_parent_information').addClass('hidden');
		 	    $('.user').addClass('hidden');
		        var firstDropVal = $('#selectstudent').val();
		        $('.'+firstDropVal).removeClass('hidden');
		     	
		        //hide unneccssary filed
		   		defaultload();
		     	//refresh base on select dropdown
		     	$('#base_on').val('');
		     	hide_typedate_typevarchar();

		 });

		$("#base_on").change( function(){

				var type = $("#base_on").val();
				var number = type.lastIndexOf(" ");
				var actualType = type.substring(number, type.lenght );
				actualType = actualType.trim().toLowerCase();
				if (actualType === "varchar") {

					$(".typevarchar").removeClass("hidden");
					$(".typedate").addClass("hidden");
					$('#secret').val('varchar');
					
				};

				if (actualType === "date") {

					$('#secret').val('date');
					$(".typedate").removeClass("hidden");
					$(".typevarchar").addClass("hidden");

									
				};
				if (actualType === "") {

					hide_typedate_typevarchar();
									
				};
		});

	});

 function defaultload(){

				$('#auto_id').addClass('hidden');
		     	$('#parentID').addClass('hidden');
		     	$('#addressID').addClass('hidden');
		     	$('#placeofbirthID').addClass('hidden');
		     	$('#fatherID').addClass('hidden');
		     	$('#motherID').addClass('hidden');
		     	$('#imgPath').addClass('hidden');		     	
		     	$('.id').addClass('hidden');
		     	$('#username').addClass('hidden');
		     	$('#password').addClass('hidden');
		     	$('#email_address').addClass('hidden');
		     	$('#position').addClass('hidden');


}

function hide_typedate_typevarchar(){

	$(".typedate").addClass("hidden");
	$(".typevarchar").addClass("hidden");	
}

</script>

<script src="<?php echo base_url();?>assets/js/printdiv.js"></script>
<script type="text/javascript">

  $(function(){

    $('#printbutton').click(function(){      
      $("#recieve").printThis();      
    });

  });
</script>