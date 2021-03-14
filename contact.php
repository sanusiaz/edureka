<?php $recent_page = "contact";?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact-Us</title>
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

		<!-- banner start -->
		<div class="page-head section row-vm light has-bg-image">
	        <div class="imagebg bg-image-loaded" style="background-image: url(&quot;./assets/images/page-inside-bg.jpg&quot;);">
	            <img src="./assets/images/page-inside-bg.jpg" alt="page-head">
	        </div>
	        <div class="container">
	            <div class="row text-center">
	                <div class="col-md-12">
	                    <h2>Contact Us</h2>
	                    <div class="page-breadcrumb">
	                        <ul class="breadcrumb">
	                            <li><a href="/">Home</a></li>
	                            <li class="active"><span>Contact Us</span></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!-- banner end -->

		<div class="section section-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-8 res-m-bttm">
						<div class="contact-information">
							<h4>Contact Information</h4>
							<div class="row">
								<div class="col-sm-4 res-m-bttm">
									<div class="contact-entry">
										<h6>CoinTradeInvest</h6>
										<p>16a invercauld ballater <br>Scotland, AL 34246</p>
									</div>
								</div>
								<div class="col-sm-4 res-m-bttm">
									<div class="contact-entry">
										<h6>contact number</h6>
										<p>phone:  (+44) 7568 669235</p>
									</div>
								</div>
								<div class="col-sm-4 res-m-bttm">
									<div class="contact-entry">
										<h6>office hours</h6>
										<p>monday - friday<br>8:30am - 5:00pm</p>
									</div>
								</div>
							</div>
						</div>
						<div class="contact-form">
							<p>Complete and submit the form below</p>
							<form id="contact-form" class="form-message" action="form/contact.php.html" method="post" novalidate="novalidate">
								<div class="form-results"></div>
								<div class="form-group row">
									<div class="form-field col-sm-6 form-m-bttm">
										<input name="contact-name" type="text" placeholder="Full Name *" class="form-control required" aria-required="true">
									</div>
									<div class="form-field col-sm-6">
										<input name="contact-email" type="email" placeholder="Email *" class="form-control required email" aria-required="true">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-sm-6 form-m-bttm">
										<input name="contact-phone" type="text" placeholder="Phone Number *" class="form-control required" aria-required="true">
									</div>
									<div class="form-field col-sm-6">
										<input name="contact-subject" type="text" placeholder="Subject *" class="form-control required" aria-required="true">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="contact-message" placeholder="Messages *" class="txtarea form-control required" aria-required="true"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="btn btn-alt">Submit</button>
							</form>
						</div>
					</div><!-- .col  -->
				</div>
			</div>	
		</div>
		
		<?php include_once(dirname(__FILE__).'/includes/contents/footer.php');?>
	</body>
</html>