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
									<th class="c_edit_button">Size</th>
									<th class="c_qnt">Size</th>
									<th class="sub_total">Đơn giá</th>
									<th class="grand_total">Tổng tiền</th>
								</tr>
								<?php foreach($_SESSION["cart"] as $product): ?>
								<tr>
									<td><a href="index.php?controller=Cart&action=delete&id=<?php echo $product["id"]; ?>"><i class="fa fa-trash-o"></i></a></td>
									<td><img src="Assets/Upload/Product/<?php echo $product["img"]; ?>" alt="Cart" /></td>
									<td>
										<p class="prod_name"><a href="#"><?php echo $product["name"]; ?></a></p>
									</td>
									<td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
									<td>
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
									</td>

									<td><span class="cart_price"><?php echo number_format($product["price"]); ?></span></td>
									<td><span class="cart_price"><?php echo number_format($product["number"]*$product["price"]); ?></span></td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
				<div class="total_subtotal_area">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="total_subtotal">
								<div class="total_subtotal_amount">
									<?php if($this->cartTotal() > 0): ?>
									<div class="subtotal">
										<span>Tổng tiền:</span>
										<span class="amount"><?php echo number_format($this->cartTotal()); ?></span>
									</div>
									<div class="total">
										<span>Tổng tiền khách phải trả:</span>
										<span class="amount"><?php echo number_format($this->cartTotal()); ?></span>
									</div>
									
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CART_LIST_AREA END-->
		
		<!-- CLIENT_REQUEST_AREA START-->
		<div class="client_request_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						</div>
					<div class="col-lg-4 col-md-4 hidden-sm">
						<div class="discount_code">
							<h2>Mã giảm giá</h2>
							<form action="#">
								<span class="input-code">
									<input type="text" name="Mã">
								</span>
								<input type="button" value="Sử dụng mã">
							</form>
							<p>Nhập mã giảm giá của bạn :</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<?php if($this->cartTotal() > 0): ?>
						<div class="button_area">
							<a class="button" href="index.php?controller=Cart&action=checkout">Thanh Toán</a>
							<a class="button" href="index.php">Tiếp tục mua hàng</a>
							<input class="btn btn-outline-success" type="submit" value="Cập nhật giỏ hàng" style="width: 360px;margin-bottom: 3px;">
							
							<a class="button" href="index.php?controller=Cart&action=destroy">
							Xóa toàn bộ </a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</form>
		<!-- CLIENT_REQUEST_AREA END-->