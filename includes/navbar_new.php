<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle" style="height:35px;"><i class="fal fa-times" style="height: 35PX;"></i></button>
        <div class="mobile-logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="Effective"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="index.php">Home</a>
                </li>
                <li><a href="about.php">Who We Are</a></li>
                <li class="menu-item-has-children">
                    <a href="whatwedo.php">What We Do</a>
                    <ul class="sub-menu">
                        <li><a href="realestate.php">CORPORATE REALESTATE SERVICES</a></li>
                        <li><a href="handyman.php">HANDY MAN</a></li>
                        <li><a href="mepworks.php">MEP WORKS</a></li>
                        <li><a href="civil.php">CIVIL / MASONRY WORKS</a></li>
                        <li><a href="carpentry.php">CARPENTRY WORKS</a></li>
                        <li><a href="land.php">LANDSCAPING</a></li>
                        <li><a href="cleaning.php">CLEANING</a></li>
                        <li><a href="amc.php">AMC</a></li>
                        <li><a href="3rdparty.php">3RD PARTY CONTRACTOR MANAGEMENT</a></li>
                        <li><a href="specialservice.php">SPECIALIZED SERVICES</a></li>
                    </ul>
                </li>
                <li><a href="contractor.php">Contractors</a></li>
                <li><a href="career.php">Career</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</div>





<style>.th-menu-toggle {
  width: 56px;
  height: 35px;
  padding: 0;
  font-size: 20px;
  border: none;
  background-color: var(--theme-color);
  color: var(--white-color);
  display: inline-block;
  border-radius: 4px;
}</style>

<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout1">
    <div class="sticky-wrapper">
        
        <!-- Main Menu Area -->
        <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.php"><img src="assets/img/logo.png" alt="Effective" style="width:200px;margin-left:20px;"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block" style="margin-right: 29px;">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">Who We Are</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="whatwedo.php">What We Do</a>
                                        <ul class="sub-menu">
                                            <li><a href="realestate.php">CORPORATE REALESTATE SERVICES</a></li>
                                            <li><a href="handyman.php">HANDY MAN</a></li>
                                            <li><a href="mepworks.php">MEP WORKS</a></li>
                                            <li><a href="civil.php">CIVIL / MASONRY WORKS</a></li>
                                            <li><a href="carpentry.php">CARPENTRY WORKS</a></li>
                                            <li><a href="land.php">LANDSCAPING</a></li>
                                            <li><a href="cleaning.php">CLEANING</a></li>
                                            <li><a href="amc.php">AMC</a></li>
                                            <li><a href="3rdparty.php">3RD PARTY CONTRACTOR MANAGEMENT</a></li>
                                            <li><a href="specialservice.php">SPECIALIZED SERVICES</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contractor.php">Contractors</a></li>
                                    <li><a href="career.php">Career</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <!-- <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <button type="button" class="simple-icon searchBoxToggler"><i class="far fa-search"></i></button>
                                <button type="button" class="simple-icon sideMenuToggler">
                                    <i class="far fa-shopping-cart"></i>
                                    <span class="badge">5</span>
                                </button>
                                <a href="contact.html" class="th-btn">Get a Quote<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>

        <style>
            /* Responsive adjustments */
            @media (max-width: 768px) {
                .menu-area .row {
                    flex-wrap: nowrap;
                    /* Prevent wrapping */
                }

                .logo-img {
                    width: 150px;
                    /* Adjust for smaller screens */
                    margin-left: 10px;
                }

                .th-menu-toggle {
                    margin-right: 10px;
                }

                .header-layout1 .th-menu-toggle {
                    margin-left: auto;
                }
            }
        </style>


</header>