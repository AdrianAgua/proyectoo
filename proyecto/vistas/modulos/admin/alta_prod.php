
    <div class="container-FORM mt-5">
        <h2 class="text-center mb-4">Formulario de Alta de Productos</h2>
        <form id="productoForm">
            <div class="row">
                <!-- Nombre del producto -->
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="form-label">Nombre del producto:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <!-- Código de barras -->
                <div class="col-md-6 mb-3">
                    <label for="codigoBarras" class="form-label">Código de barras:</label>
                    <input type="number" class="form-control" id="codigoBarras" name="codigoBarras" required>
                </div>

                <!-- Descripción del producto -->
                <div class="col-md-12 mb-3">
                    <label for="descripcion" class="form-label">Descripción del producto:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <!-- Imágenes del producto -->
                <div class="col-md-6 mb-3">
                    <label for="imagenes" class="form-label">Imágenes del producto:</label>
                    <input type="file" class="form-control" id="imagenes" name="imagenes" accept="image/*" multiple>
                </div>

                <!-- Stock -->
                <div class="col-md-6 mb-3">
                    <label for="stock" class="form-label">Stock disponible:</label>
                    <input type="number" class="form-control" id="stock" name="stock" required min="1">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </form>
    </div>

    <script>
        document.getElementById("productoForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Capturar valores
            const nombre = document.getElementById("nombre").value;
            const codigoBarras = document.getElementById("codigoBarras").value;
            const descripcion = document.getElementById("descripcion").value;
            const stock = document.getElementById("stock").value;
            const imagenes = document.getElementById("imagenes").files;

            // Validaciones básicas
            if (nombre.trim() === "" || descripcion.trim() === "" || stock <= 0 || codigoBarras.length < 6) {
                alert("Por favor, complete todos los campos correctamente.");
                return;
            }

            if (imagenes.length === 0) {
                alert("Debe subir al menos una imagen del producto.");
                return;
            }

            alert("Producto registrado con éxito.");
            // Aquí puedes agregar código para enviar los datos al servidor
        });
    </script>
