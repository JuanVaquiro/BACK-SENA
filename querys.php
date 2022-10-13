<?php

function sqlSelectPrdocut(){
    $queryProduct = "SELECT * FROM productos WHERE 1";
    return $queryProduct;
}

function sqlInsertPrdocut(){
    $queryProduct = "INSERT INTO productos(nombre_producto, marca, modelo, precio, stock) VALUES (?, ?, ?, ?, ?)";
    return $queryProduct;
}

function sqlDeletePrdocut(){
    $queryDeletProduct = "DELETE FROM productos WHERE id = ?";
    return $queryProduct;
}


function sqlSelectClient(){
    $queryClient = "SELECT * FROM clientes WHERE 1";
    return $queryClient;
}

 