<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="row register-box shadow-lg">
        <div class="col-md-6 d-none d-md-block register-image-container">
            <div class="register-image"></div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center p-3 register">
            <h2 class="text-center mb-4 titulo">Registro</h2>

            <form class="FormularioAjax" action="<?= SERVERURL ?>Ajax/UsuarioAjax.php" method="POST" data-form="save" autocomplete="off">
                <!-- Nombre y Apellido en la misma línea -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nombre" class="register-label">Nombre</label>
                        <input type="text" class="register-input" name="nombre_reg" required="" pattern="[A-Za-zÀ-ÿ\s]{1,50}" placeholder="Introduce tu nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="apellido" class="register-label lastname">Apellido</label>
                        <input type="text" class="register-input" name="apellido_reg" required="" pattern="[A-Za-zÀ-ÿ\s]{1,50}" placeholder="Introduce tu apellido">
                    </div>
                </div>
                <!-- Correo -->
                <div class="mb-3">
                    <label for="email" class="register-label">Correo</label>
                    <input type="email" class="register-input" name="correo_reg" required="" placeholder="Introduce tu correo electrónico aquí">
                </div>
                <!-- Celular -->
                <div class="mb-3">
                    <label for="celular" class="register-label">Celular</label>
                    <input type="tel" class="register-input" name="celular_reg" required="" pattern="[0-9]{10,10}" maxlength="10" placeholder="Introduce tu número de celular">
                </div>
                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="register-label">Contraseña</label>
                    <input type="password" class="register-input" name="clave1_reg" required="" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}"
                    placeholder="Introduce tu contraseña aquí">
                </div>
                <!-- Confirmar Contraseña -->
                <div class="mb-3">
                    <label for="confirmPassword" class="register-label">Confirmar Contraseña</label>
                    <input type="password" class="register-input" name="clave2_reg" required="" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}"
                    placeholder="Confirma tu contraseña aquí">
                </div>
                <!-- Botones de enviar y omitir -->
                <div class="d-flex justify-content-between">
                    <a href="<?= SERVERURL ?>login" class="text-decoration-none omitir">Omitir por ahora</a>
                    <button type="submit" class="register-btn">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>