<?php 
	//load file model
	include "Mvc/Backend/Models/CategoryModel.php";
	class CategoryController extends Controller{
		//khai bao de su dung UserModel
		use CategoryModel;
		public function index(){
			// quy dinh so ban ghi trong 1 trang 
			$pageSize = 4;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			//goi view , truyen du lieu vao view
			return $this->renderHTML("Mvc/Backend/Views/CategoryView.php",array("data"=>$data,"numPage"=>$numPage));

		}
		//edit
		public function edit(){
			//lay bien truyen tu url
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//goi ham tu model de lay ban ghi tuong ung voi id truyen vao 
			$record = $this->modelEdit($category_id);
			//tao bien form ACtion de truyen vao action cua form
			$formAction = "index.php?area=Backend&controller=Category&action=doEdit&category_id=$category_id";
			//goi view
			$this->renderHTML("Mvc/Backend/Views/AddEditCategoryView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		public function doEdit(){
			//lay bien id truyen tu url
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			// goi ham tu model 
			$this->modelDoEdit($category_id);
			//di chuyen den
			header("location:index.php?area=Backend&controller=Category");
		}
		public function add(){
			//tao bien form ACtion de truyen vao action cua form
			$formAction = "index.php?area=Backend&controller=Category&action=doAdd";
			//goi view
			$this->renderHTML("Mvc/Backend/Views/AddEditCategoryView.php",array("formAction"=>$formAction));
		}
		public function doAdd(){
			// goi ham tu model 
			$this->modelDoAdd();
			//di chuyen den
			header("location:index.php?area=Backend&controller=Category");
		}
		public function delete(){
			//lay bien id truyen tu url
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			// goi ham tu model 
			$this->modelDelete($category_id);
			//di chuyen den
			header("location:index.php?area=Backend&controller=Category");
		}
	}
 ?>