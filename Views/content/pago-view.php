<div class="content">
    <div class="container">
        <div class="pago">
            <div id="cantidad" class="text-center form-group mb-3 cantidad">
                <p>Almuerzo Sab 17/08</p>
                <div class="precio-y-controles row">
                    <div class="col-md-6 col-sm-6">
                        <span class="precio">$9.500</span>
                    </div>
                    <div class="controles col-md-6 col-sm-6">
                        <button class="btn menos">-</button>
                        <span class="canti">1</span>
                        <button class="btn mas">+</button>
                    </div>
                </div>
            </div>
            <h1 id="metodos-pago" class="text-center">Métodos de pago</h1>

            <!-- Botones para seleccionar método de pago -->
            <div class="d-flex flex-column align-items-center mb-3 metodos">
                <div class="payment-option" id="btnPSE">
                    <span class="icon1"><i class="fa-solid fa-building-columns"></i></span> <!-- Icono al inicio -->
                    <span>PSE</span>
                    <span class="icon2"><i class="fas fa-chevron-right"></i></span> <!-- Icono a la derecha -->
                </div>
                <div class="payment-option" id="btnTarjeta">
                    <span class="icon1"><i class="fas fa-credit-card"></i></span> <!-- Icono al inicio -->
                    <span>Tarjeta</span>
                    <span class="icon2 "><i class="fas fa-chevron-right"></i></span> <!-- Icono a la derecha -->
                </div>
            </div>

            <div id="formContainer" style="display: none;">
                <div id="payment-optionx1">
                    <div class="payment-option2">
                        <span class="icon1"><i class="fas fa-credit-card"></i></span> <!-- Icono al inicio -->
                        <div class="text-content">
                            <span class="title">Tarjeta</span>
                            <span class="subtitle">Débito o Crédito</span>
                        </div>
                        <span id="btnBack" class="icon2"><i class="fas fa-times"></i></span> <!-- Icono a la derecha -->
                    </div>
                </div>
                <div id="payment-optionx2">
                    <div id="payment-optionx2" class="payment-option3"">
                    <span class=" icon1"><i class="fa-solid fa-building-columns"></i></span> <!-- Icono al inicio -->
                        <div class="text-content">
                            <span class="title">PSE</span>
                        </div>
                        <span id="btnBack1" class="icon2"><i class="fas fa-times"></i></span> <!-- Icono a la derecha -->
                    </div>
                </div>
                <!-- Formulario de tarjeta -->
                <form id="formTarjeta" action="process_payment.php" method="POST" style="display: block;">
                    <div class="pago-targeta">
                        <div class="alerta d-flex align-items-start" role="alert">
                            <i class="fa-solid fa-lock"></i>
                            <div>
                                <p class="mb-0">La información de tu tarjeta está protegida.</p>
                                <p class="ifo-targe"> Nos asociamos con terceros de confianza para garantizar que los datos de su tarjeta se mantengan seguros. Esta pagina no tendrá acceso a la información de su tarjeta. </p>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="form-group col-md-6 col-sm-6 col-6">
                                <label for="fullName">Valor a pagar:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" value="9500" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-6">
                                <label for="fullName">Nombre:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" value="Camilo Ramirez" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6 col-6">
                                <label for="phone">Teléfono:</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="3209783453" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-6">
                                <label for="phone">Documento de Identificación:</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="XXXXXXXX">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" value="ramirezcamilo745@gmail.com" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="cardNumber1">Número de Tarjeta *</label>
                                <div class="card-inputs">
                                    <input type="text" class="form-control card-input" id="cardNumber1" maxlength="4" required placeholder="XXXX">
                                    <input type="text" class="form-control card-input" id="cardNumber2" maxlength="4" required placeholder="XXXX">
                                    <input type="text" class="form-control card-input" id="cardNumber3" maxlength="4" required placeholder="XXXX">
                                    <input type="text" class="form-control card-input" id="cardNumber4" maxlength="4" required placeholder="XXXX">
                                </div>
                                <!-- Campo oculto para el número completo -->
                                <input type="hidden" id="cardNumber" name="cardNumber">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4 col-4">
                                <label for="cvv">Código de Seguridad:</label>
                                <input type="text" class="form-control datos-targeta" id="cvv" name="cvv" required placeholder="CVV/CVC">
                            </div>
                            <div class="form-group col-sm-4 col-5">
                                <label for="expirationDate">Fecha de Expiración:</label>
                                <input type="text" class="form-control datos-targeta" id="expirationDate" name="expirationDate" placeholder="MM/YYYY" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pagar">
                        <button>PAGAR</button>
                    </div>
                </form>

                <!-- Formulario de PSE -->
                <form id="formPSE" action="pago_pse.php" method="POST" style="display: block;">
                    <div class="pago-targeta">
                        <div class="alerta d-flex align-items-start" role="alert">
                            <i class="fa-solid fa-lock"></i>
                            <div>
                                <p class="mb-0">La información de tu banco está protegida.</p>
                                <p class="ifo-targe">PSE es un servicio que te permite realizar compras o pagos debitando de tu cuenta de ahorros, corriente o deposito electrónico.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-6 col-sm-6 col-6">
                                <label for="fullName">Valor a pagar:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" value="9500" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-6">
                                <label for="fullName">Nombre:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" value="Camilo Ramirez" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="bank">Selecciona tu banco:</label>
                                <select id="bank" name="financialInstitutionCode" class="form-control" required>
                                    <option value="">Seleccione un banco</option>
                                    <?php if (!empty($banks)): ?>
                                        <?php foreach ($banks as $bank): ?>
                                            <option value="<?= $bank['pseCode'] ?>"><?= $bank['description'] ?></option>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <option value="">No se encontraron bancos</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="userType">Tipo de Usuario:</label>
                                <select id="userType" name="userType" class="form-control" required>
                                    <option value="N">Persona Natural</option>
                                    <option value="J">Persona Jurídica</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="documentType">Tipo de Identificación:</label>
                                <select id="documentType" name="dniType" class="form-control" required>
                                    <option value="CC">Cédula de Ciudadanía</option>
                                    <option value="CE">Cédula de Extranjería</option>
                                    <option value="NIT">Número de Identificación Tributaria</option>
                                    <option value="TI">Tarjeta de Identidad</option>
                                    <option value="PP">Pasaporte</option>
                                    <option value="RC">Registro Civil de Nacimiento</option>
                                    <option value="DE">Documento de Identificación Extranjero</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dniNumber">Número de Identificación:</label>
                                <input type="text" id="dniNumber" name="dniNumber" class="form-control" required placeholder="XXXXXXXX">
                            </div>
                        </div>
                    </div>
                    <div class="text-center pagar">
                        <button type="submit" >PAGAR</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>