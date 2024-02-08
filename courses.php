<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMAJ</title>
	<link rel="stylesheet" href="css/styleCourses.css">
	<link rel="icon" href="img/iconoLogo.png">

</head>

<body>
	<!-- ----------------------------------------------------------------- -->
	<!-- HEADER -->
	<?php
	 include 'header.php';
	 ?>


	<!-- ----------------------------------------------------------------- -->
	<!-- MAIN -->
	<main class="main">

		<div class="bannerCursos">
			<div class="bannercapaCursos"></div>
			<div class="info">
				<h1>Bienvenidos a la pagina de Cursos</h1>
				<p>En esta parte de la pagina podras ver los cursos disponibles
					y podras ver y aprender sobre ellos.
				</p>
			</div>
		</div>
	</main>

		<div class="contenedorCursos">
			<div class="card">
				<figure>
					<img src="img/html.jpg" />
				</figure>
				<div class="contenido">
					<h3>Html desde 0</h3>
					<p> En este curso podras crear estructuras de contenido de las paginas web
						aprenderas sobre las etiquetas, que ayudaran a organizar los elementos de una
						pagina web. Ademas, podras definir encabezados, parrafos, listas, enlaces, imagenes, tablas
						y otros elementos comunes en las paginas web.
					</p>
					<!--<a href= "#" class = "abrir" id="abrir1">Leer mas</a>-->
					<button id="ButtonModal">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
				
			</div><!--TODA LA CARTA -->

			<!--Modal1 Prueba 1-->
			<div id="miModal" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Curso de HTML</h2>
						  <span class="close" id="close" >X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de HTML es una oportunidad única para aprender los fundamentos del lenguaje de marcado estándar utilizado para crear páginas web. En este curso, los participantes adquirirán las habilidades necesarias para construir sitios web atractivos y funcionales utilizando únicamente HTML.<br>

                          Horario:
                          Duración total del curso: 6 semanas (12 sesiones)<br>

                          Semana 1:
                          Introducción a HTML<br>

                          Sesión 1: Presentación del curso y conceptos básicos de HTML.<br>
                          Sesión 2: Estructura de un documento HTML y elementos de texto.<br>
                          Semana 2:
                          Elementos y atributos<br>

                          Sesión 3: Uso de enlaces y anclas para la navegación.<br>
                          Sesión 4: Incorporación de imágenes y multimedia.<br>
                          Semana 3:
                          Tablas y formularios<br>

                          Sesión 5: Creación de tablas para mostrar datos estructurados.<br>
                          Sesión 6: Diseño de formularios interactivos para la recopilación de información.<br>
                          </p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 1 Prueba-->

			<div class="card">
				<figure>
					<img src="img/css.jpg" />
				</figure>
				<div class="contenido">
					<h3>CSS para principiantes</h3>
					<p>En este modulo aprenderas a definir la apariencia y el formato de los elementos de una pagina
						web. Tambien, podras aprender a controlar los aspectos como el color, la funete, el tama&ntilde;o,
						el espaciado, la disposicion y otros estilos de presentacion de los elementos HTML.
	
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal2">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>

			<!--Modal 2 Prueba-->
			<div id="miModal2" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Curso de CSS</h2>
						  <span class="close2" id="close" >X</span>
						</div>
						<div class="modal-body">
						  <p>CSS es un lenguaje de estilo utilizado para describir la presentación de un documento HTML. Con CSS, puedes definir el aspecto visual de tus páginas web, controlando elementos como el color, la tipografía, el diseño y los efectos visuales. Este curso de introducción a CSS te brindará los conocimientos necesarios para aplicar estilos a tus páginas web y lograr diseños atractivos y profesionales.<br>

                          Horario:
                          Duración total del curso: 2 semanas (4 sesiones)<br>

                          Semana 1:
                          Fundamentos de CSS<br>
                          <br>

                          Sesión 1: Introducción a CSS y su sintaxis básica.<br>
                          Sesión 2: Uso de selectores para aplicar estilos a elementos HTML.<br>
                          Semana 2:
                          Estilización de elementos<br>
                          <br>
                          Sesión 3: Modificación de texto y fuentes con CSS.<br>
                          Sesión 4: Estilización de cajas y bordes.<br>
                          <br>
                          En este curso de introducción a CSS, aprenderás las bases para dar estilo a tus páginas web de forma efectiva y creativa. Cada sesión combina explicaciones teóricas con ejercicios prácticos para garantizar que adquieras las habilidades necesarias. ¡No importa si eres principiante, únete a nosotros y dale vida a tus sitios web con CSS!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 2 Prueba-->
			
			<div class="card">
				<figure>
					<img src="img/JS.jpg" />
				</figure>
				<div class="contenido">
					<h3>JS desde 0</h3>
					<p>En esta clase podras aprender a usar un lenguaje de programacion de un alto nivel, que es
						mayormente utilizado en el desarrollo web. Permite agregar interactividad y funcionalidad
						a las paginas web, logrando la respuesta a eventos y la manipulacion dinamica de elementos.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal3">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>

			<!--Modal 3 Prueba-->
			<div id="miModal3" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Curso de JS</h2>
						  <span class="close3" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p> JavaScript es un lenguaje de programación versátil y poderoso que se utiliza para agregar interactividad y funcionalidad a las páginas web. En este curso de introducción a JavaScript, te sumergirás en el mundo de la programación del lado del cliente, aprendiendo los conceptos fundamentales y las técnicas necesarias para crear aplicaciones web dinámicas y atractivas.<br>
						  <br>
                          Horario:
                          Duración total del curso: 3 semanas (6 sesiones)<br>
                          <br>
                          Semana 1:
                          Introducción a JavaScript<br>
                          <br>
                          Sesión 1: Presentación del curso y conceptos básicos de JavaScript.<br>
                          Sesión 2: Variables, tipos de datos y operadores.<br>
                          Semana 2:
                          Estructuras de control<br>
                          <br>
                          Sesión 3: Condicionales y toma de decisiones.<br>
                          Sesión 4: Bucles y control de flujo.<br>
                          Semana 3:
                          Funciones y eventos<br>
                          <br>
                          Sesión 5: Creación y uso de funciones en JavaScript.<br>
                          Sesión 6: Manipulación de eventos y respuesta interactiva del usuario.<br>
                          <br>
                          En este curso de introducción a JavaScript, descubrirás cómo aprovechar el poder de este lenguaje para mejorar la experiencia del usuario y crear aplicaciones web interactivas. Cada sesión combina teoría con ejercicios prácticos para asegurar una comprensión sólida de los conceptos. ¡No importa si eres principiante, únete a nosotros y desata el potencial de JavaScript en tus proyectos web!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 3 Prueba-->
			

			<!-- 4 -->
			<div class="card">
				<figure>
					<img src="img/python.png" />
				</figure>
				<div class="contenido">
					<h3>Introduccion a Python</h3>
					<p>En esta clase de Python, aprenderás los fundamentos del lenguaje, incluyendo variables, 
						tipos de datos, estructuras de control de flujo, estructuras de datos, funciones y conceptos
						avanzados como gestión de excepciones y programación orientada a objetos. ¡Prepárate para 
						sumergirte en el mundo de la programación con Python!
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal4">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			 <!--Modal 4 Prueba-->
			<div id="miModal4" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Introduccion a Python</h2>
						  <span class="close4" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Python: Fundamentos y Aplicaciones es una oportunidad única para adentrarse en el fascinante mundo de la programación utilizando uno de los lenguajes más populares y versátiles de la actualidad. Durante este curso, los participantes adquirirán los conocimientos necesarios para comprender y aplicar los conceptos fundamentales de Python, así como explorar diversas aplicaciones prácticas en el desarrollo de programas y proyectos.<br>
						  Horario de las sesiones:<br>
                          Sesión 1:
                          Duración: 2 horas<br>
                          Contenido de la sesión 1:<br>
                          Introducción a Python: historia, características y ventajas.<br>
                          Instalación y configuración del entorno de desarrollo.<br>
                          Sintaxis básica y estructuras de control: variables, tipos de datos, operadores, condicionales y bucles.<br>
                          Funciones y módulos: creación, llamada y reutilización de código.<br>
                          Ejercicios prácticos para reforzar los conceptos aprendidos.<br>Sesión 2:<br>
                          Duración: 2 horas<br>
                          Contenido de la sesión 2:<br>
                          Manipulación de datos: listas, tuplas, diccionarios y conjuntos.<br>
                          Manejo de archivos y directorios.<br>
                          Trabajo con módulos externos y bibliotecas populares de Python.<br>
                          Introducción a la programación orientada a objetos.<br>
                          Proyecto final: aplicación práctica que integre los conceptos aprendidos a lo largo del curso.<br>¡Este curso de Python te brindará las bases necesarias para desarrollar tus habilidades de programación y explorar las múltiples posibilidades que ofrece este lenguaje! No importa si eres principiante o tienes experiencia previa en programación, ¡todos son bienvenidos! ¡Únete a nosotros y sumérgete en el fascinante mundo de Python!<br></p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal4 Prueba-->
			
