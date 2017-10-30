<!DOCTYPE html>
<html lang="en">
<?php include_once 'bridge.php';
		if(!is_logged_in()){
			die(header('location: login.php'));
		}
?>

<head>
<?php include 'header.php'; ?>
<title>Add Partner | Admin</title>
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


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->

<script type="text/javascript">

    $(document).ready(function() {

  //here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more").click(function(){
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });



    });
</script>
</head>

<body>

    <body>

    <div id="wrapper">

        <?php include 'nav.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Partners</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <!-- FORM STARTS HERE -->
            <div class="panel-body">
					<form role="form" action="../backend/add_patner.php" method="POST" enctype="multipart/form-data">
                 <div class="row">
                        <div class="col-lg-6">
                                 <hr>
                                 <h4>Main Details:</h4>
                                 <hr>

                                       <div class="form-group">
                                            <label for="name">Name of partner:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="Partner" placeholder="Enter Partner's Name" >
                                       </div>
                                       <div class="row">
                                               <div class="col-lg-6">
                                                   <div class="form-group">
                                                       <label>Recommendation</label>
                                                       <select class="form-control" name="recommended">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6">
                                                   <div class="form-group">
                                                       <label>Verified</label>
                                                       <select class="form-control" name="verified">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                       </select>
                                                   </div>
                                               </div>
                                       </div>
                                       <div class="row">
                                               <div class="col-lg-6">
                                                   <div class="form-group">
                                                       <label>Popular</label>
                                                       <select class="form-control" name="popular">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6">
                                                   <div class="form-group">
                                                       <label>Range Type</label>
                                                       <select class="form-control" name="range_type">
                                                            <option value="premium">Premium</option>
                                                            <option value="budget">budget</option>
                                                            <option vlaue="luxury">luxury</option>
                                                       </select>
                                                   </div>
                                               </div>
                                       </div>
                                       <div class="row">
                                                <h4>Opening Time :</h4>
                                               <div class="col-lg-3">
                                                   <div class="form-group">
                                                       <label>Hours</label>
                                                       <select class="form-control" name="opening">
                                                            <?php for($i=0; $i<24; $i++){ ?>
                                                            <option><?php echo $i; ?></option>
                                                            <?php } ?>
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="col-lg-3">
                                                   <div class="form-group">
                                                       <label>minutes</label>
                                                        <select class="form-control" name="opening_minutes">
                                                            <?php for($i=0; $i<60; $i++){ ?>
                                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                            <?php } ?>
                                                       </select>
                                                   </div>
                                               </div>
                                       </div>
                                       <div class="row">
                                               <h4>Closing Time:</h4>
                                               <div class="col-lg-3">
                                                   <div class="form-group">
                                                       <label>Hours</label>
                                                       <select class="form-control" name="closing">
                                                            <?php for($i=0; $i<24; $i++){ ?>
                                                            <option><?php echo $i; ?></option>
                                                            <?php } ?>
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="col-lg-3">
                                                   <div class="form-group">
                                                       <label>minutes</label>
                                                        <select class="form-control" name="closing_minutes">
                                                            <?php for($i=0; $i<60; $i++){ ?>
                                                            <option><?php echo $i; ?></option>
                                                            <?php } ?>
                                                       </select>
                                                   </div>
                                               </div>
                                       </div>
													<!-- <div class="form-group"> -->
									        <label for="languge_spoken">Language_spoken:</label>
                                      <div class="input-group control-group after-add-more">
                                         <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                                         <div class="input-group-btn">
                                            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                         </div>
                                      </div>

                                <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
                                <div class="copy-fields hide">
                                  <div class="control-group input-group" style="margin-top:10px">
                                  <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                                  <div class="input-group-btn">
                                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                  </div>
                                  </div>
                                </div><br/>

						<label for="amenties">Amenties:</label>
                   <div class="input-group control-group2 after-add-more2">
			           <input type="text" name="addmore2[]" class="form-control" placeholder="Enter Name Here">
					   <div class="input-group-btn">
						<button class="btn btn-success add-more2" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
					   </div>
			           </div>
                        <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
						<div class="copy-fields2 hide">
						  <div class="control-group2 input-group" style="margin-top:10px">
							<input type="text" name="addmore2[]" class="form-control" placeholder="Enter Name Here">
							<div class="input-group-btn">
							  <button class="btn btn-danger remove2" type="button"><i class="glyphicon glyphicon-remove"></i> remove</button>
							</div>
						  </div>
						</div><br/>
													<!-- </div> -->
                                       <div class="form-group">
                                            <label>About:</label>
                                            <textarea class="form-control" rows="4" name="about"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Methods : </label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="cash" value="1">Cash
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="card" value="1">Card
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="online_transfer" value="1">Online Transfer
                                                </label>
                                            </div>
                                        </div>


                          <div class="form-group">
                           	<label class="control-label" for="field1">Add Slider Image :(Size: 900x300px)</label>
								      <div id="field">
					                     <input type="file" onchange="readURL(this,'sldr_img');" class="input" id="field1" name="slider[]"/>
												<img id="sldr_img" style="height:200px; margin:10px 0;"  class="img-responsive img-thumbnail" src="http://via.placeholder.com/900x300" alt="Image-Preview" />
										</div>
								      <br>
								      <button type="button" style="text-align:center;" class="add-slider btn btn-outline btn-primary btn-lg btn-block">
                           		<i class="fa fa-plus" aria-hidden="true"></i>
                           	</button>
                           	<hr>
                         </div>

                        </div>
                        <div class="col-lg-6">
                        	<hr>
                           <h4>Other Details:</h4>
                           <hr>
                           <div class="form-group">
                               <label>Addresss:</label>
                               <textarea class="form-control" rows="4" name="address"> Some Address</textarea>
                           </div>
                        	<div class="row">
                                               <div class="col-lg-6">
                                                   <div class="form-group">
                                                       <label>City</label>
                                                       <select class="form-control" name="city">
                                                           <?php
                                                            get_cities();
                                                           ?>
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6">
                                                   <div class="form-group">
                                                       <label>Area</label>
                                                       <select class="form-control" name="area">
                                                        <?php
                                                            get_areas();
                                                        ?>
                                                        </select>
                                                   </div>
                                               </div>
                           </div>
													 <div class="form-group">
                                <label for="name">Location:</label>
                                <select class="form-control" id="location" name="location">
																	<option>None</option>
																<?php
																  $result = mysqli_query($db,'SELECT `id`, `name`FROM `location`');
																	if(mysqli_num_rows($result) > 0){
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
                                <label for="name">pincode:</label>
                                <input type="text" class="form-control" id="name" name="pincode" placeholder="Pincode" value='123456' maxlength="6" >
                           </div>
                           <div class="form-group">
                                <label for="name">state:</label>
                                <input typ+e="text" class="form-control" id="name" name="state" placeholder="State" value="KA" disabled >
                           </div>
                           <div class="form-group">
                                <label for="name">email:</label>
                                <input type="email" class="form-control" id="name" name="email" placeholder="email" value="something@gmail.com" >
                           </div>
                           <div class="form-group">
                                <label for="name">contact:</label>
                                <input type="text" class="form-control" id="name" name="contact" placeholder="contact number" value="9999999999" >
                           </div>
                           <div class="form-group">
                                <label for="name">website:</label>
                                <input type="text" class="form-control" id="name" name="website" placeholder="website" value="google.com" >
                           </div>
                           <div class="form-group">
											<label for="cvr-img">Cover Image: ( Size : 900x300px )</label>
											<input type='file' name="cvr_img" onchange="readURL(this,'cvr-pre');" />
											<hr>
        									<img id="cvr-pre" style="height:200px;" class="img-responsive img-thumbnail" src="http://via.placeholder.com/900x300" alt="Image-Preview" />
                           		<hr>
                           </div>

                        </div>
                 </div>
                <div class="row">
                    <div style="padding-top:20px;" class="form-group" >
                        <button type="submit" class="btn btn-primary btn-block">Add Partner</button>
                    </div>
               </div>

                 </form>
            </div>

            <!-- FORM STARTS HERE -->

         </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>
<script type="text/javascript">
        function readURL(input,ids) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+ids+'').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        var next = 1;
   	  $(".add-slider").click(function(e){
   	  				  e.preventDefault();
				        next = next + 1;
				        var slid = $('<input type="file" onchange="readURL(this,\'sldr_img'+next+'\');" class="input pull-left" id="field'+next+'" name="slider[]"/>');
						  var vie  = $('<img style="margin:10px 0; height:200px;" id="sldr_img'+next+'" class="img-responsive img-thumbnail" src="http://via.placeholder.com/900x300" alt="Image-Preview" />');
						  var rem = $('<button value="'+next+'" type="button" class="remove-sldr btn btn-danger pull-right" > - </button>');
						  $("#field").append(slid);
						  $("#field").append(rem);
						  $("#field").append(vie);
		 });
		 $("#field").on('click', ".remove-sldr", function () {
		 	var id = $(this).val();
		 	alert(id);
		 	$('#sldr_img'+id+'').remove();
		 	$('#field'+id+'').remove();
		 	$(this).remove();
		 });

