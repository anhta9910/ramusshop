<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<!-- Tieu Long Lanh Kute -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rammus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Fonts======================= -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		
		<!-- Fonts ======================== -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="Assets/Frontend/img/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="Assets/Frontend/css/jquery.countdown.css">
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/bootstrap.min.css">
		<!-- Mobile Menu Slicknav CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/slicknav.css">
		<!-- Font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/font-awesome.min.css">
		<!-- rs-plugin CSS
		============================================ -->			
		<link href="Assets/Frontend/lib/rs-plugin/css/settings.css" rel="stylesheet" />	
		
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/owl.carousel.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/normalize.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/main.css">
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/style.css">
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="Assets/Frontend/css/responsive.css">
		<!-- modernizr js
		============================================ -->
        <script src="Assets/Frontend/js/vendor/modernizr-2.6.2.min.js"></script>
		
    </head>
    <body class="home_1 home_2">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
		
		<?php include "Mvc/Frontend/Views/HeaderView.php"; ?>
		<!--OUR-SERVICE START-->
		<div class="our-service">
			<div class="container">
				<div class="row">
					<div class="service">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<span class="icon"><i class="fa fa-plane"></i></span>
								<div class="text">
									<h2>Miễn phí vận chuyển</h2>
									<p>Miễn phí vận chuyển đổi trả</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<span class="icon"><i class="fa fa-refresh"></i></span>
								<div class="text">
									<h2>Hoàn tiền 100% khi sản phẩm bị lỗi</h2>
									<p>Chúng tôi sẽ hướng dẫn bạn đổi trả</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<span class="icon"><i class="fa fa-comments"></i></span>
								<div class="text">
									<h2>Hỗ trợ Online 24/7  </h2>
									<p>Hỗ trợ trực tiếp giờ hành chính </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--OUR-SERVICE END-->
		
		<div class="slider-and-category">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
					<!-- SAID-BAR START -->
						<?php 
              					//load manual MVC
              				include "Mvc/Frontend/Controllers/CategoryController.php";
              					$obj = new CategoryController();
              					$obj->index();
           				?>	
           				</div>		
					<div class="col-lg-9 col-md-9">
					<!-- SLIDER_AREA START-->
						<div class="slider">
							<div class="fullwidthbanner-container" >
								<div class="fullwidthbanner2">
									<ul>
										<!-- SLIDER_LAYOUT ONE START-->
										<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
											<img src="Assets/Frontend/img/slider/slider.jpg" alt="slide" >
											<div class="tp-caption large_black sfr"
												data-x="140"
												data-y="100"
												data-speed="1100"
												data-start="1500"
												data-easing="easeInOutBack"											
												style="font-size: 18px; font-weight: 400; text-transform: normal; color: #ffaa31;font-family: Playfair Display;font-style:italic">
													Giảm giá lên đến 50%
											</div>
											<div class="tp-caption large_black sfr"
												data-x="170"
												data-y="120"
												data-speed="1100"
												data-start="1500"
												data-easing="easeInOutBack"											
												style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
													<img src="Assets/Frontend/img/slider/slider-border.jpg" alt="" />
											</div>
											<div class="tp-caption large_black sfr"
												data-x="70"
												data-y="140"
												data-speed="1100"
												data-start="2000"
												data-easing="easeInOutBack"
													style="font-family: Open Sans; font-size: 54px; font-weight: 700;text-transform: uppercase; color: #fff;text-align:center;line-height:60px">
													Cho sản phẩm <br> nam giới
											</div>
											<div class="tp-caption large_black sfr"
												data-x="170"
												data-y="260"
												data-speed="1100"
												data-start="2300"
												data-easing="easeInOutBack"											
												style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
													<img src="Assets/Frontend/img/slider/slider-border.jpg" alt="" />
											</div>
											<div class="tp-caption large_black sfr"
											data-x="30"
											data-y="300" 
											data-speed="1100"
											data-start="2700"
											data-easing="easeInOutBack"
												style="font-family: Open Sans; font-size: 14px; font-weight: 300; color: #FFF;line-height:25px;text-transform: normal;text-align:center">
												Cập da được làm bằng chất liệu cao cấp <br /> Giúp nâng cao trải nghiệm của người dùng 
											</div>
											<div class="tp-caption lfb carousel-caption-inner"
											data-x="150"
											data-y="370"
											data-speed="1300"
											data-start="3000"
											data-easing="easeInOutBack" 
												style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #F3F3F3;">
												<a href="#" class="s-btn" style="background: none;color: #fff;display: block;padding: 12px 28px;border:2px solid #fff">Mua ngay</a>
											</div>
										</li>
										<!-- SLIDER_LAYOUT ONE END-->
										<!-- SLIDER_LAYOUT TWO START-->
										<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
											<img src="Assets/Frontend/img/slider/slider.jpg" alt="slide" >
											<div class="tp-caption large_black sfr"
												data-x="140"
												data-y="100"
												data-speed="1100"
												data-start="1500"
												data-easing="easeInOutBack"											
												style="font-size: 18px; font-weight: 400; text-transform: normal; color: #ffaa31;font-family: Playfair Display;font-style:italic">
													Giảm giá lên đến 50 %
											</div>
											<div class="tp-caption large_black sfr"
												data-x="170"
												data-y="120"
												data-speed="1100"
												data-start="1500"
												data-easing="easeInOutBack"											
												style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
													<img src="Assets/Frontend/img/slider/slider-border.jpg" alt="" />
											</div>
											<div class="tp-caption large_black sfr"
												data-x="70"
												data-y="140"
												data-speed="1100"
												data-start="2000"
												data-easing="easeInOutBack"
													style="font-family: Open Sans; font-size: 54px; font-weight: 700;text-transform: uppercase; color: #fff;text-align:center;line-height:60px">
													Cặp da <br /> cho phái mạnh
											</div>
											<div class="tp-caption large_black sfr"
												data-x="170"
												data-y="260"
												data-speed="1100"
												data-start="2300"
												data-easing="easeInOutBack"											
												style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
													<img src="Assets/Frontend/img/slider/slider-border.jpg" alt="" />
											</div>
											<div class="tp-caption large_black sfr"
											data-x="30"
											data-y="300" 
											data-speed="1100"
											data-start="2700"
											data-easing="easeInOutBack"
												style="font-family: Open Sans; font-size: 14px; font-weight: 300; color: #FFF;line-height:25px;text-transform: normal;text-align:center">
												Cập da được làm bằng chất liệu cao cấp <br /> Giúp nâng cao trải nghiệm của người dùng 
											</div>
											<div class="tp-caption lfb carousel-caption-inner"
											data-x="150"
											data-y="370"
											data-speed="1300"
											data-start="3000"
											data-easing="easeInOutBack" 
												style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #F3F3F3;">
												<a href="#" class="s-btn" style="background: none;color: #fff;display: block;padding: 12px 28px;border:2px solid #fff">Mua ngay</a>
											</div>
										</li>
										<!-- SLIDER_LAYOUT TWO END-->
									</ul>
								</div>
							</div>
						</div>
						<!-- SLIDER_AREA END-->
					</div>					
				</div>
			</div>
		</div>
		<!-- MAINCONTAIN-AREA START-->
		<?php echo $this->view; ?>
		<!-- MAINCONTAIN-AREA END-->
		
		<!-- LOGO-BAND-AREA START-->
		<div class="logo-band-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 logo-band">
						<h3 class="area-heading">Thương hiệu</h3>
						<div class="logo-area">
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_1.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_2.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_3.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_4.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_5.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_2.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_4.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_1.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
							<!-- SINGLE-LOGO START-->
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="Assets/Frontend/img/logo_band/logo_3.png" alt="Logo" />
									</div>
								</a>
							</div>
							<!-- SINGLE-LOGO END-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- LOGO-BAND-AREA END-->
		
		<!-- FOOTER-AREA START-->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="footer">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-5">
									<!-- FOOTER-LOGO START-->
									<div class="footer-logo">
										<a href="index.php"><img alt="" src="Assets/Frontend/img/logo_footer_1.png"></a>
										<p>Chúng tôi luôn muốn mang đến cho khách hàng sản phẩm chất lượng tốt nhất  <a href="facebook.com">Readmore>></a></p>
									</div>
									<!-- FOOTER-LOGO END-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4 hidden-sm">
									<!-- INFORMATION START-->
									<div class="information">
										<h3>Thông tin</h3>
										<ul>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Sản phẩm đặc biết
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Sản phẩm mới 
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Sản phẩm bán chạy
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Câu chuyện của chúng tôi 
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Liên hệ với chúng tôi 
												</a>
											</li>
										</ul>
									</div>
									<!-- INFORMATION END-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
								<!-- MYACCOUNT START-->
									
								</div>
								
								<!-- JOIN-US AREA START-->
								<div class="col-lg-3 col-md-3 col-sm-4">
									<div class="join-us">
										
										<span>Hãy theo dõi Ramus ngay bây giờ!</span>
									</div>
									<div class="social-icon">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- JOIN-US AREA END-->
							</div>
							<!-- ROW END-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER-AREA START-->
		<div class="footer-bottum-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="footer-bottum">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<!-- FOOTER-BOTTUM-MENU START-->
									<div class="footer-bottum-menu">
										<ul>
											<li><a href="#">Câu chuyện của chúng tôi </a></li>
											<li><a href="#">Liên hệ </a></li>
											<li><a href="#">Chính sách bảo hành và bán hàng</a></li>
											<li><a href="#">Tìm hiểu về chúng tối </a></li>
											<li><a href="#">Địa chỉ : Hà Nội</a></li>
										</ul>
									</div>
									<!-- FOOTER-BOTTUM-MENU END-->
								</div>
								<div class="col-lg-6 col-md-6">
									<!-- CARD-AREA START-->
									<div class="card-area">
										<a href="#"><img src="Assets/Frontend/img/paypal.png" alt="" /></a>
										<a href="#"><img src="Assets/Frontend/img/amazon.png" alt="" /></a>
										<a href="#"><img src="Assets/Frontend/img/skrill.png" alt="" /></a>
										<a href="#"><img src="Assets/Frontend/img/visa.png" alt="" /></a>
										<a href="#"><img src="Assets/Frontend/img/discover.png" alt="" /></a>
										<a href="#"><img src="Assets/Frontend/img/master.png" alt="" /></a>
									</div>
									<!-- CARD-AREA END-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		
		
		<!-- jquery-1.11.3.min js -->
        <script src="Assets/Frontend/js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap.min js -->
        <script src="Assets/Frontend/js/bootstrap.min.js"></script>
		<!-- FILTER_PRICE js -->
        <script src="Assets/Frontend/js/jquery-ui.min.js"></script>
		<!-- owl.carousel.min js -->
        <script src="Assets/Frontend/js/owl.carousel.min.js"></script>
		<!-- jquery.slicknav.min js -->
        <script src="Assets/Frontend/js/jquery.slicknav.min.js"></script>
		<!-- plugins js -->
        <script src="Assets/Frontend/js/plugins.js"></script>
		<!-- jquery.scrollUp js -->
        <script src="Assets/Frontend/js/jquery.scrollUp.min.js"></script>
		<!-- RS Lib js -->		
		<script src="Assets/Frontend/lib/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="Assets/Frontend/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="Assets/Frontend/lib/rs-plugin/rs.home.js"></script>
		
		<!-- Countdown JS-->
		<script src="Assets/Frontend/js/jquery.plugin.min.js"></script>
		<script src="Assets/Frontend/js/jquery.countdown.min.js"></script>
		<!-- main JS -->
		 <script src="Assets/Frontend/js/main.js"></script>
    </body>

<!-- Tieu Long Lanh Kute -->
</html>
