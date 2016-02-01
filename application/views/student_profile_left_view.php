<div class="col-sm-3">
	<div class="row">
		<div class="container-fluid" style='margin-bottom:10px;' >
			<div class='col-sm-12 col-xs-12 col-lg-12 col-md-12'>

		 
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

		
				<img src="<?php echo base_url();?>assets/images/<?php echo isset($images) ? $images : "unavailable.jpg";?>" class='img-responsive'>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
				<div class="list-group">
					  <a href="#studentinformation" class="list-group-item active">
					   Student Information
					  </a>					 
					  <a href="#placeofbirth" class="list-group-item">Place Of Birth</a>
					  <a href="#currentaddress" class="list-group-item">Current Address</a>
					  <a href="#motherinformation" class="list-group-item">Mother Information</a>
					  <a href="#fatherinformation" class="list-group-item">Father Information</a>
					  <a href="#parentinformation" class="list-group-item">Parent Information</a>					 
				</div>
			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">

$(function(){

	$(".list-group a").click(function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');

	});
})

</script>