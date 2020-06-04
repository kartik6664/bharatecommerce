<?php
session_start();
$con=mysqli_connect("localhost","root","","bharatecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/bharatecommerce/');
define('SITE_PATH','http://127.0.0.1/bharatecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>