<?php 
	trait HomeModel{
		//san pham noi bat
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id,category_id,name,price,img from tbl_product where hotproduct=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//san pham sale
		public function modelSalesProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id,category_id,name,price,img from tbl_product where salesproduct=1 order by id desc limit 0,3");
			return $query->fetchAll();
		}
	}
 ?>