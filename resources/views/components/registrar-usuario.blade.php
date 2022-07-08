<div>
    <form action="" class="form">
        @csrf
        <label for="" class="form_label">
            <img class="form_img" src="{{asset('img/utesc_logo_black.png')}}" alt="Logo UTESC">
         </label>
        <label for="nombre" class="form_label">
            <span class="form_span">Nombre</span>
            <input class="form_input" type="text" name="nombre" id="nombre">
        </label>
        <label for="apaterno" class="form_label">
            <span class="form_span">Apellido paterno</span>
            <input class="form_input" type="text" name="apaterno" id="apaterno">
        </label>
        <label for="amaterno" class="form_label">
            <span class="form_span">Apellido materno</span>
            <input class="form_input" type="text" name="amaterno" id="amaterno">
        </label>
        <label for="fechanac" class="form_label">
            <span class="form_span">Fecha de nacimiento</span>
            <input class="form_input" type="date" name="fechanac" id="fechanac">
        </label>
        <label for="genero" class="form_label">
            <span class="form_span">Género</span>
            <select class="form_select" name="genero" id="genero">
                <option value="">Seleccione un genero</option>
            </select>
        </label>
        <label for="correo" class="form_label">
            <span class="form_span">Correo Electrónico</span>
            <input class="form_input" type="email" name="correo" id="correo">
        </label>
        <label for="telefono" class="form_label">
            <span class="form_span">Número de Teléfono</span>
            <input class="form_input" type="text" name="telefono" id="telefono">
        </label>
        
        <label for="puesto" class="form_label">
            <span class="form_span">Puesto</span>
            <select class="form_select" name="puesto" id="puesto">
                <option value="">Seleccione un puesto</option>
            </select>
        </label>
        <label for="turno" class="form_label">
            <span class="form_span">Turno</span>
            <select class="form_select" name="turno" id="turno">
                <option value="">Seleccione un turno</option>
            </select>
        </label>
        <input type="submit" value="Registrarse" class="form_button">
    </form>
</div>