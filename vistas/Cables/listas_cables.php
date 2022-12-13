<?php
include("conexionPDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listas de Cables</title>
  
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" type="text/css" href="/INVENTARIO-FRONTEND/Instructor/vistas/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function confirmDelete() {
			var respuesta=confirm("¿Desea eliminar el registro?");
			if (respuesta == true) {
				return true;
			} else{
				return false;
			}
		}
		function alertActualizacion() {
             var respuesta = alert("Cable actualizado con exito!");
                return;
            }
	</script>
	 <!-- PLUGINS ALERTA -->
	 <link rel="stylesheet" type="text/css" href="../js/pluggins/dist/sweetalert2.min.css">
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
					<a href="vistas/Cables/actualizar_cables.php?vista=user_update&user_id_up=" ><button type="button" class="  btn btn-primary" style=" margin-top:-5px; margin-right:100px; "> Mi Cuenta  </button></a>
				</div>

			</div>

			<a href="index.php?vista=logout"> <button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesi&oacute;n </button></a>
	</div>
	</div>
	</div>
	</div>
	</nav>
</header>

<body>
<h1>Lista de Cables</h1>

<div class="container-fluid">

	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<input class="form-control me-2" type="search" placeholder="Buscador" name="buscar"> <br>
		<button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>

				<a href="listas.php"> <button class="btn btn-outline-info" type="submit" name="">Mostrar todos los datos</button></a>
							<a href="registrar_cables.php"> <button type="button" class="btn btn-outline-info" style=" margin-top:-5px; margin-right:100px; ">Añadir </button></a>

	</form>
</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipo de Cable</th>
      <th scope="col">Categoria</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Fecha de Revision</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

  	<?php
  	if (isset($_POST['enviar'])) {
  		//BUSCADOR FUNCIONAL
  		$buscador=$_POST['buscar'];

  		
  		$sql="SELECT * FROM cables WHERE TIPO_CABLE LIKE '%".$buscador."%' OR CATEGORIA_NOMBRE LIKE '%".$buscador."%' OR CANTIDAD LIKE '%".$buscador."%' OR CFECHA_REVISION LIKE '%".$buscador."%'  ";
  		$query=mysqli_query($con,$sql);
  		while($row=mysqli_fetch_assoc($query)){
  			?>
  	<tr>
  		<td><?php echo $row['ID_CABLE']?></td>
      <td><?php echo $row['TIPO_CABLE']?></td>
      <td><?php echo $row['CATEGORIA_NOMBRE']?></td>
      <td><?php echo $row['CANTIDAD']?></td>
      <td><?php echo $row['CFECHA_REVISION']?></td>
      <td>
      <a href="actualizar_cables.php?id=<?php echo $row['ID_CABLE']?>" class="btn btn-primary">Editar</a>
      <a href="ListaCables/eliminar_cable.php?id=<?php echo $row['TIPO_CABLE']?>" class="btn btn-danger" onclick="return confirmDelete()" >Eliminar</a>
      </td>
    </tr>
<?php
 }
  	}else{
  		//MUESTRA LOS RESULTADOS
  		$sql="SELECT * FROM cables";
			$query=mysqli_query($con,$sql);
	  	while($row=mysqli_fetch_assoc($query)){
  			?>
    <tr>
    	<td><?php echo $row['ID_CABLE']?></td>
      <td><?php echo $row['TIPO_CABLE']?></td>
      <td><?php echo $row['CATEGORIA_NOMBRE']?></td>
      <td><?php echo $row['CANTIDAD']?></td>
      <td><?php echo $row['CFECHA_REVISION']?></td>

      <td>
      <a href="actualizar_cables.php?id=<?php echo $row['ID_CABLE']?>" class="btn btn-primary">Editar</a>
      <a href="ListaCables/eliminar_cable.php?id=<?php echo $row['TIPO_CABLE']?>" class="btn btn-danger" onclick="return confirmDelete()" >Eliminar</a>
      </td>
    </tr>
    <?php
    }
    }
    ?>
    <?php
    if (isset($_GET['editar'])) {
    	include 'actualizar.php';
    }
    ?>
  </tbody>
</table>
</body>
</html>


