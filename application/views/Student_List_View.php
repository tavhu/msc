<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">

<title><?php echo isset($header_info) ? $header_info: ""; ?></title>
<div class="container font-metal">
    <div class="row">
        <div class="under_line">
            <h3><i class='fa fa-user-plus'></i> <?php echo isset($header_info) ? $header_info: ""; ?> </h3>
        </div>
    </div>  
    <div class="row">    
        <div class="panel panel-default">
    		<div class='panel-heading'>
    			<h3 class='panel-title'><strong> <i class='fa fa-user'></i> <?php echo isset($panel_info) ? $panel_info: ""; ?></strong></h3>
    		</div>       	 	
    		<div class="panel-body table-responsive">          
             <table id="example" class="table table-striped table-bordered table-hover dataTable no-footer​" width='100%'>
                  <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>FullName</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Entry Date</th>
                      <th>Enroll Date</th>
                      <th>Action</th>  
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
  var value = "";
  if ("<?php echo isset($select_student) ? $select_student : 'default'; ?>" === "servation") {
    value = "/servation";
    
   }else{
     value = "/default";
       
   };
  $('#example').dataTable( {
      "processing": true,
      "serverSide": true,
      "ajax": "<?php echo base_url();?>student/server_side" + value ,
      "language": {
                    "search": "Filter records:"
                  },    
      "columns": [           
            { "data": "StudentID" },
            { "data": "FullName" },
            { "data": "Gender" },
            { "data": "DateOfBirth" },
            { "data": "EntryDate" },
            { "data": "EnrollDate" },
            { "data": "auto_id"}           
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

 