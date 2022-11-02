<?php

class Productos{
    
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }

    // Funciones Registro

    public function registrar($producto_codigo ,$producto_nombre, $producto_precio, $producto_stock, $destino){
        $productospro=$this->insertar($producto_codigo ,$producto_nombre, $producto_precio, $producto_stock, $destino);
        if($productospro){
            return true;
        }else{
            return false;
        }

    }

    private function insertar($cod, $nom, $pre, $stoc, $dest){

        $query=$this->conn->prepare("INSERT INTO producto (Producto_codigo, Producto_nombre, Producto_precio, Producto_stock,producto_foto) VALUES (:producto_codigo,:producto_nombre,:producto_precio,:producto_stock,:destino)"); 
        //$query->bindParam(":producto_id", $id);
        $query->bindParam(":producto_codigo", $cod); 
        $query->bindParam(":producto_nombre", $nom);
        $query->bindParam(":producto_precio", $pre);
        $query->bindParam(":producto_stock", $stoc);
        $query->bindParam(":destino", $dest);
        
            return $query->execute();
           
    }

    
    

} 

?>