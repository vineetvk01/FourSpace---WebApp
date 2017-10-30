<?php
require '../pages/bridge.php';

$error = array();

if(isset($_POST['name']) && !empty($_POST['name'])){

		//Variables for partner table
       echo $name = test_input($_POST['name']); echo '<br>';
       echo $recommended = test_input($_POST['recommended']); echo '<br>';
       echo $verified = test_input($_POST['verified']); echo '<br>';
       echo $popular = test_input($_POST['popular']); echo '<br>';
       echo $area = test_input($_POST['area']); echo '<br>';
       echo $location = test_input($_POST['location']); echo '<br>';
       echo $range_type = test_input($_POST['range_type']); echo '<br>';
       $area = test_input($_POST['area']);

       echo $cash = $_POST['cash'];
       echo $card = $_POST['card'];
       echo $online_transfer = $_POST['online_transfer'];

       echo $opening_time = test_input($_POST['opening'].":".$_POST["opening_minutes"]); echo '<br>';
       echo $closing_time = test_input($_POST['closing'].":".$_POST["closing_minutes"]); echo '<br>';

       // $cover_img = test_input($_POST['cover_img']);

     //Server Time : DL/MB +5.30
        //$created = '2017-10-06 16:28:30';
        $created = date('Y-m-d H:i:s', time());
        $last_edited = $created;
        $last_published = $created;

     //Variables for Partner_details
       echo $about = test_input($_POST['about']); echo '<br>';
       echo $address = test_input($_POST['address']); echo '<br>';
       echo $city = test_input($_POST['city']); echo '<br>';
       echo $pincode = test_input($_POST['pincode']); echo '<br>';
       echo $state = test_input($_POST['state']); echo '<br>';
       echo $email = test_input($_POST['email']); echo '<br>';
       echo $contact = test_input($_POST['contact']); echo '<br>';
       echo $website = test_input($_POST['website']); echo '<br>';
       // $lang = test_input($_POST['languages']);

     //Categories
        //$categories = test_input($_POST['categories']);
        $categories = array("1", "2", "3");

     //products
        //$product = test_input($_POST['products']);
        $product = array("23", "21", "20");

     //cities
        //$cities = test_input($_POST['cities']);
        $cities = array("3", "5", "8");

     //slider_image
        //$slider_img = test_input($_POST['slider_img']);
        $slider_img = array("hello.png","something.png");

     //payment_methods
         if(!isset($_POST['cash']) && empty($_POST['cash'])){
         		$cash = '0';
         	}else {
         		$cash = '1';
         	}
         if(!isset($_POST['card']) && empty($_POST['card'])){
         		$card = '0';
         	}else {
         		$card = '1';
         	}
         if(!isset($_POST['online_transfer']) && empty($_POST['online_transfer'])){
         		$online_transfer = '0';
         	}else {
         		$online_transfer = '1';
         	}

     //language
        //$language = test_input($_POST['language']);
        $language = $_POST['addmore'];
     //amenities
        //$amenities = test_input($_POST['amenities']);
        $amenities = $_POST['addmore2'];



   // cover image
       //Cover-image validation
         $FOLDER = '../../files/images/';
			$file = $_FILES['cvr_img']['tmp_name'];
		    if (file_exists($file))
		    {
		        $imagesizedata = getimagesize($file);
		        if ($imagesizedata === FALSE)
		        {
		            $error[] = 'Image is not proper';
		        }
		        else
		        {
		            if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/jpg")|| ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 2000)){
		            	if (move_uploaded_file($file, $FOLDER.$file_name) === FALSE) {
			                    $error_msg = "Error while uploading the file";
			                }
		            }
		        }
		    }
		    else
		    {
		        $error[] = 'No File for cover image';
		    }

		    $cover_img = $FOLDER.$file_name;

     //SQL Query - Partner Table
        mysqli_query($db,'INSERT INTO `partner`(`name`, `recommended`, `verified`, `popular`, `area`, `location`, `range_type`, `opening_time`, `closing_time`, `cover_img`, `created`, `last_edited`, `last_published`) VALUES ( "'.$name.'", "'.$recommended.'", "'.$verified.'", "'.$popular.'", "'.$area.'", "'.$location.'", "'.$range_type.'", "'.$opening_time.'", "'.$closing_time.'", "'.$cover_img.'" , "'.$created.'", "'.$last_edited.'","'.$last_published.'" )');


     //SQL Query - Partner Details Table
       mysqli_query($db,'INSERT INTO `partner_details`(`about`, `address`, `city`, `pincode`, `state`, `email`, `contact`, `website`) VALUES ("'.$about.'", "'.$address.'","'.$city.'","'.$pincode.'","'.$state.'", "'.$email.'","'.$contact.'","'.$website.'")');

    //SQL Query - p_categories Table

    if ($result=mysqli_query($db,'select max(id) as pkey from `partner` limit 1'))
      {
      while ($obj=mysqli_fetch_object($result))
        {
            $p_key = $obj->pkey;
        }


      // Free result set
      mysqli_free_result($result);
    }

    //SQL Payment Methods


    //SQL Query - p_product Table
        foreach ($product as $pro) {
        		echo $pro; echo '<br>';
             mysqli_query($db,'INSERT INTO `p_prouct`(`p_key`, `product_key`) VALUES ("'.$p_key.'","'.$pro.'")');
        }


    //SQL Query - p_slider_image Table
       foreach ($slider_image as $slide) {
       		echo $slide; echo '<br>';
            mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$slide.'")');
        }

    //SQL Query - p_language Table
		  print_r($language);
        foreach ($language as $lang) {
        		 if(!empty($lang)){
        		 echo $lang; echo '<br>';
             mysqli_query($db,'INSERT INTO `p_language`(`p_key`, `language`) VALUES ("'.$p_key.'","'.$lang.'")');
          }
        }

    // SQL Query - p_amenities Table
    	  print_r($amenities);
        foreach ($amenities as $amenity) {
        		 if(!empty($amenity)){
        		 echo $amenity; echo '<br>';
             mysqli_query($db,'INSERT INTO `p_amenities`(`p_key`, `amenities`) VALUES ("'.$p_key.'","'.$amenity.'")');
				}
        }


    //SQL Query - p_payment
    mysqli_query($db,'INSERT INTO `p_payment`(`p_key`, `cash`, `card`, `online_transfer`) VALUES ("'.$p_key.'","'.$cash.'","'.$card.'","'.$online_transfer.'")');


}


?>
