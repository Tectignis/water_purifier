<?php

if(isset($_POST['submit'])){
    $status=1;
    $name=$_POST['name'];  
    $email=$_POST['email'];  
    $mobile=$_POST['mobile'];  
    $message=$_POST['message'];  
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = "Enquiry <dkeshari094@gmail.com>";
  $subject = 'Contact Form';
  // $fields = array( 'name' => 'name' );
  $from = 'Aayushi water purifier';
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  
  $emailText = '
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="x-apple-disable-message-reformatting"> 
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
      <style>
        
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
     <h1>'.$email.'</h1>
     </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
  echo"message send sucessfully!";
   
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
  }
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
  }
  else{
    echo $responseArray['message'];
  }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aayushi Water Purifier Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">aayushiwps@yahoo.com</a>
        <i class="bi bi-phone"></i> <a href="https://wa.me/919321116602">91 9321116602</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
       
        <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
        
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index"><img src="assets/img/logo.png" alt="logo" height="250%" width="154%"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
        
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" >
      <h2 style=" font-weight:490px;"><b>Welcome to Aayushi Water Purifier Services</b></h2>
      <h5 style=" color: #2c4964; ;" >&nbsp;&nbsp;&nbsp; The Double Goodness of Copper And Zinc Now In Your Aquaguard.</h5>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 d-flex align-items-stretch">
            <div class="content">
           
              <h4>Makes Water 100% Pure.</h4>
              <p>
              Aayushi RO Water Purifiers remove bacteria, viruses, chemicals, and even dissolved impurities such as arsenic, rust, pesticides, and fluorides to make water 100% pure.
              </p>
             
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-stretch">
            <div class="content">
           
              <h4>CMultiple Purification </h4>
              <p>
              RO purification followed by UV and UF purification removes chemicals, pesticides, fluorides, dissolved impurities, kills bacteria & viruses to make water 100% pure.
              </p>
             
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-stretch">
                <div class="content">
              
                  <h4>Removes even Dissolved Impurities</h4>
                  <p>
                  Boiling the water or using conventional purifiers (UV) only kill bacteria and viruses but does not remove dissolved impurities.
                  </p>
                 
                </div>
            </div>
          <div class="col-lg-3 d-flex align-items-stretch">
            <div class="content">
           
              <h4>Double Purification </h4>
              <p>
              Double purification process by UF removes dead bacteria, viruses and cysts by the fine pores of hollow fibre UF , thereby providing pure & tasty drinking water.
              </p>
             
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <div class="" style="position:fixed;
	width:160px;
	height:60px;
	top:250px;
	right:  -50px;
	color:#FFF;
	border-radius:50px;
	text-align:center;

  transform: rotate(90deg);"><a href="#appointment"><button type="text" style="background:#1977cc; color:white; border:#1977cc; border-radius:0px 0px 7px 7px; ">Book A Free Demo</button></a></div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          <img src="assets/img/img.webp" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Importance of Zinc In New Normal+-</h3><br>
            <p>The world today has become more cautious about health. People are now inclined towards consuming micro-nutrients to stay healthy.
