<?php 
	class Controller{
		//bien $view de luu noi dung cua view trong MVC
		public $view = NULL;
		//bien $layout de luu noi dung cua file template
		public $layout = NULL;
		public function renderHTML($fileName,$data = NULL){
			if($data != NULL)
				extract($data);
			if(file_exists($fileName)){
				//doc noi dung file gan vao mot bien
				ob_start();
				include $fileName;
				$content = ob_get_contents();
				ob_get_clean();
				//---
				//gan noi dung vao bien $view cua class
				$this->view = $content;
			}
			//neu co du lieu o bien $layout thi include file
			if($this->layout != NULL)
				include $this->layout;
			else
				echo $this->view;
		}
		//ham xac thuc dang nhap
		public function authentication(){
			if(isset($_SESSION["email"]) == NULL)
				header("location:index.php?area=Backend&controller=Login");
		}
	}
 ?>