<?php

error_reporting(E_ALL);

$resp = $_REQUEST["btn"];


if($resp == 'Log In'){
    $user = $_REQUEST["TxtUsuario"];
    $pass = $_REQUEST["Txtpass"];
    include('../Base/Conexion.php');
    $cone = new conexion();
    $sql = "Select * from login where usr_name = '$user' and usr_pass ='$pass'";
    $cons = $cone->query($sql);
    $cons->execute();
    $cadena = $cons->fetchALL();

    
    foreach ($cadena as $row):
    
        if ($user == $row[0] && $pass == $row[1] && 'admin' == $row[2]) {

            //autentificando la sesion
            session_start();
            $_SESSION['usuario'] = $row[0];
            $_SESSION['estado'] = 'Autenticado';
            $_SESSION['nivel'] = 'admin';
            echo '<script language="javascript">alert("Bienvenido Administrador");window.location.href="../Presentacion/admin/adm.php";</script>';
        
        }else{

            if ($user == $row[0] && $pass == $row[1] && 'operador' == $row[2]) {
                //autentificando la sesion
            session_start();
            $_SESSION['usuario'] = $row[0];
            $_SESSION['estado'] = 'Autenticado';
            $_SESSION['nivel'] = 'operador';
                echo '<script language="javascript">alert("Bienvenido Operador");window.location.href="../Presentacion/operador/operador.php";</script>';
            }else{
                echo '<script language="javascript">alert("Error al iniciar sesion");window.location.href="../index.php";</script>';
            }
    
        }
    
    endforeach;
    
}


if($resp == 'cerrar'){
        //destruir sesion
        session_start();
        $_SESSION['usuario'] = null;
        $_SESSION['estado'] = null;
        $_SESSION['nivel'] = null;
    echo '<script language="javascript">alert("se cerro la sesion");window.location.href="../index.php";</script>';

}

echo '<script language="javascript">alert("Error desconocido");window.location.href="../index.php";</script>';
?>