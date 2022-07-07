<form action="{{$action}}" method="{{$method}}" id={{$id}} class="{{$class}}">
    @csrf
    <h1>hola</h1>
    <x-TextInput type="text" id="nombre" spanText='Nombre' placeholder ='Introduzca su nombre'/>
    <x-TextInput type="text" id="apaterno" spanText='Apellido Materno' placeholder ='Introduzca su apellido materno'/>
    <x-TextInput type="text" id="amaterno" spanText='Apellido Paterno' placeholder ='Introduzca su apellido paterno'/>

</form>