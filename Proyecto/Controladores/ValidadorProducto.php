<?php

include('../Negocio/ProductoNeg.php');

if(isset($_POST['btnInsert'])){
    $Id = $_POST["TxtId"];
    $Codigo = $_POST["TxtCod"];
    $Descricpion = $_POST["TxtDesc"];
    $Stock = $_POST["TxtStock"];
    $Precio_Unitario = $_POST["TxtPrecio"];
    $Unidad_Medida = $_POST["TxtUndad"];

    if(ProductoNeg::CrearProducto($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario,$Unidad_Medida)){
        echo '<script language="javascript">alert("Error al insertar un producto");window.location.href="../Presentacion/admin/ProdAgregar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Producto agregado");window.location.href="../Presentacion/admin/ProdAgregar.php";</script>';
    }

}

if (isset($_POST['btnBuscar'])) {  
    $Id = $_POST["TxtId"];
    header("Location: ../Presentacion/admin/ProdModificar.php?Id=$Id");
}

if(isset($_POST['btnModificar'])){

    $Id = $_POST["TxtId"];
    $Codigo = $_POST["TxtCod"];
    $Descricpion = $_POST["TxtDesc"];
    $Stock = $_POST["TxtStock"];
    $Precio_Unitario = $_POST["TxtPrecio"];
    $Unidad_Medida = $_POST["TxtUndad"];

    if(ProductoNeg::ModificarProducto($Id, $Codigo, $Descricpion, $Stock, $Precio_Unitario,$Unidad_Medida)){
        echo '<script language="javascript">alert("Error al modificar el producto");window.location.href="../Presentacion/admin/ProdModificar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Producto Modificado");window.location.href="../Presentacion/admin/ProdModificar.php";</script>';
    }

}

if(isset($_POST['btnEliminar'])){

    $Id = $_POST["txtID"];

   
    if(ProductoNeg::EliminarProducto($Id,"","","","","")){
        echo '<script language="javascript">alert("Error al Eliminar el producto");window.location.href="../Presentacion/admin/ProdEliminar.php";</script>';
    }else{
        echo '<script language="javascript">alert("Producto Eliminado");window.location.href="../Presentacion/admin/ProdEliminar.php";</script>';
    }

}

echo '<script language="javascript">alert("Error desconocido");window.location.href="../index.php";</script>';

?>
