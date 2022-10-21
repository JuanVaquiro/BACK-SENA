<?php
include_once "conf_Cors.php";
if (!isset($_GET["id"])) {
    echo json_encode(null);
    exit;
}
$id = $_GET["id"];
include_once "function.php";
$product = GetClienttID($id);
echo json_encode($product);