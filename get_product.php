<?php
include_once "conf_Cors.php";
include_once "function.php";
$product = GetProduct();
echo json_encode($product);