<!-- 5 -->
			<div class="card">
				<figure>
					<img src="img/fundamentosEstadisticos.png" />
				</figure>
				<div class="contenido">
					<h3>Fundamentos estadisticos</h3>
					<p>En la clase de Fundamentos Estadísticos, aprenderás sobre medidas descriptivas, 
						teoría de la probabilidad, distribuciones, inferencia estadística, análisis de 
						correlación y regresión, y diseño de experimentos. Estas herramientas te ayudarán 
						a comprender, interpretar y analizar datos de manera precisa y fundamentada. 
						¡Prepárate para sumergirte en el mundo de la estadística!
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal5">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			<!--Modal5 Prueba-->
			<div id="miModal5" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Fundamentos estadisticos</h2>
						  <span class="close5" id="close" >X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Fundamentos Estadísticos es una introducción sólida a los conceptos básicos de la estadística. Durante este curso, los participantes aprenderán los fundamentos necesarios para comprender y aplicar la estadística en diversos campos. Exploraremos desde los conceptos básicos hasta técnicas más avanzadas, brindándote una base sólida para analizar y tomar decisiones basadas en datos. <br><br>Horario del curso: Duración: 4 horas <br>Contenido del curso: <br>Introducción a la estadística: conceptos básicos y utilidad en diferentes áreas.<br> Tipos de datos y medidas de tendencia central.<br> Medidas de dispersión y representación gráfica.<br> Probabilidad y distribuciones: binomial, normal y otras distribuciones comunes. <br>Inferencia estadística: intervalos de confianza y pruebas de hipótesis. <br>Aplicaciones prácticas y ejemplos reales. <br>Herramientas estadísticas en software popular. <br><br>¡Este curso de Fundamentos Estadísticos te proporcionará los conocimientos esenciales para comprender y utilizar la estadística en tus análisis y decisiones basadas en datos! No importa si eres principiante o tienes cierta experiencia en estadística, ¡todos son bienvenidos! ¡Únete a nosotros y adquiere las habilidades estadísticas necesarias para enfrentar desafíos en cualquier campo!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal5 Prueba-->
			
