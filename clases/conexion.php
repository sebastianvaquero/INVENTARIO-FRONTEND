<?php
try{
        
    $conn = new PDO('mysql:host=localhost; dbname=inventario','root', '' );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("SET CHARACTER SET UTF8");
    echo "conectado!!";
} catch(PDOException $th){ 
    die('Error en la conexion' . $th->getMessage());
}

?>