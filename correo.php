<?php 
//Aquí van las variables conectadas a las areas de texto de la pagina
$nombre = $_POST['name'];
$asunto = $_POST['asun'];
$correo = $_POST['mail'];

//Aquí se manda a llamar mailer
$header = 'from: '.$correo."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";
//Esto es el cuerpo del mensaje
$message = "este message fue enviado por: ".$nombre."\r\n";
$message .= "Su correo es: ".$correo."\r\n";
$message .= "Asunto: ".$asunto."\r\n";
$message .= "Mensaje: ".$_POST['msn']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());

//Esto es para quien se envia el mensaje
$para = 'contacto@emmcontable.com';
$asunto = 'Mensaje de  EMMWEB';
//Y aquí es el condicional de que se envio con exito el mensaje
if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='../index.html';</script>";
//Y ya es todo
 ?>
