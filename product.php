<?php
	class Pcl_Product
	{
		// properties defined here
		protected $_type = 'Book';
		protected $_title = 'PHP';
		
		
		// methods defined here
		public function getProductType(){
			return $this->_type;
		}
		
		
		public function setProductType($type){
			return $this->_type = $type;
		}

		public function getProductTitle(){
			return $this->_title;
		}
	}
?>