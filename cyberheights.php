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
    <script src="js/theme-script.js"> </script>
</head>

<body>
<!-- Start Modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<form id="mc-form" 
                          action="site_visit_mail.php" 
                          method="POST"
                          class="php-email-form">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Registation </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      

                    <div   class="group row align-items-center g-0 ">
                        <div class="col-sm-12 py-2">
                            <input type="text"
                                   value="" 
                                   name="name" 
                                   class="name box-shadow" 
                                   id="mc-name  name" 
                                   placeholder="Enter Full Name" 
                                   required="">
                        </div>
                        <div class="col-sm-12 py-2">
                        <input type="email"
                               value="" 
                               name="email"
                               class="email box-shadow" 
                               id="mc-email email" 
                               placeholder="Email Address" 
                               required="">
                        </div>
                    </div>
                    <!-- <div class="group row align-items-center g-0 "> -->
                        <div class="col-sm-12 py-2">
                            <input type="tel" 
                                   value="" 
                                   name="tel" 
                                   class="number box-shadow" 
                                   id="mc-tel tel" 
                                   placeholder="Enter Phone Number" 
                                   required="">
                        </div>
                        <!-- <div class="col-sm-12 py-4">
                            <input class="btn sub-btn btn-circle"
                                   type="submit"
                                   name="subscribe" 
                                   value="Submit"> 
                        </div>
                        <label for="mc-email" class="subscribe-message"></label> -->
                       
                    <!-- </div> -->             
                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
   </div>
  </div>
</form>
<!-- End Modal -->
    <!--header Start-->
    <section class="p-0">
        <?php $page = 'cyberheights'; include('components/header-navigation.php') ?>
    </section>
    <!--header End-->

    <!-- banner start -->
    <!-- <section class="p-0">
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <img src="images/projects/image.jpg" alt="" class="w-100 ">
            </div>
        </div>
       </div>
    </section> -->
    <!-- banner end -->
    <!--page title start-->
		<section class="page-title overflow-hidden grey-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<h1 class="title mb-0">Cyber<span>Heights</span></h1>
					</div>
					<div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a>
								</li>
								<li class="breadcrumb-item"><a href="ongoing-projects.php">ongoing projetcs</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Cyber Height</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

	<!--page title end-->

    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">                
                <div class="row py-5 my-5">
                    <div class="col-lg-6">
                        <img src="images/projects/cyber-heights-logo.png" alt="" class="w-100">
                    </div>
                    <div class="col-lg-6 m-auto">
                    <h2 class="title">Experience Urban <span>life Unbounded</span></h2>
                        <h2> </h2>
                        <p>Presenting Cyber Heights, with all approvals, permissions and premium grade features. Welcome to the suave neighbourhood, your sculpting skyline of tomorrow. Providing grand roads, rainwater harvesting, children's park and wonderful landscape parks here in your elegant neighbourhood. Get in the tune of our metropolitan symphony by being part of Cyber Heights.</p>
                        <div>
                        <button type="button" class="btn btn-primary bg-black text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           Launch static backdrop modal
                        </button>

                       </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- Start Project Heights -->
   <section class="bg-black">
     <div class="container">
        <div class="row mb-5 ">
            <div class="col-lg-12">
                <h2 class="text-center mb-5"><span style="color:#B0CF36">Project</span> <span style="color:#00A5DD">Highlights</span></h2>
                <div class="row text-center py-4">
                    <div class="col-lg-4 text-white">
                        <ul style="list-style: none;">
                            <li>HMDA & TS RERA APPROVED</li>
                            <li>100% VAASTU</li>
                            <li>OVERHEAD WATER TANK</li>
                            <li>RAINWATER HARVESTING</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-white">
                        <ul style="list-style: none;">
                            <li>PARKS WITH LANDSCAPING</li>
                            <li>CYCLE TRACK</li>
                            <li>40&30 FT CC ROADS</li>
                            <li>CHILDREN PLAY AREA</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-white">
                        <ul style="list-style: none;">
                            <li>UNDERGROUND ELECTRICITY</li>
                            <li>UNDERGROUND DRAINAGE</li>
                            <li>MODERN MODULAR STREET LIGHTS</li>
                            <li>24/7 SECURITY</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
   </section>

    <!-- End Project Heights -->

    <!-- Start Layout Plan -->

       <section class="">
         <div class="container">
            <div class="row mb-3">
            <div class="col-lg-12">
                <h2 class="text-center mb-5"><span style="color:#B0CF36">Layout</span> <span style="color:#00A5DD">Plan</span></h2>
                <img src="images/projects/layout.png" alt="" class="w-100">
            </div>
            </div>
         </div>
       </section>

      <!-- End Layout Plan -->

      <!-- Start Project Location -->

      <section class=" bg-light">
         <div class="container">
           <div class="row">
            <h2 class="text-center my-5"><span style="color:#B0CF36">Project</span> <span style="color:#00A5DD">Location</span></h2>
            <div class="col-lg-6 m-auto">
                <h2>Approachable and near at hand</h2>
                <p>Established beside the prestigious Electronics Hardware Technology Park in Maheswaram, Cyber Heights invites you with its natural embrace. Minutes away from Hyderabad and Srisailam highway makes this project most anticipated. Living in an area filled with techno giants such as Samsung, Wipro and many more makes this a realm of innovation. Join the league of innovation in a neighbourhood where technology and progress blend seamlessly.</p>
                <h2>Location Highlights</h2>
                <ul>
                    <li>Beside Electronics Hardware Technology Park</li>
                    <li>ESEZ Maheswaram - Home to companies manufacturing </li>
                    <li>Electronic goods like SAMSUNG Electronics, WIPRO, PRO, </li>
                    <li>PR Defence Equipments & Astra Rafael Communication Systems</li>
                    <li>15 min Thukkuguda Exit No.14</li>
                    <li>10 min HYD & Bangalore Highway at Timmapur</li>
                    <li>11 min HCL & Videocon</li>
                    <li>12 min JIMS & Ramanuja Statue of Equality</li>
                    <li>18 min TATA Aerospace Hub, TCS & Wonderla</li>
                    <li>20 min Shamshabad RGIA Airport</li>
                    <li>20 min Pharma City</li>
                    <li>22 min IMARAT (RCI), DRDO, Agakhan Academy</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="images/projects/location-map.png" alt="" class="w-100">
            </div>
            </div>
          </div>
      </section>

        <!-- Start Project Location -->
        <!-- Start Visit site-->
        <?php include('components/site_visit.php') ?>
        <!-- End Visit Site -->

    <!--footer Start-->

        <?php include('components/footer-navigation.php') ?>
   
    <!--footer End-->

   
    <div class="callme_button">
       <a class="btn btn-theme btn-circle animated6 " href="tel:++91-9395595555">CALL US</a>
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

<script src="js/jquery-3.7.0.min (1).js"></script>
    <script src="js/bootstrap.min.css"></script>  

</body>

</html>