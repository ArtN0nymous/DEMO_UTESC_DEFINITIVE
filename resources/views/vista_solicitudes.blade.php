<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/usuario.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}">
</head>
<body>
    <div  class="contenedor">
        <div>
            <x-navbar/>
        </div>
        <div>
            <table class="contenedor_tabla">
                <thead class="contenedor_tabla_head">
                    <tr>
                        <th class="contenedor_tabla_head_col">Nombre Usuario</th>
                        <th class="contenedor_tabla_head_col">Solicitud</th>
                        <th class="contenedor_tabla_head_col">Descripcion</th>
                        <th class="contenedor_tabla_head_col">Estatus</th>
                        <th class="contenedor_tabla_head_col">Fecha y hora</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="contenedor_tabla_head_col">1</td>
                        <td class="contenedor_tabla_head_col">2</td>
                        <td class="contenedor_tabla_head_col">3</td>
                        <td class="contenedor_tabla_head_col">4</td>
                        <td class="contenedor_tabla_head_col">
                            
                        </td>
                        <td class="contenedor_tabla_head_col"><a href="" class="contenedor_tabla_head_col_el">Aprobada</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="foo">
        
        <div class="im">
            <img src="{{asset('img/utesc_logo_movil.png')}}" class="im_image">
        </div>
        <div  class="copi">
            <label for="" >C UTESC. camino al guacimal S/N, al norte da la ciudad, colonia centro, C.P.82400,Escuinapa, Sinaloa, Mexico, Telefono(695) 110 6779</label>
        </div>
        <div  class="lin">
            <ul class="lin_lista">
                <li><a class="lin_lista_ul--a" href="">Usuarios</a></li>
                <li><a class="lin_lista_ul--a" href="">Solicitudes</a></li>
                <li><a class="lin_lista_ul--a" href="">Bodega</a></li>
                <li><a class="lin_lista_ul--a" href="">Vehiculos</a></li>
            </ul>
        </div>
    
</footer>
</body>
</html>