<?php 
    #capturamos los datos del formulario
    $descripcion=$_POST['descripcion'];
    $objeto=$_FILES['objeto'];
    $descripcionObjeto=$objeto['name'];
    // $categoria=explode('.',$descripcionObjeto)[1];
    $tipo=$objeto['type'];
    $mfecha_revision=date('Y-m-d G:i:s');
    $CATEGORIA_NOMBRE=$_POST['CATEGORIA_NOMBRE'];
    $cantidad=$_POST['cantidad'];
    $estado=$_POST['estado'];
    $observaciones=$_POST['observaciones'];
    
    #objeto
    $tmp=$objeto['tmp_name'];
    // $contenido=file_get_contents($tmp);
    $objetoBLOB=addslashes($contenido);

    #conexion y función insertar
    include "../config/conexion.php";
    $conexion=conexion();
    $query=insertarObjeto($conexion,$descripcion,$tipo,$mfecha_revision,$objetoBLOB,$CATEGORIA_NOMBRE,$cantidad,$estado,$observaciones);
    if($query){
        header('location:../index.php?insertar=success');
    }else{
        header('location:../index.php?insertar=error');
    }
    
?>