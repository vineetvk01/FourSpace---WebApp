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
                    <h1 class="page-header">Add Products</h1>
										<?php
										if(isset($_GET['success']) && ($_GET['success'] == 1)){ ?>
										<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         The Product is successfully added.
                    </div>
									<?php } ?>
								</div>
                <!-- /.col-lg-12 -->
            <div class="col-md-5">
            <form role="form" method="POST" action="../backend/add_product.php">
              <div class="form-group">
               <label>Name*</label>
                <input class="form-control" type="text" name="name" placeholder="enter your product name">
               </div>

             	<div class="form-group">
                 <label>Category</label>
                 <select class="form-control" name="category">
                     <option value="NULL">None</option>
								<?php
									$result = mysqli_query($db,'SELECT `id`, `name` FROM `categories`');
									if(mysqli_num_rows($result)>0){
										while($option = $result->fetch_object()){
											?>
											<option value="<?php echo $option->id ?>"><?php echo $option->name; ?></option>
											<?php
										}
									}
								?>
                </select>
               </div>
               <div class="form-group">
                 <label>Respective Partner</label>
                 <select class="form-control" name="partner">
                     <option>None</option>
										 <?php
	 										$result = mysqli_query($db,'SELECT `id`, `name` FROM `partner`');
	 										if(mysqli_num_rows($result)>0){
	 											while($option = $result->fetch_object()){
	 												?>
	 												<option value="<?php echo $option->id ?>"><?php echo $option->name; ?></option>
	 												<?php
	 											}
	 										}
	 									?>
                 </select>
               </div>

              <div class="form-group" style="padding:10px;">
               <button type="submit" class="btn btn-primary">ADD</button>
              </div>
            </form>
           </div>
					 <div class="col-lg-6">
						 <img class="" src="http://via.placeholder.com/450x450" />
					 </div>
          </div>
            <!-- /.row -->
    </div>
        <!-- /#page-wrapper -->
 <!-- jQuery -->

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
 </div>

</body>

</html>
<!-- Load jQuery Chosen -->
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css" >
