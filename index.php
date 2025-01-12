<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Fire Seal</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/fontawesome-all.min.css" rel="stylesheet">
    <link href="./css/aos.min.css" rel="stylesheet">
    <link href="./css/swiper.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.png">
	<style>
	.carousel-item {
		width: 100%;
		height: 80vh;
		object-fit: cover;
		overflow: hidden;
	}
	.carousel-item img {
		object-fit: fill;
		height: 100%;
		width:100%;
	}
	iframe {
		width: 100%;
		height: 60vh;
	}
    video {
        width: 100%;
        height: 60vh;
    }
    
	@media only screen and (max-width: 768px) {
		.carousel-item {
			height: 30vh;
		}
		iframe {
			height: 40vh;
		}
        video {
            height: 40vh;
        }
	}
    .w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
    .w3-display-container{position:relative}.w3-tooltip .w3-text{display:none}.w3-tooltip:hover .w3-text{display:inline-block}
    .w3-content,.w3-auto{margin-left:auto;margin-right:auto}.w3-content{max-width:980px}.w3-auto{max-width:1140px}
    .w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}
    .w3-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
    .w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}

	</style>
</head>
<body>
    <?php $output="" ?>
<iframe name="iframecontent" style="display:none;">
</iframe>
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.php">Sisaro</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <h1 class="headline">Wellcome to <span class="home_text">Sisaro</span><br>team fire</h1>
            <p class="para para-light py-3">Promoting fire safety awareness within the local community in order to increase their level of
                fire safety awareness. Fires can strike anyone, anytime, anywhere. The best way is to prepare
                to respond to an emergency before it happens. Keep your fire safety equipment in good
                working order. Practice fire training &amp; carryout fire drill by maintaining your personal distance.
                Refresh your staff knowledge by instructing ONLINE Fire Safety training during this Covid
                pandemic situation. We, SISARO TEAM can Help you!</p>
            <!-- <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-chalkboard-teacher fa-2x"></i></p>
                <p>Consultation.</p>  
            </div>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-fire-extinguisher fa-2x"></i></p>
                <p>Taining & Fire Fighting.</p>  
            </div>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-shield-alt fa-2x"></i></p>
                <p>Security.</p>  
            </div> -->
        </div> <!-- end of container -->
    </section> <!-- end of home --> 
	
	<section class="testimonial d-flex align-items-center text-light py-5">
        <div class="container" >
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="./assets/images/received_234115025403685.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="./assets/images/received_606532947213348.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="./assets/images/received_233710912113677.jpeg" alt="Third slide">
    </div>
  </div>
