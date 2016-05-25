<?
$name = $_GET['name'];
$lastname = $_GET['lastname'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$checkIn = $_GET['check-in'];
$checkOut = $_GET['check-out'];
$message = $_GET['message'];



$destinatario = "contato@vilarejomaresias.com.br";
$asunto = "Reservation from the web";
$cuerpo = "
<html>
    <head>
       <title>$asunto</title>
    </head>
    <body>
    <img src='http://vilarejomaresias.com.br/wp-content/themes/vilarejo/images/logo.png'>
    <h1>Reservation</h1>
    <p>
    <hr>
    <b>Name:</b> $name <br/><br/>
    <b>Last Name:</b> $lastname <br/><br/>
    <b>Phone:</b> $phone<br/><br/>
    <b>Email:</b> $email <br/><br/>
    <b>Check-In:</b> $checkIn <br/><br/>
    <b>Check-Out:</b> $checkOut <br/><br/>
    <b>Message:</b> $message <br/><br/>
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




//Response
$cuerpoResponse = "
<html>
    <head>
       <title>Vilarejo Chale - Cadastro</title>
    </head>
    <body>
    <img src='http://vilarejomaresias.com.br/wp-content/themes/vilarejo/images/logo.png'>
    <div>

        <p><b>Confirmação de sua reserva:</b></p>

        <p>Prezado(a) Cliente,</p>

        <p>Nós recebemos sua reserva no Vilarejo Chalé.</p>

        <p>Entraremos em contato o mais breve possível.</p>

        <p>Atenciosamente,</p>

        <p><b>Vilarejo Chalé</b><br>
        +55 12 99653­6063<br>
        +55 12 3895­6639<br>
        E­mail: contato@vilarejomaresias.com.br </p>

        <p>Rua Olimpo Romão Cesar, 189, Maresias,<br>

        São Paulo, Brasil.</p>

    </div>
    </body>
</html>
";


$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=UTF-8\r\n";

$headers2.= "From: Vilarejo Chalé  <$destinatario>\r\n";
mail($email,'Reserva Vilarejo Chalé',$cuerpoResponse,$headers2);
