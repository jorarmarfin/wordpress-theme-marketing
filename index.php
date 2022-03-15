<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://google.com
 *
 * @package WordPress
 * 
 * @since Marketing 1.0
 */
get_header(); ?>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">

    <div class="body">
        <header id="header" class="header-effect-shrink header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body header-body-bottom-border border-top-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="demo-startup-agency.html">
                                        <img src="wp-content/themes/marketingtheme/assets/img/demos/startup-agency/logo.png" class="img-fluid" width="123" height="32" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php get_template_part( 'partials/navbar' ); ?>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            <?php get_template_part( 'partials/myhome' ); ?>
            <?php get_template_part( 'partials/aboutus' ); ?>
            <?php get_template_part( 'partials/team' ); ?>
            <?php get_template_part( 'partials/works' ); ?>
            <?php get_template_part( 'partials/pricing' ); ?>
            <?php get_template_part( 'partials/blog' ); ?>
        </div>

        <footer id="footer" class="border-0 bg-dark pt-4 mt-0" data-spy-offset="15">
            <div class="custom-svg-wrapper-4 pb-5">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1667 581" data-plugin-float-element-svg="true">
						<g data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
							<circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="39" cy="315" r="17"/>
							<circle fill="#222529" cx="38.69" cy="315.31" r="15.43"/>
						</g>
						<g data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
							<circle class="custom-svg-fill-color-secondary" fill="#5349FF" cx="257" cy="545" r="4"/>
						</g>
						<g data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
							<circle fill="#333539" cx="501.5" cy="304.5" r="10.5"/>
						</g>
						<g data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
							<circle class="custom-svg-fill-color-secondary" fill="#5349FF" cx="738" cy="36" r="6"/>
						</g>
						<g data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
							<circle class="custom-svg-fill-color-secondary" fill="#5349FF" cx="1630" cy="368" r="6"/>
						</g>
					</svg>
                <div class="container mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-lg-6 text-center pb-3 pb-lg-0 mb-5 mb-lg-0">
                            <span class="d-block text-color-grey positive-ls-2 font-weight-normal custom-font-size-2 text-color-light opacity-6 mb-1">GET IN TOUCH</span>
                            <h2 class="font-weight-bold text-color-light text-10 mb-5">Contact Us</h2>
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="row pb-5 mb-5">
                                        <div class="col">
                                            <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                                <img class="icon-animated" width="55" src="wp-content/themes/marketingtheme/assets/img/demos/startup-agency/icons/icon-location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-3'}" />
                                                <h4 class="font-weight-bold text-color-light text-5 mb-0">Address</h4>
                                                <p class="text-4 text-color-light opacity-5 font-weight-light mb-0">123 Street Name, City, England</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                                <img class="icon-animated" width="55" src="wp-content/themes/marketingtheme/assets/img/demos/startup-agency/icons/icon-mail.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mb-3'}" />
                                                <h4 class="font-weight-bold text-color-light text-5 mb-0">E-mail Address</h4>
                                                <a href="mailto:email@domain.com" class="text-4 text-color-light text-color-hover-primary opacity-5 font-weight-light mb-0">porto@portotheme.com</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6 pt-5">

                                    <div class="row pb-5 mb-5">
                                        <div class="col">
                                            <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                                <img class="icon-animated" width="55" src="wp-content/themes/marketingtheme/assets/img/demos/startup-agency/icons/icon-phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mb-3'}" />
                                                <h4 class="font-weight-bold text-color-light text-5 mb-0">Phone Number</h4>
                                                <a href="tel:+1234567890" class="text-4 text-color-light text-color-hover-primary opacity-5 font-weight-light mb-0">(800) 123-4567</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                                <img class="icon-animated" width="55" src="wp-content/themes/marketingtheme/assets/img/demos/startup-agency/icons/icon-calendar.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-3'}" />
                                                <h4 class="font-weight-bold text-color-light text-5 mb-0">Working Days/Hours</h4>
                                                <p class="text-4 text-color-light opacity-5 font-weight-light mb-0">Mon - Sun / 9:00AM - 8:00PM</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <span class="d-block text-color-grey positive-ls-2 font-weight-normal custom-font-size-2 text-color-light opacity-6 text-center mb-1">CONTACT FORM</span>
                            <h2 class="font-weight-bold text-10 text-center pb-3 mb-4">Send a Message</h2>
                            <div class="row">
                                <div class="col">

                                    <form class="contact-form custom-form-style-1 form-errors-light" action="php/contact-form.php" method="POST">
                                        <div class="contact-form-success alert alert-success d-none mt-4">
                                            <strong>Success!</strong> Your message has been sent to us.
                                        </div>

                                        <div class="contact-form-error alert alert-danger d-none mt-4">
                                            <strong>Error!</strong> There was an error sending your message.
                                            <span class="mail-error-message text-1 d-block"></span>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col">
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col text-center">
                                                <input type="submit" value="Send Message" class="btn btn-gradient text-3 font-weight-bold px-5 py-3" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright bg-dark mt-5 pb-5">
                <div class="container footer-top-light-border pt-4">
                    <div class="row">
                        <div class="col">
                            <p class="text-center text-color-light opacity-5">Porto © 2020. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Core JavaScript Files -->
	<?php get_template_part( 'partials/core-javascript' ); ?>

</body>

</html>