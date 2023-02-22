<?php
    namespace Projeto\FaxiLover\DAO;

    require_once("Conexao.php");

    class Cadastrar {

        public function inserir(
            Conexao $conexao, 
            float $cpf,
            string $titulo, 
            string $descricao,
            string $logradouro,
            int $numero,
            string $bairro,
            string $cidade,
            float $valor,
            string $caminho)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into anuncio (cod, cpf, titulo, descricao, rua, numero, bairro, cidade, valor, imagem) 
                values ('', '$cpf', '$titulo', '$descricao', '$logradouro', '$numero', '$bairro', '$cidade', '$valor', '$caminho')";
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cadastrar
    }
?>