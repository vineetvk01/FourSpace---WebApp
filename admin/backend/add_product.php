<?php
require '../pages/bridge.php';

$error = array();

if(isset($_POST['name']) && !empty($_POST['name'])){

		//Variables for partner table
       echo $name = test_input($_POST['name']); echo '<br>';
       echo $partner = test_input($_POST['partner']); echo '<br>';
       //echo $add_date = test_input($_POST['adddate']); echo '<br>';

       echo $category = test_input($_POST['category']);

		 $product_image = "some.png";

		 //Server Time : DL/MB +5.30
        //$created = '2017-10-06 16:28:30';
        $created = date('Y-m-d H:i:s', time());
        $last_edited = $created;

		 mysqli_query($db,'INSERT INTO `products`(`name`, `product_image`, `created`, `cat_key`, `partner_key`) VALUES ("'.$name.'","'.$product_image.'","'.$created.'", "'.$category.'", "'.$partner.'")');
     header("location: ../pages/add_product.php?success=1");
  }
?>
