<?php 
	trait SizeModel{
		// lay danh sach cac ban ghi , phan bao nhieu ban ghi tren 1 trang($pageSize)
		//laydanhsachcacbanghi
		public function modelFetchAll($pageSize){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//-------
			//lay tong so luong ban ghi trong table
			$total = $this->modelTotalRecord();
			// tinh so trang 
			//ceil -> so ham lay tran VD : ceil(2.1)=3
			$numPage = ceil($total/$pageSize);
			//lay bien $p truyen tu url de biet dnag o trang nao 
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])?($_GET["p"]-1):0;
			// o trang $p se lay tu ban ghi nao 
			$from = $p*$pageSize;
			//truy van csdl, tra ket qua ve boen object
			$query = $conn->query("select *from tbl_size order by size_id desc limit $from,$pageSize");
			//lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			//tra ve ket qua
			return $result;
		}
		//ham lay tong so luong cac ban ghi 
		public function modelTotalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//truy van csdl, tra ket qua ve boen object
			$query = $conn->query("select size_id from tbl_size");
			// dem so luong ket qua -> dem so luong ban ghi 
			$total = $query->rowCount();
			//----
			//tra ve ket qua 
			return $total;
		}	
		public function modelEdit($size_id){
			//lay bien ket noi 
			$conn = Connection::getInstance();
			// chuan bi truy van 
			$query = $conn->prepare("select * from tbl_size where size_id=:size_id");
			//thuc thi truy van 
			$query->execute(array("size_id"=>$size_id));
			//tra ve not phan tu 
			return $query->fetch();
		}
		public function modelDoEdit($size_id){
			$name = $_POST["name"];
			//lay bien ket noi 
			$conn = Connection::getInstance();
			// chuan bi truy van 
			$query = $conn->prepare("update tbl_size set name=:name where size_id=:size_id");
			//thuc thi truy van 
			$query->execute(array("size_id"=>$size_id,"name"=>$name));
			
		}
		//do edit
		public function modelDoAdd(){
			$name = $_POST["name"];
			//lay bien ket noi 
			$conn = Connection::getInstance();
			// chuan bi truy van 
			$query = $conn->prepare("insert into tbl_size set name=:name");
			//thuc thi truy van 
			$query->execute(array("name"=>$name));
			
		}
		public function modelDelete($size_id){
			//lay bien ket noi 
			$conn = Connection::getInstance();
			// chuan bi truy van 
			$query = $conn->prepare("delete from tbl_size where size_id=:size_id");
			//thuc thi truy van 
			$query->execute(array("size_id"=>$size_id));
			
		}
		
	}

 ?>