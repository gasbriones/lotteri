<?
$name = $_GET['name'];
$email = $_GET['email'];


$destinatario = "contato@vilarejomaresias.com.br";
$asunto = "Newsletter registration";
$cuerpo = "
<html>
    <head>
       <title>$asunto</title>
    </head>
    <body>
    <img src='http://vilarejomaresias.com.br/wp-content/themes/vilarejo/images/logo.png'>
    <h1>Newsletter registration</h1>
    <p>
    <hr>
    <b>Name:</b> $name <br/><br/>
    <b>Email:</b> $email <br/><br/>
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
       <title>Vilarejo Chale - Cadastro Email</title>
    </head>
    <body>
    <img src='http://vilarejomaresias.com.br/wp-content/themes/vilarejo/images/logo.png'>
    <div>

       <p>Prezado(a) Cliente,</p>

        <p>Seu cadastro de email no Vilarejo Chalé foi

        registrado com sucesso, agradecemos pela preferência.</p>

        <p>Para mais informações por favor entre em contato.</p>


        <p>Atenciosamente,</p>

        <p><b>Vilarejo Chalé</b> ]<br>
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
mail($email,'Newsletter -  Vilarejo Chalé',$cuerpoResponse,$headers2);
