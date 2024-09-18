<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="row login-box shadow-lg">
      <div class="col-md-6 d-none d-md-block login-image-container">
        <div class="login-image"></div>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center p-5">
        <h2 class="text-center mb-4">Inicia Sesión</h2>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico aquí">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Introduzca su contraseña aquí">
          </div>
          <div class="text-center mt-3">
          <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
        </div>
          <button type="submit" class="btn btn-warning" onclick="button_login('<?= SERVERURL ?>home-user/')">Inicia Sesión</button>
        </form>
        <div class="text-center mt-3">
          <a href="<?= SERVERURL ?>Views/content/registro-view.php" class="text-decoration-none">Registrarme</a>
        </div>
      </div>
    </div>
</div>





    

