<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CONTRACTORS | We provide a variety of tailored, details-focused, high-quality services to clients across Northern Emirates.</title>
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

    $page = 'contractor';
    ?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper sticky-wrapper zindex " data-bg-src="assets/img/banner/banner12.jpg" data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Contractors</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Contractors</li>
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
            breadcrumbWrapper.style.backgroundImage = "url('assets/img/banner/banner12.jpg')";
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
Team Area  
==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 position-relative">
                    <div class="team-details-thumb me-xl-5">
                        <div class="thumb">
                            <img class="w-100" src="assets/img/normal/contractors.jpg" alt="team image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-details-wrap">
                        <h2 class="team-details-title fw-extrabold mb-2">Join Our Trusted Contractor Network</h2>
                        <!-- <span class="team-details-desig fw-medium">Jr. Engineer</span>
                        <div class="th-social style3 mt-15 mb-20">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                        </div> -->
                        <p class="team-details-text mb-25" style="text-align: justify;">


                            EFFECTIVE FACILITIES MANAGEMENT partners with skilled, qualified, and local contractors to meet the diverse service needs of our clients.
                            Every contractor we work with is fully licensed,
                            insured, and held to the highest standards as outlined in our agreements. We monitor and assess their performance to ensure quality outcomes, 
                            fair compensation, and continued success. The more efficient and effective the job, the greater the rewards for their dedication and hard work.


                            We value the strong relationships we've built with contractors across various fields, 
                            as they are integral to our success. If you’re ready to collaborate with us, 
                            please fill out the form below to begin the qualification process and join our network. We look forward to working with you!.</p>
                        <h3 class="h5 mb-30">Contact Info</h3>
                        <div class="team-details-info-wrap mb-50">
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fa-regular fa-phone"></i></div>
                                <div class="details">
                                    <p class="about-info-title">Phone:</p>
                                    <a class="about-info-link" href="tel:+971123456"> +971 123 456</a>
                                </div>
                            </div>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                <div class="details">
                                    <p class="about-info-title">Email Address</p>
                                    <a class="about-info-link" href="mailto:help@effective.com">help@effective.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="team-experience-wrap mb-50">
                            <h4 class="fw-extrabold">Experience Aria</h4>
                            <p class="mb-30">Roofing experience refers to the knowledge, skills, and expertise gained by a person through their involvement in various roofing projects.</p>
                            <div class="skill-feature">
                                <h5 class="skill-feature_title">Residential Roofing</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;">
                                        <div class="progress-value">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <h5 class="skill-feature_title">Commercial Roofing</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 82%;">
                                        <div class="progress-value">82%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <h5 class="skill-feature_title">Industrial Roofing</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <div class="progress-value">90%</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <form action="mail.php" method="POST" class="th-contact-form ajax-contact p-0">
                            <div class="form-title mb-30">
                                <h4 class="fw-extrabold">Leave a Message</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Full Name" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Company Name" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Email Address" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Phone Number" class="form-control">
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn">Send Message <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>