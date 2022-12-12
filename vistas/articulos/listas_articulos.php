<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos Lista</title>
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
                                <a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/mobiliario/lista_mobiliario.php">Mobiliario</a>
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
    <div class="container">

<div class="listamobiliario" th colspan="6" class="text-center"> <h1>LISTA DE ARTICULOS</h1>
<div class="container-fluid">

	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<input class="form-control me-2" type="search" placeholder="Buscador" name="buscar"> <br>
		<button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>

				<a href="listas.php"> <button class="btn btn-outline-info" type="submit" name="">Mostrar todos los datos</button></a>
							<a href="index.php" <button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Añadir </a></button>

	</form>
</div>

        <div class="row m-10 justify-content-center mt-5">
            <table class="table col-auto w-100">
                <thead>
                    <tr>
                   
                    </tr>
                    <tr>
                    <div id="listaarticulos">
                        <th>#</th>
                        <th>Nombre y marca</th>
                        <th>Categoria </th>
                        <th>Placa</th>
                        <th>Serial</th>
                        <th>Guaya</th>
                        <th>Mouse</th>
                        <th>Mousepad</th>
                        <th>Memoria</th>
                        <th>Lapiz</th>
                        <th>Adaptador de poder</th>
                        <th>Cable de poder</th>
                        <th>Cargador</th>
                        <th>Bateria</th>
                        <th>Estado</th>
                        <th>Mantenimiento a realizar</th>
                        <th>Observacion del estado</th>
                        <th>Fecha de Revision</th>
                        <th>Nombre del encargado</th>
                        <th>Cargo</th>
                        <th>Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    <?php 
                       include("/xampp/htdocs/INVENTARIO-FRONTEND/vistas/articulos/config/conexion.php");

                        $conexion=conexion();
                        $lista=listarArticulos($conexion);
                        $contador=0;
                        while($datos=mysqli_fetch_array($lista)){
                            $contador++;
                            $ID_ARTICULOS=$datos['ID_ARTICULOS'];
                            $NOMBRE_MARCA=$datos['NOMBRE_MARCA'];
                            $CATEGORIA=$datos['CATEGORIA_NOMBRE'];
                            $PLACA=$datos['PLACA'];
                            $Nserial  =$datos['Nserial'];
                            $GUAYA=$datos['GUAYA'];
                            $MOUSE=$datos['MOUSE'];
                            $MOUSEPAD=$datos['MOUSEPAD'];
                            $MEMORIA=$datos['MEMORIA'];
                            $LAPIZ=$datos['LAPIZ'];
                            $ADAPTADOR_PODER=$datos['ADAPTADOR_PODER'];
                            $CABLE_PODER=$datos['CABLE_PODER'];
                            $CARGADOR=$datos['CARGADOR'];
                            $BATERIA=$datos['BATERIA'];
                            $ESTADO=$datos['ESTADO'];
                            $MANT_REALIZAR=$datos['MANT_REALIZAR'];
                            $OBSERV_ESTADO=$datos['OBSERV_ESTADO'];
                            $FECHA_REVISION=$datos['FECHA_REVISION'];
                            $NOMBRE_ENCARGADO=$datos['NOMBRE_ENCARGADO'];
                            $CARGO=$datos['CARGO'];
                         
                    ?>
                    </div>
                    <tr>
                        
                        <td><?=$contador; ?></td>
                        <td><?=$NOMBRE_MARCA; ?></td>
                        <td><?=$CATEGORIA;?></td>
                        <td><?=$PLACA;?></td>
                        <td><?=$Nserial; ?></td>
                        <td><?=$GUAYA;?></td> 
                        <td><?=$MOUSE;?></td> 
                        <td><?=$MOUSEPAD;?></td> 
                        <td><?=$MEMORIA; ?></td> 
                        <td><?=$LAPIZ;?></td> 
                        <td><?=$ADAPTADOR_PODER;?></td> 
                        <td><?=$CABLE_PODER;?></td> 
                        <td><?=$CARGADOR;?></td> 
                        <td><?=$BATERIA;?></td> 
                        <td><?=$ESTADO;?></td> 
                        <td><?=$MANT_REALIZAR; ?></td> 
                        <td><?=$OBSERV_ESTADO; ?></td> 
                        <td><?=$FECHA_REVISION; ?></td> 
                        <td><?=$NOMBRE_ENCARGADO; ?></td> 
                        <td><?=$CARGO; ?></td>
                        <!-- hacemos un alert para confirmacion de eliminar-->
                        <td><a class="btn btn-success" href="modificar.php?ID_ARTICULOS=<?=$ID_ARTICULOS?>">Editar</a> <br><br><a class="btn btn-danger" onclick="return ConfirmDelete()" href="acciones/eliminar.php?ID_ARTICULOS=<?=$ID_ARTICULOS;?>">Eliminar</a></td>
                        <script type="text/javascript"> function ConfirmDelete ()

                        
 {
     var respuesta = confirm("Esta seguro de borrar este objeto?");

if (respuesta ==true )
{
    return true;
   
}
else
{
    return false;
}

 } </script>
                    </tr>
                
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    
    <!--js bootstrap -->
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    
</body>
</body>

	
<footer class="main-footerART">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

</html>




