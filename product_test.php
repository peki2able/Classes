<?php

/* include the Class file*/
require_once 'product.php';
/*Create instance of the Class*/
$product = new Pcl_Product();

/*Delete any default value for product Type
  Than asign new value and print it on screen*/
$product->deleteProductType();
 $product->setProductType('Book: ');
  echo $product->getProductType();

/*Delete any default value for product Title
  Than asign new value and print it on screen*/
$product->deleteProductTitle();
 $product->setProductTitle('PHP Solutions');
  echo $product->getProductTitle();
