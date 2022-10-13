<?php
include_once "conf_Cors.php";
$product = json_decode(file_get_contents("php://input"));
include_once "function.php";
$resultado = InsertProduct($product);
echo json_encode($resultado);