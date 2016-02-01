<title><?php echo isset($header_info) ? $header_info: ""; ?></title>
<div class="container font-metal">
    <div class="row">
        <div class="under_line">
            <h3><i class='fa fa-user-plus'></i> <?php echo isset($header_info) ? $header_info: ""; ?> </h3>
        </div>
    </div> 
<div class="container font-metal">
	<div class="row">

		<?php 
			$this->load->view('student_profile_left_view');
			$this->load->view('student_servation_edit_right_view');
		 ?>

	</div>
</div>