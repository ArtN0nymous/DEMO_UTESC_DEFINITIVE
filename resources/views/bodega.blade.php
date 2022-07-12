<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/bodega.css')}}">
    <title>Document</title>
</head>
<body>
  <div class='contenido'>
 <div>
 <x-navbar/>
 </div> 
  <div>
    <table class='contenido_tabla'>
        <thead class='contenido_tabla_head'>
            <tr>
                <th class='contenido_tabla_head_colum' >Articulos</th>
                <th class='contenido_tabla_head_colum'>Solicitados</th>
                <th class='contenido_tabla_head_colum'>Existencia</th>
                <th class='contenido_tabla_head_colum'>Status</th>
                <th class='contenido_tabla_head_colum'>Fecha</th>
                <th class='contenido_tabla_head_colum'>Descripcion</th>
                <th class='contenido_tabla_head_colum'>Pedir</th>
                <th class='contenido_tabla_head_colum'>Maximos</th>
                <th class='contenido_tabla_head_colum'>Marca</th>
                <th class='contenido_tabla_head_colum'>Proveedor</th>
                <th class='contenido_tabla_head_colum'>SubCategoria</th>
                <th class='contenido_tabla_head_colum'>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class='contenido_tabla_head_colum'>3454</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'>4745</td>
                <td class='contenido_tabla_head_colum'> <a class= 'contenido_tabla_head_colum_el' href="">Eliminar</a> <a class= 'contenido_tabla_head_colum_el' href="">Editar</a></td>
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