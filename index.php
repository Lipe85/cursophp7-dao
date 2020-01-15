<?php

	require_once("config.php");

	$root = new Usuario();

	$root->loadById(1);

	echo "teste";
	//var_dump($root);

		
?>