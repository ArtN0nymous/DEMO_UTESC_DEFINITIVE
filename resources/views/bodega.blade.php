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
    <div style="border-color: gold;border-width: 2rem;border-style: solid;font-size: 3.5rem;">
        <label for="" style="font-size: 5rem">Categorias</label>
        <form action="{{route('categoria.insertar')}}" method="post">
            @csrf
            <label for="">Nombre categoria</label>
            <input type="text" name="nombre">
            <input type="submit" value="Guardar">
        </form>
    </div>
    <table class='contenido_tabla'>
        <thead class='contenido_tabla_head'>
            <tr>
                <th class='contenido_tabla_head_colum' >Categorias</th>
                <th class='contenido_tabla_head_colum'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $cat)
                <tr>
                    <td class='contenido_tabla_head_colum'>{{$cat->nombre_cat}}</td>
                    <td class='contenido_tabla_head_colum'> <a class= 'contenido_tabla_head_colum_el' href="">Eliminar</a> <a class= 'contenido_tabla_head_colum_el' href="">Editar</a></td>
                </tr>
            @endforeach
       </tbody>
    </table>
       <div style="border-color: green;border-width: 2rem;border-style: solid;font-size: 3.5rem;">
        <label for="" style="font-size: 5rem">Subcategorias</label>
        <form action="{{route('subcategoria.insertar')}}" method="post">
            @csrf
            <label for="">Nombre subcategoria</label>
            <input type="text" name="nombre">
            <label for="">¿A que categoria pertenece?</label>
            <select name="categoria" id="">
                @foreach ($categorias as $cat)
                    <option value="{{$cat->pk_categoria}}">{{$cat->nombre_cat}}</option>
                @endforeach
                <option value="" selected>Selecciona una categoria</option>
            </select>
            <input type="submit" value="guardar">
        </form>
       </div>
       <table class='contenido_tabla'>
        <thead class='contenido_tabla_head'>
            <tr>
                <th class='contenido_tabla_head_colum' >Subcategoria</th>
                <th class='contenido_tabla_head_colum'>Categoria</th>
                <th class='contenido_tabla_head_colum'>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategorias_t as $sub)
                <tr>
                    <td class='contenido_tabla_head_colum'>{{$sub->nombre_Sub}}</td>
                    <td class='contenido_tabla_head_colum'>{{$sub->categoria}}</td>
                    <td class='contenido_tabla_head_colum'> <a class= 'contenido_tabla_head_colum_el' href="">Eliminar</a> <a class= 'contenido_tabla_head_colum_el' href="">Editar</a></td>
                </tr>
            @endforeach
       </tbody>
    </table>
       <div style="border-color: blue;border-width: 2rem;border-style: solid;font-size: 3.5rem;">
        <label for="" style="font-size: 5rem">Proveedores</label>
        <form action="{{route('proveedor.insertar')}}" method="post">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            <label for="">RFC</label>
            <input type="text" name="rfc">
            <label for="">Direccion</label>
            <input type="text" name="direccion">
            <input type="submit" value="guardar">
        </form>
       </div>
       <table class='contenido_tabla'>
        <thead class='contenido_tabla_head'>
            <tr>
                <th class='contenido_tabla_head_colum' >Proveedor</th>
                <th class='contenido_tabla_head_colum'>RFC</th>
                <th class='contenido_tabla_head_colum'>Dirección</th>
                <th class='contenido_tabla_head_colum'>Estatus</th>
                <th class='contenido_tabla_head_colum'>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $prov)
                <tr>
                    <td class='contenido_tabla_head_colum'>{{$prov->nombre_p}}</td>
                    <td class='contenido_tabla_head_colum'>{{$prov->RFC}}</td>
                    <td class='contenido_tabla_head_colum'>{{$prov->direccion}}</td>
                    <td class='contenido_tabla_head_colum'>{{$prov->estatus}}</td>
                    <td class='contenido_tabla_head_colum'> <a class= 'contenido_tabla_head_colum_el' href="">Eliminar</a> <a class= 'contenido_tabla_head_colum_el' href="">Editar</a></td>
                </tr>
            @endforeach
       </tbody>
    </table>
       <div style="border-color: violet;border-width: 2rem;border-style: solid;font-size: 3.5rem;">
        <label for="" style="font-size: 5rem">Marcas</label>
        <form action="{{route('marca.insertar')}}" method="post">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            <input type="submit" value="guardar">
        </form>
       </div>
       <table class='contenido_tabla'>
        <thead class='contenido_tabla_head'>
            <tr>
                <th class='contenido_tabla_head_colum' >Marca</th>
                <th class='contenido_tabla_head_colum'>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcas as $marca)
                <tr>
                    <td class='contenido_tabla_head_colum'>{{$marca->marca_n}}</td>
                    <td class='contenido_tabla_head_colum'> <a class= 'contenido_tabla_head_colum_el' href="">Eliminar</a> <a class= 'contenido_tabla_head_colum_el' href="">Editar</a></td>
                </tr>
            @endforeach
       </tbody>
    </table>
       <div style="border-color: red;border-width: 2rem;border-style: solid;font-size: 3.5rem;">
        <label for="" style="font-size: 5rem">Articulos</label>
        <form action="{{route('articulo.insertar')}}" method="post">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            <label for="">Cantidad</label>
            <input type="number" name="cantidad">
            <label for="">Descripcion</label>
            <input type="text" name="descripcion">
            <label for="">Maximos</label>
            <input type="number" name="maximos">
            <label for="">Marca</label>
            <select name="marca" id="">
                @foreach ($marcas as $marca)
                    <option value="{{$marca->pk_marca}}">{{$marca->marca_n}}</option>
                @endforeach
            </select>
            <label for="">Proveedor</label>
            <select name="proveedor" id="">
                @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->pk_proveedor}}">{{$proveedor->nombre_p}}</option>
                @endforeach
            </select>
            <label for="">Subcategoria</label>
            <select name="subcategoria" id="">
                @foreach ($subcategorias as $subcategoria)
                    <option value="{{$subcategoria->pk_subcategoria}}">{{$subcategoria->nombre_Sub}}</option>
                @endforeach
            </select>
            <input type="submit" value="guardar"/>
        </form>
       </div>
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
            @foreach ($articulos as $art)
                <tr style="font-size: 3rem">
                    <td class="contenido_tabla_head_column">{{$art->nombre_art}}</td>
                    <td class="contenido_tabla_head_column">{{$art->solicitados}}</td>
                    <td class="contenido_tabla_head_column">{{$art->existencia_pz}}</td>
                    <td class="contenido_tabla_head_column">{{$art->status}}</td>
                    <td class="contenido_tabla_head_column">{{$art->fecha}}</td>
                    <td class="contenido_tabla_head_column">{{$art->descripcion}}</td>
                    <td class="contenido_tabla_head_column">{{$art->pedir}}</td>
                    <td class="contenido_tabla_head_column">{{$art->maximos}}</td>
                    <td class="contenido_tabla_head_column">{{$art->marca}}</td>
                    <td class="contenido_tabla_head_column">{{$art->proveedor}}</td>
                    <td class="contenido_tabla_head_column">{{$art->subcategoria}}</td>
                    <td class='contenido_tabla_head_colum'> <a class= 'contenido_tabla_head_colum_el' href="">Eliminar</a> <a class= 'contenido_tabla_head_colum_el' href="">Editar</a></td>
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