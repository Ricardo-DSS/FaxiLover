<?php
    namespace Projeto\FaxiLover\DAO;
    
    class Conexao{ 
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','faxi');
                if($conn){
                    return $conn;
                } 
            } 
            catch(Except $erro){
                echo $erro;
            }
        }//fim conectar
    }
?>