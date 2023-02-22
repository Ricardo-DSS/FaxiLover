<?php
    require_once("uploadScript.php");
    class BancoDados{
        $up = $_GET['$path'];
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

        public function cadastrar(){
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $rua = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $valor = $_POST['valor'];
            $imagem = $up;

            $sql = "insert into anuncio ('', '123456789', '$titulo', '$descricao', '$rua', '$numero', '$bairro', '$cidade', '$valor', '$imagem')";

        }
    }
?>