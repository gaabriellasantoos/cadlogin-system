<?php
class DashboardController
{
    //inicia uma sessao para verificar se o usuario esta autenticado
    public function index(){
        session_start();
        
        if(!isset($_SESSION['usuario_id'])){
            
        }

    }
}

?>