<div class="form-group">
    <label for="rut">Rut</label>
    <input type="text" class="form-control" id="rut" name="rut" maxlength="10" required oninput="checkRut(this)">
</div>
<div class="form-group mb-2">
    <label for="nombres">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" required>
</div>
<div class="form-group mb-2">
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required>
</div>
<div class="form-group mb-2">
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required>
</div>
<div class="form-group mb-2">
    <label for="correoElectronico">Correo Electrónico</label>
    <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" required>
</div>
<div class="form-group mb-2">
    <label for="numeroCelular">Número de Celular</label>
    <input type="tel" class="form-control" id="numeroCelular" name="numeroCelular" required>
</div>
<button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>