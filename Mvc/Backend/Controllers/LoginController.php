<?php 	
	include "Mvc/Backend/Models/LoginModel.php";
	class LoginController extends Controller{
		use LoginModel;
		public function index(){
			//goi view 
			$this->renderHTML("Mvc/Backend/Views/LoginView.php");
		}
		public function doLogin(){
			// goi ham 
			$this->modelFetch();
		}
	}
 ?> 