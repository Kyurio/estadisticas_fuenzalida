<form action="">
    <input type="text" type="hidden" name="token">
    <div class="form-group">
        <label for="codigoPropiedad">Código de Propiedad</label>
        <input type="text" class="form-control" id="codigoPropiedad" name="codigoPropiedad">
    </div>
    <div class="form-group">
        <label for="operacion">Operación (Venta o arriendo)</label>
        <select class="form-control" id="operacion" name="operacion">
            <option value="">Seleccione una opción</option>
            <option value="Venta">Venta</option>
            <option value="Arriendo">Arriendo</option>
        </select>
    </div>
    <div class="form-group">
        <label for="region">Región</label>
        <input type="text" class="form-control" id="region" name="region">
    </div>
    <div class="form-group">
        <label for="comuna">Comuna</label>
        <input type="text" class="form-control" id="comuna" name="comuna">
    </div>
    <div class="form-group">
        <label for="fechaSolicitud">Fecha de Solicitud</label>
        <input type="date" class="form-control" id="fechaSolicitud" name="fechaSolicitud">
    </div>
    <div class="form-group">
        <label for="valor">Valor del Arriendo o Venta</label>
        <input type="number" class="form-control" id="valor" name="valor">
    </div>
    <div class="form-group">
        <label for="moneda">Tipo de Moneda</label>
        <select class="form-control" id="moneda" name="moneda">
            <option value="">Seleccione una opción</option>
            <option value="CLP">CLP</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
        </select>
    </div>
    <div class="form-group">
        <label for="codigoVerificacion">Código de Verificación</label>
        <input type="text" class="form-control" id="codigoVerificacion" name="codigoVerificacion">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terminos" name="terminos" required>
        <label class="form-check-label" for="terminos">Aceptar los términos y condiciones y la política de
            privacidad</label>
    </div>
    <button type="button" class="btn btn-secondary" onclick="prevStep()">Anterior</button>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>