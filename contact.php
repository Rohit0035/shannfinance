<!-- header -->
<?php include 'header.php';?>
<!-- Body main wrapper start -->
<main>
    <!-- Breadcrumb area start  -->
    <div class="breadcrumb__area breadcrumb-space overly" data-background="assets/imgs/portfolio/page-header-1.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h2 class="breadcrumb__title mb-0 wow fadeIn animated" data-wow-delay=".1s">Contact Us</h2>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.php">Home</a></span></li>
                                    <li class="active"><span>Contact Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <!--contact-us-start-->
    <section class="contact-us__area section-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-us__content mb-30 mb-xs-25">
                        <h3 class="section__title mb-25 mb-xs-20 wow fadeInLeft animated" data-wow-delay=".3s">SEND US A MESSAGE</h3>
                        <!-- <div class="descriptions wow fadeInLeft animated" data-wow-delay=".5s">
                            <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis  viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros</p>
                        </div> -->
                    </div>
                    
                    <?php 
                    if (isset($_GET['succ']) && $_GET['succ']==1){
                        ?>
                        <div class="alert alert-success">
                            Thanks for connecting with us. we will reach you soon.
                        </div>
                        <?php
                    }
                    ?>

                    <div class="contact-us__form shadow p-4">
                        <form action="mailer/send.php" method="post">
                        <div class="row wow fadeInLeft animated" data-wow-delay=".9s">
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="name" id="name" type="text" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="email" id="email" type="text" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="phone" id="phone" type="text" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="subject" id="subject" type="text" placeholder="Your Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-us__textarea">
                                    <textarea name="message" id="textarea" cols="30" rows="10" placeholder="Write your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="rs-btn">Send Message</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-us__widget mb-30 wow fadeInRight animated" data-wow-delay=".3s">
                        <h3 class="contact-us__widget-title mb-30 bottom-bar">Contact us</h3>
                        <ul style="width:100%; display:inline;">
                            <li class="shadow p-4 mb-3">
                              <h4 class="mb-2">Email Us</h4>
                                <!-- <a href="mailto:customergrievances@shaanfinance.in">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span class="text">customergrievances@shaanfinance.in </span>
                                    <br/> 
                                </a> -->
                                <a href="mailto:info@shaanfinance.in">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span class="text">
                                      info@shaanfinance.in
                                    </span>
                                    <br/> 
                                </a>
                            </li>

                            
                            <li class="shadow p-4 mb-3">
                              <h4 class="mb-2">Call Us</h4>
                                <a href="tel:08029902980">
                                    <i class="fa-solid fa-phone"></i>
                                    <span class="text">   080- 2990 2980</span>
                                </a>
                            </li>
                            <li class="shadow p-4 mb-3">
                                <h4 class="mb-2">Address</h4>
                                <a href="javascript:void(0)">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span class="text">SB One, 260/33, 9th A Main Road, 3rd Block, Jayanagar, Bangalore 560011</span>
                                </a>
                            </li>
                            <li class="shadow p-4 mb-3">
                              <h4 class="mb-2">Business Hours</h4>
                                <a href="tel:+918904022506">
                                    <i class="fa-solid fa-clock"></i>
                                    <span class="text">Monday to Friday: 9:30 am – 5:30 pm</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>

                    <!-- <div class="contact-us__widget mb-30 wow fadeInRight animated" data-wow-delay=".6s">
                        <h3 class="contact-us__widget-title mb-30 bottom-bar">Map</h3>
                    </div> -->
                </div>
                <div class="col-xl-12 mt-5">
                        <div class="map">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.611513435247!2d77.58167827404992!3d12.932672115732633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae154350734531%3A0x70fbc93d6e4cbab8!2sSB%20One!5e0!3m2!1sen!2sin!4v1716022516676!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                 </div>
            </div>
        </div>
    </section>
    <!--contact-us-end-->

</main>
<!-- Body main wrapper end -->


<!-- footer -->
<?php include 'footer.php';?>