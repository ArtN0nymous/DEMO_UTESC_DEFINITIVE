<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
    <div class="contenedor__funcion">
        <button type="button" class="btn btn-primary boton__funcion"  data-toggle="modal" data-target="#modal__categorias">Categorias  <i class="bi bi-plus-lg" > </i></button>
        
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
                        <td class='contenido_tabla_head_colum'> 
                            <form action="{{route('categoria.eliminar',$cat->pk_categoria)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar">
                            </form>    
                        <a class= 'contenido_tabla_head_colum_el' onclick="getCategoria({{$cat->pk_categoria}})" data-toggle="modal" data-target="#modal__editar_cat">Editar</a></td>
                    </tr>
                @endforeach
           </tbody>
        </table>
    </div>
       <div  class="contenedor__funcion">
        <button type="button" class="btn btn-primary boton__funcion"  data-toggle="modal" data-target="#modal__subcategorias">Subcategorias  <i class="bi bi-plus-lg" > </i></button>
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
                        <td class='contenido_tabla_head_colum'>
                            <form action="{{route('subcategoria.eliminar',$sub->pk_subcategoria)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar">
                            </form>  
                            <a class= 'contenido_tabla_head_colum_el' onclick="getSubcategoria({{$sub->pk_subcategoria}})"  data-toggle="modal" data-target="#modal__editar_subcat">Editar</a></td>
                    </tr>
                @endforeach
           </tbody>
        </table>
       </div>
      
       <div  class="contenedor__funcion">
        <button type="button" class="btn btn-primary boton__funcion"  data-toggle="modal" data-target="#modal__proveedores">Proveedores  <i class="bi bi-plus-lg" > </i></button>
       
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
                        <td class='contenido_tabla_head_colum'>
                            <form action="{{route('proveedor.eliminar',$prov->pk_proveedor)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar">
                            </form> 
                            <a class= 'contenido_tabla_head_colum_el' onclick="getProveedor({{$prov->pk_proveedor}})" data-toggle="modal" data-target="#modal__proveedor_actualizar">Editar</a></td>
                    </tr>
                @endforeach
           </tbody>
        </table> 
       </div>
       
       <div class="contenedor__funcion">
        <button type="button" class="btn btn-primary boton__funcion"  data-toggle="modal" data-target="#modal__marcas">Marcas  <i class="bi bi-plus-lg" > </i></button>
    
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
                        <td class='contenido_tabla_head_colum'>
                            <form action="{{route('marca.eliminar',$marca->pk_marca)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar">
                            </form> 
                            <a class= 'contenido_tabla_head_colum_el' onclick="getMarca({{$marca->pk_marca}})" data-toggle="modal" data-target="#modal__edit_marca">Editar</a></td>
                    </tr>
                @endforeach
           </tbody>
        </table>
       </div>
     
       <div class="contenedor__funcion">
        <button type="button" class="btn btn-primary boton__funcion"  data-toggle="modal" data-target="#modal__articulo">Articulos  <i class="bi bi-plus-lg" > </i></button>
       
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
                        <td class='contenido_tabla_head_colum'>
                            <form action="{{route('articulo.eliminar',$art->pk_articulo)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar">
                            </form> 
                            <a class= 'contenido_tabla_head_colum_el' onclick="getArticulo({{$art->pk_articulo}})" data-toggle="modal" data-target="#modal__editar_art">Editar</a></td>
                    </tr>
                @endforeach
           </tbody>
        </table>

       </div>
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

{{-- /////////////////////////// M O D A L E S /////////////////////////////// --}}
<!-- Modal Categorias-->
<div class="modal fade" id="modal__categorias" tabindex="-1" aria-labelledby="modal__categoriasLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__categoriasLabel">Añadir una Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('categoria.insertar')}}" method="post" class="form__funcion">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre de la categoria</label>
                    <span>Nombre de la Categoria</span>
                    <input class="form-control" type="text" name="nombre" placeholder="Escriba un nombre de categoria">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Crear">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
  <!-- Modal Subcategorias-->
