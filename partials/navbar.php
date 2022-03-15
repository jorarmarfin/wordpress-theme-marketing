<div class="header-column justify-content-end">
    <div class="header-row">
        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
            <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                <?php 
                    if(has_nav_menu( 'mainmenu' )){
                        wp_nav_menu( array(
                                'theme_location'        =>'mainmenu',
                                'container'             => 'nav',
                                'container_class'       => 'collapse',
                                'menu_id'               => 'mainNav',
                                'menu_class'=>'nav nav-pills',
                                'items_warp'=>'<ul">%3$s<ul>'
                        )) ;
                    }
                ?>
                
            </div>
        </div>
        <ul class="header-social-icons social-icons social-icons-clean social-icons-medium ms-0 ms-xl-3 d-none d-md-inline-flex">
            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <a href="tel:+1234567890" class="font-weight-semibold text-color-dark text-color-hover-primary text-decoration-none custom-font-size-2 ps-1 ms-lg-3 ms-xl-4">(800) 123-4567</a>
        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
            </button>
    </div>
</div>
