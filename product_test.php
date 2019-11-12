<?php

/* include the Class file*/
require_once 'product.php';

$product = new Pcl_Product();


echo $product->getProductType();

$product->setProductTitle('PHP Solutions');
$product->deleteProductTitle();
echo $product->getProductTitle();

$product->setProductTitle('PHP & MySQL');
echo $product->getProductTitle();