<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
  <div class="row login-box shadow-lg">
    <div class="col-md-6 d-none d-md-block login-image-container">
      <div class="login-image"></div>
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center p-5 info">
      <h2 class="text-center mb-4">Inicia Sesión</h2>

      <form action="" method="POST" autocomplete="off">
        <div class="mb-3">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-input" name="correo_log" required="" placeholder="Introduce tu correo electrónico aquí">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-input" name="clave_log" required="" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}" placeholder="Introduzca su contraseña aquí">
        </div>
        <div class="text-center mt-3 cont">
          <a href="#" class="text-decoration-none btn-cont">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="btn btn-warning">Inicia Sesión</button></a>
      </form>

      <div class="text-center mt-3">
        <a href="<?= SERVERURL ?>registro" class="text-decoration-none btn-regis">Registrarme</a>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['correo_log']) && isset($_POST['clave_log']) ){
  require_once "./Controller/LoginControlador.php";
  $ins_login= new LoginControlador();
  echo $ins_login->iniciar_sesion_controlador();
}
?>