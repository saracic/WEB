<?php
 $nome = addcslashes($_POST['nome']);
 $email = addcslashes($_POST['email']);
 $celular = addcslashes($_POST['celular']);
 $mensagem = addcslashes($_POST['mensagem']);

  $para = "brguisilva@gmail.com";

    $assunto = "Contato pelo Site";

    $corpo = "Nome: " . $nome . "\r\n" .
             "Email: " . $email . "\r\n" .
             "Celular: " . $celular . "\r\n" .
             "Mensagem: " . $mensagem;

    $cabeca = "From: brandaosararaquel@gmail.com" . "\r\n" .
              "Reply-To: " . $email . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo ("Email enviado com sucesso!");   
    } else {
        echo ("Ocorreu um erro ao enviar o email.");
    }


?>