</script>

<script type="text/javascript">


/* ------------------------------------------------------
    Multiple Select
-------------------------------------------------------*/

 $("#products").chosen();

/* ------------------------------------------------------
    Progress Steps
-------------------------------------------------------*/

  var valueNow = $(".progress-bar").attr('aria-valuenow');
  var style = $(".progress-bar").attr('style');
  var valueNowZ = $(".sr-only").html();
  console.log(valueNow);

  function formProgress(){
    $(".progress-bar").css("width", valueNow + "%");
    $(".sr-only").html(valueNow + "% Complete");
  };

  function checkProgress(){
    // check all the inputs are completed

    //
    // check if step 1 is completed
    //

    if($('#userFirstName').val() != 0 && $('#userLastName').val() != 0 ){
      $(".step1").css('width', "25%");
      $(".step1").addClass("valid");
      $('#userFirstName').parent().children('.text-danger').remove();
      $('#userLastName').parent().children('.text-danger').remove();
    }
    else{
      $(".step1").css('width', 0);
      $(".step1").removeClass("valid");


   /*
      if ( $('#userFirstName').val() == 0 ){
        $('#userFirstName').parent().children('.text-danger').remove();
        $('#userFirstName').parent().append("<span class='text-danger'>Invalid Data</span>");
      }

      if ( $('#userLastName').val() == 0 ){
        $('#userLastName').parent().children('.text-danger').remove();
        $('#userLastName').parent().append("<span class='text-danger'>Invalid Data</span>");
      }
      */


    }

    //
    // check if step 2 is completed
    //
    if($('#userBirthDate').val() != 0 && $('#country').val() != 0 && $('#sortable2').children("li").length != 0 ){

        $(".step2").css('width', "25%");
        $(".step2").addClass("valid");

    }
    else{
      $(".step2").css('width', 0);
      $(".step2").removeClass("valid");
    }
    //
    // check if step 3 is completed
    //
    if( $(".chosen-choices > li").length > 1 ){
      $(".step3").css('width', "25%");
      $(".step3").addClass("valid");
    }
    else{
      $(".step3").css('width', 0);
      $(".step3").removeClass("valid");
    }
    //
    // check if step 4 is completed
    //
    if($('#cc-number').val() != 0 && $('#cc-exp').val() != 0 ){
      if($('#cc-cvc').val() != 0){
         $(".step4").css('width', "25%");
         $(".step4").addClass("valid");
      }
    }
    else{
      $(".step4").css('width', 0);
      $(".step4").removeClass("valid");
    }

    };

 setInterval(formProgress, 1000);
 setInterval(checkProgress, 1000);

