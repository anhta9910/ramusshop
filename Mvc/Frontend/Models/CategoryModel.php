<?php 
	trait CategoryModel{
		public function modelFetchAll(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from tbl_category order by category_id desc");
			return $query->fetchAll();
		}
		
	}
 ?>