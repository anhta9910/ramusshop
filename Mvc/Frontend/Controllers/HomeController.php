<?php 
	include "Mvc/Frontend/Models/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		public function index(){
			$hotProduct = $this->modelHotProduct();
			$salesProduct = $this->modelSalesProduct();
			$this->renderHTML("Mvc/Frontend/Views/HomeView.php",["hotProduct"=>$hotProduct,"salesProduct"=>$salesProduct]);
		}
	}
 ?>