<?php 
	include "Mvc/Frontend/Models/ProductModel.php";
	class ProductController extends Controller{
		use ProductModel;
		public function detail(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$record = $this->modelDetail($id);
			$this->renderHTML("Mvc/Frontend/Views/ProductDetailView.php",array("record"=>$record));
		}
		public function category(){
			//quy dinh so ban ghi tren mot trang
			$pageSize = 6;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			//goi view, truyen du lieu ra view
			return $this->renderHTML("Mvc/Frontend/Views/ProductCategoryView.php",array("data"=>$data,"numPage"=>$numPage));
		}
	}
 ?>