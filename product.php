
<?php
	class Pcl_Product
	{
		// properties defined here
		protected $_type = 'Book: ';
		protected $_title = 'PHP';
		
		
		// methods defined here
		public function getProductType(){
				return $this->_type;	
		}
		
		public function setProductType($type){
			if(is_numeric($type)){
				 return $this->_type ='String is accepted value - Num is given'; 
			}else{
				return $this->_type = $type;
			}
			
		}

		public function getProductTitle(){
				return $this->_title;
		}

		public function setProductTitle($title){
			if(is_numeric($title)){
				return $this->_title ='String is accepted value - Num is given';
			}else{
				return $this->_title = $title;
			}
			
		}

		public function deleteProductTitle(){
			return $this->_title = '';
		}

		public function deleteProductType(){
			return $this->_type = '';
		}

	}
	