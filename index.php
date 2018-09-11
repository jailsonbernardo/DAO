<?php

require_once './config.php';

/*
 * $usuarios = $sql->select("SELECT * FROM tb_usuarios");
 * echo json_encode($usuarios);
 * 
 * $root = new Usuario();
 * $root->loadById(3);
 * echo $root;
 * 
//carrega lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login

$search = Usuario::search("f");

echo json_encode($search);

//CARREGA USUARIO USANDO O LOGIN E SENHA

$usuario = new Usuario();
$usuario->login("Jailson", "12345");

echo $usuario;


$aluno = new Usuario("aluno","aluno");

$aluno->insert();

echo $aluno;

 */

//atualizando um novo usuario

$usuario = new Usuario();
$usuario->loadById(18);
$usuario->update("professor", "!@&*D");

echo $usuario;