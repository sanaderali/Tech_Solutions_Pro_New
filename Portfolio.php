<?php include ('header.php'); ?>

 <!-- Start Page Banner Area -->
 <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Projects</h2>

                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Projects Area -->
        <div class="projects-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span>PROJECTS</span>
                    <h2>Our Latest <b>Incredible</b> Client's Projects <span class="overlay"></span></h2>
                </div>

                <ul class="projects-filter-menu"> 
                    <li class="filter" data-filter="all">All</li>
                    <li class="filter" data-filter=".mobile">Mobile App</li>
                    <li class="filter" data-filter=".development">Development</li>
                    <li class="filter" data-filter=".web-design">Web Design</li>
                    <li class="filter" data-filter=".product-design">Product Design</li>
                </ul>  

                <div id="Container" class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mix mobile development web-design">
                        <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="assets/images/projects-two/projects-1.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">3D Animation</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>

                        <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="assets/images/projects-two/projects-2.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Online Banking Software</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix development product-design">
                        <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="assets/images/projects-two/projects-3.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Cashier Software</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix web-design mobile product-design">
                        <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="assets/images/projects-two/projects-4.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Messaging App</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>

                        <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="projects-image">
                                <a href="projects-details.html"><img src="assets/images/projects-two/projects-5.jpg" alt="image"></a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    <a href="projects-details.html">Analytics Software</a>
                                </h3>
                                <a href="projects-details.html" class="projects-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="projects-bg-shape-1">
                <img src="assets/images/projects/projects-bg-shape.png" alt="image">
            </div>
        </div>
        <!-- End Projects Area -->

        <!-- Start Talk Area -->
        <div class="talk-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="talk-image" data-tilt>
                            <img src="assets/images/talk/talk-2.png" alt="image">

                            <div class="talk-circle">
                                <img src="assets/images/talk/talk-circle.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="talk-content margin-zero">
                            <span>LET'S TALK</span>
                            <h3>We Would Like To Hear From You Any Question <span class="overlay"></span></h3>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p>

                            <form id="contactFormTwo">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Send Message<span></span></button>
                                        <div id="msgSubmitTwo" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Talk Area -->

        <!-- Start Overview Area -->
        <div class="overview-area pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="overview-card">
                            <h3>Call Us</h3>
                            <span>
                                <a href="tel:9901234567">+990-123-4567</a>
                            </span>

                            <div class="overview-shape">
                                <img src="assets/images/overview/overview-shape.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="overview-card">
                            <h3>Email Us</h3>
                            <span>
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#a9c1c0cac6d3cce9cec4c8c0c587cac6c4"><span class="__cf_email__" data-cfemail="7e16171d11041b3e19131f1712501d1113">[email&#160;protected]</span></a>
                            </span>

                            <div class="overview-shape">
                                <img src="assets/images/overview/overview-shape.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="overview-card">
                            <h3>Tech Support</h3>
                            <span>
                                <a href="tel:15143125678">+1 (514) 312-5678</a>
                            </span>

                            <div class="overview-shape">
                                <img src="assets/images/overview/overview-shape.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="overview-card">
                            <h3>Visit Us</h3>
                            <span>413 North Las Vegas, NV 89032</span>

                            <div class="overview-shape">
                                <img src="assets/images/overview/overview-shape.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->
        
<?php include ('footer.php'); ?>