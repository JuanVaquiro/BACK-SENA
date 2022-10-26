<?php

function sqlSelectPrdocut(){
    $queryProduct = "SELECT * FROM productos WHERE 1";
    return $queryProduct;
}
function sqlSelectIDPrdocut(){
    $queryProductID = "SELECT * FROM productos WHERE id = ?";
    return $queryProductID;
}
function sqlInsertPrdocut(){
    $queryProduct = "INSERT INTO productos(nombre_producto, marca, modelo, precio, stock) VALUES (?, ?, ?, ?, ?)";
    return $queryProduct;
}
function sqlUpdatePrdocut(){
    $queryUpdateProduct = "UPDATE productos SET nombre_producto = ?, marca = ?, modelo = ?, precio = ?, stock = ?
     WHERE id = ?";
    return $queryUpdateProduct;
}
function sqlDeletePrdocut(){
    $queryDeletProduct = "DELETE FROM productos WHERE id = ?";
    return $queryDeletProduct;
}



function sqlSelectClient(){
    $queryClient = "SELECT * FROM clientes WHERE 1";
    return $queryClient;
}

function sqlSelectClientID(){
    $queryClientID = "SELECT * FROM clientes WHERE id = ?";
    return $queryClientID;
}

function sqlInsertClient(){
    $InsertClient = "INSERT INTO clientes(nombre, apellido, documento, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?)";
    return $InsertClient;
}
function sqlUpdateClient(){
    $queryUpdateClient = "UPDATE clientes SET nombre = ?, apellido  = ?, direccion  = ?, telefono  = ?, email = ? 
    WHERE id = ?";
    return $queryUpdateClient;
}
function sqlDeleteClient(){
    $queryDeletClient = "DELETE FROM clientes WHERE id = ?";
    return $queryDeletClient;
}
