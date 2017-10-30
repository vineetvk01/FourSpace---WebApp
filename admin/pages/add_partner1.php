<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'header.php'; ?>

<style type="text/css">
.container-login {
    min-height: 0;
    width: 480px;
    color: #333333;
    margin-top: 40px;
    padding: 0;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.container-login > section {
    margin-left: 0;
    margin-right: 0;
    padding-bottom: 10px;
}
#top-bar {
    display: inherit;
}
.nav-tabs.nav-justified {
    border-bottom: 0 none;
    width: 100%;
}
.nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
    float: none;
}
.container-login .nav-tabs.nav-justified > li > a,
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #ea533f;
    border: medium none;
    color: #ffffff;
    margin-bottom: 0;
    margin-right: 0;
    border-radius: 0;
}
.container-login .nav-tabs.nav-justified > .active > a,
.container-login .nav-tabs.nav-justified > .active > a:hover,
.container-login .nav-tabs.nav-justified > .active > a:focus {
    background: #ffffff;
    color: #333333;
}
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #de2f18;
}
.tabs-login {
    background: #ffffff;
    border: medium none;
    margin-top: -1px;
    padding: 10px 30px;
}
.container-login h2 {
    color: #ea533f;
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #999999;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.container-login .checkbox {
    margin-top: -15px;
}
.container-login button {
    background-color: #ea533f;
    border-color: #e73e28;
    color: #ffffff;
    border-radius: 0;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
    width: 100%;
}
.container-login button:hover,
.container-login button:focus {
    background: #de2f18;
    border-color: #be2815;
}
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 24px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "no";
  height: 20px;
  width: 26px;
  left: 1px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
  content: "yes";
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

button{align:center;}

/* datepicker--------------------------------- */

.datepicker{
    z-index: 10 !important;
    opacity: 0.9;
}


/* CHosen Styles --------------------------------- */

.chosen-container{
  width: 100% !important;
  color:blue;
}

#categories_chosen{
   floaT: left;
   clear: left;
    margin: 0 0 20px 0;
color:blue;}

#categories_chosen .chosen-choices{
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;


    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color:blue;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    color:blue;
}

