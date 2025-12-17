<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shaan Finance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="assets/css/plugins/carouselTicker.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- track css -->

</head>

<body id="openModalMenuItem">
    <!-- preloader start -->
    <div id="preloader">
        <div class="preloader-close">x</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader start -->

    <!-- Modal Structure -->
    <!-- <div >
  <div class="modal-content">
    <span class="close-button">&times;</span>
    <h2>Subscribe to our Newsletter</h2>
    <form>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>
</div> -->
    <div class="modal" tabindex="-1" id="newsletterModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.php">
                                <img src="assets/imgs/logo/logo.png" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <!-- <div class="offcanvas__social">
                    <h3 class="offcanvas__title mb-20">Subscribe & Follow</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div> -->
                    <div class="offcanvas__btn d-sm-none">
                        <div class="header__btn-wrap">
                            <div class="header__btn header__btn-white d-flex align-items-center justify-content-center">
                                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                <div class="text">
                                    <span>Need help?</span>
                                    <a href="tel:08029902980"></a>
                                    <h5> 080-2990 2980</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-1 header-2">
            <div class="header-top d-none d-md-block" data-bg-color="#f46a25">
                <div class="container">
                    <div class="top-header__menu-wrapper d-flex justify-content-between align-items-center">
                        <ul class="header-top-menu d-flex">
                            <li><a href="tel: 08029902980"><i class="fa-solid fa-phone"></i> 080- 2990 2980</a></li>
                            <li><a href="mailto:customergrievances@shaanfinance.in"><i
                                        class="fa-solid fa-envelope"></i>customergrievances@shaanfinance.in</a></li>
                            <li><a href="https://maps.app.goo.gl/mPvpxvftwy6JYoxJ8"><i
                                        class="fa-solid fa-location-dot"></i>SB One, 260/33, 9th A Main Road, 3rd Block,
                                    Jayanagar, Bangalore 560011</a></li>
                        </ul>

                        <ul class="header-top-socail-menu d-flex">
                            <li><a href="mailto:info@shaanfinance.in"><i class="fa-solid fa-envelope fs-2"></i></a></li>
                            <!-- <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mega__menu-wrapper p-relative">
                    <div class="header__main">
                        <div class="header__left">
                            <div class="header__logo">
                                <a href="index.php">
                                    <div class="logo">
                                        <img src="assets/imgs/logo/logo.png" alt="logo not found" width="180px">
                                    </div>
                                    <div class="logo logo-2 d-none">
                                        <img src="assets/imgs/logo/logo.png" alt="logo not found">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="header__middle">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active">
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li class="">
                                                <a href="about.php">About Us</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">Products</a>
                                                <ul class="submenu">
                                                    <li><a href="personalloan.php">Personal Loan for Salaried</a></li>
                                                    <li><a href="againstsalary.php">Advance Against Salary Loan</a></li>
                                                    <li><a href="feefinancing.php">Student Fee Financing Scheme </a>
                                                    </li>
                                                    <li><a href="securedandunsecured.php"> Secured & unsecured business
                                                            loan</a></li>
                                                    <li><a href="commercialvehicleloan.php"> Commercial vehicle loan</a>
                                                    </li>
                                                    <li><a href="billsdiscounting.php"> Bills discounting scheme</a>
                                                    </li>
                                                    <li><a href="loantoprofessionals.php">Loan to Professionals </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="servicecharges.php">Service Charges & ROI</a>
                                            </li>
                                            <li class="">
                                                <a href="emi-calculator.php"> EMI Calculator</a>
                                            </li>


                                            <li>
                                                <a href="contact.php">Contact Us</a>
                                            </li>
                                            <li class="">
                                                <a href="https://apply.shaanfinance.in/journey/start/shaan-finance"
                                                    style="color:#004cac;"><b>Apply Now</b></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__action d-flex align-items-center">
                                <!-- <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <div class="header__btn d-flex align-items-center justify-content-center">
                                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                    <div class="text">
                                        <span style="color:#000">Need help?</span>
                                        <a href="tel:8085550111" style="color:#000"><h5>(91) 8904022506 <br/> info@shaanfinance.in</h5></a>
                                    </div>
                                </div>
                            </div> -->
                                <div class="header__hamburger ml-20 d-lg-none">
                                    <div class="sidebar__toggle">
                                        <a class="bar-icon" href="avascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->