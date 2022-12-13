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
                                <a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/MOBILIARIO/index.php">Mobiliario</a>
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

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'Conexion.php';
	
	if(isset($_POST['btnsave']))
	{
		$descripcion = $_POST['descripcion'];// user name
		$categoria_nombre = $_POST['categoria_nombre'];// user email
		$cantidad = $_POST['cantidad'];
		$estado = $_POST['estado'];
		$observaciones = $_POST['observaciones'];
		$mfecha_revision = $_POST['mfecha_revision'];

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($descripcion)){
			$errMSG = "Ingrese la marca";
		}
		else if(empty($categoria_nombre)){
			$errMSG = "Ingrese la categoria.";
		}

		
		else if(empty($cantidad)){
			$errMSG = "Ingrese la cantidad.";
		}


		else if(empty($estado)){
			$errMSG = "Ingrese el estado.";
		}

		else if(empty($observaciones)){
			$errMSG = "Ingrese las observaciones.";
		}

		else if(empty($mfecha_revision)){
			$errMSG = "Ingrese la fecha.";
		}


		else if(empty($imgFile)){
			$errMSG = "Seleccione el archivo de imagen.";
		}
		else
		{
			$upload_dir = 'imagenes/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '1MB'
				if($imgSize < 1000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Su archivo es muy grande.";
				}
			}
			else{
				$errMSG = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO mobiliario(descripcion,categoria_nombre,cantidad,estado,observaciones,mfecha_revision,Imagen_Img) VALUES(:descripcion,:categoria_nombre,:cantidad,:estado,:observaciones,:mfecha_revision,:upic)');
			$stmt->bindParam(':descripcion',$descripcion);
			$stmt->bindParam(':categoria_nombre',$categoria_nombre);
			$stmt->bindParam(':cantidad',$cantidad);
			$stmt->bindParam(':estado',$estado);
			$stmt->bindParam(':observaciones',$observaciones);
			$stmt->bindParam(':mfecha_revision',$mfecha_revision);
			$stmt->bindParam(':upic',$userpic);
			
			if($stmt->execute())
			{
				$successMSG = "Nuevo registro insertado correctamente ...";
				location: "index.php";
				
				
				// echo '<script>window.location="'.base_url.'MOBILIARIO/index"</script>';
			}
			else
			{
				$errMSG = "Error al insertar ...";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Subir, Insertar, Actualizar, Borrar una imágen usando PHP y MySQL</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="page-header">
    <h1 class="h3">Nuevos Mobiliarios <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Mostrar todo </a></h1>
  </div>
  <?php
	if(isset($errMSG)){
			?>
  <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong> </div>
  <?php
	}
	else if(isset($successMSG)){
		?>
  <div class="alert alert-success"> <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong> </div>
  <?php
	}
	?>
  <form method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
      <tr>
        <td><label class="control-label">Descripcion:</label></td>
        <td><input class="form-control" type="text" name="descripcion" placeholder="Ingrese la descripcion"required></td>
      </tr>
      <tr>
	  <label  type="text" class="CATEGORIA" name="categoria_nombre" required >Categoria:
            <br> 
<select class="CATEGORIA" name="categoria_nombre" required>
<option >Mobiliario </option >
</select>
</label>

      </tr>
	  <br> 
	
      <tr>
	  <label  class="Cantidad">Cantidad de (1-100):


<input type="number" id="tentacles" name="cantidad"  required
       min="1" max="100">
       </label>
	   <br> 
	 
	   <br> 
	   </tr>

	   <tr>
        <td><label class="control-label">Estado:</label></td>
        <td><input class="form-control" type="text" name="estado" placeholder="Ingrese el estado"required> </td>
      </tr>

	  
	  <tr>
        <td><label class="control-label">Observaciones:</label></td>
        <td><input class="form-control" type="text" name="observaciones" placeholder="Ingrese las observaciones"required> </td>
      </tr>

	  <tr>
	  <td><label class="control-label">Ingrese la fecha:</label></td>
	  <td><input class="fechamobili" type="date" align="center" placeholder="Fecha de revision"name="mfecha_revision" maxlength="70" required ></td>
	  </tr>
			<br>     

      <tr>
        <td><label class="control-label">Imágen.</label></td>
        <td><input class="input-group" type="file" required name="user_image" accept="image/*" /></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default"> <span class="glyphicon glyphicon-save"></span> &nbsp; Guardar Imagen </button></td>
      </tr>
    </table>
  </form>


<!-- Latest compiled and minified JavaScript --> 
<script src="bootstrap/js/bootstrap.min.js"></script>

<footer class="main-footerART">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

</html>
