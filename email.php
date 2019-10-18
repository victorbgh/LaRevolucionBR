<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['message']);

    $to = " larevolucion.brr@gmail.com";
    $subject = "Mensagem do Formulario de contato";
    $body = "Nome: ". $nome. "\r\n".
            "E-mail: ". $email. "\r\n".
            "Assunto: ". $assunto. "\r\n".
            "Mensagem: ". $mensagem;
    
    $header = "From:site@larevolucion.com". "\r\n"
                ."Reply-To:".$email. "\r\n"
                ."x=Mailer:PHP/".phpversion();
    
    if(mail($to, $subject, $body, $header)){
        header('Location: destinoEmail.html');
    }else{
        echo('ERRO AO ENVIAR EMAIL');
    }
}



?>