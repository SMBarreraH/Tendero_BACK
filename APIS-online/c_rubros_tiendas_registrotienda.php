<?php

include 'conexion.php';

$json=array();
    $consulta="CALL sp_c_rubros_tiendas_registrotienda()";
    $resultado=mysqli_query($conexion,$consulta);
    while($request=mysqli_fetch_array($resultado)){
        $result["idRubroTienda"]=$request['idRubroTienda'];
        $result["rtDescripcion"]=$request['rtDescripcion'];
        $json['rubros'][]=$result;
    }
    mysqli_close($conexion);
    echo json_encode($json);
?>