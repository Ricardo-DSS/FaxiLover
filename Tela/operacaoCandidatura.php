<?php
    namespace Projeto\FaxiLover\Tela;
    require_once("../DAO/Conexao.php");
    use Projeto\FaxiLover\DAO\Conexao;
    
    if(isset($_POST['linha'])){
        try {
            $conexao = new Conexao();
            $conn   = $conexao->conectar();
            $codigoVaga = $_POST['linha'];
            $sql2    = "insert into candidatura (codigoCandidatura, codigoVaga, nome, telefone) values ('', '$codigoVaga', 'Andressa', '11970707070')";
            $result2 = mysqli_query($conn,$sql2);
            if($result2){
                echo "Resgistrado";
            } else {
                echo "Não registrado";
            }
        } catch(Except $erro) {
            echo $erro;
        }
    }
?>