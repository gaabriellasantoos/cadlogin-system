<?php
require_once 'models/database.php';

class User 
{
  //Função para encontrar um usuário pelo email
  public static function findByEmail($email){

    //Obter conexão com o BD
    $conn = Database::getConnection();
    //Prepara consulta SQL para buscar usuario pelo email
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

    $stmt->execute(['email' => $email]);

    //Retorno de dados do usuario encontrado como um array associativo
    return $stmt->fetch(PDO::FETCH_ASSOC);



  }

  //Cria função  que localiza usuário pelo BD
  public static function find($id){
    //Obtem a conexão com o banco de dados
    $conn = Database::getConnection();
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->execute(['id'=>$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


  //Função para criar o usuario na base de dados
    public static function create($data){
        $conn = Database::getConnection();

        $stmt = $conn->prepare("INSERT INTO usuarios(nome, email, senha, perfil)VALUES(:nome, :email, :senha, :perfil)");

        $stmt->execute($data);
    }
    //Função para listar todas as informações dos usuários no BD 
    public static function all(){
      $conn = Database:: getConnection();
      $stmt = $conn->query("SELECT * FROM usuarios");
      return $stmt->fetchALL(PDO::FETCH_ASSOC);
      
    }
}

?>
