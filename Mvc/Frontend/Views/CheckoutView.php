<?php 
	//load file layout
	$this->layout = "Mvc/Frontend/Views/Layout_Cart.php";
 ?>
 <div class="row" style="margin-top: 30px;">
 	<div class="col-md-6 col-md-offset-3">
 		<div class="panel panel-info">
 			<div class="panel-heading">Checkout</div>
 			<div class="panel-body">
 				<form method="post" action="index.php?controller=Cart&action=doCheckout">
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-3">Fullname</div>
 					<div class="col-md-9"><input type="text" required name="fullname" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-3">Address</div>
 					<div class="col-md-9"><input type="text" required name="address" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-3">Email</div>
 					<div class="col-md-9"><input type="email" required name="email" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-3">Phone</div>
 					<div class="col-md-9"><input type="text" required name="phone" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-3"></div>
 					<div class="col-md-9"><input type="submit" class="btn btn-primary" value="Thanh toán"></div>
 				</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>