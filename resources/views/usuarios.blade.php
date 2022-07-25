<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/usuario.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}">
    <title>Document</title>
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
                        <th class="contenedor_tabla_head_col">#</th>
                        <th class="contenedor_tabla_head_col">Nombre Usuario</th>
                        <th class="contenedor_tabla_head_col">Correo Electrónico</th>
                        <th class="contenedor_tabla_head_col">Tipo de usuario</th>
                        <th class="contenedor_tabla_head_col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $user)
                    <tr>
                        <td class="contenedor_tabla_head_col">{{$user->id}}</td>
                        <td class="contenedor_tabla_head_col">{{$user->name}}</td>
                        <td class="contenedor_tabla_head_col">
                            
                                @if ($user->profType == 'n') {
                                    <div class="switch-button">
                                        <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
                                        <label for="switch-label" class="switch-button__label"></label>
                                    </div>
                                }
                                @else{
                                    <div class="switch-button">
                                        <input type="checkbox" name="switch-button" id="switch-label" checked class="switch-button__checkbox">
                                        <label for="switch-label" class="switch-button__label"></label>
                                    </div>
                                }
                                @endif
                            
                            
                        </td>

                        <td class="contenedor_tabla_head_col">
                           
                        </td>
                        <td class="contenedor_tabla_head_col"><a href="" class="contenedor_tabla_head_col_el">Eliminar</a></td>
                    </tr>
                    @endforeach
                   
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