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

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="image">Selecione uma imagem</label>
            <input type="file" name="image"  accept=".png, .jpg">
            <button type=submit name="submit">Salvar</button>
        </form>

        <p>ATENÇÃO! Para salvar o anúncio com uma imagem você deve clicar em "Salvar imagem" antes da opção "Cadastrar Anúncio"</p>

        <form id="CadastrarAnuncio" method="POST">
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
            <input type="text" name="cidade" id="cidade" placeholder="100.00" required>

            <input type="submit" value="Cadastrar Anúncio">
        </form>
    </body>
</html>