<?php
//Requer o arquivo user que contém o model user com as funções de manipulação de dados de usuários

require_once 'models/user.php';

class AuthController
{
  //Função responsavel pelo processo de login
  public function login()
  {
      //verifica se requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
            //Obter os valores do formulario
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //Chama o método do model para encontrar o usuario pelo email
            
      }
  }
}

?>
