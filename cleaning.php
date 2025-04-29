<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cleaning | Effective is the leading facility management company that provides maintenance expertise </title>
    <meta name="author" content="">
    <meta name="description" content="Effective is the leading facility management company that provides maintenance expertise, back-office operations, servicing UAE and nearby areas. Contact us today!" />
    <meta name="keywords" content="#">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="stylesheet" href="assets/css/services.css">

    <?php
        include 'includes/header.php';
        // include 'includes/navbar.php';

        include 'includes/navbar_new.php';
        include 'includes/whatsapp.php';
        // include 'includes/breadcrumber.php';
        $page = 'Cleaning';
    ?>


    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper sticky-wrapper zindex " data-bg-src="assets/img/banner/cleaning1.jpg" data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Cleaning</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="whatwedo.php">Services</a></li>
                    <li>Cleaning</li>
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
                breadcrumbWrapper.style.backgroundImage = "url('assets/img/banner/cleaning1.jpg')";
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



    <section class=" space handyman-services">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="image-content">
                        <img src="assets/img/service/cleaning1.jpg" alt="Corporate Real Estate Service" class="img-fluid">
                    </div>
                </div>
                <!-- Left Side: Text Content -->
                <div class="col-lg-6">
                    <div class="text-content">
                        <h2 class="team-details-title fw-extrabold mb-2">Cleaning Services</h2>
                        <h5>Professional, Reliable, and Thorough Cleaning for Homes and Offices</h5>

                        <!-- <h5>Your Go-To Solution for Quick, Reliable, and Professional Repairs</h5> -->

                        <p class="team-details-text mb-25" style="text-align: justify;">At EFM, we understand that cleanliness is essential for creating a healthy,
                            comfortable, and inviting environment. Whether it's your home, office,
                            or commercial property, our professional cleaning services are tailored to meet your unique needs, providing the highest level of cleanliness and hygiene.
                            Our experienced team uses top-quality cleaning products and equipment to ensure your space is spotless, sanitized, and well-maintained.
                        </p>

                    </div>
                </div>
                <!-- Right Side: Image Content -->

            </div>
        </div>
    </section>

    <section class="space" data-bg-src="assets/img/bg/service5-bg.png" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-area"><span class="sub-title">WHY CHOOSE US</span>
                        <h2 class="sec-title">Why Choose Our Cleaning Services?</h2>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end align-self-center">
                    <div class="arrow-wrap style3 mb-lg-0 mb-30">
                        <button style="margin-left: 150px;" data-slick-prev="#service-slider5" class="slick-arrow slick-prev">
                            <i class="fa-regular fa-arrow-left-long"></i>
                        </button>
                        <button style="margin-right: 150px;" data-slick-next="#service-slider5" class="slick-arrow slick-next">
                            <i class="fa-regular fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="service-slider5" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-dollar-sign service-icon"></i>
                            <h3 class="box-title"><a href="#">Experienced & Trained Team:</a></h3>
                            <p class="service-card_text">Our cleaning professionals are trained to provide exceptional cleaning services, paying attention to every detail to ensure your space is spotless.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-tools service-icon"></i>
                            <h3 class="box-title"><a href="#">Customizable Solutions:</a></h3>
                            <p class="service-card_text">We offer flexible cleaning plans tailored to meet your specific needs and schedule, ensuring the right services for your property.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-user-cog service-icon"></i>
                            <h3 class="box-title"><a href="#">High-Quality Equipment & Products:</a></h3>
                            <p class="service-card_text pt-5">We use top-of-the-line cleaning tools and eco-friendly products to achieve the best results with minimal environmental impact.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-clock service-icon"></i>
                            <h3 class="box-title"><a href="#">Consistent Results:</a></h3>
                            <p class="service-card_text">We maintain high standards of cleanliness and reliability, ensuring that you receive consistent, excellent service every time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card style2" style="min-height: 450px;">
                        <div class="service-content">
                            <i class="fa-solid fa-shield-alt service-icon"></i>
                            <h3 class="box-title"><a href="#">Trusted & Reliable:</a></h3>
                            <p class="service-card_text">Our team is fully insured, background-checked, and trusted by many customers for providing safe, dependable, and trustworthy cleaning services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="space services-section">
        <div class="container">
            <h2 class="services-title">Our Cleaning Services Include:</h2>
            <div class="services-row pt-3">
                <div class="row gy-30">

                    <!-- Residential Cleaning Services -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 964px;">
                            <div class="service-bg-shape">
                                <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                            </div>
                            <div class="service-box_content">
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/cleaning.png" alt="Icon">
                                    <span class="dots"></span>
                                </div>
                                <h3 class="box-title"><a href="#" tabindex="0">Residential Cleaning Services</a></h3>
                                <p class="service-box_text">Your home is your sanctuary, and we want to help keep it clean, comfortable, and welcoming. Our residential cleaning services are designed to keep your living spaces fresh, organized, and hygienic.</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Regular Cleaning:</strong> Routine cleaning services that cover dusting, vacuuming, mopping, and sanitizing all rooms in your home.</li>
                                    <li class="pt-15"><strong>Deep Cleaning:</strong> A comprehensive cleaning service that targets hard-to-reach areas, including baseboards, windows, behind appliances, and other spots that are often overlooked in regular cleaning.</li>
                                    <li class="pt-15"><strong>Move-In/Move-Out Cleaning:</strong> Thorough cleaning services to prepare a home for new occupants or to ensure your old home is spotless after moving out.</li>
                                    <li class="pt-15"><strong>Post-Construction Cleaning:</strong> Cleaning up after a renovation or construction project to remove debris, dust, and other messes left behind.</li>
                                    <li class="pt-15"><strong>Specialized Cleaning:</strong> Services for specific needs such as cleaning carpets, upholstery, and windows or for homes with pets or allergies.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Residential Cleaning Services end -->

                    <!-- Commercial Cleaning Services -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 964px;">
                            <div class="service-bg-shape">
                                <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                            </div>
                            <div class="service-box_content">
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/vacuum-cleaner.png" alt="Icon">
                                    <span class="dots"></span>
                                </div>
                                <h3 class="box-title"><a href="#" tabindex="0">Commercial Cleaning Services</a></h3>
                                <p class="service-box_text">A clean and well-maintained office or business space not only enhances productivity but also creates a professional environment for employees and clients. Our commercial cleaning services are customized to meet the needs of your business.</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Office Cleaning:</strong> Routine office cleaning, including dusting, vacuuming, trash removal, and disinfecting workstations, kitchens, and common areas.</li>
                                    <li class="pt-15"><strong>Retail & Store Cleaning:</strong> Maintaining a clean, inviting environment for customers with services such as floor cleaning, window washing, and shelf sanitization.</li>
                                    <li class="pt-15"><strong>Medical & Healthcare Facility Cleaning:</strong> Specialized cleaning for medical offices, clinics, and hospitals, using sanitizing products to ensure the highest standards of cleanliness and safety.</li>
                                    <li class="pt-15"><strong>Industrial & Warehouse Cleaning:</strong> Cleaning of industrial spaces, including warehouses, factories, and distribution centers, to ensure a safe and organized working environment.</li>
                                    <li class="pt-15"><strong>Post-Event Cleaning:</strong> Thorough cleaning after corporate events, conferences, or parties to restore the space to its original state.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Commercial Cleaning Services end -->

                    <!-- Specialized Cleaning Services -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 964px;">
                            <div class="service-bg-shape">
                                <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                            </div>
                            <div class="service-box_content">
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/cleaning-cart.png" alt="Icon">
                                    <span class="dots"></span>
                                </div>
                                <h3 class="box-title"><a href="#" tabindex="0">Specialized Cleaning Services</a></h3>
                                <p class="service-box_text">We provide specialized cleaning services for unique spaces and challenging cleaning tasks, using advanced techniques and equipment to achieve superior results.</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Carpet & Upholstery Cleaning:</strong> Deep cleaning to remove stains, dirt, and allergens from carpets and upholstered furniture, prolonging their life and appearance.</li>
                                    <li class="pt-15"><strong>Window Cleaning:</strong> Streak-free window cleaning for both interior and exterior windows to enhance the brightness of your space.</li>
                                    <li class="pt-15"><strong>Pressure Washing:</strong> Powerful cleaning of outdoor surfaces such as driveways, patios, and building exteriors to remove dirt, grime, and stains.</li>
                                    <li class="pt-15"><strong>Floor Care:</strong> Professional cleaning and polishing of various floor types including hardwood, tile, and vinyl to keep them looking pristine and extend their lifespan.</li>
                                    <li class="pt-15"><strong>Air Duct Cleaning:</strong> Cleaning of HVAC systems to remove dust, debris, and allergens, improving indoor air quality and system efficiency.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Specialized Cleaning Services end -->

                    <!-- Green Cleaning Services -->
                    <div class="col-lg-6">
                        <div class="service-box" style="min-height: 964px;">
                            <div class="service-bg-shape">
                                <img src="assets/img/service/service_box_shape1.jpg" alt="img">
                            </div>
                            <div class="service-box_content">
                                <div class="service-default-icon">
                                    <img src="assets/img/icon/cleaning_2.png" alt="Icon">
                                    <span class="dots"></span>
                                </div>
                                <h3 class="box-title"><a href="#" tabindex="0">Green Cleaning Services</a></h3>
                                <p class="service-box_text">For environmentally conscious customers, we offer green cleaning services that use eco-friendly cleaning products and practices to minimize harm to the environment while ensuring a thorough clean.</p>
                                <ul class="service-list pt-3">
                                    <li class="pt-15"><strong>Eco-Friendly Products:</strong> Non-toxic, biodegradable, and sustainable cleaning products that are safe for you, your family, and the planet.</li>
                                    <li class="pt-15"><strong>Sustainable Practices:</strong> Water-saving methods and energy-efficient equipment to reduce the environmental impact of our cleaning services.</li>
                                    <li class="pt-15"><strong>Pet-Friendly Cleaning:</strong> Use of natural, non-toxic cleaning products that are safe for your pets and family members.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Green Cleaning Services end -->

                </div>
            </div>
        </div>
    </section>





    <section class="amc-benefits">
        <div class="container">
            <h2 class="section-title">Benefits of Professional Cleaning</h2>
            <div class="benefit-cards">
                <div class="benefit-card">
                    <div class="card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="card-title pt-15">Time-Saving</h3>
                    <p class="card-description pt-15">Professional cleaning frees up your time, so you can focus on your family, work, or business, while we take care of the cleaning.</p>
                </div>
                <div class="benefit-card">
                    <div class="card-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="card-title pt-15">Healthier Environment</h3>
                    <p class="card-description pt-15">Regular professional cleaning reduces allergens, bacteria, and mold, promoting a healthier environment for your family or employees.</p>
                </div>
                <div class="benefit-card">
                    <div class="card-icon">
                        <i class="fas fa-brush"></i>
                    </div>
                    <h3 class="card-title pt-15">Improved Aesthetics</h3>
                    <p class="card-description pt-15">A clean space looks better and creates a positive impression on guests, clients, and employees.</p>
                </div>
                <div class="benefit-card">
                    <div class="card-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="card-title pt-15">Increased Longevity</h3>
                    <p class="card-description pt-15">Regular cleaning helps preserve your furniture, carpets, and surfaces, extending their lifespan and saving you money in the long term.</p>
                </div>
            </div>
        </div>
    </section>
    <style>
    </style>



    <section class="our-process space bottom">
        <div class="container">
            <h2 class="section-title">Our Process</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3 class="pt-15">Consultation & Customization</h3>
                    <p class="pt-15">We start by discussing your cleaning needs, frequency, and any specific requirements. Based on this, we design a cleaning plan that suits your lifestyle or business operations.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3 class="pt-15">Cleaning Plan Execution</h3>
                    <p class="pt-15">Our team will arrive on time, equipped with the necessary tools and products, and perform the cleaning services as outlined in your plan.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3 class="pt-15">Inspection & Quality Control</h3>
                    <p class="pt-15">We carefully inspect the results to ensure that every corner of your space meets our high standards.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3 class="pt-15">Feedback & Adjustments</h3>
                    <p class="pt-15">We value your feedback and make any necessary adjustments to ensure that you’re fully satisfied with the cleaning services provided.</p>
                </div>
                <div class="process-step1">
                </div>
                <div class="process-step1">
                </div>
            </div>
        </div>
    </section>












    <section class="cta-area-2 space darker-bg" data-bg-src="assets/img/bg/cta-bg3.jpg">
        <div class="container z-index-common">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="title-area mb-40">
                        <!-- <span class="sub-title style2">offers both roof leak & roof repair services</span> -->
                        <h2 class="sec-title text-white">Contact Us for Your Cleaning Needs</h2>
                        <p class="section-description">
                            At EFM, we are committed to delivering superior cleaning services tailored to your specific needs.
                            Whether you need routine home cleaning, office cleaning, or specialized services, our professional team is here to help.
                        </p>
                    </div>
                    <a href="contact.php" class="th-btn style3">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>





    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>