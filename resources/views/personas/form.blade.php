<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $persona->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $persona->apellido ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $persona->fecha_nacimiento ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Correo Personal</label>
    <input type="email" name="correo_personal" class="form-control" value="{{ old('correo_personal', $persona->correo_personal ?? '') }}">
</div>
<div class="mb-3">
    <label>Correo Corporativo</label>
    <input type="email" name="correo_corporativo" class="form-control" value="{{ old('correo_corporativo', $persona->correo_corporativo ?? '') }}">
</div>
<div class="mb-3">
    <label>Dirección</label>
    <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $persona->direccion ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Profesión</label>
    <input type="text" name="profesion" class="form-control" value="{{ old('profesion', $persona->profesion ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Área</label>
    <select name="area" class="form-select" required>
        @php
            $areas = ['comunicacion', 'arte', 'dpcc', 'ccss', 'cyt', 'matematica', 'fisica', 'religion'];
        @endphp
        @foreach($areas as $area)
            <option value="{{ $area }}" {{ old('area', $persona->area ?? '') == $area ? 'selected' : '' }}>
                {{ ucfirst($area) }}
            </option>
        @endforeach
    </select>
</div>
