<?php 
	include "Mvc/Frontend/Models/CategoryModel.php";
	class CategoryController extends Controller{
		use CategoryModel;
		public function index(){
			$data = $this->modelFetchAll();
			$this->renderHTML("Mvc/Frontend/Views/CategoryView.php",array("data"=>$data));
		}
	}
 ?>