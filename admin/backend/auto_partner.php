<?php
require '../pages/bridge.php';

//Variables for partner table
        $name = 'Vineet';
        $recommended = '1';
        $verified = '1';
        $popular = '1';
        $location = 1;
        $range_type = 'premium';

        $opening_time = '09:00:00';
        $closing_time = '19:00:00';

        $cover_img = 'something.png';

     //Server Time : DL/MB +5.30
        $created = '2017-10-06 16:28:30';
        $last_edited = '2017-10-06 16:28:30';
        $last_published = '2017-10-06 16:28:30';

     //Variables for Partner_details
        $about = 'dfssssssssssssssssssssssssssssssssssssssssssssssssss';
        $address = 'saffdafasfsfasfsafsaf';
        $city = 'vdcvdvd';
        $pin_code = '101010';
        $state = 'KA';
        $email = 'vineetvk01@gmail.com';
        $contact = '0000000000';
        $website = 'google.com';

     //Categories
        //$categories = test_input($_POST['categories']);
        $categories = array("1", "2", "3");

     //products
        //$product = test_input($_POST['products']);
        $product = array("23", "21", "20");

     //cities
        //$cities = test_input($_POST['cities']);
        $product = array("3", "5", "8");

     //slider_image
        //$slider_img = test_input($_POST['slider_img']);
        $slider_img = array("hello.png","something.png");

     //payment_methods
         $cash = '1';
         $card = '0';
         $online_transfer = '0';

     //language
        //$language = test_input($_POST['language']);
        $language = array('english', 'hindi');
     //amenities
        //$amenities = test_input($_POST['amenities']);
        $amenities = array('washroom', 'dilevery');

     //catalog
        //$catalog = test_input($_POST['catalog']);
        $catalog = array('sofas','bed');

     //SQL Query - Partner Table
        mysqli_query($db,'INSERT INTO `partner`(`name`, `recommended`, `verified`, `popular`, `area`, `location`, `range_type`, `opening_time`, `closing_time`, `cover_img`, `created`, `last_edited`, `last_published`) VALUES ("'.$name.'", "'.$recommended.'", "'.$verified.'", "'.$popular.'", "'.$area.'", "'.$location.'", "'.$range_type.'", "'.$opening_time.'", "'.$closing_time.'", "'.$cover_img.'" , "'.$created.'", "'.$last_edited.'","'.$last_published.'")');

     //SQL Query - Partner Details Table
        mysqli_query($db,'INSERT INTO `partner_details`(`about`, `address`, `city`, `pincode`, `state`, `email`, `contact`, `website`) VALUES ("'.$about.'", "'.$address.'","'.$city.'","'.$pin_code.'","'.$state.'","'.$email.'","'.$contact.'","'.$website.'")');


    $result = mysqli_query($db,'Select max(id) as maxid from `partner` limit 1');
      if(mysqli_num_rows($result)>0){
        $p_key = $result->fetch_object()->maxid;
      }

    //SQL Query - p_categories Table
        foreach ($categories as $cat) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$cat.'")');
        }


    //SQL Query - p_product Table
        foreach ($products as $pro) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$pro.'")');
        }

    //SQL Query - p_cities Table
        foreach ($cities as $city) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$city.'")');
        }
    //SQL Query - p_slider_image Table
        foreach ($slider_image as $slide) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$slide.'")');
        }
    //SQL Query - p_language Table
        foreach ($languages as $lang) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$lang.'")');
        }

    //SQL Query - p_amenities Table
        foreach ($aminities as $aminity) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$aminity.'")');
        }
    //SQL Query - p_catalog Table
        foreach ($catalogs as $cata) {
             mysqli_query($db,'INSERT INTO `p_catalog`(`p_key`, `items`) VALUES ("'.$p_key.'","'.$cata.'")');
        }



?>