Zinc is one such micro-nutrient and with the dedicated efforts of Our Experienced Scientists, you can now get the goodness of Zinc in your water.</p>

            <div class="icon-box">
              
              <p class="description">Aquaguard, the world leader in water purification has once again showcased its superiority by giving you a upgrade with an advanced Zinc Booster. So enjoy pure, healthy drinking water that has the Double Goodness of Copper and Zinc.</p>
            </div>

            <div class="icon-box">
              
              <p class="description">COMPLETE SAFETY WITH BIS APPROVED LEVELS
                                    OF COPPER AND ZINC.
                                    With the help of science, technology, and innovation, it is possible to remove all kind of impurities including pathogens, suspended particles, dissolved impurities from water and make it fit for drinking.</p>
            </div>

           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Service is an essential part of a Water Purifier as you may require to change the filters.
              Getting Genuine Service from Aayushi Water Purifier is important as only from Aayushi Water Purifier you can get Genuine Spares which will continue to ensure that you get 100% Pure Water.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gear"></i></div>
              <h4><a href="">Maintenance</a></h4>
              <p>Annual Maintenance Contract online to ensure that your product is working efficiently and you have the much needed peace of mind. No lengthy procedures, no signing up forms.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-user"></i></div>
              <h4><a href="">24*7/365 Days Support </a></h4>
              <p>Aayushi water Purifiers are  offer 1 Year Warranty to bring peace of mind as well as ensuring to give you 100% pure water during this period.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-arrow-repeat"></i></div>
              <h4><a href=""> Parts Replacement</a></h4>
              <p>*Free replacement of consumables such as filters and activated carbon</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Boost Your Health in the New Normal
              With Aquaguard Copper and Zinc Booster
              So, enjoy pure, healthy drinking water that has the Double Goodness of Copper and Zinc.#</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/13.webp" class="galelry-lightbox">
                <img src="assets/img/13.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/c3.webp" class="galelry-lightbox">
                <img src="assets/img/c3.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/5.webp" class="galelry-lightbox">
                <img src="assets/img/5.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/c1.webp" class="galelry-lightbox">
                <img src="assets/img/c1.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          
        </div>
        <div class="row g-0">
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/16.webp" class="galelry-lightbox">
                <img src="assets/img/16.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/14.webp" class="galelry-lightbox">
                <img src="assets/img/14.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/c.webp" class="galelry-lightbox">
                <img src="assets/img/c.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/a1.webp" class="galelry-lightbox">
                <img src="assets/img/a1.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Book A Free Demo</h2>
          <p>Protect Your Family With The Next-Gen Aayushi Water Purifier Services</p>
        </div>

        <form  method="post"  class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="mobile" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
          </div>
          

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
           
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your  request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="submit">Book A Free Demo</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

  
    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/test2.webp" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We at Aayushi Water Purifier Services, aim to provide clarity about our company profile, products, services and every other detail that you may need.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/test.webp" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                 
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We are a major producer of thermal and carbonless coated papers worldwide. We have a $50,000 piece of test equipment in one of our quality control labs that is used to measure particle size in our coatings down to 
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/test1.webp" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We at Aayushi Water Purifier Services, aim to provide clarity about our company profile, products, services and every other detail that you may need.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

           

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>We at Aayushi Water Purifier Services, aim to provide clarity about our company profile, products, services and every other detail that you may need.</p>
        </div>
      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15083.097881485082!2d73.0121325!3d19.073651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x636be332e6abcb99!2sMayuresh%20Trade%20Centre!5e0!3m2!1sen!2sin!4v1658125376474!5m2!1sen!2sin"  style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A/4003, Mayuresh Trade Center, City Mall, Sector-19, Plot no.4, Vashi-Turbhe Road, Navi Mumbai-400705</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>aayushiwps@yahoo.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9321116602/+91 7666850999</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="mobile" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Aquaguard Active Copper Zinc Booster water purifier Cartridge infuses Copper and Zinc ions into the water to give the purest and healthiest drinking water for your family! When water passes through the cartridge, zinc and copper elutes along with it.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the material used inside the cartridge?
        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                The Aquaguard Active Copper Zinc Booster water purifier cartridge has carbon media loaded with copper and Zinc. As water passes through the cartridge it enhances the taste of the water and increases the level of essential minerals with add-on goodness of copper and zinc along with calcium and magnesium 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How many times in a day can I consume water from Aquagurd water purifier?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Start your day with glass of Copper and Zinc water, drink during workout/exercise or sip this water throughout the day anytime as per your convenience.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What is the durability/life of this Cartridge?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                The cartridge is designed to give the Goodness of Copper and Zinc water up to 6000 litres# of life under standard test conditions.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Can I buy the Active copper zinc booster cartridge separately?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                No, the cartridge isn�t available for individual sales as spares. This is configured in the product itself for usage.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Can I replace my existing cartridge with Active copper zinc booster and what will be the cost?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                We are yet to launch the exchange plan. You may share your contact details and we'll let you know once this is available.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Aayushi Water Purifier</h4>
            <p>
            A/4003, Mayuresh Trade Center, City Mall, Sector-19, Plot no.4, Vashi-Turbhe Road, Navi Mumbai-400705<br><br> <div class="social-links text-left text-md-left pt-3 pt-md-0">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div><br><br>
              <strong>Phone:</strong>+91 7666850999<br>
              <strong>Email:</strong> aayushiwps@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maintenance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">24/7 365 Days Support</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Parts Replacement</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
         
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
           <strong><span>Aayush Water Purifier Services</span></strong>. All Rights Reserved
        </div>
       
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
         
        </div>
      </div>
      <div class="mr-0 ml-5">
           <strong><span>Designed By<a href="https://tectignis.in"> Tectignis IT Solutions.</a></span></strong>
        </div>
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>