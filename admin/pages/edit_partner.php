<!DOCTYPE html>
<html lang="en">
<?php include_once 'bridge.php';

		if(!is_logged_in()){
			die(header('location: login.php'));
		}
?>
<head>
<?php include 'header.php'; ?>
</head>

<body>

    <div id="wrapper">

        <?php include 'nav.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Partners</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                    <h5>Partners</h5>
                    <div class="form-group input-group">
                            <input type="text" id="search-partner" class="form-control">
                            <span class="input-group-btn">
                             	 <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                            </input>
                     </div>
										 <span id="result"></span>

                    <!-- /.table-responsive -->

                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                <ul class="pagination">
                                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                             <a href="#">Previous</a>
                                        </li>
                                        <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
                                             <a href="#">1</a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                        <span id="result"></span>                     <a href="#">2</a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                              <a href="#">3</a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                              <a href="#">4</a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                              <a href="#">5</a>
                                        </li>
                                        <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                                              <a href="#">Next</a>
                                        </li>
                                </ul>
                    </div>
                </div>
							</div>
         </div>
        <!-- /#page-wrapper -->

    </div>
    <div class="panel-body">
       <!-- Button trigger modal -->

       <!-- Modal -->
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       <h4 class="modal-title" id="myModalLabel">Modal Name</h4>
                   </div>
                   <div class="modal-body">
                       <span id="modal-det">
                       		<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                       		<span class="sr-only">Loading...</span>
                       </span>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-primary">Save changes</button>
                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>
       <!-- /.modal -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
	 <script>

	 $().ready(function(){
		      function load_table(){
						 $.post("../backend/partner_table.php",
						 { search : "" },
						 function(data, status){
						 $("#result").html(data);
						 });
				 }
				 load_table();
				 $("#search-partner").keyup(function(){
					 var name = $(this).val();
						$.post("../backend/partner_table.php",
						{ search : name },
						function(data, status){
						$("#result").html(data);
						});
				 });

				 $("#result").on("click", ".delete", function(){
					 alert("delete");
					 var id  = $(this).val();
					 $.post("../backend/viewpartner.php",
					 {delete : id})
					 load_table();
				 });

				 $("#result").on("click", ".ret", function(){
				 var id = $(this).val();
				 var load = '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>';
				 $("#modal-det").html(load);
				 //alert($(this).val());
				 $.post("../backend/viewpartner.php",
					{ id_u : id },
					function(data, status){
							$("#modal-det").html(data);
							//alert("Data: " + data + "\nStatus: " + status);
					});
        });
	 });

	 </script>
</body>

</html>
