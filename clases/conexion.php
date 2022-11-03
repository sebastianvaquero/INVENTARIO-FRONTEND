<?php
try{
        
    $con = new PDO('mysql:host=localhost; dbname=inventario','root', '' );

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $con->exec("SET CHARACTER SET UTF8");
    echo "conectado!!";
} catch(PDOException $th){ 
    die('Error en la conexion' . $th->getMessage());
}
?>