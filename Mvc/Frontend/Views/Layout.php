<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>BonghoaTuyetTrang</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============--> 
        <link type="text/css" rel="stylesheet" href="Assets/Frontend/css/reset.css">
        <link type="text/css" rel="stylesheet" href="Assets/Frontend/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="Assets/Frontend/css/style.css">
        <link type="text/css" rel="stylesheet" href="Assets/Frontend/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="https://66.media.tumblr.com/a62bdaed0c4bbeb5f5f50df4fa460020/tumblr_pz7x4xBUvr1w89qpgo1_1280.jpg">
    </head>
    <body>
        <!--================= loader start ================-->
        <div class="loader-holder">
            <div class="loader-inner loader-vis">
                <div class="loader"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->   
            <header>
                <div class="logo-holder"><a href="index.html" >BonghoaTuyetTrang</a></div>
                <div class="nav-button">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                </div>
            </header>
            <!-- header  end -->
            <!--=============== wrapper ===============-->  
            <div id="wrapper">
                <!--=============== content-holder ===============-->   
                <div class="content-holder scale-bg2">
                    <!--=============== navigation ===============-->
                    <div class="nav-inner isDown">
                        <div class="nav-decor nav-decor-tl"></div>
                        <div class="nav-decor nav-decor-br"></div>
                        <div class="overlay"></div>
                        <nav>
                            <ul>
                                <li class="subnav">
                                    <a href="index.php"  >Home</a>
                                    <!-- General menu scroll navigation -->
                                    <!-- <ul>
                                        <li>
                                            <a href="index.html#sec1" class="custom-scroll-link">About me</a>
                                        </li>
                                        <li>
                                            <a href="index.html#sec2" class="custom-scroll-link">Resume</a>
                                        </li>
                                        <li>
                                            <a href="index.html#sec3" class="custom-scroll-link">Services</a>
                                        </li>
                                        <li>
                                            <a href="index.html#sec4" class="custom-scroll-link">Skills</a>
                                        </li>
                                        <li>
                                            <a href="index.html#sec5" class="custom-scroll-link">Clients</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="#" class="curpage">Work</a></li>
                                <li><a href="#">Contact</a></li>
                                <li class="subnav">

                                    <a href="#">Mang xa hoi</a>
                                    <ul>
                                        <li>
                                            <a href="portfolio2.html">FB</a>
                                        </li>
                                        <li>
                                            <a href="portfolio3.html">TW</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                    <!--=============== wrapper-inner ===============-->                     
                    <div class="wrapper-inner folio-wrap full-width-wrap">
                        <!-- section -->
                        <section class="no-padding">
                            <!-- portfolio filters -->
                            <div class="filter-holder fixed-filter">
                                <div class="gallery-filters">
                                    <ul>
                                        <li>
                                            <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>All</span></a>  
                                        </li>
                                        <li>    
                                            <a href="#" class="gallery-filter " data-filter=".fb"><span>FaceBook</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="gallery-filter" data-filter=".insta"><span>Instagram</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="gallery-filter" data-filter=".tw"><span>Twitter</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- portfolio -->
                            <?php echo $this->view; ?>
                            <!-- portfolio end -->                  
                        </section>
                        <!-- section end -->    
                    </div>
                    <!-- wrapper-inner end  -->
                    <!-- ================footer ==================== -->
                    <div class="height-emulator color-bg"></div>
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- footer social -->
                                    <div class="footer-info">
                                        <h4>Find me</h4>
                                        <div class="footer-social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/ta.anh99" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                <!-- <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li> -->
                                                <li><a href="https://www.instagram.com/anhta.9910/" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                                <!-- <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li> -->
                                                <!-- <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- footer contacts -->
                                    <div class="footer-info">
                                        <h4>Contact</h4>
                                        <ul class="footer-contacts">
                                            <li><a href="#"> <i class="fa fa-phone"></i> +84386642038</a></li>
                                            <li><a href="#"><i class="fa fa-motorcycle"></i> Hà Nội</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i> anhta.9910@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- titter -->
                                    <div class="footer-info">
                                        <h4>My FB</h4>
                                        <div class="twitter-holder">
                                            <div class="twitts">
                                                <div class="twitter-feed">
                                                    <div id="twitter-feed"></div>
                                                </div>
                                            </div>
                                            <div class="customNavigation">
                                                <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                                <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--to top / privacy policy-->
                        <div class="to-top-holder">
                            <div class="container">
                                <p>BonghoaTuyetTrang</p>
                                <div class="to-top"> <i class="fa fa-angle-double-up"></i></div>
                            </div>
                        </div>
                    </footer>
                    <!-- footer end -->
                </div>
                <!-- content-holder end -->
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="Assets/Frontend/js/jquery.min.js"></script>
        <script type="text/javascript" src="Assets/Frontend/js/plugins.js"></script>
        <script type="text/javascript" src="Assets/Frontend/js/scripts.js"></script>
    </body>

</html>