<!-- 6 -->
			<div class="card">
				<figure>
					<img src="img/bootstrap.png" />
				</figure>
				<div class="contenido">
					<h3>HTML: Bootstrap</h3>
					<p>En la clase de Bootstrap, aprenderás una técnica estadística llamada Bootstrap para 
						estimar la incertidumbre en muestras de datos y realizar inferencias. Utilizando 
						resampling, generaremos múltiples muestras de datos para estimar la distribución 
						muestral de una estadística y calcular intervalos de confianza. Aplicaremos Bootstrap 
						en Python y exploraremos su utilidad en diferentes situaciones, como regresión y pruebas 
						de hipótesis. Esta clase te dará una herramienta poderosa para tomar decisiones basadas 
						en datos de forma más precisa.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal6">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			<!--Modal 6 Prueba-->
			<div id="miModal6" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>HTML: Bootstrap<</h2>
						  <span class="close6" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Bootstrap: Desarrollo de Sitios Web Responsivos es una oportunidad única para aprender a crear sitios web modernos y adaptables a diferentes dispositivos utilizando Bootstrap, uno de los frameworks de diseño web más populares y poderosos. Durante este curso, los participantes adquirirán los conocimientos necesarios para utilizar eficientemente las herramientas y componentes de Bootstrap, creando sitios web profesionales y visualmente atractivos.<br> Horario del curso: <br><br>Duración: 4 horas<br> Contenido del curso:<br> <br>Introducción a Bootstrap: historia, características y ventajas.<br> Configuración del entorno de desarrollo. <br>Uso de la cuadrícula de Bootstrap para el diseño de páginas responsivas.<br> Componentes de Bootstrap: navegación, barras de progreso, botones, formularios y más. <br>Personalización de Bootstrap utilizando CSS y clases de utilidad.<br> Integración de fuentes, iconos y bibliotecas adicionales. <br>Prácticas recomendadas y consejos para el desarrollo de sitios web con Bootstrap. <br><br>¡Este curso de Bootstrap te brindará las habilidades necesarias para crear sitios web responsivos y atractivos! Ya sea que seas un principiante o tengas experiencia en desarrollo web, ¡este curso te ayudará a ampliar tus conocimientos y mejorar tus habilidades en el diseño de sitios web! ¡Únete a nosotros y descubre cómo Bootstrap puede transformar tus proyectos web!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 6 Prueba-->
