<?php 
	//load file layout
	$this->layout = "Mvc/Frontend/Views/Layout_Detail.php";
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
									<li><a class="active-current" href="#"><?php echo $record->name; ?></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MENU-BOTTOM END-->
		
		<!-- MAINCONTAIN-AREA START-->
		<div class="maincontain-area">
			<div class="container">
				<div class="row">
					<div class="maincontain">
						<div class="col-lg-9 col-md-9">
							<!-- PRODUCT-DETAILS-AREA START-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="category_single_list">
									<div class="category_image">
										<div class="larg_img">
											<div class="tab-content">
												<div class="tab-pane fade in active" id="image1">
													<img src="Assets/Upload/Product/<?php echo $record->img; ?>" alt="<?php echo $record->name; ?>" />
												</div>
											</div>
										</div>
									</div>
									<div class="category_text">
										<div class="off_percent">-20%</div>
										<div class="price_old_new">
											<p><?php echo number_format($record->price); ?></p>
											<p class="old_price"><del><?php echo number_format($record->price); ?></del></p>
										</div>
										<div class="category_prod_description">
											<h3><?php echo $record->name; ?></h3>
											<p><?php echo $record->description; ?></p>
										</div>
										<div class="size_color">
											<div class="size">
												<label>Size*</label>
												<select name="size_id" class="form-control">
                    <?php 
                    	//lay bien ket noi
                    	$conn = Connection::getInstance();
                    	//thuc thi truy van
                    	$query = $conn->query("select * from tbl_size order by size_id desc");
                    	//lay toan bo ket qua tra ve
                    	$size = $query->fetchAll();
                    	foreach($size as $rows):
                     ?>                        
                        <option <?php if(isset($record->size_id)&&$record->size_id==$rows->size_id): ?> selected <?php endif; ?> value="<?php echo $rows->size_id; ?>"><?php echo $rows->name; ?></option>
                       <?php endforeach; ?>
                    </select>
											</div>
										</div>
										<div class="category_prod_card_area">
											<a href="index.php?controller=Cart&action=add&id=<?php echo $record->id; ?>" class="cart">
												<i class="fa fa-shopping-cart"></i>
											</a>
											<a href="index.php?controller=Cart&action=addd&id=<?php echo $record->id; ?>" class="add-text-lis">
												Add to cart
											</a>
											<a href="#" class="icon_exc">
												<i class="fa fa-exchange"></i>
											</a>
											<a href="index.php?controller=Wishlist&action=add&id=<?php echo $record->id; ?>" class="heart">
												<i class="fa fa-heart-o"></i>
											</a>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!-- PRODUCT-DETAILS-AREA END-->
							
							<!-- PRODUCT_DESCREIPTION START-->
													
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-6">
									<!-- COMPARE START-->
									<div class="compare">
										<div class="news-letter">
											<h2>Liên hệ chúng tôi </h2>
											<form action="#">
												<span class="input-box">
												<input type="text" name="Email" placeholder="You have no item(s) to compare"/>
												</span>
											</form>
										</div>
									</div>
									<!-- COMPARE END-->
								</div>
							<!-- OFFER_AREA START-->
								<div class="col-lg-12 col-md-12 hidden-sm">
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
									</div>
									<!-- OFFER_AREA END-->
								</div>
								<div class="col-lg-12 col-md-12 col-sm-6">
									<!-- POPULAR-TAGS START-->
									<div class="popular-tags">
										<h2 class="category-heding">Tags</h2>
										<div class="tags">
											<ul>
												<li><a href="#">quannam</a></li>
												<li><a href="#">quannu</a></li>
												<li><a href="#">aonam</a></li>
												<li><a href="#">balo</a></li>
												<li><a href="#">mu</a></li>
												<li><a href="#" class="">phukien</a></li>
												<li><a href="#">tui xach</a></li>
												<li><a href="#">vong vo</a></li>
											</ul>
										</div>
									</div>
									<!-- POPULAR-TAGS END-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>