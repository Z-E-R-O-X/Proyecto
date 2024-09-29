<?php
$apiKey = "4Vj8eK4rloUd272L48hsrarnUA"; // API Key de PayU
$merchantId = "508029"; // Merchant ID de PayU
$accountId = "512321"; // Account ID de PayU

$referenceCode = "ORDER_" . time(); // El código único con la marca de tiempo actual
$currency = "COP"; // Moneda en Pesos Colombianos
$description = "Pago de Prueba PSE";
$buyerEmail = "usuario@email.com"; // Correo del comprador
$responseUrl = "http://localhost/PROYECTO/pago"; // URL de respuesta después del pago
$confirmationUrl = "https://www.tusitio.com/confirmacion"; // URL de confirmación de pago

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount']; // Capturar el monto del formulario

    // Generar la firma (signature) con el monto actualizado
    $signature = md5("$apiKey~$merchantId~$referenceCode~$amount~$currency");

    // Redirigir a PayU
    echo "
    <form method='post' action='https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/' id='payuForm'>
        <input type='hidden' name='merchantId' value='$merchantId'>
        <input type='hidden' name='accountId' value='$accountId'>
        <input type='hidden' name='description' value='$description'>
        <input type='hidden' name='referenceCode' value='$referenceCode'>
        <input type='hidden' name='amount' value='$amount'>
        <input type='hidden' name='currency' value='$currency'>
        <input type='hidden' name='signature' value='$signature'>
        <input type='hidden' name='buyerEmail' value='$buyerEmail'>
        <input type='hidden' name='responseUrl' value='$responseUrl'>
        <input type='hidden' name='confirmationUrl' value='$confirmationUrl'>
        <input type='hidden' name='paymentMethod' value='PSE'> <!-- Asegúrate de que este campo esté correcto -->
        <input type='hidden' name='test' value='1'>
    </form>
    <script>
        document.getElementById('payuForm').submit();
    </script>
    ";
    exit; // Detener el script para evitar que se ejecute el resto del código
}
?>

<div class="content"> 
    <div class="container">
        <div class="pago">
            <div class="text-center form-group mb-3 cantidad">
                <p>Almuerzo Sab 17/08</p>
                <div class="precio-y-controles">
                    <span class="precio">$9.500</span>
                    <div class="controles">
                        <button class="btn menos">-</button>
                        <span class="canti">1</span>
                        <button class="btn mas">+</button>
                    </div>
                </div>
            </div>
            <h1 class="text-center">METODO DE PAGO</h1>

            <form method="post">
                <input type="hidden" name="merchantId" value="<?php echo $merchantId; ?>">
                <input type="hidden" name="accountId" value="<?php echo $accountId; ?>">
                <input type="hidden" name="description" value="<?php echo $description; ?>">
                <input type="hidden" name="referenceCode" value="<?php echo $referenceCode; ?>">
                <input type="hidden" name="amount" id="amount" value="9500" required>
                <input type="hidden" name="currency" value="<?php echo $currency; ?>">
                <input type="hidden" name="buyerEmail" value="<?php echo $buyerEmail; ?>">
                <input type="hidden" name="responseUrl" value="<?php echo $responseUrl; ?>">
                <input type="hidden" name="confirmationUrl" value="<?php echo $confirmationUrl; ?>">
                <input type="hidden" name="paymentMethod" value="PSE"> <!-- Añadir este campo -->
                <input type="hidden" name="test" value="1">
                <div class="text-center enviar">
                    <button type="submit">ENVIAR</button>
                </div>
            </form>

        </div>
    </div>
</div>