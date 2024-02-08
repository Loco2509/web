<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <?php 
    //  encabezado
    include '../header.php'; 
    ?>
    <!-- contenido de la página aquí -->

    <div class="footer">
        <h1 class="footer__title">Contacto - SMAJ</h1>
        <div class="footer__info">
            <!-- ... -->
        </div>
        <div class="footer__links">
            <a href="#" id="portalLink">Portal de Transparencia</a>
            <!-- ... -->
        </div>
    </div>

    <!-- Modal Términos y Condiciones -->
    <div id="portalModal" class="modal-background">
        <div class="modal-content">
            <span class="close-button">&times;</span>

            <h1>Términos y Condiciones del Portal de Transparencia del Instituto SMAJ</h1>
<p>Fecha de la última actualización: 02 de julio de 2023.</p>

<h2>Aceptación de los Términos</h2>
<p>Estos Términos y Condiciones ("Términos") rigen el uso del Portal de Transparencia del Instituto SMAJ accesible a través de https://www.smaj.org/transparencia (el "Portal"). Al acceder y usar este Portal, usted acepta y está de acuerdo con estar vinculado por estos Términos y todas las leyes y regulaciones aplicables.</p>

<h2>Propiedad de la Información</h2>
<p>Todo el contenido e información presentes en este Portal son propiedad del Instituto SMAJ o se utilizan con permiso. La información proporcionada en este Portal se proporciona para el uso público con el objetivo de promover la transparencia y la rendición de cuentas. No está permitida la manipulación, distorsión o mal uso de la información sin permiso explícito del Instituto SMAJ.</p>

<h2>Uso del Portal</h2>
<p>El uso del Portal está destinado a la consulta y uso personal de la información proporcionada. No está permitido el uso del Portal para fines ilegales, difamatorios, acosadores, abusivos, fraudulentos o perjudiciales para el Instituto SMAJ o cualquier tercero.</p>

<h2>Limitación de Responsabilidad</h2>
<p>Aunque el Instituto SMAJ se esfuerza por mantener la precisión de la información proporcionada, no garantiza que la información contenida en este Portal sea completa, precisa o actual. El Instituto SMAJ no se hace responsable de cualquier daño resultante del uso o la imposibilidad de uso del Portal.</p>

<h2>Modificaciones de los Términos</h2>
<p>El Instituto SMAJ se reserva el derecho de modificar estos Términos en cualquier momento. Es su responsabilidad revisar regularmente cualquier cambio. Al continuar utilizando el Portal, usted acepta los Términos modificados.</p>

<h2>Contacto</h2>
<p>Si tiene alguna pregunta o preocupación sobre estos Términos y Condiciones, por favor contáctenos:</p>
<ul>
    <li>Por correo electrónico: info@smaj.org</li>
    <li>Por teléfono: 555-555-5555</li>
</ul>


        <!-- Botón para aceptar términos y condiciones -->
        <button id="acceptPortalButton" class="accept-button">Acepto</button>
    </div>
</div>

    <!-- Incluir el archivo JavaScript -->
    <script src="js../portalModal.js"></script>
    </body>
</html>