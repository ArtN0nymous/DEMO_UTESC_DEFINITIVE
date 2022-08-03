<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/solicitudes.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}">
</head>
<body>
    <div class="contenedor">
        <div>
            <x-navbar/>
        </div>
        <div class="contenedor_primario">
            <div>
                <label class="lab">Solicitudes</label>
            </div>
            <div>
                <div class="name">
                    <label for="" class="lab_els">Aquien Solicita: </label>
                    <select name="" id="" class="name_uno">Seleccionar aqui:</select>
                </div>
                <div class="name" > 
                    <label for="" class="lab_ele">¿que solicita?: </label>
                    <input type="text"  class="name_dos">
                    <label for=""  class="lab_el">cantidad solicitada: </label>
                    <input type="text" class="name_tres">
                </div>
                <div class="name">
                    <label for=""  class="lab_eles">Lugar: </label>
                    <input type="text"  class="name_cuatro">
                    <label for=""  class="lab_e">Fecha y hora: </label>
                    <input type="datetime-local"  class="name_cuatro">
                </div>
                <div class="name">
                    <label for=""  class="lab_ela">Descripcion: </label>
                    <input type="text"  class="desc">
                </div>
                <input type="submit" placeholder="Enviar" class="bot">
            </div>
        </div>
    </div>
</body>
</html>