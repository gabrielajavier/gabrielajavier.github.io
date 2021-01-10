<?php

	if (isset($_POST['enviar'])){
		# code...
		
		$data['mensaje'] = isset($_POST['mensaje']) ? $_POST['mensaje'] 			: null ;
		$data['nombre']  = isset($_POST['nombre'])  ? utf8_encode($_POST['nombre']) : null;
		$data['email']   = isset($_POST['email'])   ? utf8_encode($_POST['email']) 	: null;

		
		include_once('Controles/EnviarEmail.php');
		$Obj = new EnviarEmail;
		$Obj-> EnviarEmail($data);

	}

?>