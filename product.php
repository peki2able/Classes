<?php
	class Pcl_Product
	{
		// properties defined here
		protected $_type = 'Book';
		
		
		// methods defined here
		public function getProductType(){
			return $this->_type;
		}
		
		
		public function setProductType($type){
			return $this->_type = $type;
		}
	}
?>