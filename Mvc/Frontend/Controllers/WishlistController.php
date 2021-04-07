<?php 
	include "Mvc/Frontend/Models/WishlistModel.php";
	class WishlistController extends Controller{
		use WishlistModel;
		//ham tao
		public function __construct(){
			//neu gio hang chua ton tai thi khoi tao gio hang
			if(isset($_SESSION["wishlist"]) == false)
				$_SESSION["wishlist"] = array();
		}
		//hien thi gio hang
		public function index(){
			//load view
			$this->renderHTML("Mvc/Frontend/Views/WishlistView.php");
		}

		//them moi gio hang
		public function add(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//goi ham them sp vao gio hang (trong model)
			$this->wishlistAdd($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=Wishlist");
		}
		//xoa san pham khoi gio hang
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//goi ham wishlistDeleten trong model
			$this->wishlistDelete($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=Wishlist");
		}
		
	}
 ?>