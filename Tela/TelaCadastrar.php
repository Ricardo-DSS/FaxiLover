<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/styleTelaCadastrar.css">
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
        <div id="blocoCadastrar">
            <h3>Cadastrar</h3>

            <div id="formulario">
                <form method="POST">
                    <label for="tNome">Nome: </label>
                    <input type="text" id="tNome" name="tNome"><br>
    
                    <label for="tCPF">CPF: </label>
                    <input type="text" id="tCPF" name="tCPF"><br>
    
                    <label for="tDataNascimento">Data de Nascimento: </label>
                    <input type="date" id="tDataNascimento" name="tDataNascimento"><br>
    
                    <label for="tRua">Rua: </label>
                    <input type="text" name="tRua" id="tRua"><br>
    
                    <label for="tNumero">Numero: </label>
                    <input type="number" name="tNumero" id="tNumero"><br>
    
                    <label for="tBairro">Bairro: </label>
                    <input type="text" name="tBairro" id="tBairro"><br>
    
                    <label for="tCidade">Cidade: </label>
                    <input type="text" name="tCidade" id="tCidade"><br>
    
                    <label for="tWhats">WhatsApp: </label>
                    <input type="tel" name="tWhats" id="tWhats" placeholder="(11) 941272121"><br>
    
                    <label for="tEmail">E-mail: </label>
                    <input type="email" name="tEmail" id="tEmail"><br>
    
                    <label for="tSenha">Senha: </label>
                    <input type="password" name="tSenha" id="tSenha">
                    
                    <div class="btnRadio">
                        <input type="radio" name="tOpacao" id="tOpcao1" value="1">
                        <label for="tOpcao1">Sou prestador de Servi??o</label><br>
                        <input type="radio" name="tOpacao" id="tOpcao2" value="2">
                        <label for="tOpcao2">Sou contratante</label>
                    </div>

                    <input type="submit" value="Cadastrar">
                </form>
            </div>
        </div>
    </body>
</html>