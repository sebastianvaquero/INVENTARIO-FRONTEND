<!DOCTYPE html>
<html lang="en">

<?php include ('header.php'); ?>


		<title>Nuevos Productos</title>

<body>
	<div class="main" style="width: 1000px;">
	<p class="sign fw-bold fs-4 text-center pt-3">Registrar Productos</p>
		<form class="formregistro">
		<input class="uno" type="text" align="center" placeholder="Codigo de barras">
			<input class="uno" type="text" align="center" placeholder="Nombre del producto">
			<br><br>
			<input class="dos" type="text" align="center" placeholder="Precio"> 	
			<input class="tres" type="text" align="center" placeholder="Stock">
			<br> <br>
		
			<!-- <div class="casilla">
<label class="label" for="">categoria</label>
<select class="espacio" name="tipo" id="tipo">
@foreach($categoria_ids as $categoria_id)


<option value="{{$categoria_id['categoria_id']}}">{{ $categoria_id['categoria_nombre']}}</option>


 @endforeach -->

<!-- <input class="cuatro" type="email" align="center" placeholder="Categoria">  -->
			<br> <br>
			<div class="casilla">
    <label class="label" for=""></label>
    <img src="{{ asset('imagesproducto/')}}" alt="">
    <input class="espacio" type="file" name="imagen"required>
</div>

            <button type="button" class="btn btn-primary" style="margin-top:30px; margin-left:450px;">Guardar </button>