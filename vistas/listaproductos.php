

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Listado de Productos</title>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="/INVENTARIO-FRONTEND/vistas/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<!-- También puede utilizar dropdowns en su barra de navegación. Los dropdowns requieren un elemento de ajuste para el 
			posicionamiento, así que asegúrese de usar elementos separados y anidados para .nav-item y .nav-link como se muestra 
			a continuación. 
		-->
		<header>
	<div class="contenedor-principal">
		<nav class="navbar navbar-expand-lg " style="background:#39A900;">
			<a href="http://localhost/INVENTARIO-FRONTEND/index.php?vista=home">
			<img src="/INVENTARIO-FRONTEND/img/logosena.JPG">
			</a>
	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			
							
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					
					<li class="nav-item active">
						<div class="menunavegacion">
					<li class="nav-item dropdown" img src="/INVENTARIO-FRONTEND/img/logosena.JPG">
							
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 	
							<a class="dropdown-item" href="../../INVENTARIO-FRONTEND/vistas/registrar.php?vista=user_new">Nuevo</a>
							<a class="dropdown-item" href="../../INVENTARIO-FRONTEND/vistas/listas.php?vista=user_list">Lista</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscar.php">Buscar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/cate_nuevo.php">Nuevo</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Lista</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscarcategoria.php">Buscar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/nuevoproducto.php">Nuevo</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listaproductos.php">Lista</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/productocategoria.php">Por categoria</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscarproductos.php">Buscar</a>

			
						</div>
					</li>
				</ul>
			</div>

	
			<div class="row">
				<div class="col">
				<a href="actualizar.php?;?>" <button type="button" class="  btn btn-primary" style=" margin-top:-5px; margin-right:100px; "> Mi Cuenta </a> </button>
				</div>
			</div>
			<a href="../index.php" <button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesion </a></button>
	</div>
	</div>
	</div>
	</div>
	</nav>
</header>




 

 <?php
    include_once '../conexionPDO.php';
//$stmt = $dsn -> prepare("SELECT * FROM datos");
$stmt = $dbh -> prepare("SELECT * FROM producto");
$stmt->execute();
$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($datos as $fila){

	// $producto_id = $fila['Producto_id'];
    $producto_codigo = $fila['Producto_codigo'];
    $producto_nombre = $fila['Producto_nombre'];
	$producto_precio = $fila['Producto_precio'];
	$producto_stock = $fila['Producto_stock'];
	$fotico = $fila['producto_foto'];

   
    ?>
<div class="col">
    <div id="<?php echo $producto_nombre ?>" class="border-primary card">
        <div class="justify-content-center aling-items-center">
      <img src="" class="card-img-top" alt="...">
        </div>
      <hr class="text-primary">
      <div class="card-body">
        <h5 class="card-title"><?php echo $producto_codigo;?></h5>
        <p id="producto_nombre" class="card-text"><?php echo $producto_nombre ?></p>
        <p id="producto_nombre" class="card-text"><?php echo $fotico ?></p>
        <p id="producto_nombre" class="card-text"><?php echo '<img src="'.$fotico.'">' ?></p>

        
      </div>
    </div>
  </div>
  <?php
} 
?> 



<!-- 
 <body></body>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>No hay registros en el sistema</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
     
    </tr>
    <tr>
      
    </tr>
  </tbody>
</table> -->
</body> 
</html>


