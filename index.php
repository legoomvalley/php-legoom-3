<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="device-width, initial-scale=1" />
    <title>Learning bootstrap v5 with sass</title>
    <!-- nanti nk copy pastikan tambah folder di depan asset nama BOOTSTRAP-V5/assets/css/style.css sebab semua di dalam folder tu  -->
    <link rel="stylesheet" href="assets/css/style.css" ; />
    <!-- link bawah ni link css untuk dapat kan icon dari FontAwesome -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <!-- link bawah ni link css untuk dapat kan font style dari google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- link bawah ni lak link css GLightBox -->
    <link rel="stylesheet" href="assets/vendors/css/glightbox.min.css" />
  </head>
  <body>
    <!-- ///////////////////////////////////////////////////
    //////////     START THE NAVBAR SECTION 1  /////////////
    // ///////////////////////////////////////////////// -->

    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/campanies/campany-1.png" alt="logo image" width="60" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#campanies">Trusted Campany</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="intern-report/login-signup/register.php">Register Here</a>
            </li>
            <button type="button" class="rounded-pill btn-rounded">
              +60 11-1111xxxx
              <span>
                <i class="fa-solid fa-phone"></i>
              </span>
            </button>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ///////////////////////////////////////////////////
    //////////   START THE  INTRO SECTION 2    /////////////
    // ///////////////////////////////////////////////// -->

    <section id="home" class="intro-section">
      <div class="container">
        <div class="row align-items-center text-white">
          <div class="col-md-6 intros text-start">
            <h1 class="display-2">
              <span class="display-2--intro">Hey!, Welcome to LEGOOM </span>
              <span class="display-2--description lh-base"> An Exclusive, Human Resource & Management Systems created exlusively for Legoomers. </span>
            </h1>
            <button type="button" class="rounded-pill btn-rounded">
              Linkedin API
              <span>
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </button>
            <a class="btn rounded-pill btn-rounded" href="intern-report/login-signup/login.php" role="button">
              Intern Report
              <span>
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </a>
            <button type="button" class="rounded-pill btn-rounded">
              Application Form
              <span>
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </button>
          </div>
          <!-- START THE CONTENT FOR THE VIDEO -->
          <div class="col-md-6 intros text-end">
            <div class="video-box">
              <img src="images/arts/Coding_Outline.png" alt="video illutration" class="img-fluid" />
              <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                <span>
                  <i class="fa-solid fa-circle-play"></i>
                </span>
                <span class="border-animation border-animation--border-1"></span>
                <span class="border-animation border-animation--border-2"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L60,138.7C120,149,240,171,360,160C480,149,600,107,720,106.7C840,107,960,149,1080,176C1200,203,1320,213,1380,218.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>

   <!-- START THE CAMPANIES SECTION 3 -->


    <section id="campanies" class="campanies">
      <div class="container">
        <div class="row text-center">
          <h4 class="fw-bold lead mb-3">Trusted by campanies like</h4>
          <div class="heading-line mb-5"></div>
        </div>
      </div>
      <!-- START WITH CAMPANIES CONTENT -->
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="images/campanies/campany-7.png" alt="Campany 1 logo" title="Campany 1 logo" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 logo" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 logo" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 logo" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 logo" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 logo" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ///////////////////////////////////////////////////
    //////////   START THE SERVICES SECTION 4    ///////////
    // ///////////////////////////////////////////////// -->

    <section id="services" class="services">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold">Our Services</h1>
          <div class="heading-line mb-1"></div>
        </div>

        <!-- START THE DESCRIPTION CONTENT -->

        <div class="row pt-2 pb-2 mt-0 mb-3">
          <div class="col-md-6 border-right">
            <div class="bg-white p-3">
              <h2 class="fw-bold text-capitalize text-center">Our Services Range From Initial Design to Development Anywhere Anytime</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-white p-4 text-start">
              <p class="fw-light">Demo Dok Kenal Bare</p>
            </div>
          </div>
        </div>
      </div>
      <!-- START THE CONTENT FOR THE SERVICES  -->
      <div class="container">
        <!-- START THE MARKETING CONTENT  -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-paper-plane"></div>
              <h3 class="display-3--title mt-1">Marketing</h3>
              <p class="lh-lg">Pemasaran iklan, demo dok kenal bare, Good luck have fun, Santai dan tenang jiwa, saje tulis sebab xtahu nk tulis apa</p>
              <button type="button" class="rounded-pill btn-rounded border-primary">
                Learn more
                <span>
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
            <div class="services__pic">
              <img src="images/services/Marketing _Outline.png" alt="Marketing illustration" class="img-fluid" />
            </div>
          </div>
        </div>
        <!-- START THE WEB DEVELOPMENT CONTENT  -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
            <div class="services__pic">
              <img src="images/services/Web development _Flatline.png" alt="Web Development illustration" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-code"></div>
              <h3 class="display-3--title mt-1">Web Development</h3>
              <p class="lh-lg">Pemasaran iklan, demo dok kenal bare, Good luck have fun, Santai dan tenang jiwa, saje tulis sebab xtahu nk tulis apa</p>
              <button type="button" class="rounded-pill btn-rounded border-primary">
                Learn more
                <span>
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <!-- START THE CLOUD SERVICES CONTENT  -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-cloud-upload-alt"></div>
              <h3 class="display-3--title mt-1">Cloud Hosting</h3>
              <p class="lh-lg">Pemasaran iklan, demo dok kenal bare, Good luck have fun, Santai dan tenang jiwa, saje tulis sebab xtahu nk tulis apa</p>
              <button type="button" class="rounded-pill btn-rounded border-primary">
                Learn more
                <span>
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
            <div class="services__pic">
              <img src="images/services/Data storage_Monochromatic.png" alt="Cloud Hosting illustration" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ///////////////////////////////////////////////////
    //////////   START THE FOOTER SECTION 5    /////////////
    // ///////////////////////////////////////////////// -->
        <footer id="contact" class="footer">
            <div class="container">
                <div class="row">
                    <!-- START THE CONTENT FOR THE MOBILE NUMBER  -->
                    <div class="col-mb-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex">
                        <div class="contact-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                              </svg>
                        </div>
                        <div class="contact-box__info">
                            <a href="" class="contact-box__info--title">+60 111111xxxx</a>
                            <p class="contact-box__info--subtitle">Mon-fri 9am-5pm</p>
                        </div>
                    </div>
                    <!-- CONTENT FOR EMAIL -->
                    <div class="col-mb-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex">
                        <div class="contact-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"  viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" />
                              </svg>
                        </div>
                        <div class="contact-box__info">
                            <a href="" class="contact-box__info--title">legoom@gmail.com</a>
                            <p class="contact-box__info--subtitle">Online Support</p>
                        </div>
                    </div>
                    <!-- CONTENT FOR LOCATION -->
                    <div class="col-mb-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex">
                        <div class="contact-box__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"  viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="18" y1="6" x2="18" y2="6.01" />
                                <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                                <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                                <line x1="9" y1="4" x2="9" y2="17" />
                                <line x1="15" y1="15" x2="15" y2="20" />
                              </svg>
                        </div>
                        <div class="contact-box__info">
                            <a href="" class="contact-box__info--title">Malaysia</a>
                            <p class="contact-box__info--subtitle">Noxx, .... Selangor</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START THE SOCIAL MEDIA CONTENT -->
            <div class="footer-sm" style="background-color: #212121;">
                <div class="container">
                    <div class="row py-4 text-center text-white">
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            connect with us on media social
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-github"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START THE COMPANY CONTENT -->
            <div class="container mt-5">
                <div class="row text-white justify-content-center mt-3 pb-3">
                    <div class="col-12 col-sm-6 col-lg-6 mx-auto">
                        <h5 class="text-capitalize fw-bold">Campany name</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <p class="lh-lg">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, error. Deleniti sed hic odio in quod pariatur.
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">Product</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;"> 
                        <ul class="list-inline campany-list">
                            <li><a href="#">lorem ipsum</a></li>
                            <li><a href="#">lorem ipsum</a></li>
                            <li><a href="#">lorem ipsum</a></li>
                            <li><a href="#">lorem ipsum</a></li>
                        </ul> 
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">Useful Link</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <ul class="list-inline campany-list">
                            <li><a href="#">Your Account</a></li>
                            <li><a href="#">Become an Legoom Intern</a></li>
                            <li><a href="#">create an account</a></li>
                            <li><a href="#">Help</a></li>
                        </ul> 
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">Contact</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <ul class="list-inline campany-list">
                            <li><a href="#">lorem ipsum</a></li>
                            <li><a href="#">lorem ipsum</a></li>
                            <li><a href="#">lorem ipsum</a></li>
                            <li><a href="#">lorem ipsum</a></li>
                        </ul> 
                    </div>
                </div>
            </div>

            <!-- START THE COPYRIGHT INFO  -->
            <div class="footer-bottom pt-5 pb-5">
                <div class="container">
                    <div class="row text-center text-white">
                        <div class="col-12">
                            <div class="footer-bottom__copyright">
                                &COPY; Copyright 2022 <a href="#"> Multi Purpose Company</a> | Created by <a href="#">Legoom</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- BACK TO TOP BUTTON  -->
        <a href="#" class="shadow btn-primary rounded-circle back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>



    <!-- link bawah ni lak link script js GLightBox -->

    <script src="/assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
      const lightbox = GLightbox({
        href: 'https://www.youtube.com/watch?v=Ga6RYejo6Hk',
        type: 'video',
        source: 'youtube', //vimeo, youtube or local
        width: 900,
        autoPlayvideos: true,
      });
    </script>

    <!-- link bawah ni lak link script js Bootstrap -->

    <script src="/assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
