<?php $recent_page = "register";?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
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
		                        <li><a href="./login.php">Log In</a></li>
		                        <li class="active"><a href="./register.php">Register</a></li>
		                    </ul>
		                </div>
		            </div>
		            <div class="gaps size-2x"></div>
		            <!-- Tab panes -->
		            <div class="tab-content no-pd">
		 
		                <div class="tab-pane fade in active" id="tab2">
		                    <div class="row">
		                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		                            <h3 class="heading-lead center">Register An Account</h3>
		                            <form method="POST" action="https://cointradeinvest.com/register">
		                                <input type="hidden" name="_token" value="s5bMRTfZ5BnRW12b1m27Pe4n7y9maFHO4EhCtcHs">                                <div class="form-results"></div>

		                                <div class="form-group">
		                                    <div class="form-field form-m-bttm">
		                                        <input name="name" type="text" value="" placeholder="Name *" class="form-control required" aria-required="true">
		                                                                            </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field form-m-bttm">
		                                        <input name="username" type="text" value="" placeholder="Username *" class="form-control required" aria-required="true">
		                                                                            </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field form-m-bttm">
		                                        <input name="email" type="email" value="" placeholder="Email *" class="form-control required email" aria-required="true">
		                                                                            </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field">
		                                        <input name="password" type="password" placeholder="Password *" class="form-control required" aria-required="true">
		                                                                            </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field">
		                                        <input name="password_confirmation" type="password" placeholder="Confirm Password *" class="form-control required" aria-required="true">
		                                    </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field form-m-bttm">
		                                        <input name="referrer" type="text" value="" placeholder="Referrer Username" class="form-control required" aria-required="true">
		                                                                            </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field form-m-bttm">
		                                        <input name="country" type="text" value="" placeholder="Country" class="form-control required" aria-required="true">
		                                                                            </div>
		                                </div>

		                                <div class="form-group">
		                                    <div class="form-field">
		                                        <input type="checkbox" name="signup-term"> <span> I accept and agree with the terms of the <a href="#">User Agreement</a>.</span>
		                                    </div>
		                                </div>

		                                <button type="submit" class="btn btn-alt">Signup</button>
		                                
		                                <span class="gaps"></span>

		                                <p class="small">Already registered? <a class="switch-tab" data-tabnav="loginreg-form" href="./login.php" data-toggle="tab">Login here</a></p>
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