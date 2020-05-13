<?php

  require_once("config.php");

  // $user = new Usuario();
  // $user->loadById(2);
  // echo $user;

  // $lista = Usuario::getList();
  // echo json_encode($lista);

  // $busca = Usuario::search("ste");
  // echo json_encode($busca);

  $usuario = new Usuario();
  $usuario->login("strown1", "12qw34er");
  echo $usuario;

?>