<!-- 7 -->
			<div class="card">
				<figure>
					<img src="img/sql.jpg" />
				</figure>
				<div class="contenido">
					<h3>SQL desde 0</h3>
					<p>En la clase de SQL Server, aprenderás sobre el sistema de gestión de bases de datos
						relacionales SQL Server. Exploraremos la estructura de la base de datos, consultas SQL, 
						diseño de tablas, manipulación de datos, seguridad y gestión de usuarios. Obtendrás las 
						habilidades necesarias para administrar y consultar bases de datos de manera efectiva 
						con SQL Server.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal7">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			 <!--Modal7 Prueba-->
			<div id="miModal7" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>SQL desde 0</h2>
						  <span class="close7" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de SQL Server: Fundamentos de Bases de Datos Relacionales es una oportunidad única para adentrarse en el mundo de la gestión de bases de datos utilizando SQL Server, una de las plataformas más populares y robustas en el ámbito empresarial. Durante este curso, los participantes adquirirán los conocimientos necesarios para diseñar, crear y manipular bases de datos relacionales utilizando SQL Server, además de comprender los conceptos fundamentales de la gestión de datos. <br><br>Horario del curso: <br>Duración: 4 horas <br><br>Contenido del curso:<br> Introducción a SQL Server: historia, características y ventajas.<br> Instalación y configuración del entorno de desarrollo. <br>Creación y diseño de bases de datos: tablas, relaciones y restricciones.<br> Consultas SQL: selección, filtrado, ordenamiento y agregación de datos.<br> Modificación de datos: inserción, actualización y eliminación de registros.<br> Uso de funciones y procedimientos almacenados en SQL Server. <br>Seguridad y respaldo de bases de datos. <br><br>¡Este curso de SQL Server te brindará los conocimientos esenciales para administrar bases de datos y realizar consultas utilizando SQL Server! No importa si eres un principiante o tienes experiencia previa en bases de datos, ¡todos son bienvenidos! ¡Únete a nosotros y descubre cómo SQL Server puede ayudarte a gestionar y manipular datos de manera eficiente y confiable!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 7 Prueba-->
