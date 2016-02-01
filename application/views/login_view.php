<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
// $res = $this->db->get_where('user',array('id'=>7));
// $val = $res->row();
// echo $this->myencryption->decode($val->username);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>User Authentication</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">					
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.form-validator.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"> </script>
		<link href="<?php echo base_url();?>assets/images/favicon-48x48.ico" rel="icon" type="image/x-icon" />
	</head>
	<body>	
		<?php 
			if ($this->session->userdata('user')){
			           redirect('home','refresh');
			  }           
            $attributes = array('role' => 'form');
            echo form_open('Authentication/validation', $attributes);   
                
           
     	?>
		<div class="container" id='logincontainer' style='text-align:center'>
			<div class="col-lg-offset-4 col-lg-4  col-sm-offset-4 col-sm-5 col-xs-offset-1 col-xs-10">
				<div class="row">
						<div class=''  style='text-align:center;' >
					        <a href="<?php echo base_url(); ?>authentication"> <img src="<?php echo base_url();?>assets/images/Logo flower.png" class='img-responsive'></a>					   		
					    </div>
				</div>								
				<div class="row" id='loginbody'>
					<h4>Sign in to your Account</h4>
					<div class='col-sm-12'>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
							        <i class="glyphicon glyphicon-user"></i>
							    </span>
							    <input type="text" class="form-control" name='username' data-validation='required' value="<?php echo set_value('username');?>";  data-validation-error-msg="Username is required" placeholder='Username'/>					    
							</div>	
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
							        <i class="glyphicon glyphicon-lock"></i>
							    </span>
							    <input type="password" class="form-control" name='password' data-validation='required' data-validation-error-msg="Password is required" placeholder='Password'/>					    
							</div>	
						</div>			
					</div>
					<div class='col-sm-12'>
						<div class='col-sm-8' align='left'> <label style='font-weight:normal' id='remember_me_label'> <input type='checkbox' name='rememberme'> keep me logged in</label>  <br><a href="#" onclick='showModal()'> Forget your password ? Reset </a></div>
						<div class='col-sm-4' align='right'> <input type='submit' class='btn btn-primary' value='Login'> </div>
						<div class='col-sm-12' style='margin-top:10px'>
							<?php echo validation_errors(); ?>								
							<?php 
								if (isset($message)) {
									echo $message;
								}
							 ?>
						</div>
					</div>

				</div> 

			</div>			
		</div>
	
			<?php 
			echo form_close();
				$attributes = array('role' => 'form');
			    echo form_open('Authentication/resetPassword', $attributes);

			  ?>	
			<!--Message Box-->
			<div class="modal fade" id="myModal">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">Reset Password</h4>
			      </div>
			      <div class="modal-body">
			        <input type='text' class='form-control' data-validation='email' value='<?php echo set_value('resetmail');?>' name='resetmail'placeholder='Email Address'>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="submit" id="deleteButton" class="btn btn-primary">Send</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<!--End Message Box-->
			</form>
	<?php echo form_close(); ?>
</html>
<script type="text/javascript">
	$.validate();

	function showModal(){ 
   		 $("#myModal").modal('show'); 
	}
</script>