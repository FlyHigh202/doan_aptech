<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
//define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecom/');
//define('SITE_PATH','http://127.0.0.1/php/ecom/');
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/project_aptech/');
define('SITE_PATH','http://127.0.0.1:82/project_aptech/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>