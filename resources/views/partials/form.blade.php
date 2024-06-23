<div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $persona->apellido ?? '') }}" required>
</div>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $persona->nombre ?? '') }}" required>
</div>
<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $persona->direccion ?? '') }}" required>
</div>
<div class="form-group">
    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $persona->fecha_nacimiento ?? '') }}" required>
</div>
<div class="form-group">
    <label for="edad">Edad</label>
    <input type="number" class="form-control" id="edad" name="edad" value="{{ old('edad', $persona->edad ?? '') }}" required>
</div>
<div class="form-group">
    <label for="sueldo">Sueldo</label>
    <input type="number" step="0.01" class="form-control" id="sueldo" name="sueldo" value="{{ old('sueldo', $persona->sueldo ?? '') }}" required>
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $persona->estado ?? '') }}" required>
</div>
<div class="form-group">
    <label for="sexo">Sexo</label>
    <select class="form-control" id="sexo" name="sexo" required>
        <option value="Masculino" {{ old('sexo', $persona->sexo ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="Femenino" {{ old('sexo', $persona->sexo ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
    </select>
</div>
