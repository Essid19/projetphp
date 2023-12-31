<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title -->
    <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
    <!-- Preloader -->

    <!-- End Preloader -->

    <!-- Get Pro Button -->

    <!-- Header Area -->
    <?php include 'includes/navbar.php' ?>

    <!-- End Header Area -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Blog Single</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Blog Single</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="row">
              <div class="col-12">
                <div class="single-main">
                  <!-- News Head -->
                  <div class="news-head">
                    <img src="img/blog1.jpg" alt="#" />
                  </div>
                  <!-- News Title -->
                  <h1 class="news-title">Name</h1>
                  <h1 class="news-title">Specialite</h1>
                  <a
                    href="orderdrug.php"
                    class="btn btn_primary"
                    style="color: white"
                    >Order</a
                  >

                  <!-- Meta -->

                  <!-- News Text -->
                </div>
              </div>
              <div class="col-12">
                <div class="blog-comments">
                  <h2>All Comments</h2>
                  <div class="comments-body">
                    <!-- Single Comments -->
                    <div class="single-comments">
                      <div class="main">
                        <div class="head">
                          <img src="img/author1.jpg" alt="#" />
                        </div>
                        <div class="body">
                          <h4>Afsana Mimi</h4>
                          <div class="comment-meta">
                            <span class="meta"
                              ><i class="fa fa-calendar"></i>March 05,
                              2019</span
                            ><span class="meta"
                              ><i class="fa fa-clock-o"></i>03:38 AM</span
                            >
                          </div>
                          <p>
                            Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected
                            humour, or randomised words Mirum est notare quam
                            littera gothica, quam nunc putamus parum claram,
                            anteposuerit litterarum formas
                          </p>
                        </div>
                      </div>
                    </div>
                    <!--/ End Single Comments -->
                    <!-- Single Comments -->

                    <!--/ End Single Comments -->
                    <!-- Single Comments -->

                    <!--/ End Single Comments -->
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="comments-form">
                  <h2>Leave Comments</h2>
                  <!-- Contact Form -->
                  <form class="form" id="cmn_form" method="post" action="mail/mail.php">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-user"></i>
                          <input
                            type="text"
                            name="first-name"
                            id="f_name"
                            placeholder="First name"
                            required="required"
                          />
                          <span id="parag_fname"></span>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-user"></i>
                          <input
                            type="text"
                            name="last-name"
                            id="l_name"
                            placeholder="Last name"
                            required="required"
                          />
                          <span id="parag_lname"></span>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
                          <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Your Email"
                            required="required"
                          />
                          <span id="parag_email"></span>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group message">
                          <i class="fa fa-pencil"></i>
                          <textarea
                            name="message"
                            id="msg"
                            rows="7"
                            placeholder="Type Your Message Here"
                            required="required"
                          ></textarea>
                          <span id="parag_msg"></span>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group button">
                          <button type="submit" id="btn_cmn" class="btn primary" disabled>
                            <i class="fa fa-send"></i>Submit Comment
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--/ End Contact Form -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Single News -->

    <!-- Footer Area -->
    <footer id="footer" class="footer">
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>About Us</h2>
                <p>
                  Lorem ipsum dolor sit am consectetur adipisicing elit do
                  eiusmod tempor incididunt ut labore dolore magna.
                </p>
                <!-- Social -->
                <ul class="social">
                  <li>
                    <a href="#"><i class="icofont-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icofont-google-plus"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icofont-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icofont-vimeo"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icofont-pinterest"></i></a>
                  </li>
                </ul>
                <!-- End Social -->
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer f-link">
                <h2>Quick Links</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Home</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Services</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Our Cases</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Other Links</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Consuling</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Finance</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Testimonials</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >FAQ</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>Open Hours</h2>
                <p>
                  Lorem ipsum dolor sit ame consectetur adipisicing elit do
                  eiusmod tempor incididunt.
                </p>
                <ul class="time-sidual">
                  <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                  <li class="day">Saturday <span>9.00-18.30</span></li>
                  <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>Newsletter</h2>
                <p>
                  subscribe to our newsletter to get allour news in your inbox..
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                </p>
                <form
                  action="mail/mail.php"
                  method="get"
                  target="_blank"
                  class="newsletter-inner"
                >
                  <input
                    name="email"
                    placeholder="Email Address"
                    class="common-input"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Your email address'"
                    required=""
                    type="email"
                  />
                  <button class="button">
                    <i class="icofont icofont-paper-plane"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <!-- Copyright -->
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="copyright-content">
                <p>
                  © Copyright 2018 | All Rights Reserved by
                  <a href="https://www.wpthemesgrid.com" target="_blank"
                    >wpthemesgrid.com</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script src="../script/comments.js"></script>
  
  </body>
</html>