<!-- 8 -->
			<div class="card">
				<figure>
					<img src="img/Django.png" />
				</figure>
				<div class="contenido">
					<h3>Django b&aacute;sico</h3>
					<p>En la clase de Django, aprenderás a desarrollar aplicaciones web utilizando el marco 
						de desarrollo Django. Exploraremos la estructura del proyecto, los modelos de base de datos, 
						las vistas, las plantillas y el enrutamiento de URL. También abordaremos características avanzadas
						como la autenticación de usuarios y la implementación de API. Esta clase te proporcionará las 
						habilidades necesarias para crear aplicaciones web eficientes con Django.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal8">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			<!--Modal 8 Prueba-->
			<div id="miModal8" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Django b&aacute;sico</h2>
						  <span class="close8" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Django Básico: Desarrollo Web con Python es una oportunidad única para aprender a crear aplicaciones web robustas y escalables utilizando el framework Django. Django es un poderoso framework de desarrollo web escrito en Python, que permite construir sitios web y aplicaciones de forma eficiente y con buenas prácticas de desarrollo. Durante este curso, los participantes adquirirán los conocimientos necesarios para utilizar Django y crear sus propias aplicaciones web. <br><br>Horario del curso: Duración: 4 horas<br><br> Contenido del curso: <br><br>Introducción a Django: características y ventajas.<br> Configuración del entorno de desarrollo con Django.<br> Creación de una aplicación Django: modelos, vistas y plantillas.<br> Manejo de rutas y URLconf en Django.<br> Trabajo con bases de datos utilizando el ORM de Django.<br> Integración de formularios en las aplicaciones Django.<br> Despliegue de aplicaciones Django en un servidor web.<br><br> ¡Este curso de Django Básico te brindará las habilidades necesarias para crear aplicaciones web utilizando Django y Python! Ya sea que seas un principiante en desarrollo web o tengas experiencia previa, ¡este curso te ayudará a desarrollar aplicaciones web robustas y eficientes! ¡Únete a nosotros y descubre cómo Django puede potenciar tus proyectos web!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 8 Prueba-->
			
<!-- 9 -->
			<div class="card">
				<figure>
					<img src="img/PowerBI.jpg" />
				</figure>
				<div class="contenido">
					<h3>Power BI B&aacute;sico</h3>
					<p>En la clase de Power BI, aprenderás a importar, limpiar y visualizar datos de manera 
						interactiva. Crearás informes y paneles de control personalizados, y aprenderás a realizar 
						análisis avanzados utilizando fórmulas DAX. Esta clase te proporcionará habilidades para obtener 
						insights valiosos a partir de tus datos con Power BI.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal9">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			<!--Modal 9 Prueba-->
			<div id="miModal9" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Power BI B&aacute;sico</h2>
						  <span class="close9" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Power BI Básico: Visualización y Análisis de Datos es una oportunidad única para adentrarse en el mundo del análisis de datos y la visualización utilizando Power BI, una herramienta líder en el mercado para la creación de informes interactivos y paneles de control. Durante este curso, los participantes adquirirán los conocimientos necesarios para utilizar Power BI y aprovechar al máximo sus capacidades de análisis y visualización de datos.<br><br> Horario del curso: <br>Duración: 4 horas <br><br>Contenido del curso:<br><br> Introducción a Power BI: características y ventajas.<br> Conexión a diferentes fuentes de datos: bases de datos, archivos Excel, servicios en la nube, entre otros.<br> Creación de visualizaciones interactivas: gráficos, tablas, mapas y más.<br> Transformación y modelado de datos utilizando el editor de consultas de Power BI.<br> Creación de medidas y cálculos personalizados.<br> Diseño de informes y paneles de control intuitivos.<br> Compartir y publicar informes en la nube con Power BI Service.<br><br> ¡Este curso de Power BI Básico te brindará las habilidades necesarias para crear visualizaciones impactantes y realizar análisis de datos efectivos! No importa si eres un principiante o tienes experiencia previa en análisis de datos, ¡todos son bienvenidos! ¡Únete a nosotros y descubre cómo Power BI puede ayudarte a tomar decisiones informadas basadas en tus datos!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 9 Prueba-->