fieldset:nth-child(2) legend{ color: #639124; }
.step1{ background-image: linear-gradient(to bottom,#83c12f 0,#639124 100%) !important;}
fieldset:nth-child(3) legend{ color: #ffbf14; }
.step2{ background-image: linear-gradient(to bottom,#ffbf14 0,#d5af00 100%) !important;}
fieldset:nth-child(4) legend{ color: #ff6137; }
.step3{ background-image: linear-gradient(to bottom,#ff6137 0,#c32900 100%) !important;}
fieldset:nth-child(5) legend{ color: #3cc4f1; }
.step4{ background-image: linear-gradient(to bottom,#3cc4f1 0,#018fbe 100%) !important;}




.input-lg, #categories_chosen .chosen-choices{
  border: 1px solid #EEE !important;
  box-shadow: none !important;
 color:blue;}


#Products_chosen{
   floaT: left;
   clear: left;
    margin: 0 0 20px 0;
    color:blue;
}

#Products_chosen .chosen-choices{
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;


    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    color:blue;
}

.input-lg, #Products_chosen .chosen-choices{
  border: 1px solid #EEE !important;
  box-shadow: none !important;
  color:blue;
 }

</style>
<style type="text/css">
    /* CHosen Styles --------------------------------- */

.chosen-container{
  width: 100% !important;
}

#products_chosen{
   floaT: left;
   clear: left;
    margin: 0 0 20px 0;
    color:blue;
}

#products_chosen .chosen-choices{
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;


    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    color:blue;
}

.chosen-container-multi .chosen-choices li.search-choice{
  border: none;
  background: #FFF !important;
  color:blue;
}

.chosen-container-multi .chosen-choices li.search-choice .search-choice-close{
  background-position: -42px 2px !important;
  color:blue;
}

.has-error input {
  border-width: 2px;
}

.validation.text-danger:after {
  content: 'Validation failed';
}

.validation.text-success:after {
  content: 'Validation passed';
}

  #sortable1,  #sortable2 { list-style-type: none; width: 100%; min-height: 300px;

    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #EEE;
    border-radius: 4px;

}
  #sortable1 li,
  #sortable2 li{
    margin: 0 3px 5px 0;
    padding: 0.4em;
    padding-left: 2em;
    font-size: 1em;
    line-height: 1.3em;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    background: #EEE;
    border: 1px solid #EEE;
    cursor: pointer;
}
  #sortable1 li span,
  #sortable2 li span{ position: absolute; margin-left: -1.3em; }


.showProgress{
  position: relative;
  margin: 0 auto;
  padding: 20px 0;
  width: 100%;
  z-index: 999;
  background-color: rgba(255, 255, 255, 0.8);
}


.showProgress .progress{
  position: relative;
  margin: 0 auto;
  width: 80%;
  z-index: 999;
}


fieldset:nth-child(2) legend{ color: #639124; }
.step1{ background-image: linear-gradient(to bottom,#83c12f 0,#639124 100%) !important;}
fieldset:nth-child(3) legend{ color: #ffbf14; }
.step2{ background-image: linear-gradient(to bottom,#ffbf14 0,#d5af00 100%) !important;}
fieldset:nth-child(4) legend{ color: #ff6137; }
.step3{ background-image: linear-gradient(to bottom,#ff6137 0,#c32900 100%) !important;}
fieldset:nth-child(5) legend{ color: #3cc4f1; }
.step4{ background-image: linear-gradient(to bottom,#3cc4f1 0,#018fbe 100%) !important;}



</style>
</head>

<body>

    <div id="wrapper">

        <?php include 'nav.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Partners</h1>
                </div>
                <!-- /.col-lg-12 -->
                                <div class="login-body">
                                    <article class="container">
                                        <div class="col-md-8 col-md-offset-0">
                                        <section>

                                            <div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
                                                <div id="login-access" class="tab-pane fade active in">
                                                    <!--<h2><i class="glyphicon glyphicon-log-in"></i> Accesso</h2>-->
                                                    <form method="get" >
                                                       <div class="form-group">
                                                        <label for="name">Name*</label>
                                                        <input type="text" class="form-control input-sm" id="name" name="name"placeholder="Enter Your Name" >
                                                       </div>

                                                        <label for="togglebutton">Recommended</label><br/>
                                                        <label class="switch">
                                                        <input type="checkbox" checked id="recommended" name="recommended">
                                                        <span class="slider round"></span>
                                                       </label><br/>

                                                       <label for="togglebutton">Verified</label><br/>
                                                        <label class="switch">
                                                        <input type="checkbox" checked id="verified" name="verified">
                                                        <span class="slider round"></span>
                                                       </label><br/>

                                                       <label for="togglebutton">Popular</label><br/>
                                                        <label class="switch">
                                                        <input type="checkbox" checked id="popular" name="popular">
                                                        <span class="slider round"></span>
                                                       </label><br/>

                                                       <label for="rating">Rating</label><br/>
                                                       <input type="number" class="form-control input-sm" id="rating" name="rating"
                                                       placeholder="Enter Your #rating" >


                                                      <label for="#rating"># of Rating</label><br/>
                                                       <input type="number" class="form-control input-sm" id="#rating" name="#rating"
                                                       placeholder="Enter Your #rating" >

                                                          <label for="categories" class="control-label">Categories</label>
                                                          <!--<div data-toggle="tooltip" data-placement="top" title="You must know a language.. please tell me you do, you can read this.. can you? Select at least English from the dropdown list">-->
                                                          <select id="categories" multiple tabindex="4" style="width:100%; box-size: border-box;"
                                                          class="input-lg form-control" >
                                                            <option value="1" class="blueText">Sentinelese</option>
                                                            <option value="2" class="blueText">Pukapuka</option>
                                                            <option value="3" class="blueText">English</option>
                                                            <option value="4" class="blueText">Dumi</option>
                                                            <option value="5" class="blueText">Chamekolo</option>
                                                          </select><br/>



                                                          <label for="products" class="control-label">Products</label>
                                                          <select id="products" multiple tabindex="4" style="width:100%; box-size: border-box;"
                                                          class="input-lg form-control" >
                                                            <option value="1">sofa</option>
                                                            <option value="2">chair</option>
                                                            <option value="3">wardrobes</option>
                                                            <option value="4">kitchen wardrobes</option>
                                                            <option value="5">etc</option>
                                                          </select><br/>


                                                        <label for="city">city</label><br/>
                                                        <select class="form-control" id="city" name="city">
                                                       <option selected>Choose your city</option>
                                                       <option >bangalore</option>
                                                       <option >delhi</option>
                                                       <option >chennai</option>
                                                       <option >hydrabadh</option>
                                                      </select><br/>

                                                      <label for="area">Area</label><br/>
                                                       <select class="form-control" id="area" name="area">
                                                       <option selected>Choose...</option>
                                                       <option >East</option>
                                                       <option >west</option>
                                                       <option >north</option>
                                                       <option >south</option>
                                                      </select><br/>

                                                        <div class="form-group">
                                                        <label for="location">Location</label>
                                                          <input type="text" class="form-control" id="location" name="location" placeholder="Enter Your Location">
                                                       </div>

                                                      <div class="form-group">
                                                      <label for="pincode">pincode</label>
                                                      <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter your pincode">
                                                      </div>

                                                       <label for="rating">Range</label><br/>
                                                       <select class="form-control" id="range" name="range">
                                                       <option selected>Choose...</option>
                                                       <option >premium</option>
                                                       <option >abcd</option>
                                                       <option >efgh</option>
                                                       <option >ijkl</option>
                                                       <option >opas</option>
                                                      </select><br/>

                                                      <div class="form-group">
                                                      <label for="opening_hours">Opening_time</label>
                                                      <input type="text" class="form-control" id="opening_time" name="opening_time" placeholder="shop opening_hours">
                                                      </div>

                                                      <div class="form-group">
                                                       <label for="opening_hours">Closing_time</label>
                                                       <input type="text" class="form-control" id="closing_time" name="closing_time" placeholder="shop opening_hours">
                                                      </div>

                                                      <div class="form-group">
                                                       <label for="about">About:</label>
                                                        <textarea class="form-control" rows="5" id="about" name="about"></textarea>
                                                      </div>

                                                      <div class="form-group">
                                                       <label for="address">Address:</label>
                                                        <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                                                      </div>


                                                      <div class="form-group">
                                                      <label for="email">Email</label>
                                                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                                      </div>

                                                      <div class="form-group">
                                                      <label for="contact">Contact</label>
                                                      <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your contact">
                                                      </div>

                                                      <div class="form-group">
                                                      <label for="website">Website</label>
                                                      <input type="text" class="form-control" id="website" name="website" placeholder="Enter your website">
                                                      </div>
                                                      <!-- image

                                                        feild-->
                                                      <div class="form-group">
                                                      <label for="payment">Payment_method</label>
                                                         <div class="checkbox">
                                                              <label><input type="checkbox" value="cash">cash</label>
                                                            </div>
                                                            <div class="checkbox">
                                                              <label><input type="checkbox" value="debit_card">Debit card</label>
                                                            </div>
                                                            <div class="checkbox">
                                                              <label><input type="checkbox" value="cheque" >Cheque</label>
                                                            </div>
                                                        </div>


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
                                			           <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                                					   <div class="input-group-btn">
                                						<button class="btn btn-success add-more2" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                					   </div>
                                			           </div>
                                                        <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
                                						<div class="copy-fields2 hide">
                                						  <div class="control-group2 input-group" style="margin-top:10px">
                                							<input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                                							<div class="input-group-btn">
                                							  <button class="btn btn-danger remove2" type="button"><i class="glyphicon glyphicon-remove"></i> remove</button>
                                							</div>
                                						  </div>
                                						</div><br/>


                                                       <div class="form-group">
                                                       <label for="catalog">Catalog/items:</label>
                                                        <textarea class="form-control" rows="5" id="catalog" name="catalog"></textarea>
                                                      </div>
                                                      <div class="form-group">
                                                      <button type="submit" class="btn btn-primary">ADD</button>
                                                      </div>
                                                     </form>

                                                </div>
                                            </div>
                                        </section>
                                        </div>
                                    </article>
                                </div>
            </div>
            <!-- /.row -->
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!-- Load jQuery Chosen-->
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>


<script type="text/javascript">

/* ------------------------------------------------------
    Multiple Select
-------------------------------------------------------*/

 $("#categories").chosen();

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

        categories:  function(){
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

      /*
      $('.result').append("<p>" + userInfo.priority() + "</p>");
      $('.result').append("<p>" + userInfo.categories() + "</p>");
      $('.result').append("<p>" + userInfo.card_details() + "</p>");
      */

      console.log(userInfo.priority());
      console.log(userInfo.categories());
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
<script type="text/javascript">
/* ------------------------------------------------------
    Initialize Tooltip
-------------------------------------------------------*/

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


$(function() {
  $( "#sortable1, #sortable2" ).sortable({
    connectWith: ".connectedSortable"
  }).disableSelection();
});

/* ------------------------------------------------------
    Bootstrap Datepicker
-------------------------------------------------------*/


$('#userBirthDate').datepicker({
    showAnim: "bounce",
    format: "mm/yyyy",
    startDate: "01/1991",
    startView: 2,
    minViewMode: 1,
    orientation: "bottom right",
    autoclose: true
});

/*
$('#userBirthDate').focus(function ()  {
  $( ".datepicker" ).toggle( "bounce", { times: 3 }, "slow" );
});
*/



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