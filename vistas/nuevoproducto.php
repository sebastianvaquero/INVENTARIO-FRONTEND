<!DOCTYPE html>
<html lang="en">
<head>
		<title>Nuevos Productos</title>
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



<!--  opcion con base de datos personas  -->
<?php

   
include("/xampp/htdocs/INVENTARIO-FRONTEND/clases/conexion.php");
    include("/xampp/htdocs/INVENTARIO-FRONTEND/clases/Productos.php");

    $pro=new Productos($con);
//print_r($pro);
    if(isset($_POST["enviadatos"])){
       
        $codp=$_POST['cod'];
        $prodp=$_POST['prod'];
        $proprep=$_POST['propre'];
        $stocp=$_POST['stoc'];
        $foto=$_FILES['foto']['name'];
        $ruta=$_FILES['foto']['tmp_name'];
        $destinop="../fotoproductos/img".$foto; // Falta (solucionar) el  almacenamiento de las fotos en la ruta del aplicativo
        copy($ruta,$destinop); 
        $productop=$pro->registrar($codp,$prodp,$proprep,$stocp,$destinop);

        
        if($productop){
            echo'<script type="text/javascript"> alert("REGISTRO ALMACENADO CON EXITO!")</script>';
            echo "<script> window.location.href = 'nuevoproducto.php';</script>";
            //header("location: nuevoproducto.php");
        }else{
            echo'<script type="text/javascript"> alert("NO SE PUDO ALMACENAR")</script>';
            echo "<script> window.location.href = 'nuevoproducto.php';</script>";
            //echo "No se registro";
        }
        
        
    }

    

?>
<body>
	<div class="main" style="width: 1000px;">
	<p class="sign fw-bold fs-4 text-center pt-3">Registrar Productos</p>
 <form  method="POST" action="nuevoproducto.php" enctype="multipart/form-data">
                
        <div class="inputsr">  
      
           <input type="text"class="uno" name="cod" placeholder="Codigo de barras">
          <input type="text" class="nueve" name="prod" placeholder="Nombre del producto"> <br><br>
            <input type="text"class="diez" name="propre" placeholder="Precio">
         <input type="text" class="once" name="stoc" placeholder="Stock"><br><br>
            <input type="file" value="subir imagen" name="foto" id="foto"><br>
         
            

           <button type="submit" name="enviadatos" class="btn btn-primary" value="Guardar" style="margin-top:30px; margin-left:400px;"> Guardar </button> 
			<button type="reset" value="Borrar" class="btn btn-secondary" style="margin-top:-63px; margin-left:520px;">Borrar </button>
        </div>
		</div>
          </form> 


		  </body>
</html>
	
<footer class="main-footer">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>

</html>