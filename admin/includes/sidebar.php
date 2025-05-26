

<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="">
                    <!--
                Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
                Tip 2: you can also add an image using data-image tag
                Tip 3: you can change the color of the sidebar with data-background-color="white | black"
            -->

            <div class="logo">
                <a href="" class="simple-text logo-mini">
                    
                </a>

                <a href="" class="simple-text logo-normal">
                    EFFECTIVE
                </a>
            </div>

            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="assets/img/profile.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                               EFFECTIVE
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="login.php">
                                        <span class="sidebar-mini"> L </span>
                                        <span class="sidebar-normal"> Logout </span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

                    <li class="<?php if( ($cur_page == 'slider.php') ) {echo 'active';} ?>">
                        <a href="slider.php">
                        <i class="material-icons">apps</i>
                            <p>Slider</p>
                        </a>
                    </li>

                    <li class="<?php if( ($cur_page == 'logo.php') ) {echo 'active';} ?>">
                        <a href="logo.php">
                            <i class="material-icons">content_paste</i>
                            <p>Logo</p>
                        </a>
                    </li>

                    <li class="<?php if( ($cur_page == 'home_page.php') ) {echo 'active';} ?>">
                        <a href="home_page.php">
                            <i class="material-icons">dashboard</i>
                            <p> Home Page </p>
                        </a>
                    </li>

                    <li class="<?php if( ($cur_page == 'about_page.php') ) {echo 'active';} ?>">
                        <a href="about_page.php">
                            <i class="material-icons">date_range</i>
                            <p> About Us Page </p>
                        </a>
                    </li>



                    


                    <li class="<?php if( ($cur_page == 'services.php') ) {echo 'active';} ?>">
                        <a href="services.php">
                            <i class="material-icons">timeline</i>
                            <p> Services Page </p>
                        </a>
                    </li>

                    <li class="<?php if( ($cur_page == 'gallery.php') ) {echo 'active';} ?>">
                        <a href="gallery.php">
                            <i class="material-icons">widgets</i>
                            <p> Portfolio </p>
                        </a>
                    </li>


                    <li class="<?php if( ($cur_page == 'contact_page.php') ) {echo 'active';} ?>">
                        <a href="contact_page.php">
                            <i class="material-icons">apps</i>
                            <p> Contact Page </p>
                        </a>
                    </li>


                   

                    <li class="<?php if( ($cur_page == 'socialmedia.php') ) {echo 'active';} ?>">
                        <a href="socialmedia.php">
                            <i class="material-icons">widgets</i>
                            <p>Social Media </p>
                        </a>
                    </li>

                    <li class="<?php if( ($cur_page == 'testimonials.php') ) {echo 'active';} ?>">
                        <a href="testimonials.php">
                            <i class="material-icons">grid_on</i>
                            <p>Testimonials </p>
                        </a>
                    </li>


                    <li class="<?php if( ($cur_page == 'footer.php') ) {echo 'active';} ?>">
                        <a href="footer.php">
                            <i class="material-icons">content_paste</i>
                            <p>Footer </p>
                        </a>
                    </li>



                    
                    
    

                </ul>
            </div>
        </div>