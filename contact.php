<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>IETE-RAIT</title>
       
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img heigth=70px; width =70 px ; style="position: relative; left: 10px; bottom: 15px " src="images/iete/ietelogo.jpeg" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="activity1.html">Activities</a></li>
                          
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        

         <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->

        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                           <h3 class="subtitle wow fadeInUp" style="color: #0BB5FF" data-wow-delay=".3s" data-wow-duration="500ms">Contact Us.</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            Fill up the form below , for any queries!
                            </p>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="sendmail.php" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h3 class="subtitle wow fadeInUp" style="color: #0BB5FF" data-wow-delay=".3s" data-wow-duration="500ms">Find Us.</h3>
                           
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4399540892373!2d73.02351191463868!3d19.04438468710611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3db00160053%3A0x95e9ca007676b993!2sDr.+D+Y+Patil&#39;s+Ramrao+Adik+Institute+Of+Technology!5e0!3m2!1sen!2sin!4v1489405852101" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
        </section>






        <!-- 
        ================================================== 
            Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">INTERESTED IN WORKING TOGETHER? ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">If you have any brilliant ideas, projects or want do do something, we are here to provide support and resources...</p>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

 <footer id="footer">
 <div class="container">
                        <div class="col-md-8">
                            <p class="copyright">Copyright © <script type="text/javascript">
                                var d = new Date()
                                document.write(d.getFullYear())
                                </script> . Developed by <a target="_blank" href="https://www.linkedin.com/in/vinitkadam">Vinit Kadam</a> and <a href="#">Sanat Parmar</a>. All Rights Reserved to IETE-RAIT</p>
                        </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/ieterait" target="_blank" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/iete.rait/" target="_blank" class="instagram">
                                    <i class="ion-social-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UCXtWEnnwx4WbZACNy0hVsrw" target="_blank" class="youtube">
                                    <i class="ion-social-youtube"></i>
                                </a>
                            </li>
                           
                            <!-- <li>
                                <a href="https://www.facebook.com/ieterait" target="_blank" class="linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>

            </footer> <!-- /#footer -->
                
        </body>
    </html>