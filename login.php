<!DOCTYPE html>
<html lang="en">
<?php include 'functions.php'; ?>
  <head>
		<?php include 'header.php';?>
		<title>FourSpace | Login</title>
  </head>

  <body>

    <?php include 'nav.php'; ?>

    <section class="content-section-a">
		<div class="container" style="margin-top:100px;">
		  <hr />
		  <h4 style="text-align:center;">LOGIN</h4>
		  <hr />		  
		  <div class="row">
		  	 <div class="col-lg-6">
          		<div class="form-group">
	                 <label>Username :</label>
	                 <input class="form-control" placeholder="Username">
	             </div>
	             <div class="form-group">
	                 <label>Password:</label>
	                 <input type="password" class="form-control" placeholder="password">
	             </div>
          </div>
          <div class="col-lg-6">
          </div>
        </div>
		</div>
      <!-- /.container -->
	 </section>
    <!-- /.content-section-a -->

    
    <!-- /.banner -->

	<?php include 'footer.php'; ?>    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
