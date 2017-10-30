<?php
session_start();
include_once '../../connection/dbconfig.php';
include_once '../../connection/secure.php';

error_reporting(1);

//SET TIMEZONE
date_default_timezone_set('Asia/Calcutta');

//Application address
// define('DIR','');
// define('SITEMAIL','noreply@fourspace.com');


function login($username, $password){
    global $db;

    $query = 'SELECT `id`,`password` from users_tb where username="'.$username.'"';
    $result = mysqli_query($db, $query) or die("ERROR: Admin Login");
        if(mysqli_num_rows($result) == 1){
            $row = $result->fetch_object();
            if($password == $row->password){
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["id"] = $row->id;
            }else {return false;}
            return true;
        }else{
            return false;
        }
        $result->free();
    }

function get_user_type($username){
		global $db;
		$result = mysqli_query($db,'select `type` from users_tb where username ="'.$username.'" ');
		if(mysqli_num_rows($result) > 0){
			return $type = $result->fetch_object()->type;
		}else{
			return 0;
		}
	}

function logout(){
    session_destroy();
}

function is_logged_in(){
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
        return true;
    }
}

//Functions of location

	//Get cities in options
	function get_cities(){
		global $db;
		$result = mysqli_query($db,'SELECT `id`, `name`, `state` FROM `cities`');
      if(mysqli_num_rows($result)>0){
			while($city = $result->fetch_object()){
			?>
			<option value="<?php echo $city->id ?>"><?php echo $city->name.', '.$city->state; ?></option>
			<?php
			}
      }
	}

	//Get cities in options
	function get_areas(){
		global $db;
		echo $query = 'SELECT `id`, `name` FROM `areas`';
		$result = mysqli_query($db,$query);
      if(mysqli_num_rows($result)>0){
			while($area = $result->fetch_object()){
			?>
			<option value="<?php echo $area->id ?>"><?php echo $area->name; ?></option>
			<?php
			}
      }
	}
function get_data($data_name, $id){
  global $db;
  $sql = 'SELECT `'.$data_name.'` FROM `partner_details` WHERE id = "'.$id.'"';
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result)>0){
    return $result->fetch_object()->$data_name;
  }
}

//Admin Check

if(is_logged_in()){
			if(get_user_type($_SESSION['username']) != 'admin'){
			header('location: ../../');
		}
	}
?>
