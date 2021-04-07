<?php 
	//load file model 
	include "Mvc/Backend/Models/UserModel.php";
	class UserController extends Controller{
		//khai bao de su dung UserModel
		use UserModel;
		public function index(){
			// quy dinh so ban ghi trong 1 trang 
			$pageSize = 4;
			//tinh so trang hien thi
			$numPage = ceil($this->modelTotalRecord()/$pageSize);
			//lay ket qua tra ve ung voi tung trang
			$data = $this->modelFetchAll($pageSize);
			//goi view , truyen du lieu vao view
			return $this->renderHTML("Mvc/Backend/Views/UserView.php",array("data"=>$data,"numPage"=>$numPage));

		}
		//edit
		public function edit(){
			//lay bien truyen tu url
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//goi ham tu model de lay ban ghi tuong ung voi id truyen vao 
			$record = $this->modelEdit($id);
			//tao bien form ACtion de truyen vao action cua form
			$formAction = "index.php?area=Backend&controller=User&action=doEdit&id=$id";
			//goi view
			$this->renderHTML("Mvc/Backend/Views/AddEditUserView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		public function doEdit(){
			//lay bien id truyen tu url
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			// goi ham tu model 
			$this->modelDoEdit($id);
			//di chuyen den
			header("location:index.php?area=Backend&controller=User");
		}
		//edit
		//add
		public function add(){
			//tao bien $formAction de truyen vao action cua form
			$formAction = "index.php?area=Backend&controller=User&action=doAdd";
			//goi view
			$this->renderHTML("Mvc/Backend/Views/AddEditUserView.php",array("formAction"=>$formAction));
		}
		//do add
		public function doAdd(){
			//goi ham tu model de update ban ghi
			$this->modelDoAdd();
			//di chuyen den url
			header("location:index.php?area=Backend&controller=User");
		}
		//do delete
		public function delete(){
			//lay bien $id truyen tu url
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//goi ham tu model de update ban ghi
			$this->modelDelete($id);
			//di chuyen den url
			header("location:index.php?area=Backend&controller=User");
		}
	}
 ?>