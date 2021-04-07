<?php 
	//load file layout
	$this->layout = "Mvc/Frontend/Views/Layout_trangchu.php";
 ?>
 <div class="maincontain-area">
			<div class="container">
				<div class="row">
					<div class="maincontain">
						<div class="col-lg-3 col-md-3">
						<div class="row">
								<div class="col-lg-12 col-md-12">
								
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12">
								
								</div>
							</div>
							<!-- Special Product End -->
							<!-- OFFER_AREA START-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<!-- OFFER_AREA START-->
									<div class="offer_area">
										<div class="offer_img">
											<img src="Assets/Frontend/img/offer-img.jpg" alt="Offer" />
											<div class="offer-text">
												<h2>Giảm</h2>
												<p>lên đến</p>
												<h2 class="amout">30</h2>
											</div>
										</div>
										<div class="news-letter">
											<h2>Nhận thông tin mới nhất</h2>
											<form action="#">
												<span class="input-box">
													<i class="fa fa-envelope"></i><input type="text" name="Email" placeholder="Email"/>
												</span>
												<input type="button" value="Send" />
											</form>
										</div>
									</div>
									<!-- OFFER_AREA END-->
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<!--FEATURED PRODUCT START-->
							<div class="row">
								<!--FEATURED-PRODUCT-AREA START-->
								<div class="featured-product-area">
									<h3 class="area-heading">Sản Phẩm Hot</h3>
									<div class="featured-product-corusol">
										<?php foreach($hotProduct as $rows): ?>
										<div class="col-lg-4 col-md-4">
											<!--SINGLE-FEATURED-PRODUCT START-->
											<div class="single-featured-product">
												<div class="product_img">
													<a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>">
														<img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>" class="primary-image"/>
														<img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>" class="secondary-image"/>
													</a>
													<!-- <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
														<span class="quick-view">
															<i class="fa fa-external-link"></i>Quick view
														</span>
													</a> -->
													<div class="add-cart-area">
														<div class="fet-price">
															<span class="addcart-text"><?php echo number_format($rows->price); ?></span>
														</div>
														<div class="wish">
															<a href="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>" class="shopping-cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															<a href="index.php?controller=Wishlist&action=add&id=<?php echo $rows->id; ?>" class="favourite">
																<i class="fa fa-heart-o"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="infor-text">
													<a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>"><span><?php echo $rows->name; ?></span></a>
													<span class="star">
														<i class="fa fa-star active"></i>
														<i class="fa fa-star active"></i>
														<i class="fa fa-star active"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</span>
												</div>
											</div>
											<!--SINGLE-FEATURED-PRODUCT END-->
										</div>
										<?php endforeach; ?> 
									</div>
								</div>
								<!--FEATURED-PRODUCT-AREA END-->
							</div>
							<!--Featured Product End-->
							
							<!-- ADD-AREA START-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="add-area">
										<div class="add-img">
											<img src="Assets/Frontend/img/add_mans.jpg" alt="Mans" />
										</div>
										<div class="add-discription">
											<p>Sự Lựa Chọn Số 1 Của Bạn</p>
											<h2>Shop Dành Cho Phái Mạnh</h2>
											<a href="index.php?controller=Product&action=category&id=1">Mua Ngay</a>
										</div>
									</div>
								</div>
							</div>
							<!-- ADD-AREA END-->
							
							<!-- TOP-CATEGORY-AREA START-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="top-category-area">
										<h3 class="area-heading">Sản Phẩm Đang Giảm Giá</h3>
									</div>
								</div>
							</div>
							<!-- TOP-CATEGORY-AREA END-->
							
							<!-- TOP-CATEGORY-PRODUCT-AREA START-->
							<div class="row">
								<div class="top-category-product-area">								
									<!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
									<?php foreach($salesProduct as $rows): ?>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="single-featured-product">
											<div class="product_img">
												<a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>">
													<img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>" class="primary-image"/>
													<img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>" class="secondary-image"/>
												</a>
												<!-- <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">
													<span class="quick-view">
														<i class="fa fa-external-link"></i>Quick view
													</span>
												</a> -->
												<div class="add-cart-area">
													<div class="fet-price">
														<span class="addcart-text"><?php echo number_format($rows->price); ?></span>
														<span class="addcart-text-del"><?php echo number_format($rows->price); ?></span>
													</div>
													<div class="wish">
														<a href="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>" class="shopping-cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a href="index.php?controller=Wishlist&action=add&id=<?php echo $rows->id; ?>" class="favourite">
															<i class="fa fa-heart-o"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="infor-text">
												<a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>"><span><?php echo $rows->name; ?></span></a>
												<span class="star">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
									<!-- TOP-CATEGORY-SINGLE-PRODUCT END-->
								</div>
								<!-- TOP-CATEGORY-PRODUCT-AREA END-->
							</div>
							<!-- TOP-CATEGORY-PRODUCT-AREA END-->
						</div>
					</div>
				</div>
			</div>
		</div>