<!DOCTYPE html>
<html lang="en">

<head>

		<title>Registrar Categorias</title>
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

						

						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
						<ul>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							
		
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/cate_nuevo.php">Nuevo </a> 
							<ul>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Almacenado </a> </li>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Cables </a> </li>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/mobiliario/index.php">Mobiliario </a> </li>

								
						</div>
					</li>
					
					</ul>
							</li>
							
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articulos</a>
						<ul>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							
							
						<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/nuevoproducto.php">Nuevo</a></li>
							<ul>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Articulos </a> </li>

							<!-- <li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscarproductos.php">Buscar</a></li> -->

			
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
	<form name="form"  method="post">
	<div class="main" style="width: 1000px;">
	<p class="sign fw-bold fs-4 text-center pt-3">Nuevas Categorias</p>
		<form class="formregistro">

			<input class="UNO" type="text" name="CATEGORIA_NOMBRE" align="center" placeholder="Nombre de la Categoria" required>
			<input class="uno" type="text" name="NODO" align="center" placeholder="Nodo" required> 

			
<input class="DOS"  type="number"  name="CANTIDAD" align="center"  placeholder="cantidad"required>
			
	

<div class="form-group">
	<label class="descripcion" for="Descripcion">Descripción
	<textarea class="form-control"  name="DESCRIPCION" rows="3"></textarea>
</div>
</label>	



 


			<br>

            <button type="submit" name="register" class="btn btn-primary" style="margin-top:30px; margin-left:400px;">Guardar </button>
			<button type="reset" value="Borrar" class="btn btn-secondary" style="margin-top:-63px; margin-left:520px;">Borrar </button>
			
	</div>
	</form>


	</body>

	
<footer class="main-footer">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

</html>


<!-- <input class="cuatro" type="email" align="center" placeholder="Categoria">  -->
<br> <br>
			<!-- <div class="casilla">
    <label class="label" for=""></label>
    <img src="{{ asset('imagesproducto/')}}" alt="">
    <input class="espacio" type="file" name="imagen"required>
</div> -->
<?php
include("/xampp/htdocs/INVENTARIO-FRONTEND/clases/conexion.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['CATEGORIA_NOMBRE']) >= 1 && strlen($_POST['NODO']) >=1 &&  strlen($_POST['DESCRIPCION']) >=1 && strlen($_POST['CANTIDAD'])){ 

        $CATEGORIA_NOMBRE = trim($_POST['CATEGORIA_NOMBRE']);
        $NODO = trim($_POST['NODO']);

        $DESCRIPCION = trim($_POST['DESCRIPCION']);
        $CANTIDAD = trim($_POST['CANTIDAD']);
        $consulta = "INSERT INTO categoria (CATEGORIA_NOMBRE,NODO,DESCRIPCION,CANTIDAD) VALUES ('$CATEGORIA_NOMBRE','$NODO','$DESCRIPCION','$CANTIDAD')";
$resultado = mysqli_query($conex,$consulta);

if ($resultado) { 

    ?>
echo'<script type="text/javascript"> alert("SE REGISTRO LA CATEGORIA CON EXITO!")</script>';
            echo "<script> window.location.href = 'cate_nuevo.php';</script>";
            //header("location: cate_nuevo.php");
        }else{
            echo'<script type="text/javascript"> alert("NO SE REGISTRO LA CATEGORIA")</script>';
            echo "<script> window.location.href = 'cate_nuevo.php';</script>";
            //echo "No se registro";
        }
        
        
    }

<?php
    }else{
        ?>
   <h3 class="bad">Ocurrio un error</h3>
<?php
 }
  } else {
    ?>
    <h3 class="bad">Complete los campos</h3>
<?php
  }



    }





?>


