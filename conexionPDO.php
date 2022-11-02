<?php
$dbname="inventario";
$user="root";
$password="";
try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $dbh = new PDO($dsn, $user, $password);
    echo "";
} catch (PDOException $e){
    echo $e->getMessage();
}
?>