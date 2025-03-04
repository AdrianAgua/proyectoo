<div class="container-FORM mt-5">
        <h2 class="text-center mb-4">Formulario de Alta de Personal</h2>
        <form id="altaForm">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="form-label">Nombre completo:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="documento" class="form-label">Número de documento (DNI, cédula, etc.):</label>
                    <input type="text" class="form-control" id="documento" name="documento" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="telefono" class="form-label">Teléfono de contacto:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required pattern="\d{10}" placeholder="Ej. 1234567890">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="correo" class="form-label">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="puesto" class="form-label">Puesto o cargo a desempeñar:</label>
                    <select class="form-select" id="puesto" name="puesto" required>
                        <option value="">Seleccione</option>
                        <option value="Desarrollador">Desarrollador</option>
                        <option value="Diseñador">Diseñador</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Gerente">Gerente</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="fechaIngreso" class="form-label">Fecha de ingreso:</label>
                    <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" required>
                </div>

                <div class="col-md-6 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="condiciones" name="condiciones" required>
                    <label class="form-check-label" for="condiciones">Acepto las condiciones laborales</label>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="cv" class="form-label">Adjuntar CV (opcional):</label>
                    <input type="file" class="form-control" id="cv" name="cv">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="comentarios" class="form-label">Comentarios adicionales (opcional):</label>
                    <textarea class="form-control" id="comentarios" name="comentarios"></textarea>
                </div>

                <div class="col-md-6 mb-3 enviar-container">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

            </div>
            <?php
            $registro= new Controlador();
            $registro= $registro->alta_per();
            ?>
        </form>
    </div>


    <script>
        document.getElementById("altaForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Validación de correo electrónico
            const email = document.getElementById("correo").value;
            const telefono = document.getElementById("telefono").value;

            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const phoneRegex = /^\d{10}$/;

            if (!emailRegex.test(email)) {
                alert("Por favor, ingrese un correo electrónico válido.");
                return;
            }

            if (!phoneRegex.test(telefono)) {
                alert("El número de teléfono debe tener 10 dígitos.");
                return;
            }
            // Aquí puedes agregar el código para enviar los datos a un servidor o procesarlos como desees.
        });
    </script>
