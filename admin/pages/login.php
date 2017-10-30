<!DOCTYPE html>
<html lang="en">
<?php 
	include_once 'bridge.php';
	
	
	if(isset($_POST['username']) && !empty($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(login($username, $password) == false){
			$error = 'Please check the username and password.';
		}
	}
	
	if(is_logged_in()){
		
		if(get_user_type($_SESSION['username']) == 'admin'){
			header('location: index.php');
		}else{
			$error = 'Hi '.$_SESSION['username'].'! You are not authorized to access.';
		}
	}

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="root" >

    <title>FourSpace | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div style="border:15px solid red; padding:2em 2em 0 0; float: left; margin:2em;">
                        <h3 style="font-weight: bolder;">Four<br>Space</h3>
                    </div>
                    <div style="float: right; padding:2em 2em 0 0;">
                        <h4>Admin | Login</h4>

                    </div>
                    <div class="clearfix"></div>
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In<?php echo $_SEESION['username']; ?></h3>
                    </div>
                    <div class="panel-body">
                    		<?php
								if(isset($error) && !empty($error)){ ?>                    		
                    		<div class="alert alert-danger">
                                <?php echo $error; ?>
                        </div>
                        <?php } ?>
                        <form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        <p style="font-family: Calibri; text-align: center; margin: 1em;">via TechPenguine Lab</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
