
<?php

	$asunto .= "Consulta desde la web :  ".$_POST["txt_nombres"];
	$remite .= $_POST["txt_email"]; 
    $cuerpo = "Formulario Recibido\n"; 
	
    $cuerpo .= "Nombres y Apellidos : " . $_POST["txt_nombres"] . "\n";	
    $cuerpo .= "Asunto : " . $_POST["txt_asunto"] . "\n";			
	$cuerpo .= "Correo : " . $_POST["txt_email"] . "\n";
    $cuerpo .= "Comentarios : " . $_POST["txt_mensaje"] . "\n";		

    $remite_total = "From: ".$remite."";

    //mando el correo... 
    mail("recepcion@roswalhotel.com,reservas@roswalhotel.com",$asunto,$cuerpo,$remite_total) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error");

    //doy las gracias por el env&iacute;o 
    echo "<p><b>Gracias por contactarnos.</b></p><p>Su mensaje ha sido enviado con éxito, pronto estaremos en contacto.</p>";


