<?php 
	//load file model
	include "Mvc/Backend/Models/SizeModel.php";
	class SizeController extends Controller{
		//khai bao de su dung UserModel
		use SizeModel;
		public function index(){
			// quy dinh so ban ghi trong 1 trang 
			$pageSize = 4;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			//goi view , truyen du lieu vao view
			return $this->renderHTML("Mvc/Backend/Views/SizeView.php",array("data"=>$data,"numPage"=>$numPage));

		}
		//edit
		public function edit(){
			//lay bien truyen tu url
			$size_id = isset($_GET["size_id"])&&is_numeric($_GET["size_id"])?$_GET["size_id"]:0;
			//goi ham tu model de lay ban ghi tuong ung voi id truyen vao 
			$record = $this->modelEdit($size_id);
			//tao bien form ACtion de truyen vao action cua form
			$formAction = "index.php?area=Backend&controller=Size&action=doEdit&size_id=$size_id";
			//goi view
			$this->renderHTML("Mvc/Backend/Views/AddEditSizeView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		public function doEdit(){
			//lay bien id truyen tu url
			$size_id = isset($_GET["size_id"])&&is_numeric($_GET["size_id"])?$_GET["size_id"]:0;
			// goi ham tu model 
			$this->modelDoEdit($size_id);
			//di chuyen den
			header("location:index.php?area=Backend&controller=Size");
		}
		public function add(){
			//tao bien form ACtion de truyen vao action cua form
			$formAction = "index.php?area=Backend&controller=Size&action=doAdd";
			//goi view
			$this->renderHTML("Mvc/Backend/Views/AddEditSizeView.php",array("formAction"=>$formAction));
		}
		public function doAdd(){
			// goi ham tu model 
			$this->modelDoAdd();
			//di chuyen den
			header("location:index.php?area=Backend&controller=Size");
		}
		public function delete(){
			//lay bien id truyen tu url
			$size_id = isset($_GET["size_id"])&&is_numeric($_GET["size_id"])?$_GET["size_id"]:0;
			// goi ham tu model 
			$this->modelDelete($size_id);
			//di chuyen den
			header("location:index.php?area=Backend&controller=Size");
		}
	}
 ?>