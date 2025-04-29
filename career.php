<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Careers | Effective Facilities Management | We provide a variety of tailored, details-focused, high-quality services to clients across Northern Emirates.</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="Ruffer - Roof Construction & Roofing Service HTML Template">
    <meta name="keywords" content="Ruffer - Roof Construction & Roofing Service HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    
    <?php
        include 'includes/header.php'; 
        // include 'includes/navbar.php';
        include 'includes/navbar_new.php';
        include 'includes/whatsapp.php';
        // include 'includes/breadcrumber.php';
        $page='career';
    ?>

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/banner/careers1.jpg" data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Career</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 
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
                breadcrumbWrapper.style.backgroundImage = "url('assets/img/banner/careers1.jpg')";
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
        display: none;
    }
    </style> -->
    <!--==============================
    Contact Area  
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pe-xxl-5 mb-30 mb-xl-0">
                    <div class="title-area mb-25 text-xl-start text-center">
                        <span class="sub-title">Want to join us</span>
                        <h2 class="sec-title">Want To Be A Part Of Effective Facilities Management</h2>
                    </div>
                    <p class="mt-n2 mb-45 text-xl-start text-center">
                        Here at Effective Facilities Management, we are always on the look 
                        out for committed, talented and motivated individuals to join our team. If you are 
                        interested in joining Effective Facilities Management, please forward your CV to us, 
                        stating the area of our organisation you are interested in joining. 
                    </p>
                    <!-- <div class="row justify-content-center gy-30">
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="contact-feature">
                                <div class="icon-btn">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p class="contact-feature_label">Email Address</p>
                                    <a href="mailto:needhelp@effective.com" class="contact-feature_link">needhelp@effective.com</a>
                                    <a href="tel:+971123456" class="contact-feature_link">+971 123 456</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="contact-feature">
                                <div class="icon-btn">
                                    <i class="far fa-location-dot"></i>
                                </div>
                                <div class="media-body">
                                    <p class="contact-feature_label">Office Location</p>
                                    <a href="#" class="contact-feature_link">UAE</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-xl-6 ps-xl-4">
                    <form action="mail.php" method="POST" class="th-contact-form bg-smoke ajax-contact">
                        <div class="form-title">
                            <h3 class="blog-inner-title h5">Send Message</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Full Name" class="form-control style-white">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Email Address" class="form-control style-white">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Phone Number" class="form-control style-white">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Position Applying For" class="form-control style-white">
                            </div>
                            <div class="col-12 form-group mb-0">
                                <p>Upload Your CV</p>
                                <input type="file" accept="image/*">
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn">Submit your CV <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


<?php
    include 'includes/footer.php'; 
    include 'includes/scripts.php';
?>