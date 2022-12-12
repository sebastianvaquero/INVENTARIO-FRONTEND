<?php 
    #capturar los datos
    $id=$_POST['id'];
    $Ddescripcion=$_POST['descripcion'];
    $objeto=$_FILES['objeto'];
    $CATEGORIA_NOMBRE=$_POST['CATEGORIA_NOMBRE'];
    $Ccantidad=$_POST['cantidad'];
    $Eestado=$_POST['estado'];
    $Oobservaciones=$_POST['observaciones'];
#si solo modifica el nombre el objeto estará vacio
if($objeto['size']==0){
    #verificar si la descripcion cambio
    include '../config/conexion.php';
    $conexion=conexion();
    $datos=seleccionarCampo($conexion,$id);
    $Adescripcion=$datos['descripcion'];
    if($Ddescripcion==$Adescripcion || $Ddescripcion==''){
        #no paso nada
        header('location:../');
    }else{
        $query=modificarDescripcion($conexion,$id,$Ddescripcion);
        if($query){
            header('location:../index.php?modificar=success');
        }else{
            header('location:../index.php?modificar=error');
        }
    }
#verificar si la cantidad cambio
    $Acantidad=$datos['cantidad'];
    if($Ccantidad==$Acantidad || $Ccantidad==''){
        #no paso nada
        header('location:../');
    }else{
        $query=modificarCantidad($conexion,$id,$Ccantidad);
        if($query){
            header('location:../index.php?modificar=success');
        }else{
            header('location:../index.php?modificar=error');
        }
    }

#verificar si la estado cambio
    $Aestado=$datos['estado'];
    if($Eestado==$Aestado || $Eestado==''){
        #no paso nada
        header('location:../');
    }else{
        $query=modificarEstado($conexion,$id,$Eestado);
        if($query){
            header('location:../index.php?modificar=success');
        }else{
            header('location:../index.php?modificar=error');
        }
    }
#verificar si la observaciones cambio
    $Aobservaciones=$datos['observaciones'];
    if($Oobservaciones==$Aobservaciones || $Oobservaciones==''){
        #no paso nada
        header('location:../');
    }else{
        $query=modificarObservaciones($conexion,$id,$Oobservaciones);
        if($query){
            header('location:../index.php?modificar=success');
        }else{
            header('location:../index.php?modificar=error');
        }
    }
 
} 
#verificar si la categoria o tipo de imagen cambia
 
include '../config/conexion.php';
$conexion=conexion();
$datos=seleccionarCampo($conexion,$id);
 $categoria=explode('.',$objeto['name'])[1];
 $tipo=$objeto['type'];
 $mfecha_revision=date('Y-m-d G:i:s');
 $objetoBlob=addslashes(file_get_contents($objeto['tmp_name']));
 #tenemos que modificar todo menos el nombre todo lo relacionado al ob$objeto
     $query=modificarObjeto($conexion,$id,$Ddescripcion,$Ccantidad,$Eestado,$Oobservaciones,$objetoBlob);
     if($query){
         header('location:../index.php?modificar=success');
     }else{
         header('location:../index.php?modificar=error');
     }
 



?>