@extends('frontend.layouts.app')

@section('title', 'Home | Sencare')

@section('home')

<!-- Top-Header-Section -->
<div class="home-header-section home-header-section1">
    <div class="header-top header-top1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 d-md-block d-sm-none">
                    <div class="header-left d-table-cell align-middle">
                      <div class="phone-icon d-inline-block"><i class="fa-solid fa-phone-volume"></i></div><p class="free-consultation-text">For a free consultation:<a href="tel:+123456789" class="text-decoration-none">0800 123 45 67 890</a></p>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="header-right float-md-right float-none">
                        <ul class="list-unstyled">
                            <li class="d-inline-block"><i class="fa-sharp fa-solid fa-envelope"></i><a class="d-inline-block email-span text-decoration-none" href="mailto:info@sencare.com">info@sencare.com</a></li>
                            <li class="d-inline-block user-li"><i class="fa-solid fa-user"></i><a class="d-inline-block user-span text-decoration-none" href="login.html">Login</a></li>
                        </ul>     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header-Section -->
        <header class="header">
            <div class="main-header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand mr-0" href="index.html"><img src="frontend/assets/images/sencare-logo2.png" alt="" class="img-fluid"></a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
                            <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
                            <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown sancare-li-color active">
                                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                               <div class="dropdown-menu sancare-drop-down sencare-drop-down2">
                                                   <ul class="list-unstyled">
                                                       <li class="nav-item"> <a class="dropdown-item nav-link active" href="index.html"> Home 01</a></li>
                                                       <li class="nav-item"> <a class="dropdown-item nav-link" href="index2.html">Home 02</a></li>
                                                       <li class="nav-item"> <a class="dropdown-item nav-link" href="index3.html">Home 03</a></li>
                                                   </ul>
                                                </div>
                                       </li>
                                       <li class="nav-item">
                                        <a class="nav-link text-decoration-none navbar-text-color index2-navlink" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-decoration-none navbar-text-color index2-navlink" href="faq.html">FAQ</a>
                                    </li>
                                       <li class="nav-item dropdown sancare-li-color">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                           <div class="dropdown-menu sancare-drop-down sencare-drop-down2">
                                               <ul class="list-unstyled">
                                                   <li class="nav-item"> <a class="dropdown-item nav-link" href="comming-soon.html">Comming Soon</a></li>
                                                   <li class="nav-item"> <a class="dropdown-item nav-link" href="404page.html">404 Page</a></li>
                                               </ul>
                                            </div>
                                   </li>
                                        <li class="nav-item list-unstyled  btn-talk nav-btn2"><a class="nav-link" href="contact.html">BOOK AN APPOINTMENT</a></li>
                                    </ul>
                            </div>
                    </nav>
                </div>
            </div>
        </header>
         <!-- BANNER-SECTION -->
         <div class="home-banner-section overflow-hidden home-banner-section2 home-banner-section1">
            <div class="banner-container-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-md-0 mb-4 text-md-left text-center d-flex align-items-center">
                            <div class="home-banner-text"  data-aos="fade-up">
                                <h1>We give seniors the love they<span class="banner-deserve"> deserve</span></h1>
                                <p class="banner-paragraph">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident.</p>
                                <div class="banner-btn discover-btn-banner">
                                    <a href="about.html" class="text-decoration-none">OUR CARE SERVICES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="banner-img-section position-relative">
                                <figure class="banner-img2-figure">
                                    <img src="frontend/assets/images/index-banner-right-img.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer-section -->
    <div class="offer-section offer-section1" data-aos="fade-up">
        <h2>We offer you the  <span class="support">best support</span></h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="frontend/assets/images/offer-section-img1.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Home Care</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="frontend/assets/images/offer-section-img2.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Care Services</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="frontend/assets/images/offer-section-img3.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Medical Escort</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- Popup-Section -->
    <div class="offer-section popup-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                    <h2 data-aos="fade-up">Welcome to Sen<span class="support">Care</span></h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="popup-btn">
                      <a href="about.html">About us</a>
                  </div>
                  <h4>Need clinical advice?</h4>
                  <h4 class="popup-section-number">0800 123 45 678</h4>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                    <div class="video-section-box">    
                         <a class="popup-vimeo" href="https://previews.customer.envatousercontent.com/bfa4eae3-5be3-457e-9c5f-31e840d016e5/watermarked_preview/watermarked_preview.mp4">
                                <figure class="mb-0">
                                    <img src="frontend/assets/images/popup-video-img.png" style="cursor: pointer" alt="" class="img-fluid video-img">
                                </figure>
                            </a>
                            <figure class="position-absolute popup-top-figure">
                                <img src="frontend/assets/images/video-section-top-img.png" alt="" class="img-fluid">
                            </figure>
                            <figure class="position-absolute popup-bottom-figure">
                                <img src="frontend/assets/images/video-section-bottom-img.png" alt="" class="img-fluid">
                            </figure>
                    </div>
                </div>
            </div>
        </div>           
    </div>
    <!-- Counter-Section -->
    <div class="counter-section2">
        <div class="container">
            <div class="counter-inner-row">
            <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box vl-border">
                            <h5><span class="counter">45</span></h5>
                            <p>Donations Every Year</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box vl-right-border">
                            <h5><span class="counter">690</span></h5>
                            <p>Great Local Volunteers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box">
                            <h5><span class="counter">437</span></h5>
                            <p>Face to Face Visits</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box border-right-box">
                            <h5><span class="counter">170</span></h5>
                            <p>Organized Local Events</p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>  

    <!-- Service-Offer-Section -->
  <div class="service-offer-section service-offer-section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="service-offer-content" data-aos="fade-up">
                    <h2>Services We<span class="support">Offer</span></h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                    <div class="service-inner">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <figure class="service-figure-mb">
                                    <img src="frontend/assets/images/service-offer-left-img.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 d-lg-block d-none"></div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="offer-inner-box offer-inner-box1 offer-inner-box2">
                                            <figure class="service-figure-mb">
                                                <img src="frontend/assets/images/offer-icon1.png" alt="" class="img-fluid">
                                            </figure>
                                            <h4>Medical Record</h4>
                                            <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="offer-inner-box offer-inner-box1 offer-inner-box2">
                                            <figure class="service-figure-mb">
                                                <img src="frontend/assets/images/offer-icon2.png" alt="" class="img-fluid">
                                            </figure>
                                            <h4>Ambulance</h4>
                                            <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row2 -->
                                <div class="offer-section-row2">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="offer-inner-box offer-inner-box2">
                                                <figure class="service-figure-mb">
                                                    <img src="frontend/assets/images/offer-icon3.png" alt="" class="img-fluid">
                                                </figure>
                                                <h4>Medical Advice</h4>
                                                <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="offer-inner-box">
                                                <figure class="service-figure-mb">
                                                    <img src="frontend/assets/images/offer-icon4.png" alt="" class="img-fluid">
                                                </figure>
                                                <h4>24/7 Support</h4>
                                                <p class="mb-0">Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </div>
    <!--Happy-Clients-Section  -->

    <section class="happy-clients-section happy-clients-section2" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="review-section-outer position-relative">
                    <div class="carousel-card">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <figure><img src="frontend/assets/images/happy-clients-section-img2.png" alt="" class="img-fluid"></figure>
                        <h4 class="carousel-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident deserunt mollit anim id est laborum.</h4>
                        <div class="about-border"></div>
                       <h4 class="carousel-title">Michel Barnier</h4>
                       <p class="carousel-end-text">Senior Advisor</p>
                       <figure class="carousel-bottom-fig"><img src="frontend/assets/images/carousel-bottom-img.png" alt="" class="img-fluid"></figure>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>       
        </div>
    </div>
    </section> 

    <!-- Latest-Blogs-Section -->
   <div class="blogs-section latest-blogs-section">
    <div class="container">
        <h2 data-aos="fade-up">Latest <span class="blogs-span"> Blogs</span></h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-sm-4">
                <div class="blogs-content-box">
                <figure><img src="frontend/assets/images/latest-blog-img1.png"  alt="" class="img-fluid"></figure>
                <p class="blogs-title">February 29, 2020 in London</p>
                    <h5 class="blogs-text">The Nation's No.1 Home Care</h5>
                <div class="blogs-btn">
                    <a href="#" data-toggle="modal" data-target="#blog-model-1">Learn More</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-sm-4">
                <div class="blogs-content-box">
                <figure><img src="frontend/assets/images/latest-blog-img2.png"  alt="" class="img-fluid"></figure>
                <p class="blogs-title">February 29, 2020 in London</p>
                    <h5 class="blogs-text">Caring Senior Service</h5>
                <div class="blogs-btn">
                    <a href="#" data-toggle="modal" data-target="#blog-model-2">Learn More</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blogs-content-box mb-0">
                <figure><img src="frontend/assets/images/latest-blog-img3.png"  alt="" class="img-fluid"></figure>
                <p class="blogs-title">February 29, 2020 in London</p>
                    <h5 class="blogs-text">Sunrise Senior Living</h5>
                <div class="blogs-btn">
                    <a href="#" data-toggle="modal" data-target="#blog-model-3">Learn More</a>
                </div>        
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer-section footer-img-section footer-index-img position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <figure class="sencare-logo-footer">
                    <a class="navbar-brand mr-0" href="index.html"><img src="frontend/assets/images/sencare-logo2.png" alt="" class="img-fluid"></a>
                </figure>
                <p class="footer-text">Copyright 2020 DesigningMedia. All Rights reserved</p>
                <div class="social-icons text-center">
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                        <li><a href="" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                        <li><a href="" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 d-lg-block d-none">
                <ul class="list-unstyled footer-list-ul">
                    <li class="list-item footer-margin-left">
                        <h4 class="footer-link  footer-heading">
                            Useful Links
                        </h4>
                    </li>
                    <li>
                        <a href="about.html" class="text-decoration-none footer-link-p">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="comming-soon.html" class="text-decoration-none footer-link-p">
                            Comming Soon
                        </a>
                    </li>
                    <li>
                        <a href="404page.html" class="text-decoration-none footer-link-p">
                           404 page
                        </a>
                    </li>
                    <li>
                        <a href="about.html" class="text-decoration-none footer-link-p">
                            About us
                        </a>
                    </li>

                    <li>
                        <a href="faq.html" class="text-decoration-none footer-link-p">
                            Faq Page
                        </a>
                    </li>
                    <li>
                        <a href="contact.html" class="text-decoration-none footer-link-p">
                            Conatct us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <ul class="list-unstyled footer-list-ul contact-info-heading">
                    <li class="list-item footer-margin-left">
                        <h4 class="footer-link footer-heading">
                            Contact Info
                        </h4>
                    </li>
                    <li class="footer-margin-bottom">
                        <a href="about.html" class="text-decoration-none">
                            Address:
                        </a>
                    </li>
                    <li class="pr-2 mb-3">
                        <a  class="text-decoration-none">
                            121 King Street Melbourne,
                            3000, Australia
                        </a>
                    </li>
                    <li class="footer-margin-bottom">
                        <a class="text-decoration-none">
                            Email:
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="mailto:info@sencare.com" class="text-decoration-none">
                            info@sencare.com
                        </a>
                    </li>

                    <li class="footer-margin-bottom">
                        <a href="Find-Dealer.html" class="text-decoration-none">
                            Phone:
                        </a>
                    </li>
                    <li>
                        <a  href="tel:+123456789" class="text-decoration-none">
                            +1 23 45 6789
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <ul class="list-unstyled">
                    <li class="list-item">
                        <h4 class="footer-link  footer-heading instagram-heading">
                           Instagram
                        </h4>
                    </li>
                </ul>
                <div class="footer-images">
                    <div class="images-inner-box">
                        <ul class="list-unstyled mb-1">
                            <li class="list-item d-inline-block">
                                <figure class="mb-0"><img src="frontend/assets/images/footer-img1.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="frontend/assets/images/footer-img2.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="frontend/assets/images/footer-img3.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                        </ul>
                    </div>
                    <div class="images-inner-box">
                        <ul class="list-unstyled">
                            <li class="list-item d-inline-block">
                                <figure class="mb-0"><img src="frontend/assets/images/footer-img4.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="frontend/assets/images/footer-img5.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="frontend/assets/images/footer-img6.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>      

