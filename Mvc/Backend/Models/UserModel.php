<?php 
	trait UserModel{
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
			$query = $conn->query("select *from tbl_user order by id desc limit $from,$pageSize");
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
			$query = $conn->query("select id from tbl_user");
			// dem so luong ket qua -> dem so luong ban ghi 
			$total = $query->rowCount();
			//----
			//tra ve ket qua 
			return $total;
		}	
		//edit
		public function modelEdit($id){
			//lay bien ket noi 
			$conn = Connection::getInstance();
			// chuan bi truy van 
			$query = $conn->prepare("select * from tbl_user where id=:id");
			//thuc thi truy van 
			$query->execute(array("id"=>$id));
			//tra ve not phan tu 
			return $query->fetch();
		}
		public function modelDoEdit($id){
			$fullname = $_POST["fullname"];
			$password = $_POST["password"];
			//lay bien ket noi 
			$conn = Connection::getInstance();
			// chuan bi truy van 
			$query = $conn->prepare("update tbl_user set fullname=:name where id=:id");
			//thuc thi truy van 
			$query->execute(array("id"=>$id,"name"=>$fullname));
			if ($password != ""){
				//ma hoa pass
				$password = md5($password);
				// chuan bi truy van 
				$query = $conn->prepare("update tbl_user set password=:pass where id=:id");
				// thuc thu truy van
				$query->execute(array("id"=>$id,"pass"=>$password));
			}
			
		}
		//do edit
		public function modelDoAdd(){
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into tbl_user set fullname=:name,email=:mail, password=:pass");
			//thuc thi truy van
			$query->execute(array("name"=>$fullname,"mail"=>$email,"pass"=>$password));			
		}
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_user where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));			
		}
	}

 ?>