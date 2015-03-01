<?php

namespace Controller;

class FaleConosco
{

  public static function formulario()
  {
    $title  = 'Fale Conosco';
    $action = 'fale-conosco/send';
    $method = 'POST';

    require 'views/fale-conosco.phtml';
  }

  public static function sendEmail()
  {
    $nome       = filter_var($_POST['seu-nome'], FILTER_SANITIZE_STRING);
    $email      = filter_var($_POST['seu-email'], FILTER_VALIDATE_EMAIL);
    $comentario = filter_var($_POST['seu-comentario'], FILTER_SANITIZE_STRING);  
    
    if (false === $email)
      throw new \Exception("E-mail Inválido!");    

    $template = file_get_contents('views/email-template.html');
    $mensagem = sprintf($template, $nome, $email, $comentario);

    $enviou = mail('Jonata Weber <jonataa@gmail.com', 'Fale Conosco', $mensagem);    

    if (false === $enviou)
      throw new \Exception("Sua mensagem não foi enviada!");

    echo 'Enviado com sucesso! <br><br>', $mensagem;
  }

}