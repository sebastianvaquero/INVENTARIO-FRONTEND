<?php

/* class Productos{
    private $con;
    public function __construct($con){
        $this->con=$con;
    }

    // Funciones Registro

    public function registrar($producto_id,$producto_codigo ,$producto_nombre, $producto_precio, $producto_stock, $destino){
        $productospro=$this->insertar($producto_id,$producto_codigo ,$producto_nombre, $producto_precio, $producto_stock, $destino);
        if($productospro){
            return true;
        }else{
            return false;
        }

    }

    private function insertar($id,$cod, $nom, $pre, $stoc, $dest){

        $query=$this->con->prepare("INSERT INTO producto (Producto_id,Producto_codigo, Producto_nombre, Producto_precio, Producto_stock, Producto_foto) VALUES (:producto_id,:producto_codigo, :producto_nombre, :producto_precio, :producto_stock, :destino) "); 
        $query->bindParam(":producto_id", $id);
        $query->bindParam(":producto_codigo", $cod); 
        $query->bindParam(":producto_nombre", $nom);
        $query->bindParam(":producto_precio", $pre);
        $query->bindParam(":producto_stock", $stoc);
        $query->bindParam(":destino", $dest);
        
            return $query->execute();
           
    }

    
    

} */
?>