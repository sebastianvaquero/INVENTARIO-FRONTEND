
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Nuevos Articulos</title>
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
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/mobiliario/index.php">Almacenado </a> </li>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Cables </a> </li>
							<li><a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Mobiliario </a> </li>

								
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
				<a href="actualizar.php?;?>" <button type="button" class=" btn btn-primary" style=" margin-top:-5px; margin-right:100px; "> Mi Cuenta </a> </button>
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
	<div class="main3">
	<p class="sign fw-bold fs-4 text-center pt-3">Registrar Articulos</p>
 <form  method="POST" action="nuevoarticulo.php" enctype="multipart/form-data">
                
        <div class="inputsr">  
      
		<!-- combo box de categorias -->
		

<?php 
include("/xampp/htdocs/INVENTARIO-FRONTEND/vistas/articulos/config/conexion.php");

?>
<input class="uno" type="text" name="NOMBRE_MARCA" align="center" placeholder="Nombre y marca" required> 

<label  type="text" class="CATEGORIA" name="CATEGORIA_NOMBRE" >Categoria:
            <br> 
<select class="CATEGORIA" name="CATEGORIA_NOMBRE" required>
<option >Articulos </option >
</select>
</label>
	

	<input type="text"class="uno" name="PLACA" placeholder="Placa">
	
	

           <input type="text"class="uno" name="REfSerial " placeholder="Referencia del Serial">
          <input type="text" class="nueve" name="GUAYA" placeholder="Guaya"> 
		  <input type="text" class="nueve" name="MOUSE" placeholder="Mouse"> 
		  <input type="text" class="nueve" name="MOUSEPAD" placeholder="Mousepad"> 
	
		  <input type="text" class="nueve" name="MEMORIA" placeholder="Memoria"> 
		  <input type="text" class="nose" name="LAPIZ " placeholder="lapiz">
<input type="text" class="nose" name="ADAPTADOR_PODER " placeholder="adaptador">
<input type="text" class="nose" name="CABLE_PODER " placeholder="cable">
<input type="text" class="nose" name="CARGADOR " placeholder="cargador">
<input type="text" class="nose" name="BATERIA " placeholder="bateria">
<input type="text" class="nose" name="ESTADO " placeholder="estado">
<input type="text" class="once" name="MANT_REALIZAR" placeholder="Mantenimiento a realizar"><br><br>
<input type="text" class="doce" name="OBSERV_ESTADO" placeholder="Observacion del estado"><br><br>
		
<input type="text" class="catorce" name="NOMBRE_ENCARGADO " placeholder="Nombre del encargado">
		 <input type="text" class="quince" name="CARGO" placeholder="Cargo"><br><br>

         
            

           <button type="submit" name="registerarticulo" class="btn btn-primary" value="Guardar" style="margin-top:30px; margin-left:400px;"> Guardar </button> 
			<button type="reset" value="Borrar" class="btn btn-secondary" style="margin-top:-63px; margin-left:520px;">Borrar </button>
        </div>
		</div>

	

          </form> 


		  </body>

	
<footer class="main-footer">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

</html>

<?php
include("/xampp/htdocs/INVENTARIO-FRONTEND/vistas/articulos/config/conexion.php");





// include("/xampp/htdocs/INVENTARIO-FRONTEND/clases/Productos.php");

if (isset($_POST['registerarticulo']) ){
	// UN ERROR/// if isset ($ID_ARTICULOS){ 
		//strlen($_POST['ID_ARTICULOS']) >= 1 && 

if (strlen($_POST['REfSerial']) >= 1 && strlen($_POST['NOMBRE_MARCA']) >=1 &&  strlen($_POST['CATEGORIA_NOMBRE'])>=1 && strlen($_POST['PLACA'])>=1
 && strlen($_POST['GUAYA'])>=1 && strlen($_POST['MOUSE']) >=1 && strlen($_POST['MOUSEPAD']) >=1 && strlen($_POST['MEMORIA']) >=1 && strlen($_POST['LAPIZ']) 
>=1 && strlen($_POST['ADAPTADOR_PODER']) >=1 && strlen($_POST['CABLE_PODER']) >=1 && strlen($_POST['CARGADOR']) 
>=1 && strlen($_POST['BATERIA']) >=1 && strlen($_POST['ESTADO']) >=1 && strlen($_POST['MANT_REALIZAR'])
>=1 && strlen($_POST['OBSERV_ESTADO']) >=1 && strlen($_POST['FECHA_REVISION']) >=1 && strlen($_POST['NOMBRE_ENCARGADO'])
>=1 && strlen($_POST['CARGO']))  { 

		
		// $ID_ARTICULOS  = trim($_POST['ID_ARTICULOS ']);
		$REfSerial = trim($_POST['REfSerial']);
        $NOMBRE_MARCA = trim($_POST['NOMBRE_MARCA']);
        $CATEGORIA_NOMBRE = ($_POST['CATEGORIA_NOMBRE']);
        $PLACA = trim($_POST['PLACA']);
		$GUAYA = trim($_POST['GUAYA']);
		$MOUSE = trim($_POST['MOUSE']);
		$MOUSEPAD = trim($_POST['MOUSEPAD']);
		$MEMORIA = trim($_POST['MEMORIA']);
		$LAPIZ = trim($_POST['LAPIZ']);
		$ADAPTADOR_PODER = trim($_POST['ADAPTADOR_PODER']);
		$CABLE_PODER = trim($_POST['CABLE_PODER']);
		$CARGADOR = trim($_POST['CARGADOR']);
		$BATERIA = trim($_POST['BATERIA']);
		$ESTADO = trim($_POST['ESTADO']);
		$MANT_REALIZAR = trim($_POST['MANT_REALIZAR']);
		$OBSERV_ESTADO = trim($_POST['OBSERV_ESTADO']);
		$FECHA_REVISION = trim($_POST['FECHA_REVISION']);
		$NOMBRE_ENCARGADO  = trim($_POST['NOMBRE_ENCARGADO ']);
		$CARGO = trim($_POST['CARGO']);
		

        $consulta = "INSERT INTO articulos (REfSerial,NOMBRE_MARCA,CATEGORIA_NOMBRE,PLACA,GUAYA,MOUSE,MOUSEPAD,MEMORIA,
		LAPIZ,ADAPTADOR_PODER,CABLE_PODER,CARGADOR,BATERIA,ESTADO,MANT_REALIZAR,OBSERV_ESTADO,FECHA_REVISION,
		NOMBRE_ENCARGADO,CARGO) VALUES ('$REfSerial','$NOMBRE_MARCA','$CATEGORIA_NOMBRE','$PLACA',
		'$GUAYA','$MOUSE','$MOUSEPAD','$MEMORIA','$LAPIZ','$ADAPTADOR_PODER','$CABLE_PODER','$CARGADOR','$BATERIA',
		'$ESTADO','$MANT_REALIZAR','$OBSERV_ESTADO','$FECHA_REVISION','$NOMBRE_ENCARGADO','$CARGO')";

$resultado = mysqli_query($conex,$consulta);

if ($resultado) { 

    ?>
echo'<script type="text/javascript"> alert("SE REGISTRO EL ARTICULO CON EXITO!")</script>';
            echo "<script> window.location.href = 'nuevoarticulo.php';</script>";
            //header("location: nuevoarticulo.php");
        }else{
            echo'<script type="text/javascript"> alert("NO SE REGISTRO EL ARTICULO")</script>';
            echo "<script> window.location.href = 'nuevoarticulo.php';</script>";
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
    
<?php
  }



    }



?>

