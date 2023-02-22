<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="../css/styleTelaVagas.css">
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
        <div id="filtro">
            <h4>Filtre por salário</h4>

            <form>
                <input type="radio" id="1" name="valor">
                <label for="1">De 0 a R$ 100,00</label>

                <input type="radio" id="2" name="valor">
                <label for="2">De R$ 100,00 a R$ 200,00</label>

                <input type="radio" id="3" name="valor">
                <label for="3">De R$ 200,00 a R$ 300,00</label>

                <input type="radio" id="4" name="valor">
                <label for="4">De R$ 300,00 a R$ 400,00</label>
            </form>
        </div>
        <div class="bloco">
            <div class="card">
                <div class="info">
                    <h3 class="titulo">Titulo Aqui</h3>
                    <p class="descricao">Descrição Aqui</p>
                    <p class="logradouro">Rua Aqui</p>
                    <p class="numero">Numero Aqui</p>
                    <p class="bairro">Bairro Aqui</p>
                    <p class="cidade">Cidade Aqui</p>
                </div>
                <div>
                    <button>Tenho Interesse</button>
                </div>
            </div>
        </div>
    </body>
</html>