<?php 
$id=$_GET['id'];
#conexion
include 'config/conexion.php';
$conexion=conexion();
$datos=seleccionarCampo($conexion,$id);
$tipo=$datos['tipo'];
$categoria=$datos['categoria'];
$descripcion=$datos['descripcion'];
$objeto=$datos['objeto'];
$CATEGORIANOMBRE=$datos['CATEGORIANOMBRE'];
$cantidad=$datos['cantidad'];
$estado=$datos['estado'];
$observaciones=$datos['observaciones'];
header("Content-type: $tipo");
if($categoria=='pdf'){
    header("Content-Disposition:inline;filename=$descripcion.$categoria.$cantidad.$estado.$observaciones");
}else{
    header("Content-Disposition:attached;filename=$descripcion.$categoria.$cantidad.$estado.$observaciones");
}

echo $objeto;

?>