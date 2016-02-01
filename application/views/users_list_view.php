<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">

<title>Employee Profiles</title>
<div class="container font-metal">
    <div class="row">
        <div class="under_line">
            <h3><i class='fa fa-user-plus'></i> User List </h3>
        </div>
    </div>  
    <div class="row">    
        <div class="panel panel-default">
    		<div class='panel-heading'>
    			<h3 class='panel-title'><strong> <i class='fa fa-user'></i> User information</strong></h3>
    		</div>       	 	
    		<div class="panel-body table-responsive">          
             <table id="example" class="table table-striped table-bordered table-hover dataTable no-footer​" width='100%'>
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>username</th>
                      <th>email</th>
                      <th>User Type</th> 
                    </tr>
                  </thead>         
             </table>    		
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
               <h4 class="modal-title">Warning</h4>
              </div>
                <div class="modal-body">
                  <p >Are you sure want to delete this?</p>
                  <input class='hidden' type='password' name='showman' id='showman'>
                </div>                
            <div class="modal-footer">
              <button type="button" class="btn btn-default" id='closemodal' data-dismiss="modal">Cancel</button>
              <button type="button" id="deleteButton" class="btn btn-primary">OK</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--End Message Box-->


<script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery.dataTables.js" charset="utf-8"></script>
<script type="text/javascript"  language="javascript" charset="utf-8">
function showModal(e){    
       $("#showman").val(e);   
       $("#myModal").modal('show'); 
  }

$(document).ready(function() {
  $('#example').dataTable( {
      "processing": true,
      "serverSide": true,
      "ajax": "<?php echo base_url();?>security/server_side",
      "language": {
                    "search": "Filter records:"
                  },    
      "columns": [           
            { "data": "real_name" },
            { "data": "username" },
            { "data": "email_address" },
            { "data": "type_user" },
        ],
        "order": [[1, 'asc']]
     });

  } );
  </script>

  <script type="text/javascript" language="javascript" charset="utf-8">
   $(function(){        
      $("#deleteButton").click(
          function(){
             $("#closemodal").click();
             var input_data = $("#showman").val();
             var post_data = {       
                          'post_data': input_data, // post method name search_data is the value of textbox filter
                          '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                      };

                      jQuery.ajax({
                          type: "POST",
                          url: "<?php echo base_url(); ?>student/deleteUser",
                          data: post_data,                 
                          success: function(data) {
                              // return success                      
                              if (data.length > 0) {   
                                                                  
                              }
                          }
                      });  

          }
        );                

  });
  </script>

 