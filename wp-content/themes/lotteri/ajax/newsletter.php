<?
$name = $_GET['name'];
$email = $_GET['email'];
$mensaje = $_GET['msg'];


$destinatario = "briones.gaston@gmail.com";
$asunto = "Nueva consulta";
$cuerpo = "
<html>
    <head>
       <title>$asunto</title>
    </head>
    <body>
    <img src='http://gasbriones.com/demos/lotteri/wp-content/themes/lotteri/images/logo-2.png' />
    <h1>Nueva consulta:</h1>
    <p>
    <hr>
    <b>Name:</b> $name <br/><br/>
    <b>Email:</b> $email <br/><br/>
    <b>Mensaje:</b> $mensaje <br/><br/>
    </p>
    </body>
</html>
";

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

//dirección del remitente
$headers .= "From: $nombre  <$email>\r\n";

mail($destinatario,$asunto,$cuerpo,$headers);
?>

<!-- Google Code for Contacto Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 874866320;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "QuUPCKve3GkQkM2VoQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/874866320/?label=QuUPCKve3GkQkM2VoQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>