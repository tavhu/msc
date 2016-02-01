<title>Create User</title>
<div class="container">
    <div class="row">
        <div class="under_line">
            <h3><i class='fa fa-users'></i> Create User </h3>
        </div>
    </div>
    <div class="row">    
        <div class="panel panel-default">
    		<div class='panel-heading'>
    			<h3 class='panel-title'><strong> <i class='fa fa-user'></i> Registeration</strong></h3>
    		</div>       	 	
    		<div class="panel-body">   
        <?php 
            $arr = array('role'=>'form', 'id'=>'registration-form');
            echo form_open('security/create_user_validation',$arr);

            echo validation_errors();
            $error = $this->session->flashdata('error');
            if (! empty($error) ) {
              echo $error;
            }     
            if (isset($success) ) {
                 echo $success;
            }   
        ?>       
    			<div class='form form-horizontal'>  
    					<div class="form-group ">
    						<label  for='fullname' class='control-label col-sm-3'>Full Name:</label>  
    						<div class='col-sm-5'>
    							
                  <input type='text' name='fullname' value= "<?php echo set_value('fullname');?>" class='form-control' data-validation='required'>

                </div>    						
    					</div>
    					 <div class="form-group">
	                        <label for="email" class="col-sm-3 control-label">Email:</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" value ="<?php echo set_value('email');?>"id="email" name="email"  data-validation='email' >
	                        </div>	                       
	                    </div>	
	                    <div class="form-group">
	                        <label for="username" class="col-sm-3 control-label">Username:</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" value="<?php echo set_value('username');?>" name="username"  data-validation='length' data-validation-length='min5'>
	                        </div>
	                    </div>
	                    <div class='panel panel-default'>
	                    	<div class='panel-heading'>
								Click more position, if you want to and another type of users.
	                    	</div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-3 control-label">Type Users:</label>
	                        <div class="col-sm-3" id='refresh'>	                         
                              <?php 
                                $result = $this->db->get('tbl_position');     
                                echo  "<select class='form-control' name='type_user' data-validation='required' >";
                                echo  "<option value=' '>Please choose user type</option>";
                                  foreach ($result->result() as $value) {
                                    echo "<option value='$value->name'>$value->name</option>";
                                  }
                                     echo   "</select>";

                               ?>
	                        </div>
                          <div class='col-sm-2'>
                               <input type='button' class='form-control btn btn-primary'  onclick='showModal()' value='Add More Type User'>
                          </div>  
	                    </div>
	                    <div class="form-group">
	                        <label for="concept" class="col-sm-3 control-label">New Password:</label>
	                        <div class="col-sm-5">
	                            <input type="password" class="form-control"  id="password" name="password" data-validation='length' data-validation-length='min10'>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="concept" class="col-sm-3 control-label">Re-Type New Password:</label>
	                        <div class="col-sm-5">
	                            <input type="password" class="form-control"  data-validation='length' data-validation-length='min10' id="password-confirm" name="password_confirm">
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
<!--Message Box-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Add More Type User</h4>
            </div>
            <div class="modal-body">
              <input type='text' class='form-control' id='position_name' placeholder='Add More Type User'>
            </div>
            <div class="modal-footer">
              <div id='msgerror'> </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" id="deleteButton" onclick="ajaxInsert()"; class="btn btn-primary">Ok</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<script src="<?php echo base_url();?>assets/js/kendo.all.min.js"></script>
<script type="text/javascript">
  
    function showModal(){ 
      $("#myModal").modal('show'); 
    }

    function ajaxInsert() {
            var input_data = $('#position_name').val();              
                
                var post_data = {
                    'position_name': input_data, // post method name search_data is the value of textbox filter
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>security/insert_database",
                    data: post_data,                 
                    success: function(data) {
                        // return success                      
                        if (data.length > 0) {       

                            $('#msgerror').html(data);
                               
                        }
                    }
                });

                var post_data = {
                    'position_name': input_data, // post method name search_data is the value of textbox filter
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>security/read_position",
                    data: post_data,                 
                    success: function(data) {
                        // return success                      
                        if (data.length > 0) {       

                            $('#refresh').html(data);
                               
                        }
                    }
                });
        }

 $(function(){
   var v = true;
    
      $('#cancel').click(function(){
        parent.history.back();
        return false;
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
                  verifyPasswords: "<span style='color:#A94442;' >Passwords does not match!</span>"
              }
          });

 });
</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.form-validator.min.js"></script>
<script> $.validate();</script>