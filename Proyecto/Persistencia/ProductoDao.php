<?php

include('../Entidades/Producto.php');
include('../Base/Conexion.php');

class ProductoDao{

    public static function sqlInsert($producto) {
        $cone = new Conexion;
        $id = $producto->getId();
        $Codigo = $producto->getCodigo();
        $desc = $producto->getDescripcion();
        $stock = $producto->getStock();
        $Precio_Unitario = $producto->getPrecio_Unitario();
        $Unidad_Medida = $producto->getUnidad_Medida();
        $sqlIc = "insert into productos values(null, '$Codigo','$desc','$stock','$Precio_Unitario','$Unidad_Medida')";
        $cone->query($sqlIc);
    }
    
    public static function sqlUpdate($producto) {
        $cone = new Conexion;
        $id = $producto->getId();
        $Codigo = $producto->getCodigo();
        $desc = $producto->getDescripcion();
        $stock = $producto->getStock();
        $Precio_Unitario = $producto->getPrecio_Unitario();
        $sqlIc = "UPDATE productos SET Codigo = '$Codigo',  Descripcion = '$desc', Stock = '$stock', Precio_Unitario = '$Precio_Unitario' , Unidad_Medida = '$Unidad_Medida' WHERE Nro = '$id'";
        $cone->query($sqlIc);
    }


    public static function sqlEliminarProducto($id) {
        $cone = new Conexion;

        $sqlIc = "DELETE FROM `productos` WHERE  Nro = '$id'";
        $cone->query($sqlIc);
    }
    

}

?>

