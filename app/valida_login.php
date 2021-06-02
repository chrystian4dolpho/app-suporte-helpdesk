<?php
    //por enquanto será usado um array estatico contento usuarios admin e user
    $app_users = array(
        array(
            "id" => 1,
            "email" => "adm@teste.com",
            "senha" => "123456",
            "perfil_tipo" => "adm"
        ),
        array(
            "id" => 2,
            "email" => "luffy@teste.com",
            "senha" => "123456",
            "perfil_tipo" => "user"
        ),
        array(
            "id" => 3,
            "email" => "zoro@teste.com",
            "senha" => "123456",
            "perfil_tipo" => "user"
        ),
        array(
            "id" => 4,
            "email" => "sanji@teste.com",
            "senha" => "123456",
            "perfil_tipo" => "user"
        )
    );

    //script responsável pela autenticação de usuário
    session_start();
    $usuarioAutenticado = false;
    $usuarioID = null;
    $perfil_id = null;

    foreach($app_users as $user){
        if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
            $usuarioAutenticado = true;
            $usuarioID = $user["id"];
            $perfil_id = $user["perfil_tipo"];
        }
    };

    if($usuarioAutenticado){
        $_SESSION["autenticacao"] = true;
        $_SESSION["id"] = $usuarioID;
        $_SESSION["perfil_id"] = $perfil_id;
        header("Location: ./home.php");
    }else{
        //redirecionando ao index
        $_SESSION["autenticacao"] = false;
        header("Location: ./index.php?login=erro");
    };

?>