<div class="modal fade" id="modal__subcategorias" tabindex="-1" aria-labelledby="modal__subcategoriasLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__subcategoriasLabel">Añadir una Subcategoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('subcategoria.insertar')}}" method="post" class="form__funcion">
                @csrf

                <label for="">Nombre subcategoria</label>
           
            <label for="">¿A que categoria pertenece?</label>
            

                <div class="form-group">
                    <label for="nombre">Nombre de la categoria</label>
                    <span>Nombre de la Categoria</span>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre de subcategoria">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre de la categoria</label>
                    <span>Nombre de la Categoria</span>
                    <select  class="form-control" name="categoria" id="">
                        @foreach ($categorias as $cat)
                            <option value="{{$cat->pk_categoria}}">{{$cat->nombre_cat}}</option>
                        @endforeach
                        <option value="" selected>Selecciona una categoria</option>
                    </select>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Crear">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>


    <!-- Modal Proveedores-->
<div class="modal fade" id="modal__proveedores" tabindex="-1" aria-labelledby="modal__proveedoresLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__proveedoresLabel">Añadir un proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('proveedor.insertar')}}" method="post" class="form__funcion">
                
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del proveedor</label>
                    <span>Nombre del proveedor</span>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre del proveedor">
                </div>

                <div class="form-group">
                    <label for="nombre">RFC</label>
                    <span>RFC</span>
                    <input type="text" name="rfc"  class="form-control" placeholder="Escriba el RFC del proveedor">
                </div>

                <div class="form-group">
                    <label for="nombre">Direccion</label>
                    <span>Direccion</span>
                    <input type="text" name="direccion"  class="form-control" placeholder="Escriba la direccion del proveedor">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Crear">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>

   <!-- Modal Marcas-->
<div class="modal fade" id="modal__marcas" tabindex="-1" aria-labelledby="modal__marcasLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__marcasLabel">Añadir una Marca</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('marca.insertar')}}" method="post" class="form__funcion">
                
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre de la marca</label>
                    <span>Nombre de la marca</span>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre de la marca">
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Crear">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>

   <!-- Modal Articulos-->
