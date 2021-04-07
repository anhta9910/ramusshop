<?php 
	//load file layout
	$this->layout = "Mvc/Frontend/Views/Layout_Category.php";
 ?>
 <!--MENU-BOTTOM START-->
		<div class="menu-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="category-gird-menu">
							<nav>
								<ul>
									<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
									<li><a class="active-current" href="category_list.html">
										<?php 
											$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
											$conn = Connection::getInstance();
											$query = $conn->query("select name from tbl_category where category_id=$id");
											$category = $query->fetch();
											echo isset($category->name)?$category->name:"";
										?>
									</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MENU-BOTTOM END-->
		
		
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
						<!-- SAID-BAR END -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<!-- FILTER_PRICE START-->
								<div class="filter_price">
									<h2 class="category-heding">Khoảng giá</h2>
									<div id="slider-range"></div>
									<p>
									  Giá:<input type="text" id="amount" readonly>
									</p>
									<a href="#">Chọn giá</a>
								</div>
								<!-- FILTER_PRICE END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- MANUFACTURERS-AREA START-->
								
								<!-- MANUFACTURERS-AREA END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- COLOR-AREA START-->
								
								<!-- COLOR-AREA END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- COMPARE START-->
								<div class="compare">
									<div class="news-letter">
										<h2>Compare</h2>
										<form action="#">
											<span class="input-box">
											<input type="text" name="Email" placeholder="You have no item(s) to compare"/>
											</span>
										</form>
									</div>
								</div>
								<!-- COMPARE END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- POPULAR-TAGS START-->
								<div class="popular-tags">
									<h2 class="category-heding">Popular tags</h2>
									<div class="tags">
										<ul>
											<li><a href="#">agency</a></li>
											<li><a href="#">blog</a></li>
											<li><a href="#">business</a></li>
											<li><a href="#">clean</a></li>
											<li><a href="#">corporate</a></li>
											<li><a href="#">creative</a></li>
											<li><a href="#">ecommerce</a></li>
											<li><a href="#">elegant</a></li>
											<li><a href="#">fashion</a></li>
											<li><a href="#">minimal</a></li>
										</ul>
									</div>
								</div>
								<!-- POPULAR-TAGS END-->
							</div>
							<!-- OFFER_AREA START-->
							<div class="col-lg-12 col-md-12 hidden-sm">
								<!-- OFFER_AREA START-->
								<div class="offer_area">
									<div class="offer_img">
										<img src="Assets/Frontend/img/offer-img.jpg" alt="Offer" />
										<div class="offer-text">
											<h2>Sale</h2>
											<p>up to</p>
											<h2 class="amout">30</h2>
										</div>
									</div>
								</div>
								<!-- OFFER_AREA END-->
							</div>
						</div>
					</div>			
					<div class="col-lg-9 col-md-9">
						<!-- CATEGORY-BANNER START-->
						<div class="category-banner">
							<img src="Assets/Frontend/img/category_banner.jpg" alt="" />
						</div>
						<!-- CATEGORY-BANNER END-->
						
						
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<!--CATEGORY PRODUCT CATEGORY_SINGLE_LIST START-->
								<?php foreach($data as $rows): ?>
								<div class="category_single_list">
								<div class="category_image" style="padding-right: 15px;">
									<a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>"><img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>" /></a>
								</div>
								<div class="category_text" style="padding-top: 30px;">
									<div class="price_old_new">
										<p><?php echo number_format($rows->price); ?></p>
										<p class="old_price"><del><?php echo number_format($rows->price); ?></del></p>
									</div>
									<div class="category_prod_description">
										<h3><a href="product_details.html"><?php echo $rows->name; ?></a></h3>
										<p><?php echo $rows->description; ?></p>
									</div>
									<div class="category_prod_card_area">
										<a href="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>">
											<span class="cart">
												<i class="fa fa-shopping-cart"></i>
											</span>
										</a>
										<a href="#" class="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>">
											<span>Add to cart</span>
										</a>
										<a href="#" class="icon_exc">
											<span>
												<i class="fa fa-exchange"></i>
											</span>
										</a>
										<a href="index.php?controller=Wishlist&action=add&id=<?php echo $rows->id; ?>" class="heart">
											<span>
												<i class="fa fa-heart-o"></i>
											</span>
										</a>
									</div>
								</div>
								</div>
								<!--CATEGORY PRODUCT CATEGORY_SINGLE_LIST END-->
								<?php endforeach; ?> 
								
							</div>
						</div>
						<!--CATEGORY PRODUCT LIST END-->
						<!--PGAINATION AREA START-->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="pagination-area">
									
									<ul class="pagination">
										<?php for($i = 1; $i <= $numPage; $i++): ?>
										<li><a href="index.php?controller=Product&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
										<?php endfor; ?>
									</ul>
								</div>
							</div>
						</div>
						<!--PGAINATION AREA END-->
					</div>					
				</div>
			</div>
		</div>