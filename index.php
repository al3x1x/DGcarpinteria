<!DOCTYPE html>
<html>
<head>
	<title>DuberCarpinteria</title>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="images/favicon2.png">
<meta name="description" content="Instalación, remodelación, diseño, venta, fabricación y pintar  cocinas, closets, muebles, bibliotecas, puertas, armarios, repisas"/>
<meta name="keywords" content="cocinas, cocinas integrales, closets, muebles, bibliotecas, armarios, puertas, intalación"/>
</head>

<body>



	<h1>Trabajamos para hacer tus sueños realidad</h1>
	<p><strong>Es un placer conocerte</strong> nuestra empresa quiere hacer realidad todos tus proyectos. </p>
	<P>Esta página será desarrollada para una empresa que trabaja en instlación, remodelación, diseño, venta y fabricación <br/>
	  de cocinas, closets, muebles, bibliotecas, puertas, armarios, repisas, etc</P>
	<h2>Objetivos:</h2>
	<ol> <li>
	<h3>General:</h3> 
		</li> 
	<ol style="list-style-type:circle;"> <li>
		<p>Crear un sitio web estéticamente minimalista y atractivo, con la capacidad para interactuar con los clientes.</p>
	</li></ol>
		<li>
	<h3>Específicos:</h3> 
		</li>
	
	<ol style="list-style-type:circle;">
		<li>Desarrollar una interfaz dónde se puedan ver todos los trabajos ya realizados por nuestro cliente</li><br/>
		<li>Hacer uno o mas canales de comunicación para que los visitantes de la página puedan interactuar <br/>
			con la empresa encargada y cotizar sobre sus futuros proyectos</li>
	</ol>
	</ol>
	<img src="images/Dise%C3%B1o%20portal%20web1.png" width="45%"height="35%" align="left"> 
	<p><br/> <br/> Esta imagen es un pequeño ejemplo <br/> <br/>
	de como quedaría el menú principal o <br/> <br/>
	navegator y el diseño del index o home, <br> <br/>
	es decir la pagina principal</p> 
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<h1> Formulario de Registro </h1>

	<form method="post" action="refistrar.php">
 
	Nombre: <input type=" text" name="Nombre"><br>
	Apellido: <input type=" text" name="Apellido"><br>
	Dirección: <input type="text" name="Direccion"><br> 
	Sexo: <br>
	<Input type="radio" name="genero" value="Masculino">Masculino<br> 
	<Input type="radio" name="genero" value="Femenino">Femenino<br> 
 
 <label>Indique su edad:</label><br>
 
 <input type="number" name="edad"><br>
 
	Trabaja como  :
	<input type="checkbox" name="trabajo1" value="Trabajador independiente">Trabajador independiente<br>
	<input type="checkbox" name="trabajo2" value="Trabajador en empresa">Trabajador en empresa<br>
 
	<label>Indique su correo:</label><br>
 
 <input type="email" name="correo"><br> 
 <label>Ingrese su número celular:</label><br>
 
 <input type="tel" name="celular" pattern="[0-9]{3}[0-9]{7}"><br>
  Que le gustaria que nosotros hicieramos por usted: <br>
  <textarea rows="6" cols="50">Ingrese la descripcion aqui.
  </textarea><br>
  <input type="submit" value="Guardar">
  <input type="reset" value="Limpiar" ><br>
  <input type="submit" value="Enviar">
 
  <h3>Encuentranos en:</h3><br>
 <a href="https://www.facebook.com/people/Duber-Gonzalez/100009120304876" target="_blank">
 <img src="images/facebook_logo_portada.jpg" width="10%"height="10%" align="left"></a>
 <br/><br/><br/><br/> <h3>Si quieres ver nuestros trabajos entra al siguiente enlace</h3>
 <a href="Disenos.html">Diseños</a>
</body>

<?php ?>