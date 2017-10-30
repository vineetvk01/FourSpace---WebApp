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
                    <h1 class="page-header">Edit Designer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<div class="row">
                <div class="col-lg-12">
                    <h5>Designers</h5>
                    <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                             <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                            </input>
                     </div>


                    <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Username</th>
                                      <th>Phone</th>
                                      <th>Location</th>
                                      <th>options</th>
                                  </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>@mdo</td>
                                      <td>+91-9090909090</td>
                                      <td>Bangalore</td>
                                      <td><button class=" btn-link">Edit</button></td>
                                   </tr>

                              </tbody>
                          </table>
                    </div>
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
                                             <a href="#">2</a>
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
							</div><!-- Row -->
         </div>




         </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
