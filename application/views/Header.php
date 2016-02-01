<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('inflector');
?>
<!DOCTYPE html>
<html>
  <head>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">         
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">      
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/menu-nav.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">    
    <link href='https://fonts.googleapis.com/css?family=Khmer' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/images/favicon-48x48.ico" rel="icon" type="image/x-icon" />
    </head>
  <body>  

  <!-- Navigation -->
    <div class="container" style='text-align:center'>
      <div class='col-lg-offset-3 col-lg-6 col-sm-offset-3 col-sm-6 col-xs-12' >
         <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url();?>assets/images/Logo flower.png" class='img-responsive'></a>
      </div>
    </div>
    <nav class="navbar navbar-default navtop" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-sm" href="<?php echo site_url();?>home"  >
                    <div class="brand-title">Student Managment</div>
                </a>
            </div>
             <ul class='nav navbar-nav navbar-right'>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button"  id='white-color' aria-expanded="false"><i class='fa fa-user' ></i>&nbsp <?php echo humanize($this->session->userdata('real_name')); ?>  <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url();?>user"><i class='fa fa-lock'></i>&nbsp Manage Profile</a></li>                            
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url()?>user/logout"><i class="fa fa-power-off"></i> Logout</a></li>                      
                        </ul>                           
                    </li>
                </ul>
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url();?>home"><i class='fa fa-home'></i> Dashboard</a>                        
                    </li>  
                     <li class="dropdown " >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class='fa fa-user-plus'></i> Student <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url();?>Student/Registration"><i class='fa fa-users'> Registration </i></a></li>
                            <li><a href="<?php echo base_url();?>Student/View"><i class="fa fa-cog"> Student List</i></a></li>
                            <li class="divider"></li>
                            <li> <a href="<?php echo site_url();?>student/add_servation"><i class='fa fa-cart-plus'></i> Add to Servation</a></li> 
                            <li class="hidden"> <a href="<?php echo site_url()?>student/view_servation"><i class="fa fa-cog"></i> View Servation</a></li> 
                            <li class="divider"></li>
                            <li> <a href="<?php echo site_url();?>student/waiting_list"><i class='fa fa-cart-plus'></i> Waiting List</a></li> 
                        </ul>                           
                    </li>          
                    <li class="dropdown hidden" >
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button"  id='white-color' aria-expanded="false"><i class='fa fa-cart-plus' ></i> Stock <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>  <a href="<?php echo site_url();?>purchase_stock"><i class='fa fa-cart-plus'></i> Import Stock</a></li>    
                            <li>  <a href="<?php echo site_url()?>sale/manage_product"><i class="fa fa-cog"></i> View Stock </a></li> 
                            <li class="divider"></li>
                            <li> <a href="<?php echo site_url();?>sale/categories"><i class='fa fa-cart-plus'></i> Add Categories</a></li> 
                            <li> <a href="<?php echo site_url()?>sale/manage_categories"><i class="fa fa-cog"></i> Manage Categories</a></li> 

                        </ul>                           
                    </li>                    
                    <li class="dropdown " >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class='fa fa-user-plus'></i> Report <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url();?>report"><i class='fa fa-users'> Student Report </i></a></li>
                            <li><a href="<?php echo base_url();?>report/query_all"><i class="fa fa-cog"> All Student Report</i></a></li>
                        </ul>                           
                    </li> 
                    <li class="dropdown " >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class='fa fa-user-plus'></i> Security <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url();?>security"><i class='fa fa-users'> Create Users </i></a></li>
                            <li><a href="<?php echo base_url();?>security/view"><i class="fa fa-cog"> Manage Users</i></a></li>
                        </ul>                           
                    </li> 

                    
                </ul>               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"> </script>
<?php 
            $session_data = $this->session->all_userdata();
        if ( isset($session_data['user']) && $session_data['user'] == TRUE ) {
            
        }else{
            redirect('authentication','refresh');
        }

     ?> 