<?php
    namespace Projeto\FaxiLover\Tela;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Cadastrar.php");

    use Projeto\FaxiLover\DAO\Conexao;
    use Projeto\FaxiLover\DAO\Cadastrar;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Anúncio</title>
    <link rel="stylesheet" href="../css/styleTelaCriarAnuncio.css">
</head>
    <body>
        <header id="navegacao">   
            <img id="logo" src="../imagens/iconeSite.png" alt="Icone do Site"> 
            <nav>
                <ul class="navLink">
                    <li><a href="#"><b>Como funciona?</b></a></li>
                    <li><a href="#"><b>Quem Somos?</b></a></li>
                    <li><a href="#"><b>Cadastre-se</b></a></li>
                    <li><a href="#"><b>Login</b></a></li>
                </ul>
            </nav>
        </header>

        <p>ATENÇÃO! Para salvar o anúncio com uma imagem você deve clicar em "Salvar imagem" antes da opção "Cadastrar Anúncio"</p>

        <form id="CadastrarAnuncio" method="POST" enctype="multipart/form-data">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" required>

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" required>

            <label for="logradouro">Rua</label>
            <input type="text" name="logradouro" id="logradouro" required>

            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" required>

            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" required>

            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" required>

            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" placeholder="100.00" required>

            <label for="image">Selecione uma imagem</label>
            <input type="file" name="image"  accept=".png, .jpg" required>

            <button type=submit name="submit">Cadastrar</button>

            <?php
                if(isset($_POST['submit'])) {
                    $caminho = "";
                    $conexao = new Conexao();
                    $insert  = new Cadastrar();

                    $nome       = $_FILES['image']['name'];
                    $tmp        = $_FILES['image']['tmp_name'];
                    $tamanho    = $_FILES['image']['size'];
                    $errors     = $_FILES['image']['error'];

                    $imagemTipo = explode('.', $nome);
                    $imagemTipoNew = strtolower(end($imagemTipo));

                    if($errors === 0) {
                        if($tamanho < 4000000) {
                            $novoNome = uniqid('', true).".".$imagemTipoNew;
                            $caminho = 'uploads/'.$novoNome;
                            move_uploaded_file($tmp, $caminho);
                        } else {
                            echo "Imagem grande demais!";
                        }
                    } else {
                        echo "Houve um erro!";
                    }
                    echo $insert->inserir($conexao, '123456789', $_POST['titulo'], $_POST['descricao'], $_POST['logradouro'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['valor'], $caminho);
                } 
            ?>
        </form>
    </body>
</html>