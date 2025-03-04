
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
      <h3 class="text-center mb-4">Iniciar sesión</h3>
      <form>
        <!-- Campo de correo electrónico -->
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Introduce tu correo" required>
        </div>
        
        <!-- Campo de contraseña -->
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña" required>
        </div>

        <!-- Botón de login -->
        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
        
        <div class="mt-3 text-center">
          <small>¿No tienes cuenta? <a href="index.php?accion=registro">Regístrate aquí</a></small>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
