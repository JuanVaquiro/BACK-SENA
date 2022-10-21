<?php
include_once "conf_Cors.php";
$client = json_decode(file_get_contents("php://input"));
include_once "function.php";
$resultado = InserClient($client);
echo json_encode($resultado);