<?php

//Define classe Database, responsavel por gerenciar a conexão com banco de dados
class Database
{
    //Padrão Singleton, cujo objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja reutilizada sempre que necessario
    private static $instance = null;

    public static function getConnection(){

        if(!self::$instance){
            //Configurações de conexão com BD 
            $host       ='localhost';
            $db         ='sistema_usuarios';
            $user       ='root';
            $password   ='';
            // A conexão usa o driver Mysql (Mysql:) e as informações de host e BD
            self::$instance = new PDO("mysql:$host;dbname=$db", $user, $password);
            //Define o modo de erro para exceções, facilitando a depurção e tratamento do erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        }
        return self::$instance;
    }
}

?>