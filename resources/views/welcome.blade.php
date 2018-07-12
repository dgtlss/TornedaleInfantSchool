@include('App.partials.core.head')
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('App.partials.core.nav')
		@include('App.partials.elements.homeslider')
        
        <!-- About Start -->
        <div class="about-area pt-150 pb-155">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-content">
                            <h2>WELCOME TO <span>Tornedale</span></h2>
                            <p>Tornedale is a community school maintained by the Local Authority (Doncaster MBC). At Tornedale, we work together as a team to provide a welcoming, stimulating, caring environment. We value each individual and the contribution they make to the school community. We believe in mutual respect and support for each other, and have high expectations of work and behaviour. We encourage the healthy development of social and emotional skills and a positive attitude to work.</p>
                            <a class="default-btn" href="about.html">view courses</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="about-img">
                            <img src="img/school/tornedale.png"  width="100%" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
       @include('App.partials.elements.news-three')
        <!-- Notice Start -->
        <section class="notice-area two pt-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-right-wrapper mb-25 pb-25">
                            <h3>TAKE A VIDEO TOUR</h3>
                            <div class="notice-video">
                                <div class="video-icon video-hover">
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=to6Ghf8UL7o">
                                        <i class="zmdi zmdi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-left-wrapper">  
                            <h3>notice board</h3>
                            <div class="notice-left">
                                <div class="single-notice-left mb-23 pb-20">
                                    <h4>5, June 2017</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left hidden-sm mb-23 pb-20">
                                    <h4>4, June 2017</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left pb-70">
                                    <h4>3, June 2017</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left mb-23 pb-20">
                                    <h4>5, June 2017</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left hidden-sm mb-23 pb-20">
                                    <h4>4, June 2017</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left pb-70">
                                    <h4>3, June 2017</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- Notice End -->
        <!-- Event Area Start -->
        <div class="event-area two text-center pt-100 pb-145">
            <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <div class="section-title">
                            <img src="img/icon/section.png" alt="section-title">
                            <h2>UPCOMING EVENTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="event-details.html"><img src="img/event/event1.jpg" alt="event"></a>
                            </div>
                            <div class="event-content text-left">
                                <h3>20 June 2017</h3>
                                <h4><a href="event-details.html">ADVANCE PHP WORKSHOP</a></h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>
                                    <li><i class="fa fa-map-marker"></i>New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-event hidden-sm hidden-xs">
                            <div class="event-img">
                                <a href="event-details.html"><img src="img/event/event3.jpg" alt="event"></a>
                            </div>
                            <div class="event-content text-left">
                                <h3>16 June 2017</h3>
                                <h4><a href="event-details.html">learning english history</a></h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>
                                    <li><i class="fa fa-map-marker"></i>New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="event-details.html"><img src="img/event/event2.jpg" alt="event"></a>
                            </div>
                            <div class="event-content text-left">
                                <h3>18 June 2017</h3>
                                <h4><a href="event-details.html">DIGITAL MARKETING ANALYSIS</a></h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>
                                    <li><i class="fa fa-map-marker"></i>New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-event hidden-sm hidden-xs">
                            <div class="event-img">
                                <a href="event-details.html"><img src="img/event/event3.jpg" alt="event"></a>
                            </div>
                            <div class="event-content text-left">
                                <h3>14 June 2017</h3>
                                <h4><a href="event-details.html">UI & UX DESIGNER MEETUP</a></h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>
                                    <li><i class="fa fa-map-marker"></i>New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Area End -->      
        
        <!-- Subscribe Start -->
        <div class="subscribe-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>subscribe our newsletter</h2>
                            <p>Sign up for updates &amp; information. </p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form"> 
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button> 
                                </div>    
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
        <!-- Footer Start -->
        <footer class="footer-area">           
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="left">Copyright &copy; {{ date ('Y') }} Tornedale Infant School. All Rights Reserved.</p>
                        </div> 
                        <div class="col-xs-6">
                            <p class="right">Website developed by Nullstack Limited.</p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->

        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
