<!DOCTYPE html>
<html lang="en">

<?php include ('header.php'); ?>
	<title>Actualizar cuenta</title>
</head>

<!-- También puede utilizar dropdowns en su barra de navegación. Los dropdowns requieren un elemento de ajuste para el 
			posicionamiento, así que asegúrese de usar elementos separados y anidados para .nav-item y .nav-link como se muestra 
			a continuación. 
		-->

<body>


<!-- Bootstrap CSS -->
<div class="main1" style="width: 1000px;">
		<p class="sign fw-bold fs-4 text-center pt-3">Actualizar Usuario</p>
		<form action="../../INVENTARIO-FRONTEND/" class="formregistro">
			<input class="uno " type="text"  placeholder="Nombres" required >
			<input class="dos" type="text"  placeholder="Apellidos"required ><br>
			<input class="tres" type="text"  placeholder="Usuario"required >
			<input class="cuatro" type="email"  placeholder="Email"required ><br><br>
			<p class="actualizartexto">Si desea actualizar la clave de este usuario por favor llene los 2 campos. SI NO desea actualizarlos deje los campos vacios</p>
			<input class="quinto" id="passInput" type="password"  placeholder="Clave"required >
			<svg id=clickme width=20 height=20 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"id="showPass"/></svg>

			<input class="seis" id="passInput2" type="password"  placeholder="Repetir Clave"required ><br><br>
			<svg id=clickme1 width=20 height=20 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"id="showPass2"/></svg>

			<p class="actualizartexto">Para poder actualizar los datos de este usuario por favor ingrese su USUARIO y CLAVE con la que ha iniciado sesion</p>
			<input class="siete" type="text"  placeholder="Usuario"required >
			<input class="ocho"id="passInput3" type="password"  placeholder="Clave"required ><br>
			<svg id=clickme2  width=20 height=20 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z"id="showPass3"/></svg>

			<button type="submit" class="btn btn-primary" style="margin-left:450px;">Actualizar </button>
		</form>	
</div>

	<footer class="main-footer">
		<strong >Copyright &copy; 2022 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
	</footer>
	
</body>



</html>

<script>
 $(document).ready(function(){
  
  $('#showPass').on('click', function(){
	 var passInput=$("#passInput");
	 if(passInput.attr('type')==='password')
	   {
		 passInput.attr('type','text');
	 }else{
		passInput.attr('type','password');
	 }
 })
})
</script>

<script>
 $(document).ready(function(){
  
  $('#showPass2').on('click', function(){
	 var passInput=$("#passInput2");
	 if(passInput.attr('type')==='password')
	   {
		 passInput.attr('type','text');
	 }else{
		passInput.attr('type','password');
	 }
 })
})
</script>


<script>
 $(document).ready(function(){
  
  $('#showPass3').on('click', function(){
	 var passInput=$("#passInput3");
	 if(passInput.attr('type')==='password')
	   {
		 passInput.attr('type','text');
	 }else{
		passInput.attr('type','password');
	 }
 })
})
</script>