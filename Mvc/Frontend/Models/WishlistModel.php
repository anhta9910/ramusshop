<?php
	trait WishlistModel{		
		public function wishlistAdd($id){
		    if(isset($_SESSION['wishlist'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['wishlist'][$id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = db::get_one("select * from tbl_product where id=$id");
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from tbl_product where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['wishlist'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'img' => $product->img,
		            'number' => 1,
		            'price' => $product->price
		        );
		    }
		}
		
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function wishlistDelete($id){
		    unset($_SESSION['wishlist'][$id]);
		}
		public function modelGetSize($size_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select name from tbl_size where size_id=$size_id");
			//lay mot ban ghi
			return $query->fetch();
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function wishlistNumber(){
		    $number = 0;
		    foreach($_SESSION['wishlist'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		*/
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function wishlistList(){
		    return $_SESSION['wishlist'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		
		//=============
		//checkout
		
		//=============
	}	
?>