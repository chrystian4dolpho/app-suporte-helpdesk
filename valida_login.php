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
    $usuarioAutenticado = false;

    foreach($app_users as $user){
        if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
            $usuarioAutenticado = true;
        }
    };

    if($usuarioAutenticado){
        echo "Usuário autenticado";
    }else{
        //redirecionando ao index
        header("Location: ./index.php?loguin=");
    };

?>