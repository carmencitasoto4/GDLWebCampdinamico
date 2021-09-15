<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';

$sql="SELECT fecha_registrado, COUNT(*) AS resultado FROM registrados GROUP BY fecha_registrado ORDER BY fecha_registrado";
$resultado= $conn->query($sql);
$arreglo_registros=array();
while($registro_dia =$resultado->fetch_assoc()){

    $fecha=$registro_dia['fecha_registrado'];
    $registro['fecha']=date('d-m-Y',strtotime($fecha));
  $registro['cantidad']=$registro_dia['resultado'];
  $arreglo_registros[]=$registro;
}



echo json_encode($arreglo_registros);


?> 

