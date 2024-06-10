<div class="form-group">
    <label for="antiguedadLaboral">Antigüedad Laboral</label>
    <input type="text" class="form-control" id="antiguedadLaboral" name="antiguedadLaboral" required>
</div>
<div class="form-group">
    <label for="rentaLiquida">Renta Líquida Mensual</label>
    <input type="number" class="form-control" id="rentaLiquida" name="rentaLiquida" required>
</div>
<div class="form-group">
    <label for="aval">¿Cuenta con aval?</label>
    <select class="form-control" id="aval" name="aval" required>
        <option value="">Seleccione una opción</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>
<button type="button" class="btn btn-secondary" onclick="prevStep()">Anterior</button>
<button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>