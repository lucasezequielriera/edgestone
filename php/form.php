<?php
	$destinatario = 'info@edgestonere.com';
	// esto es al correo  al que se enviara el mensaje
	$nombre = $_POST['nombre'];
	$asunto = $_POST['mensaje'];
	$mensaje = $_POST[''];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$ciudad = $_POST['ciudad'];

	$header = "Enviado desde Statewide Funding";
	$mensaje = $mensaje . "\n\nDatos de Contacto:" . "\n\nNombre: " . $nombre . "\nCiudad: " . $ciudad . "\nEmail: " . $email . "\nTelefono: " . $telefono;

	mail($destinatario, $asunto . "-" . $nombre, $mensaje, $header);
	echo "<script>alert('¡Mensaje enviado correctamente!')</script>";
	echo "<script>setTimeout(\"location.href='http://www.edgestonere.com/'\",1000)</script>";

?>