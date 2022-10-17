<?php
include_once "connection.php";
include_once "querys.php";

function GetProductID($id)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare(sqlSelectIDPrdocut());
    $sentencia->execute([$id]);
    return $sentencia->fetchObject();
}

function GetProduct()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(sqlSelectPrdocut());
    return $sentencia->fetchAll();
}

function InsertProduct($product)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare(sqlInsertPrdocut());
    return $sentencia->execute([ $product->nombre_producto, $product->marca, $product->modelo, $product->precio, $product->stock ]);
}

function UpdateProduct($product)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare(sqlUpdatePrdocut());
    return $sentencia->execute([$product->nombre_producto, $product->marca, $product->modelo, $product->precio, $product->stock, $product->id]);
}


function DeletProduct($id)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("DELETE FROM productos WHERE id = ?");
    return $sentencia->execute([$id]);
}



function GetClient()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(sqlSelectClient());
    return $sentencia->fetchAll();
}