/* ------------------------------------------------------
    Print the object upon sumbmit!
-------------------------------------------------------*/

function formReady(){
  //check if all the form is completed
  if( $('.progress').children().length == $('.progress').children('.valid').length ){
    // check if credit card is valid
    if( $('.has-error').length != 0 ){

      var userInfo = {
        first_name: $('#userFirstName').val(),
        last_name: $('#userLastName').val(),
        birth_date: $('#userBirthDate').val(),
        country: $('#country').val(),
        birth_date: $('#userBirthDate').val(),
        country: $('#country').val(),
        priority: function(){
          for(var i = 1; i<= $('#sortable2 li').length; i++){
            var k = $("#sortable2 li:nth-child(" + i + ")" ).text();
            $('.result').append("<p>" + "<i>Priority "+ i + ':</i> ' + k + "</p>");
          }
            $('.result').append("<br />");
        },

        products:  function(){
          for(var i = 1; i<$('.chosen-choices li').length; i++){
            var k = $(".chosen-choices li:nth-child(" + i + ") span" ).text();
            $('.result').append("<p>" + "<i>User knows:</i> " + k + "</p>");
          }
            $('.result').append("<br />");
        },

        card_details:   function(){
            var card_number = $('#cc-number').val();
            var card_exp = $('#cc-exp').val();
            var show_card_number = card_number.slice(15,19);
            $('.result').append("<p>" + '<i>Card Number:</i> #### #### #### ' + show_card_number + "</p>");
            $('.result').append("<p>" + '<i>Card Expire:</i> ' + card_exp + "</p>");
            $('.result').append("<br />");
        }
      }

      $('.result').append("<p><i>First Name:</i> " + userInfo.first_name + "</p>");
      $('.result').append("<p><i>Last Name:</i> " + userInfo.last_name + "</p>");
      $('.result').append("<p><i>Birth Date:</i> " + userInfo.birth_date + "</p>");
      $('.result').append("<p><i>Country:</i> " + userInfo.country + "</p><br />");



      console.log(userInfo.priority());
      console.log(userInfo.products());
      console.log(userInfo.card_details());

    }
  }
}

/* ------------------------------------------------------
    Payment/Card Validator and SUMBIT
-------------------------------------------------------*/

    jQuery(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');

      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        this.parent('.form-group').children('.text-danger').remove();
        this.parent('.form-group.has-error').append("<span class='text-danger'>Invalid Data</span>");
        return this;
      };

      $('form').submit(function(e) {
        e.preventDefault();

        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);

        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');


        // adding the form ready when submit is pressed
        formReady();

      });

    });

</script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<script type="text/javascript">

    $(document).ready(function() {

	//here first get the contents of the div with name class copy-fields2 and add it to after "after-add-more2" div class.
      $(".add-more2").click(function(){
          var html = $(".copy-fields2").html();
          $(".after-add-more2").after(html);
      });
//here it will remove2 the current value of the remove2 button which has been pressed
      $("body").on("click",".remove2",function(){
          $(this).parents(".control-group2").remove();
      });

    });
</script>