<!-- BLOG SECTION POPUP -->
<div id="blog-model-1" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="blog-box-item mb-0">
                    <div class="blog-img">
                        <figure class="mb-0">
                            <img src="frontend/assets/images/popup-blog-img1.jpg" alt="blog-img" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blog-content pl-0 pr-0">
                        <div class="blog-auteher-title">
                            <span>By Elina Parker</span>
                            <span class="float-lg-right">Sep 01, 2022</span>
                        </div>
                        <div class="span_wrapper">
                            <i class="fa-solid fa-calendar-days" aria-hidden="true"></i><span> 25 Oct, 2020  |  by admin</span>
                        </div>
                        <p class="blog_p mb-0">Magni dolores eos qui ratione voluptatem tempora incidunt sequi</p>
                        <p class="pp">
                            Quis nostrum exercitationem ullam corporis suscit labor iosam, nisi ut aliquid ex ea commodi conse aute irure dolor 
                            in reprehenderit in voluptateesse occaecat cuida at non proident, sunt in culpa qui officia deserun.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin.
                        </p>
                        <h2>Get In Touch With Us</h2>
                        <div class="carousel-card-form position-relative"> 
                            <form method="post" action="contact-form.php">
                                <div class="row">                           
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="border-bottom-outer position-relative">
                                        <input class="form-input-fields" type="text" name="fname" placeholder="First Name">
                                       </div>
                                        <input class="form-input-fields" type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-input-fields" type="text" name="lname" placeholder="Last Name">
                                        <input class="form-input-fields" type="text" name="phone" placeholder="Phone">
                                    </div>                         
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="message" class="message-field" placeholder="Message">
                                        <div class="popup-btn">
                                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<div id="blog-model-2" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="blog-box-item mb-0">
                    <div class="blog-img">
                        <figure class="mb-0">
                            <img src="frontend/assets/images/popup-blog-img2.jpg" alt="blog-img" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blog-content pl-0 pr-0">
                        <div class="blog-auteher-title">
                            <span>By Elina Parker</span>
                            <span class="float-lg-right">Sep 01, 2022</span>
                        </div>
                        <div class="span_wrapper">
                            <i class="fa-solid fa-calendar-days" aria-hidden="true"></i><span> 25 Oct, 2020  |  by admin</span>
                        </div>
                        <p class="blog_p mb-0">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
                        <p class="pp">
                            Quis nostrum exercitationem ullam corporis suscit labor iosam, nisi ut aliquid ex ea commodi conse aute irure dolor 
                            in reprehenderit in voluptateesse occaecat cuida at non proident, sunt in culpa qui officia deserun.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin.
                        </p>
                        <h2>Get In Touch With Us</h2>
                        <div class="carousel-card-form position-relative"> 
                            <form method="post" action="contact-form.php">
                                <div class="row">                           
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="border-bottom-outer position-relative">
                                        <input class="form-input-fields" type="text" name="fname" placeholder="First Name">
                                       </div>
                                        <input class="form-input-fields" type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-input-fields" type="text" name="lname" placeholder="Last Name">
                                        <input class="form-input-fields" type="text" name="phone" placeholder="Phone">
                                    </div>                         
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="message" class="message-field" placeholder="Message">
                                        <div class="popup-btn">
                                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<div id="blog-model-3" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="blog-box-item mb-0">
                    <div class="blog-img">
                        <figure class="mb-0">
                            <img src="frontend/assets/images/popup-blog-img3.jpg" alt="blog-img" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blog-content pl-0 pr-0">
                        <div class="blog-auteher-title">
                            <span>By Elina Parker</span>
                            <span class="float-lg-right">Sep 01, 2022</span>
                        </div>
                        <div class="span_wrapper">
                            <i class="fa-solid fa-calendar-days" aria-hidden="true"></i><span> 25 Oct, 2020  |  by admin</span>
                        </div>
                        <p class="blog_p mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        <p class="pp">
                            Quis nostrum exercitationem ullam corporis suscit labor iosam, nisi ut aliquid ex ea commodi conse aute irure dolor 
                            in reprehenderit in voluptateesse occaecat cuida at non proident, sunt in culpa qui officia deserun.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin.
                        </p>
                        <h2>Get In Touch With Us</h2>
                        <div class="carousel-card-form position-relative"> 
                            <form method="post" action="contact-form.php">
                                <div class="row">                           
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="border-bottom-outer position-relative">
                                        <input class="form-input-fields" type="text" name="fname" placeholder="First Name">
                                       </div>
                                        <input class="form-input-fields" type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-input-fields" type="text" name="lname" placeholder="Last Name">
                                        <input class="form-input-fields" type="text" name="phone" placeholder="Phone">
                                    </div>                         
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="message" class="message-field" placeholder="Message">
                                        <div class="popup-btn">
                                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>

@endsection