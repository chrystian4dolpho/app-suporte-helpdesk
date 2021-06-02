<?php
  session_start();

    //tratando possiveis inserções do caractere # pois a usarei pra separar os dados no texto
   $titulo = str_replace('#', '-', $_POST['titulo']);
   $categoria = str_replace('#', '-', $_POST['categoria']);
   $descricao = str_replace('#', '-', $_POST['descricao']);

   $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

     //abrindo arquivo
    $arquivo = fopen('../app/chamado.txt', 'a');

    //inserindo string com os dados
    fwrite($arquivo, $texto);

    //fechando arquivo
    fclose($arquivo);

    //redirecionamento
    header('Location: ./abrir_chamado.php?chamado=registrado');

?>