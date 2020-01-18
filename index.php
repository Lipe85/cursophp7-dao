<?php

	require_once("config.php");

// Carrega um usuário
//	$root = new Usuario();
//	$root->loadById(1);
//	echo $root;

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_ecode($lista);

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário validando pelo login e senha
//$usuario = new Usuario();
//$usuario->login("joao", "12345");

//echo $usuario;

//Insere um usuário
$aluno = new Usuario("aluno", "@luno");

$aluno->insert();

echo $aluno;

?>