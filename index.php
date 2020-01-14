<?php

	require_once("config.php");

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_cliente");

	echo json_encode($usuarios);

	

	
?>