<!-- 10 -->
			<div class="card">
				<figure>
					<img src="img/excel.jpg" />
				</figure>
				<div class="contenido">
					<h3>Excel B&aacute;sico </h3>
					<p>
						En la clase de Excel básico, aprenderás a trabajar con hojas de cálculo, utilizar fórmulas
						y funciones, crear gráficos, aplicar formatos y realizar análisis básicos de datos. 
						Esta clase te proporcionará habilidades fundamentales para utilizar Excel de manera efectiva 
						en tus tareas de cálculo y análisis de datos.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal10">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			<!--Modal 10 Prueba-->
			<div id="miModal10" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Excel B&aacute;sico</h2>
						  <span class="close10" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Excel Básico: Manejo y Análisis de Datos es una oportunidad única para adquirir habilidades fundamentales en el uso de Excel, una de las herramientas más utilizadas en el ámbito empresarial para el manejo y análisis de datos. Durante este curso, los participantes aprenderán las funcionalidades básicas de Excel y cómo aplicarlas en el manejo eficiente de datos, creación de fórmulas, generación de gráficos y más.<br><br> Horario del curso:<br> Duración: 4 horas<br> Contenido del curso: <br><br>Introducción a Excel: características y ventajas.<br> Navegación y formato básico de hojas de cálculo. <br>Manejo de datos: ingreso, edición y eliminación de datos. <br>Fórmulas y funciones esenciales: suma, promedio, máximo, mínimo y más.<br> Formateo condicional y filtrado de datos. <br>Creación de gráficos básicos.<br> Trucos y consejos para agilizar el trabajo en Excel. <br><br>¡Este curso de Excel Básico te proporcionará las habilidades necesarias para manejar y analizar datos de manera efectiva utilizando Excel! No importa si eres principiante o tienes experiencia previa en el uso de Excel, ¡todos son bienvenidos! ¡Únete a nosotros y descubre cómo Excel puede ayudarte a optimizar tus tareas y análisis de datos en el entorno laboral!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 10 Prueba-->
			<!-- 11 -->
			<div class="card">
				<figure>
					<img src="img/word.jpg" />
				</figure>
				<div class="contenido">
					<h3>Microsoft Word de principiante a experto</h3>
					<p>En la clase de Microsoft Word, aprenderás a crear y editar documentos de texto de forma eficiente.
						Exploraremos herramientas de formato, edición y diseño, así como la incorporación de elementos 
						visuales. Aprenderás a guardar, imprimir y compartir tus documentos. Esta clase te proporcionará 
						habilidades para utilizar Word de manera efectiva en la creación de documentos profesionales.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal11">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>
			<!--Modal 11 Prueba-->
			<div id="miModal11" class="miModal">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Microsoft Word de principiante a experto</h2>
						  <span class="close11" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Microsoft Word: De Principiante a Experto es una oportunidad única para dominar todas las funciones y características de Word, la reconocida herramienta de procesamiento de textos de Microsoft. Durante este curso, los participantes aprenderán desde los conceptos básicos hasta las técnicas más avanzadas para crear, formatear y editar documentos profesionales de manera eficiente. <br><br>Horario del curso:<br> Duración: 4<br><br> horas Contenido del curso: <br><br>Introducción a Microsoft Word: características y ventajas. <br>Navegación y manejo de la interfaz de usuario. <br>Formato básico de texto: fuentes, estilos, colores y efectos.<br> Organización y estructura de documentos: párrafos, listas, tablas y columnas. <br>Diseño de páginas: márgenes, encabezados, pies de página y numeración.<br> Herramientas de revisión y corrección ortográfica.<br> Utilización de plantillas y elementos gráficos. <br>Automatización de tareas con macros.<br><br> ¡Este curso de Microsoft Word te llevará desde ser un principiante hasta convertirte en un experto en el manejo de esta potente herramienta! No importa si estás comenzando desde cero o ya tienes cierta experiencia, ¡este curso te proporcionará los conocimientos y habilidades necesarios para crear documentos profesionales con confianza y eficiencia! ¡Únete a nosotros y lleva tus habilidades en Word al siguiente nivel!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 11 Prueba-->
			<!-- 12 -->
			<div class="card">
				<figure>
					<img src="img/power point.jpg" />
				</figure>
				<div class="contenido">
					<h3>Microsoft Power Point de principiante a experto</h3>
					<p>En la clase de PowerPoint, aprenderás a crear presentaciones atractivas y efectivas. 
						Exploraremos herramientas de diseño, incorporación de elementos visuales, animaciones y 
						transiciones. Aprenderás a utilizar las herramientas de presentación y compartir tus 
						presentaciones. Esta clase te dará habilidades para comunicar tus ideas de manera impactante a 
						través de diapositivas visuales.
					</p>
					<!-- <a href="" class="aCursos">Leer m&aacute;s</a> -->
					<button id="ButtonModal12">
						<span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Leer m&aacute;s
					</button>
				</div>
			</div>

			<!--Modal12 Prueba-->
			<div id="miModal12" class="miModal2">
				<div class="flex" id="flex">
					<div class="contenido-modal">
						<div class="modal-header flex">
						  <h2>Microsoft Power Point de principiante a experto</h2>
						  <span class="close12" id="close">X</span>
						</div>
						<div class="modal-body">
						  <p>El curso de Microsoft PowerPoint: De Principiante a Experto es una oportunidad única para desarrollar habilidades sólidas en la creación y presentación efectiva de diapositivas utilizando Microsoft PowerPoint. Durante este curso, los participantes aprenderán desde los conceptos básicos hasta las técnicas avanzadas para crear presentaciones visualmente impactantes, agregar elementos interactivos y transmitir mensajes de manera convincente. <br><br>Horario del curso: <br>Duración: 4 horas <br><br>Contenido del curso:<br><br> Introducción a Microsoft PowerPoint: características y ventajas. <br>Navegación y manejo de la interfaz de usuario. <br>Creación de diapositivas: inserción de texto, imágenes, formas y objetos multimedia.<br> Diseño y formato de diapositivas: estilos, colores, fuentes y efectos.<br> Animación y transiciones para hacer las presentaciones más dinámicas. <br>Uso de plantillas y temas personalizados.<br> Incorporación de gráficos, tablas y diagramas para una mejor visualización de datos.<br> Preparación y entrega efectiva de presentaciones. <br><br>¡Este curso de Microsoft PowerPoint te llevará desde ser un principiante hasta convertirte en un experto en la creación de presentaciones impactantes! No importa si estás empezando desde cero o ya tienes cierta experiencia, ¡este curso te proporcionará los conocimientos y habilidades necesarios para comunicar tus ideas de manera efectiva y cautivadora! ¡Únete a nosotros y lleva tus habilidades en PowerPoint al siguiente nivel!</p>
						</div>
						<div class="footer">
							<h3>Hecho por axell &copy;</h3>
						</div>
						
					</div>
				</div>

			</div>
		   <!--FIN DEL Modal 12 Prueba-->

		</div>
	


	<!-- ----------------------------------------------------------------- -->
	<!-- FOOTER -->

	<?php
	 include 'footer.php';
	?>
	<script src="js/JsCourses.js"></script>
	</body>
	
</html>