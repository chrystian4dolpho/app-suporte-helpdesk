<?php
  //check de autenticação
  session_start();
  if(!isset($_SESSION["autenticacao"]) || !$_SESSION["autenticacao"]){
    //redirecionando se a sessão não estiver autenticada
    header("Location: ../index.php?login=proibido");
  };
?>