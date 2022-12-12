<?php 
#optener el id
$id=$_GET['id'];
#sacar el nombre del archivo y la extensión
include 'config/conexion.php';
$conexion=conexion();
$datos=seleccionarCampo($conexion,$id);
$descripcion=$datos['descripcion'];

$titulo=strtoupper($descripcion);

$CATEGORIA_NOMBRE=$datos['CATEGORIA_NOMBRE'];
$cantidad=$datos['cantidad'];
 $estado=$datos['estado'];
 $observaciones=$datos['observaciones'];
$objeto=$datos['objeto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Mobiliario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="/INVENTARIO-FRONTEND/vistas/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!--esilos bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- nuestros estilos -->
    <link rel="stylesheet" href="style.css">
    
</head>
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

						

						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
						<ul>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							
		
							<li><a class="dropdown-item" href="">Lista </a> 
							<ul>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Almacenado </a> </li>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Cables </a> </li>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Mobiliario </a> </li>

								
						</div>
					</li>
					
					</ul>
							</li>
							
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
						<ul>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							
							
						<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/nuevoproducto.php">Nuevo</a></li>
							<li><a class="dropdown-item" href="">Lista </a> 
							<ul>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Articulos </a> </li>

							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscarproductos.php">Buscar</a></li>

			
						</div>
					</li>
				</ul>
				</li>
			</div>

	
			<div class="row">
				<div class="col">
				<a href="actualizar.php?;?>" <button type="button" class="  btn btn-primary" style=" margin-top:-5px; margin-right:100px; "> Mi Cuenta </a> </button>
				</div>
			</div>
			<a href="../index.php" <button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesi&oacute;n </a></button>
	</div>
	</div>
	</div>
	</div>
	</nav>
</header>
<body>
    <div class="container">
            <div class="m-0 row justify-content-center mt-3" >
                <form action="acciones/modificar.php" method="post" enctype="multipart/form-data" class="col-auto w-50">
                    <div class="alert alert-warning text-center">
                        <?php echo $titulo;?>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
					<label for="Nombre">Descripcion</label>
                <input type="text" name="descripcion"  value="<?=$descripcion?>" id="DESCRIPCION" class="form-control">

                	
				<label  class="Objeto">Subir la imagen del objeto
              
              <input type="file" name="objeto" image.png id="OBJETO" class="form-control" >
			  <center> <img class="imgmodi"  src="data:image/png;base64,  <?=base64_encode($objeto)?>"
			  <br></center>
                 </label>

				 
				 <label  type="text" class="CATEGORIA1" name="CATEGORIA_NOMBRE">Categoria:
            
			<select class="c" name="CATEGORIA_NOMBRE" >
			<option value="Mobiliario"    >Mobiliario </option>
			</select>
			</label>
			
			<label  class="Cantidad">Cantidad de (1-100):
<input type="number" id="tentacles" name="cantidad" value="<?=$cantidad?>" 
       min="1" max="100">
       </label> <br>
                	

<label class="Estado" for="Nombre">Estado:</label >
                <input type="text"   name="estado" value="<?=$estado?>"  id="Estado" class="form-control"   >
				
				






<label class="Observaciones" for="Nombre">Observaciones</label >
                <input type="text"   name="observaciones" value="<?=$observaciones?>"  id="Observaciones" class="form-control"   >
				
				
				<br>
			<input type="submit" class="btn btn-primary mt-2"></input></a>
				 <a href="lista_mobiliario.php"><button type="button" class="btn btn-secondary mt-2">Volver</button></a>
				 </form>
            </div> 
    </div>
    <!--js bootstrap -->
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>