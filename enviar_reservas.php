
<?php 
	

//$para = 'jhofe_s17@hotmail.com';
//$titulo = 'Reserva desde la web :  '.$_POST['nombres'];
$mensaje = 'Hola';
//$cabeceras = 'From: micky_1390@outlook.com' . "\r\n" .
   // 'Reply-To: micky_1390@outlook.com' . "\r\n" .
   // 'X-Mailer: PHP/' . phpversion();

if(mail('jhofe_s17@hotmail.com', 'estupido', $mensaje)){
	echo "enviado ps";
}
else
{
	echo "jodete";
}


	// $asunto = "Reserva desde la web :  ".$_POST['nombres'];
	// $remite = $_POST['email']; 
	// $cuerpo = "Formulario Recibido\n"; 
	
 //    $cuerpo .= "Nombres y Apellidos : " . $_POST["nombres"] . "\n";				
	// $cuerpo .= "Teléfono : " . $_POST["telefono"] . "\n";
	// $cuerpo .= "Correo : " . $_POST["email"] . "\n";
	// $cuerpo .= "Entrada : " . $_POST["entrada"] . "\n";
	// $cuerpo .= "Salida : " . $_POST["salida"] . "\n";
	



 //     $remite_total = "From: ".$remite."";

 //    //mando el correo... 
 //   mail("micky_1390@outlook.com.com,micky_1390@outlook.com.com",$asunto,$cuerpo,$remite_total) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error");

    //doy las gracias por el env&iacute;o 
   // echo "<p><b>Gracias por contactarnos.</b></p><p>Su mensaje ha sido enviado con éxito, pronto estaremos en contacto.</p>";
//echo "<p><b>Gracias por contactarnos.</b></p><p>Su mensaje ha sido enviado con éxito, pronto estaremos en contacto.</p>";

