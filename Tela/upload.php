<?php
    if(isset($_POST['submit'])) {

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
                echo "Imagem salva!";
            } else {
                echo "Imagem grande demais!";
            }
        } else {
            echo "Houve um erro!";
        }

    }
?>