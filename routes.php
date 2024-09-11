<?php

//Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php'; //Inclui o controlador de autenticação
require 'controllers/UserController.php'; //Inclui o controlador de usários
require 'controllers/DashboardController.php'; //Inclui o controlador de dashboard

//Cria instâncias dos controladores para utilizar seus métodos
$authController = new $AuthController(); // Instância controlador de autenticação 
$userController = new $UserController(); // Intância controlador de usuário
$dashboardController = new $DashboardController(); //Instância controlador de dashboard

//Coleta a ação de URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalascência nula (??) para definir 'login se 'action' não estiver presente

switch($action){
    case 'login': 
        $authController->login(); // chama o método de login do controlador de autenticação
}



?>