<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario con Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Formulario de Solicitud</h2>
        <form action="procesar_formulario.php" method="POST">
            <!-- Datos Personales -->
            <div class="form-group">
                <label for="rut">Rut (Obligatorio)</label>
                <input type="text" class="form-control" id="rut" name="rut" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres (Obligatorio)</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno (Obligatorio)</label>
                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno (Obligatorio)</label>
                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required>
            </div>
            <div class="form-group">
                <label for="correoElectronico">Correo Electrónico (Obligatorio)</label>
                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" required>
            </div>
            <div class="form-group">
                <label for="numeroCelular">Número de Celular (Obligatorio)</label>
                <input type="tel" class="form-control" id="numeroCelular" name="numeroCelular" required>
            </div>
            <div class="form-group">
                <label for="antiguedadLaboral">Antigüedad Laboral (Obligatorio)</label>
                <input type="text" class="form-control" id="antiguedadLaboral" name="antiguedadLaboral" required>
            </div>
            <div class="form-group">
                <label for="rentaLiquida">Renta Líquida Mensual (Obligatorio)</label>
                <input type="number" class="form-control" id="rentaLiquida" name="rentaLiquida" required>
            </div>
            <div class="form-group">
                <label for="aval">¿Cuenta con aval? (Obligatorio)</label>
                <select class="form-control" id="aval" name="aval" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terminos" name="terminos" required>
                <label class="form-check-label" for="terminos">Aceptar los términos y condiciones y la política de privacidad (Obligatorio)</label>
            </div>

            <!-- Solicitud -->
            <h4 class="mt-4">Solicitud</h4>
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

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>