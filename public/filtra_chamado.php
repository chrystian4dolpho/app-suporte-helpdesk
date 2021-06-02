<?php
    $arquivo = fopen('../app/chamado.txt', 'r');

    $dadosChamados = array();

    while(!feof($arquivo)){

        $registro = fgets($arquivo);
        $chamado = explode('#', $registro);
        
        if(count($chamado) < 4){
            continue;
        }

        if($_SESSION['perfil_id'] == 'adm'){
            $dadosChamados[] = $chamado;
            continue;
        }

        if($_SESSION['id'] == $chamado[0]){
            $dadosChamados[] = $chamado;
        }

    }

    fclose($arquivo);
?>