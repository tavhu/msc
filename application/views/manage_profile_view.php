<title>Manage Profile</title>
<div class="container">
    <div class="row">
        <div class="under_line">
            <h3><i class='fa fa-user'></i> Manage Profile </h3>
        </div>
    </div>
    <div class="row">
    	<?php 

    		$value = $this->session->userdata('user_id');
    		$result = $this->db->get_where('user',array('id'=>$value));
    		$user = $result->row();    
        echo validation_errors();
    		if (isset($message)) {
    			echo $message;
    		}
    	 ?>
        <div class="panel panel-default">
    		<div class='panel-heading'>
    			<h3 class='panel-title'><strong> <i class='fa fa-lock'></i> Account Settings</strong></h3>
    		</div>       	 	
    		<div class="panel-body">    
    		<?php 
    			$arr = array('role'=>'form', 'id'=>'registration-form');
    			echo form_open('user/update_validation',$arr);
    		 ?>	    				
    			<div class='form form-horizontal'>    				
    					<div class="form-group ">
    						<label  for='fullname' class='control-label col-sm-3'>Full Name:</label>  
    						<div class='col-sm-5'>
    							<input type='text' name='fullname' class='form-control' disabled value="<?php echo humanize($user->real_name); ?>">
    						</div>    						
    					</div>
    					 <div class="form-group">
	                        <label for="email" class="col-sm-3 control-label">Email:</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" id="email" name="email"  data-validation='email' value="<?php echo strtolower($user->email_address);?>">
	                        </div>	                       
	                    </div>	
	                    <div class="form-group">
	                        <label for="username" class="col-sm-3 control-label">Username:</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control"  name="username" value="<?php echo $this->myencryption->decode($user->username);?>" data-validation='length' data-validation-length='min5'>
	                        </div>
	                    </div>
	                    <div class='panel panel-default'>
	                    	<div class='panel-heading'>
								Leave the password blank, if you don't want to change password
	                    	</div>
	                    </div>
	                    <div class="form-group">
	                        <label for="currentpassword" class="col-sm-3 control-label">Current Password:</label>
	                        <div class="col-sm-5">
	                            <input type="password" class="form-control" name="currentpassword">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="concept" class="col-sm-3 control-label">New Password:</label>
	                        <div class="col-sm-5">
	                            <input type="password" class="form-control"  id="password" name="password">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="concept" class="col-sm-3 control-label">Re-Type New Password:</label>
	                        <div class="col-sm-5">
	                            <input type="password" class="form-control"  id="password-confirm" name="password_confirm">
	                        </div>
	                    </div>	
	                    <hr>	
	                    <div class='form-group'>
		                    <div class='col-sm-3'></div>	
		                    <div class='col-sm-6'>
		                    	<input type='submit' value='Save changes' class='btn btn-primary'>			                    	
		                  		<input type='button' value='Cancel'  class='btn btn-default' id="cancel">
		                    </div> 		                    				                    
	                    </div>
	                    
    			</div>
    		</form>
    		</div>	
    	</div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.form-validator.min.js"></script>
<script src="<?php echo base_url();?>assets/js/kendo.all.min.js"></script>
<script type="text/javascript">
 $(function(){
 	var v = true;

      $('#cancel').click(function(){
        parent.history.back();       
       });

 	    $("#password").change(function(){
 	    	var v = $(this).val();
 	    	
 	    	if (v=="") {
 	    		$(this).removeAttr('data-validation');
 	    		$(this).removeAttr('data-validation-length');
 	    		$(this).removeAttr('data-validation-error-msg');
 	    		$.validate();
 	    	}else{
 	    		if (v) {
 	    			$(this).attr('data-validation','length');
 	    			$(this).attr('data-validation-length','min10');
 	    			$(this).attr('data-validation-error-msg','Minimum Password is 10 character');
 	    			$.validate();
 	    		};
 	    		v = false;
 	    	};
 	    	
 	    });

 	   $("#registration-form").kendoValidator({
              rules: {
                  verifyPasswords: function(input){
                     var ret = true;
                             if (input.is("[name=password_confirm]")) {
                                 ret = input.val() === $("#password").val();
                             }
                           
                             return ret;
                  }
              },
              messages: {
                  verifyPasswords: "<span style='color:#A94442;' >Passwords do not match!</span>"
              }
          });

 });
</script>

<script type="text/javascript">$.validate();</script>
