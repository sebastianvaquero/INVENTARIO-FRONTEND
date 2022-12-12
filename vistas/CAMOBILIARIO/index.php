<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobiliario Lista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="/INVENTARIO-FRONTEND/vistas/css/style.css">
    <link rel="stylesheet" href="/INVENTARIO-FRONTEND/vistas/articulos/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
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
					<!--lista desplegable  esta es-->
                    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/categoria/cate_nuevo.php">Nuevo</a>                            
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listas</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../vistas/Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
								<a class="dropdown-item" href="../../vistas/Cables/listas_cables.php?vista=user_list">Cables</a>
                                <a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/CAMOBILIARIO/index.php">Mobiliario</a>
							</div>
						</div>
					</li>
                    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articulos</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/articulos/nuevoarticulo.php">Nuevo</a>                            
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listas</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../vistas/Almacenados/listas_almacenados.php?vista=user_new">Articulos</a>
							
							</div>
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

<?php
// Archivo de conexion con la base de datos
require_once 'Conexion.php';
// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id']))
{
	// Selecciona imagen a borrar
	$stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM mobiliario WHERE Imagen_ID =:uid');
	$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
	// Ruta de la imagen
	unlink("imagenes/".$imgRow['Imagen_Img']);
	
	// Consulta para eliminar el registro de la base de datos
	$stmt_delete = $DB_con->prepare('DELETE FROM mobiliario WHERE Imagen_ID =:uid');
	$stmt_delete->bindParam(':uid',$_GET['delete_id']);
	$stmt_delete->execute();
	// Redireccioa al inicio
	location: "index.php";	
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" />
<title></title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="bootstrap/js/jquery.min.js"></script>
</head>

<body>

<div class="container">
  <div class="page-header">
    <h1 class="h2">Lista de Mobiliario <a class="btn btn-default" href="AgregarNuevo.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Agregar nuevo</a></h1>
	<div class="container-fluid">

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	<input class="form-control me-2" type="search" placeholder="Buscador" name="buscar"> <br>
	<button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>

			<a href="listas.php"> <button class="btn btn-outline-info" type="submit" name="">Mostrar todos los datos</button></a>


</form>
</div>


  </div>
  <br />
  <div class="row">

  
    <?php
	
	$stmt = $DB_con->prepare('SELECT Imagen_ID,descripcion,categoria_nombre,cantidad,estado,observaciones,Imagen_Img FROM mobiliario ORDER BY Imagen_ID DESC');
	$stmt->execute();

	
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))

		
		{
			extract($row);
			?>

<div class="row m-0 justify-content-center mt-5">
            <table class="table col-auto w-100">
                <thead>
                    <tr>
                   
                    </tr>
                    <tr>
                
                        <th>Descripcion</th>
						<th>Categoria nombre</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
						<th>Imagen</th>
						<th>Acciones</th>
                        
                
</div>



<div class="col-xs-3">
                    </tr>
                </thead>
                <tbody>
			<td><?=$descripcion; ?></td>
				<td><?=$categoria_nombre; ?></td>
				<td><?=$cantidad; ?></td>
				<td><?=$estado; ?></td>
				<td><?=$observaciones; ?></td>
				<td><img src="imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-rounded" width="50px" height="50px" /></td>
				<td> <span> <a class="btn btn-info" href="EditarImagen.php?edit_id=<?php echo $row['Imagen_ID']; ?>" title="click for edit" onclick="return confirm('Esta seguro de editar el archivo ?')"><span class="glyphicon glyphicon-edit"></span> Editar</a> <a class="btn btn-danger" href="?delete_id=<?php echo $row['Imagen_ID']; ?>" title="click for delete" onclick="return confirm('Esta seguro de eliminar el archivo?')"><span class="glyphicon glyphicon-remove-circle"></span> Borrar</a> </span></td>
    

    </div> 



    <?php
		}
	}
	else
	{
		?>
    <div class="col-xs-12">
      <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
    </div>
    <?php
	}
	
?>
  </div>
  
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- <footer class="main-footerART">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer> -->
	
</body>

</html>
