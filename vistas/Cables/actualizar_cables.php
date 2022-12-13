<?php
session_start();
include("conexionPDO.php");
// GENERA CONSULTA PARA MODIFICAR LOS DATOS
$id=$_GET['id'];
$sql="SELECT * FROM cables WHERE ID_CABLE='".$id."'";
$query=mysqli_query($con,$sql);
			
$row=mysqli_fetch_assoc($query);

if (isset($_POST['modificar'])) {
	//RECUPERAR LOS DATOS QUE ESTAN EN EL FORMULARIO.
	$id = $_POST['ID_CABLE'];
	$tipo_cable = $_POST['TIPO_CABLE'];
	$categoria_cable = $_POST['CATEGORIA_NOMBRE'];
	$cantidad_cable = $_POST['CANTIDAD'];
	$fecha_revisionc = $_POST['CFECHA_REVISION'];

	//REALIZAR LA CONSULTA PARA MODIFICAR LOS DATOS.
		$sql="UPDATE cables SET  TIPO_CABLE='$tipo_cable',CATEGORIA_NOMBRE='$categoria_cable',CANTIDAD='$cantidad_cable',CFECHA_REVISION = '$fecha_revisionc' WHERE ID_CABLE= '$id'";
   		$query=mysqli_query($con,$sql);
   		if ($query) {
   			header("Location:listas_cables.php");
   		}
   		

}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Actualizar Cable</title>
<!-- Required meta tags -->
<!-- Required meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="/INVENTARIO-FRONTEND/Instructor/vistas/css/style.css">
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
			<a href="http://localhost/INVENTARIO-FRONTEND/Instructor/index.php">
			<img src="/INVENTARIO-FRONTEND/Instructor/img/logosena.JPG">
			</a>
	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			
							
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listas</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../vistas/Almacenados/listas_almacenados.php?vista=user_new">Almacenado</a>
								<a class="dropdown-item" href="../../vistas/Cables/listas_cables.php?vista=user_list">Cables</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col">
				<button type="button" class="  btn btn-primary" style=" margin-top:-5px; margin-right:100px; "> Mi Cuenta <a href="vistas/actualizar.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>"></a> </button>
				</div>
			</div>
			 <button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesi&oacute;n <a href="index.php?vista=logout"></a></button>
	</div>
	</div>
	</div>
	</div>
	</nav>
</header>
<body>
<div class="main1" style="width: 1000px;">
		<p class="sign fw-bold fs-4 text-center pt-3">Actualizar Registros</p><br>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" class="formregistro" method="POST">
			<input class="cer0" type="hidden" name="ID_CABLE" value="<?php echo $row['ID_CABLE']  ?>">
			<input class="uno11 " type="text"  placeholder="Tipo de Cable" name="TIPO_CABLE" value="<?php echo $row['TIPO_CABLE']  ?>" required >
			<br>
			<select name="CATEGORIA_NOMBRE" class="dos22"> 
				<option><?php echo $row['CATEGORIA_NOMBRE']  ?></option>
			</select>
			<input class="tres" type="number" min="0" max=""  placeholder="Catidad" name="CANTIDAD" value="<?php echo $row['CANTIDAD']?>"required >

			<input class="cuatro" type="date"  placeholder="Fecha" name="CFECHA_REVISION" value="<?php echo $row['CFECHA_REVISION']?>"required ><br><br>

			<input type="submit" class="btn btn-primary" value="Actualizar" name="modificar" style="margin-top:30px; margin-left:400px; ">
		</form>	
		<a href="listas.php"><button type="submit" value="Volver" class="btn btn-secondary" style="margin-top:-63px; margin-left:520px;">Volver </button></a>
</div>

	<footer class="main-footer">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>



</html>