</div>
		</div>
	</section>

    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <p>ABOUT US</p>
                    <h1>We are top <br> service company</h1>
                    <p class="py-2 para-light">Leaders in fire &amp; security -training, consultation &amp; investigation and fire protection
                        services providers 38 years of active service fire training officer fire service
                        department Colombo, fire &amp; disaster recovery officer, Peoples bank and fire safety
                        officer, Royal hospital sultanate of oman.</p>
                    <p class="py-2 para-light">Established in 1999 (WF 2096) we are today the country’s biggest &amp; most sort after fire &amp;
                        security institute specialized in fire training on site &amp; online programs, fire detection &amp;
                        alarm system, gases flodding systems, fire hydrant/wet riser/hose
                        reel/sprinkler/systems. assuring &amp; guaranteing their continuous function and usage
                        through our execellent after sales services thereby offering all our valued clients
                        quality, reliable &amp; long term products and solutions..</p>

                    <!-- <div class="my-3">
                        <a class="btn" href="#your-link">Learn More</a>
                    </div> -->
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/DSC_0188.JPG" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4" >
                <p>OUR SERVICES</p> 
                <h2 class="py-2">Fire Protection</h2>
                <!-- <p class="para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores, quia accusantium sunt corporis optio recusandae? Nostrum libero pariatur cumque, ipsa dolores voluptatibus voluptate alias sit fuga. Itaque, ea quo.</p> -->
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <a class="card bg-transparent" href="consultation.html">
                        <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        <h4 class="py-2">Consultation</h4>
                        <p class="para-light">Carrying out Fire Inspections in buildings and Identification of risks related to Fire
                            hazards, Means of Escape, Fire Installations and the other relevant operations. Review of fire safety management system and emergency preparedness.</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="card bg-transparent" href="training.html">
                        <i class="fas fa-fire-extinguisher fa-2x"></i>
                        <h4 class="py-2">Training & Fire Fighting</h4>
                        <p class="para-light">Conducting In House &amp; Online Fire Safety Awareness Training. Service of a Fire
                            fighting &amp; having 1000 liters of water capacity of fire Vehicle</p>
                    </a>                    
                </div>
                
                <div class="col-lg-4">
                    <a class="card bg-transparent" href="security.html">
                        <i class="fas fa-shield-alt fa-2x"></i>
                        <h4 class="py-2">SECURITY</h4>
                        <p class="para-light">Providing security services &amp; Carrying out Investigations.</p>
                    </a>                    
                </div>
                
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of services -->


    <!-- Work -->
    <section class="work d-flex align-items-center py-5" >
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    
                    <!-- <img class="img-fluid" src="./assets/images/DSC_0186.JPG" alt="work"> -->
                    <div class="w3-content w3-display-container" style="width: 100%;overflow:hidden">
                        <iframe class="mySlides" src="https://www.youtube.com/embed/dttn6wqjLlo?showinfo=0&autoplay=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <video class="mySlides" controls>
                            <source src="./assets/videos/Sprinkler Fire ball.mp4" type="video/mp4" autostart="false">
                            Your browser does not support HTML video.
                        </video>
                        <video class="mySlides" controls>
                            <source src="./assets/videos/fire-seal-30-sec-final-1_a5fLEWfp.mp4" type="video/mp4" autostart="false">
                            Your browser does not support HTML video.
                        </video>
                        <video class="mySlides" controls>
                            <source src="./assets/videos/sisaro-team-30-sec-final-2_Qs3wVX3N.mp4" type="video/mp4" autostart="false">
                            Your browser does not support HTML video.
                        </video>
                        
                    
                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" style="margin-top: auto; margin-bottom: auto;">
                    <!-- <div class="row">
                        <div class="col-lg-12 align-items-center" data-aos="fade-right">
                            <video width="320" height="240" controls>
                                <source src="./assets/videos/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                        </div>
                        <div class="col-lg-12 align-items-center" data-aos="fade-right">
                            <video width="320" height="240" controls>
                                <source src="./assets/videos/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div> -->
                    
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>OUR WORK</p>
                            <h2 class="py-2">Explore unlimited possibilities</h2>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row g-5">
                                <div class="col-6 text-start" >
                                    <i class="fas fa-briefcase fa-2x text-start"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="3">1</h2>
                                    <p>PROJECTS COMPLETED</p>
                                </div>
                                <!-- <div class="col-6" >
                                    <i class="fas fa-award fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="3">1</h2>
                                    <p>AWARDS</p>
                                </div> -->
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="3">1</h2>
                                    <p>CUSTOMER ACTIVE</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157" data-purecounter-duration="3">1</h2>
                                    <p>GOOD REVIEWS</p>
                                </div>
                            </div>
                        </div> 
                    </div> <!-- end of row -->
                </div> <!-- end of col-lg-5 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of work -->


    <!-- Testimonials -->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <!-- <p>TESTIMONIALS</p> -->
                    <h2 class="py-2">Our Training Process</h2>
                    <p class="para-light">FG Stores Fire Training Events</p>
                </div>
            </div> <!-- end of row -->
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image003.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image004.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image005.png" alt="testimonial">
                                    </div>      
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image007.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image011.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image012.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image001.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image014.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image013.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image015.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image016.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image017.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image018.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image019.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image021.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image022.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/image023.png" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <hr />
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <!-- <p>TESTIMONIALS</p> -->
                    <p class="para-light">PECL firefighter training</p>
                </div>
            </div> <!-- end of row -->

            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1371.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1378.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1380.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1382.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1394.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1397.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1398.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1405.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1422.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1426.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1432.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1441.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1457.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1461.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1464.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1473.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1482.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img class="training-image" src="./assets/images/PECL/IMG_1486.jpg" alt="testimonial">
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of container -->
    </div> <!-- end of testimonials -->
    
    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>ADDRESS</h6>
                        <p>Winifred Estate, Marandagahamula</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p>070-3070502 / 0773070502</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p>mnphst@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p>09:00 AM - 18:00 PM</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of location -->


    


    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>CONTACT</p>
                            <h2 class="py-2">Send your query</h2>
                        </div>
                        <div>
                            <form action="email.php" method="post" target="iframecontent">
                            <div class="form-group py-1">
                                <input type="text" class="form-control form-control-input" id="exampleFormControlInput3" name="subject" placeholder="Enter subject" required>
                            </div>
                            <div class="form-group py-1">
                                <input type="email" class="form-control form-control-input" id="exampleFormControlInput3" name="email" placeholder="Enter email" required>
                            </div>  
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6" name="message" placeholder="Message" required></textarea>
                            </div>                            
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn form-control-submit-button">Submit</a>
                        </div>
                        <p class="para-light"><?php echo $output; ?></p>
                        <form>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-down">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>Find us</p>
                        </div>
                        <div>
                            <div class="mapouter"><div class="gmap_canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1080594350074!2d79.99485351477469!3d7.22851419478176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMTMnNDIuNyJOIDc5wrA1OSc0OS40IkU!5e0!3m2!1sen!2slk!4v1634577641277!5m2!1sen!2slk" width="600" height="1000" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                
                            </div><style>.mapouter{text-align:left;height:400px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:100%;}</style></div>                
                        </div>
                    </div>
                    
                    
                </div>       
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->


    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="slider-1" style="padding: 10px;">
                <h4>Trusted by over <span class="blue">50+</span> clients</h4>
                <hr class="section-divider">

                <!-- Image Slider -->
                
                <div class="slider-container" >
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/lanka-hospital.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/bffce9c0f71d406cfc3324ec4df287f2_XL.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/hemas.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/munchee.png" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/MAS-Holdings.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/Unilever-logo.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/16.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/Piramal-Glass-logo.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/logo-da-coca-cola-png-3.png" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/Dialog.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/wijey_1b.jpg" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 80px; width: 140px;" src="./assets/images/PEOPLES-LEASING-FINANCE.jpg" alt="alternative">
                            </div>
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of swiper container -->
                </div> <!-- end of slider-container -->
                <!-- end of image slider -->
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of location -->


    <!-- Footer -->
    <section class="footer text-light">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4 class="">FireSeal</h4>
                    </div>
                    <p class="py-3 para-light">Leaders in fire & security -training, consultation & investigation and fire protection services.</p>
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-facebook-f fa-2x py-2"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Quick Links</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#about"><p class="ms-3">About</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#services"><p class="ms-3">Services</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#contact"><p class="ms-3">Contact</p></a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Our Services</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#services"><p class="ms-3">Consultation</p></a>
                            
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#services"><p class="ms-3">Training & Fire Fighting</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#services"><p class="ms-3">Security</p></a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Contact</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <p class="ms-3">Address: Winifred Estate, Marandagahamula</p>
                            
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <p class="ms-3">Mobile No: 070-3070502 / 0773070502</p>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <p class="ms-3">Email: mnphst@gmail.com</p>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center">
                        <h4>Newsletter</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, ab.</p>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control p-2" placeholder="Enter Email" aria-label="Recipient's email">
                            <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>       
                        </div>
                    </div> -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of footer -->


    <!-- Bottom -->
    <div class="bottom py-2 text-light" >
        <div class="container d-flex justify-content-between">
            <div>
                <p>Copyright © Sisaro</p><br>
                <p>Distributed by: <a href="https://www.facebook.com/DC-Software-House-103664308741047">DC Software House</a></p>
            </div>
            
        </div> <!-- end of container -->
    </div> <!-- end of bottom -->
 
    
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="assets/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    
    <!-- Scripts -->
    <script src="./js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="./js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="./js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="./js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="./js/script.js"></script>  <!-- Custom scripts -->
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
        showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>

</body>
</html>