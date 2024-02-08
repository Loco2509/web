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
            <a href="#" id="termsLink">Términos y condiciones</a>
            <!-- ... -->
        </div>
    </div>

    <!-- Modal Términos y Condiciones -->
    <div id="termsModal" class="modal-background">
        <div class="modal-content">
            <span class="close-button">&times;</span>

            <h1>Términos y Condiciones del Instituto SMAJ</h1>
<p>Fecha de la última actualización: 02 de julio de 2023.</p>

<h2>Aceptación de los Términos</h2>
<p>Estos Términos y Condiciones ("Términos") establecen los términos legales de su uso de nuestra página web https://www.smaj.org (el "Sitio Web") y cualquier de sus productos, software, servicios y web asociadas (colectivamente, "los Servicios"). Por favor lea estos Términos detenidamente antes de empezar a usar nuestros Servicios. Al usar los Servicios, usted acepta estar vinculado por estos Términos y todas las leyes y reglamentaciones aplicables.</p>

<h2>Propiedad Intelectual</h2>
<p>Todo el contenido, características y funcionalidades del Sitio Web, incluyendo pero no limitado a texto, gráficos, logos, iconos, imágenes, clips de audio, descargas digitales y compilaciones de datos, son propiedad del Instituto SMAJ, sus proveedores de contenido, o sus licenciantes, y están protegidos por leyes de propiedad intelectual. No está permitida la copia, reproducción, modificación, distribución, transmisión, republicación, exhibición o desempeño del contenido del Sitio Web sin el permiso explícito y por escrito del Instituto SMAJ.</p>

<h2>Uso del Sitio Web</h2>
<p>El Sitio Web está destinado exclusivamente para su uso personal, no comercial. Usted se compromete a no usar el Sitio Web, los Servicios o cualquier contenido proporcionado a través de los Servicios para cualquier propósito ilegal o prohibido por estos Términos. No está permitido usar el Sitio Web de manera que pueda dañar, deshabilitar, sobrecargar o deteriorar el Sitio Web o interferir con el uso y disfrute del Sitio Web por parte de terceros.</p>

<h2>Limitación de Responsabilidad</h2>
<p>En la máxima medida permitida por la ley, en ningún caso el Instituto SMAJ, ni ninguna de sus directores, empleados, agentes, afiliados o proveedores de contenido serán responsables ante usted o cualquier tercero por cualquier daño directo, indirecto, incidental, especial, punitivo, consecuente o ejemplar que resulte de su uso o incapacidad para usar el Sitio Web o los Servicios, incluso si hemos sido advertidos de la posibilidad de dichos daños.</p>

<h2>Modificaciones de los Términos</h2>
<p>El Instituto SMAJ se reserva el derecho de modificar o actualizar estos Términos a su discreción y en cualquier momento. Cualquier cambio en los Términos entrará en vigor al ser publicado en el Sitio Web. Es su responsabilidad revisar regularmente los Términos para mantenerse informado de cualquier cambio. Su uso continuado del Sitio Web después de la publicación de los Términos modificados indica su aceptación de los cambios.</p>

<h2>Contacto</h2>
<p>Si tiene alguna pregunta, comentario o preocupación sobre estos Términos y Condiciones, le invitamos a ponerse en contacto con nosotros a través de:</p>
<ul>
    <li>Correo electrónico: info@smaj.org</li>
    <li>Por teléfono: 555-555-5555</li>
</ul>

        <!-- Botón para aceptar términos y condiciones -->
        <button id="acceptTermsButton" class="accept-button">Acepto</button>
    </div>
</div>

    <!-- Incluir el archivo JavaScript -->
    <script src="js../footerModal.js"></script>
    </body>
</html>