<?php $recent_page = "login";?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Fav Icon  -->
		<link rel="shortcut icon" href="./frontend/favicon.png">
		<!-- Vendor Bundle CSS -->
		<link rel="stylesheet" href="./frontend/vendor.bundle.css">
		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="./frontend/style5152-ver=1.0.css">
		<link rel="stylesheet" id="layoutstyle" href="./frontend/theme5152-ver=1.0.css">

		<link href="https://fonts.googleapis.com/css2?family=Kurale&amp;display=swap" rel="stylesheet">
		<link type="text/css" rel="stylesheet" charset="UTF-8" href="./frontend/translateelement.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="./assets/js/jquery.bundle.js"></script>
		<script src="./assets/js/script.js"></script>
		<script type="text/javascript" charset="UTF-8" src="./frontend/main.js.download"></script>
		<script type="text/javascript" charset="UTF-8" src="./frontend/element_main.js.download"></script>
	</head>
	<body>
		<?php include_once(dirname(__FILE__).'/includes/contents/header.php');?>
		<div class="section section-pad">
		    <div class="container">
		        <div class="tab-custom">
		            <div class="row">
		                <div class="col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">
		                    <ul class="nav nav-tabs ucap" id="loginreg-form">
		                        <li class="active"><a href="./login.php">Log In</a></li>
		                        <li><a href="./register.php">Register</a></li>
		                    </ul>
		                </div>
		            </div>
		            <div class="gaps size-2x"></div>
		            <!-- Tab panes -->
		            <div class="tab-content no-pd">
		                <div class="tab-pane fade in active" id="tab1">
		                    <div class="row">
		                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		                            <h3 class="heading-lead center">Login Your Account</h3>
		                            <form method="POST" action="./login.php">
		                                <input type="hidden" name="_token" value="s5bMRTfZ5BnRW12b1m27Pe4n7y9maFHO4EhCtcHs">                                                                                                                                                                                         <div class="form-results"></div>
		                                <div class="form-group">
		                                    <div class="form-field form-m-bttm">
		                                        <input name="email" type="email" id="email" placeholder="EMAIL *" value="" class="form-control required email" aria-required="true" required="">
		                                       
		                                    </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field">
		                                        <input name="password" type="password" id="password" placeholder="PASSWORD *" class="form-control required" aria-required="true" required="">
											</div>
		                                </div>
		                                <button type="submit" name="btn-login" class="btn btn-alt">Log In</button>
		                                <span class="gaps"></span>
		                                <p class="small">Forget Password? <a class="switch-tab" data-tabnav="loginreg-form" href="https://cointradeinvest.com/password/reset">Forget Password</a></p>
		                                <p class="small">Not registered? <a class="switch-tab" data-tabnav="loginreg-form" href="./register.php">Register here</a></p>
									</form>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>


		<?php include_once(dirname(__FILE__).'/includes/contents/footer.php');?>
	</body>
</html>