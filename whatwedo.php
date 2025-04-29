<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>What We Do | Services We Offer| We provide a variety of tailored, details-focused, high-quality services to clients across Northern Emirates. </title>
    <meta name="author" content="Pixell Media Technologiers | Midhun | Vigil Nath K K">
    <meta name="description" content="We provide a variety of tailored, details-focused, high-quality services to clients across Northern Emirates. 
            As a privately owned business, our wealth of experience means we can provide bespoke quotations with excellent levels of customer support and service delivery.">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW">

    <?php
        include 'includes/header.php'; 
        // include 'includes/navbar.php';
        include 'includes/navbar_new.php';
        include 'includes/whatsapp.php';
        // include 'includes/breadcrumber.php';
        $page='service';
    ?>
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper sticky-wrapper zindex " 
        data-bg-src="assets/img/bg/breadcumb-bg.png" 
        data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">What We Do</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>What We Do</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("scroll", function () {
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
                breadcrumbWrapper.style.backgroundImage = "url('assets/img/bg/breadcumb-bg.png')";
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
    Service Area  
    ==============================-->
    <section class="space" id="service-sec">
        <div class="container">
            <div class="row gy-30">
                <!-- Corporate Realestate Services -->
                <div class="col-md-6 col-lg-4">
                    <a href="realestate.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/real.jpg" alt="service">
                            </div>
                            
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/property.png" alt="Icon">
                                </div>
                                <h3 class="box-title">Corporate Realestate Services</h3>
                                <p class="service-featured_text">
                                    Property management is a vital part of any real estate business. Without proper management, 
                                    properties won't make money.
                                </p>
                                <div class="link-btn">
                                    Read More<i class="fa-solid fa-arrow-up-right ms-2"></i>
                                </div>
                            </div>
                            
                        </div>
                    </a>
                </div>
                
                <!-- Handy Man -->
                <div class="col-md-6 col-lg-4">
                    <a href="handyman.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/handyman3.jpg" alt="service">
                            </div>
                            
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                <img src="assets/img/icon/handyman.png" alt="Icon">
                                </div>
                                <h3 class="box-title">Handy Man</h3>
                                <p class="service-featured_text">
                                    A handyman, also known as a fixer, handyperson or handyworker, maintenance worker, 
                                    repair worker, or repair technician<br><br>
                                </p>
                                <div class="link-btn">
                                    Read More<i class="fa-solid fa-arrow-up-right ms-2"></i>
                                </div>
                            </div>
                            
                        </div>
                    </a>
                </div>

                <!-- MEP Works -->
                <div class="col-md-6 col-lg-4">
                    <a href="mepworks.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/mep5.jpg" alt="service">
                            </div>
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                <img src="assets/img/icon/mep.png" alt="Icon">
                                </div>
                                <h3 class="box-title">MEP Works</h3>
                                <p class="service-featured_text">
                                    Specialized services for mechanical, electrical, and plumbing systems.
                                    <br><br><br><br>
                                </p>
                                <div class="link-btn">
                                    Read More<i class="fa-solid fa-arrow-up-right ms-2"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Civil / Masonry Works -->
                <div class="col-md-6 col-lg-4">
                    <a href="civil.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/civil4.jpg" alt="service">
                            </div>
                            
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/civil-engineering.png" alt="Icon">
                                </div>
                                <h3 class="box-title">Civil / Masonry Works</h3>
                                <p class="service-featured_text">
                                    Expert services for masonry and civil construction tasks.
                                    <br><br><br>
                                </p>
                                <div class="link-btn">
                                    Read More<i class="fa-solid fa-arrow-up-right ms-2"></i>
                                </div>
                            </div>
                            
                        </div>
                    </a>
                </div>
                

                <!-- Carpentry Works -->
                <div class="col-md-6 col-lg-4">
                    <a href="carpentry.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/carpentry1.jpg" alt="service">
                            </div>
                            
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/service-icon-1-5.svg" alt="Icon">
                                </div>
                                <h3 class="box-title">Carpentry Works</h3>
                                <p class="service-featured_text">
                                    Tailored woodwork solutions for various construction needs.
                                    <br><br><br><br>
                                </p>
                                <div class="link-btn">Read More<i class="fa-solid fa-arrow-up-right ms-2"></i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Landscaping -->
                <div class="col-md-6 col-lg-4">
                    <a href="land.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/land1.jpg" alt="service">
                            </div>
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/planing.png" alt="Icon">
                                </div>
                                <h3 class="box-title">Landscaping</h3>
                                <p class="service-featured_text">
                                    Professional outdoor design and maintenance services.
                                    <br><br><br><br>
                                </p>
                                <div class="link-btn">Read More<i class="fa-solid fa-arrow-up-right ms-2"></i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <a href="cleaning.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/cleaning1.jpg" alt="service">
                            </div>
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                <img src="assets/img/icon/cleaning.png" alt="Icon">
                                </div>
                                <h3 class="box-title">Cleaning</h3>
                                <p class="service-featured_text">
                                    Professional, Reliable, and Thorough Cleaning for Homes and Offices
                                    <br><br><br><br>
                                </p>
                                <div class="link-btn">Read More<i class="fa-solid fa-arrow-up-right ms-2"></i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- AMC -->
                <div class="col-md-6 col-lg-4">
                    <a href="amc.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/amc2.jpg" alt="service">
                            </div>
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/amc.png" alt="Icon">
                                </div>
                                <h3 class="box-title">AMC</h3>
                                <p class="service-featured_text">
                                    Comprehensive Care for Your Property
                                    <br><br><br><br>
                                </p>
                                <div class="link-btn">Read More<i class="fa-solid fa-arrow-up-right ms-2"></i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- 3rd Party Contractor Management -->
                <div class="col-md-6 col-lg-4">
                    <a href="3rdparty.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/contract.jpeg" alt="service">
                            </div>
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/3rd.png" alt="Icon">
                                </div>
                                <h3 class="box-title">3rd Party Contractor Management</h3>
                                <p class="service-featured_text">
                                    Streamlining Your Projects with Expertise
                                    <br><br>
                                </p>
                                <div class="link-btn">Read More<i class="fa-solid fa-arrow-up-right ms-2"></i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Specilized Services -->
                <div class="col-md-6 col-lg-4">
                    <a href="specialservice.php">
                        <div class="service-featured">
                            <div class="service-featured_img">
                                <img src="assets/img/service/spec_service1.jpg" alt="service">
                            </div>
                            
                            <div class="service-featured_content">
                                <div class="service-bg-shape">
                                    <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                                </div>
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/professional-services.png" alt="Icon">
                                </div>
                                <h3 class="box-title">Specilized Services</h3>
                                <p class="service-featured_text">
                                    Tailored Solutions for Your Unique Needs
                                    <br><br><br><br>
                                </p>
                                <div class="link-btn">Read More<i class="fa-solid fa-arrow-up-right ms-2"></i></div>
                            </div>
                            
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <style>
        .service-featured:hover .service-featured_text,
        .service-featured:hover .box-title{
            color: white !important;
        }
    </style>
    
   
<?php
    include 'includes/footer.php'; 
    include 'includes/scripts.php';
?>