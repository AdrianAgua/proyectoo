
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
      <h3 class="text-center mb-4">Registrarse</h3>
      <form>

        <!--Campo de Nombre-->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo:</label>
            <input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre y Apellidos" required>
        </div>

        <!-- Campo de correo electrónico -->
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Introduce un correo" required>
        </div>
        
        <!-- Campo de contraseña -->
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Crea una contraseña" required>
        </div>

        <!-- Campo de contraseña -->
        <div class="mb-3">
          <label for="password" class="form-label">Confirmar contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Vuelva a introducir la contraseña" required>
        </div>

        <!-- Botón de Registro -->
        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
      </form>
    </div>
  </div>
</body>
</html>
