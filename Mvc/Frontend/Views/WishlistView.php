<?php 
	//load file layout
	$this->layout = "Mvc/Frontend/Views/Layout_Cart.php";
 ?>
 <!--MENU-BOTTOM START-->
		<div class="menu-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="category-gird-menu">
							<nav>
								<ul>
									<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
									<li><a class="active-current" href="#">Cart</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MENU-BOTTOM END-->
		 <form action="index.php?controller=Cart&action=update" method="post">
		<!-- CART_LIST_AREA START-->
		<div class="cart_list_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="single_cart_list table-responsive">
							<table class="table">
								<tr>
									<th class="delete_icon"></th>
									<th class="c_prod_images">Hình Ảnh</th>
									<th class="c_prod_name">Sản Phẩm</th>
									<th class="sub_total">Đơn giá</th>
								</tr>
								<?php foreach($_SESSION["wishlist"] as $product): ?>
								<tr>
									<td><a href="index.php?controller=Wishlist&action=delete&id=<?php echo $product["id"]; ?>"><i class="fa fa-trash-o"></i></a></td>
									<td><img src="Assets/Upload/Product/<?php echo $product["img"]; ?>" alt="Cart" /></td>
									<td>
										<p class="prod_name"><a href="#"><?php echo $product["name"]; ?></a></p>
									</td>
									

									<td><span class="wishlist_price"><?php echo number_format($product["price"]); ?></span></td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- CART_LIST_AREA END-->
		
		<!-- CLIENT_REQUEST_AREA START-->
		
	</form>
		<!-- CLIENT_REQUEST_AREA END-->