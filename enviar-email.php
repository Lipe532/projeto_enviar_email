<?php

if(isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])) && isset($_POST['email']) && !empty(trim($_POST['email']))) { 
    
    $assunto = "Formulário da página de contato";
     // Recebendo dados do formulario.

    $nome = !empty($_POST['nome']) ? trim($_POST['nome']) : "Não enviado"; // ? se foi enviado : Caso contrario.Operardor ternario
    $email = !empty($_POST['email']) ? $_POST['email'] : "Não enviado";
    $mensagem = !empty($_POST['mensagem']) ? $_POST['mensagem'] : "Não enviado";

    $header = "Content-Type: text/html; charset=utf-8"."\r\n";
    $header .= "From: $email Reply-to: $email"."\r\n";
    $header .= "X-Mailer: PHP/".phpversion();

    //Dados que serão enviados.

    $corpo = "Nome: ".$nome."\r\n";
    $corpo .= "Email: ".$email."\r\n";
    $corpo .= "Mensagem: ".$mensagem."\r\n";

    // Email que recebera a mensagem.
    $email_to = "carlosuig@hotmail.com";

   

    // Enviando o email.
    $status = @mail($email_to, $assunto, $corpo, $header);

    
}else {
    echo "Não enviado: informar email e mensagem";
}

if($status):

    header("Location: index.php?status=enviado");

    else:
        header("Location: index.php?status=erro");
       
    endif;
