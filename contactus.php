<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="Bootstrap 5, Hospital, Doctor, Medical, Multipurpose, Health, RTL" />
<meta name="description" content="Bootstrap 5 HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bathalagroup: Home</title>
<link rel="shortcut icon" href="images/bathala-logo.jpg" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />
<link href="css/themify-icons.css" rel="stylesheet" type="text/css" />
<link href="css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="css/date-picker/date-picker.css" rel="stylesheet" type="text/css" />
<link href="css/spacing.css" rel="stylesheet" type="text/css" />
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--header Start-->
<?php $page = 'contactus'; include('components/header-navigation.php') ?>
<!--header End-->
<!--page title start-->
<section class="page-title overflow-hidden grey-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<h1 class="title mb-0">Contact<span>Us</span></h1>
					</div>
					<div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a>
								</li>
								<li class="breadcrumb-item"><a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Contact Us </li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

	<!--page title end-->

<!--contact start-->
<section>
  <div class="container">
    <div class="row g-0 box-shadow">
      <div class="col-lg-5 col-md-12  image-column-h" data-bg-img="">
        <img src="images/gallery/large/contact us.jpg" class="w-100 pt-4 px-4" height="500px" alt="">
      </div>
      <div class="col-lg-7">
					<div class="card border-0">
						<div class="card-body ">
							<div class="card-title p-3  text-white" style="background-color: #b0cf36"> <strong> Contact Us For Help</strong>
							</div>
							<form
								action="mail.php"
								method="post"
								role="form"
								class="php-email-form"							
							>
								<div class="form-group mt-3">
									<input
										type="text"
										name="name"
										class="form-control"
										id="name"
										placeholder="Your Name"
										required
									/>
								</div>
								<div class="form-group mt-3">
									<input
										type="text"
										class="form-control"
										name="mobileno"
										id="mobileno"
										placeholder="Mobile Number"
										required
									/>
								</div>
								<div class="form-group mt-3">
									<input
										type="email"
										class="form-control"
										name="email"
										id="email"
										placeholder="Your Email"
										required
									/>
								</div>
								<div class="form-group mt-3">
									<select name="property" id="property" class="form-control" required >
										<option value="">--Select Property--</option>
										<option value="East Facing">East Facing</option> 
										<option value="North Facing">North Facing</option>           
										<option value="West Fasing">West Facing</option>
										<option value="South Facing">South Facing</option>
										<option value="North East Corner">North East Corner</option>
										<option value="South East Corner">South East Corner</option>
									</select>
								</div>
								<div class="form-group mt-3">
									<textarea
										class="form-control"
										name="message"
										rows="5"
										id="message"
										placeholder="Message"
									></textarea>
								</div>
								<div class="text-center py-2">
									<input type="submit" class="btn btn-warning" value="Send Message">
								</div>
							</form>
						</div>
					</div>
				</div>
    </div>
  </div>
</section>

<!--contact end-->
<!-- <section> -->
<div class="container-fluid p-0 mt-5 mt-lg-0">
    <div class="row">
      <div class="col-12">
        <div class="map iframe-h-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1902.654560437495!2d78.40304610060393!3d17.492751177448763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91fce669cf45%3A0x32288a3643a63078!2sCherla%20Health%20Clinic%20Kphb!5e0!3m2!1sen!2sin!4v1700643848271!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
<!-- </section> -->

<!-- Start footer -->
<?php include('components/footer-navigation.php') ?>
<!-- End footer -->

<div class="callme_button">
    <a class="btn btn-theme btn-circle animated6 " href="tel:++91-8977943778">CALL US</a>
</div>
<div class="scroll-top"><a class="smoothscroll" style="background-color:#B0CF36" href="#top"><i class="fa-solid fa-arrow-up-from-bracket"></i></a></div>
<script src="js/theme.js"></script>
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script src="js/owl-carousel/owl.carousel.min.js"></script> 
<script src="js/jarallax/jarallax.min.js"></script> 
<script src="js/counter/counter.js"></script> 
<script src="js/skill/circle-progressbar.js"></script> 
<script src="js/countdown/jquery.countdown.min.js"></script> 
<script src="js/isotope/isotope.pkgd.min.js"></script> 
<script src="js/contact-form/contact-form.js"></script>
<script src="js/date-picker/date-picker.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/theme-script.js"></script>
</body>
</html>