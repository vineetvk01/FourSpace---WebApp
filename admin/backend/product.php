<?php
require '../pages/bridge.php';


if(isset($_POST['product_name']) && !empty($_POST['product_name'])){

  $product=test_input($_POST['product_name']);
  $cat=test_input($_POST['categories']);
  
  $id=5;
  $product_image="image1.png";
  $created = '2017-10-06 16:28:30';
  $last_edited = '2017-10-06 16:28:30';
  $cat_key=74;
  //inserting to product table
  mysqli_query($conn,'INSERT INTO `products`(`id`, `name`, `product_image`, `created`, `last_edited`, `cat_key`) VALUES ("'.$id.'", "'.$product_name.'", 
  	"'.$product_image.'", "'.$created.'", "'.$last_edited.'", "'.$cat_key.'")');
 }
?>