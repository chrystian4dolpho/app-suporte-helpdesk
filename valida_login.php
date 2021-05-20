<?php
    //por enquanto será usado um array estatico contento um usuario admin e um user
    $app_users = array(
        array(
            "email" => "adm@teste.com",
            "senha" => "123456"
        ),
        array(
            "email" => "user@teste.com",
            "senha" => "abcdef"
        )
    );

    //script responsável pela autenticação de usuário
    session_start();
    $usuarioAutenticado = false;

    foreach($app_users as $user){
        if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
            $usuarioAutenticado = true;
        }
    };

    if($usuarioAutenticado){
        $_SESSION["autenticacao"] = true;
        header("Location: ./home.php");
    }else{
        //redirecionando ao index
        $_SESSION["autenticacao"] = false;
        header("Location: ./index.php?login=erro");
    };

?>