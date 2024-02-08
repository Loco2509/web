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
            <a href="#" id="privacyLink">Politicas de privacidad</a>
            <!-- ... -->
        </div>
    </div>

    <!-- Modal Términos y Condiciones -->
    <div id="privacyModal" class="modal-background">
        <div class="modal-content">
            <span class="close-button">&times;</span>

            <h1>Políticas de Privacidad del Instituto SMAJ</h1>
            <p>Última actualización: 02 de julio de 2023</p>
            <p>El Instituto SMAJ ("nosotros", "nuestro", "nuestra") opera la página web https://www.smaj.org (en adelante, "el Servicio").</p>

            <h2>Recopilación y Uso de Información</h2>
            <p>Recopilamos varios tipos de información con diversas finalidades para proporcionar y mejorar nuestro Servicio a usted.</p>

            <h2>Datos Personales</h2>
            <p>Mientras utiliza nuestro Servicio, podemos pedirle que nos proporcione cierta información de identificación personal que se puede usar para contactar o identificarlo ("Datos personales"). Esta información puede incluir, pero no se limita a:</p>
            <ul>
                <li>Correo electrónico</li>
                <li>Nombre y apellido</li>
                <li>Número de teléfono</li>
            </ul>

            <h2>Seguridad de los Datos</h2>
            <p>La seguridad de sus datos es importante para nosotros, pero recuerde que ninguna forma de transmisión a través de Internet o método de almacenamiento electrónico es 100% seguro. Aunque nos esforzamos por utilizar medios comercialmente aceptables para proteger sus datos personales, no podemos garantizar su seguridad absoluta.</p>

            <h2>Enlaces a Otros Sitios</h2>
            <p>Nuestro Servicio puede contener enlaces a otros sitios que no son operados por nosotros. Si hace clic en el enlace a un tercero, será dirigido al sitio de ese tercero. Le recomendamos encarecidamente que revise la política de privacidad de cada sitio que visite.</p>
            <p>No tenemos control ni asumimos ninguna responsabilidad por el contenido, las políticas de privacidad o las prácticas de los sitios o servicios de terceros.</p>

            <h2>Cambios en Esta Política de Privacidad</h2>
            <p>Podemos actualizar nuestra Política de Privacidad de vez en cuando. Le notificaremos cualquier cambio publicando la nueva Política de Privacidad en esta página.</p>

            <p>Le aconsejamos que revise esta Política de Privacidad periódicamente para ver si hay cambios. Los cambios a esta Política de Privacidad son efectivos cuando se publican en esta página.</p>

            <h2>Contacto</h2>
            <p>Si tiene alguna pregunta sobre esta Política de Privacidad, por favor contáctenos:</p>
            <ul>
                <li>Por correo electrónico: info@smaj.org</li>
                <li>Por teléfono: 555-555-5555</li>
            </ul>
        <!-- Botón para aceptar términos y condiciones -->
        <button id="acceptPrivacyButton" class="accept-button">Acepto</button>
    </div>
</div>

    <!-- Incluir el archivo JavaScript -->
    <script src="js../privacyModal.js"></script>
    </body>
</html>