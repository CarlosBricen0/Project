<?php

include('../Persistencia/ProductoDao.php');

class ProductoNeg{   

    public static function CrearProducto($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario,$Unidad_Medida){

        $producto = new Producto($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario,$Unidad_Medida);
        ProductoDao::sqlInsert($producto);

    }

    public static function ModificarProducto($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario){

        $producto = new Producto($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario,$Unidad_Medida);
        ProductoDao::sqlUpdate($producto);

    }

    public static function EliminarProducto($Id){

        ProductoDao::sqlEliminarProducto($Id);

    }

}

?>