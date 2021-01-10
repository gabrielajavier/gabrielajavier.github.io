<?php

/**
* 
*/
class EnviarEmail// extends AnotherClass
{
	
	function __construct()
	{

	}


	function EnviarEmail($data){

	$nombre	= (isset($data['nombre'])) 	? (addslashes($data['nombre'])) : null;
	$email 	= (isset($data['email'])) 	? (addslashes($data['email'])) 	: null;
	$mensaje= (isset($data['mensaje'])) ? ($data['mensaje'])	: null;	


	$mensaje = '<html>
		<head>
			<title>Email con HTML</title>
			<meta charset="utf-8">
		</head>
		<body><h2>Mensajito desde mi Portafolio</h2>
		<table border="1">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Mensaje</th>
			</tr>
			<tr>
				<td>'.$nombre.'</td>
				<td>'.$email.'</td>
				<td>'.$mensaje.'</td>
			</tr>
		</table>
		<hr>
		Enviado desde www.gabrielajavier.com
		</body>
		</html>';

		$this-> EnviarMail($mensaje);

	}


	function EnviarMail($mensaje){

		$to= "carolinajavierenriquez@gmail.com";
		$subject = "GABRIELA JAVIER - CONTACTO";
			//$txt = "Hello world!";

		$cabeceras = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras .= 'PORTAFOLIO - GABRIELA JAVIER <carolinajavierenriquez@gmail.com>';		

		if(@mail($to,$subject,$mensaje,$cabeceras)){
			echo ("<p>Tu mensaje ha sido enviado correctamente</p>");
		}
		else{
			echo ("<p>No se enviaron tus datos, hubo un problema, vuelve a intentarlo</p>");
		}

	}
}


?>