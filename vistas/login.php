<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="/INVENTARIO-FRONTEND/vistas/css/style.css">
  
	<title>Login</title>
</head>
<body>
    <div class="main row row-cols-1 justify-content-center text-center">
        <form class="boxlogin" action="" method="POST" autocomplete="off">
        <p class="sign fw-bold fs-4 text-center pt-3">Iniciar sesion</p>
            <form class="form1">
                <input class="un my-2 p-2 w-100 fs-6 text-center" type="text" placeholder="Usuario" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                <input class="pass my-2 p-2 w-100 fs-6 text-center" id="password" type="password" placeholder="Clave" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                <br>      
                    <div class="casillarecuerdo text-center">
                    <label for="remember_me" class="">
                        <input id="remember_me" type="checkbox" class="" name="remember">
                        
                        <span id="viewPassword" ml-2 text-sm text-gray-600">Mostrar contraseña </span

                        
                        
                        
              
                <center><br><button class="submit">Iniciar sesion</button></center>
                <br> <br>
                
                <!-- Remember Me -->
              
</body>


</html>


<script>
    
let password = document.getElementById('password');
let viewPassword = document.getElementById('viewPassword');
let click = false;

viewPassword.addEventListener('click', (e)=>{
  if(!click){
    password.type = 'text'
    click = true
  }else if(click){
    password.type = 'password'
    click = false
  }
})</script>


<?php
if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
    require_once "./php/main.php";
    require_once "./php/iniciar_sesion.php";
}
?>
</form>
</div>



