<?php

  require_once("config.php");

  // $user = new Usuario();
  // $user->loadById(2);
  // echo $user;

  // $lista = Usuario::getList();
  // echo json_encode($lista);

  // $busca = Usuario::search("ste");
  // echo json_encode($busca);

  // $usuario = new Usuario();
  // $usuario->login("strown1", "12qw34er");
  // echo $usuario;

  // $aluno = new Usuario("zoi", "sumiunolual");
  // $aluno->insert();
  // echo $aluno;

    $usuario = new Usuario();
    $usuario->loadById(3);
    $usuario->update("StevenPaiao", "9991");
    echo $usuario;

?>