<div class="modal fade" id="modal__articulo" tabindex="-1" aria-labelledby="modal__articuloLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__articuloLabel">Añadir un Articulo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('articulo.insertar')}}" method="post" class="form__funcion">
                
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del Articulo</label>
                    <span>Nombre del Articulo</span>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre del Articulo">
                </div>

                <div class="form-group">
                    <label for="nombre">Cantidad</label>
                    <span>Cantidad</span>
                    <input type="text" name="cantidad"  class="form-control" placeholder="Escriba la cantidad del Articulo">
                </div>

                <div class="form-group">
                    <label for="nombre">Descripcion</label>
                    <span>Descripcion</span>
                    <input type="text" name="descripcion"  class="form-control" placeholder="Escriba la descripcion del articulo">
                </div>

                <div class="form-group">
                    <label for="nombre">Maximos</label>
                    <span>Maximos</span>
                    <input type="text" name="maximos"  class="form-control" placeholder="Escriba lo maximo de articulos">
                </div>

                
                <div class="form-group">
                    <select name="marca" id=""  class="form-control">
                        @foreach ($marcas as $marca)
                            <option value="{{$marca->pk_marca}}">{{$marca->marca_n}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                <select name="proveedor" id=""  class="form-control">
                    @foreach ($proveedores as $proveedor)
                        <option value="{{$proveedor->pk_proveedor}}">{{$proveedor->nombre_p}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <select name="subcategoria" id=""  class="form-control">
                    @foreach ($subcategorias as $subcategoria)
                        <option value="{{$subcategoria->pk_subcategoria}}">{{$subcategoria->nombre_Sub}}</option>
                    @endforeach
                </select>
            </div>







                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Crear">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
 <!-- Modal Editar Categoria -->
 <div class="modal fade" id="modal__editar_cat" tabindex="-1" aria-labelledby="modal__editar_catLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__editar_catLabel">Editar una categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method="post" class="form__funcion" id="categoria_actualizar">
                
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre de la Categoria</label>
                    <span>Nombre de la Categoria</span>
                    <input type="hidden" id="pk_categoria" value='' disabled>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre de la categoria">
                </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="button" class="btn btn-primary" value="Actualizar" onclick="update('categoria')">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
  
<!-- Modal Editar Subcategoria -->

<div class="modal fade" id="modal__editar_subcat" tabindex="-1" aria-labelledby="modal__editar_subcatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__editar_subcatLabel">Editar una Subcategoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method="post" class="form__funcion" id="subcategoria_actualizar">
                
                @csrf
                @method('put')
                <label class="art">Nombre Subcategoria:</label>
                <input type="hidden" id="pk_subcategoria" value='' disabled>
                <input type="text" id="subcategoria_nombre" value="" name='nombre' class="subc">
                <select name="fk_categoria" id="edit_categoria_sub" class="seleccionar">

                </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="button" class="btn btn-primary" value="Actualizar" onclick="update('subcategoria')">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>

<!-- Modal Editar Proveedor -->
<div class="modal fade" id="modal__proveedor_actualizar" tabindex="-1" aria-labelledby="modal__proveedor_actualizarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__proveedor_actualizarLabel">Editar una Proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method="post" class="form__funcion" id="proveedor_actualizar">
                
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre del proveedor</label>
                    <span>Nombre del proveedor</span>
                    <input type="hidden" id="pk_proveedor" value='' disabled>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre del proveedor">
                    <input type="text" name="RFC" id='proveedor_rfc' class="form-control" placeholder="RFC">
                    <input type="text" name="direccion" id="proveedor_direccion" class="form-control" placeholder="Direccion">
                </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="button" class="btn btn-primary" value="Actualizar" onclick="update('proveedor')">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
<!-- Modal Editar Marca -->
<div class="modal fade" id="modal__edit_marca" tabindex="-1" aria-labelledby="modal__edit_marcaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__edit_marcaLabel">Editar una categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method="post" class="form__funcion" id="marca_actualizar">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre de la Marca</label>
                    <span>Nombre de la Marca</span>
                    <input type="hidden" id="pk_marca" value='' disabled>
                    <input type="text" name="nombre"  class="form-control" placeholder="Escriba un nombre de la marca">
                </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="button" class="btn btn-primary" value="Actualizar" onclick="update('marca')">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
<!-- Modal Editar Articulo -->
<div class="modal fade" id="modal__editar_art" tabindex="-1" aria-labelledby="modal__editar_artLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal__editar_artLabel">Editar un Articulo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method="post" class="form__funcion" id="articulo_actualizar"> 
                @csrf
                @method('put')
                <label>Nombre Subcategoria:</label>
                <input type="hidden" id="pk_articulo" value='' disabled>
                <input type="text" name="nombre"  id="articulo_nombre"  class="form-control" placeholder="Escriba un nombre">
                <input type="text" name="cantidad"  id="articulo_cantidad" class="form-control" placeholder="Escriba una cantidad">
                <input type="text" id="articulo_maximos" name="maximos"  class="form-control" placeholder="Escriba un cantidad maxima">
                <input type="text"  id="articulo_descripcion" name="descripcion"  class="form-control" placeholder="Escriba una descripcion">
                <label class="art">Marca:</label>
                <select name="fk_marca" id="articulo_marcas" class="seleccionar">

                </select>
                <label class="art">Proveedor:</label>
                <select name="fk_proveedor" id="articulo_proveedores" class="seleccionar">

                </select>
                <label class="art">Subcategoria:</label>
                <select name="fk_subcategoria" id="articulo_subcategorias" class="seleccionar">

                </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="button" class="btn btn-primary" value="Actualizar" onclick="update('articulo')">
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
<script>
    function getCategoria(pk_categoria){
        $.ajax({
            type:'GET',
            url:'/getCategoria/'+pk_categoria,
            success:function(data) {
                $("#categoria_nombre").val(data.categoria.nombre_cat);
                $("#pk_categoria").val(data.categoria.pk_categoria);
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getSubcategoria(pk_subcategoria){
        $.ajax({
            type:'GET',
            url:'/getSubcategoria/'+pk_subcategoria,
            success:function(data){
                $("#pk_subcategoria").val(data.subcategoria.pk_subcategoria);
                $("#subcategoria_nombre").val(data.subcategoria.nombre_Sub);
                getCategorias(data.subcategoria.fk_categoria,'edit_categoria_sub');
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getCategorias(pk_categoria,element){
        $.ajax({
            type:'GET',
            url:'/getCategorias',
            success:function(data){
                let categorias = data.categorias;
                let options ='';
                for(var i in categorias){
                    if(pk_categoria==categorias[i].pk_categoria){
                        options+=`<option value="${categorias[i].pk_categoria}" selected>${categorias[i].nombre_cat}</option>`;
                    }else{
                        options+=`<option value="${categorias[i].pk_categoria}">${categorias[i].nombre_cat}</option>`;
                    }
                }
                var select = document.getElementById(element);
                select.innerHTML=options;
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getProveedor(pk_proveedor){
        $.ajax({
            type:'GET',
            url:'/getProveedor/'+pk_proveedor,
            success:function(data){
                $("#pk_proveedor").val(data.proveedor.pk_proveedor);
                $("#proveedor_rfc").val(data.proveedor.RFC);
                $("#proveedor_direccion").val(data.proveedor.direccion);
                $("#proveedor_nombre").val(data.proveedor.nombre_p);
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getMarca(pk_marca){
        $.ajax({
            type:'GET',
            url:'/getMarca/'+pk_marca,
            success:function(data){
                $("#pk_marca").val(data.marca.pk_marca);
                $("#marca_nombre").val(data.marca.marca_n);
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getArticulo(pk_articulo){
        $.ajax({
            type:'GET',
            url:'/getArticulo/'+pk_articulo,
            success:function(data){
                $("#pk_articulo").val(data.articulo.pk_articulo);
                $("#articulo_nombre").val(data.articulo.nombre_art);
                $("#articulo_cantidad").val(data.articulo.existencia_pz);
                $("#articulo_maximos").val(data.articulo.maximos);
                $("#articulo_descripcion").val(data.articulo.descripcion);
                let fk_marca = data.articulo.fk_marca;
                let fk_proveedor=data.articulo.fk_proveedor;
                let fk_subcategoria = data.articulo.fk_subcategoria;
                getMarcas(fk_marca,'articulo_marcas');
                getProveedores(fk_proveedor,'articulo_proveedores');
                getSubcategorias(fk_subcategoria,'articulo_subcategorias');
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function update(element){
        let pk=$("#pk_"+element).val();
        if(pk!=''&&pk!=undefined){
            $("#"+element+"_actualizar").attr('action','/'+element+'/actualizar/'+pk);
            $("#"+element+"_actualizar").submit();
        }else{
            console.log('PK VACÍO:'+pk);
        }
    }
    function getMarcas(pk_marca,element){
        $.ajax({
            type:'GET',
            url:'/getMarcas',
            success:function(data){
                let marcas = data.marcas;
                let options ='';
                for(var i in marcas){
                    if(pk_marca==marcas[i].pk_marca){
                        options+=`<option value="${marcas[i].pk_marca}" selected>${marcas[i].marca_n}</option>`;
                    }else{
                        options+=`<option value="${marcas[i].pk_marca}">${marcas[i].marca_n}</option>`;
                    }
                }
                var select = document.getElementById(element);
                select.innerHTML=options;
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getProveedores(pk_proveedor,element){
        $.ajax({
            type:'GET',
            url:'/getProveedores',
            success:function(data){
                let proveedores = data.proveedores;
                let options ='';
                for(var i in proveedores){
                    if(pk_proveedor==proveedores[i].pk_proveedor){
                        options+=`<option value="${proveedores[i].pk_proveedor}" selected>${proveedores[i].nombre_p}</option>`;
                    }else{
                        options+=`<option value="${proveedores[i].pk_proveedor}">${proveedores[i].nombre_p}</option>`;
                    }
                }
                var select = document.getElementById(element);
                select.innerHTML=options;
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
    function getSubcategorias(pk_subcategoria,element){
        $.ajax({
            type:'GET',
            url:'/getSubcategorias',
            success:function(data){
                let subcategorias = data.subcategorias;
                let options ='';
                for(var i in subcategorias){
                    if(pk_subcategoria==subcategorias[i].pk_subcategoria){
                        options+=`<option value="${subcategorias[i].pk_subcategoria}" selected>${subcategorias[i].nombre_Sub}</option>`;
                    }else{
                        options+=`<option value="${subcategorias[i].pk_subcategoria}">${subcategorias[i].nombre_Sub}</option>`;
                    }
                }
                var select = document.getElementById(element);
                select.innerHTML=options;
            },
            error: function (xhr,ajaxOptions,thrownError){alert(xhr.responseText);}
        });
    }
</script>
</html>