<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Corporate Realestate Services | Effective is the leading facility management company that provides maintenance expertise</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="We provide a variety of tailored, details-focused, high-quality services to clients across Northern Emirates. 
        As a privately owned business, our wealth of experience means we can provide bespoke quotations with excellent levels of customer support and service delivery. Contact us today!" />
    <meta name="keywords" content="#">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="stylesheet" href="assets/css/services.css">

    <?php
    include 'includes/header.php';
    // include 'includes/navbar.php';
    include 'includes/navbar_new.php';
    include 'includes/whatsapp.php';
    // include 'includes/breadcrumber.php';
    $page = 'realestate';
    ?>


    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper sticky-wrapper zindex " data-bg-src="assets/img/banner/realestate1.jpg" data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Corporate Realestate Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="whatwedo.php">Services</a></li>
                    <li>Corporate Realestate Services</li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("scroll", function() {
            let breadcrumbWrapper = document.querySelector(".breadcumb-wrapper");
            let breadcrumbMenu = document.querySelector(".breadcumb-menu");
            let breadcrumbTitle = document.querySelector(".breadcumb-title");

            if (window.scrollY > 500) {
                breadcrumbWrapper.classList.add("sticky-breadcrumb");
                breadcrumbTitle.style.display = "none";
                breadcrumbWrapper.style.background = "var(--title-color)";
                breadcrumbWrapper.style.backgroundImage = "none";
                breadcrumbMenu.style.display = "block";
            } else {
                breadcrumbWrapper.classList.remove("sticky-breadcrumb");
                breadcrumbTitle.style.display = "block";
                breadcrumbWrapper.style.background = "";
                breadcrumbWrapper.style.backgroundImage = "url('assets/img/banner/realestate1.jpg')";
            }
        });
    </script>

    <style>
        .sticky-breadcrumb {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: var(--title-color);
            padding: 80px 0 30px;
            z-index: 10;
            transition: all 0.3s ease-in-out;
        }

        .breadcumb-menu {
            /* display: none; */
        }
    </style>

    <!--==============================
    Breadcumb End
    ==============================-->

    <!--==============================
    Team Area  
    ==============================-->

    <section class=" space handyman-services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-content">
                        <img src="assets/img/service/real.jpg" alt="Corporate Real Estate Service" class="img-fluid">
                    </div>
                </div>
                <!-- Left Side: Text Content -->
                <div class="col-lg-6">
                    <div class="text-content">
                        <h2 class="team-details-title fw-extrabold mb-2">Corporate Real Estate Services</h2>
                        <!-- <h5>Your Go-To Solution for Quick, Reliable, and Professional Repairs</h5> -->
                        <p class="team-details-text mb-25" style="text-align: justify;">At EFM, we offer comprehensive Corporate Real Estate Services designed to support businesses in managing their facilities, optimizing operational efficiency, and maintaining high standards of service. Whether you're looking for administrative support, field services, or specialized rebuilding and refurbishment,
                            our tailored solutions ensure that your real estate assets are effectively managed and maintained. Here’s an overview of the key services we provide:
                        </p>
                    </div>
                </div>
                <!-- Right Side: Image Content -->
            </div>
        </div>
    </section>

    <!--==============================
    Team Area  End
    ==============================-->

    <!--==============================
    WHY CHOOS US
    ==============================-->
    <section class="space" data-bg-src="assets/img/bg/service5-bg.png" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-area"><span class="sub-title">WHY CHOOSE US</span>
                        <h2 class="sec-title">Why Choose Our Corporate Real Estate Services?</h2>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end align-self-center">
                    <div class="arrow-wrap style3 mb-lg-0 mb-30">
                        <button style="margin-left: 150px;" data-slick-prev="#service-slider5" class="slick-arrow slick-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                        <button style="margin-right: 150px;" data-slick-next="#service-slider5" class="slick-arrow slick-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="service-slider5" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-dollar-sign service-icon"></i>
                            <h3 class="box-title"><a href="#">Comprehensive Solutions</a></h3>
                            <p class="service-card_text">From administrative support to field services and major refurbishments, we offer a full spectrum of services to manage your real estate assets effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-tools service-icon"></i>
                            <h3 class="box-title"><a href="#">Expertise and Experience</a></h3>
                            <p class="service-card_text">With years of experience, our team is equipped with the knowledge and skills to handle every aspect of corporate real estate management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-user-cog service-icon"></i>
                            <h3 class="box-title"><a href="#">Tailored Approach</a></h3>
                            <p class="service-card_text">We understand that every business is unique. Our services are customized to meet your specific needs, ensuring maximum efficiency and satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-clock service-icon"></i>
                            <h3 class="box-title"><a href="#">Reliability and Quality</a></h3>
                            <p class="service-card_text">We are committed to delivering the highest standards of service, with a focus on timely execution and quality results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-shield-alt service-icon"></i>
                            <h3 class="box-title"><a href="#">Safety & Compliance</a></h3>
                            <p class="service-card_text">We adhere to all local building codes, regulations, and safety standards, ensuring that your project is completed safely and legally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!--==============================
    WHY CHOOS US END
    ==============================-->







    <!--==============================
    SERVICES
    ==============================-->

    <section class=" space services-section">
        <div class="container">
            <h2 class="services-title ">Our Corporate Real Estate Services</h2>
            <div class="services-row pt-3">
                <div class="row gy-30">
                    <!-- Administrative and Operational Support -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 755px;">
                            <div class="service-bg-shape"><img
                                    src="assets/img/service/service_box_shape1.jpg" alt="img"></div>
                            <div class="service-box_content">
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/service-icon-3-2.svg" alt="Icon">
                                    <span
                                        class="dots"></span>
                                </div>
                                <h3 class="box-title"><a href="#" tabindex="0">Administrative and Operational Support</a></h3>
                                <p class="service-box_text">
                                    Streamline the day-to-day management of your corporate real estate needs with our comprehensive services:
                                </p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Tenant Coordination:</strong> Handle tenant relations, lease management, and compliance with property regulations.</li>
                                    <li class="pt-15"><strong>Lease Administration:</strong> Manage agreements, renewals, and documentation for optimal real estate use.</li>
                                    <li class="pt-15"><strong>Facility Management:</strong> Oversee corporate facilities, schedules, and essential services.</li>
                                    <li class="pt-15"><strong>Vendor Management:</strong> Coordinate with service providers to ensure high-quality, timely work.</li>
                                    <li class="pt-15"><strong>Budget and Cost Management:</strong> Create and oversee budgets to ensure financial efficiency.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Administrative and Operational Support end -->
                    <!-- Field Service Support -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 755px;">
                            <div class="service-bg-shape"><img
                                    src="assets/img/service/service_box_shape1.jpg" alt="img"></div>
                            <div class="service-box_content">
                                <div class="service-default-icon"><img
                                        src="assets/img/icon/service-icon-3-3.svg" alt="Icon"> <span
                                        class="dots"></span></div>
                                <h3 class="box-title"><a href="#" tabindex="0">Field Service Support</a></h3>
                                <p class="service-box_text">Ensure your facilities are maintained in optimal condition with hands-on services:</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Routine Inspections and Maintenance:</strong> Regular checks to prevent downtime and identify issues.</li>
                                    <li class="pt-15"><strong>Emergency Repairs:</strong> Fast response to urgent service needs with skilled technicians.</li>
                                    <li class="pt-15"><strong>Preventative Maintenance:</strong> Scheduled services to preserve facility longevity.</li>
                                    <li class="pt-15"><strong>Facility Troubleshooting:</strong> Resolve operational issues with vital systems like HVAC and plumbing.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Field Service Support  end-->
                    <!-- Rebuilding & Refurbishment Work -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 755px;">
                            <div class="service-bg-shape"><img
                                    src="assets/img/service/service_box_shape1.jpg" alt="img"></div>
                            <div class="service-box_content">
                                <div class="service-default-icon"><img
                                        src="assets/img/icon/service-icon-3-1.svg" alt="Icon"> <span
                                        class="dots"></span></div>
                                <h3 class="box-title"><a href="#" tabindex="0">Rebuilding & Refurbishment Work</a></h3>
                                <p class="service-box_text">Transform your facilities with our comprehensive rebuilding and refurbishment services:</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Office Renovations:</strong> Redesign and refurbish spaces to enhance aesthetics and functionality.</li>
                                    <li class="pt-15"><strong>Space Optimization:</strong> Modernize layouts for efficient space utilization.</li>
                                    <li class="pt-15"><strong>Building Upgrades:</strong> Update outdated facilities to meet current safety and performance standards.</li>
                                    <li class="pt-15"><strong>Sustainability and Energy Efficiency:</strong> Integrate eco-friendly and energy-efficient solutions.</li>
                                    <li class="pt-15"><strong>Project Management:</strong> Oversee the entire process for timely, budget-conscious results.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Rebuilding & Refurbishment Work end -->

                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 755px;">
                            <div class="service-bg-shape">
                                <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                            </div>
                            <div class="service-box_content">
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/technical-support.png" alt="Icon"> 
                                    <span class="dots"></span>
                                </div>
                                <h3 class="box-title"><a href="#" tabindex="0">Field Service Support</a></h3>
                                <p class="service-box_text">As previously mentioned, our field service support ensures every issue is resolved swiftly:</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Responsive Teams:</strong> Trained professionals to address maintenance and repair needs.</li>
                                    <li class="pt-15"><strong>Detailed Reporting:</strong> Clear reports on completed work and future recommendations.</li>
                                    <li class="pt-15"><strong>Long-Term Care:</strong> Ongoing support to maintain your facilities in peak condition.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
SERVICES End
==============================-->






    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>