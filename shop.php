<!DOCTYPE html>
<html lang="en">
<?php include 'functions.php'; ?>
  <head>
		<?php include 'header.php';?>
		<title>Layouts | FourSpace</title>
		
  </head>

  <body>

    <?php include 'nav.php'; ?>

    

    <!-- Page Content -->
    <section class="content-section-b">
		<div class="container" style="margin-top:100px;">
		<div style="width:400px;"></div>
		
			<div class="row">
				<div class="col-lg-4">
				  <div class="list-group">
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">Location & Area</h5>
					      <hr>
					    </div>
					    <p class="mb-1"></p>
					    <small>Donec id elit non mi porta.</small>
					  </a>
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">Products</h5>
					    </div>
					    <p class="mb-1"></p>
					    <small class="text-muted">Donec id elit non mi porta.</small>
					  </a>
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">Rating</h5>
					    </div>
					    <p class="mb-1"></p>
					    <small class="text-muted">Donec id elit non mi porta.</small>
					  </a>
					</div>
				
				</div>
				<div class="col-lg-8">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Home</a></li>
					  <li class="breadcrumb-item"><a href="#">Library</a></li>
					  <li class="breadcrumb-item active">Data</li>
					</ol>
					<!-- row of items -->
					<?php $i=0; do{ ?>
					<div class="row">
			        <div class="col-md-4">
			          <a href="#">
			            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/350x300" alt="">
			          </a>
			        </div>
			        <div class="col-md-8">
			          <h3>Petals</h3>
			          <p><small class="text-muted">Race Course Road</small></p><br>
								<p style="font-weight:100;">Central Bangalore<br>
								Range:Premium<br>
								Products:
								Curtains, Sofa Material, Wooden Flooring, Carpet, Cushions, Bedding, Blinds, Motorization Curtains, Mattress & Rugs,Curtain fabrics.</p>
			          <a class="btn btn-primary" href="#">View Project</a>
			        </div>
			      </div>
			      <hr>
			      <?php $i++; }while($i<10)?>
					
					<!-- //row -->
				</div>
			</div>
      </div>
      <!-- /.container -->
    </section>

    

    
    <!-- /.banner -->

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
