<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>Login</title>
</head>
<body style="background-color:rgba(198, 198, 198, 0.456); width:100vw; height: 100vh;">
    <form action="" class="form">
        <label for="" class="form_label">
           <img class="form_img" src="{{asset('img/utesc_logo_black.png')}}" alt="Logo UTESC">
        </label>
        <label for="nombre_usuario" class="form_label">
            <input class="form_input" type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Usuario">
        </label>
        <label class="form_label" for="password">
  
            <input class="form_input" type="text" name="password" id="password" placeholder="Contraseña">
        </label>
        <input class="form_button" type="submit" value="Iniciar sesión (ingresar)">
        <div class="form_link-holder">
            <div><a href="" class="form_a">¿Ha extraviado la contraseña?</a></div>
            <div><a href="" class="form_a">Crear una cuenta</a></div>
            <div><a href="/index" class="form_a" style="color: red">Ir a la pagina principal (pruebas)</a></div>
        </div>
        
    </form>
</body>
</html>